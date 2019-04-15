<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="baidu-site-verification" content="cNP7vhhXuw" />
	<meta name="Author" content="李俊" />
	<meta name="description" content="<?php echo get_option('weipxiu_options')['description']; ?>" />
	<meta name="keywords" content="<?php echo get_option('weipxiu_options')['keywords']; ?>" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
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
	<title>唯品秀&nbsp;–&nbsp;前端开发&nbsp;|&nbsp;web前端技术博客</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" media="screen and (max-width:767px)" href="<?php bloginfo('template_url'); ?>/css/style-ios.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-width:768px) and (max-width:1199px)" href="<?php bloginfo('template_url'); ?>/css/style-ipd.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-width:1200px)" href="<?php bloginfo('template_url'); ?>/style.css">
	<link rel="stylesheet" href="https://lijun2017.oss-cn-shanghai.aliyuncs.com/css/swiper.min.css">

	<?php wp_head(); ?>
</head>

<body>
	<?php get_header();?>
	<section class="mod-banner" id="js_banner">
		<!-- <div class="mod-banner__snow_theme">
					<div class="mod-banner__snow_1"></div>
					<div class="mod-banner__snow_2"></div>
				</div> -->
		<a href="<?php echo home_url(); ?>" target="_blank" class="mod-banner__img banner_1" id="banner_img" style="background: url(&quot;https://lijun2017.oss-cn-shanghai.aliyuncs.com/images/banner-3.jpg&quot;) center center no-repeat;"></a>
		<div class="mod-banner__navi">
			<div class="js_banner_nav mod-banner_nav"></div>
			<span class="mod-banner__nav-dot"><canvas id="dotCanvas"></canvas></span>
		</div>
		<div class="mod-banner__tool">
			<span class="js_banner_prev mod-banner__tool-prev">
				<span class="mod-banner__tool-white"></span>
				<span class="mod-banner__tool-shadow"></span>
			</span>
			<span class="js_banner_next mod-banner__tool-next">
				<span class="mod-banner__tool-white"></span>
				<span class="mod-banner__tool-shadow"></span>
			</span>
		</div>
	</section>

	<!-- 导航start -->
	<!--<div class="index-box">
			<div class="index-main path-banner">
				<a href="" target="_blank" class="path-banner_1">
					<img src="<?php /*bloginfo('template_url'); */?>/images/path_1.png" alt="WEB前端开发，最前沿的前端视频">
				</a>
				<a href="" target="_blank" class="path-banner_1">
					<img src="<?php /*bloginfo('template_url'); */?>/images/path_2.png" alt="文章主题插件，最全最完整的持续更新">
				</a>
				<a href="" target="_blank" class="path-banner_1">
					<img src="<?php /*bloginfo('template_url'); */?>/images/path_3.png" alt="原创实战经验，最流行的WEB前端教程">
				</a>
				<a href="" target="_blank" class="path-banner_1">
					<img src="<?php /*bloginfo('template_url'); */?>/images/path_4.png" alt="资源交流社区，一个社区一个温暖的家">
				</a>
			</div>
		</div> -->
	<!-- 导航end -->

	<!-- 正文区域start -->
	<div class="continar">
		<div id="mobil">
			<!--移动端轮播start-->
			<div class="swiper-container1">
				<div class="swiper-wrapper">
					<div class="swiper-slide" style="background:url('<?php bloginfo('template_url'); ?>/images/banner1.png') no-repeat center top; background-size:100% 100%"></div>
					<div class="swiper-slide" style="background:url('<?php bloginfo('template_url'); ?>/images/banner2.png') no-repeat center top; background-size:100% 100%"></div>
					<div class="swiper-slide" style="background:url('<?php bloginfo('template_url'); ?>/images/banner3.png') no-repeat center top; background-size:100% 100%"></div>
				</div>
				<div class="swiper-pagination"></div>
			</div>
			<!--移动端轮播end-->
		</div>
		<div class="continar-left" id="ajax_centent">
			<!-- PC正文3d导航start -->
			<div class="mod-index__feature" style="display: none">
				<div class="img_list_6pic ui-clearfix">
					<div class="img_box">
						<a href="/1212.html" target="_blank">
							<img src="https://lijun2017.oss-cn-shanghai.aliyuncs.com/images/01.503c5483.jpg" width="280" height="180" class="ui-d-b">
							<div class="img_bg"></div>
							<div class="img_txt">
								<p class="img_title">有些话不一定要说出来 | 但一定要记录在某个地方</p>
								<!--<p class="img_info">.</p>-->
							</div>
							<i class="light"></i>
						</a>
					</div>
					<a href="/404.html" class="small_pic_wrap carousel_pic_wrap small_pic_wrap_small word_display"
					 target="_blank">
						<div class="carousel_small_str txt_bg01">
							<h3 class="img_txt_title">404</h3>
							<p class="img_p">路<br>在何方</p>
						</div>
						<img class="carousel_small_pic" width="110" height="85" src="https://lijun2017.oss-cn-shanghai.aliyuncs.com/images/02.1999dad7.jpg">
					</a>
					<a href="/817.html" class="small_pic_wrap carousel_pic_wrap small_pic_wrap_small" target="_blank">
						<div class="carousel_small_str txt_bg02">
							<h3 class="img_txt_title">绘画板</h3>
							<p class="img_p">描绘<br>在故事里的风景</p>
						</div>
						<img class="carousel_small_pic" width="110" height="85" src="https://lijun2017.oss-cn-shanghai.aliyuncs.com/images/03.79b87140.jpg">
					</a>
					<a href="/802.html" class="small_pic_wrap carousel_pic_wrap small_pic_wrap_long word_display"
					 target="_blank">
						<div class="carousel_small_str txt_bg03">
							<h3 class="img_txt_title">千里共良宵</h3>
							<p class="img_p">岁月<br>在电波中流淌</p>
						</div>
						<img class="carousel_small_pic" src="https://lijun2017.oss-cn-shanghai.aliyuncs.com/images/04.106fc8c0.jpg" width="160"
						 height="85">
					</a>
					<a href="/2075.html" class="small_pic_wrap carousel_pic_wrap small_pic_wrap_small word_display"
					 target="_blank">
						<div class="carousel_small_str txt_bg02">
							<h3 class="img_txt_title">忙碌</h3>
							<p class="img_p">在喧闹<br>又孤独的城市</p>
						</div>
						<img class="carousel_small_pic" width="110" height="85" src="https://lijun2017.oss-cn-shanghai.aliyuncs.com/images/05.0357cd0d.jpg">
					</a>
					<a href="/category/timemachine" target="_blank" class="small_pic_wrap carousel_pic_wrap small_pic_wrap_long">
						<div class="carousel_small_str txt_bg04">
							<h3 class="img_txt_title">MV</h3>
							<p class="img_p">时光<br>在画面里穿梭</p>
						</div>
						<img class="carousel_small_pic" src="https://lijun2017.oss-cn-shanghai.aliyuncs.com/images/06.50599bb3.jpg" width="160"
						 height="85">
					</a>
					<a href="javascript:;" class="small_pic_wrap carousel_pic_wrap small_pic_wrap_small word_display" target="_blank">
						<div class="carousel_small_str txt_bg05">
							<h3 class="img_txt_title">Music</h3>
							<p class="img_p">心情<br>在音乐中释放</p>
						</div>
						<img class="carousel_small_pic" width="110" height="85" src="https://lijun2017.oss-cn-shanghai.aliyuncs.com/images/07.2f43931e.jpg">
					</a>
					<a href="/913.html" class="small_pic_wrap carousel_pic_wrap small_pic_wrap_small" target="_blank">
						<div class="carousel_small_str txt_bg06">
							<h3 class="img_txt_title">情人节</h3>
							<p class="img_p">一个单身<br>程序员的史诗</p>
						</div>
						<img class="carousel_small_pic" width="110" height="85" src="https://lijun2017.oss-cn-shanghai.aliyuncs.com/images/08.daacfa0c.jpg">
					</a>
					<a href="javascript:;" class="small_pic_wrap carousel_pic_wrap small_pic_wrap_small" target="_blank">
						<div class="carousel_small_str txt_bg06">
							<h3 class="img_txt_title">直男癌</h3>
							<p class="img_p">花花世界<br>谁在鄙视直男癌</p>
						</div>
						<img class="carousel_small_pic" width="110" height="85" src="https://lijun2017.oss-cn-shanghai.aliyuncs.com/images/09.1f0f38a3.jpg">
					</a>
				</div>
			</div>
			<!-- PC正文3d导航end -->

			<div class="continar-left-top">
				<?php 
					$args = array( 
						'post_password' => '',
						'post_status' => 'publish', // 只选公开的文章.
						//'post__not_in' => array($post->ID),//排除当前文章
						//'caller_get_posts' => 1, // 排除置頂文章.
						//'orderby' => 'rand', // 依評論數排序.
						'posts_per_page' => 1 // 设置调用条数
					); 
					$query_posts = new WP_Query(); 
					$query_posts->query($args); 
					while( $query_posts->have_posts() ) { $query_posts->the_post(); ?>
				<h1>
					<a href="<?php the_permalink(); ?>" target="_blank">
						<span>【今日焦点】</span>
						<?php the_title(); ?>
						<img src="https://lijun2017.oss-cn-shanghai.aliyuncs.com/images/new.gif" width="26" height="14" alt="24小时内最新">
					</a>
				</h1>
				<span>
					<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 250,"..."); ?>
					<!--文章内容简介-->
				</span>
				<?php } wp_reset_query();?>
			</div>
			<!-- 博客介绍开始 -->
			<aside class="blog">
				<h3>博客介绍</h3>
				<div class="textwidget">
					<p class="clearfix">
						前端博客: <?php echo get_option('weipxiu_options')['domain']; ?>，我们关注Web前端开发技术，移动前端开发，前端资讯，同时分享前端资源和工具等，期待你的参与,<a rel="nofollow" target="_blank" href="/?cat=10">了解更多..</a>
					</p>
					<ul class="social">
						<li class="weibo">
							<a href="https://wpa.qq.com/msgrd?v=3&uin=343049466&site=qq&menu=yes"
							 target="_blank" class="top-tip" title="加QQ为好友"><i class="iconfont icon-qq"></i>会话</a>
						</li>
						<li class="qq">
							<a target="_blank" href="https://jq.qq.com/?_wv=1027&k=4BemYKg" rel="nofollow" class="top-tip" title="加入web前端QQ群"><i
								 class="iconfont icon-qqqun"></i>Q群</a>
						</li>
						<li class="email">
							<a href="mailto:<?php echo get_option('weipxiu_options')['QQ-number'];?>@qq.com.com" target="_blank" rel="nofollow" class="top-tip" title="给我发送qq邮件"><i class="iconfont icon-youxiang"></i>邮件</a>
						</li>
						<li class="weixin">
							<a href="javascript:;" target="_blank" rel="nofollow" class="top-tip" title="关注微信"><i class="iconfont icon-weixin"></i>微信</a>
						</li>
						<li class="feed">
							<a target="_blank" href="https://github.com/weipxiu" rel="nofollow" class="top-tip" title="Github"><i
								 class="iconfont icon-qq"></i>Github</a>
						</li>
					</ul>
				</div>
			</aside>
			<!-- 博客介绍结束 -->
			<!-- 邮件订阅start -->
			<?php 
			if (get_option('weipxiu_options')['text_pic'] == 'on'){
			?>
				<div class="inner-box">
					<div class="rssbook">
						<h3 class="info">您也可以通过电子邮件订阅每日的更新，不定时为您推送优质文章</h3>
						<p>我们不会公开您的邮箱，您可以随时取消订阅</p>
						<p><?php the_field('bannerUrl_1'); ?></p>
						<div class="mailInput">
							<?php echo wpm_form(1); ?>
						</div>
					</div>
				</div>
			<?php
				}
			?>
			<!-- 邮件订阅end -->
			<!-- 文章start -->
			<!-- <?php /*$posts = query_posts($query_string . '&orderby=date&showposts=12'); ?>
			<?php
			if(have_posts()): while(have_posts()):the_post();*/
			?> -->
			<?php
			if(have_posts()): while(have_posts()):the_post();
			?>

			<div class="text">
				<!-- <div class="mod-category__article-time">
					<span>2018/10</span>
					<span>23&nbsp;&nbsp;周二</span>
				</div> -->
				<div class="img-left">
					<a class="read-more" href="<?php the_permalink(); ?>" target="_blank">
						<?php
							if ( has_post_thumbnail() )
								the_post_thumbnail();
							else
								echo '<img src="/wp-content/uploads/2017/04/default-220x150.png" width="220" height="140" alt="唯品秀前端个人博客" />';
						?>
					</a>
				</div>
				<div class="text_right">
					<h2>
						<span>
							<?php the_category() ?><i></i></span>
						<a href="<?php the_permalink(); ?>" target="_blank" title="<?php the_title(); ?>">
							<?php the_title(); ?></a>
					</h2>
					<div class="entry-meta">
						<a href="<?php echo home_url(); ?>">唯品秀</a>
						<i class="space">•</i>
						<a href="#">
							<?php if( get_field('original') ): ?>
							<!-- <? /*php the_field('original'); */?> //直接打印输出字段的值-->
							<?php echo "原创"; ?>
							<?php else: ?>
							<?php echo "转载"; ?>
							<?php endif; ?>
						</a>
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
								echo '<img src="/wp-content/uploads/2019/03/jsonp.png" alt="唯品秀前端个人博客" />';
					?>
					<h3>
						<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 200,"..."); ?>
						<!--文章内容-->
					</h3>
					<a class="read-more read_url" href="<?php the_permalink(); ?>" target="_blank">阅读全文<i class="fa fa-chevron-circle-right"></i></a>
					<p class="l">
						<!-- <span>
							<a href="<?php /*the_permalink(); */?> ">
								<i class="fa fa-calendar">&nbsp;</i><?php /*echo '发表于 '.timeago( get_gmt_from_date(get_the_time('Y-m-d G:i:s')) ); */?>
							</a>
						</span> -->
						<span><i class="fa fa-calendar" aria-hidden="true"></i><?php the_time('Y年m月d日') ?></span>
						<span>
							<a href="<?php the_permalink(); ?> ">
								<i class="iconfont icon-liulan"></i><?php echo getPostViews(get_the_ID()); ?>℃
							</a>
						</span>
						<span class="comm">
							<a href="<?php the_permalink(); ?> "><i class="iconfont icon-pinglun2"></i><?php echo number_format_i18n( get_comments_number() );?>条评论
							</a>
						</span>
						<span class="post-like">
							<a href="javascript:;" style="data-action="ding" data-id="<?php the_ID(); ?>" class="favorite<?php if(isset($_COOKIE['bigfa_ding_'.$post->ID])) echo ' done';?>">
								<i class="fa fa-thumbs-o-up"></i>	  
								<span class="count">   
					        		<?php if( get_post_meta($post->ID,'bigfa_ding',true) ){
						                    echo get_post_meta($post->ID,'bigfa_ding',true);
						                 } else {echo '0';
						          }?></span>喜欢   
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
				<?php header("Location: /404.html");exit; ?> 
				<!-- <h2 id="redirect">
					<?php _e('404'); ?>
				</h2> -->
				<?php endif; ?>
				<?php wp_pagenavi(); ?>
				<!-- <div>
						不借助插件进行分页，懒得写样式了，可以根据需要自己整整
						?php if (function_exists('pagenavi')) { pagenavi(); } ?
				</div> -->
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

	<!-- 底部调用start -->
	<?php get_footer()?>
	<?php wp_footer(); ?>
	<!-- 底部调用end -->

	<!-- 首页弹窗start 
	<div id="curriculum" class="gradient">
		<h2>
			<strong>重要通知</strong>
			<a class="close" href="javascript:;" title="关闭 - close"></a>
		</h2>
		<ul>
			<li>
				<p>
					<strong>主题开源</strong>
					<span>本博客主题已正式开源了</span>
					<em>2018-02-20</em>
				</p>
			</li>
			<li>
				<p>
					<strong>免费授权</strong>
					<span>永久不盈利原则免费授权</span>
					<em>2018-02-20</em>
				</p>
			</li>
			<li>
				<p>
					<strong>免费更新</strong>
					<span>项目不定期维护更新优化</span>
					<em>2018-02-20</em>
				</p>
			</li>
			<li>
				<p>
					<strong>欢迎使用</strong>
					<span>欢迎Github克隆下载使用</span>
					<em>2018-02-20</em>
				</p>
			</li>
		</ul>
		<div class="contact">
			<h3>✎﹏ℳ๓ั如履✾薄冰</h3>
			<h4>QQ : <?php echo get_option('weipxiu_options')['QQ-number'];?></h4>
			<h4>手机：<span><?php 
        echo get_option('weipxiu_options')['footer_copyright'];
				?></span></h4>
			<a href="javascript:;">返回</a>
		</div>
	</div>
	首页弹窗end -->

	<!-- 首页背景音乐开始 -->
	<!-- <audio src="php bloginfo('template_url'); ?>/music/2595207170.mp3" loop="loop" preload="none" id="music"></audio>
	<div class="control"></div> -->
	<!-- 首页背景音乐结束 -->
</body>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/xfg_banner/banner-effect.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/index_min.js"></script>

</html>