<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="Author" content="李俊" />
	<meta name="description" content="<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 200,"..."); ?>" />
	<meta name="keywords" content="个人博客,唯品秀个人博客,个人博客网站,唯品秀，web前端博客，网页制作，博客，HTML5/CSS3，Javascript" />
    <meta name="format-detection" content="telephone=no"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title><?php the_title(); ?>&nbsp;|&nbsp;关注WEB前端开发技术&nbsp;-&nbsp;唯品秀博客</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" media="screen and (max-width:640px)" href="<?php bloginfo('template_url'); ?>/style-ios.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-width:641px) and (max-width:959px)" href="<?php bloginfo('template_url'); ?>/style-ipd.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-width:960px)" href="<?php bloginfo('template_url'); ?>/style.css">
	<?php wp_head(); ?>
</head>
    <body>
    <!--头部文件引用开始-->
	<?php get_header();?>
	<!--头部文件引用结束-->

    <!-- 正文区域start -->
    <div class="continar">
         <div class="continar-left" style="border:0; padding:0; background: transparent;">
            <!-- 文章start -->
			<?php
			if(have_posts()): while(have_posts()):the_post();
			?>

			<div class="text">
				 <div class="img-left">
				 	<?php
					    if ( has_post_thumbnail() )
					        the_post_thumbnail();
					    else
					        echo '<img src="http://www.weipxiu.com/wp-content/uploads/2017/04/default-220x150.png" alt="" />';
					?>
				 </div>
    	 	     <div class="text_right">
	    	 	 	 <h2>
		    	 	 	 <span><?php the_category() ?><i></i></span>
		    	 	 	 <a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a>
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
	    	 	 	     <?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 150,"..."); ?><!--文章内容-->
	    	 	 	 </h3>
	    	 	 	 <a class="read-more" href="<?php the_permalink(); ?>" target="_blank">阅读全文<i class="fa fa-chevron-circle-right"></i></a>
	    	 	 	 <p class="l">
						<!-- <span>
							<a href="<?php the_permalink(); ?> ">
								<i class="fa fa-calendar">&nbsp;</i><?php echo '发表于 '.timeago( get_gmt_from_date(get_the_time('Y-m-d G:i:s')) ); ?>
							</a>
						</span> -->
						<span><i class="fa fa-clock-o">&nbsp;</i><?php echo '发表于 '.timeago( get_gmt_from_date(get_the_time('Y-m-d G:i:s')) ); ?>
						</span>
						<span>
							<a href="<?php the_permalink(); ?> ">
								<i class="fa fa-eye"></i>&nbsp;<?php echo getPostViews(get_the_ID()); ?>℃</span>
							</a>
						<span class="comm">
							<a href="<?php the_permalink(); ?> ">
								<i class="fa fa-commenting-o"></i>
								<span id = "url::<?php the_permalink(); ?>" class = "cy_cmt_count" ></span>
								<script id="cy_cmt_num" src="https://changyan.sohu.com/upload/plugins/plugins.list.count.js?clientId=cyt2b1NqT">
								</script>
								条评论
							</a>
						</span>
						<span class="post-like">
							<a href="javascript:;" style="color: #f78585" data-action="ding" data-id="<?php the_ID(); ?>" class="favorite<?php if(isset($_COOKIE['bigfa_ding_'.$post->ID])) echo ' done';?>">
								<i class="fa fa-thumbs-o-up" style="color: #f78585"></i>	  
								<span class="count">   
					        		<?php if( get_post_meta($post->ID,'bigfa_ding',true) ){            
						                    echo get_post_meta($post->ID,'bigfa_ding',true);
						                 } else {
						                    echo '0';
						             }?>
					            </span>喜欢   
						    </a>   
    					</span>
						<span class="r"></span>
					 </p>
	    	 	 	 <em><a href="">0</a></em>
	    	 	 	 <!-- <span class="new-icon">NEW</span> -->
    	 	 	 </div>
    	 	 	 <!-- <font class="s_bar"></font> --><!--竖条-->
			</div>
				<?php endwhile; else : ?>
				<h2><?php _e('Not Found'); ?></h2>
				<?php endif; ?>
            <?php wp_pagenavi(); ?><!--分页插件调用-->

    	 </div>
    	 <!-- 左侧区域结束 -->

         <!-- 右侧区域开始 -->
         <div class="continar-right">
               <?php get_sidebar( $name ); ?>
         </div>
         <!-- 右侧区域结束 -->
    </div>
    <!-- 正文区域end -->
    
	<!-- 底部引用区域开始 -->
    <?php get_footer()?>
    <!-- 底部引用区域结束 -->
</body>
</html>