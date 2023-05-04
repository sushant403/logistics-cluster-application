/*! headroom.js v0.9.3 | URL: http://wicky.nillia.ms/headroom.js */
!function(a){a&&(a.fn.tiesticky=function(b){return this.each(function(){var c=a(this),d=c.data("tiesticky"),e="object"==typeof b&&b;e=a.extend(!0,{},TieSticky.options,e),d||(d=new TieSticky(this,e),d.init(),c.data("tiesticky",d)),"string"==typeof b&&(d[b](),"destroy"===b&&c.removeData("tiesticky"))})},a("[data-tiesticky]").each(function(){var b=a(this);b.tiesticky(b.data())}))}(window.jQuery),function(a,b){"use strict";"function"==typeof define&&define.amd?define([],b):"object"==typeof exports?module.exports=b():a.TieSticky=b()}(this,function(){"use strict";function b(a){this.callback=a,this.ticking=!1}function c(a){return a&&"undefined"!=typeof window&&(a===window||a.nodeType)}function d(a){if(arguments.length<=0)throw new Error("Missing arguments in extend function");var e,f,b=a||{};for(f=1;f<arguments.length;f++){var g=arguments[f]||{};for(e in g)"object"!=typeof b[e]||c(b[e])?b[e]=b[e]||g[e]:b[e]=d(b[e],g[e])}return b}function e(a){return a===Object(a)?a:{down:a,up:a}}function f(a,b){b=d(b,f.options),this.lastKnownScrollY=0,this.elem=a,this.tolerance=e(b.tolerance),this.classes=b.classes,this.behaviorMode=b.behaviorMode,this.scroller=b.scroller,this.initialised=!1,this.onPin=b.onPin,this.onUnpin=b.onUnpin,this.onTop=b.onTop,this.onNotTop=b.onNotTop,this.onBottom=b.onBottom,this.onNotBottom=b.onNotBottom,this.offset=b.offset,this.offset="default"!=this.behaviorMode?this.offset+this.elem.offsetHeight:this.offset,this.offset=jQuery(document.body).hasClass("admin-bar")?this.offset-32:this.offset,this.offset=jQuery(document.body).hasClass("border-layout")?this.offset-25:this.offset}var a={bind:!!function(){}.bind,classList:"classList"in document.documentElement,rAF:!!(window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame)};return window.requestAnimationFrame=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame,b.prototype={constructor:b,update:function(){this.callback&&this.callback(),this.ticking=!1},requestTick:function(){this.ticking||(requestAnimationFrame(this.rafCallback||(this.rafCallback=this.update.bind(this))),this.ticking=!0)},handleEvent:function(){this.requestTick()}},f.prototype={constructor:f,init:function(){if(f.cutsTheMustard)return"default"==this.behaviorMode&&this.elem.classList.add("defautl-behavior-mode"),this.debouncer=new b(this.update.bind(this)),this.elem.classList.add(this.classes.initial),setTimeout(this.attachEvent.bind(this),100),this},destroy:function(){var a=this.classes;this.initialised=!1,this.elem.classList.remove(a.unpinned,a.pinned,a.top,a.notTop,a.initial),this.scroller.removeEventListener("scroll",this.debouncer,!1)},attachEvent:function(){this.initialised||(this.lastKnownScrollY=this.getScrollY(),this.initialised=!0,this.scroller.addEventListener("scroll",this.debouncer,!1),this.debouncer.handleEvent())},unpin:function(){var a=this.elem.classList,b=this.classes;!a.contains(b.pinned)&&a.contains(b.unpinned)||(a.add(b.unpinned),a.remove(b.pinned),this.onUnpin&&this.onUnpin.call(this))},pin:function(){var a=this.elem.classList,b=this.classes;a.contains(b.unpinned)&&(a.remove(b.unpinned),a.add(b.pinned),this.onPin&&this.onPin.call(this))},top:function(){var a=this.elem.classList,b=this.classes;a.contains(b.top)||(a.add(b.top),a.remove(b.notTop),this.onTop&&this.onTop.call(this))},notTop:function(){var a=this.elem.classList,b=this.classes;a.contains(b.notTop)||(a.add(b.notTop),a.remove(b.top),this.onNotTop&&this.onNotTop.call(this))},bottom:function(){var a=this.elem.classList,b=this.classes;a.contains(b.bottom)||(a.add(b.bottom),a.remove(b.notBottom),this.onBottom&&this.onBottom.call(this))},notBottom:function(){var a=this.elem.classList,b=this.classes;a.contains(b.notBottom)||(a.add(b.notBottom),a.remove(b.bottom),this.onNotBottom&&this.onNotBottom.call(this))},getScrollY:function(){return void 0!==this.scroller.pageYOffset?this.scroller.pageYOffset:void 0!==this.scroller.scrollTop?this.scroller.scrollTop:(document.documentElement||document.body.parentNode||document.body).scrollTop},getViewportHeight:function(){return window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight},getElementPhysicalHeight:function(a){return Math.max(a.offsetHeight,a.clientHeight)},getScrollerPhysicalHeight:function(){return this.scroller===window||this.scroller===document.body?this.getViewportHeight():this.getElementPhysicalHeight(this.scroller)},getDocumentHeight:function(){var a=document.body,b=document.documentElement;return Math.max(a.scrollHeight,b.scrollHeight,a.offsetHeight,b.offsetHeight,a.clientHeight,b.clientHeight)},getElementHeight:function(a){return Math.max(a.scrollHeight,a.offsetHeight,a.clientHeight)},getScrollerHeight:function(){return this.scroller===window||this.scroller===document.body?this.getDocumentHeight():this.getElementHeight(this.scroller)},isOutOfBounds:function(a){var b=a<0,c=a+this.getScrollerPhysicalHeight()>this.getScrollerHeight();return b||c},toleranceExceeded:function(a,b){return Math.abs(a-this.lastKnownScrollY)>=this.tolerance[b]},shouldUnpin:function(a,b){var c=a>this.lastKnownScrollY,d=a>=this.offset;return c&&d&&b},shouldPin:function(a,b){var c=a<this.lastKnownScrollY,d=a<=this.offset;return c&&b||d},update:function(){var a=this.getScrollY(),b=a>this.lastKnownScrollY?"down":"up",c=this.toleranceExceeded(a,b);this.isOutOfBounds(a)||(a<=this.offset-this.elem.offsetHeight&&"default"!=this.behaviorMode?(this.top(),this.elem.classList.add("unpinned-no-transition")):a<=this.offset&&"default"==this.behaviorMode?this.top():a>this.offset&&(this.notTop(),"default"==this.behaviorMode&&a<this.offset+100&&jQuery(".autocomplete-suggestions").hide()),a+this.getViewportHeight()>=this.getScrollerHeight()?this.bottom():this.notBottom(),this.shouldUnpin(a,c)?this.unpin():this.shouldPin(a,c)&&(this.pin(),a>this.offset&&"default"!=this.behaviorMode&&(this.elem.classList.remove("unpinned-no-transition"),jQuery(".autocomplete-suggestions").hide())),this.lastKnownScrollY=a)}},f.options={tolerance:{up:0,down:0},offset:0,behaviorMode:"upwards",scroller:window,classes:{initial:"fixed",pinned:"fixed-pinned",unpinned:"fixed-unpinned",top:"fixed-top",notTop:"fixed-nav",bottom:"fixed-bottom",notBottom:"fixed-not-bottom"}},f.cutsTheMustard=void 0!==a&&a.rAF&&a.bind&&a.classList,f});