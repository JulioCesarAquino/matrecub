$(document).ready((function(){$(document).find(".colorpicker-input").length>0&&$(document).find(".colorpicker-input").colorpicker(),$(document).find(".iconpicker-input").length>0&&$(document).find(".iconpicker-input").iconpicker({selected:!0,hideOnSelect:!0}),$(document).ready((function(){$(document).on("click",".button-save-theme-options",(function(e){e.preventDefault();var n=$(e.currentTarget);if(n.addClass("button-loading"),"undefined"!=typeof CKEDITOR)for(var t in CKEDITOR.instances)CKEDITOR.instances[t].updateElement();if("undefined"!=typeof tinymce)for(var o in tinymce.editors)tinymce.editors[o].getContent&&$("#"+o).html(tinymce.editors[o].getContent());var i=n.closest("form");$.ajax({url:i.prop("action"),type:"POST",data:i.serialize(),success:function(e){n.removeClass("button-loading"),e.error?Botble.showError(e.message):(Botble.showSuccess(e.message),i.removeClass("dirty"))},error:function(e){n.removeClass("button-loading"),Botble.handleError(e)}})}))}))}));
