"use strict";function _typeof(e){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}$.noConflict(),jQuery(function(n){"https://www.weipxiu.com"!=window.location.href&&"https://www.weipxiu.com/"!=window.location.href&&n("body > .continar").css("margin-top","88px");var e=function(i,o){var n;return["webkit","moz","ms","o",""].forEach(function(e){if(!n){""===e&&(o=o.slice(0,1).toLowerCase()+o.slice(1));var t=_typeof(i[e+o]);t+""!="undefined"&&(n="function"===t?i[e+o]():i[e+o])}}),n};if("number"==typeof window.screenX)for(var t=document.querySelectorAll(".log-text img"),i=0;i<t.length;i++)t[i].addEventListener("click",function(){e(document,"FullScreen")||e(document,"IsFullScreen")?(e(document,"CancelFullScreen"),this.title=this.title.replace("退出","")):e(this,"RequestFullScreen")&&(this.title=this.title.replace("点击","点击退出"))});else alert("爷，现在都什么时代了，你还在用这么土的浏览器~~");n(".nav ul.music-nav li:not(.mod-header_music-icon,.front,.works)").click(function(){var e=n(this).find("span").eq(0).attr("data-href");location.href="/"!=e?"http://www.weipxiu.com/"+e:"http://www.weipxiu.com/"}),n("ul.friendsChain li a").before("<i class='iconfont'>&#xe64a;</i>"),setInterval(function(){n(".page-reward .page-reward-btn .tooltip-item font,.page-reward .page-reward-btn .tooltip-item a").toggleClass("s_show")},2e3),n.fn.postLike=function(){if(n(this).hasClass("done"))return!1;n(this).addClass("done");var e=n(this).data("id"),t=n(this).data("action"),i=n(this).children(".count"),o={action:"bigfa_like",um_id:e,um_action:t};return n.post("/wp-admin/admin-ajax.php",o,function(e){n(i).html(e)}),!1},n(document).on("click",".favorite",function(){n(this).postLike()}),n(".continar-left").css("transform","none");var o=document.getElementById("menu");document.oncontextmenu=function(e){e=e||event;return o.style.display="block",o.style.left=e.pageX-85+"px",o.style.top=e.pageY-24+"px",!1},document.onclick=function(){o.style.display="none"};var a=!0;n(".navto-search a").click(function(){n(".site-search.active.pc").stop(!0,!0).slideToggle(150,function(){if(n(this).is(":visible")&&1==n(".nav ul.music-nav li>p").css("opacity"));else if(n(this).is(":hidden")&&0==n(".nav ul.music-nav li>p").css("opacity"));else if(0==n(".nav ul.music-nav li>p").css("opacity"))return!1}),a=a?(n(".header").css("z-index","11"),!1):(n(".header").css("z-index","10"),!0),n(this).find("i").toggleClass("fa-search"),n(this).find("i").toggleClass("fa-remove")});var s=!0;n(".control").click(function(){s?n("#music").get(0).play():n("#music").get(0).pause(),n(this).toggleClass("hover"),s=!s}),document.getElementById("music")&&(document.getElementById("music").volume=.5),n(".header").addClass("Top"),n("#Logo").hover(function(){n("#dj li").css("WebkitAnimation","move 0.5s ease 0s 1 alternate none running"),n("#dj li").css("animation","move 0.5s ease 0s 1 alternate none running")},function(){n("#dj li").attr("style","")}),1!=localStorage.getItem("off_y")?(n(".mod-header_music-icon").removeClass("hover").attr("title","钢琴音效NO"),n(".nav ul.music-nav li > p").css("opacity","0"),localStorage.setItem("off_y",0)):(n(".mod-header_music-icon").addClass("hover").attr("title","钢琴音效OFF"),n(".nav ul.music-nav li > p").css("opacity","1"),localStorage.setItem("off_y",1)),n(".mod-header_music-icon").click(function(){clearInterval(l),1!=localStorage.getItem("off_y")?(n(this).addClass("hover"),n(this).attr("title","钢琴音效OFF"),n(".nav ul.music-nav li > p").css("opacity","1"),localStorage.setItem("off_y",1)):(n(this).removeClass("hover"),n(".nav ul.music-nav li > p").css("opacity","0"),n(this).attr("title","钢琴音效NO"),localStorage.setItem("off_y",0))});var c=null,r=null,l=null,d=n(".nav ul.music-nav li:not(.mod-header_music-icon)");function u(e){var t=n(".nav ul.music-nav li"),i=t.eq(e).attr("detaName");t.eq(e).find("audio").get(0).src="https://www.weipxiu.com/wp-content/themes/boke/music/"+i+".mp3",8!==e&&t.eq(e).addClass("active")}n(".nav ul.music-nav li:not(.mod-header_music-icon)").hover(function(e){n(this).parents(".header").css("z-index","11"),c=n(this).index();var t=n(this).attr("detaName");r=n(".nav ul.music-nav li:not(.mod-header_music-icon)").eq(c).find("audio"),1==localStorage.getItem("off_y")?(n(this).addClass("active"),r.get(0).src="https://www.weipxiu.com/wp-content/themes/boke/music/"+t+".mp3"):r.get(0).src="",e.stopPropagation()},function(){clearInterval(l),l=setInterval(function(){a&&0==n(".nav-min").eq(0).css("opacity")&&0==n(".nav-min").eq(1).css("opacity")&&(n(".header").css("z-index","10"),clearInterval(l))},1e3),n(this).removeClass("active")}),n(document).keydown(function(e){1==localStorage.getItem("off_y")&&(65==e.keyCode?u(0):83==e.keyCode?u(1):68==e.keyCode?u(2):70==e.keyCode?u(3):71==e.keyCode?u(4):72==e.keyCode?u(5):74==e.keyCode?u(6):75==e.keyCode?u(7):76==e.keyCode&&u(8))}),n(document).keyup(function(){setTimeout(function(){d.removeClass("active")},150)});var m=null;n(".front").hover(function(e){clearTimeout(m),n(".header-conter .nav-min").eq(0).css({opacity:"1",visibility:"visible",top:"49px"}),n(".header-conter .nav-min").eq(1).css({opacity:"0",visibility:"hidden",top:"70px"}),e.stopPropagation()},function(){clearTimeout(m),m=setTimeout(function(){n(".header-conter .nav-min").css({opacity:"0",visibility:"hidden",top:"70px"})},0)}),n(".works").hover(function(e){clearTimeout(m),n(".header-conter .nav-min").eq(1).css({opacity:"1",visibility:"visible",top:"49px"}),n(".header-conter .nav-min").eq(0).css({opacity:"0",visibility:"hidden",top:"70px"}),e.stopPropagation()},function(){clearTimeout(m),m=setTimeout(function(){n(".header-conter .nav-min").css({opacity:"0",visibility:"hidden",top:"70px"})},0)}),n(".aircraft").click(function(){n("body,html").animate({scrollTop:0},800),n(this).animate({bottom:"500px",opacity:"0"},1e3,function(){setTimeout(function(){n(".aircraft").css({bottom:"50px",opacity:"1"})},500)})}),n("#wuyousujian-kefuDv").hover(function(){n("#wuyousujian-kefuDv").stop().animate({right:"-100px"},500)},function(){n("#wuyousujian-kefuDv").stop().animate({right:"-196px"},500)}),n(document).scroll(function(){var e=n(document).scrollTop();500<e?n(".aircraft").css({display:"block",opacity:"1"}):n(".aircraft").css({display:"none",opacity:"0"}),e<=0?(n(".header").addClass("Top"),n(".header").removeClass("hover")):(n(".header").removeClass("Top"),n(".header").addClass("hover"))}),n(".continar .continar-left-top > span").each(function(){115<n(this).text().length&&(n(this).text(n(this).text().substring(0,115)),n(this).html(n(this).html()+"..."))});var f=!0;n(".btn_menu,.cover").on("touchmove",function(e){e.preventDefault()}),n(".btn_menu,.cover").on("touchstart",function(){n(".os-herder").get(0).classList.toggle("btn"),n(".cover").toggle(),f?n(".continar,.os-headertop").css({transform:"translateX(160px)"}):n(".continar,.os-headertop").css({transform:"translateX(0)"});n(".site-search").is(":visible")&&(n(".os-headertop .site-search").slideToggle(100),n(".xis").find("i").toggleClass("fa-search"),n(".xis").find("i").toggleClass("fa-remove"));f=!f}),n(".os-herder,.site-search").on("touchmove",function(e){e.preventDefault()}),document.addEventListener("touchstart",function(e){1<e.touches.length&&e.preventDefault()});var h,p,v,y,g=0;document.addEventListener("touchend",function(e){var t=(new Date).getTime();t-g<=300&&e.preventDefault(),g=t},!1),n(".xis").on("touchstart",function(){n(".os-headertop .site-search").slideToggle(100),n(this).find("i").toggleClass("fa-search"),n(this).find("i").toggleClass("fa-remove")}),n("html,body").width()<960&&(n(".nav-s1 > a").html("给我留言"),n(".log-text").css("width","100%"));for(i=0;i<=n(".mouseover ul li").length;i++)n(".mouseover ul li").eq(i).find("em").html(i+1);n(".text:lt(3) .new-icon").show(),n(".clearfix img").hide(),n("ul.slide-left li").on("touchstart",function(){n(this).find(".slide_slect").stop().slideToggle(),n(this).find(".iconfont_click").toggleClass("icon-xiajiantou"),n(this).find(".iconfont_click").toggleClass("icon-shangjiantou")}),n(".accordion .accordion_center ul li").hover(function(){return n(this).stop().animate({width:"340px"}).siblings("li").stop().animate({width:"166px"}),n(this).find(".slide-item").stop().fadeOut(),n(this).find(".mask").stop(!0,!0).fadeIn(),n(".accordion_center ul li .slide-item .iconfont").css("animation","arrow_move1 1s .5s infinite alternate"),!1},function(){n(this).find(".slide-item").fadeIn(),n(this).find(".mask").stop(!0,!1).fadeOut()}),n(".accordion .accordion_center").mouseleave(function(){n(".accordion .accordion_center ul li").stop().animate({width:"200px"}),n(".accordion .accordion_center ul li").find(".slide-item").fadeIn(),n(".accordion .accordion_center ul li").find(".mask").fadeOut(),n(".accordion_center ul li .slide-item .iconfont").css("animation","arrow_move 1s .5s infinite alternate")}),1200<=n(document).width()?(h=window,p=document,y=[],h.requestAnimationFrame=h.requestAnimationFrame||h.webkitRequestAnimationFrame||h.mozRequestAnimationFrame||h.oRequestAnimationFrame||h.msRequestAnimationFrame||function(e){setTimeout(e,1e3/60)},function(t){var i=p.createElement("style");i.type="text/css";try{i.appendChild(p.createTextNode(t))}catch(e){i.styleSheet.cssText=t}p.getElementsByTagName("head")[0].appendChild(i)}(".heart{width: 10px;height: 10px;position: fixed;background: #f00;transform: rotate(45deg);-webkit-transform: rotate(45deg);-moz-transform: rotate(45deg);}.heart:after,.heart:before{content: '';width: inherit;height: inherit;background: inherit;border-radius: 50%;-webkit-border-radius: 50%;-moz-border-radius: 50%;position: fixed;}.heart:after{top: -5px;}.heart:before{left: -5px;}"),v="function"==typeof h.onclick&&h.onclick,h.onclick=function(e){var t,i;v&&v(),t=e,(i=p.createElement("div")).className="heart",y.push({el:i,x:t.clientX-5,y:t.clientY-5,scale:1,alpha:1,color:"rgb("+~~(255*Math.random())+","+~~(255*Math.random())+","+~~(255*Math.random())+")"}),p.body.appendChild(i)},function e(){for(var t=0;t<y.length;t++)y[t].alpha<=0?(p.body.removeChild(y[t].el),y.splice(t,1)):(y[t].y--,y[t].scale+=.004,y[t].alpha-=.013,y[t].el.style.cssText="left:"+y[t].x+"px;top:"+y[t].y+"px;opacity:"+y[t].alpha+";transform:scale("+y[t].scale+","+y[t].scale+") rotate(45deg);background:"+y[t].color+";z-index:99999");requestAnimationFrame(e)}()):setTimeout(function(){var e=n(".footer").detach();n("body > .continar").append(e),n(".footer").css({display:"block"})},1500),n(window).resize(function(){1200<=n(document).width()&&n(".continar,.os-headertop").css({transform:"translateX(0)"})})});