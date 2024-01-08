# Blog


## Search post




> Example request:

```bash
curl -X GET \
    -G "http://hasa.local/api/v1/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"q":"neque"}'

```

```javascript
const url = new URL(
    "http://hasa.local/api/v1/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "q": "neque"
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "error": true,
    "data": null,
    "message": "No results found, please try with different keywords."
}
```
<div id="execution-results-GETapi-v1-search" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-search"></code></pre>
</div>
<div id="execution-error-GETapi-v1-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-search"></code></pre>
</div>
<form id="form-GETapi-v1-search" data-method="GET" data-path="api/v1/search" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-search" onclick="tryItOut('GETapi-v1-search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-search" onclick="cancelTryOut('GETapi-v1-search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/search</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>q</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="q" data-endpoint="GETapi-v1-search" data-component="body" required  hidden>
<br>
The search keyword.</p>

</form>


## List posts




> Example request:

```bash
curl -X GET \
    -G "http://hasa.local/api/v1/posts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://hasa.local/api/v1/posts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "4 Expert Tips On How To Choose The Right Men’s Wallet",
            "slug": "4-expert-tips-on-how-to-choose-the-right-mens-wallet",
            "description": "You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.",
            "image": "http:\/\/hasa.local\/storage\/news\/1.jpg",
            "categories": [
                {
                    "id": 4,
                    "name": "Commercial",
                    "slug": "commercial",
                    "description": null
                }
            ],
            "tags": [
                {
                    "id": 1,
                    "name": "General",
                    "slug": "general",
                    "description": ""
                },
                {
                    "id": 2,
                    "name": "Design",
                    "slug": "design",
                    "description": ""
                },
                {
                    "id": 3,
                    "name": "Jquery",
                    "slug": "jquery",
                    "description": ""
                },
                {
                    "id": 4,
                    "name": "Branding",
                    "slug": "branding",
                    "description": ""
                },
                {
                    "id": 5,
                    "name": "Modern",
                    "slug": "modern",
                    "description": ""
                }
            ],
            "created_at": "2021-03-07T01:45:54.000000Z",
            "updated_at": "2021-03-07T01:45:54.000000Z"
        },
        {
            "id": 2,
            "name": "Sexy Clutches: How to Buy & Wear a Designer Clutch Bag",
            "slug": "sexy-clutches-how-to-buy-wear-a-designer-clutch-bag",
            "description": "There isn’t much a girl can’t handle with the right accessories. That’s why the perfect women’s clutch bag is a wardrobe essential for first dates and spring weddings.",
            "image": "http:\/\/hasa.local\/storage\/news\/2.jpg",
            "categories": [
                {
                    "id": 4,
                    "name": "Commercial",
                    "slug": "commercial",
                    "description": null
                }
            ],
            "tags": [
                {
                    "id": 1,
                    "name": "General",
                    "slug": "general",
                    "description": ""
                },
                {
                    "id": 2,
                    "name": "Design",
                    "slug": "design",
                    "description": ""
                },
                {
                    "id": 3,
                    "name": "Jquery",
                    "slug": "jquery",
                    "description": ""
                },
                {
                    "id": 4,
                    "name": "Branding",
                    "slug": "branding",
                    "description": ""
                },
                {
                    "id": 5,
                    "name": "Modern",
                    "slug": "modern",
                    "description": ""
                }
            ],
            "created_at": "2021-03-07T01:45:54.000000Z",
            "updated_at": "2021-03-07T01:45:54.000000Z"
        },
        {
            "id": 3,
            "name": "The Top 2020 Handbag Trends to Know",
            "slug": "the-top-2020-handbag-trends-to-know",
            "description": "For the handbag obsessives, let's dive into the latter a little more. This year will bring a fresh array of bag designs, and already we've gotten a sneak peek of what both spring and fall 2020 collections have to offer\/",
            "image": "http:\/\/hasa.local\/storage\/news\/3.jpg",
            "categories": [
                {
                    "id": 1,
                    "name": "Ecommerce",
                    "slug": "ecommerce",
                    "description": null
                }
            ],
            "tags": [
                {
                    "id": 1,
                    "name": "General",
                    "slug": "general",
                    "description": ""
                },
                {
                    "id": 2,
                    "name": "Design",
                    "slug": "design",
                    "description": ""
                },
                {
                    "id": 3,
                    "name": "Jquery",
                    "slug": "jquery",
                    "description": ""
                },
                {
                    "id": 4,
                    "name": "Branding",
                    "slug": "branding",
                    "description": ""
                },
                {
                    "id": 5,
                    "name": "Modern",
                    "slug": "modern",
                    "description": ""
                }
            ],
            "created_at": "2021-03-07T01:45:54.000000Z",
            "updated_at": "2021-03-07T01:45:54.000000Z"
        },
        {
            "id": 4,
            "name": "How to Match the Color of Your Handbag With an Outfit",
            "slug": "how-to-match-the-color-of-your-handbag-with-an-outfit",
            "description": "To match your multi-colored purses with your favorite outfits, simply select a complementary handbag hue that will make your outfit pop for work or the weekend.",
            "image": "http:\/\/hasa.local\/storage\/news\/4.jpg",
            "categories": [
                {
                    "id": 2,
                    "name": "Fashion",
                    "slug": "fashion",
                    "description": null
                }
            ],
            "tags": [
                {
                    "id": 1,
                    "name": "General",
                    "slug": "general",
                    "description": ""
                },
                {
                    "id": 2,
                    "name": "Design",
                    "slug": "design",
                    "description": ""
                },
                {
                    "id": 3,
                    "name": "Jquery",
                    "slug": "jquery",
                    "description": ""
                },
                {
                    "id": 4,
                    "name": "Branding",
                    "slug": "branding",
                    "description": ""
                },
                {
                    "id": 5,
                    "name": "Modern",
                    "slug": "modern",
                    "description": ""
                }
            ],
            "created_at": "2021-03-07T01:45:54.000000Z",
            "updated_at": "2021-03-07T01:45:54.000000Z"
        },
        {
            "id": 5,
            "name": "How to Care for Leather Bags",
            "slug": "how-to-care-for-leather-bags",
            "description": "A leather bag is a special, near-universally beloved object, appreciated in equal measure by bon-vivants of both sexes, who cherish the supple hand, understated burnish and heady smell that can only emanate from premium quality skin.",
            "image": "http:\/\/hasa.local\/storage\/news\/5.jpg",
            "categories": [
                {
                    "id": 2,
                    "name": "Fashion",
                    "slug": "fashion",
                    "description": null
                }
            ],
            "tags": [
                {
                    "id": 1,
                    "name": "General",
                    "slug": "general",
                    "description": ""
                },
                {
                    "id": 2,
                    "name": "Design",
                    "slug": "design",
                    "description": ""
                },
                {
                    "id": 3,
                    "name": "Jquery",
                    "slug": "jquery",
                    "description": ""
                },
                {
                    "id": 4,
                    "name": "Branding",
                    "slug": "branding",
                    "description": ""
                },
                {
                    "id": 5,
                    "name": "Modern",
                    "slug": "modern",
                    "description": ""
                }
            ],
            "created_at": "2021-03-07T01:45:54.000000Z",
            "updated_at": "2021-03-07T01:45:54.000000Z"
        },
        {
            "id": 6,
            "name": "We're Crushing Hard on Summer's 10 Biggest Bag Trends",
            "slug": "were-crushing-hard-on-summers-10-biggest-bag-trends",
            "description": "Summer is just around the corner, and there's no easier way to amp up your new-season look than with a chic, new handbag. Whether you're wearing basic sweat shorts and a tank top or a pretty floral maxi dress, a bag is an effortless way to add interest to all your summer ensembles.",
            "image": "http:\/\/hasa.local\/storage\/news\/6.jpg",
            "categories": [
                {
                    "id": 2,
                    "name": "Fashion",
                    "slug": "fashion",
                    "description": null
                }
            ],
            "tags": [
                {
                    "id": 1,
                    "name": "General",
                    "slug": "general",
                    "description": ""
                },
                {
                    "id": 2,
                    "name": "Design",
                    "slug": "design",
                    "description": ""
                },
                {
                    "id": 3,
                    "name": "Jquery",
                    "slug": "jquery",
                    "description": ""
                },
                {
                    "id": 4,
                    "name": "Branding",
                    "slug": "branding",
                    "description": ""
                },
                {
                    "id": 5,
                    "name": "Modern",
                    "slug": "modern",
                    "description": ""
                }
            ],
            "created_at": "2021-03-07T01:45:54.000000Z",
            "updated_at": "2021-03-07T01:45:54.000000Z"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/v1\/posts?page=1",
        "last": "http:\/\/localhost\/api\/v1\/posts?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v1\/posts?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v1\/posts",
        "per_page": 10,
        "to": 6,
        "total": 6
    },
    "error": false,
    "message": null
}
```
<div id="execution-results-GETapi-v1-posts" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-posts"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-posts"></code></pre>
</div>
<div id="execution-error-GETapi-v1-posts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-posts"></code></pre>
</div>
<form id="form-GETapi-v1-posts" data-method="GET" data-path="api/v1/posts" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-posts', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-posts" onclick="tryItOut('GETapi-v1-posts');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-posts" onclick="cancelTryOut('GETapi-v1-posts');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-posts" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/posts</code></b>
</p>
</form>


## List categories




> Example request:

```bash
curl -X GET \
    -G "http://hasa.local/api/v1/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://hasa.local/api/v1/categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Ecommerce",
            "slug": "ecommerce",
            "description": null,
            "children": [],
            "parent": {
                "id": null,
                "name": null,
                "slug": "",
                "description": null
            }
        },
        {
            "id": 2,
            "name": "Fashion",
            "slug": "fashion",
            "description": null,
            "children": [],
            "parent": {
                "id": null,
                "name": null,
                "slug": "",
                "description": null
            }
        },
        {
            "id": 3,
            "name": "Electronic",
            "slug": "electronic",
            "description": null,
            "children": [],
            "parent": {
                "id": null,
                "name": null,
                "slug": "",
                "description": null
            }
        },
        {
            "id": 4,
            "name": "Commercial",
            "slug": "commercial",
            "description": null,
            "children": [],
            "parent": {
                "id": null,
                "name": null,
                "slug": "",
                "description": null
            }
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/v1\/categories?page=1",
        "last": "http:\/\/localhost\/api\/v1\/categories?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v1\/categories?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v1\/categories",
        "per_page": 10,
        "to": 4,
        "total": 4
    },
    "error": false,
    "message": null
}
```
<div id="execution-results-GETapi-v1-categories" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-categories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-categories"></code></pre>
</div>
<div id="execution-error-GETapi-v1-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-categories"></code></pre>
</div>
<form id="form-GETapi-v1-categories" data-method="GET" data-path="api/v1/categories" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-categories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-categories" onclick="tryItOut('GETapi-v1-categories');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-categories" onclick="cancelTryOut('GETapi-v1-categories');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-categories" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/categories</code></b>
</p>
</form>


## List tags




> Example request:

```bash
curl -X GET \
    -G "http://hasa.local/api/v1/tags" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://hasa.local/api/v1/tags"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "General",
            "slug": "general",
            "description": ""
        },
        {
            "id": 2,
            "name": "Design",
            "slug": "design",
            "description": ""
        },
        {
            "id": 3,
            "name": "Jquery",
            "slug": "jquery",
            "description": ""
        },
        {
            "id": 4,
            "name": "Branding",
            "slug": "branding",
            "description": ""
        },
        {
            "id": 5,
            "name": "Modern",
            "slug": "modern",
            "description": ""
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/v1\/tags?page=1",
        "last": "http:\/\/localhost\/api\/v1\/tags?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v1\/tags?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v1\/tags",
        "per_page": 10,
        "to": 5,
        "total": 5
    },
    "error": false,
    "message": null
}
```
<div id="execution-results-GETapi-v1-tags" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-tags"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-tags"></code></pre>
</div>
<div id="execution-error-GETapi-v1-tags" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-tags"></code></pre>
</div>
<form id="form-GETapi-v1-tags" data-method="GET" data-path="api/v1/tags" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-tags', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-tags" onclick="tryItOut('GETapi-v1-tags');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-tags" onclick="cancelTryOut('GETapi-v1-tags');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-tags" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/tags</code></b>
</p>
</form>


## Filters posts




> Example request:

```bash
curl -X GET \
    -G "http://hasa.local/api/v1/posts/filters?page=18&per_page=9&search=sed&after=animi&author=voluptas&author_exclude=quos&before=id&exclude=hic&include=deleniti&order=velit&order_by=accusantium&categories=et&categories_exclude=quisquam&tags=laudantium&tags_exclude=placeat&featured=neque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://hasa.local/api/v1/posts/filters"
);

let params = {
    "page": "18",
    "per_page": "9",
    "search": "sed",
    "after": "animi",
    "author": "voluptas",
    "author_exclude": "quos",
    "before": "id",
    "exclude": "hic",
    "include": "deleniti",
    "order": "velit",
    "order_by": "accusantium",
    "categories": "et",
    "categories_exclude": "quisquam",
    "tags": "laudantium",
    "tags_exclude": "placeat",
    "featured": "neque",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "Order direction must be \"asc\" or \"desc\".",
    "exception": "InvalidArgumentException",
    "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
    "line": 1974,
    "trace": [
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Support\/Traits\/ForwardsCalls.php",
            "line": 23,
            "function": "orderBy",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Builder.php",
            "line": 1550,
            "function": "forwardCallTo",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/platform\/plugins\/blog\/src\/Repositories\/Eloquent\/PostRepository.php",
            "line": 283,
            "function": "__call",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "function": "getFilters",
            "class": "Botble\\Blog\\Repositories\\Eloquent\\PostRepository",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/platform\/core\/support\/src\/Repositories\/Caches\/CacheAbstractDecorator.php",
            "line": 51,
            "function": "call_user_func_array"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/platform\/plugins\/blog\/src\/Repositories\/Caches\/PostCacheDecorator.php",
            "line": 111,
            "function": "getDataIfExistCache",
            "class": "Botble\\Support\\Repositories\\Caches\\CacheAbstractDecorator",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/platform\/plugins\/blog\/src\/Http\/Controllers\/API\/PostController.php",
            "line": 128,
            "function": "getFilters",
            "class": "Botble\\Blog\\Repositories\\Caches\\PostCacheDecorator",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
            "line": 54,
            "function": "getFilters",
            "class": "Botble\\Blog\\Http\\Controllers\\API\\PostController",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 254,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 197,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 693,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/SubstituteBindings.php",
            "line": 50,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 103,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 55,
            "function": "handleRequestUsingNamedLimiter",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 695,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 670,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/platform\/core\/js-validation\/src\/RemoteValidationMiddleware.php",
            "line": 61,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Botble\\JsValidation\\RemoteValidationMiddleware",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/barryvdh\/laravel-debugbar\/src\/Middleware\/InjectDebugbar.php",
            "line": 60,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/fruitcake\/laravel-cors\/src\/HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 610,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/symfony\/console\/Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/symfony\/console\/Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/symfony\/console\/Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 92,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/mac\/workspace\/hasa\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETapi-v1-posts-filters" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-posts-filters"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-posts-filters"></code></pre>
</div>
<div id="execution-error-GETapi-v1-posts-filters" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-posts-filters"></code></pre>
</div>
<form id="form-GETapi-v1-posts-filters" data-method="GET" data-path="api/v1/posts/filters" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-posts-filters', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-posts-filters" onclick="tryItOut('GETapi-v1-posts-filters');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-posts-filters" onclick="cancelTryOut('GETapi-v1-posts-filters');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-posts-filters" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/posts/filters</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="GETapi-v1-posts-filters" data-component="query"  hidden>
<br>
Current page of the collection. Default: 1</p>
<p>
<b><code>per_page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="per_page" data-endpoint="GETapi-v1-posts-filters" data-component="query"  hidden>
<br>
Maximum number of items to be returned in result set.Default: 10</p>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-v1-posts-filters" data-component="query"  hidden>
<br>
Limit results to those matching a string.</p>
<p>
<b><code>after</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="after" data-endpoint="GETapi-v1-posts-filters" data-component="query"  hidden>
<br>
Limit response to posts published after a given ISO8601 compliant date.</p>
<p>
<b><code>author</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="author" data-endpoint="GETapi-v1-posts-filters" data-component="query"  hidden>
<br>
Limit result set to posts assigned to specific authors.</p>
<p>
<b><code>author_exclude</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="author_exclude" data-endpoint="GETapi-v1-posts-filters" data-component="query"  hidden>
<br>
Ensure result set excludes posts assigned to specific authors.</p>
<p>
<b><code>before</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="before" data-endpoint="GETapi-v1-posts-filters" data-component="query"  hidden>
<br>
Limit response to posts published before a given ISO8601 compliant date.</p>
<p>
<b><code>exclude</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="exclude" data-endpoint="GETapi-v1-posts-filters" data-component="query"  hidden>
<br>
Ensure result set excludes specific IDs.</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETapi-v1-posts-filters" data-component="query"  hidden>
<br>
Limit result set to specific IDs.</p>
<p>
<b><code>order</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="order" data-endpoint="GETapi-v1-posts-filters" data-component="query"  hidden>
<br>
Order sort attribute ascending or descending. Default: desc .One of: asc, desc</p>
<p>
<b><code>order_by</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="order_by" data-endpoint="GETapi-v1-posts-filters" data-component="query"  hidden>
<br>
Sort collection by object attribute. Default: updated_at. One of: author, created_at, updated_at, id,  slug, title</p>
<p>
<b><code>categories</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="categories" data-endpoint="GETapi-v1-posts-filters" data-component="query"  hidden>
<br>
Limit result set to all items that have the specified term assigned in the categories taxonomy.</p>
<p>
<b><code>categories_exclude</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="categories_exclude" data-endpoint="GETapi-v1-posts-filters" data-component="query"  hidden>
<br>
Limit result set to all items except those that have the specified term assigned in the categories taxonomy.</p>
<p>
<b><code>tags</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="tags" data-endpoint="GETapi-v1-posts-filters" data-component="query"  hidden>
<br>
Limit result set to all items that have the specified term assigned in the tags taxonomy.</p>
<p>
<b><code>tags_exclude</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="tags_exclude" data-endpoint="GETapi-v1-posts-filters" data-component="query"  hidden>
<br>
Limit result set to all items except those that have the specified term assigned in the tags taxonomy.</p>
<p>
<b><code>featured</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="featured" data-endpoint="GETapi-v1-posts-filters" data-component="query"  hidden>
<br>
Limit result set to items that are sticky.</p>
</form>


## Get post by slug




> Example request:

```bash
curl -X GET \
    -G "http://hasa.local/api/v1/posts/numquam?slug=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://hasa.local/api/v1/posts/numquam"
);

