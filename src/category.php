<!DOCTYPE html>
<html lang="en" >

<head>
	<title><?php the_title(); ?>&nbsp;|&nbsp;关注WEB前端开发技术&nbsp;-&nbsp;唯品秀博客</title>
	<?php require ('common.php'); ?>

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
						        echo '<img src="/wp-content/themes/Art_Blog/images/default.png" width="220" height="140" alt="唯品秀前端个人博客" />';
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
						<?php
								if ( has_post_thumbnail() )
									the_post_thumbnail();
								else
									echo '<img src="/wp-content/themes/Art_Blog/images/default.png" alt="唯品秀前端个人博客" />';
						?>
						<h3>
							<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 190,"..."); ?>
							<!--文章内容-->
						</h3>
						<a class="read-more read_url" href="<?php the_permalink(); ?>" target="_blank">阅读全文
							<i class="iconfont icon-jiantou-you-cuxiantiao-fill"></i>
						</a>
						<p class="l">
						<!-- <span>
							<a href="<?php the_permalink(); ?> ">
								<i class="">&nbsp;</i><?php echo '发表于 '.timeago( get_gmt_from_date(get_the_time('Y-m-d G:i:s')) ); ?>
							</a>
						</span> -->
						<span><i class="iconfont icon-shijian" aria-hidden="true"></i><?php the_time('Y年m月d日') ?></span>
						<span>
							<a href="<?php the_permalink(); ?> "><i class="iconfont icon-liulan"></i><?php echo getPostViews(get_the_ID()); ?>℃
							</a>
						</span>
						<span class="comm">
							<a href="<?php the_permalink(); ?> "><i class="iconfont icon-pinglun2"></i><?php echo number_format_i18n( get_comments_number() );?>条评论
							</a>
						</span>
						<span class="post-like">
							<a href="javascript:;" data-action="ding" data-id="<?php the_ID(); ?>" class="favorite<?php if (isset($_COOKIE['bigfa_ding_' . $post->ID])) echo ' done'; ?>"><i class="iconfont icon-damuzhi1"></i><span class="count"><?php if (get_post_meta($post->ID, 'bigfa_ding', true)) {echo get_post_meta($post->ID, 'bigfa_ding', true);} else {echo '0';
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
				<?php endwhile; else : ?>
				<?php header("Location: ".bloginfo('template_url')."/404.php");exit; ?> 
				<?php endif; ?>
				<?php lingfeng_pagenavi();?><!-- 分页调用 -->

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