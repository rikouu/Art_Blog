 $(function(){
            //初始化，页面刷新就到顶部区域
            $('body,html').animate({scrollTop:0},1500);
            // 禁止F12
            document.onkeydown = function(ev){
                // var ev = ev || event;
                // if(ev.keyCode == 123) {
                //   return false;
                //  }
                if( ev.ctrlKey  == true && ev.keyCode == 83 ){
                    return false; /*禁止页面快捷保存，导致盗窃*/
                }
            }
            //搜索区域开始
            $(".navto-search a").click(function(){
                $(".site-search.active").slideToggle();
                $(this).find("i").toggleClass("fa-search");
                $(this).find("i").toggleClass("fa-remove");
            });
            //搜索区域结束

            //音乐点击暂停功能
            var off = true;
            $(".control").click(function(){
                if (off) {
                  $("#music").get(0).pause();
                }else{
                  $("#music").get(0).play();
                }
                $(this).toggleClass("hover");
                off = !off;
            });

            //首页头部导航动画加载
            $(".header").css("WebkitAnimation","Top 1.5s cubic-bezier(.76,1.93,.73,.35)");
            $(".header").css("MsAnimation","Top 1.5s cubic-bezier(.76,1.93,.73,.35)");
            	var oLi = $('#dj li')[0];
            	$(".t-logo").mouseover(function(){
                    $('#dj li').css("WebkitAnimation","");
            		$('#dj li').css("MsAnimation","");
            	});
            	
            //跳动的Logo
                $("#Logo").mouseout(function(){
                     $("#Logo #dj li").css("WebkitAnimation","move .5s alternate");
                     $("#Logo #dj li").css("MsAnimation","move .5s alternate");
                });

            //首页跳动Logo结束

            // 音乐导航开始
            $(".nav ul.music-nav li").hover(function(){
                var deta = $(this).attr("detaName");
                $(this).find('video').get(0).src="mp3/"+deta+".mp3";
                $(this).find('video').get(0).play();
                return false;
            },function(){
            });
            // 二级菜单开始
            $(".front a").click(function(){
                    $(".header-conter .nav-min").eq(0).stop().slideToggle();
                    $(".front a span").toggleClass("hover");
                    $(".front a span").find("i").toggleClass("hover");
                    $(".header-conter .nav-min").eq(1).stop().slideUp();
                    $(".works a span").removeClass("hover");
                    $(".works a span").find("i").removeClass("hover");
                    return false;
            });
             $(".works a").click(function(){
                $(".header-conter .nav-min").eq(1).stop().slideToggle();
                $(".works a span").toggleClass("hover");
                $(".works a span").find("i").toggleClass("hover");
                $(".header-conter .nav-min").eq(0).stop().slideUp();
                $(".front a span").removeClass("hover");
                $(".front a span").find("i").removeClass("hover");
                return false;
            });
            // 二级菜单结束
            // 音乐导航结束

            //纸飞机开始
            $(".aircraft").mouseover(function(){
                $("#audio").get(0).play();
                $("#audio").attr("loop","loop");
            });
            $(".aircraft").mouseout(function(){
                    $("#audio").get(0).pause();
            });
            $(".aircraft").click(function(){
                $("#audio").get(0).pause();
                $("#audio1").get(0).load();
            //上行代码指当发射之前先要把audio初始化，避免在下一次发射之前因为上次没有结束导致没有播放出来
                $("#audio1").get(0).play();
            });
            $(document).scroll(function(){
            	var scrollTop = $(document).scrollTop();
            	if (scrollTop>300){
            		$(".aircraft").fadeIn(500);
            	}else{
            		$(".aircraft").fadeOut(500);
            	}
                // 鼠标滚动时候判断页面是否走到了最下面，如果是底部才出现
                if ($(document).scrollTop() >= $(document).height()-$(window).height()) {
                    $("body").css({"overflow-x":"visible","height":"auto","width":"auto"});/*兼容，不解释*/
                    $(".footer").css("WebkitAnimation","Footer 2.5s .5s");
                    $(".footer").css("MsAnimation","Footer 2.5s .5s");
                }else{
                    $(".footer").css("WebkitAnimation","");
                    $(".footer").css("MsAnimation","");
                }

                if ($(document).scrollTop() <= 200){
                    $(".header").css("WebkitAnimation","Top 1.5s cubic-bezier(.76,1.93,.73,.35)");
                    $(".header").css("MsAnimation","Top 1.5s cubic-bezier(.76,1.93,.73,.35)");
                }else{
                    $(".header").css("WebkitAnimation","");
                    $(".header").css("MsAnimation","");
                }

                var top = $(".items").get(0).getBoundingClientRect().top; //元素顶端到可见区域顶端的距离
                var se = document.documentElement.clientHeight; //浏览器可见区域高度。

                // 吸顶盒头部导航开始
                if ($(document).scrollTop() >= 600 && $(document).scrollTop() <= $(document).height()-$(window).height()-200) {
                   $(".header").addClass("hover");
                }else{
                   $(".header").removeClass("hover");
                }
                // 吸顶盒头部导航结束
            });
            $(".aircraft").click(function(){
            		$('body,html').animate({scrollTop:0},500);
            });
            //纸飞机结束


            // 文本超出追加省略号开始
            $(".continar .continar-left-top p").each(function(){
                var maxwidth=145;
                if($(this).text().length>maxwidth){
                $(this).text($(this).text().substring(0,maxwidth));
                $(this).html($(this).html()+"…");
                }
           });

            $(".text h3").each(function(){
                var maxwidth=109;
                if($(this).text().length>maxwidth){
                $(this).text($(this).text().substring(0,maxwidth));
                $(this).html($(this).html()+"…");
                }
           });
            // 文本超出追加省略号结束
           
           

            

 });