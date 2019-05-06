<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="Author" content='<?php echo the_author(); ?>' />
    <meta name="description" content="<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 200,"
        ... "); ?>" />
    <?php 
		   $keywords = get_post_meta($post->ID, "keywords", true);
		   if($keywords == '') {
		      $tags = wp_get_post_tags($post->ID);    
		      foreach ($tags as $tag ) {        
		         $keywords = $keywords . $tag->name . ", ";    
		      }
		      $keywords = rtrim($keywords, ', ');
		   }
	?>
    <meta name="keywords" content="<?php echo $keywords; ?>" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <!--强制https-->
    <?php 
			if (get_option('switch_https')['text_pic'] == 'on'){
			?>
					<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
			<?php
			}
	?>
    <meta http-equiv="x-dns-prefetch-control" content="on">
	<link rel="dns-prefetch" href="<?php echo home_url(); ?>">
    <title><?php the_title(); ?>&nbsp;-&nbsp;唯品秀&nbsp;-&nbsp;前端开发&nbsp;|&nbsp;web前端技术博客</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
    <link rel="stylesheet" type="text/css" media="screen and (max-width:767px)" href="<?php bloginfo('template_url'); ?>/css/style-ios.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width:768px) and (max-width:1199px)" href="<?php bloginfo('template_url'); ?>/css/style-ipd.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width:1200px)" href="<?php bloginfo('template_url'); ?>/style.css">
    <link rel="stylesheet" href="/wp-content/plugins/codecolorer/codecolorer.css?ver=0.9.16">
    <style>
        .continar-left {
            border-radius: 5px;
            background: #fff;
            padding: 15px;
            border: 1px solid #e6e6e6;
        }
        @media screen and (min-width:980px) {
            .continar-left {
                margin-top: 50px;
            }
        }
    </style>
