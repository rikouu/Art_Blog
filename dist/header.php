	<link rel="stylesheet" type="text/css" href="https://at.alicdn.com/t/font_385244_1kovimkx4ch.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/video-js.css">
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/video.js/video.min.js"></script>
	<!-- 判断低版本IE -->
	<script>
		//  if ((navigator.userAgent.indexOf('MSIE') >= 0) 
		// 	&& (navigator.userAgent.indexOf('Opera') < 0)){
		// 	window.location.href="<?php bloginfo('template_url'); ?>/reminder.php";/*判断IE5-10*/
		//  }
		 if(navigator.appName == "Microsoft Internet Explorer"&&parseInt(navigator.appVersion.split(";")[1].replace(/[ ]/g, "").replace("MSIE",""))<9){
			window.location.href="<?php bloginfo('template_url'); ?>/reminder.php";/*判断<IE9,此方法也可以判断<IE10*/
    }
    </script>
	<!-- IE禁止页面快捷保存，导致盗窃 -->
	<!-- <noscript><iframe src=*></iframe></noscript> -->
	
	<!-- 百度统计 -->
	<script>
		var _hmt = _hmt || [];
		(function() {
		  var hm = document.createElement("script");
		  hm.src = "https://hm.baidu.com/hm.js?704cfdd415da41b2e884bbb16a5dd3f3";
		  var s = document.getElementsByTagName("script")[0]; 
		  s.parentNode.insertBefore(hm, s);
		})();
	</script>

	<!-- 雪花start -->
	<!-- <div id="snowMask"></div> -->
	<!-- 雪花end -->

	<!-- 头部start -->
		<!-- 移动端头部start -->
		 <div class="os-headertop">
			<div class="btn_menu"></div>
			<a href="/" class="weipxiu_nav">唯品秀博客</a>
			<div class="xis">
				<i class="iconfont icon-sousuo"></i>
			</div>
			<div class="site-search active">
				<div class="container">
					<form role="search" method="get" id="searchform" class="site-search-form" action="<?php echo home_url(); ?>/">
						<input class="search-input" name="s" id="s" value="" placeholder="输入关键字搜索" type="text" />
						<button class="search-btn" type="submit" id="searchsubmit">
							<i class="iconfont icon-sousuo"></i>
						</button>
					</form>
				</div>
			</div>
		 </div>
		 <!--移动端头部end-->

		 <div class="header">
		 		<div style="height:2px;background:url(<?php bloginfo('template_url'); ?>/images/header_bj.gif); animation: hue 20s infinite linear;overflow: hidden; width:100%;">
				</div>
		 		<div class="header-body">
			 	    <div class="header-conter">
						  <div class="nav">
						      <a href="/" class="t-logo" id="Logo">
											<img src="https://www.weipxiu.com/wp-content/themes/Art_Blog/images/weipxiu_logo_1.png">
						      </a>
	                <div class="nav-left"></div>
						      <div class="brand">
								  <p>关注前端开发</p>
								  <p>HTML5、CSS3、Javascript</p>
							  </div>
							  <ul class="music-nav">
							  		<li detaName="do" class="<?php if ( (is_category('9') || in_category('9')) && !is_page() && !is_home() ) { echo 'action'; } ?>">
									  <a href="/">
										  <span>首页</span>
										  <span>首页</span>
									  </a>
									  <audio src="" autoplay="autoplay"></audio>
									  <p></p>
									</li>
									<li detaName="re" class="<?php if ( (is_category('2') || in_category('2')) && !is_page() && !is_home() ) { echo 'action'; } ?>">
									  <a href="/category/mood">
										  <span>心情小镇</span>
										  <span>心情小镇</span>
									  </a>
									  <audio src="" autoplay="autoplay"></audio>
									  <p></p>
									</li>
									<li detaName="mi" class="front 
									  <?php if ( in_category(array('3', '5', '14', '22','29')) && !is_page() && !is_home() ) { echo 'action'; } ?>">
									  <a href="javascript:void(0);">
										  <span>前端开发<i class="iconfont icon-jiantou"></i></span>
										  <span>前端开发<i class="iconfont icon-jiantou"></i></span>
									  </a>
									  <audio src="" autoplay="autoplay"></audio>
									  <p></p>
									</li>
									<li detaName="fa" class="<?php if ( (is_category('1') || in_category('1')) && !is_page() && !is_home() ) { echo 'action'; } ?>">
									  <a href="/category/timemachine">
										  <span>时光机</span>
										  <span>时光机</span>
									  </a>
									  <audio src="" autoplay="autoplay"></audio>
									  <!-- <img src="<?php bloginfo('template_url'); ?>/images/new.png" alt="" class="new"> -->
									  <p></p>
									</li>
									<li detaName="sol" class="works <?php if ( (is_category('-1') || in_category('-1')) && !is_page() && !is_home() ) { echo 'action'; } ?>">
									  <a href="javascript:void(0);">
										  <span>作品欣赏<i class="iconfont icon-jiantou"></i></span>
										  <span>作品欣赏<i class="iconfont icon-jiantou"></i></span>
									  </a>
									  <audio src="" autoplay="autoplay"></audio>
									  <p></p>
									</li>
									<li detaName="la" class="<?php if ( in_category('13') && is_category('13') ) { echo 'action'; } ?>">
									  <a href="/category/jqzy">
										  <span>别具匠心</span>
										  <span>别具匠心</span>
									  </a>
									  <audio src="" autoplay="autoplay"></audio>
									  <p></p>
									</li>
									<li detaName="si" class="<?php if ( (is_category('8') || in_category('8')) && !is_page() && !is_home() ) { echo 'action'; } ?>">
									  <a href="/category/message">
										  <span>碎言碎语</span>
										  <span>碎言碎语</span>
									  </a>
									  <audio src="" autoplay="autoplay"></audio>
									  <p></p>
									</li>
									<li detaName="dd" class="<?php if ( (is_category('10') || in_category('10')) && !is_page() && !is_home() ) { echo 'action'; } ?>">
									  <a href="/category/about">
										  <span>关于博客</span>
										  <span>关于博客</span>
									  </a>
									  <audio src=""  autoplay="autoplay"></audio>
									  <p></p>
									</li>
									<li detaName="ddd" class="js_piano_nav_icon mod-header_music-icon" title="钢琴节奏">
									<audio src=""  autoplay="autoplay"></audio>
									  	<i></i>
									  	<i></i>
									  	<i></i>
									  	<i></i>
									  	<i></i>
								    </li>
							  </ul>
							  <div class="nav-min">
								  	<a href="/category/frontend/htmlcss" class="<?php if ( in_category('3') && is_category('3') ) { echo 'action'; } ?>">HTML+CSS3</a>
								  	<a href="/category/frontend/javascript"class="<?php if ( in_category('5') && is_category('5') ) { echo 'action'; } ?>">Javascript</a>
										<a href="/category/frontend/js-frame"class="<?php if ( in_category('14') && is_category('14') ) { echo 'action'; } ?>">Js前端框架</a>
										<a href="/category/frontend/node-js"class="<?php if ( in_category('22') && is_category('22') ) { echo 'action'; } ?>">Node.js基础</a>
										<a href="/category/frontend/holdall"class="<?php if ( in_category('29') && is_category('29') ) { echo 'action'; } ?>">前端工具箱</a>
										<!-- <a href="/?cat=348">授人以渔</a> -->
										<a href="http://v.laod.cn/" target="_blank">
											Vip视频解析
										</a>
							  </div>
							  <div class="nav-min nav-min-1">
									<a href="/works/grjl/index.html" target="_blank">炫酷个人简历</a>
									<a href="/works/shangcheng/index.html" target="_blank">节日礼品商城</a>
							    <a href="/works/h5-7_vip/index.html" target="_blank">H5响应式</a>
									<a href="/works/yunquna/index.html" target="_blank">运去哪官网</a>
									<a href="http://www.songhengnet.com" target="_blank">嵩恒网络官网</a>
								  <!-- <a href="/works/beautiful/index.html" target="_blank">美丽说-首页</a> -->
									<a href="/works/weiyun/index.html" target="_blank">微云桌面应用</a>
								  <!-- <a href="/works/hnlyw/index.html" target="_blank">湖南海外旅游网</a> -->
								  <!-- <a href="/works/music/index.html" target="_blank">音乐播放器</a> -->
								  <a href="/works/caiquan/index.html" target="_blank">游戏-猜拳</a>
								  <a href="/works/feiji/index.html" target="_blank">游戏-打飞机</a>
								  <a href="https://github.com/weipxiu" target="_blank">更多作品案例</a>
								  <!-- <a href="/works/txz/index.html" target="_blank">游戏-推箱子</a> -->
							  </div>
							  <!-- 搜索按钮开始 -->
							  <div class="navto-search">
								  <a href="javascript:;" class="search-show active">
								      <i class="iconfont icon-sousuo"></i>
								  </a>
							  </div>
							  <!-- 搜索按钮结束 -->
						  </div>
					</div>
				</div>
				<!-- 搜索区域开始 -->
				<div class="site-search active pc">
					<div class="container">
						<form role="search" method="get" id="searchform" class="site-search-form" action="<?php echo home_url(); ?>/">
							<input class="search-input" name="s" id="s" type="text" value="" placeholder="输入关键字搜索">
							<button class="search-btn" type="submit" id="searchsubmit"><i class="iconfont icon-sousuo"></i></button>
						</form>
					</div>
				</div>
				<!-- 搜索区域结束 -->
		 </div>
    <!-- 头部end -->
    <!-- 移动端渣渣侧边栏导航开始 -->
    <div class="os-herder btn">
         <ul class="slide-left">
        	 <li><a href="<?php echo home_url(); ?>"><i class="iconfont">&#xe632;</i>首页</a></li>
        	 <li data-implement='element'>
        		 <a href="javascript:void(0);" class="frontEnd"><i class="iconfont">&#xe64b;</i>前端开发<i class="iconfont iconfont_click icon-xiajiantou"></i></a>
        		 <div class="slide_slect">
        			 <a href="/category/frontend/htmlcss"><i class="iconfont">&#xe68c;</i>HTML/CSS</a>
		        	 <a href="/category/frontend/javascript"><i class="iconfont">&#xe898;</i>Javascript</a>
		        	 <a href="/category/frontend/js-frame"><i class="iconfont">&#xe89a;</i>Js框架</a>
		        	 <a href="/category/frontend/holdall"><i class="iconfont">&#xe6ad;</i>前端工具箱</a>
		        	 <a href="/works/h5-7_vip/index.html"><i class="iconfont">&#xe757;</i>作品案例</a>
        		 </div>
        	 </li>
        	 <li><a href="/category/jqzy"><i class="iconfont">&#xe75c;</i>别具匠心</a></li>
        	 <li><a href="/category/mood"><i class="iconfont">&#xe668;</i>心情小镇</a></li>
        	 <li><a href="/category/message"><i class="iconfont">&#xe69f;</i>碎言碎语</a></li>
        	 <li><a href="/category/about"><i class="iconfont">&#xe603;</i>关于博客</a></li>
			 		 <li><a href="/wp-login.php"><i class="iconfont">&#xe630;</i>用户登录</a></li>
         </ul>
    </div>
    <!-- 移动端侧边栏导航结束 -->

    <!-- 移动端遮盖层，防止导航出现页面上下滑动导致bug开始 -->
    <div class="cover"></div>
	<!-- 移动端遮盖层，防止导航出现页面上下滑动导致bug结束 -->

