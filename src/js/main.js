$(function(){
    var domain_name = window.location.protocol+"//"+window.location.host;
    if (window.location.href != domain_name && window.location.href != domain_name+'/') {
        $("body > .continar").css("margin-top","88px");
    }
    // 评论区域样式兼容
    setTimeout(function(){
        if($("#reply-title a").is(":hidden")){
            $("#reply-title").hide();
        }
    })
    //点击图片放大全屏start
    var runPrefixMethod = function (element, method) {
        var usablePrefixMethod;
        ["webkit", "moz", "ms", "o", ""].forEach(function (prefix) {
            if (usablePrefixMethod) return;
            if (prefix === "") {
                // 无前缀，方法首字母小写
                method = method.slice(0, 1).toLowerCase() + method.slice(1);
            }

            var typePrefixMethod = typeof element[prefix + method];

            if (typePrefixMethod + "" !== "undefined") {
                if (typePrefixMethod === "function") {
                    usablePrefixMethod = element[prefix + method]();
                } else {
                    usablePrefixMethod = element[prefix + method];
                }
            }
        });

        return usablePrefixMethod;
    };
    if (typeof window.screenX === "number") {
        var eleFull = document.querySelectorAll(".log-text img");
        for (var i = 0; i < eleFull.length; i++)
            eleFull[i].addEventListener("click", function () {
                if (runPrefixMethod(document, "FullScreen") || runPrefixMethod(document, "IsFullScreen")) {
                    runPrefixMethod(document, "CancelFullScreen");
                    this.title = this.title.replace("退出", "");
                } else if (runPrefixMethod(this, "RequestFullScreen")) {
                    this.title = this.title.replace("点击", "点击退出");
                }
            });
    } else {
        alert("爷，现在都什么时代了，你还在用这么土的浏览器~~");
    }
    //点击图片放大全屏end

    //给友情链接列表增加iconfont
    $("ul.friendsChain li a").before("<i class='iconfont'>&#xe64a;</i>");

    // 文章详情页点赞
    setInterval(function () {
        $(".page-reward .page-reward-btn .tooltip-item font,.page-reward .page-reward-btn .tooltip-item a").toggleClass("s_show");
    }, 2000)
    //点赞
    $.fn.postLike = function () {
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
                function (data) {
                    $(rateHolder).html(data);
                });
            return false;
        }
    };
    $(document).on("click", ".favorite",
        function () {
            $(this).postLike();
        });

    // 针对畅言傻逼作transform兼容
    var mBenu = document.getElementById('menu');
    document.oncontextmenu = function (ev) {
        var ev = ev || event;
        mBenu.style.display = 'block';
        mBenu.style.left = ev.pageX - 85 + 'px';
        mBenu.style.top = ev.pageY - 24 + 'px';
        return false
    }
    document.onclick = function () {
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
    $(".navto-search a").click(function () {
        $(".site-search.active.pc").stop(true, true).slideToggle(150, function () {
            if ($(this).is(":visible") && $(".nav ul.music-nav li>p").css("opacity") == 1) {
                //$('.mod-header_music-icon').trigger("click");
            } else if ($(this).is(":hidden") && $(".nav ul.music-nav li>p").css("opacity") == 0) {
                //$('.mod-header_music-icon').trigger("click");
            } else if ($(".nav ul.music-nav li>p").css("opacity") == 0) {
                return false;
            }
        });
        if (searchShow) {
            $('.header').css('z-index', '11');
            searchShow = false;
        } else {
            $('.header').css('z-index', '10');
            searchShow = true;
        }
        $(this).find("i").toggleClass("fa-search");
        $(this).find("i").toggleClass("fa-remove");
    });

    $(".header").addClass("Top");

    // 根据缓存状态初始化音乐
    if (localStorage.getItem("off_y") != 1) {
        $(".mod-header_music-icon").removeClass("hover").attr("title", "钢琴音效NO");
        $(".nav ul.music-nav li > p").css("opacity", "0");
        localStorage.setItem("off_y", 0);
    } else {
        $(".mod-header_music-icon").addClass("hover").attr("title", "钢琴音效OFF");
        $(".nav ul.music-nav li > p").css("opacity", "1");
        localStorage.setItem("off_y", 1);
    }

    // 跳动音符start
    $(".mod-header_music-icon").click(function () {
        clearInterval(navMinHideSetTime); //清除鼠标离开li时候的定时器
        if (localStorage.getItem("off_y") != 1) {
            $(this).addClass("hover");
            $(this).attr("title", "钢琴音效OFF");
            $(".nav ul.music-nav li > p").css("opacity", "1");
            localStorage.setItem("off_y", 1);
        } else {
            $(this).removeClass("hover");
            $(".nav ul.music-nav li > p").css("opacity", "0");
            $(this).attr("title", "钢琴音效NO");
            localStorage.setItem("off_y", 0);
        }
    });
    // 跳动音符end

    //钢琴导航start
    var $index = null;
    var musicObj = null;
    var navMinHideSetTime = null;
    var musicDown = $(".nav ul.music-nav li:not(.mod-header_music-icon)");
    $(".nav ul.music-nav li:not(.mod-header_music-icon)").hover(function (event) {
            $(this).parents(".header").css("z-index", "11"); //默认下方轮播层级高于头部
            $index = $(this).index();
            musicObj = $(".nav ul.music-nav li:not(.mod-header_music-icon)").eq($index).find('audio');
            if (localStorage.getItem("off_y") == 1) {
                $(this).addClass("active");
                musicObj.get(0).src = "/wp-content/themes/Art_Blog/music/nav_" + parseInt($index+1) + ".mp3";
            } else {
                musicObj.get(0).src = "";
            }
            event.stopPropagation();
        },
        function () {
            clearInterval(navMinHideSetTime);
            navMinHideSetTime = setInterval(function () { //不断检测鼠标移开后下拉二级菜单是否完好影藏
                if (searchShow && $(".nav-min").eq(0).css("opacity") == 0 && $(".nav-min").eq(1).css("opacity") == 0) {
                    $(".header").css("z-index", "10"); //避免在正常时候下方轮播分割旋转时候被遮盖 
                    clearInterval(navMinHideSetTime);
                }
            }, 1000)
            $(this).removeClass("active");
        });

    function musicdown(number) {
        var objLi = $(".nav ul.music-nav li");
        var parameter = objLi.eq(number).attr("detaName");
        objLi.eq(number).find('audio').get(0).src = "/wp-content/themes/Art_Blog/music/" + parameter + ".mp3";
        if (number !== 8) {
            objLi.eq(number).addClass("active")
        }
    }

    $(document).keydown(function (event) {
        if (localStorage.getItem("off_y") == 1) {
            //a65 s83 d68 f70 g71 h72 j74 k75 l76
            if (event.keyCode == 65) {
                musicdown(0)
            } else if (event.keyCode == 83) {
                musicdown(1)
            } else if (event.keyCode == 68) {
                musicdown(2)
            } else if (event.keyCode == 70) {
                musicdown(3)
            } else if (event.keyCode == 71) {
                musicdown(4)
            } else if (event.keyCode == 72) {
                musicdown(5)
            } else if (event.keyCode == 74) {
                musicdown(6)
            } else if (event.keyCode == 75) {
                musicdown(7)
            } else if (event.keyCode == 76) {
                musicdown(8)
            }
        }
    });
    $(document).keyup(function () {
        setTimeout(function () {
            musicDown.removeClass("active")
        }, 150);
    });
    //钢琴导航end

    //PC二级菜单start
    var time = null;
    $(".nav ul.music-nav li").hover(function (event) {
        clearTimeout(time);
        $(this).find('.nav-min').css({
            "opacity": "1",
            "visibility": "visible",
            "top": "49px"
        }).parent().siblings('li').find('.nav-min').css({
            "opacity": "0",
            "visibility": "hidden",
            "top": "70px"
        });
        // $(".header-conter .nav-min").eq(0).css({
        //     "opacity": "1",
        //     "visibility": "visible",
        //     "top": "49px"
        // });
        // $(".header-conter .nav-min").eq(1).css({
        //     "opacity": "0",
        //     "visibility": "hidden",
        //     "top": "70px"
        // });
        event.stopPropagation();
    }, function () {
        clearTimeout(time);
        time = setTimeout(function () {
            $(".header-conter .nav-min").css({
                "opacity": "0",
                "visibility": "hidden",
                "top": "70px"
            });
        }, 0);

    });
    $(".works").hover(function (event) {
        clearTimeout(time);
        $(".header-conter .nav-min").eq(1).css({
            "opacity": "1",
            "visibility": "visible",
            "top": "49px"
        });
        $(".header-conter .nav-min").eq(0).css({
            "opacity": "0",
            "visibility": "hidden",
            "top": "70px"
        });
        event.stopPropagation();
    }, function () {
        clearTimeout(time);
        time = setTimeout(function () {
            $(".header-conter .nav-min").css({
                "opacity": "0",
                "visibility": "hidden",
                "top": "70px"
            });
        }, 0);
    });
    //PC二级菜单end

    $(".aircraft").click(function () {
        $('body,html').animate({
                scrollTop: 0
            },
            800);
        $(this).animate({
                "bottom": "500px",
                "opacity": "0"
            },
            1000,
            function () {
                setTimeout(function () {
                        $(".aircraft").css({
                            "bottom": "50px",
                            "opacity": "1"
                        })
                    },
                    500)
            })
    });
    $("#wuyousujian-kefuDv").hover(function () {
            $("#wuyousujian-kefuDv").stop().animate({
                "right": "-100px"
            }, 500)
        },
        function () {
            $("#wuyousujian-kefuDv").stop().animate({
                "right": "-196px"
            }, 500)
        });
    $(document).scroll(function () {
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
        if (scrollTop <= 0) {
            $(".header").addClass("Top")
            $(".header").removeClass("hover")
        } else {
            $(".header").removeClass("Top")
            $(".header").addClass("hover")
        }
        //var se = document.documentElement.clientHeight;
    });
    $(".continar .continar-left-top > span").each(function () {
        var maxwidth = 115;
        if ($(this).text().length > maxwidth) {
            $(this).text($(this).text().substring(0, maxwidth));
            $(this).html($(this).html() + "...")
        }
    });
    var obtn = true;
    $(".btn_menu,.cover").on("touchmove", function (event) {
        event.preventDefault();
    })
    $(".btn_menu,.cover").on("touchstart", myFunction);

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
        if ($(".site-search").is(":visible")) {
            $(".os-headertop .site-search").slideToggle(100);
            $(".xis").find("i").toggleClass("fa-search");
            $(".xis").find("i").toggleClass("fa-remove")
        }
        obtn = !obtn
    }

    //移动端禁止侧边导航上下滚动start
    $(".os-herder,.site-search").on("touchmove", function (event) {
        //event.stopPropagation();
        event.preventDefault();
    });
    //移动端禁止侧边导航上下滚动end

    //禁止ios11自带浏览器缩放功能start
    document.addEventListener('touchstart', function (event) {
        if (event.touches.length > 1) {
            event.preventDefault();
        }
    })
    var lastTouchEnd = 0;
    document.addEventListener('touchend', function (event) {
        var now = (new Date()).getTime();
        if (now - lastTouchEnd <= 300) {
            event.preventDefault();
        }
        lastTouchEnd = now;
    }, false)
    //禁止ios11自带浏览器缩放功能end

    //移动端头部下拉搜索start
    $(".xis").on("touchstart", function () {
        $(".os-headertop .site-search").slideToggle(100);
        $(this).find("i").toggleClass("fa-search");
        $(this).find("i").toggleClass("fa-remove")
    });
    //移动端头部下拉搜索end

    if ($("html,body").width() < 960) {
        $(".nav-s1 > a").html("给我留言");
        $(".log-text").css("width", "100%")
    }
    //.mouseover ul li em序列号
    for (var i = 0; i <= $(".mouseover ul li").length; i++) {
        $(".mouseover ul li").eq(i).find("em").html(i + 1)
    }
    $(".text:lt(3) .new-icon").show();
    $(".clearfix img").hide();

    // 移动端二级菜单导航start
    $("ul.slide-left li").on("touchstart", function (e) {
        console.log(e.target.dataset.implement)
        if(e.target.dataset.implement == 'element'){
            $(this).find(".slide_slect").stop().slideToggle();
            $(this).find(".iconfont_click").toggleClass("icon-xiajiantou");
            $(this).find(".iconfont_click").toggleClass("icon-shangjiantou");
        }
    })
    // 移动端二级菜单导航end

    //留言板手风琴start
    $(".accordion .accordion_center ul li").hover(function () {
        $(this).stop().animate({
            "width": "340px"
        }).siblings("li").stop().animate({
            "width": "166px"
        });
        $(this).find(".slide-item").stop().fadeOut();
        $(this).find(".mask").stop(true, true).fadeIn();
        $(".accordion_center ul li .slide-item .iconfont").css("animation", "arrow_move1 1s .5s infinite alternate");
        //上：暂停首页iconfont动画
        return false;
    }, function () {
        $(this).find(".slide-item").fadeIn();
        $(this).find(".mask").stop(true, false).fadeOut(); //鼠标离开过后，动画暂停，切不需要完成
    });

    $(".accordion .accordion_center").mouseleave(function () {
        $(".accordion .accordion_center ul li").stop().animate({
            "width": "200px"
        });
        $(".accordion .accordion_center ul li").find(".slide-item").fadeIn();
        $(".accordion .accordion_center ul li").find(".mask").fadeOut();
        $(".accordion_center ul li .slide-item .iconfont").css("animation", "arrow_move 1s .5s infinite alternate");
        //上：开启首页iconfont动画，修复因为鼠标放上li上去导致动画停止后的bug
    });
    //留言板手风琴end

    if ($(document).width() >= 1200) {
        //点击页面出现爱心
        if (!!window.ActiveXObject || "ActiveXObject" in window){
            console.log("天啦，偶买噶，你竟然还在用IE？")
         }else{
            ! function (e, t, a) {
                function r() {
                    for (var e = 0; e < s.length; e++) s[e].alpha <= 0 ? (t.body.removeChild(s[e].el), s.splice(e, 1)) : (s[e].y--,
                        s[e].scale += .004, s[e].alpha -= .013, s[e].el.style.cssText = "left:" + s[e].x + "px;top:" + s[e]
                        .y + "px;opacity:" + s[e].alpha + ";transform:scale(" + s[e].scale + "," + s[e].scale +
                        ") rotate(45deg);background:" + s[e].color + ";z-index:99999");
                    requestAnimationFrame(r)
                }
    
                function n() {
                    var t = "function" == typeof e.onclick && e.onclick;
                    e.onclick = function (e) {
                        t && t(), o(e)
                    }
                }
    
                function o(e) {
                    var a = t.createElement("div");
                    a.className = "heart", s.push({
                        el: a,
                        x: e.clientX - 5,
                        y: e.clientY - 5,
                        scale: 1,
                        alpha: 1,
                        color: c()
                    }), t.body.appendChild(a)
                }
    
                function i(e) {
                    var a = t.createElement("style");
                    a.type = "text/css";
                    try {
                        a.appendChild(t.createTextNode(e))
                    } catch (t) {
                        a.styleSheet.cssText = e
                    }
                    t.getElementsByTagName("head")[0].appendChild(a)
                }
    
                function c() {
                    return "rgb(" + ~~(255 * Math.random()) + "," + ~~(255 * Math.random()) + "," + ~~(255 * Math.random()) +")"
                }
    
                var s = [];
                e.requestAnimationFrame = e.requestAnimationFrame || e.webkitRequestAnimationFrame || e.mozRequestAnimationFrame ||
                    e.oRequestAnimationFrame || e.msRequestAnimationFrame || function (e) {
                        setTimeout(e, 1e3 / 60)
                    }, i(
                        ".heart{width: 10px;height: 10px;position: fixed;background: #f00;transform: rotate(45deg);-webkit-transform: rotate(45deg);-moz-transform: rotate(45deg);}.heart:after,.heart:before{content: '';width: inherit;height: inherit;background: inherit;border-radius: 50%;-webkit-border-radius: 50%;-moz-border-radius: 50%;position: fixed;}.heart:after{top: -5px;}.heart:before{left: -5px;}"
                    ), n(), r()
            }(window, document);
        }
    } else {
        // 移动端固定导航fixed-bug
        setTimeout(function(){
            var objec = $('.footer').detach();
            $("body > .continar").append(objec);
            $(".footer").css({"display": "block",});
        },1500)
    }

    // 当窗口改变时候start
    $(window).resize(function() {
        if($(document).width() >= 1200){
            // 当从移动端点开了侧边栏，然后改编窗口到pc端，关闭偏移
            $(".continar,.os-headertop").css({
                "transform": "translateX(0)"
            })
        }
    });
    // 当窗口改变时候end

    //视频播放start
    if($('#my-video').length){
        var delSetInterval = null; //定时器
        //var ISvideo = false; //当前是否全屏
        var myPlayer = videojs( 'my-video' );
        var howMuchIsDownloaded = 0; //初始化缓冲百分比
        var eleFull = document.querySelector( "#my-video" ); //视频对象

        //视频全屏方法
        var runPrefixMethod = function (element, method) {
            var usablePrefixMethod;
            ["webkit", "moz", "ms", "o", ""].forEach(function (prefix) {
                if (usablePrefixMethod) return;
                if (prefix === "") {
                    // 无前缀，方法首字母小写
                    method = method.slice(0, 1).toLowerCase() + method.slice(1);

                }
                var typePrefixMethod = typeof element[prefix + method];
                if (typePrefixMethod + "" !== "undefined") {
                    if (typePrefixMethod === "function") {
                        usablePrefixMethod = element[prefix + method]();
                    } else {
                        usablePrefixMethod = element[prefix + method];
                    }
                }
            });
            return usablePrefixMethod;
        };
        if (typeof window.screenX === "number") {
            eleFull.addEventListener("dblclick", function () {
                if (runPrefixMethod(document, "FullScreen") || runPrefixMethod(document, "IsFullScreen")) {
                    runPrefixMethod(document, "CancelFullScreen");
                    this.title = this.title.replace("退出", "");
                } else if (runPrefixMethod(this, "RequestFullScreen")) {
                    this.title = this.title.replace("点击", "点击退出");
                }
            });
        } else {
            alert("爷，现在是年轻人的时代，您就暂且休息去吧~~");
        }
        
        //初始化加载需要先缓冲到50%+才会播放，避免高清视频卡顿
        /*delSetInterval = setInterval( function() {
            howMuchIsDownloaded = myPlayer.bufferedPercent() //返回当前百分比缓冲0-1
            console.log('当前视频缓冲至：',howMuchIsDownloaded*100 + '%')
            if ( howMuchIsDownloaded > 0.5 ) {
                clearInterval( delSetInterval )
                myPlayer.play();
            }
        }, 1500 )
        */
        //当视频播放完成后，重新加载渲染，随时准备第二次重播
        myPlayer.on("ended", function () {
            //alert("视频已播放完成");
            myPlayer.play();
            setTimeout(function () {
                myPlayer.pause();
            }, 500);
        });

        //随机数背景图片
        function randomColor(option){
            for(var i=0; i<option.length; i++){
                option.eq(i).addClass('color-'+ (parseInt(Math.random()*8,10)+1))
            }
        }
        randomColor($('.friendship .daily-list ul li'))
    }
    //视频播放end
})