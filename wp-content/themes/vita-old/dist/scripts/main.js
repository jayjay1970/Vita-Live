!function(e){"use strict";function t(e,n){if(!(this instanceof t)){var i=new t(e,n);return i.open(),i}this.id=t.id++,this.setup(e,n),this.chainCallbacks(t._callbackChain)}if("undefined"==typeof e)return void("console"in window&&window.console.info("Too much lightness, Featherlight needs jQuery."));var n=[],i=function(t){return n=e.grep(n,function(e){return e!==t&&e.$instance.closest("body").length>0})},a=function(e,t){var n={},i=new RegExp("^"+t+"([A-Z])(.*)");for(var a in e){var o=a.match(i);if(o){var r=(o[1]+o[2].replace(/([A-Z])/g,"-$1")).toLowerCase();n[r]=e[a]}}return n},o={keyup:"onKeyUp",resize:"onResize"},r=function(n){e.each(t.opened().reverse(),function(){return n.isDefaultPrevented()||!1!==this[o[n.type]](n)?void 0:(n.preventDefault(),n.stopPropagation(),!1)})},s=function(n){if(n!==t._globalHandlerInstalled){t._globalHandlerInstalled=n;var i=e.map(o,function(e,n){return n+"."+t.prototype.namespace}).join(" ");e(window)[n?"on":"off"](i,r)}};t.prototype={constructor:t,namespace:"featherlight",targetAttr:"data-featherlight",variant:null,resetCss:!1,background:null,openTrigger:"click",closeTrigger:"click",filter:null,root:"body",openSpeed:250,closeSpeed:250,closeOnClick:"background",closeOnEsc:!0,closeIcon:"&#10005;",loading:"",persist:!1,otherClose:null,beforeOpen:e.noop,beforeContent:e.noop,beforeClose:e.noop,afterOpen:e.noop,afterContent:e.noop,afterClose:e.noop,onKeyUp:e.noop,onResize:e.noop,type:null,contentFilters:["jquery","image","html","ajax","iframe","text"],setup:function(t,n){"object"!=typeof t||t instanceof e!=0||n||(n=t,t=void 0);var i=e.extend(this,n,{target:t}),a=i.resetCss?i.namespace+"-reset":i.namespace,o=e(i.background||['<div class="'+a+"-loading "+a+'">','<div class="'+a+'-content">','<span class="'+a+"-close-icon "+i.namespace+'-close">',i.closeIcon,"</span>",'<div class="'+i.namespace+'-inner">'+i.loading+"</div>","</div>","</div>"].join("")),r="."+i.namespace+"-close"+(i.otherClose?","+i.otherClose:"");return i.$instance=o.clone().addClass(i.variant),i.$instance.on(i.closeTrigger+"."+i.namespace,function(t){var n=e(t.target);("background"===i.closeOnClick&&n.is("."+i.namespace)||"anywhere"===i.closeOnClick||n.closest(r).length)&&(i.close(t),t.preventDefault())}),this},getContent:function(){if(this.persist!==!1&&this.$content)return this.$content;var t=this,n=this.constructor.contentFilters,i=function(e){return t.$currentTarget&&t.$currentTarget.attr(e)},a=i(t.targetAttr),o=t.target||a||"",r=n[t.type];if(!r&&o in n&&(r=n[o],o=t.target&&a),o=o||i("href")||"",!r)for(var s in n)t[s]&&(r=n[s],o=t[s]);if(!r){var c=o;if(o=null,e.each(t.contentFilters,function(){return r=n[this],r.test&&(o=r.test(c)),!o&&r.regex&&c.match&&c.match(r.regex)&&(o=c),!o}),!o)return"console"in window&&window.console.error("Featherlight: no content filter found "+(c?' for "'+c+'"':" (no target specified)")),!1}return r.process.call(t,o)},setContent:function(t){var n=this;return(t.is("iframe")||e("iframe",t).length>0)&&n.$instance.addClass(n.namespace+"-iframe"),n.$instance.removeClass(n.namespace+"-loading"),n.$instance.find("."+n.namespace+"-inner").not(t).slice(1).remove().end().replaceWith(e.contains(n.$instance[0],t[0])?"":t),n.$content=t.addClass(n.namespace+"-inner"),n},open:function(t){var i=this;if(i.$instance.hide().appendTo(i.root),!(t&&t.isDefaultPrevented()||i.beforeOpen(t)===!1)){t&&t.preventDefault();var a=i.getContent();if(a)return n.push(i),s(!0),i.$instance.fadeIn(i.openSpeed),i.beforeContent(t),e.when(a).always(function(e){i.setContent(e),i.afterContent(t)}).then(i.$instance.promise()).done(function(){i.afterOpen(t)})}return i.$instance.detach(),e.Deferred().reject().promise()},close:function(t){var n=this,a=e.Deferred();return n.beforeClose(t)===!1?a.reject():(0===i(n).length&&s(!1),n.$instance.fadeOut(n.closeSpeed,function(){n.$instance.detach(),n.afterClose(t),a.resolve()})),a.promise()},chainCallbacks:function(t){for(var n in t)this[n]=e.proxy(t[n],this,e.proxy(this[n],this))}},e.extend(t,{id:0,autoBind:"[data-featherlight]",defaults:t.prototype,contentFilters:{jquery:{regex:/^[#.]\w/,test:function(t){return t instanceof e&&t},process:function(t){return this.persist!==!1?e(t):e(t).clone(!0)}},image:{regex:/\.(png|jpg|jpeg|gif|tiff|bmp|svg)(\?\S*)?$/i,process:function(t){var n=this,i=e.Deferred(),a=new Image,o=e('<img src="'+t+'" alt="" class="'+n.namespace+'-image" />');return a.onload=function(){o.naturalWidth=a.width,o.naturalHeight=a.height,i.resolve(o)},a.onerror=function(){i.reject(o)},a.src=t,i.promise()}},html:{regex:/^\s*<[\w!][^<]*>/,process:function(t){return e(t)}},ajax:{regex:/./,process:function(t){var n=e.Deferred(),i=e("<div></div>").load(t,function(e,t){"error"!==t&&n.resolve(i.contents()),n.fail()});return n.promise()}},iframe:{process:function(t){var n=new e.Deferred,i=e("<iframe/>").hide().attr("src",t).css(a(this,"iframe")).on("load",function(){n.resolve(i.show())}).appendTo(this.$instance.find("."+this.namespace+"-content"));return n.promise()}},text:{process:function(t){return e("<div>",{text:t})}}},functionAttributes:["beforeOpen","afterOpen","beforeContent","afterContent","beforeClose","afterClose"],readElementConfig:function(t,n){var i=this,a=new RegExp("^data-"+n+"-(.*)"),o={};return t&&t.attributes&&e.each(t.attributes,function(){var t=this.name.match(a);if(t){var n=this.value,r=e.camelCase(t[1]);if(e.inArray(r,i.functionAttributes)>=0)n=new Function(n);else try{n=e.parseJSON(n)}catch(s){}o[r]=n}}),o},extend:function(t,n){var i=function(){this.constructor=t};return i.prototype=this.prototype,t.prototype=new i,t.__super__=this.prototype,e.extend(t,this,n),t.defaults=t.prototype,t},attach:function(t,n,i){var a=this;"object"!=typeof n||n instanceof e!=0||i||(i=n,n=void 0),i=e.extend({},i);var o,r=i.namespace||a.defaults.namespace,s=e.extend({},a.defaults,a.readElementConfig(t[0],r),i);return t.on(s.openTrigger+"."+s.namespace,s.filter,function(r){var c=e.extend({$source:t,$currentTarget:e(this)},a.readElementConfig(t[0],s.namespace),a.readElementConfig(this,s.namespace),i),l=o||e(this).data("featherlight-persisted")||new a(n,c);"shared"===l.persist?o=l:l.persist!==!1&&e(this).data("featherlight-persisted",l),c.$currentTarget.blur(),l.open(r)}),t},current:function(){var e=this.opened();return e[e.length-1]||null},opened:function(){var t=this;return i(),e.grep(n,function(e){return e instanceof t})},close:function(e){var t=this.current();return t?t.close(e):void 0},_onReady:function(){var t=this;t.autoBind&&(e(t.autoBind).each(function(){t.attach(e(this))}),e(document).on("click",t.autoBind,function(n){n.isDefaultPrevented()||"featherlight"===n.namespace||(n.preventDefault(),t.attach(e(n.currentTarget)),e(n.target).trigger("click.featherlight"))}))},_callbackChain:{onKeyUp:function(t,n){return 27===n.keyCode?(this.closeOnEsc&&e.featherlight.close(n),!1):t(n)},onResize:function(e,t){if(this.$content.naturalWidth){var n=this.$content.naturalWidth,i=this.$content.naturalHeight;this.$content.css("width","").css("height","");var a=Math.max(n/parseInt(this.$content.parent().css("width"),10),i/parseInt(this.$content.parent().css("height"),10));a>1&&this.$content.css("width",""+n/a+"px").css("height",""+i/a+"px")}return e(t)},afterContent:function(e,t){var n=e(t);return this.onResize(t),n}}}),e.featherlight=t,e.fn.featherlight=function(e,n){return t.attach(this,e,n)},e(document).ready(function(){t._onReady()})}(jQuery),!function(e){"use strict";function t(n,i){if(!(this instanceof t)){var a=new t(e.extend({$source:n,$currentTarget:n.first()},i));return a.open(),a}e.featherlight.apply(this,arguments),this.chainCallbacks(s)}var n=function(e){window.console&&window.console.warn&&window.console.warn("FeatherlightGallery: "+e)};if("undefined"==typeof e)return n("Too much lightness, Featherlight needs jQuery.");if(!e.featherlight)return n("Load the featherlight plugin before the gallery plugin");var i="ontouchstart"in window||window.DocumentTouch&&document instanceof DocumentTouch,a=e.event&&e.event.special.swipeleft&&e,o=window.Hammer&&function(e){var t=new window.Hammer.Manager(e[0]);return t.add(new window.Hammer.Swipe),t},r=i&&(a||o);i&&!r&&n("No compatible swipe library detected; one must be included before featherlightGallery for swipe motions to navigate the galleries.");var s={afterClose:function(e,t){var n=this;return n.$instance.off("next."+n.namespace+" previous."+n.namespace),n._swiper&&(n._swiper.off("swipeleft",n._swipeleft).off("swiperight",n._swiperight),n._swiper=null),e(t)},beforeOpen:function(e,t){var n=this;return n.$instance.on("next."+n.namespace+" previous."+n.namespace,function(e){var t="next"===e.type?1:-1;n.navigateTo(n.currentNavigation()+t)}),r?n._swiper=r(n.$instance).on("swipeleft",n._swipeleft=function(){n.$instance.trigger("next")}).on("swiperight",n._swiperight=function(){n.$instance.trigger("previous")}):n.$instance.find("."+n.namespace+"-content").append(n.createNavigation("previous")).append(n.createNavigation("next")),e(t)},onKeyUp:function(e,t){var n={37:"previous",39:"next"}[t.keyCode];return n?(this.$instance.trigger(n),!1):e(t)}};e.featherlight.extend(t,{autoBind:"[data-featherlight-gallery]"}),e.extend(t.prototype,{previousIcon:"&#9664;",nextIcon:"&#9654;",galleryFadeIn:100,galleryFadeOut:300,slides:function(){return this.filter?this.$source.find(this.filter):this.$source},images:function(){return n("images is deprecated, please use slides instead"),this.slides()},currentNavigation:function(){return this.slides().index(this.$currentTarget)},navigateTo:function(t){var n=this,i=n.slides(),a=i.length,o=n.$instance.find("."+n.namespace+"-inner");return t=(t%a+a)%a,n.$currentTarget=i.eq(t),n.beforeContent(),e.when(n.getContent(),o.fadeTo(n.galleryFadeOut,.2)).always(function(e){n.setContent(e),n.afterContent(),e.fadeTo(n.galleryFadeIn,1)})},createNavigation:function(t){var n=this;return e('<span title="'+t+'" class="'+this.namespace+"-"+t+'"><span>'+this[t+"Icon"]+"</span></span>").click(function(){e(this).trigger(t+"."+n.namespace)})}}),e.featherlightGallery=t,e.fn.featherlightGallery=function(e){return t.attach(this,e)},e(document).ready(function(){t._onReady()})}(jQuery),function(e){"use strict";var t={common:{init:function(){var t=document.documentElement;t.setAttribute("data-useragent",navigator.userAgent),e("a[href*=#]:not([href=#])").click(function(){if(location.pathname.replace(/^\//,"")===this.pathname.replace(/^\//,"")&&location.hostname===this.hostname){var t=e(this.hash);if(t=t.length?t:e("[name="+this.hash.slice(1)+"]"),t.length)return e("html,body").animate({scrollTop:t.offset().top-65},1e3),!1}}),e(".gallery").featherlightGallery({previousIcon:"",nextIcon:"",galleryFadeIn:300,openSpeed:300}),e(".our-promise-no-slider").owlCarousel({loop:!0,nav:!1,items:1,dots:!1,autoplay:!0,autoplayTimeout:8e3,autoplayHoverPause:!1}),e(".owl-carousel-clients").owlCarousel({loop:!0,margin:0,nav:!0,dots:!1,autoplay:!1,autoplayTimeout:6e3,autoplayHoverPause:!1,responsive:{0:{items:2},600:{items:4},1e3:{items:6},1920:{items:6}}}),window.onscroll=function(){var t=e(".menu"),n=e(".menu");t.hasClass("active")&&n.show()},e("body").addClass("js");var n=e("#menu"),i=e(".menu-link");i.bind("click touchstart",function(e){e.preventDefault(),i.toggleClass("active"),n.toggleClass("active")});var a=function(){e(".menu-link").is(":visible")?e(".toggle-link").length>0||(e(".menu-item-has-children > a").before('<span class="toggle-link"></span>'),/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)?e(".toggle-link").bind("touchstart",function(){var t=e(this);t.toggleClass("active").siblings("ul").toggleClass("active")}):e(".toggle-link").bind("click touchstart",function(){var t=e(this);t.toggleClass("active").siblings("ul").toggleClass("active")})):e(".toggle-link").empty()};a(),e(window).bind("resize",a),e(".accordion-bar").each(function(){var t=e(this);t.find(".accordion__head").on("click",function(){e(".accordion__head").removeClass("open").addClass("close"),t.find(".accordion__content").slideUp(),e(this).next().is(":visible")||(e(this).removeClass("close").addClass("open"),e(this).next().slideDown())})}),e(".answer-reveal").each(function(){var t=e(this);t.find(".answer-reveal-trigger").on("click",function(){e(".answer-reveal-trigger").removeClass("open").addClass("close"),t.find(".answer-reveal-answer").slideUp(),e(this).next().is(":visible")||(e(this).removeClass("close").addClass("open"),e(this).next().slideDown())})}),e(".slideout-trigger").click(function(){e(".slide-out-buttons").animate({width:"toggle"})})},finalize:function(){}},home:{init:function(){var t=e(".owl-carousel-sliderrrr");t.owlCarousel({onInitialize:function(){t.children().sort(function(){return Math.round(Math.random())}).each(function(){e(this).appendTo(t)})}}),e(".owl-carousel-slider").owlCarousel({loop:!0,nav:!1,items:1,video:!0,dots:!0,autoplay:!0,autoplayTimeout:6e3,autoplayHoverPause:!1}),e(".owl-carousel-claims-slider").owlCarousel({loop:!0,nav:!1,items:1,dots:!1,autoplay:!0,autoplayTimeout:8e3,autoplayHoverPause:!1})},finalize:function(){}},get_a_quote:{init:function(){e(".wpcf7-list-item").live("click",function(t){var n=e(t.target);if(!n.is("input:checkbox")){var i=e(this).find("input[type='checkbox']");i.prop("checked",!i.is(":checked"))}}),e(".wpcf7-list-item").click(function(){e(this).find('input[type="radio"]').is(":checked")?e(this).find('input[type="radio"]').attr("checked",!1):e(this).find('input[type="radio"]').attr("checked",!0)})}},about_us:{init:function(){}}},n={fire:function(e,n,i){var a,o=t;n=void 0===n?"init":n,a=""!==e,a=a&&o[e],a=a&&"function"==typeof o[e][n],a&&o[e][n](i)},loadEvents:function(){n.fire("common"),e.each(document.body.className.replace(/-/g,"_").split(/\s+/),function(e,t){n.fire(t),n.fire(t,"finalize")}),n.fire("common","finalize")}};e(document).ready(n.loadEvents)}(jQuery);
//# sourceMappingURL=main.js.map

