"use strict";function _typeof(e){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}$(function(){"https://www.weipxiu.com"!=window.location.href&&"https://www.weipxiu.com/"!=window.location.href&&$("body > .continar").css("margin-top","88px"),setTimeout(function(){$("#reply-title a").is(":hidden")&&$("#reply-title").hide()});var e=function(i,n){var o;return["webkit","moz","ms","o",""].forEach(function(e){if(!o){""===e&&(n=n.slice(0,1).toLowerCase()+n.slice(1));var t=_typeof(i[e+n]);t+""!="undefined"&&(o="function"===t?i[e+n]():i[e+n])}}),o};if("number"==typeof window.screenX)for(var t=document.querySelectorAll(".log-text img"),i=0;i<t.length;i++)t[i].addEventListener("click",function(){e(document,"FullScreen")||e(document,"IsFullScreen")?(e(document,"CancelFullScreen"),this.title=this.title.replace("退出","")):e(this,"RequestFullScreen")&&(this.title=this.title.replace("点击","点击退出"))});else alert("爷，现在都什么时代了，你还在用这么土的浏览器~~");$("ul.friendsChain li a").before("<i class='iconfont'>&#xe64a;</i>"),setInterval(function(){$(".page-reward .page-reward-btn .tooltip-item font,.page-reward .page-reward-btn .tooltip-item a").toggleClass("s_show")},2e3),$.fn.postLike=function(){if($(this).hasClass("done"))return!1;$(this).addClass("done");var e=$(this).data("id"),t=$(this).data("action"),i=$(this).children(".count"),n={action:"bigfa_like",um_id:e,um_action:t};return $.post("/wp-admin/admin-ajax.php",n,function(e){$(i).html(e)}),!1},$(document).on("click",".favorite",function(){$(this).postLike()});var n=document.getElementById("menu");document.oncontextmenu=function(e){return e=e||event,n.style.display="block",n.style.left=e.pageX-85+"px",n.style.top=e.pageY-24+"px",!1},document.onclick=function(){n.style.display="none"};var o=!0;$(".navto-search a").click(function(){$(".site-search.active.pc").stop(!0,!0).slideToggle(150,function(){if($(this).is(":visible")&&1==$(".nav ul.music-nav li>p").css("opacity"));else if($(this).is(":hidden")&&0==$(".nav ul.music-nav li>p").css("opacity"));else if(0==$(".nav ul.music-nav li>p").css("opacity"))return!1}),o=o?($(".header").css("z-index","11"),!1):($(".header").css("z-index","10"),!0),$(this).find("i").toggleClass("fa-search"),$(this).find("i").toggleClass("fa-remove")});var a=!0;$(".control").click(function(){a?$("#music").get(0).play():$("#music").get(0).pause(),$(this).toggleClass("hover"),a=!a}),document.getElementById("music")&&(document.getElementById("music").volume=.5),$(".header").addClass("Top"),$("#Logo").hover(function(){$("#dj li").css("WebkitAnimation","move 0.5s ease 0s 1 alternate none running"),$("#dj li").css("animation","move 0.5s ease 0s 1 alternate none running")},function(){$("#dj li").attr("style","")}),1!=localStorage.getItem("off_y")?($(".mod-header_music-icon").removeClass("hover").attr("title","钢琴音效NO"),$(".nav ul.music-nav li > p").css("opacity","0"),localStorage.setItem("off_y",0)):($(".mod-header_music-icon").addClass("hover").attr("title","钢琴音效OFF"),$(".nav ul.music-nav li > p").css("opacity","1"),localStorage.setItem("off_y",1)),$(".mod-header_music-icon").click(function(){clearInterval(c),1!=localStorage.getItem("off_y")?($(this).addClass("hover"),$(this).attr("title","钢琴音效OFF"),$(".nav ul.music-nav li > p").css("opacity","1"),localStorage.setItem("off_y",1)):($(this).removeClass("hover"),$(".nav ul.music-nav li > p").css("opacity","0"),$(this).attr("title","钢琴音效NO"),localStorage.setItem("off_y",0))});var s=null,r=null,c=null,l=$(".nav ul.music-nav li:not(.mod-header_music-icon)");function u(e){var t=$(".nav ul.music-nav li"),i=t.eq(e).attr("detaName");t.eq(e).find("audio").get(0).src="https://lijun2017.oss-cn-shanghai.aliyuncs.com/music/"+i+".mp3",8!==e&&t.eq(e).addClass("active")}$(".nav ul.music-nav li:not(.mod-header_music-icon)").hover(function(e){$(this).parents(".header").css("z-index","11"),s=$(this).index();var t=$(this).attr("detaName");r=$(".nav ul.music-nav li:not(.mod-header_music-icon)").eq(s).find("audio"),1==localStorage.getItem("off_y")?($(this).addClass("active"),r.get(0).src="https://www.weipxiu.com/wp-content/themes/boke/music/"+t+".mp3"):r.get(0).src="",e.stopPropagation()},function(){clearInterval(c),c=setInterval(function(){o&&0==$(".nav-min").eq(0).css("opacity")&&0==$(".nav-min").eq(1).css("opacity")&&($(".header").css("z-index","10"),clearInterval(c))},1e3),$(this).removeClass("active")}),$(document).keydown(function(e){1==localStorage.getItem("off_y")&&(65==e.keyCode?u(0):83==e.keyCode?u(1):68==e.keyCode?u(2):70==e.keyCode?u(3):71==e.keyCode?u(4):72==e.keyCode?u(5):74==e.keyCode?u(6):75==e.keyCode?u(7):76==e.keyCode&&u(8))}),$(document).keyup(function(){setTimeout(function(){l.removeClass("active")},150)});var d=null;$(".front").hover(function(e){clearTimeout(d),$(".header-conter .nav-min").eq(0).css({opacity:"1",visibility:"visible",top:"49px"}),$(".header-conter .nav-min").eq(1).css({opacity:"0",visibility:"hidden",top:"70px"}),e.stopPropagation()},function(){clearTimeout(d),d=setTimeout(function(){$(".header-conter .nav-min").css({opacity:"0",visibility:"hidden",top:"70px"})},0)}),$(".works").hover(function(e){clearTimeout(d),$(".header-conter .nav-min").eq(1).css({opacity:"1",visibility:"visible",top:"49px"}),$(".header-conter .nav-min").eq(0).css({opacity:"0",visibility:"hidden",top:"70px"}),e.stopPropagation()},function(){clearTimeout(d),d=setTimeout(function(){$(".header-conter .nav-min").css({opacity:"0",visibility:"hidden",top:"70px"})},0)}),$(".aircraft").click(function(){$("body,html").animate({scrollTop:0},800),$(this).animate({bottom:"500px",opacity:"0"},1e3,function(){setTimeout(function(){$(".aircraft").css({bottom:"50px",opacity:"1"})},500)})}),$("#wuyousujian-kefuDv").hover(function(){$("#wuyousujian-kefuDv").stop().animate({right:"-100px"},500)},function(){$("#wuyousujian-kefuDv").stop().animate({right:"-196px"},500)}),$(document).scroll(function(){var e=$(document).scrollTop();500<e?$(".aircraft").css({display:"block",opacity:"1"}):$(".aircraft").css({display:"none",opacity:"0"}),e<=0?($(".header").addClass("Top"),$(".header").removeClass("hover")):($(".header").removeClass("Top"),$(".header").addClass("hover"))}),$(".continar .continar-left-top > span").each(function(){115<$(this).text().length&&($(this).text($(this).text().substring(0,115)),$(this).html($(this).html()+"..."))});var f=!0;$(".btn_menu,.cover").on("touchmove",function(e){e.preventDefault()}),$(".btn_menu,.cover").on("touchstart",function(){$(".os-herder").get(0).classList.toggle("btn"),$(".cover").toggle(),f?$(".continar,.os-headertop").css({transform:"translateX(160px)"}):$(".continar,.os-headertop").css({transform:"translateX(0)"}),$(".site-search").is(":visible")&&($(".os-headertop .site-search").slideToggle(100),$(".xis").find("i").toggleClass("fa-search"),$(".xis").find("i").toggleClass("fa-remove")),f=!f}),$(".os-herder,.site-search").on("touchmove",function(e){e.preventDefault()}),document.addEventListener("touchstart",function(e){1<e.touches.length&&e.preventDefault()});var m,h,p,v,y=0;for(document.addEventListener("touchend",function(e){var t=(new Date).getTime();t-y<=300&&e.preventDefault(),y=t},!1),$(".xis").on("touchstart",function(){$(".os-headertop .site-search").slideToggle(100),$(this).find("i").toggleClass("fa-search"),$(this).find("i").toggleClass("fa-remove")}),$("html,body").width()<960&&($(".nav-s1 > a").html("给我留言"),$(".log-text").css("width","100%")),i=0;i<=$(".mouseover ul li").length;i++)$(".mouseover ul li").eq(i).find("em").html(i+1);$(".text:lt(3) .new-icon").show(),$(".clearfix img").hide(),$("ul.slide-left li").on("touchstart",function(){$(this).find(".slide_slect").stop().slideToggle(),$(this).find(".iconfont_click").toggleClass("icon-xiajiantou"),$(this).find(".iconfont_click").toggleClass("icon-shangjiantou")}),$(".accordion .accordion_center ul li").hover(function(){return $(this).stop().animate({width:"340px"}).siblings("li").stop().animate({width:"166px"}),$(this).find(".slide-item").stop().fadeOut(),$(this).find(".mask").stop(!0,!0).fadeIn(),$(".accordion_center ul li .slide-item .iconfont").css("animation","arrow_move1 1s .5s infinite alternate"),!1},function(){$(this).find(".slide-item").fadeIn(),$(this).find(".mask").stop(!0,!1).fadeOut()}),$(".accordion .accordion_center").mouseleave(function(){$(".accordion .accordion_center ul li").stop().animate({width:"200px"}),$(".accordion .accordion_center ul li").find(".slide-item").fadeIn(),$(".accordion .accordion_center ul li").find(".mask").fadeOut(),$(".accordion_center ul li .slide-item .iconfont").css("animation","arrow_move 1s .5s infinite alternate")}),1200<=$(document).width()?(m=window,h=document,v=[],m.requestAnimationFrame=m.requestAnimationFrame||m.webkitRequestAnimationFrame||m.mozRequestAnimationFrame||m.oRequestAnimationFrame||m.msRequestAnimationFrame||function(e){setTimeout(e,1e3/60)},function(t){var i=h.createElement("style");i.type="text/css";try{i.appendChild(h.createTextNode(t))}catch(e){i.styleSheet.cssText=t}h.getElementsByTagName("head")[0].appendChild(i)}(".heart{width: 10px;height: 10px;position: fixed;background: #f00;transform: rotate(45deg);-webkit-transform: rotate(45deg);-moz-transform: rotate(45deg);}.heart:after,.heart:before{content: '';width: inherit;height: inherit;background: inherit;border-radius: 50%;-webkit-border-radius: 50%;-moz-border-radius: 50%;position: fixed;}.heart:after{top: -5px;}.heart:before{left: -5px;}"),p="function"==typeof m.onclick&&m.onclick,m.onclick=function(e){var t,i;p&&p(),t=e,(i=h.createElement("div")).className="heart",v.push({el:i,x:t.clientX-5,y:t.clientY-5,scale:1,alpha:1,color:"rgb("+~~(255*Math.random())+","+~~(255*Math.random())+","+~~(255*Math.random())+")"}),h.body.appendChild(i)},function e(){for(var t=0;t<v.length;t++)v[t].alpha<=0?(h.body.removeChild(v[t].el),v.splice(t,1)):(v[t].y--,v[t].scale+=.004,v[t].alpha-=.013,v[t].el.style.cssText="left:"+v[t].x+"px;top:"+v[t].y+"px;opacity:"+v[t].alpha+";transform:scale("+v[t].scale+","+v[t].scale+") rotate(45deg);background:"+v[t].color+";z-index:99999");requestAnimationFrame(e)}()):setTimeout(function(){var e=$(".footer").detach();$("body > .continar").append(e),$(".footer").css({display:"block"})},1500),$(window).resize(function(){1200<=$(document).width()&&$(".continar,.os-headertop").css({transform:"translateX(0)"})});var g=videojs("my-video");t=document.querySelector("#my-video"),e=function(i,n){var o;return["webkit","moz","ms","o",""].forEach(function(e){if(!o){""===e&&(n=n.slice(0,1).toLowerCase()+n.slice(1));var t=_typeof(i[e+n]);t+""!="undefined"&&(o="function"===t?i[e+n]():i[e+n])}}),o},"number"==typeof window.screenX?t.addEventListener("dblclick",function(){e(document,"FullScreen")||e(document,"IsFullScreen")?(e(document,"CancelFullScreen"),this.title=this.title.replace("退出","")):e(this,"RequestFullScreen")&&(this.title=this.title.replace("点击","点击退出"))}):alert("爷，现在是年轻人的时代，您就暂且休息去吧~~"),g.on("ended",function(){g.play(),setTimeout(function(){g.pause()},500)})}),$(function(){var i="https://www.weipxiu.com/",d="ajax_centent",t="searchform",n=new String("#, /?cat=, /wp-, .pdf, .zip, .rar, /goto, .html, category/").split(", "),s="error",f=!1,m=!1,h=!1,r=!1,o=null;function p(e){jQuery(e+"a").click(function(e){if(0<=this.href.indexOf(i)&&1==c(this.href)){e.preventDefault(),this.blur(),this.title||this.name,this.rel;try{t=this,jQuery("ul.nav li").each(function(){jQuery(this).removeClass("current-menu-item")}),jQuery(t).parents("li").addClass("current-menu-item")}catch(e){}a(this.href)}var t}),jQuery("."+t).each(function(e){jQuery(this).attr("action")&&(o=jQuery(this).attr("action"),jQuery(this).submit(function(){return e=jQuery(this).serialize(),h||a(o,0,e),!1;var e}))}),jQuery("."+t).attr("action")}function a(e,t,l){if(!h){r=h=!0;var i=e.replace("http://","").replace("https://",""),n=i.indexOf("/"),o=e.indexOf(i),u=e.substring(o+n);if(1!=t&&"function"==typeof window.history.pushState){var a={foo:1e3+1001*Math.random()};history.pushState(a,"ajax page loaded...",u)}jQuery("#"+d),jQuery("#loading").show(),jQuery("#"+d).fadeTo("slow",1,function(){jQuery("#"+d).fadeIn("slow",function(){jQuery.ajax({type:"GET",url:e,data:l,cache:!1,dataType:"html",success:function(e){h=!1;var t=e.split("<title>"),i=e.split("</title>");if(jQuery("#loading").hide(),jQuery(".continar").css({scrollTop:0}),jQuery("html,body,.continar").animate({scrollTop:0},600),2==t.length||2==i.length){var n=(e=e.split("<title>")[1]).split("</title>")[0];jQuery(document).attr("title",jQuery("<div/>").html(n).text())}1==m&&"undefined"!=typeof _gaq&&(l=void 0===l?"":"?"+l,_gaq.push(["_trackPageview",u+l])),e=(e=e.split('id="'+d+'"')[1]).substring(e.indexOf(">")+1);for(var o=1,a="";0<o;){for(var s=e.split("</div>")[0],r=0,c=s.indexOf("<div");-1!=c;)r++,c=s.indexOf("<div",c+1);o=o+r-1,a=a+e.split("</div>")[0]+"</div>",e=e.substring(e.indexOf("</div>")+6)}document.getElementById(d).innerHTML=a,jQuery("#"+d).css("position","absolute"),jQuery("#"+d).css("left","20000px"),jQuery("#"+d).show(),p("#"+d+" "),1==f&&jQuery(document).trigger("ready"),jQuery("#"+d).hide(),jQuery("#"+d).css("position",""),jQuery("#"+d).css("left",""),jQuery("#"+d).fadeTo("slow",1,function(){})},error:function(e,t,i){h=!1,document.title="Error loading requested page!",document.getElementById(d).innerHTML=s}})})})}}function c(e){for(var t in n)if(0<=e.indexOf(n[t])||e==i||"https://www.weipxiu.com"==e)return!1;return!0}jQuery.browser,jQuery(document).ready(function(){p("")}),window.onpopstate=function(e){!0===r&&1==c(document.location.toString())&&a(document.location.toString(),1)}});