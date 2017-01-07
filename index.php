<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="baidu-site-verification" content="cNP7vhhXuw" />
	<meta name="Author" content="李俊" />
	<meta name="description" content="唯品秀个人博客，关注Web前端开发技术，移动前端开发，前端资讯，同时分享前端资源和工具等，支持普通用户注册登录会员分享前端技术经验，期待你的参与！" />
	<meta name="keywords" content="唯品秀个人博客,新浪博客,唯品会个人博客网站,唯品秀，腾讯博客，web前端博客，网页制作，博客，HTML5/CSS3，Javascript，node.js" />
	<meta name="format-detection" content="telephone=no"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<title>唯品秀个人博客&nbsp;-&nbsp;关注Web前端开发技术</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" media="screen and (max-width:640px)" href="<?php bloginfo('template_url'); ?>/style-ios.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-width:641px) and (max-width:959px)" href="<?php bloginfo('template_url'); ?>/style-ipd.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-width:960px)" href="<?php bloginfo('template_url'); ?>/style.css">
	<?php wp_head(); ?>
</head>
	<body>
<div id="hide">
    <!--头部文件引用开始-->
	<?php get_header();?>
	<!--头部文件引用结束-->
    <!-- 正文区域start -->
    <div class="continar">
    	 <div class="continar-left" id="details" style="border:0; padding:0;background: transparent;">
		    <!--轮播开始-->
			<iframe src="http://www.weipxiu.com/index.html" style="width:100%;max-width:820px; margin-bottom:15px; overflow:hidden;" scrolling="" frameborder="0" hspace="0" vspace="0" id="SellMoney" allowTransparency="true"></iframe>
			<!--轮播结束-->
    	    <div class="continar-left-top">
			    <?php 
					$post_num = 1; // 设置调用条数 
					$args = array( 
					‘post_password’ => ”, 
					‘post_status’ => ‘publish’, // 只选公开的文章. 
					‘post__not_in’ => array($post->ID),//排除当前文章 
					‘caller_get_posts’ => 1, // 排除置顶文章. 
					‘orderby’ => ‘comment_count’, // 依评论数排序. 
					‘posts_per_page’ => $post_num 
					); 
					$query_posts = new WP_Query(); 
					$query_posts->query($args); 
					while( $query_posts->have_posts() ) { $query_posts->the_post(); ?>
					 <h1>
						  <a href="<?php the_permalink(); ?>" target="_blank">
						  		<span>【今日焦点】</span><?php the_title(); ?>
						  		<img src="http://www.weipxiu.com/wp-content/themes/relax/img/new.gif" alt="24小时内最新">
						  </a>
					 </h1>
					 <span><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 200,"..."); ?><!--文章内容简介-->
					 </span>
					 <?php } wp_reset_query();?> 
    	 	 </div> 
    	 	 <!-- 博客介绍开始 -->
    	 	 <aside class="blog">
	    	 	 	 <h3>博客介绍</h3>
	    	 	 	 <div class="textwidget">
						<p class="clearfix">
							<a href="#" rel="home">前端博客</a> : weipxiu.com，我们关注Web前端开发技术，移动前端开发，前端资讯，同时分享前端资源和工具等，期待你的参与,<a rel="nofollow" target="_blank" href="/?cat=10">了解更多..</a>
						</p>
						<ul class="social">
							<li class="weibo">
							   <a href="http://shang.qq.com/email/stop/email_stop.html?qq=30607580&sig=a1c657365db7e82805ea4b2351081fc3ebcde159f8ae49b1&tttt=1" target="_blank" class="top-tip" title="加QQ为好友"></a>
							</li>
							<li class="qq">
							   <a target="_blank" href="https://jq.qq.com/?_wv=1027&k=41b41qi" rel="nofollow" class="top-tip" title="加入web前端QQ群"></a>
							</li>
							<li class="feed">
							   <a target="_blank" href="tencent://message/?uin=30607580&Site=qq&Menu=yes" rel="nofollow" class="top-tip" title="QQ临时会话"></a>
							</li>
							<li class="email">
							   <a href="mailto:30607580@qq.com.com" target="_blank" rel="nofollow" class="top-tip" title="给我发送qq邮件"></a>
							</li>
							<li class="weixin">
							    <a href="http://www.weipxiu.com/feed" target="_blank" rel="nofollow" class="top-tip" title="关注微信"></a>
							</li>
						</ul>
					</div>
    	 	   </aside>
    	 	   <!-- 博客介绍结束 -->
    	 	 <!-- 邮件订阅start -->
    	 	 <div class="inner-box">
    	 	 	  <div class="rssbook">
    	 	 	  	  <h3 class="info">您也可以通过电子邮件订阅每日的更新，不错过任何一篇好文章</h3>
    	 	 	  	  <p>我们不会公开您的邮箱，您可以随时取消订阅</p>
    	 	 	  	  <div class="mailInput">
    	 	 	  	     <form action="http://list.qq.com/cgi-bin/qf_compose_send" target="_blank" method="post"> 
    	 	 	  	         <input type="hidden" name="t" value="qf_booked_feedback"> 
    	 	 	  	         <input type="hidden" name="id" value="5cc60d6d3dff7c55c2de1c494d8237cc4d602742c9c03c1d">
    	 	 	  	          <label></label>&nbsp; 
    	 	 	  	          <input id="to" name="to" type="text" class="rsstxt" value="" placeholder="请输入您的邮箱" pattern="\w+@[a-z0-9]+\.[a-z]+" required="">
    	 	 	  	          <input type="submit" class="rssbtn" value="订阅">
    	 	 	  	     </form>
    	 	 	  	  </div>
    	 	 	  </div>
    	 	 </div> 
    	 	 <!-- 邮件订阅end -->
            <!-- 文章start -->
			<?php
			if(have_posts()): while(have_posts()):the_post();
			?>

			<div class="text">
				 <?php the_post_thumbnail() ?><!-- 左侧图片 -->
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
	    	 	 	 <a class="read-more" href="<?php the_permalink(); ?>" target="_blank">阅读全文
	    	 	 	 </a>
	    	 	 	 <p class="l">
						<span><i class="fa fa-clock-o">&nbsp;</i><?php echo '发表于 '.timeago( get_gmt_from_date(get_the_time('Y-m-d G:i:s')) ); ?>
						</span>
						<span><i class="fa fa-eye"></i>&nbsp;<?php echo getPostViews(get_the_ID()); ?>℃</span>
						<span class="comm"><i class="fa fa-comments-o"></i>&nbsp;<?php comments_popup_link(); ?></span>
						<span class="post-like">
							<a href="javascript:;" style="color: #f78585" data-action="ding" data-id="<?php the_ID(); ?>" class="favorite<?php if(isset($_COOKIE['bigfa_ding_'.$post->ID])) echo ' done';?>"><i class="fa fa-heart-o" style="color: #f78585"></i>	  
									<span class="count">   
					        		<?php if( get_post_meta($post->ID,'bigfa_ding',true) ){            
						                    echo get_post_meta($post->ID,'bigfa_ding',true);
						                 } else {
						                    echo '0';
						             }?></span>喜欢   
						    </a>   
    					</span>
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
							<a href="#" rel="home">前端博客</a> : weipxiu.com，我们关注Web前端开发技术，移动前端开发，前端资讯，同时分享前端资源和工具等，期待你的参与,<a rel="nofollow" target="_blank" href="/?cat=10">了解更多..</a>
						</p>
						<ul class="social">
							<li class="weibo">
							   <a href="http://shang.qq.com/email/stop/email_stop.html?qq=30607580&sig=a1c657365db7e82805ea4b2351081fc3ebcde159f8ae49b1&tttt=1" target="_blank" class="top-tip" title="加QQ为好友"></a>
							</li>
							<li class="qq">
							   <a target="_blank" href="https://jq.qq.com/?_wv=1027&k=41b41qi" rel="nofollow" class="top-tip" title="加入web前端QQ群"></a>
							</li>
							<li class="feed">
							   <a target="_blank" href="tencent://message/?uin=30607580&Site=qq&Menu=yes" rel="nofollow" class="top-tip" title="QQ临时会话"></a>
							</li>
							<li class="email">
							   <a href="mailto:30607580@qq.com.com" target="_blank" rel="nofollow" class="top-tip" title="给我发送qq邮件"></a>
							</li>
							<li class="weixin">
							    <a href="http://www.weipxiu.com/feed" target="_blank" rel="nofollow" class="top-tip" title="关注微信"></a>
							</li>
						</ul>
					</div>
    	 	   </aside>
               
               <?php get_sidebar( $name ); ?>
    	 	   <!-- 技术分类开始 -->
    	 </div>
    	 <!-- 右侧区域结束 -->
    </div>
    <!-- 正文区域end -->
    
    <!-- 首页背景音乐开始 
    <audio src="http://other.web.ra01.sycdn.kuwo.cn/resource/n1/128/70/8/1297335596.mp3" loop="loop" preload="preload" id="music"></audio>
    <div class="control hover"></div>
    首页背景音乐结束 -->
    
	<!-- 底部引用区域开始 -->
    <?php get_footer()?>
	<?php wp_footer(); ?>
    <!-- 底部引用区域结束 -->
 </div>
    <!-- 页面缓冲加载开始 -->
    <div class="buffer">
    	 <div class="bar">
    	 	  <div class="xz"></div>
    	 	  <span id="loadtext">0%</span>
    	 </div>
    </div>
    <!-- 页面缓冲加载结束 -->
    <h1 style="position: fixed; left:-999px;top:-999px">
		<img src="<?php bloginfo('template_url'); ?>/images/web.png" alt="唯品秀个人博客">
	</h1>
	<!-- 360图片验证 -->
	<a href="http://webscan.360.cn/index/checkwebsite/url/www.weipxiu.com" style="display:none"><img border="0" src="http://img.webscan.360.cn/status/pai/hash/fc843d1cf93877e10b13758ac2c0ae71" style="display:none"/></a>
	<iframe id="vedio" height=156 width=310 src='http://player.youku.com/embed/XMTg1MjI2NTY4OA==' frameborder=0 'allowfullscreen'>
	</iframe> 
	<div class="hide">嘘</div>
</body>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jq.snow.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/javascript.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/index.js"></script>
	<script type='text/javascript' src='images/js/modernizr.min.js?ver=2.6.1'></script>
	<script>
	    var off = true;
		$(".hide").click(function(){
			if (off) {
					$("#vedio").animate({"bottom":"-196"},800,function(){
						$("#vedio").hide();
						$(".hide").html("喵").animate({"bottom":"0"},600);
			 		});
			}else{
				    $("#vedio").show();
				    $(".hide").html("嘘").animate({"bottom":"193px"},800);
					$("#vedio").animate({"bottom":"0"},800);		
			}
			off = !off;
		});
		$(".nav ul li a span:lt(2)").addClass("hover");
		$(".nav ul li a span:gt(2)").removeClass("hover");
	</script>
</html>
