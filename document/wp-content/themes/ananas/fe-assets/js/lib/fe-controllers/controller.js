"use strict";function asyncGeneratorStep(a,b,c,d,e,f,g){try{var h=a[f](g),i=h.value}catch(a){return void c(a)}h.done?b(i):Promise.resolve(i).then(d,e)}function _asyncToGenerator(a){return function(){var b=this,c=arguments;return new Promise(function(d,e){function f(a){asyncGeneratorStep(h,d,e,f,g,"next",a)}function g(a){asyncGeneratorStep(h,d,e,f,g,"throw",a)}var h=a.apply(b,c);f(void 0)})}}var callAjax,findInputElementByName,findSelectElementByName,findElementByNameOfForm,scrollToElement,getDivProduct,contentProductOfMiniCart,updateValueForCountProduct,reCalculateTotalPriceOfCart,removeDivProduct,updateMiniCart,renderForWishList,renderForCartList,isMobile=992>window.innerWidth,PHONE_INVALID="Vui l\xF2ng ki\u1EC3m tra l\u1EA1i s\u1ED1 \u0111i\u1EC7n tho\u1EA1i \u0111\xE3 nh\u1EADp",EMAIL_INVALID="Vui l\xF2ng nh\u1EADp ki\u1EC3m tra c\xFA ph\xE1p email \u0111\xE3 nh\u1EADp",TYPE_DIRECT="direct",TYPE_INTERNAL="internal_card",TYPE_EXTERNAl="external_card",TYPE_MOMO="momo";(function($,window){$(document).ajaxStart(function(){$(".loading-filter").show()}).ajaxComplete(function(){setTimeout(function(){$(".loading-filter").hide()},1e3)}).on("keyup","div.has-feedback input",function(a){var b=a.currentTarget,c=$(b).attr("placeholder"),d="Vui l\xF2ng nh\u1EADp ".concat(c.toLowerCase()),e=$(b).val().length;// Get attribute placeholder and create error
//
if(e)removeError($(b));else{}}).on("change","div.location select",function(a){var b=a.currentTarget,c=$(b).val();if("0"===c){}else removeError($(b),!0)}),callAjax=/*#__PURE__*/function(){var a=_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function a(b,c){var d,e,f,g=arguments;return regeneratorRuntime.wrap(function(a){for(;;)switch(a.prev=a.next){case 0:return d=!(2<g.length&&void 0!==g[2])||g[2],e=3<g.length&&void 0!==g[3]?g[3]:null,a.next=4,$.ajax({url:e?e:ajaxUrl,type:b,data:c,global:d});case 4:return f=a.sent,a.abrupt("return",f);case 6:case"end":return a.stop();}},a)}));return function(){return a.apply(this,arguments)}}(),findInputElementByName=function(a){return $("input[name=".concat(a,"]"))},findSelectElementByName=function(a){return $("select[name=".concat(a))},findElementByNameOfForm=function(a,b){return a.find("[name=".concat(b,"]"))},scrollToElement=function(a){$("html, body").animate({scrollTop:a.offset().top},500)},getDivProduct=function(a,b){return $(".product-".concat(a,"-").concat(b))},contentProductOfMiniCart=function(a){var b="                <div class=\"media product-"+a.id+"-"+a.size+"\">\n                    <div class=\"media-left is-mini-cart\">\n                        <a href=\"#\"><img class=\"media-object\" src=\""+a.image+"\" data-holder-rendered=\"true\"></a>\n                    </div>\n                    <div class=\"media-body\">\n                        <h4 class=\"media-heading\">"+a.name+" - "+a.colorName+"</h4>\n                        <h5><span class=\"price\">"+a.priceWithPromotion+" VN\u0110</span>";return parseInt(a.discount)&&(b+="<span class=\"pvalue\">"+a.price+"</span>"),b+="</h5>\n",b+="                        <div style=\"display:none;\"><span class=\"productId\" hidden=\"hidden\"></span><span class=\"value\">"+a.id+"</span></div>\n                        <h5><span class=\"size\">Size:</span><span class=\"value\">"+a.size+"</span></h5>\n                        <h5><span class=\"quantity\">S\u1ED1 l\u01B0\u1EE3ng:</span><span class=\"value\">"+a.quantity+"</span></h5>\n                    </div>\n                </div>\n\n                <div class=\"divider\"></div>",b},updateValueForCountProduct=function(){var a=0<arguments.length&&arguments[0]!==void 0?arguments[0]:"add",b=1<arguments.length&&arguments[1]!==void 0?arguments[1]:null,c=2<arguments.length&&arguments[2]!==void 0?arguments[2]:null;b=b?parseInt(b):0,c=c?parseInt(c):0;var d=$(".countProduct"),e=parseInt($(d[0]).text()),f=e;switch(a){case"add":{f=e+b;break}case"remove":{f=e-b;break}case"clearAll":{f=0;break}case"undoAll":{f=b;break}case"update":{f=e-c,f+=b;break}default:}f=0<f?f:0,d.text(f)},reCalculateTotalPriceOfCart=function(a){var b=1<arguments.length&&arguments[1]!==void 0?arguments[1]:null,c=2<arguments.length&&arguments[2]!==void 0?arguments[2]:null,d=$(".tright"),e=$(".tempPrice");if(null!==b){var f=$(".totalPriceOfCart");// Class of total price of cart
f.text("".concat(b," VN\u0110"))}if(null!==c){var g=$(".totalDiscountOfCart");g.text("".concat(c," VN\u0110"))}d.text("".concat(a," VN\u0110")),e.text("".concat(a," VN\u0110"))},removeDivProduct=function(a,b){var c=getDivProduct(a,b);c.remove()},updateMiniCart=function(a){var b=!!(1<arguments.length&&arguments[1]!==void 0)&&arguments[1],c=$("#shop_cart"),d=$(".items"),e=$(".countProduct"),f=a.products,g=a.totalQuantity,h=a.totalPayment,i="";// Re-append all products to cart
// Update total quantity of mini cart
// Re calculate total price
f.forEach(function(a){i+=contentProductOfMiniCart(a)}),d.empty(),d.append(i),b&&(c.collapse("show"),setTimeout(function(){c.collapse("hide")},5e3)),e.text(g),reCalculateTotalPriceOfCart(h),isMobile&&$("#is-page-product-detail").length&&scrollToElement($(".navbar-menu-count"))},renderForWishList=function(result){var filterResult=$("[ data-wishlist]");filterResult.html(result.data),filterResult.find("script").each(function(i){eval($(this).text())}),"undefined"!=typeof addthis&&addthis.layers.refresh(),$(".selectpicker").selectpicker("refresh")},renderForCartList=function(result){var filterResult=$("[ data-cart-list]");filterResult.html(result.data),filterResult.find("script").each(function(i){eval($(this).text())}),$(".selectpicker").selectpicker("refresh"),0<$("#productRefCart").length&&$("#productRefCart").slick({// dots: true,
infinite:!0,autoplay:!0,autoplaySpeed:3e3,speed:300,slidesToShow:2,slidesToScroll:2,centerMode:!1,arrows:!0,responsive:[{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:2,arrows:!1}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1,arrows:!1}}]})}})(jQuery);function validateEmail(a){return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test((a+"").toLowerCase())}function addError(a){var b=1<arguments.length&&void 0!==arguments[1]?arguments[1]:null,c=!!(2<arguments.length&&void 0!==arguments[2])&&arguments[2];if(a.parent().removeClass("has-success").addClass("has-error"),!c){var d=a.attr("placeholder");b=b?b:"Vui l\xF2ng nh\u1EADp ".concat(d.toLowerCase()),a.next().addClass("glyphicon").removeClass("glyphicon-ok form-control-feedback").text(b)}}function removeError(a){var b=!!(1<arguments.length&&arguments[1]!==void 0)&&arguments[1];a.parent().removeClass("has-error").addClass("has-success"),b||a.next().empty().addClass("glyphicon glyphicon-ok form-control-feedback")}function number_format(a){var b=Math.round,c=Math.abs,d=1<arguments.length&&void 0!==arguments[1]?arguments[1]:0,e=2<arguments.length&&void 0!==arguments[2]?arguments[2]:".",f=3<arguments.length&&void 0!==arguments[3]?arguments[3]:",";a=(a+"").replace(/[^0-9+\-Ee.]/g,"");var g=isFinite(+a)?+a:0,h=isFinite(+d)?c(d):0,i="undefined"==typeof f?",":f,j="undefined"==typeof e?".":e,k="";return k=(h?function toFixedFix(a,c){var d=Math.pow,e=d(10,c);return""+(b(a*e)/e).toFixed(c)}(g,h):""+b(g)).split("."),3<k[0].length&&(k[0]=k[0].replace(/\B(?=(?:\d{3})+(?!\d))/g,i)),(k[1]||"").length<h&&(k[1]=k[1]||"",k[1]+=Array(h-k[1].length+1).join("0")),k.join(j)}function formatNumber(a){var b=1<arguments.length&&arguments[1]!==void 0?arguments[1]:".";return number_format(a,0,"",b)}function convertNumberBy(a,b){return parseFloat(a.split(b).join(""))}function removeDividerOfWishList(){var a=$(".addthis_inline_share_toolbox"),b=$(".item-divider-2"),c=$(".item-divider-3");b.remove(),c.remove(),a.remove()}function checkValueIsNumber(a){for(var b=0;b<a.length;b++)if(isNaN(parseInt(a[b])))return!1;return!0}function validatePhoneNumberWith10Characters(a){return!(10!==a.length)}function returnBooleanByExistElement(a){return!!a.length}function getValueByElement(a){return a.val()}function reParseQuantity(a){return parseInt(a)}function replacePrice(a){var b=1<arguments.length&&arguments[1]!==void 0?arguments[1]:".",c=2<arguments.length&&arguments[2]!==void 0?arguments[2]:"";return parseInt(a.toString().replace(b,c))}function toProductObject(a){var b=a.name,c=a.color,d=a.sku,e=a.price,f=a.quantity,g=a.size,h=a.coupon,i=a.category,j=a.brand;e=replacePrice(e),f=reParseQuantity(f),a.coupon||(h=""),a.category||(i="Shoes/Basas"),a.brand||(j="Ananas"),a.coupon||(h="");return{name:b,color:c,sku:d,price:e,quantity:f,size:g,coupon:h,category:i,brand:j,type:"product",currency:"VND",variant:c,id:d}}function ajaxGetProductFromCart(){return _ajaxGetProductFromCart.apply(this,arguments)}function _ajaxGetProductFromCart(){return _ajaxGetProductFromCart=_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function a(){return regeneratorRuntime.wrap(function(a){for(;;)switch(a.prev=a.next){case 0:return a.next=2,callAjax("GET",{action:"ajaxGetProductFromCart"},!1);case 2:return a.abrupt("return",a.sent);case 3:case"end":return a.stop();}},a)})),_ajaxGetProductFromCart.apply(this,arguments)}function ajaxGetOrderByCode(){return _ajaxGetOrderByCode.apply(this,arguments)}function _ajaxGetOrderByCode(){return _ajaxGetOrderByCode=_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function a(b){return regeneratorRuntime.wrap(function(a){for(;;)switch(a.prev=a.next){case 0:return a.next=2,callAjax("GET",{action:"ajaxGetOrderByCode",orderCode:b},!1);case 2:return a.abrupt("return",a.sent);case 3:case"end":return a.stop();}},a)})),_ajaxGetOrderByCode.apply(this,arguments)}