</head>
    <body>
        <!--头部文件引用开始-->
        <?php get_header();?>
        <!--头部文件引用结束-->

        <!-- 正文区域start -->
        <div class="continar">
            <?php
		  if (have_posts()) : while (have_posts()) : the_post();setPostViews(get_the_ID());
		 ?>
                <div class="continar-left" id="ajax_centent">
                    <!-- 面包屑导航 -->
                    <div class="mod-crumbs">
                        <span class="mod-breadcrumb">
                            <?php wheatv_breadcrumbs(); ?>
                        </span>
                    </div>
                    <div class="xiaob">
                        <h2 class="title">
                            <?php the_title(); ?>
                        </h2>
                        <p class="data-l">
                        <span>
                            <i class="iconfont icon-shijian"></i>
                                <?php the_time('Y年m月d日') ?>
                            </span>
                            <span>
                            <i class="iconfont icon-zuozhe"></i>
                                唯品秀
                            </span>
                            <span>
                                <i class="iconfont icon-kanguo"></i>
                                <?php echo getPostViews(get_the_ID()); ?>次浏览</span>
                            <span>
                                <!-- <a href="<?php the_permalink(); ?> ">
                                    <i class="iconfont icon-pinglun2"></i>
                                    <span id="url::<?php the_permalink(); ?>" class="cy_cmt_count"></span>
                                    <script id="cy_cmt_num" src="https://changyan.sohu.com/upload/plugins/plugins.list.count.js?clientId=cyt2b1NqT">
                                    </script>
                                    条评论
                                </a> -->
                            </span>
                        </p>
                    </div>

                    <div class="log-text">
                        <?php the_content(); ?>
                        <!--文章内容-->
                        <?php endwhile; else : ?>
                        <h2>
                            <?php _e('Not Found'); ?>
                        </h2>
                        <?php endif; ?>
                        <p class="copy">「两年博客，如果觉得我的文章对您有用，请帮助本站成长」</p>
                        <!--文章打赏开始-->
                        <!-- PC端start -->
                        <div class="post-actions">
                            <span class="post-like action action-like">
                                <a href="javascript:;" data-action="ding" data-id="<?php the_ID(); ?>" class="favorite<?php if(isset($_COOKIE['bigfa_ding_'.$post->ID])) echo ' done';?>">
                                    <i class="iconfont icon-damuzhi"></i>赞(	  
                                    <span class="count">   
                                        <?php if( get_post_meta($post->ID,'bigfa_ding',true) ){            
                                                echo get_post_meta($post->ID,'bigfa_ding',true);
                                            } else {
                                                echo '0';
                                        }?>
                                    </span>)  
                                </a>   
                            </span>
                            <a href="javascript:;" class="action action-rewards" data-event="rewards">
                                <i class="fa fa-jpy"></i> 打赏
                                <span class="tooltip-content">
                                    <span class="tooltip-text">
                                        <span class="tooltip-inner">
                                            <p class="reward-p">
                                                <i class="icon icon-quo-left"></i><?php echo get_option('weipxiu_options')['reward_text'];?>
                                                <i class="icon icon-quo-right"></i>
                                            </p>
                                            <div class="reward-box">
                                                <div class="reward-box-item">
                                                    <img class="reward-img" src="<?php echo get_option('weipxiu_options')['alipay'];?>">
                                                    <span class="reward-type">支付宝</span>
                                                </div>
                                                <div class="reward-box-item">
                                                    <img class="reward-img" src="<?php echo get_option('weipxiu_options')['wechatpay'];?>">
                                                    <span class="reward-type">微信</span>
                                                </div>
                                            </div>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <!-- PC端end -->
                        <div class="page-reward">
                            <div class="page-reward-btn tooltip-top">
                                <div class="tooltip tooltip-east">
                                    <span class="tooltip-item">
                                        <font class="s_show">赏</font>
                                        <a href="javascript:;" style="color: #f78585" data-action="ding" data-id="<?php the_ID(); ?>" class="favorite<?php if(isset($_COOKIE['bigfa_ding_'.$post->ID])) echo ' done';?>">
                                            <i class="iconfont icon-damuzhi" style="color: #fff"></i>
                                            <span class="tog_show">
                                                <?php if( get_post_meta($post->ID,'bigfa_ding',true) ){            
                                                        echo get_post_meta($post->ID,'bigfa_ding',true);
                                                    } else {
                                                        echo '0';
                                                }?>
                                            </span>
                                        </a>
                                    </span>
                                    <span class="tooltip-content">
                                        <span class="tooltip-text">
                                            <span class="tooltip-inner">
                                                <p class="reward-p">
                                                    <i class="icon icon-quo-left"></i>谢谢你请我吃鸡腿*^_^*
                                                    <i class="icon icon-quo-right"></i>
                                                </p>
                                                <div class="reward-box">
                                                    <div class="reward-box-item">
                                                        <img class="reward-img" src="<?php bloginfo('template_url'); ?>/images/alipay.png">
                                                        <span class="reward-type">支付宝</span>
                                                    </div>
                                                    <div class="reward-box-item">
                                                        <img class="reward-img" src="<?php bloginfo('template_url'); ?>/images/weixin.png">
                                                        <span class="reward-type">微信</span>
                                                    </div>
                                                </div>
                                            </span>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--文章打赏结束-->
                    <div class="key-w">
                        <div class="single_lable">
                            <i class="iconfont icon-biaoqian" style="padding-right:3px"></i>标签：</div>
                        <?php the_tags('','',''); ?>
                    </div>
                    <p class="text-post text-post-top">
                        <?php if (get_previous_post()) { previous_post_link('<span  id="respond">上一篇：</span>%link');} else {echo "没有了，已经是最后文章";} ?>
                    </p>
                    <p class="text-post">
                        <?php if (get_next_post()) { next_post_link('<span>下一篇：</span>%link');} else {echo "下一篇：没有了，已经是最新文章";} ?>
                    </p>

                    <!-- 畅言公共JS代码 start (一个网页只需插入一次) -->
                    <!-- 评论 -->
                    <div class="post_content">
                        <?php comments_template( '', true ); ?>
                    </div>
                    <!-- <div id="SOHUCS"></div>
                    <script type="text/javascript">
                        (function () {
                            var appid = 'cyt2b1NqT';
                            var conf = '82271e371d1386ecc2659e2cff9c706c';
                            var width = window.innerWidth || document.documentElement.clientWidth;
                            if (width < 960) {
                                window.document.write(
                                    '<script id="changyan_mobile_js" charset="utf-8" type="text/javascript" src="https://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id=' +
                                    appid + '&conf=' + conf + '"><\/script>');
                            } else {
                                var loadJs = function (d, a) {
                                    var c = document.getElementsByTagName("head")[0] || document.head ||
                                        document.documentElement;
                                    var b = document.createElement("script");
                                    b.setAttribute("type", "text/javascript");
                                    b.setAttribute("charset", "UTF-8");
                                    b.setAttribute("src", d);
                                    if (typeof a === "function") {
                                        if (window.attachEvent) {
                                            b.onreadystatechange = function () {
                                                var e = b.readyState;
                                                if (e === "loaded" || e === "complete") {
                                                    b.onreadystatechange = null;
                                                    a()
                                                }
                                            }
                                        } else {
                                            b.onload = a
                                        }
                                    }
                                    c.appendChild(b)
                                };
                                loadJs("https://changyan.sohu.com/upload/changyan.js", function () {
                                    window.changyan.api.config({
                                        appid: appid,
                                        conf: conf
                                    })
                                });
                            }
                        })();
                    </script> -->
                    <!-- 畅言公共JS代码 end -->
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