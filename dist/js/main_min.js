"use strict";function _typeof(e){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}$(function(){window.location.protocol,window.location.host,$("img.Lazy_load").lazyload({effect:"show"}),0<$(".continar-left .article_not").length&&$("body").css({background:"#fff"});for(var e=$(".header .music-nav").children("li"),t=0;t<e.length;t++){var i=e.eq(t).children("a").text();e.eq(t).children("a").text(""),e.eq(t).children("a").append("<span>"+i+"</span>"),e.eq(t).children("a").append("<span>"+i+"</span>"),e.eq(t).hasClass("current-menu-item")&&e.eq(t).addClass("action")}e.append("<audio src='' autoplay='autoplay'></audio><p style='opacity: 0'></p>"),$("#nav_list .sub-menu").siblings("a").attr("href","javascript:void(0);"),$("#nav_list .sub-menu").siblings("a").find("span").append("<i class='iconfont icon-jiantou'></i>"),$(".os-herder .sub-menu").siblings("a").append("<i class='iconfont iconfont_click icon-xiajiantou'></i>"),$(".header .sub-menu").addClass("nav-min"),$(".os-herder .sub-menu").addClass("slide_slect"),$(".header .music-nav").append("<li class='js_piano_nav_icon mod-header_music-icon'><audio src='' autoplay='autoplay'></audio><i></i><i></i><i></i><i></i><i></i></li>"),setTimeout(function(){$("#reply-title a").is(":hidden")&&$("#reply-title").hide()}),setInterval(function(){var e=Math.round(new Date(Date.UTC(2016,10,16,0,0,0)).getTime()/1e3),t=function(e){if(!e)return 0;var t=new Array(0,0,0,0,0);return 31536e3<=e&&(t[0]=parseInt(e/31536e3),e%=31536e3),86400<=e&&(t[1]=parseInt(e/86400),e%=86400),3600<=e&&(t[2]=parseInt(e/3600),e%=3600),60<=e&&(t[3]=parseInt(e/60),e%=60),0<e&&(t[4]=e),t}(Math.round(((new Date).getTime()+288e5)/1e3)-e),i=t[0]+"年"+t[1]+"天"+t[2]+"时"+t[3]+"分"+t[4]+"秒";$("#htmer_time").html(i)},1e3);var n=function(i,n){var o;return["webkit","moz","ms","o",""].forEach(function(e){if(!o){""===e&&(n=n.slice(0,1).toLowerCase()+n.slice(1));var t=_typeof(i[e+n]);t+""!="undefined"&&(o="function"===t?i[e+n]():i[e+n])}}),o};if("number"==typeof window.screenX){var o=document.querySelectorAll(".log-text img");for(t=0;t<o.length;t++)o[t].addEventListener("click",function(){n(document,"FullScreen")||n(document,"IsFullScreen")?(n(document,"CancelFullScreen"),this.title=this.title.replace("退出","")):n(this,"RequestFullScreen")&&(this.title=this.title.replace("点击","点击退出"))})}else alert("爷，现在都什么时代了，你还在用这么土的浏览器~~");$("ul.friendsChain li a").before("<i class='iconfont'>&#xe64a;</i>"),setInterval(function(){$(".page-reward .page-reward-btn .tooltip-item font,.page-reward .page-reward-btn .tooltip-item a").toggleClass("s_show")},2e3),$.fn.postLike=function(){if($(this).hasClass("done"))return!1;$(this).addClass("done");var e=$(this).data("id"),t=$(this).data("action"),i=$(this).children(".count"),n={action:"bigfa_like",um_id:e,um_action:t};return $.post("/wp-admin/admin-ajax.php",n,function(e){$(i).html(e)}),!1},$(document).on("click",".favorite",function(){$(this).postLike()}),document.getElementById("menu"),document.oncontextmenu=function(e){return layer.msg("别看啦，宝宝好羞涩*^_^*"),!1};var a=!0;$(".navto-search a").click(function(){$(".site-search.active.pc").stop(!0,!0).slideToggle(150,function(){if($(this).is(":visible")&&1==$(".nav ul.music-nav li>p").css("opacity"));else if($(this).is(":hidden")&&0==$(".nav ul.music-nav li>p").css("opacity"));else if(0==$(".nav ul.music-nav li>p").css("opacity"))return!1}),a=a?($(".header").css("z-index","11"),!1):($(".header").css("z-index","10"),!0),$(this).find("i").toggleClass("fa-search"),$(this).find("i").toggleClass("fa-remove")}),$(".header").addClass("Top"),1!=localStorage.getItem("off_y")?($(".nav ul.music-nav li > p").css("opacity","0"),localStorage.setItem("off_y",0)):($(".nav ul.music-nav li > p").css("opacity","1"),localStorage.setItem("off_y",1),$(".mod-header_music-icon").addClass("hover")),$(".mod-header_music-icon").click(function(){1!=localStorage.getItem("off_y")?($(this).addClass("hover"),$(".nav ul.music-nav li > p").css("opacity","1"),localStorage.setItem("off_y",1),layer.msg("3D导航音乐已开启~",{time:2e3},function(){layer.msg("无需鼠标，键盘A-K也可以体验哦~~")})):($(this).removeClass("hover"),$(".nav ul.music-nav li > p").css("opacity","0"),localStorage.setItem("off_y",0),layer.msg("3D导航音乐已关闭，期待您的下次体验！"))}),$(".js_piano_nav_icon").mouseenter(function(){1!=localStorage.getItem("off_y")?layer.tips("开启3D导航音乐",".js_piano_nav_icon",{tips:3,tipsMore:!1,time:2e3}):layer.tips("关闭3D导航音乐",".js_piano_nav_icon",{tips:3,tipsMore:!1,time:2e3})});var s=null,r=null,c=null,l=$(".nav ul.music-nav > li:not(.mod-header_music-icon)");function u(e){l.eq(e).find("audio").get(0).src="/wp-content/themes/Art_Blog/music/nav_"+(e+1)+".mp3",8!==e&&l.eq(e).addClass("active")}$(".nav ul.music-nav > li:not(.mod-header_music-icon)").hover(function(e){clearTimeout(s),$(this).find(".nav-min").css({opacity:"1",visibility:"visible",top:"49px"}).parent("li").siblings("li").children(".nav-min").css({opacity:"0",visibility:"hidden",top:"70px"}),$(this).siblings("li").children(".nav-min").css({opacity:"0",visibility:"hidden",top:"70px"}),$(this).parents(".header").css("z-index","11"),r=$(this).index(),c=$(".nav ul.music-nav > li:not(.mod-header_music-icon)").eq(r).find("audio"),1==localStorage.getItem("off_y")?($(this).addClass("active").siblings("li").removeClass("active"),c.get(0).src="/wp-content/themes/Art_Blog/music/nav_"+parseInt(r+1)+".mp3"):c.get(0).src="",e.stopPropagation()},function(){var e=this;clearTimeout(s),s=setTimeout(function(){$(".site-search").is(":visible")||$(".header").css("z-index","10"),$(e).removeClass("active"),$(".header-conter .nav-min").css({opacity:"0",visibility:"hidden",top:"70px"})},500)}),$(document).keydown(function(e){1==localStorage.getItem("off_y")&&(65==e.keyCode?u(0):83==e.keyCode?u(1):68==e.keyCode?u(2):70==e.keyCode?u(3):71==e.keyCode?u(4):72==e.keyCode?u(5):74==e.keyCode?u(6):75==e.keyCode?u(7):76==e.keyCode&&u(8))}),$(document).keyup(function(){setTimeout(function(){l.removeClass("active")},150)}),$(".aircraft").click(function(){$(this).animate({bottom:"0",opacity:"1"},100,function(){setTimeout(function(){$("body,html").animate({scrollTop:0},1200),$(".aircraft").animate({top:"0",bottom:"auto",opacity:"0"},700,function(){setTimeout(function(){$(".aircraft").css({bottom:"50px",top:"auto",opacity:"1"})},500)})},300)})}),$("#wuyousujian-kefuDv").hover(function(){$("#wuyousujian-kefuDv").stop().animate({right:"-100px"},500)},function(){$("#wuyousujian-kefuDv").stop().animate({right:"-196px"},500)}),$(document).scroll(function(){var e=$(document).scrollTop();500<e?$(".aircraft").css({display:"block",opacity:"1"}):$(".aircraft").css({display:"none",opacity:"0"}),e<=0?($(".header").addClass("Top"),$(".header").removeClass("hover")):($(".header").removeClass("Top"),$(".header").addClass("hover"))}),$(".continar .continar-left-top > span").each(function(){115<$(this).text().length&&($(this).text($(this).text().substring(0,115)),$(this).html($(this).html()+"..."))});var d=!0;$(".btn_menu,.cover").on("touchmove",function(e){e.preventDefault()}),$(".btn_menu,.cover").on("touchstart",function(){$(".os-herder").get(0).classList.toggle("btn"),$(".cover").toggle(),d?$(".continar,.os-headertop").css({transform:"translateX(160px)"}):$(".continar,.os-headertop").css({transform:"translateX(0)"}),$(".site-search").is(":visible")&&($(".os-headertop .site-search").slideToggle(100),$(".xis").find("i").toggleClass("fa-search"),$(".xis").find("i").toggleClass("fa-remove")),d=!d}),$(".os-herder,.site-search").on("touchmove",function(e){e.preventDefault()}),document.addEventListener("touchstart",function(e){1<e.touches.length&&e.preventDefault()});var f,h,m,p,v,y=0;for(document.addEventListener("touchend",function(e){var t=(new Date).getTime();t-y<=300&&e.preventDefault(),y=t},!1),$(".xis").on("touchstart",function(){$(".os-headertop .site-search").slideToggle(100),$(this).find("i").toggleClass("fa-search"),$(this).find("i").toggleClass("fa-remove")}),$("html,body").width()<960&&($(".nav-s1 > a").html("给我留言"),$(".log-text").css("width","100%")),t=0;t<=$(".mouseover ul li").length;t++)$(".mouseover ul li").eq(t).find("em").html(t+1);if($(".text:lt(3) .new-icon").show(),$("ul.slide-left li").on("touchstart",function(e){$(this).find(".slide_slect").stop().slideToggle(),$(this).find(".iconfont_click").toggleClass("icon-xiajiantou"),$(this).find(".iconfont_click").toggleClass("icon-shangjiantou")}),$(".accordion .accordion_center ul li").hover(function(){return $(this).stop().animate({width:"340px"}).siblings("li").stop().animate({width:"166px"}),$(this).find(".slide-item").stop().fadeOut(),$(this).find(".mask").stop(!0,!0).fadeIn(),$(".accordion_center ul li .slide-item .iconfont").css("animation","arrow_move1 1s .5s infinite alternate"),!1},function(){$(this).find(".slide-item").fadeIn(),$(this).find(".mask").stop(!0,!1).fadeOut()}),$(".accordion .accordion_center").mouseleave(function(){$(".accordion .accordion_center ul li").stop().animate({width:"200px"}),$(".accordion .accordion_center ul li").find(".slide-item").fadeIn(),$(".accordion .accordion_center ul li").find(".mask").fadeOut(),$(".accordion_center ul li .slide-item .iconfont").css("animation","arrow_move 1s .5s infinite alternate")}),1200<=$(document).width()?(1!=sessionStorage.getItem("off_login")&&setTimeout(function(){$(".login_alert").slideDown()},1e3),$(".login_alert_close").click(function(){$(".login_alert").slideUp(),sessionStorage.setItem("off_login",1)}),0<$(".continar-left .article_not").length&&$("body > .continar").css({height:"calc(100% - 280px)"}),window.ActiveXObject||"ActiveXObject"in window?console.log("天啦，偶买噶，你竟然还在用IE？"):(h=window,m=document,v=[],h.requestAnimationFrame=h.requestAnimationFrame||h.webkitRequestAnimationFrame||h.mozRequestAnimationFrame||h.oRequestAnimationFrame||h.msRequestAnimationFrame||function(e){setTimeout(e,1e3/60)},function(t){var i=m.createElement("style");i.type="text/css";try{i.appendChild(m.createTextNode(t))}catch(e){i.styleSheet.cssText=t}m.getElementsByTagName("head")[0].appendChild(i)}(".heart{width: 10px;height: 10px;position: fixed;background: #f00;transform: rotate(45deg);-webkit-transform: rotate(45deg);-moz-transform: rotate(45deg);}.heart:after,.heart:before{content: '';width: inherit;height: inherit;background: inherit;border-radius: 50%;-webkit-border-radius: 50%;-moz-border-radius: 50%;position: fixed;}.heart:after{top: -5px;}.heart:before{left: -5px;}"),p="function"==typeof h.onclick&&h.onclick,h.onclick=function(e){var t,i;p&&p(),t=e,(i=m.createElement("div")).className="heart",v.push({el:i,x:t.clientX-5,y:t.clientY-5,scale:1,alpha:1,color:"rgb("+~~(255*Math.random())+","+~~(255*Math.random())+","+~~(255*Math.random())+")"}),m.body.appendChild(i)},function e(){for(var t=0;t<v.length;t++)v[t].alpha<=0?(m.body.removeChild(v[t].el),v.splice(t,1)):(v[t].y--,v[t].scale+=.004,v[t].alpha-=.013,v[t].el.style.cssText="left:"+v[t].x+"px;top:"+v[t].y+"px;opacity:"+v[t].alpha+";transform:scale("+v[t].scale+","+v[t].scale+") rotate(45deg);background:"+v[t].color+";z-index:99999");requestAnimationFrame(e)}()),f=jQuery,String.prototype.gblen=function(){for(var e=0,t=0;t<this.length;t++)127<this.charCodeAt(t)||94==this.charCodeAt(t)?e+=2:e++;return e},f.extend(f.easing,{easeOutElastic:function(e,t,i,n,o){var a=1.70158,s=0,r=n;return 0==t?i:1==(t/=o)?i+n:(s||(s=.3*o),a=r<Math.abs(n)?(r=n,s/4):s/(2*Math.PI)*Math.asin(n/r),r*Math.pow(2,-10*t)*Math.sin((t*o-a)*(2*Math.PI)/s)+n+i)}}),f.fn.qin=function(e){var t=f.extend({},{offset:22,duration:500,recline:.1},e);return this.each(function(){var i,c,l,n,e=f(this);!function(e){var t="",i=0;if(e.text().trim().gblen()<38)t=e.text().trim();else for(var n=0;n<38&&t.gblen()<38;n++)t=e.text().trim().slice(0,i)+"...",i++;for(var o="",a=0,s=t.length;a<s;a++)o+="<span>"+t.substr(a,1)+"</span>";e.html(o);var r=[];e.children("span").each(function(){var e=f(this),t=e.position();r.push(t),e.css({top:"0px",left:t.left+"px"}),setTimeout(function(){e.css("position","absolute")},0)}),e.data("stringPosition",r)}(e),c=t,l=(i=e).data("stringPosition"),n=0,i.mouseenter(function(e){var t=i.offset();e.pageX,t.left,n=e.pageY-t.top}),i.mousemove(function(e){var t=i.offset(),a=e.pageX-t.left,s=e.pageY-t.top-n;if(!(Math.abs(s)>c.offset)){var r=0<s;i.children("span").each(function(e){var t=f(this),i=l[e],n=Math.abs(a-i.left)*c.recline;n*=r?1:-1;var o=i.top+s-n;r&&o<i.top?o=i.top:!r&&o>i.top&&(o=i.top),t.css({top:o+"px"})})}}),i.mouseleave(function(){i.children("span").each(function(e){f(this).stop(!0,!1).animate({top:"0px"},{duration:c.duration,easing:"easeOutElastic"})})})})},$(".mouseover ul li a").qin({offset:20,duration:500,recline:.1})):(setTimeout(function(){var e=$(".footer").detach();$("body > .continar").append(e),$(".footer").css({display:"block"})},500),$("img.Lazy_load").lazyload({container:$("body > .continar")})),$(window).resize(function(){1200<=$(document).width()&&$(".continar,.os-headertop").css({transform:"translateX(0)"})}),function(e){for(var t=0;t<e.length;t++)e.eq(t).addClass("color-"+(parseInt(8*Math.random(),10)+1))}($(".friendship .daily-list ul li")),$("#my-video").length){var g=videojs("my-video");document.getElementById("my-video_html5_api").onerror=function(){layer.alert("通常是由于视频地址错误引起，请检查！",{skin:"layui",title:"播放失败",closeBtn:0,anim:4})},o=document.querySelector("#my-video"),n=function(i,n){var o;return["webkit","moz","ms","o",""].forEach(function(e){if(!o){""===e&&(n=n.slice(0,1).toLowerCase()+n.slice(1));var t=_typeof(i[e+n]);t+""!="undefined"&&(o="function"===t?i[e+n]():i[e+n])}}),o},"number"==typeof window.screenX?o.addEventListener("dblclick",function(){n(document,"FullScreen")||n(document,"IsFullScreen")?(n(document,"CancelFullScreen"),this.title=this.title.replace("退出","")):n(this,"RequestFullScreen")&&(this.title=this.title.replace("点击","点击退出"))}):alert("爷，现在是年轻人的时代，您就暂且休息去吧~~"),g.on("ended",function(){g.play(),setTimeout(function(){g.pause()},500)})}}),$(function(){var i=window.location.protocol+"//"+window.location.host+"/",d="ajax_centent",t="searchform",n=new String("/page/").split(", "),s="error",f=!1,h=!1,m=!1,r=!1,o=null;function p(e){jQuery(e+"a").click(function(e){if(0<=this.href.indexOf(i)&&1==c(this.href)){e.preventDefault(),this.blur(),this.title||this.name,this.rel;try{t=this,jQuery("ul.nav li").each(function(){jQuery(this).removeClass("current-menu-item")}),jQuery(t).parents("li").addClass("current-menu-item")}catch(e){}a(this.href)}var t}),jQuery("."+t).each(function(e){jQuery(this).attr("action")&&(o=jQuery(this).attr("action"),jQuery(this).submit(function(){return e=jQuery(this).serialize(),m||a(o,0,e),!1;var e}))}),jQuery("."+t).attr("action")}function a(e,t,l){if(!m){r=m=!0;var i=e.replace("http://","").replace("https://",""),n=i.indexOf("/"),o=e.indexOf(i),u=e.substring(o+n);if(1!=t&&"function"==typeof window.history.pushState){var a={foo:1e3+1001*Math.random()};history.pushState(a,"ajax page loaded...",u)}jQuery("#"+d),jQuery("#loading").show(),jQuery("#"+d).fadeTo("slow",1,function(){jQuery("#"+d).fadeIn("slow",function(){jQuery.ajax({type:"GET",url:e,data:l,cache:!1,dataType:"html",success:function(e){m=!1;var t=e.split("<title>"),i=e.split("</title>");if(jQuery("#loading").hide(),jQuery(".continar").css({scrollTop:0}),jQuery("html,body,.continar").animate({scrollTop:0},600),2==t.length||2==i.length){var n=(e=e.split("<title>")[1]).split("</title>")[0];jQuery(document).attr("title",jQuery("<div/>").html(n).text())}1==h&&"undefined"!=typeof _gaq&&(l=void 0===l?"":"?"+l,_gaq.push(["_trackPageview",u+l])),e=(e=e.split('id="'+d+'"')[1]).substring(e.indexOf(">")+1);for(var o=1,a="";0<o;){for(var s=e.split("</div>")[0],r=0,c=s.indexOf("<div");-1!=c;)r++,c=s.indexOf("<div",c+1);o=o+r-1,a=a+e.split("</div>")[0]+"</div>",e=e.substring(e.indexOf("</div>")+6)}document.getElementById(d).innerHTML=a,jQuery("#"+d).css("position","absolute"),jQuery("#"+d).css("left","20000px"),jQuery("#"+d).show(),p("#"+d+" "),1==f&&jQuery(document).trigger("ready"),jQuery("#"+d).hide(),jQuery("#"+d).css("position",""),jQuery("#"+d).css("left",""),jQuery("#"+d).fadeTo("slow",1,function(){}),$("img.Lazy_load").lazyload({effect:"show"}),$("img.Lazy_load").lazyload({container:$("body > .continar")})},error:function(e,t,i){m=!1,document.title="Error loading requested page!",document.getElementById(d).innerHTML=s}})})})}}function c(e){for(var t in n)return 0<=e.indexOf(n[t])}jQuery.browser,jQuery(document).ready(function(){p("")}),window.onpopstate=function(e){!0===r&&1==c(document.location.toString())&&a(document.location.toString(),1)}});