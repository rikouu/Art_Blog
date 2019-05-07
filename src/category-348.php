<!DOCTYPE html>
<html lang="en" >

<head>
	<meta charset="UTF-8">
	<meta name="Author" content="" />
	<meta name="description" content="<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 200,"
	    ... "); ?>" />
	<meta name="keywords" content="个人博客,唯品秀个人博客,个人博客网站,唯品秀，web前端博客，网页制作，博客，HTML5/CSS3，Javascript" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<!-- 强制https -->
	<?php 
			if (get_option('switch_https')['text_pic'] == 'on'){
			?>
					<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
			<?php
			}
	?>
	<meta http-equiv="x-dns-prefetch-control" content="on">
	<link rel="dns-prefetch" href="<?php echo home_url(); ?>">
	<title><?php the_title(); ?>&nbsp;|&nbsp;关注WEB前端开发技术&nbsp;-&nbsp;唯品秀博客</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
	<link rel="stylesheet" type="text/css" media="screen and (max-width:767px)" href="<?php bloginfo('template_url'); ?>/css/style-ios.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-width:768px) and (max-width:1199px)" href="<?php bloginfo('template_url'); ?>/css/style-ipd.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-width:1200px)" href="<?php bloginfo('template_url'); ?>/style.css">
	<?php wp_head(); ?>
</head>

<body>
	<!--头部文件引用开始-->
	<?php get_header();?>
	<!--头部文件引用结束-->

	<!-- 正文区域start -->
	<div class="continar">
		<div class="continar-left" id="ajax_centent" style="border:0; padding:0; background: transparent;">
			<!-- 文章start -->
			<?php
			if(have_posts()): while(have_posts()):the_post();
			?>

				<div class="text">
					<div class="img-left">
						<a class="read-more" href="<?php the_permalink(); ?>" target="_blank">
							<?php
						    if ( has_post_thumbnail() )
						        the_post_thumbnail();
						    else
						        echo '<img src="/wp-content/themes/Art_Blog/images/default.png" alt="<?php echo get_bloginfo('name'); ?>" />';
						?>
						</a>
					</div>
					<div class="text_right">
						<h2>
							<span>
								<?php the_category() ?>
								<i></i>
							</span>
							<a href="<?php the_permalink(); ?>" target="_blank">
								<?php the_title(); ?>
							</a>
						</h2>
						<div class="entry-meta">
							<a href="<?php echo home_url(); ?>">唯品秀</a>
							<i class="space">•</i>
							<a href="#">前端开发资讯</a>
							<i class="space">•</i>
							<?php the_author(); ?>
							<a href="#" class="comments-number">
								<span></span>
							</a>
						</div>
						<?php
								if ( has_post_thumbnail() )
									the_post_thumbnail();
								else
									echo '<img src="/wp-content/themes/Art_Blog/images/default.png" alt="<?php echo get_bloginfo('name'); ?>" />';
						?>
						<h3>
							<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 156,"..."); ?>
							<!--文章内容-->
						</h3>
						<a class="read-more" href="<?php the_permalink(); ?>" target="_blank">阅读全文
							<i class="iconfont icon-jiantou-you-cuxiantiao-fill"></i>
						</a>
						<p class="l">
						<!-- <span>
							<a href="<?php the_permalink(); ?> ">
								<i class="">&nbsp;</i><?php echo '发表于 '.timeago( get_gmt_from_date(get_the_time('Y-m-d G:i:s')) ); ?>
							</a>
						</span> -->
						<span><i class="iconfont icon-rili1" aria-hidden="true"></i><?php the_time('Y年m月d日') ?></span>
						<span>
							<a href="<?php the_permalink(); ?> "><i class="iconfont icon-liulan"></i><?php echo getPostViews(get_the_ID()); ?>℃
							</a>
						</span>
						<span class="comm">
							<a href="<?php the_permalink(); ?> "><i class="iconfont icon-pinglun2"></i><?php echo number_format_i18n( get_comments_number() );?>条评论
							</a>
						</span>
						<span class="post-like">
							<a href="javascript:;" data-action="ding" data-id="<?php the_ID(); ?>" class="favorite<?php if (isset($_COOKIE['bigfa_ding_' . $post->ID])) echo ' done'; ?>"><i class="iconfont icon-damuzhi"></i><span class="count"><?php if (get_post_meta($post->ID, 'bigfa_ding', true)) {echo get_post_meta($post->ID, 'bigfa_ding', true);} else {echo '0';
							} ?></span>喜欢
							</a>
						</span>
						<span class="r"></span>
					 </p>
						<?php if( is_sticky() ) echo '<em><a href="">顶</a></em>'; ?>
						<!-- <span class="new-icon">NEW</span> -->
					</div>
					<!-- <font class="s_bar"></font> -->
					<!--竖条-->
				</div>
				<div class="item-list  ">
            <h3 class="title">
                <a href="https://pan.baidu.com/s/102u3hn9oYcqz7bACp0clbw" target="_black">Node.js 从零开发 web server博客项目 前端晋升全栈工程师必备</a>
            </h3>
            <p class="tools"><span class="name">链接：</span>https://pan.baidu.com/s/102u3hn9oYcqz7bACp0clbw</p>
            <p class="tools">
                <span class="name">提取码：</span>
                <span class="code">lfqe</span>
            </p>
            <div class="item-bottom">
                <span class="date">2019-03-26 19:15:04</span>
                <span class="tag error J_hate" data-id="a58b8b84-0c26-4a8d-bef0-246e3031218e">失效(0)</span>
                <span class="tag like J_like" data-id="a58b8b84-0c26-4a8d-bef0-246e3031218e">喜欢(1)</span>
            </div>
        </div>
				<?php endwhile; else : ?>
				<?php header("Location: /404.html");exit; ?> 
				<!-- <h2 id="redirect">
					<?php _e('404'); ?>
				</h2> -->
				<?php endif; ?>
				<?php wp_pagenavi(); ?>
				<!--分页插件调用-->

		</div>
		<!-- 左侧区域结束 -->

		<!-- 右侧区域开始 -->
		<div class="continar-right">
			<?php get_sidebar( $name ); ?>
		</div>
		<!-- 右侧区域结束 -->
	</div>
	<!-- 正文区域end -->

	<!-- 首页背景音乐开始 -->
	<!-- <audio src="https://sc1.111ttt.com/2015/1/04/01/97011918297.mp3" autoplay="autoplay" loop="loop" id="music"></audio>
    <div class="control hover"></div> -->
	<!-- 首页背景音乐结束 -->

	<!-- 底部引用区域开始 -->
	<?php get_footer()?>
	<!-- 底部引用区域结束 -->
</body>

</html>