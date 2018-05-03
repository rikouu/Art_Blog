$.noConflict();
jQuery(function($) {
    if (window.location.href !== "http://www.weipxiu.com" && window.location.href !== "http://www.weipxiu.com/") {
        $("#js_banner,#js_banner_1").remove();
        $(".continar-right .aside .video-js").remove();
        $(".continar-right .aside .video-js").remove();
        $(".continar-right .aside > img").css('display','block');
        //$(".continar .continar-left").css("WebkitTransform", "translateX(0px)");
        //$(".continar .continar-left").css("MsTransform", "translateX(0px)");
        //$(".continar .continar-left").css("transform", "translateX(0px)");
        //$(".continar .continar-left").css({
            //"opacity": "1"
        //});
        //$(".continar-right").css("WebkitTransform", "translateX(0)");
        //$(".continar-right").css("MsTransform", "translateX(0)");
        //$(".continar-right").css("transform", "translateX(0)")
    }

	//给友情链接列表增加iconfont
	$("ul.friendsChain li a").before("<i class='iconfont'>&#xe64a;</i>");
	

    // 文章详情页点赞
    setInterval(function(){
        $(".page-reward .page-reward-btn .tooltip-item font,.page-reward .page-reward-btn .tooltip-item a").toggleClass("s_show");
    },2000)
    //点赞
    $.fn.postLike = function() {
        if ($(this).hasClass('done')) {
            return false;
        } else {
            $(this).addClass('done');
            var id = $(this).data("id"),
            action = $(this).data('action'),
            rateHolder = $(this).children('.count');
            var ajax_data = {
                action: "bigfa_like",
                um_id: id,
                um_action: action
            };
            $.post("/wp-admin/admin-ajax.php", ajax_data,
            function(data) {
                $(rateHolder).html(data);
            });
            return false;
        }
    };
    $(document).on("click", ".favorite",
    function() {
        $(this).postLike();
    }); 

    // 针对畅言傻逼作transform兼容
    $(".continar-left").css("transform","none");
    var mBenu = document.getElementById('menu');
    document.oncontextmenu = function(ev) {
        var ev = ev || event;
        mBenu.style.display = 'block';
        mBenu.style.left = ev.pageX - 85 + 'px';
        mBenu.style.top = ev.pageY - 24 + 'px';
        return false
    }
    document.onclick = function() {
        mBenu.style.display = 'none'
    }
    /*document.onkeydown = function(ev) {
        var ev = ev || event;
        if (ev.keyCode == 123) {
            return false
        }
        if (ev.ctrlKey == true && ev.keyCode == 83) {
            return false
        }
    }*/
    var searchShow = true;
    $(".navto-search a").click(function() {
        $(".site-search.active.pc").stop(true, true).slideToggle(150,function(){
            if($(this).is(":visible") && $(".nav ul.music-nav li>p").css("opacity") == 1){
                $('.mod-header_music-icon').trigger("click");
            }else if($(this).is(":hidden") && $(".nav ul.music-nav li>p").css("opacity") == 0){
                $('.mod-header_music-icon').trigger("click");
            }else if($(".nav ul.music-nav li>p").css("opacity") == 0){
                return false;
            }
        });
        if(searchShow){
            $('.header').css('z-index','11');
            searchShow = false;
        }else{
            $('.header').css('z-index','10');
            searchShow = true;
        }
        $(this).find("i").toggleClass("fa-search");
        $(this).find("i").toggleClass("fa-remove");
    });

    // 背景音乐start
    var off = true;
    $(".control").click(function() {
        if (off) {
            $("#music").get(0).play()
        } else {
            $("#music").get(0).pause()
        }
        $(this).toggleClass("hover");
        off = !off
    });
    //判断当前页面是否存在背景音乐播放器，如果存在的话将声音大小调制到50%
    if(document.getElementById("music")){
        document.getElementById("music").volume = 0.5;
    }
    // 背景音乐end

    $(".header").addClass("Top");

    // 跳动的Logo start
    $("#Logo").hover(function() {
        $("#dj li").css("animation", "move .5s alternate");
    },
    function() {
        $('#dj li').attr("style", "");
    });
    // 跳动的Logo end

    // 跳动音符start
    var off_y = true;
    $(".mod-header_music-icon").click(function(){
        clearInterval(navMinHideSetTime);//清除鼠标离开li时候的定时器
        if(off_y){
           $(this).removeClass("hover"); 
           $(".nav ul.music-nav li > p").css("opacity","0");
           $(this).attr("title","钢琴音效NO");
        }
        else{
           $(this).addClass("hover");
           $(this).attr("title","钢琴音效OFF");
           $(".nav ul.music-nav li > p").css("opacity","1");
        }
        off_y = !off_y;
    });
    // 跳动音符end

	//钢琴导航start
	var $index = null;
    var musicObj = null;
    var navMinHideSetTime = null;
	var musicDown = $(".nav ul.music-nav li:not(.mod-header_music-icon)");
    $(".nav ul.music-nav li:not(.mod-header_music-icon)").hover(function(event) {
        $(this).parents(".header").css("z-index","11");//默认下方轮播层级高于头部
		$index = $(this).index();
        var deta = $(this).attr("detaName");
		musicObj= $(".nav ul.music-nav li:not(.mod-header_music-icon)").eq($index).find('audio');
        if(off_y){
			$(this).addClass("active");
			musicObj.get(0).src = "http://www.weipxiu.com/wp-content/themes/boke/music/" + deta + ".mp3";
        }else{
            musicObj.get(0).src = "";
        }
        event.stopPropagation();
    },
    function() {
        clearInterval(navMinHideSetTime);
        navMinHideSetTime = setInterval(function(){//不断检测鼠标移开后下拉二级菜单是否完好影藏
                if (searchShow && $(".nav-min").eq(0).css("opacity") == 0 && $(".nav-min").eq(1).css("opacity") == 0) {
                    $(".header").css("z-index","10"); //避免在正常时候下方轮播分割旋转时候被遮盖 
                    clearInterval(navMinHideSetTime);
                }
            },1000)
		$(this).removeClass("active");
	});

	function musicdown(number){
		var parameter = musicDown.eq(number).attr("detaName");
		musicDown.eq(number).find('audio').get(0).src = "http://www.weipxiu.com/wp-content/themes/boke/music/" + parameter + ".mp3";
		musicDown.eq(number).addClass("active")
	}
	
	$(document).keydown(function(event){
		if(off_y){
			//a65 s83 d68 f70 g71 h72 j74 k75 l76
			if(event.keyCode == 65){
				musicdown(0)
            }
            else if(event.keyCode == 83){
				musicdown(1)
			}
			else if(event.keyCode == 68){
				musicdown(2)
			}
			else if(event.keyCode == 70){
				musicdown(3)
			}
			else if(event.keyCode == 71){
				musicdown(4)
			}
			else if(event.keyCode == 72){
				musicdown(5)
			}
			else if(event.keyCode == 74){
				musicdown(6)
			}
			else if(event.keyCode == 75){
				musicdown(7)
			}
		}
	});
	$(document).keyup(function(){
		setTimeout(function(){
            musicDown.removeClass("active")
        },150);
	});
	//钢琴导航end

    //PC二级菜单start
    var time = null;
    $(".front").hover(function(event) {
        clearTimeout(time);
        $(".header-conter .nav-min").eq(0).css({"opacity": "1","visibility": "visible","top": "49px"});
        $(".header-conter .nav-min").eq(1).css({"opacity": "0","visibility": "hidden","top": "70px"});
        event.stopPropagation();
    },function(){
        clearTimeout(time);
        time = setTimeout(function(){
            $(".header-conter .nav-min").css({"opacity": "0","visibility": "hidden","top": "70px"});
        },0);
        
    });
    $(".works").hover(function(event) {
        clearTimeout(time);
        $(".header-conter .nav-min").eq(1).css({"opacity": "1","visibility": "visible","top": "49px"});
        $(".header-conter .nav-min").eq(0).css({"opacity": "0","visibility": "hidden","top": "70px"});
        event.stopPropagation();
    },function(){
        clearTimeout(time);
        time = setTimeout(function(){
            $(".header-conter .nav-min").css({"opacity": "0","visibility": "hidden","top": "70px"});
        },0);
    });
    //PC二级菜单end

   
    $(".aircraft").click(function() {
        $('body,html').animate({
            scrollTop: 0
        },
        1200);
        $(this).animate({
            "bottom": "500px",
            "opacity": "0"
        },
        1000,
        function() {
            setTimeout(function() {
                $(".aircraft").css({
                    "bottom": "50px",
                    "opacity": "1"
                })
            },
            500)
        })
    });
    $("#wuyousujian-kefuDv").hover(function() {
        $("#wuyousujian-kefuDv").stop().animate({
            "right": "-100px"
        },500)
    },
    function() {
        $("#wuyousujian-kefuDv").stop().animate({
            "right": "-196px"
        },500)
    });

    $(document).scroll(function() {
        var scrollTop = $(document).scrollTop();
        if (scrollTop > 500) {
            $(".aircraft").css({
                "display": "block",
                "opacity": "1"
            })
        } else {
            $(".aircraft").css({
                "display": "none",
                "opacity": "0"
            })
        }
        if ($(document).scrollTop() <= 0) {
            $(".header").addClass("Top")
        } else {
            $(".header").removeClass("Top")
        }
        var se = document.documentElement.clientHeight;
        if ($(document).scrollTop() > 0) {
            $(".header").addClass("hover")
        } else {
            $(".header").removeClass("hover")
        }
    });
    $(".continar .continar-left-top > span").each(function() {
        var maxwidth = 115;
        if ($(this).text().length > maxwidth) {
            $(this).text($(this).text().substring(0, maxwidth));
            $(this).html($(this).html() + "...")
        }
    });
    var obtn = true;
	$(".btn_menu,.cover").on("touchstart",myFunction);
    function myFunction() {
        $(".os-herder").get(0).classList.toggle("btn");
        $(".cover").toggle();
        if (obtn) {
            $(".continar,.os-headertop").css({
                "transform": "translateX(160px)"
            })
        } else {
            $(".continar,.os-headertop").css({
                "transform": "translateX(0)"
            })
        }
        obtn = !obtn
    }

    //移动端禁止侧边导航上下滚动start
    $(".os-herder").on("touchmove",function(event) {
        //event.stopPropagation();
        event.preventDefault();
    });
    //移动端禁止侧边导航上下滚动end

    //移动端头部下拉搜索start
    $(".xis").on("touchstart",function(){
        $(".os-headertop .site-search").slideToggle(100);
        $(this).find("i").toggleClass("fa-search");
        $(this).find("i").toggleClass("fa-remove")
    });
	//移动端头部下拉搜索end

    if ($("html,body").width() < 960) {
        $(".nav-s1 > a").html("给我留言");
        $(".log-text").css("width", "100%")
    }
    for (var i = 0; i <= $(".widget ul li").length; i++) {
        $(".widget ul li").eq(i).find("em").html(i + 1)
    }
    $(".text:lt(3) .new-icon").show();
    $(".clearfix img").hide();

    // 移动端二级菜单导航start
    $("ul.slide-left li").on("touchstart",function(){
       $(this).find(".slide_slect").stop().slideToggle();
        $(this).find(".iconfont_click").toggleClass("icon-xiajiantou");
        $(this).find(".iconfont_click").toggleClass("icon-shangjiantou"); 
    })
    // 移动端二级菜单导航end

    //留言板手风琴start
    $(".accordion .accordion_center ul li").hover(function(){
        $(this).stop().animate({"width":"340px"}).siblings("li").stop().animate({"width":"166px"});
        $(this).find(".slide-item").stop().fadeOut();
        $(this).find(".mask").stop(true,true).fadeIn();
        $(".accordion_center ul li .slide-item .iconfont").css("animation","arrow_move1 1s .5s infinite alternate");
        //上：暂停首页iconfont动画
        return false;
    },function(){
        $(this).find(".slide-item").fadeIn();
        $(this).find(".mask").stop(true,false).fadeOut();//鼠标离开过后，动画暂停，切不需要完成
    });

    $(".accordion .accordion_center").mouseleave(function(){
        $(".accordion .accordion_center ul li").stop().animate({"width":"200px"});
        $(".accordion .accordion_center ul li").find(".slide-item").fadeIn();
        $(".accordion .accordion_center ul li").find(".mask").fadeOut();
        $(".accordion_center ul li .slide-item .iconfont").css("animation","arrow_move 1s .5s infinite alternate");
        //上：开启首页iconfont动画，修复因为鼠标放上li上去导致动画停止后的bug
    });
    //留言板手风琴end
});