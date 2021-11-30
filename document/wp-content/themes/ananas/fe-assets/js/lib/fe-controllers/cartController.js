"use strict";function ownKeys(a,b){var c=Object.keys(a);if(Object.getOwnPropertySymbols){var d=Object.getOwnPropertySymbols(a);b&&(d=d.filter(function(b){return Object.getOwnPropertyDescriptor(a,b).enumerable})),c.push.apply(c,d)}return c}function _objectSpread(a){for(var b,c=1;c<arguments.length;c++)b=null==arguments[c]?{}:arguments[c],c%2?ownKeys(Object(b),!0).forEach(function(c){_defineProperty(a,c,b[c])}):Object.getOwnPropertyDescriptors?Object.defineProperties(a,Object.getOwnPropertyDescriptors(b)):ownKeys(Object(b)).forEach(function(c){Object.defineProperty(a,c,Object.getOwnPropertyDescriptor(b,c))});return a}function _defineProperty(a,b,c){return b in a?Object.defineProperty(a,b,{value:c,enumerable:!0,configurable:!0,writable:!0}):a[b]=c,a}function asyncGeneratorStep(a,b,c,d,e,f,g){try{var h=a[f](g),i=h.value}catch(a){return void c(a)}h.done?b(i):Promise.resolve(i).then(d,e)}function _asyncToGenerator(a){return function(){var b=this,c=arguments;return new Promise(function(d,e){function f(a){asyncGeneratorStep(h,d,e,f,g,"next",a)}function g(a){asyncGeneratorStep(h,d,e,f,g,"throw",a)}var h=a.apply(b,c);f(void 0)})}}(function(a,b){function c(){return d.apply(this,arguments)}function d(){return d=_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function b(){var c,d,e,f,g,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w=arguments;return regeneratorRuntime.wrap(function(b){for(;;)switch(b.prev=b.next){case 0:if(c=0<w.length&&void 0!==w[0]?w[0]:null,d=1<w.length&&void 0!==w[1]?w[1]:null,e=2<w.length&&void 0!==w[2]?w[2]:null,c){b.next=21;break}return f=a(".undo-all"),g=a(".allCart"),i=a(".totalPriceOfCart"),j=function(){for(var b=g.find("div.button").map(function(){var b=a(this);return{productId:b.data("id"),size:b.data("size"),quantity:b.data("quantity"),no:b.data("no")}}),c=[],d=g.find("div.button"),e=0;e<d.length;e++){var f=a(d[e]),h={id:f.data("id"),size:f.data("size"),quantity:f.data("quantity"),no:f.data("no")};c.push(h)}return c},g.css("display","none"),i.text("0 VN\u0110"),a(".items").empty(),a(".tright").text("0 VN\u0110"),f.css("display","block"),k=g.data("cart"),l={action:"deleteCart",deleteAll:!0,idCart:k},b.next=17,callAjax("POST",l);case 17:reCalculateTotalPriceOfCart(0,0,0),f.click(/*#__PURE__*/function(){var b=_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function b(c){var d,e,f,h;return regeneratorRuntime.wrap(function(b){for(;;)switch(b.prev=b.next){case 0:return d=c.currentTarget,g.css("display","block"),a(d).css("display","none"),e={action:"undoMultiProduct",products:j()},b.next=6,callAjax("POST",e);case 6:f=b.sent,h={data:f.html},renderForCartList(h),updateMiniCart(f);case 10:case"end":return b.stop();}},b)}));return function(){return b.apply(this,arguments)}}()),b.next=38;break;case 21:return m=getDivProduct(c,d),n=m.find(".product-info"),o=m.find(".undo-product"),p=m.find(".is-mini-cart"),q={action:"deleteCart",no:e,idProduct:c,size:d},b.next=28,callAjax("POST",q);case 28:r=b.sent,s=r.totalPayment,t=r.totalDiscount,u=r.priceNotApllyPromotion,reCalculateTotalPriceOfCart(s,u,t),p.length&&(v=p.parent(),v.css("display","none").next().css("display","none")),n.css("display","none"),o.css("display","block"),o.unbind("click"),o.click(/*#__PURE__*/_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function a(){var b;return regeneratorRuntime.wrap(function(a){for(;;)switch(a.prev=a.next){case 0:return b={productId:c,size:m.find(".selectSize option:selected").val(),quantity:m.find(".selectQuantity option:selected").val()},a.next=3,h(b);case 3:n.css("display","block"),o.css("display","none");case 5:case"end":return a.stop();}},a)})));case 38:case"end":return b.stop();}},b)})),d.apply(this,arguments)}function f(){return g.apply(this,arguments)}/** Undo last product has been deleted */function g(){return g=_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function b(c){var d,e,f,g,h,i,j,k,l,m,n=arguments;return regeneratorRuntime.wrap(function(b){for(;;)switch(b.prev=b.next){case 0:return d=1<n.length&&void 0!==n[1]?n[1]:null,e=2<n.length&&void 0!==n[2]?n[2]:null,f=!!(3<n.length&&void 0!==n[3])&&n[3],g=!!(4<n.length&&void 0!==n[4])&&n[4],h=!!(5<n.length&&void 0!==n[5])&&n[5],i=a("#_wpnonce").val(),b.next=8,callAjax("GET",{action:"ajaxGetProductDetail",idProduct:c,size:e,quantity:d});case 8:return j=b.sent,f||(k={name:j.name,price:j.price,sku:j.sku,color:j.colorName,quantity:d,size:e,category:j.category},l=toProductObject(k),fbTrackingAddToCart(l),ggTrackingAddToCart(l)),m={action:"addProductToCart",idProduct:c,quantity:d,size:e,addProductRelated:g,isButtonPaid:h,token:i},b.next=13,callAjax("POST",m);case 13:return b.abrupt("return",b.sent);case 14:case"end":return b.stop();}},b)})),g.apply(this,arguments)}function h(){return i.apply(this,arguments)}// Function to move product to wish list
function i(){return i=_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function a(){var b,c,d,e,g,h,i,j,k=arguments;return regeneratorRuntime.wrap(function(a){for(;;)switch(a.prev=a.next){case 0:if(b=0<k.length&&void 0!==k[0]?k[0]:null,!b){a.next=13;break}return c=b.productId,d=b.size,e=b.quantity,a.next=5,f(c,e,d,!0);case 5:g=a.sent,h=g.totalPayment,i=g.totalDiscount,j=g.priceNotApllyPromotion,reCalculateTotalPriceOfCart(h,j,i),updateMiniCart(g),a.next=13;break;case 13:case"end":return a.stop();}},a)})),i.apply(this,arguments)}function j(){return k.apply(this,arguments)}// Click to add product to cart
function k(){return k=_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function b(c){var d,e,f,g,h,i=arguments;return regeneratorRuntime.wrap(function(b){for(;;)switch(b.prev=b.next){case 0:return d=1<i.length&&void 0!==i[1]?i[1]:0,e=a(".shareCart"),f=!!e.length&&e.val(),g={action:"transferCartToWishList",isCartToWishList:!0,listProduct:c,isPageWishList:d},d&&f&&(g.shareCart=f),b.next=7,callAjax("POST",g);case 7:return h=b.sent,b.abrupt("return",h);case 9:case"end":return b.stop();}},b)})),k.apply(this,arguments)}// Click to clear all product on cart
function l(){return m.apply(this,arguments)}// Click to clear product be chosen
function m(){return m=_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function a(){return regeneratorRuntime.wrap(function(a){for(;;)switch(a.prev=a.next){case 0:return a.next=2,ggTrackingRemove(!0);case 2:return a.next=4,c();case 4:updateValueForCountProduct("clearAll");case 5:case"end":return a.stop();}},a)})),m.apply(this,arguments)}function n(){return o.apply(this,arguments)}// Click to undo last product
function o(){return o=_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function b(d){var e,f,g,h,i;return regeneratorRuntime.wrap(function(b){for(;;)switch(b.prev=b.next){case 0:return e=d.currentTarget,f=a(e).parent().data("id"),g=a(e).parent().data("size"),h=a(e).parent().data("no"),i=a(e).parent().data("quantity"),b.next=7,ggTrackingRemove(!1,[f],[i]);case 7:return b.next=9,c(f,g,h);case 9:updateValueForCountProduct("remove",i);case 10:case"end":return b.stop();}},b)})),o.apply(this,arguments)}// Click to move product to wish list
function p(){return q.apply(this,arguments)}function q(){return q=_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function b(c){var d,e,f,g,h;return regeneratorRuntime.wrap(function(b){for(;;)switch(b.prev=b.next){case 0:if(d=c.currentTarget,e=a(d).parent().data("id"),f=a(d).parent().data("quantity"),g=a(d).parent().data("size"),!(e&&g&&f)){b.next=9;break}return h=[{idProduct:e,size:g,quantity:f}],b.next=8,j(h);case 8:a("#image-heart").src="/wp-content/themes/ananas/fe-assets/images/svg/Heart_2.svg";case 9:case"end":return b.stop();}},b)})),q.apply(this,arguments)}function r(){return s.apply(this,arguments)}function s(){return s=_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function b(c,d,e){var f,g,h,i,j,k,l,m;return regeneratorRuntime.wrap(function(b){for(;;)switch(b.prev=b.next){case 0:f=/*#__PURE__*/function(){var a=_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function a(b){var c;return regeneratorRuntime.wrap(function(a){for(;;)switch(a.prev=a.next){case 0:return c={action:"updateCart",quantity:b.quantity,idProduct:b.productId,size:b.size,no:b.productNo,newSize:b.newSize,currentSize:b.currentSize},a.next=3,callAjax("POST",c);case 3:return a.abrupt("return",a.sent);case 4:case"end":return a.stop();}},a)}));return function(){return a.apply(this,arguments)}}(),g=a(c).parents(".product-info").find("div.button"),g.attr(d,e),h=g.data("id"),i=g.data("no"),j=g.data("current-size"),k=0,l={productId:h,productNo:i},b.t0=d,b.next="data-size"===b.t0?11:"data-quantity"===b.t0?14:17;break;case 11:return k=g.data("quantity"),l=_objectSpread(_objectSpread({},l),{},{size:e,quantity:k,newSize:e,currentSize:j}),b.abrupt("break",18);case 14:return k=g.data("size"),l=_objectSpread(_objectSpread({},l),{},{quantity:e,size:k,newSize:k,currentSize:j}),b.abrupt("break",18);case 17:return b.abrupt("break",18);case 18:return b.next=20,f(l);case 20:m=b.sent,renderForCartList(m),updateMiniCart(m);case 23:case"end":return b.stop();}},b)})),s.apply(this,arguments)}function t(){return u.apply(this,arguments)}function u(){return u=_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function b(c,d,e){var f,g,h,i,j,k,l,m,n,o;return regeneratorRuntime.wrap(function(b){for(;;)switch(b.prev=b.next){case 0:f=/*#__PURE__*/function(){var a=_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function a(b){var c;return regeneratorRuntime.wrap(function(a){for(;;)switch(a.prev=a.next){case 0:return c={action:"updateWishlist",quantityNew:b.quantityNew,idProduct:b.productId,sizeNew:b.sizeNew,sizeCurrent:b.sizeCurrent,quantityCurrent:b.quantityCurrent,shareCart:b.shareCart},a.next=3,callAjax("POST",c);case 3:return a.abrupt("return",a.sent);case 4:case"end":return a.stop();}},a)}));return function(){return a.apply(this,arguments)}}(),g=a(c).parents(".block-wish-list").find("div.button"),g.attr(d,e),h=g.data("id"),i=a(c).attr("data-size-current"),j=a(c).attr("data-quantity-current"),k=0,l={productId:h,sizeCurrent:i,quantityCurrent:j},m=a(".shareCart"),n=!!m.length&&m.val(),n&&(l.shareCart=n),b.t0=d,b.next="data-size"===b.t0?14:"data-quantity"===b.t0?17:20;break;case 14:return k=g.data("quantity"),l=_objectSpread(_objectSpread({},l),{},{sizeNew:e,quantityNew:k}),b.abrupt("break",21);case 17:return k=g.data("size"),l=_objectSpread(_objectSpread({},l),{},{quantityNew:e,sizeNew:k}),b.abrupt("break",21);case 20:return b.abrupt("break",21);case 21:return b.next=23,f(l);case 23:o=b.sent,renderForWishList(o);case 25:case"end":return b.stop();}},b)})),u.apply(this,arguments)}function v(a,b){var c=2<arguments.length&&arguments[2]!==void 0?arguments[2]:null,d=3<arguments.length&&arguments[3]!==void 0?arguments[3]:null,e=getDivProduct(a,b),f=e.find(".item-notice");if("LIMITED_PRODUCTS"==c)f&&(console.log(d),f.text(d),f.parent().css("display","block"));else{var g=e.find("div.price");g&&g.removeClass("price").addClass("price-1");var h=e.find(".status");h&&(h.html("H\u1EBFt h\xE0ng"),h.removeClass("status").addClass("status-1")),f&&f.parent().css("display","block")}}function w(){return x.apply(this,arguments)}function x(){return x=_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function b(c){var d,e,f,g,h;return regeneratorRuntime.wrap(function(b){for(;;)switch(b.prev=b.next){case 0:return d=c.currentTarget,e={action:"ajaxCheckQuantityOfProduct"},b.next=4,callAjax("GET",e);case 4:f=b.sent,f.success?(ggTrackingCheckOutStep(STEP_SHIPPING_INFORMATION),location.href=a(d).attr("data-href")):(g=f.errors,h=f.errorData,g&&h&&h.forEach(function(a){var b=a.productId,c=a.productSize,d=a.message,e=a.typeProduct;v(b,c,e,d)}));case 6:case"end":return b.stop();}},b)})),x.apply(this,arguments)}function y(){return z.apply(this,arguments)}function z(){return z=_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function b(c){var d,e,g,h,i,j,k,l,m,n=arguments;return regeneratorRuntime.wrap(function(b){for(;;)switch(b.prev=b.next){case 0:return d=1<n.length&&void 0!==n[1]?n[1]:null,e=2<n.length&&void 0!==n[2]?n[2]:null,g=!!(3<n.length&&void 0!==n[3])&&n[3],h=".info-validate",i=a(h),b.next=7,f(c,d,e,!1,g);case 7:return j=b.sent,j?j.isSuccess?updateMiniCart(j,!0):!g&&(k=".info-validate",l=a(k),m=a(".quantity-error"),!m.length&&m.text()!==j.messages&&a("<div/>",{class:"row info-validate quantity-error",text:j.messages}).insertAfter(l)):console.error(),b.abrupt("return",j);case 10:case"end":return b.stop();}},b)})),z.apply(this,arguments)}function A(){return B.apply(this,arguments)}function B(){return B=_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function b(c){var d,e,f;return regeneratorRuntime.wrap(function(b){for(;;)switch(b.prev=b.next){case 0:return d=c.currentTarget,e=a(d).data("id"),b.next=4,y(e,null,null,!0);case 4:f=b.sent,f.data=f.html,renderForCartList(f);case 7:case"end":return b.stop();}},b)})),B.apply(this,arguments)}function C(){return D.apply(this,arguments)}function D(){return D=_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function b(c){var d,e,f;return regeneratorRuntime.wrap(function(b){for(;;)switch(b.prev=b.next){case 0:d=c.currentTarget,e=a(d).val(),a(".loading-filter").show(),f=a(d).attr("data-page"),b.t0=f,b.next="cart"===b.t0?7:"wish-list"===b.t0?10:13;break;case 7:return b.next=9,r(d,"data-size",e);case 9:return b.abrupt("break",15);case 10:return b.next=12,t(d,"data-size",e);case 12:return b.abrupt("break",15);case 13:return console.log("None-Size"),b.abrupt("break",15);case 15:setTimeout(function(){a(".loading-filter").hide()},3e3);case 16:case"end":return b.stop();}},b)})),D.apply(this,arguments)}function E(){return F.apply(this,arguments)}function F(){return F=_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function b(c){var d,e,f;return regeneratorRuntime.wrap(function(b){for(;;)switch(b.prev=b.next){case 0:d=c.currentTarget,e=a(d).val(),a(".loading-filter").show(),f=a(d).attr("data-page"),b.t0=f,b.next="cart"===b.t0?7:"wish-list"===b.t0?10:13;break;case 7:return b.next=9,r(d,"data-quantity",e);case 9:return b.abrupt("break",15);case 10:return b.next=12,t(d,"data-quantity",e);case 12:return b.abrupt("break",15);case 13:return console.log("None-Quantity"),b.abrupt("break",15);case 15:setTimeout(function(){a(".loading-filter").hide()},3e3);case 16:case"end":return b.stop();}},b)})),F.apply(this,arguments)}function G(){return H.apply(this,arguments)}function H(){return H=_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function b(c){var d,e,f,g,h,i;return regeneratorRuntime.wrap(function(b){for(;;)switch(b.prev=b.next){case 0:return a(".loading-filter").show(),d=c.currentTarget,e=a(d).parent().prev(),f=e.val(),g=a(".promotion-error"),h={action:"checkPromotionCode",promotionCode:f},b.next=8,callAjax("POST",h);case 8:i=b.sent,i.data=i.html,renderForCartList(i);case 11:case"end":return b.stop();}},b)})),H.apply(this,arguments)}function I(a){a.empty(),a.append("<option selected>&nbsp;</option>"),a.selectpicker("refresh")}var b=b;a("#addProductToCart").click(/*#__PURE__*/_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function b(){var c,d,e;return regeneratorRuntime.wrap(function(b){for(;;)switch(b.prev=b.next){case 0:if(c=a("#productId").val(),d=a(".quantity option:selected").val(),e=a("#pickSize").val(),!(e&&d&&c)){b.next=6;break}return b.next=6,y(c,d,e);case 6:case"end":return b.stop();}},b)}))),a("#pickOrder").on("click",/*#__PURE__*/function(){var b=_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function b(c){var d,e,g,h,i,j,k;return regeneratorRuntime.wrap(function(b){for(;;)switch(b.prev=b.next){case 0:if(d=c.currentTarget,e=a("#productId").val(),g=a(".quantity option:selected").val(),h=a("#pickSize").val(),i=a(d).data("url-cart"),j=a("#_wpnonce").val(),!(h&&g&&e&&i)){b.next=11;break}return b.next=9,f(e,g,h,!1,!1,!0);case 9:k=b.sent,k?(ggTrackingCheckOutStep(STEP_YOUR_CART),document.location=i):console.error();case 11:case"end":return b.stop();}},b)}));return function(){return b.apply(this,arguments)}}()),a(".btn-undo").click(/*#__PURE__*/_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function a(){return regeneratorRuntime.wrap(function(a){for(;;)switch(a.prev=a.next){case 0:return a.next=2,h();case 2:case"end":return a.stop();}},a)}))),a(".multipleAddLike").click(/*#__PURE__*/_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function b(){var c,d,e,f,g,h,k,l,m;return regeneratorRuntime.wrap(function(b){for(;;)switch(b.prev=b.next){case 0:for(c=a(".items"),d=c.find(".media"),e=d.length,f=[],g=a(".isPageWishList").length?1:0,h=0;h<e;h++)k=a(d[h]),l={idProduct:parseInt(k.find(".productId").next().text()),size:parseInt(k.find(".size").next().text()),quantity:parseInt(k.find(".quantity").next().text())},f.push(l);// await call ajax
return b.next=8,j(f,g);case 8:m=b.sent,g&&renderForWishList(m);case 10:case"end":return b.stop();}},b)}))),a("body").on("change","select.selectSize",/*#__PURE__*/function(){var a=_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function a(b){return regeneratorRuntime.wrap(function(a){for(;;)switch(a.prev=a.next){case 0:return a.next=2,C(b);case 2:case"end":return a.stop();}},a)}));return function(){return a.apply(this,arguments)}}()).on("change","select.selectQuantity",/*#__PURE__*/function(){var a=_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function a(b){return regeneratorRuntime.wrap(function(a){for(;;)switch(a.prev=a.next){case 0:return a.next=2,E(b);case 2:case"end":return a.stop();}},a)}));return function(){return a.apply(this,arguments)}}()).on("click",".remove-product-in-cart",/*#__PURE__*/function(){var a=_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function a(b){return regeneratorRuntime.wrap(function(a){for(;;)switch(a.prev=a.next){case 0:return a.next=2,n(b);case 2:case"end":return a.stop();}},a)}));return function(){return a.apply(this,arguments)}}()).on("click",".moveProductToWishList",/*#__PURE__*/function(){var a=_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function a(b){return regeneratorRuntime.wrap(function(a){for(;;)switch(a.prev=a.next){case 0:return a.next=2,p(b);case 2:case"end":return a.stop();}},a)}));return function(){return a.apply(this,arguments)}}()).on("click",".btn-clearAll",/*#__PURE__*/_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function a(){return regeneratorRuntime.wrap(function(a){for(;;)switch(a.prev=a.next){case 0:return a.next=2,l();case 2:case"end":return a.stop();}},a)}))).on("click",".to-checkout",/*#__PURE__*/function(){var a=_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function a(b){return regeneratorRuntime.wrap(function(a){for(;;)switch(a.prev=a.next){case 0:return a.next=2,w(b);case 2:case"end":return a.stop();}},a)}));return function(){return a.apply(this,arguments)}}()).on("click",".btn-add-product-related",/*#__PURE__*/function(){var a=_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function a(b){return regeneratorRuntime.wrap(function(a){for(;;)switch(a.prev=a.next){case 0:return a.next=2,A(b);case 2:case"end":return a.stop();}},a)}));return function(){return a.apply(this,arguments)}}()).on("click",".btn-apply",/*#__PURE__*/function(){var a=_asyncToGenerator(/*#__PURE__*/regeneratorRuntime.mark(function a(b){return regeneratorRuntime.wrap(function(a){for(;;)switch(a.prev=a.next){case 0:return a.next=2,G(b);case 2:case"end":return a.stop();}},a)}));return function(){return a.apply(this,arguments)}}()),a("#pickSize").on("change",function(){var b=a(this),c=a("#pickQuantity");jQuery.ajax({type:"post",dataType:"json",url:a(this).attr("data-action"),data:{action:"checkquanlity",productID:a(this).attr("data-productID"),size:a(this).val()},success:function success(a){if(!a.code)I(c),c.prop("disabled",!0);else if(0<a.quantity){c.prop("disabled",!1);var d=12,e=a.quantity;e<d&&(d=e),c.empty(),c.append("<option selected>&nbsp;</option>");for(var f=1;f<=d;f++)c.append("<option value=\""+f+"\">"+f+"</option>");c.selectpicker("refresh"),!1===a.isLike?b.addClass("moveProductToWishList"):b.removeClass("moveProductToWishList")}else I(c),c.prop("disabled",!0)}})})})(jQuery);