let params = {
    "slug": "et",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (404):

```json
{
    "error": true,
    "data": null,
    "message": "Not found"
}
```
<div id="execution-results-GETapi-v1-posts--slug-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-posts--slug-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-posts--slug-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-posts--slug-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-posts--slug-"></code></pre>
</div>
<form id="form-GETapi-v1-posts--slug-" data-method="GET" data-path="api/v1/posts/{slug}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-posts--slug-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-posts--slug-" onclick="tryItOut('GETapi-v1-posts--slug-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-posts--slug-" onclick="cancelTryOut('GETapi-v1-posts--slug-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-posts--slug-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/posts/{slug}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>slug</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="slug" data-endpoint="GETapi-v1-posts--slug-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>slug</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="slug" data-endpoint="GETapi-v1-posts--slug-" data-component="query"  hidden>
<br>
Find by slug of post.</p>
</form>


## Filters categories




> Example request:

```bash
curl -X GET \
    -G "http://hasa.local/api/v1/categories/filters" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://hasa.local/api/v1/categories/filters"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Ecommerce",
            "slug": "ecommerce",
            "description": null
        },
        {
            "id": 2,
            "name": "Fashion",
            "slug": "fashion",
            "description": null
        },
        {
            "id": 3,
            "name": "Electronic",
            "slug": "electronic",
            "description": null
        },
        {
            "id": 4,
            "name": "Commercial",
            "slug": "commercial",
            "description": null
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/v1\/categories\/filters?page=1",
        "last": "http:\/\/localhost\/api\/v1\/categories\/filters?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v1\/categories\/filters?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v1\/categories\/filters",
        "per_page": 10,
        "to": 4,
        "total": 4
    },
    "error": false,
    "message": null
}
```
<div id="execution-results-GETapi-v1-categories-filters" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-categories-filters"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-categories-filters"></code></pre>
</div>
<div id="execution-error-GETapi-v1-categories-filters" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-categories-filters"></code></pre>
</div>
<form id="form-GETapi-v1-categories-filters" data-method="GET" data-path="api/v1/categories/filters" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-categories-filters', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-categories-filters" onclick="tryItOut('GETapi-v1-categories-filters');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-categories-filters" onclick="cancelTryOut('GETapi-v1-categories-filters');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-categories-filters" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/categories/filters</code></b>
</p>
</form>


## Get category by slug




> Example request:

```bash
curl -X GET \
    -G "http://hasa.local/api/v1/categories/dolor?slug=vitae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://hasa.local/api/v1/categories/dolor"
);

let params = {
    "slug": "vitae",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (404):

```json
{
    "error": true,
    "data": null,
    "message": "Not found"
}
```
<div id="execution-results-GETapi-v1-categories--slug-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-categories--slug-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-categories--slug-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-categories--slug-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-categories--slug-"></code></pre>
</div>
<form id="form-GETapi-v1-categories--slug-" data-method="GET" data-path="api/v1/categories/{slug}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-categories--slug-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-categories--slug-" onclick="tryItOut('GETapi-v1-categories--slug-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-categories--slug-" onclick="cancelTryOut('GETapi-v1-categories--slug-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-categories--slug-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/categories/{slug}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>slug</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="slug" data-endpoint="GETapi-v1-categories--slug-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>slug</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="slug" data-endpoint="GETapi-v1-categories--slug-" data-component="query"  hidden>
<br>
Find by slug of category.</p>
</form>



