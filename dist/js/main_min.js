"use strict";function defaultfont(){var t=100*$(window).width()/750;70<=t&&(t=70),$("html").css({fontSize:t+"px",transtion:"0.35s"})}setTimeout(function(){defaultfont()},100);var w_height=$(window).width();function _typeof(t){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}$(window).resize(function(){$(window).width()!=w_height&&setTimeout(function(){defaultfont()},100)}),$(function(){var t=window.location.protocol+"//"+window.location.host;window.location.href!=t&&window.location.href!=t+"/"&&$("body > .continar").css("margin-top","88px");for(var e=$(".header .music-nav").children("li"),i=0;i<e.length;i++){var n=e.eq(i).children("a").text();e.eq(i).children("a").text(""),e.eq(i).children("a").append("<span>"+n+"</span>"),e.eq(i).children("a").append("<span>"+n+"</span>"),e.eq(i).hasClass("current-menu-item")&&e.eq(i).addClass("action")}e.append("<audio src='' autoplay='autoplay'></audio><p style='opacity: 0'></p>"),$(".nav ul .sub-menu").siblings("a").find("span").append("<i class='iconfont icon-jiantou'></i>"),$(".sub-menu").addClass("nav-min"),$(".header .music-nav").append("<li class='js_piano_nav_icon mod-header_music-icon' title='钢琴节奏'><audio src='' autoplay='autoplay'></audio><i></i><i></i><i></i><i></i><i></i></li>"),console.log("导航改造完成！"),setTimeout(function(){$("#reply-title a").is(":hidden")&&$("#reply-title").hide()}),$(".continar-left>.text").length||$("body").css("background","#fff"),setInterval(function(){var t=Math.round(new Date(Date.UTC(2016,10,16,0,0,0)).getTime()/1e3),e=function(t){if(!t)return 0;var e=new Array(0,0,0,0,0);return 31536e3<=t&&(e[0]=parseInt(t/31536e3),t%=31536e3),86400<=t&&(e[1]=parseInt(t/86400),t%=86400),3600<=t&&(e[2]=parseInt(t/3600),t%=3600),60<=t&&(e[3]=parseInt(t/60),t%=60),0<t&&(e[4]=t),e}(Math.round(((new Date).getTime()+288e5)/1e3)-t),i=e[0]+"年"+e[1]+"天"+e[2]+"时"+e[3]+"分"+e[4]+"秒";$("#htmer_time").html(i)},1e3);var o=function(i,n){var o;return["webkit","moz","ms","o",""].forEach(function(t){if(!o){""===t&&(n=n.slice(0,1).toLowerCase()+n.slice(1));var e=_typeof(i[t+n]);e+""!="undefined"&&(o="function"===e?i[t+n]():i[t+n])}}),o};if("number"==typeof window.screenX){var a=document.querySelectorAll(".log-text img");for(i=0;i<a.length;i++)a[i].addEventListener("click",function(){o(document,"FullScreen")||o(document,"IsFullScreen")?(o(document,"CancelFullScreen"),this.title=this.title.replace("退出","")):o(this,"RequestFullScreen")&&(this.title=this.title.replace("点击","点击退出"))})}else alert("爷，现在都什么时代了，你还在用这么土的浏览器~~");$("ul.friendsChain li a").before("<i class='iconfont'>&#xe64a;</i>"),setInterval(function(){$(".page-reward .page-reward-btn .tooltip-item font,.page-reward .page-reward-btn .tooltip-item a").toggleClass("s_show")},2e3),$.fn.postLike=function(){if($(this).hasClass("done"))return!1;$(this).addClass("done");var t=$(this).data("id"),e=$(this).data("action"),i=$(this).children(".count"),n={action:"bigfa_like",um_id:t,um_action:e};return $.post("/wp-admin/admin-ajax.php",n,function(t){$(i).html(t)}),!1},$(document).on("click",".favorite",function(){$(this).postLike()});var s=document.getElementById("menu");document.oncontextmenu=function(t){return t=t||event,s.style.display="block",s.style.left=t.pageX-85+"px",s.style.top=t.pageY-24+"px",!1},document.onclick=function(){s.style.display="none"};var r=!0;$(".navto-search a").click(function(){$(".site-search.active.pc").stop(!0,!0).slideToggle(150,function(){if($(this).is(":visible")&&1==$(".nav ul.music-nav li>p").css("opacity"));else if($(this).is(":hidden")&&0==$(".nav ul.music-nav li>p").css("opacity"));else if(0==$(".nav ul.music-nav li>p").css("opacity"))return!1}),r=r?($(".header").css("z-index","11"),!1):($(".header").css("z-index","10"),!0),$(this).find("i").toggleClass("fa-search"),$(this).find("i").toggleClass("fa-remove")}),$(".header").addClass("Top"),1!=localStorage.getItem("off_y")?($(".mod-header_music-icon").removeClass("hover").attr("title","钢琴音效NO"),$(".nav ul.music-nav li > p").css("opacity","0"),localStorage.setItem("off_y",0)):($(".mod-header_music-icon").addClass("hover").attr("title","钢琴音效OFF"),$(".nav ul.music-nav li > p").css("opacity","1"),localStorage.setItem("off_y",1)),$(".mod-header_music-icon").click(function(){clearInterval(u),1!=localStorage.getItem("off_y")?($(this).addClass("hover"),$(this).attr("title","钢琴音效OFF"),$(".nav ul.music-nav li > p").css("opacity","1"),localStorage.setItem("off_y",1)):($(this).removeClass("hover"),$(".nav ul.music-nav li > p").css("opacity","0"),$(this).attr("title","钢琴音效NO"),localStorage.setItem("off_y",0))});var c=null,l=null,u=null,d=$(".nav ul.music-nav > li:not(.mod-header_music-icon)");function f(t){var e=$(".nav ul.music-nav > li"),i=e.eq(t).attr("detaName");e.eq(t).find("audio").get(0).src="/wp-content/themes/Art_Blog/music/"+i+".mp3",8!==t&&e.eq(t).addClass("active")}$(".nav ul.music-nav > li:not(.mod-header_music-icon)").hover(function(t){$(this).parents(".header").css("z-index","11"),c=$(this).index(),l=$(".nav ul.music-nav > li:not(.mod-header_music-icon)").eq(c).find("audio"),1==localStorage.getItem("off_y")?($(this).addClass("active"),l.get(0).src="/wp-content/themes/Art_Blog/music/nav_"+parseInt(c+1)+".mp3"):l.get(0).src="",t.stopPropagation()},function(){clearInterval(u),u=setInterval(function(){r&&0==$(".nav-min").eq(0).css("opacity")&&0==$(".nav-min").eq(1).css("opacity")&&($(".header").css("z-index","10"),clearInterval(u))},1e3),$(this).removeClass("active")}),$(document).keydown(function(t){1==localStorage.getItem("off_y")&&(65==t.keyCode?f(0):83==t.keyCode?f(1):68==t.keyCode?f(2):70==t.keyCode?f(3):71==t.keyCode?f(4):72==t.keyCode?f(5):74==t.keyCode?f(6):75==t.keyCode?f(7):76==t.keyCode&&f(8))}),$(document).keyup(function(){setTimeout(function(){d.removeClass("active")},150)});var h=null;$(".nav ul.music-nav li").hover(function(t){clearTimeout(h),$(".nav ul.music-nav li .nav-min").css({opacity:"0",visibility:"hidden",top:"70px"}),$(this).find(".nav-min").css({opacity:"1",visibility:"visible",top:"49px"}),t.stopPropagation()},function(){clearTimeout(h),h=setTimeout(function(){$(".header-conter .nav-min").css({opacity:"0",visibility:"hidden",top:"70px"})},300)}),$(".aircraft").click(function(){$(this).animate({bottom:"0",opacity:"1"},100,function(){setTimeout(function(){$("body,html").animate({scrollTop:0},1200),$(".aircraft").animate({top:"0",bottom:"auto",opacity:"0"},700,function(){setTimeout(function(){$(".aircraft").css({bottom:"50px",top:"auto",opacity:"1"})},500)})},300)})}),$("#wuyousujian-kefuDv").hover(function(){$("#wuyousujian-kefuDv").stop().animate({right:"-100px"},500)},function(){$("#wuyousujian-kefuDv").stop().animate({right:"-196px"},500)}),$(document).scroll(function(){var t=$(document).scrollTop();500<t?$(".aircraft").css({display:"block",opacity:"1"}):$(".aircraft").css({display:"none",opacity:"0"}),t<=0?($(".header").addClass("Top"),$(".header").removeClass("hover")):($(".header").removeClass("Top"),$(".header").addClass("hover"))}),$(".continar .continar-left-top > span").each(function(){115<$(this).text().length&&($(this).text($(this).text().substring(0,115)),$(this).html($(this).html()+"..."))});var p=!0;$(".btn_menu,.cover").on("touchmove",function(t){t.preventDefault()}),$(".btn_menu,.cover").on("touchstart",function(){$(".os-herder").get(0).classList.toggle("btn"),$(".cover").toggle(),p?$(".continar,.os-headertop").css({transform:"translateX(160px)"}):$(".continar,.os-headertop").css({transform:"translateX(0)"}),$(".site-search").is(":visible")&&($(".os-headertop .site-search").slideToggle(100),$(".xis").find("i").toggleClass("fa-search"),$(".xis").find("i").toggleClass("fa-remove")),p=!p}),$(".os-herder,.site-search").on("touchmove",function(t){t.preventDefault()}),document.addEventListener("touchstart",function(t){1<t.touches.length&&t.preventDefault()});var m,v,y,g,w,b=0;for(document.addEventListener("touchend",function(t){var e=(new Date).getTime();e-b<=300&&t.preventDefault(),b=e},!1),$(".xis").on("touchstart",function(){$(".os-headertop .site-search").slideToggle(100),$(this).find("i").toggleClass("fa-search"),$(this).find("i").toggleClass("fa-remove")}),$("html,body").width()<960&&($(".nav-s1 > a").html("给我留言"),$(".log-text").css("width","100%")),i=0;i<=$(".mouseover ul li").length;i++)$(".mouseover ul li").eq(i).find("em").html(i+1);if($(".text:lt(3) .new-icon").show(),$("ul.slide-left li").on("touchstart",function(t){console.log(t.target.dataset.implement),"element"==t.target.dataset.implement&&($(this).find(".slide_slect").stop().slideToggle(),$(this).find(".iconfont_click").toggleClass("icon-xiajiantou"),$(this).find(".iconfont_click").toggleClass("icon-shangjiantou"))}),$(".accordion .accordion_center ul li").hover(function(){return $(this).stop().animate({width:"340px"}).siblings("li").stop().animate({width:"166px"}),$(this).find(".slide-item").stop().fadeOut(),$(this).find(".mask").stop(!0,!0).fadeIn(),$(".accordion_center ul li .slide-item .iconfont").css("animation","arrow_move1 1s .5s infinite alternate"),!1},function(){$(this).find(".slide-item").fadeIn(),$(this).find(".mask").stop(!0,!1).fadeOut()}),$(".accordion .accordion_center").mouseleave(function(){$(".accordion .accordion_center ul li").stop().animate({width:"200px"}),$(".accordion .accordion_center ul li").find(".slide-item").fadeIn(),$(".accordion .accordion_center ul li").find(".mask").fadeOut(),$(".accordion_center ul li .slide-item .iconfont").css("animation","arrow_move 1s .5s infinite alternate")}),1200<=$(document).width()?(window.ActiveXObject||"ActiveXObject"in window?console.log("天啦，偶买噶，你竟然还在用IE？"):(v=window,y=document,w=[],v.requestAnimationFrame=v.requestAnimationFrame||v.webkitRequestAnimationFrame||v.mozRequestAnimationFrame||v.oRequestAnimationFrame||v.msRequestAnimationFrame||function(t){setTimeout(t,1e3/60)},function(e){var i=y.createElement("style");i.type="text/css";try{i.appendChild(y.createTextNode(e))}catch(t){i.styleSheet.cssText=e}y.getElementsByTagName("head")[0].appendChild(i)}(".heart{width: 10px;height: 10px;position: fixed;background: #f00;transform: rotate(45deg);-webkit-transform: rotate(45deg);-moz-transform: rotate(45deg);}.heart:after,.heart:before{content: '';width: inherit;height: inherit;background: inherit;border-radius: 50%;-webkit-border-radius: 50%;-moz-border-radius: 50%;position: fixed;}.heart:after{top: -5px;}.heart:before{left: -5px;}"),g="function"==typeof v.onclick&&v.onclick,v.onclick=function(t){var e,i;g&&g(),e=t,(i=y.createElement("div")).className="heart",w.push({el:i,x:e.clientX-5,y:e.clientY-5,scale:1,alpha:1,color:"rgb("+~~(255*Math.random())+","+~~(255*Math.random())+","+~~(255*Math.random())+")"}),y.body.appendChild(i)},function t(){for(var e=0;e<w.length;e++)w[e].alpha<=0?(y.body.removeChild(w[e].el),w.splice(e,1)):(w[e].y--,w[e].scale+=.004,w[e].alpha-=.013,w[e].el.style.cssText="left:"+w[e].x+"px;top:"+w[e].y+"px;opacity:"+w[e].alpha+";transform:scale("+w[e].scale+","+w[e].scale+") rotate(45deg);background:"+w[e].color+";z-index:99999");requestAnimationFrame(t)}()),m=jQuery,String.prototype.gblen=function(){for(var t=0,e=0;e<this.length;e++)127<this.charCodeAt(e)||94==this.charCodeAt(e)?t+=2:t++;return t},m.extend(m.easing,{easeOutElastic:function(t,e,i,n,o){var a=1.70158,s=0,r=n;return 0==e?i:1==(e/=o)?i+n:(s||(s=.3*o),a=r<Math.abs(n)?(r=n,s/4):s/(2*Math.PI)*Math.asin(n/r),r*Math.pow(2,-10*e)*Math.sin((e*o-a)*(2*Math.PI)/s)+n+i)}}),m.fn.qin=function(t){var e=m.extend({},{offset:22,duration:500,recline:.1},t);return this.each(function(){var i,c,l,n,t=m(this);!function(t){var e="",i=0;if(t.text().trim().gblen()<38)e=t.text().trim();else for(var n=0;n<38&&e.gblen()<38;n++)e=t.text().trim().slice(0,i)+"...",i++;for(var o="",a=0,s=e.length;a<s;a++)o+="<span>"+e.substr(a,1)+"</span>";t.html(o);var r=[];t.children("span").each(function(){var t=m(this),e=t.position();r.push(e),t.css({top:"0px",left:e.left+"px"}),setTimeout(function(){t.css("position","absolute")},0)}),t.data("stringPosition",r)}(t),c=e,l=(i=t).data("stringPosition"),n=0,i.mouseenter(function(t){var e=i.offset();t.pageX,e.left,n=t.pageY-e.top}),i.mousemove(function(t){var e=i.offset(),a=t.pageX-e.left,s=t.pageY-e.top-n;if(!(Math.abs(s)>c.offset)){var r=0<s;i.children("span").each(function(t){var e=m(this),i=l[t],n=Math.abs(a-i.left)*c.recline;n*=r?1:-1;var o=i.top+s-n;r&&o<i.top?o=i.top:!r&&o>i.top&&(o=i.top),e.css({top:o+"px"})})}}),i.mouseleave(function(){i.children("span").each(function(t){m(this).stop(!0,!1).animate({top:"0px"},{duration:c.duration,easing:"easeOutElastic"})})})})},$(".mouseover ul li a").qin({offset:20,duration:500,recline:.1})):setTimeout(function(){var t=$(".footer").detach();$("body > .continar").append(t),$(".footer").css({display:"block"})},1500),$(window).resize(function(){1200<=$(document).width()&&$(".continar,.os-headertop").css({transform:"translateX(0)"})}),$("#my-video").length){var x=videojs("my-video");a=document.querySelector("#my-video"),o=function(i,n){var o;return["webkit","moz","ms","o",""].forEach(function(t){if(!o){""===t&&(n=n.slice(0,1).toLowerCase()+n.slice(1));var e=_typeof(i[t+n]);e+""!="undefined"&&(o="function"===e?i[t+n]():i[t+n])}}),o},"number"==typeof window.screenX?a.addEventListener("dblclick",function(){o(document,"FullScreen")||o(document,"IsFullScreen")?(o(document,"CancelFullScreen"),this.title=this.title.replace("退出","")):o(this,"RequestFullScreen")&&(this.title=this.title.replace("点击","点击退出"))}):alert("爷，现在是年轻人的时代，您就暂且休息去吧~~"),x.on("ended",function(){x.play(),setTimeout(function(){x.pause()},500)}),function(t){for(var e=0;e<t.length;e++)t.eq(e).addClass("color-"+(parseInt(8*Math.random(),10)+1))}($(".friendship .daily-list ul li"))}}),$(function(){var i=window.location.protocol+"//"+window.location.host+"/",d="ajax_centent",e="searchform",n=new String("/page/").split(", "),s="error",f=!1,h=!1,p=!1,r=!1,o=null;function m(t){jQuery(t+"a").click(function(t){if(0<=this.href.indexOf(i)&&1==c(this.href)){t.preventDefault(),this.blur(),this.title||this.name,this.rel;try{e=this,jQuery("ul.nav li").each(function(){jQuery(this).removeClass("current-menu-item")}),jQuery(e).parents("li").addClass("current-menu-item")}catch(t){}a(this.href)}var e}),jQuery("."+e).each(function(t){jQuery(this).attr("action")&&(o=jQuery(this).attr("action"),jQuery(this).submit(function(){return t=jQuery(this).serialize(),p||a(o,0,t),!1;var t}))}),jQuery("."+e).attr("action")}function a(t,e,l){if(!p){r=p=!0;var i=t.replace("http://","").replace("https://",""),n=i.indexOf("/"),o=t.indexOf(i),u=t.substring(o+n);if(1!=e&&"function"==typeof window.history.pushState){var a={foo:1e3+1001*Math.random()};history.pushState(a,"ajax page loaded...",u)}jQuery("#"+d),jQuery("#loading").show(),jQuery("#"+d).fadeTo("slow",1,function(){jQuery("#"+d).fadeIn("slow",function(){jQuery.ajax({type:"GET",url:t,data:l,cache:!1,dataType:"html",success:function(t){p=!1;var e=t.split("<title>"),i=t.split("</title>");if(jQuery("#loading").hide(),jQuery(".continar").css({scrollTop:0}),jQuery("html,body,.continar").animate({scrollTop:0},600),2==e.length||2==i.length){var n=(t=t.split("<title>")[1]).split("</title>")[0];jQuery(document).attr("title",jQuery("<div/>").html(n).text())}1==h&&"undefined"!=typeof _gaq&&(l=void 0===l?"":"?"+l,_gaq.push(["_trackPageview",u+l])),t=(t=t.split('id="'+d+'"')[1]).substring(t.indexOf(">")+1);for(var o=1,a="";0<o;){for(var s=t.split("</div>")[0],r=0,c=s.indexOf("<div");-1!=c;)r++,c=s.indexOf("<div",c+1);o=o+r-1,a=a+t.split("</div>")[0]+"</div>",t=t.substring(t.indexOf("</div>")+6)}document.getElementById(d).innerHTML=a,jQuery("#"+d).css("position","absolute"),jQuery("#"+d).css("left","20000px"),jQuery("#"+d).show(),m("#"+d+" "),1==f&&jQuery(document).trigger("ready"),jQuery("#"+d).hide(),jQuery("#"+d).css("position",""),jQuery("#"+d).css("left",""),jQuery("#"+d).fadeTo("slow",1,function(){})},error:function(t,e,i){p=!1,document.title="Error loading requested page!",document.getElementById(d).innerHTML=s}})})})}}function c(t){for(var e in n)return 0<=t.indexOf(n[e])}jQuery.browser,jQuery(document).ready(function(){m("")}),window.onpopstate=function(t){!0===r&&1==c(document.location.toString())&&a(document.location.toString(),1)}});