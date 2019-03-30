$(function () {
    //网站预加载运动start
    if ($(document).width() >= 1200) {
        if (window.location.href == "https://www.weipxiu.com" || window.location.href == "https://www.weipxiu.com/") {
            $("#js_banner").show();
            $("body > .continar").css("margin-top","15px");
            //首页公告开始
            setInterval(function () {
                $(".notice").show();
                $(".notice ul").stop(true, true).animate({
                    "top": "-20px"
                }, function () {
                    var node = $(".notice ul li:eq(0)").remove();
                    $(".notice ul").append(node);
                    $(".notice ul").css("top", "0");
                });
            }, 5000);

            //IE浏览器屏蔽部分动效start
            $(".mod-index__feature .img_list_6pic a").removeClass("word_display");
            if (!!window.ActiveXObject || "ActiveXObject" in window) {
                console.log("当前浏览器IE内核，部分效果不可展现！")
            } else {
                //首页轮播下sd导航start
                $(".mod-index__feature .img_list_6pic a").mouseenter(function () {
                    $(this).addClass("word_display")
                });
                $(".mod-index__feature .img_list_6pic a").mouseleave(function () {
                    $(this).removeClass("word_display");
                });
                //首页轮播下sd导航end

                // 首页弹窗开始
                // setTimeout(function () {
                //     var oBox = document.getElementById("curriculum");
                //     var oUl = oBox.getElementsByTagName("ul")[0];
                //     var oContact = oBox.getElementsByClassName("contact")[0];
                //     var oClos = oBox.getElementsByClassName("close")[0];
                //     var aLi = oUl.children;
                //     var oBack = oContact.getElementsByTagName("a")[0];
                //     oBox.style.opacity = 1;
                //     oBox.addEventListener("transitionEnd", end, false);
                //     oBox.addEventListener("webkitTransitionEnd", end, false);
                //     //oUl.style.transition=".5s 600ms linear";
                //     function end() {
                //         this.removeEventListener("transitionEnd", end, false);
                //         this.removeEventListener("webkitTransitionEnd", end, false);
                //         oUl.style.top = 0;
                //         oBox.style.height = "230px";
                //         oBox.style.top = "0px";
                //         for (var i = 0; i < aLi.length; i++) {
                //             aLi[i].style.transition = "0.5s " + (300 + i * 200) + "ms";
                //             aLi[i].style.opacity = 1;
                //             aLi[i].style.transform = "rotateX(0deg)";
                //             aLi[i].style.WebkitTransform = "rotateX(0deg)";
                //             aLi[i].off = true;
                //             aLi[i].index = i;
                //             aLi[i].onmouseover = over;
                //             aLi[i].onmouseout = function () {
                //                 if (this.off) {
                //                     this.style.transform = "rotateY(0deg)";
                //                     this.style.WebkitTransform = "rotateY(0deg)";
                //                 }
                //             };
                //             aLi[i].onclick = fnClick;
                //         }
                //     }

                //     function over(ev) {
                //         if (this.off) {
                //             var iX = ev.clientX - getLeft(this);
                //             this.style.transition = "0.5s";
                //             if (iX > this.offsetWidth / 2) {
                //                 this.style.transform = "rotateY(30deg)";
                //                 this.style.WebkitTransform = "rotateY(30deg)";
                //             } else {
                //                 this.style.transform = "rotateY(-30deg)";
                //                 this.style.WebkitTransform = "rotateY(-30deg)";
                //             }
                //         }
                //     }

                //     function getLeft(obj) {
                //         var iLeft = 0;
                //         while (obj) {
                //             iLeft += obj.offsetLeft;
                //             obj = obj.offsetParent;
                //         }
                //         return iLeft
                //     }

                //     function fnClick(ev) {
                //         var iX = ev.clientX - getLeft(this);
                //         var iDeg = iX > this.offsetWidth / 2 ? -180 : 180;
                //         var iMax = 0;
                //         var iNow = 0;
                //         oContact.style.display = "block";
                //         for (var i = 0; i < aLi.length; i++) {
                //             if (iMax < Math.abs(i - this.index)) {
                //                 iMax = Math.abs(i - this.index);
                //                 iNow = i;
                //             }
                //             aLi[i].off = false;
                //             aLi[i].style.transition = "0.5s " + Math.abs(i - this.index) * 100 + "ms cubic-bezier(0.115, -0.195, 0.255, -0.280)";
                //             aLi[i].style.transform = "rotateY(" + iDeg + "deg)";
                //             aLi[i].style.WebkitTransform = "rotateY(" + iDeg + "deg)";
                //             aLi[i].style.opacity = 0.1;
                //         }
                //         aLi[iNow].addEventListener("transitionEnd", end, false);
                //         aLi[iNow].addEventListener("webkitTransitionEnd", end, false);

                //         function end() {
                //             this.removeEventListener("transitionEnd", end, false);
                //             this.removeEventListener("webkitTransitionEnd", end, false);
                //             oContact.style.opacity = 1;
                //         }
                //     }
                //     oBack.onclick = function () {
                //         oContact.style.opacity = 0;
                //         oContact.addEventListener("transitionEnd", end, false);
                //         oContact.addEventListener("webkitTransitionEnd", end, false);

                //         function end() {
                //             this.removeEventListener("transitionEnd", end, false);
                //             this.removeEventListener("webkitTransitionEnd", end, false);
                //             for (var i = 0; i < aLi.length; i++) {
                //                 aLi[i].off = true;
                //                 aLi[i].style.transition = "0.5s " + (aLi.length - i - 1) * 100 + "ms";
                //                 aLi[i].style.transform = "rotateY(0deg)";
                //                 aLi[i].style.WebkitTransform = "rotateY(0deg)";
                //                 aLi[i].style.opacity = 1;
                //             }
                //         }
                //     };

                //     function Clos() {
                //         oBox.style.transition = ".8s height,0.4s opacity .2s";
                //         oBox.style.height = "40px";
                //         oBox.style.opacity = 0;
                //         setTimeout(function () {
                //             $("#curriculum").remove();
                //         }, 1000)
                //     };
                //     oClos.onclick = function () {
                //         Clos();
                //     }
                //     setTimeout(function () {
                //         Clos()
                //     }, 8000);
                //     document.onkeydown = function (e) {
                //         if (!e) e = window.event;
                //         if ((e.keyCode || e.which) == 13) {
                //             Clos();
                //         };
                //     }
                // }, 2500);
                // 首页弹窗结束
            }
            //IE浏览器屏蔽部分动效end

            //轩枫博客start
            //turnEffect（翻转）boomEffect（爆炸）pageEffect（翻页）skewEffect（扭曲）cubeEffect（立方体）
            var flippingMode = ['turnEffect', 'boomEffect', 'skewEffect'];
            var randomNum = Math.floor(Math.random() * 3);
            var banner = new Banner({
                banner: '#banner_img',
                index: 0,
                autoplay: 8000,
                width: 1200,
                height: 300,
                images: [{
                        url: 'https://lijun2017.oss-cn-shanghai.aliyuncs.com/pc_banner/banner-1.jpg',
                        link: 'https://www.weipxiu.com/?cat=29'
                    }, {
                        url: 'https://lijun2017.oss-cn-shanghai.aliyuncs.com/pc_banner/banner-2.jpg',
                        link: 'https://www.weipxiu.com/'
                    }, {
                        url: 'https://lijun2017.oss-cn-shanghai.aliyuncs.com/pc_banner/banner-3.jpg',
                        link: 'javascript:;'
                    }, {
                        url: 'https://lijun2017.oss-cn-shanghai.aliyuncs.com/pc_banner/banner-4.jpg',
                        link: 'javascript:;'
                    }, {
                        url: 'https://lijun2017.oss-cn-shanghai.aliyuncs.com/pc_banner/banner-5.jpg',
                        link: 'https://www.weipxiu.com/?cat=6'
                    },
                    {
                        url: 'https://lijun2017.oss-cn-shanghai.aliyuncs.com/pc_banner/banner-6.jpg',
                        link: 'https://www.weipxiu.com/?p=1313'
                    }
                ],

                preloadImages: true, // 预加载所有图片

                // 分页及控制
                pagination: '.js_banner_nav', // 分页dom
                paginationClick: true, // 分页是否可点击
                prevButton: '.js_banner_prev', // 下一张dom
                nextButton: '.js_banner_next', // 上一张dom
                Effects: {
                    //turnEffect（翻转）boomEffect（爆炸）pageEffect（翻页）skewEffect（扭曲）cubeEffect（立方体）
                    'prev': 'turnEffect',
                    'next': 'boomEffect',
                    'navi': 'pageEffect'
                },
            });
            //轩枫博客end

            //给首页增加默认高亮
            $(".nav ul.music-nav li:eq(0)").addClass("action");

            //视频播放start
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
            //视频播放end

            // 桌面提醒功能
            var set_desktop = function () {
                if (window.Notification) {
                    // var button = document.getElementById('button'), text = document.getElementById('text');

                    var popNotice = function () {
                        if (Notification.permission == "granted") {
                            var notification = new Notification("官方提示：", {
                                body: '欢迎点击加入"WEB前端薪资吐槽群"互相学习、交流！',
                                icon: 'https://www.weipxiu.com/wp-content/themes/boke/images/tishi.png'
                            })

                            notification.onclick = function () {
                                window.open("https://jq.qq.com/?_wv=1027&k=4BemYKg")
                                notification.close();
                            }
                        }
                    }

                    var desktop = function () {
                        if (Notification.permission == "granted") {
                            popNotice();
                        } else if (Notification.permission != "denied") {
                            Notification.requestPermission(function (permission) {
                                popNotice();
                            })
                        }
                    }
                    desktop();
                } // else {
                //     alert('浏览器不支持Notification');    
                // }
            }
            //set_desktop();
            setTimeout(function () {
                set_desktop();
            }, 5000);
            // 桌面提醒功能

            // setTimeout(function(){
            // 	var swiper = new Swiper('.swiper-container', {
            // 	    pagination: '.swiper-pagination',//是否出现小圆点
            // 	    nextButton: '.swiper-button-next',//上一张
            // 	    prevButton: '.swiper-button-prev',//下一张
            // 	    slidesPerView: 1,//每一屏幕排几张图片
            // 	    effect: 'slide',//轮播方式，左右切换
            // 	    paginationClickable: true,//小圆点是否可点击
            // 	    spaceBetween: 0,//图片间距
            // 	    autoplay: 4500,//自动轮播时间
            // 	    speed:350,//切换一张所需要的时间
            // 	    keyboardControl : true,//键盘左右按钮切换
            // 	    mousewheelControl : false,//鼠标滚轮切换
            // 	    autoplayDisableOnInteraction : false,//表示用户操作swiper之后，是否禁止autoplay。默认为 true：停止。false是播放
            // 	    loop: true//循环
            // 	});
            // },3000);

            // console.log---start
            if (window.console && window.console.log) {
                setTimeout(function () {
                    console.log("\n %c 唯品秀个人博客 %c  © Jun Li  https://weipxiu.com \n",
                        "color:#FFFFFB;background:#1890ff;padding:5px 0;border-radius:.5rem 0 0 .5rem;",
                        "color:#FFFFFB;background:#080808;padding:5px 0;border-radius:0 .5rem .5rem 0;"
                    );
                }, 1500);
            }
            // console.log---end

            $("#hide").show();
            $("html,body").css({
                "overflow-y": "visible"
            });
            $(".buffer").fadeOut();
            $(".buffer .bar").hide();

            //首页头部导航动画加载
            $(".header.Top").css("WebkitAnimation-duration", ".7s");
            $(".header.Top").css("MsAnimation-duration", ".7s");
            $(".header.Top").css("animation -duration", ".7s");

            //开场背景音乐
            //$("#music").get(0).play();
            setTimeout(function () {
                $("#vedio").animate({
                    "bottom": "0"
                }, 1000);
                $(".hide").animate({
                    "bottom": "193px"
                }, 1000);
            }, 3500);
        } else {
            $(".c-860,.index-box,.hide,#curriculum,#js_banner").remove(); //去掉轮播、视频、邮件订阅
        }
    } else {
        //排除PC端执行下列代码
        //去掉首页列表第一篇文章，避免同今日焦点栏目顶替文章重合
        $(".continar-left > .text:nth-of-type(3)").remove();
        //swiper核心三要素：依赖swiper.js、swiper.css，外面父亲盒子高度
        var swiper1 = new Swiper('.swiper-container1', {
            pagination: '.swiper-pagination', //是否出现小圆点
            //nextButton: '.swiper-button-next',//上一张
            //prevButton: '.swiper-button-prev',//下一张
            slidesPerView: 1, //每一屏幕排几张图片
            effect: 'slide', //轮播方式，左右切换
            paginationClickable: true, //小圆点是否可点击
            spaceBetween: 0, //图片间距
            autoplay: 4500, //自动轮播时间
            speed: 500, //切换一张所需要的时间
            // keyboardControl: true, //键盘左右按钮切换
            // mousewheelControl: false, //鼠标滚轮切换
            autoplayDisableOnInteraction: false, //表示用户操作swiper之后，是否禁止autoplay。默认为 true：停止。false是播放
            loop: true //循环
        });
        //navigator.vibrate([1000, 500, 1000]);
        //手机震动功能，里面是数组-震动时间，第二个为间隔时间
    }
    //网站预加载运动end

    // 当窗口改变时候start
    $(window).resize(function() {
        if($(document).width() >= 1200){
            if (window.location.href == "https://www.weipxiu.com" || window.location.href == "https://www.weipxiu.com/") {
                $("#js_banner").show();
                $("body > .continar").css("margin-top","15px");
            }
        }else{

        }
    });
    // 当窗口改变时候end

})