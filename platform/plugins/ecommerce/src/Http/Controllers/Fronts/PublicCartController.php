<?php

namespace Botble\Ecommerce\Http\Controllers\Fronts;

use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Ecommerce\Http\Requests\CartRequest;
use Botble\Ecommerce\Http\Requests\UpdateCartRequest;
use Botble\Ecommerce\Repositories\Interfaces\ProductInterface;
use Botble\Ecommerce\Services\HandleApplyPromotionsService;
use Cart;
use EcommerceHelper;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Arr;
use OrderHelper;
use Response;
use Theme;

class PublicCartController extends Controller
{
    /**
     * @var ProductInterface
     */
    protected $productRepository;

    /**
     * PublicCartController constructor.
     * @param ProductInterface $productRepository
     */
    public function __construct(ProductInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * @param CartRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function store(CartRequest $request, BaseHttpResponse $response)
    {
        if (!EcommerceHelper::isCartEnabled()) {
            return $response->setError(true);
        }

        $product = $this->productRepository->findById($request->id);

        if (!$product) {
            return $response
                ->setError()
                ->setMessage(__('This product is out of stock or not exists!'));
        }

        if ($product->variations->count() > 0 && !$product->is_variation) {
            $product = $product->defaultVariation->product;
        }

        if ($product->isOutOfStock()) {
            return $response
                ->setError()
                ->setMessage(__('Product :product is out of stock!', ['product' => $product->original_product->name]));
        }

        $maxQuantity = $product->quantity;

        if (!$product->canAddToCart($request->input('qty', 1))) {
            return $response
                ->setError()
                ->setMessage(__('Quantidade em estoque: ' . $maxQuantity . '!'));
        }

        $product->quantity -= $request->input('qty', 1);

        $outOfQuantity = false;
        foreach (Cart::instance('cart')->content() as $item) {
            if ($item->id == $product->id) {
                $originalQuantity = $product->quantity;
                $product->quantity = (int)$product->quantity - $item->qty;
                if ($product->quantity < 0) {
                    $product->quantity = 0;
                }
                if ($product->isOutOfStock()) {
                    $outOfQuantity = true;
                    break;
                }
                $product->quantity = $originalQuantity;
            }
        }

        if ($outOfQuantity) {
            return $response
                ->setError()
                ->setMessage(__('Product :product is out of stock!', ['product' => $product->original_product->name]));
        }

        $cartItems = OrderHelper::handleAddCart($product, $request);

        $token = OrderHelper::getOrderSessionToken();

        $nextUrl = route('public.checkout.information', $token);

        if (EcommerceHelper::getQuickBuyButtonTarget() == 'cart') {
            $nextUrl = route('public.cart');
        }

        if ($request->has('checkout')) {

            if ($request->ajax() && $request->wantsJson()) {
                return $response->setData(['next_url' => route('public.checkout.information', $token)]);
            }

            return $response->setNextUrl($nextUrl);
        }

        return $response
            ->setData([
                'status'      => true,
                'count'       => Cart::instance('cart')->count(),
                'total_price' => format_price(Cart::instance('cart')->rawSubTotal()),
                'content'     => $cartItems,
                'next_url'    => $nextUrl,
            ])
            ->setMessage(__('Added product :product to cart successfully!',
                ['product' => $product->original_product->name]));
    }

    /**
     * @param HandleApplyPromotionsService $applyPromotionsService
     * @return Response
     */
    public function getView(HandleApplyPromotionsService $applyPromotionsService)
    {
        if (!EcommerceHelper::isCartEnabled()) {
            abort(404);
        }

        Theme::asset()
            ->container('footer')
            ->add('ecommerce-checkout-js', 'vendor/core/plugins/ecommerce/js/checkout.js', ['jquery']);

        $promotionDiscountAmount = 0;
        $couponDiscountAmount = 0;

        if (Cart::instance('cart')->count() > 0) {
            foreach (Cart::instance('cart')->content() as $cartItem) {
                $product = $this->productRepository->findById($cartItem->id);
                if (!$product) {
                    Cart::remove($cartItem->rowId);
                }
            }

            $promotionDiscountAmount = $applyPromotionsService->execute();

            $sessionData = OrderHelper::getOrderSessionData();

            if (session()->has('applied_coupon_code')) {
                $couponDiscountAmount = Arr::get($sessionData, 'coupon_discount_amount', 0);
            }
        }

        Theme::breadcrumb()->add(__('Home'), url('/'))->add(__('Shopping Cart'), route('public.cart'));

        return Theme::scope(
            'ecommerce.cart',
            compact('promotionDiscountAmount', 'couponDiscountAmount'),
            'plugins/ecommerce::themes.cart'
        )->render();
    }

    /**
     * @param UpdateCartRequest $request
     * @param BaseHttpResponse $response
     * @return array|BaseHttpResponse|RedirectResponse
     */
    public function postUpdate(UpdateCartRequest $request, BaseHttpResponse $response)
    {
        if (!EcommerceHelper::isCartEnabled()) {
            return $response->setError(true);
        }

        if ($request->has('checkout')) {
            $token = OrderHelper::getOrderSessionToken();

            return $response->setNextUrl(route('public.checkout.information', $token));
        }
        $data = $request->input('items', []);

        $outOfQuantity = false;
        foreach ($data as $item) {
            $cartItem = Cart::instance('cart')->get($item['rowId']);
            $product = null;
            if ($cartItem) {
                $product = $this->productRepository->findById($cartItem->id);
            }
            if ($product) {
                $originalQuantity = $product->quantity;
                $product->quantity = (int)$product->quantity - Arr::get($item['values'], 'qty', 0) + 1;
                if ($product->quantity < 0) {
                    $product->quantity = 0;
                }
                if ($product->isOutOfStock()) {
                    $outOfQuantity = true;
                } else {
                    Cart::instance('cart')->update($item['rowId'], $item['values']);
                }
                $product->quantity = $originalQuantity;
            }
        }

        if ($outOfQuantity) {
            return $response
                ->setError()
                ->setData([
                    'count'       => Cart::instance('cart')->count(),
                    'total_price' => format_price(Cart::instance('cart')->rawSubTotal()),
                    'content'     => Cart::instance('cart')->content(),
                ])
                ->setMessage(__('One or all products are not enough quantity so cannot update!'));
        }

        return $response
            ->setData([
                'count'       => Cart::instance('cart')->count(),
                'total_price' => format_price(Cart::instance('cart')->rawSubTotal()),
                'content'     => Cart::instance('cart')->content(),
            ])
            ->setMessage(__('Update cart successfully!'));
    }

    /**
     * @param string $id
     * @param BaseHttpResponse $response
     * @return array|BaseHttpResponse|RedirectResponse
     */
    public function getRemove($id, BaseHttpResponse $response)
    {
        if (!EcommerceHelper::isCartEnabled()) {
            abort(404);
        }

        try {
            Cart::instance('cart')->remove($id);
        } catch (Exception $exception) {
            return $response->setError()->setMessage(__('Cart item is not existed!'));
        }

        return $response
            ->setData([
                'count'       => Cart::instance('cart')->count(),
                'total_price' => format_price(Cart::instance('cart')->rawSubTotal()),
                'content'     => Cart::instance('cart')->content(),
            ])
            ->setMessage(__('Removed item from cart successfully!'));
    }

    /**
     * @param BaseHttpResponse $response
     * @return array|BaseHttpResponse|RedirectResponse
     */
    public function getDestroy(BaseHttpResponse $response)
    {
        if (!EcommerceHelper::isCartEnabled()) {
            abort(404);
        }

        Cart::instance('cart')->destroy();

        return $response
            ->setData(Cart::instance('cart')->content())
            ->setMessage(__('Empty cart successfully!'));
    }
}
