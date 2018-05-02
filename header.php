	<link rel="stylesheet" type="text/css" href="https://at.alicdn.com/t/font_183025_79bwxxk5sei885mi.css">
	<!-- 上面老版本，不维护 -->
	<link rel="stylesheet" type="text/css" href="https://at.alicdn.com/t/font_385244_86xbm4tvg5m3rf6r.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/video-js.css">
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/index.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/video.js/video.min.js"></script>
	<!-- 判断低版本IE -->
	<script>
		 if ((navigator.userAgent.indexOf('MSIE') >= 0) 
			&& (navigator.userAgent.indexOf('Opera') < 0)){
			window.location.href="<?php bloginfo('template_url'); ?>/reminder.php";/*判断IE5-10*/
		 }
    </script>
	<!-- IE禁止页面快捷保存，导致盗窃 -->
	<noscript><iframe src=*></iframe></noscript>
	
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
	<div id="snowMask"></div>
	<!-- 雪花end -->

	<!-- 头部start -->
		<!-- 移动端头部start -->
		 <div class="os-headertop">
			<div class="btn_menu"></div>
			<a href="http://www.weipxiu.com" class="weipxiu_nav">唯品秀博客</a>
			<div class="xis">
				<i class="fa fa-search"></i>
			</div>
			<div class="site-search active">
				<div class="container">
					<form role="search" method="get" id="searchform" class="site-search-form" action="http://www.weipxiu.com/">
						<input class="search-input" name="s" id="s" value="" placeholder="输入关键字搜索" type="text" />
						<button class="search-btn" type="submit" id="searchsubmit">
							<i class="fa fa-search"></i>
						</button>
					</form>
				</div>
			</div>
		 </div>
		 <!--移动端头部end-->
		 <div class="header">
		 		<!-- <div style="height:2px;background: #29d; animation: hue 20s infinite linear;overflow: hidden; width:100%;">
				</div> -->
		 		<div class="header_top">
			 		<div class="header-list">
			 			 <div id="username" style="margin:0 auto">
				                <a href="http://www.weipxiu.com" style="padding-left: 3px;">喵，欢迎光临</a>
					          	<a href="http://www.weipxiu.com/wp-login.php"><i class="fa fa-sign-in" style="display: inline-block;"></i>请登录</a>
					          	<a href="http://www.weipxiu.com/wp-login.php?action=register"><i class="fa fa-user" style="display: inline-block;"></i>免费注册</a>
					          	<a href="http://www.weipxiu.com/wp-admin/" style="padding-left: 3px;">
					          		<?php  if (is_user_logged_in()){
						          		$current_user = wp_get_current_user();
						          		echo '欢迎您， ' . $current_user->display_name;
						          		}
					          	  	?>
					          	</a>
					          	<!-- <a href="http://www.weipxiu.com/wp-admin/" style="display: none; color:#fff" target="_blank"><i class="iconfont" style="color:#fff">&#xe654;</i>会员中心 -->
					          	</a>
			              </div>
			              <div class="topbar">
							  <div class="notice">
									<ul>
										<li><i class="fa fa-volume-up"></i>温馨提示：唯品秀个人博客2016/11/16正式上线了！</li>
										<li><i class="fa fa-volume-up"></i>博客不定时更新、修复bug，若无法正常访问浏览，请稍后再试</li>
										<li><i class="fa fa-volume-up"></i>欢迎各位前端伙伴注册登录会员，共同分享前端技巧</li>
										<li><i class="fa fa-volume-up"></i>2018/04/24日最近更新：优化主导航高亮显示配置</li>
									</ul>
							  </div>
                              <ul class="last-ul">
                              	  <li class="github">
                              	  		<a href="https://github.com/weipxiu/weipxiu.github.io" target="_blank" title="Github @weipxiu">
											<i class="iconfont icon-icongithub"></i>
                              	  		</a>
                              	  </li>
                                  <li><a href="/?cat=29" target="_blank">前端工具箱</a></li>
								  <li><a href="/?cat=10" target="_blank">联系我们</a></li>
								  <li>
								  	<a href="http://www.5ifxw.com/vipshipin/" target="_blank">
								  		Vip视频
								  	</a>
								  	<!-- <a href="http://www.weipxiu.com/sly.html" target="_blank">
								  		S-Baby
								  	</a> -->
								  </li>
								  <li><a href="<?php bloginfo('template_url'); ?>/thanks.php" target="_blank">特别鸣谢</a></li>
							  </ul>
						  </div>
					  </div>
		 		</div> 
		 		<div class="header-body">
			 	    <div class="header-conter">
						  <div class="nav">
						      <a href="http://www.weipxiu.com" class="t-logo" id="Logo">
						          <span class="logo"></span>
						          <ul id="dj">
						          	  <li></li>
						          	  <li></li>
						          	  <li></li>
						          </ul>
						      </a>
	                          <div class="nav-left"></div>
						      <div class="brand">
								  <p>关注前端开发</p>
								  <p>HTML5、CSS3、Javascript</p>
							  </div>
							  <ul class="music-nav">
							  		<li detaName="do" class="<?php if ( (is_category('9') || in_category('9')) && !is_page() && !is_home() ) { echo 'action'; } ?>">
									  <a href="http://www.weipxiu.com">
										  <span>首页</span>
										  <span>首页</span>
									  </a>
									  <audio src="" autoplay="autoplay"></audio>
									  <p></p>
									</li>
									<li detaName="re" class="<?php if ( (is_category('2') || in_category('2')) && !is_page() && !is_home() ) { echo 'action'; } ?>">
									  <a href="/?cat=2" target="_blank">
										  <span>心情小镇</span>
										  <span>心情小镇</span>
									  </a>
									  <audio src="" autoplay="autoplay"></audio>
									  <p></p>
									</li>
									<li detaName="mi" class="front 
									  <?php if ( in_category(array('3', '5', '6', '14', '22')) && !is_page() && !is_home() ) { echo 'action'; } ?>">
									  <a href="javascript:void(0);">
										  <span>前端开发<i class="fa fa-angle-down"></i></span>
										  <span>前端开发<i class="fa fa-angle-down"></i></span>
									  </a>
									  <audio src="" autoplay="autoplay"></audio>
									  <p></p>
									</li>
									<li detaName="fa" class="<?php if ( (is_category('1') || in_category('1')) && !is_page() && !is_home() ) { echo 'action'; } ?>">
									  <a href="/?cat=1" target="_blank">
										  <span>时光机</span>
										  <span></i>时光机</span>
									  </a>
									  <audio src="" autoplay="autoplay"></audio>
									  <!-- <img src="<?php bloginfo('template_url'); ?>/images/new.png" alt="" class="new"> -->
									  <p></p>
									</li>
									<li detaName="sol" class="works <?php if ( (is_category('-1') || in_category('-1')) && !is_page() && !is_home() ) { echo 'action'; } ?>">
									  <a href="javascript:void(0);">
										  <span>作品欣赏<i class="fa fa-angle-down"></i></span>
										  <span>作品欣赏<i class="fa fa-angle-down"></i></span>
									  </a>
									  <audio src="" autoplay="autoplay"></audio>
									  <p></p>
									</li>
									<li detaName="la" class="<?php if ( (is_category('8') || in_category('8')) && !is_page() && !is_home() ) { echo 'action'; } ?>">
									  <a href="/?cat=8" target="_blank">
										  <span>给我留言</span>
										  <span>给我留言</span>
									  </a>
									  <audio src="" autoplay="autoplay"></audio>
									  <p></p>
									</li>
									<li detaName="si" class="<?php if ( in_category('13') && is_category('13') ) { echo 'action'; } ?>">
									  <a href="/?cat=13" target="_blank">
										  <span>技巧资源</span>
										  <span>技巧资源</span>
									  </a>
									  <audio src="" autoplay="autoplay"></audio>
									  <p></p>
									</li>
									<li detaName="dd" class="<?php if ( (is_category('10') || in_category('10')) && !is_page() && !is_home() ) { echo 'action'; } ?>">
									  <a href="/?cat=10" target="_blank">
										  <span>关于博客</span>
										  <span>关于博客</span>
									  </a>
									  <audio src=""  autoplay="autoplay"></audio>
									  <p></p>
									</li>
									<li class="js_piano_nav_icon mod-header_music-icon hover" title="钢琴节奏">
									  	<i></i>
									  	<i></i>
									  	<i></i>
									  	<i></i>
									  	<i></i>
								    </li>
							  </ul>
							  <div class="nav-min">
								  	<a href="/?cat=3">DIV+CSS</a>
								  	<a href="/?cat=5">Javascript</a>
								  	<a href="/?cat=6">HTML5+CSS3</a>
									<a href="/?cat=14">Js前端框架</a>
									<a href="/?cat=22">Node.js基础</a>
							  </div>
							  <div class="nav-min nav-min-1">
									<a href="http://www.weipxiu.com/works/grjl/index.html" target="_blank">炫酷个人简历</a>
							        <a href="http://www.weipxiu.com/works/h5-7_vip/index.html" target="_blank">H5响应式</a>
									<a href="http://www.weipxiu.com/works/yunquna/index.html" target="_blank">运去哪官网</a>
									<a href="http://www.weipxiu.com/works/shangcheng/index.html" target="_blank">节日礼品商城</a>
							        <!-- <a href="http://www.weipxiu.com/works/taiyang/index.html" target="_blank">太平洋时尚网</a> -->
								  	<!-- <a href="http://www.weipxiu.com/works/beautiful/index.html" target="_blank">美丽说-首页</a> -->
									<a href="http://www.weipxiu.com/works/weiyun/index.html" target="_blank">微云桌面应用</a>
								  	<!-- <a href="http://www.weipxiu.com/works/hnlyw/index.html" target="_blank">湖南海外旅游网</a> -->
								  	<!-- <a href="http://www.weipxiu.com/works/music/index.html" target="_blank">音乐播放器</a> -->
								  	<a href="http://www.weipxiu.com/works/caiquan/index.html" target="_blank">游戏-猜拳</a>
								  	<a href="http://www.weipxiu.com/works/feiji/index.html" target="_blank">游戏-打飞机</a>
								  	<!-- <a href="http://www.weipxiu.com/works/txz/index.html" target="_blank">游戏-推箱子</a> -->
							  </div>
							  <!-- 搜索按钮开始 -->
							  <div class="navto-search">
								  <a href="javascript:;" class="search-show active">
								      <i class="fa fa-search"></i>
								  </a>
							  </div>
							  <!-- 搜索按钮结束 -->
						  </div>
					</div>
				</div>
				<!-- 搜索区域开始 -->
				<div class="site-search active pc">
					<div class="container">
						<form role="search" method="get" id="searchform" class="site-search-form" action="http://www.weipxiu.com/">
							<input class="search-input" name="s" id="s" type="text" value="" placeholder="输入关键字搜索">
							<button class="search-btn" type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
						</form>
					</div>
				</div>
				<!-- 搜索区域结束 -->
		 </div>
    <!-- 头部end -->
    <!-- 移动端渣渣侧边栏导航开始 -->
    <div class="os-herder btn">
         <ul class="slide-left">
        	 <li><a href="http://www.weipxiu.com"><i class="iconfont">&#xe632;</i>首页</a></li>
        	 <li>
        		 <a href="javascript:void(0);" class="frontEnd"><i class="iconfont">&#xe64b;</i>前端开发<i class="iconfont iconfont_click icon-xiajiantou"></i></a>
        		 <div class="slide_slect">
        			 <a href="/?cat=3"><i class="iconfont">&#xe68c;</i>HTML/CSS</a>
		        	 <a href="/?cat=5"><i class="iconfont">&#xe898;</i>Javascript</a>
		        	 <a href="/?cat=3"><i class="iconfont">&#xe693;</i>H5/CSS3</a>
		        	 <a href="/?cat=14"><i class="iconfont">&#xe89a;</i>Js框架</a>
		        	 <a href="/?cat=29"><i class="iconfont">&#xe6ad;</i>前端工具箱</a>
		        	 <a href="http://www.weipxiu.com/works/h5-7_vip/index.html"><i class="iconfont">&#xe757;</i>作品案例</a>
        		 </div>
        	 </li>
        	 <li><a href="/?cat=13"><i class="iconfont">&#xe617;</i>技巧资源</a></li>
        	 <li><a href="/?cat=2"><i class="iconfont">&#xe617;</i>心情小镇</a></li>
        	 <li><a href="/?cat=8"><i class="iconfont">&#xe60e;</i>给我留言</a></li>
        	 <li><a href="/?cat=10"><i class="iconfont">&#xe603;</i>关于博客</a></li>
			 <li><a href="http://www.weipxiu.com/wp-login.php"><i class="iconfont">&#xe630;</i>用户登录</a></li>
         </ul>
    </div>
    <!-- 移动端侧边栏导航结束 -->

    <!-- 移动端遮盖层，防止导航出现页面上下滑动导致bug开始 -->
    <div class="cover"></div>
	<!-- 移动端遮盖层，防止导航出现页面上下滑动导致bug结束 -->

