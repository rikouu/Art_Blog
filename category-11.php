<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="Author" content="李俊" />
	<meta name="description" content="<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 200,"..."); ?>" />
	<meta name="keywords" content="个人博客,唯品秀个人博客,个人博客网站,唯品秀，web前端博客，网页制作，博客，HTML5/CSS3，Javascript" />
	<meta name="format-detection" content="telephone=no"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<title><?php the_title(); ?>&nbsp;|&nbsp;唯品秀博客</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" media="screen and (max-width:767px)" href="<?php bloginfo('template_url'); ?>/style-ios.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width:768px) and (max-width:1199px)" href="<?php bloginfo('template_url'); ?>/style-ipd.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width:1200px)" href="<?php bloginfo('template_url'); ?>/style.css">
	<?php wp_head(); ?>
</head>
	<body>
    <!--头部文件引用开始-->
	<?php get_header();?>
	<!--头部文件引用结束-->

    <!-- 正文区域start -->
    <div class="continar">
    	 <div class="continar-left id="details" style="border:0; padding:0; background: transparent;">
            <!-- 文章start -->
			<?php
			if (have_posts()) :while (have_posts()) : the_post();
			?>

			<div class="text">
				 <?php the_post_thumbnail() ?><!-- 左侧图片 -->
    	 	     <div class="text_right">
	    	 	 	 <h2>
		    	 	 	 <span><?php the_category() ?><i></i></span>
		    	 	 	 <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	    	 	 	 </h2>
	    	 	 	 <div class="entry-meta">
	    	 	 	     <a href="http://www.weipxiu.com">唯品秀</a>
	    	 	 	     <i class="space">•</i>
	    	 	 	     <a href="#">前端开发资讯</a>
	    	 	 	     <i class="space">•</i>
	    	 	 	     <?php the_author(); ?>
	    	 	 	     <a href="#" class="comments-number">
	    	 	 	         <span></span>
	    	 	 	     </a>
	    	 	 	 </div>
	    	 	 	 <h3>
	    	 	 	     <?php the_content(); ?><!--文章内容-->
	    	 	 	 </h3>
	    	 	 	 <a class="read-more" href="<?php the_permalink(); ?>" target="_blank">阅读全文
	    	 	 	 </a>
	    	 	 	 <p class="l">
						<span><i class="fa fa-clock-o">&nbsp;</i><?php the_time('Y年m月d日') ?></span>
						<span><i class="fa fa-eye"></i>&nbsp;<?php post_views(' ', ' 次'); ?>浏览</span>
						<span class="comm"><i class="fa fa-commenting"></i>&nbsp;<?php comments_popup_link(); ?></span>
						<span class="r"></span>
					 </p>
	    	 	 	 <em><a href="">0</a></em>
    	 	 	 </div>
			</div>
				<?php endwhile; else : ?>
				<h2><?php _e('Not Found'); ?></h2>
				<?php endif; ?>
            <?php wp_pagenavi(); ?><!--分页插件调用-->

    	 </div>
    	 <!-- 左侧区域结束 -->

    	 <!-- 右侧区域开始 -->
    	 <div class="continar-right">
    	 	   <aside>
	    	 	 	 <h3>博客介绍</h3>
	    	 	 	 <div class="textwidget">
						<p class="clearfix">
							<a href="#" rel="home">前端博客</a> : weipxiu.com，我们关注Web前端开发技术，移动前端开发，前端资讯，同时分享前端资源和工具等，期待你的参与,<a rel="nofollow" target="_blank" href="/about">了解更多..</a>
						</p>
						<ul class="social">
							<li class="weibo">
							   <a href="#" target="_blank" class="top-tip" title="关注新浪微博"></a>
							</li>
							<li class="qq">
							   <a target="_blank" href="#" rel="nofollow" class="top-tip" title="加入QQ群"></a>
							</li>
							<li class="feed">
							   <a target="_blank" href="#" rel="nofollow" class="top-tip" title="订阅本站RSS"></a>
							</li>
							<li class="email">
							   <a href="#" target="_blank" rel="nofollow" class="top-tip" title="订阅到qq邮箱"></a>
							</li>
							<li class="weixin">
							    <a href="#" target="_blank" rel="nofollow" class="top-tip" title="关注微信"></a>
							</li>
						</ul>
					</div>
    	 	   </aside>
               
               <?php get_sidebar( $name ); ?>
    	 	   <!-- 技术分类开始 -->

    	 	   <!-- 评论模块开始 -->
    	 	   <div class="classif" id="primary-sidebar">
    	 	   	   <div class="com-s com">
						<h3 class="rounded">最近评论</h3>
						<ul class="ds-recent-comments" data-num-items="5" data-show-avatars="1" data-show-time="1" data-show-title="1" data-show-admin="0" data-avatar-size="30" data-excerpt-length="50" id="ds-recent-comments">
							<li class="ds-comment ds-show-avatars" data-post-id="6348427512598496002">
							<div class="ds-avatar">
								<img src="https://avatar.duoshuo.com/avatar-50/58/207483.jpg" alt="uTzmz" style="width:30px;height:30px">
							</div>
							<div class="ds-meta">
								uTzmz<span class="ds-time" datetime="2016-11-03T01:41:03+08:00" title="2016年11月3日 上午1:41:03">10小时前</span>
							</div>
							<div class="ds-thread-title">
								在 <a href="#">给我留言</a> 中评论
							</div>
							<div class="ds-excerpt">
								万 部 A 片高清 国产 日韩 hTTp://uVU.cc/inRx    [给力]
							</div>
							</li>
							<li class="ds-comment ds-show-avatars" data-post-id="6348257799335576321">
							<div class="ds-avatar">
								<a rel="nofollow author" target="_blank" href="#" onclick="this.href='http://mxxia1.duoshuo.com/user-url/?user_id=6327777379515106050';" title="中国最好的整形医生"><img src="http://app.qlogo.cn/mbloghead/bc2d2b1f6af1816e2e1e/50" alt="中国最好的整形医生" style="width:30px;height:30px"></a>
							</div>
							<div class="ds-meta">
								<a rel="nofollow author" target="_blank" href="#">中国最好的整形医生</a><span class="ds-time" datetime="2016-11-02T14:42:29+08:00" title="2016年11月2日 下午2:42:29">21小时前</span>
							</div>
							<div class="ds-thread-title">
								在 <a href="#">wp autotags插件启用失败原因</a> 中评论
							</div>
							<div class="ds-excerpt">
								不错   谢谢博主了
							</div>
							</li>
							<li class="ds-comment ds-show-avatars" data-post-id="6347951979347575554">
							<div class="ds-avatar">
								<a rel="nofollow author" target="_blank" href="#" onclick="this.href='http://mxxia1.duoshuo.com/user-url/?user_id=6329843561311240961';" title="穿衣搭配"><img src="http://q.qlogo.cn/qqapp/100229475/37907954E70E62DBEB9F006CD2DD1E9D/100" alt="穿衣搭配" style="width:30px;height:30px"></a>
							</div>
							<div class="ds-meta">
								<a rel="nofollow author" target="_blank" href="#">穿衣搭配</a><span class="ds-time" datetime="2016-11-01T18:55:45+08:00" title="2016年11月1日 下午6:55:45">11月1日</span>
							</div>
							<div class="ds-thread-title">
								在 <a href="#">jQuery Ajax 实例 ($.ajax、$.post、$.get)</a> 中评论
							</div>
							<div class="ds-excerpt">
								谢谢分享，学习了
							</div>
							</li>
							<li class="ds-comment ds-show-avatars" data-post-id="6347926413047235330">
							<div class="ds-avatar">
								<a rel="nofollow author" target="_blank" href="#" onclick="this.href='http://mxxia1.duoshuo.com/user-url/?user_id=6334837159492600577';" title="索菲亚m.suofeiya.com"><img src="http://q.qlogo.cn/qqapp/100229475/E0B8EACC2A21AF6CFBABD2C18C6CE906/100" alt="索菲亚m.suofeiya.com" style="width:30px;height:30px"></a>
							</div>
							<div class="ds-meta">
								<a rel="nofollow author" target="_blank" href="#">索菲亚m.suofeiya.com</a><span class="ds-time" datetime="2016-11-01T17:16:32+08:00" title="2016年11月1日 下午5:16:32">11月1日</span>
							</div>
							<div class="ds-thread-title">
								在 <a href="#">jquery append 动态添加的元素事件on 不起作用的解决方法</a> 中评论
							</div>
							<div class="ds-excerpt">
								谢谢分享，写的非常好！[给力]
							</div>
							</li>
							<li class="ds-comment ds-show-avatars" data-post-id="6347829193337733890" style="border:0">
							<div class="ds-avatar">
								<a rel="nofollow author" target="_blank" href="#" onclick="this.href='http://mxxia1.duoshuo.com/user-url/?user_id=6335260848059056898';" title="工控资料窝"><img src="http://q.qlogo.cn/qqapp/100229475/6F4407742A362A1C0247DDB57A3C695D/100" alt="工控资料窝" style="width:30px;height:30px"></a>
							</div>
							<div class="ds-meta">
								<a rel="nofollow author" target="_blank" href="#">工控资料窝</a><span class="ds-time" datetime="2016-11-01T10:59:16+08:00" title="2016年11月1日 上午10:59:16">11月1日</span>
							</div>
							<div class="ds-thread-title">
								在 <a href="#">jquery append 动态添加的元素事件on 不起作用的解决方法</a> 中评论
							</div>
							<div class="ds-excerpt">
								暂时还用不到 但是也要收藏起来
							</div>
							</li>
						</ul>
					</div>
    	 	   </div>
    	 	   <!-- 评论模块结束 -->
    	 </div>
    	 <!-- 右侧区域结束 -->
    </div>
    <!-- 正文区域end -->
    
    <!-- 首页背景音乐开始 -->
    <audio src="http://sc1.111ttt.com/2015/1/04/01/97011710436.mp3" loop="loop" preload="preload" id="music"></audio>
    <div class="control hover"></div>
    <!-- 首页背景音乐结束 -->
    
    <!-- 页面缓冲加载开始 -->
    <div class="buffer">
    	 <div class="bar">
    	 	  <div class="xz"></div>
    	 	  <span id="loadtext">0%</span>
    	 </div>
    </div>
    <!-- 页面缓冲加载结束 -->
    
	<!-- 底部引用区域开始 -->
    <?php get_footer()?>
    <!-- 底部引用区域结束 -->

</body>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/javascript.js"></script>
</html>
