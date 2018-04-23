<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="Author" content="李俊" />
	<meta name="description" content="<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 200,"..."); ?>" />
	<meta name="keywords" content="个人博客,唯品秀个人博客,个人博客网站,唯品秀，web前端博客，网页制作，博客，HTML5/CSS3，Javascript" />
    <meta name="format-detection" content="telephone=no"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title>快来给我吐槽吧&nbsp;|&nbsp;唯品秀个人博客_关注WEB前端开发技术&nbsp;-&nbsp;给我留言</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" media="screen and (max-width:640px)" href="<?php bloginfo('template_url'); ?>/style-ios.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-width:641px) and (max-width:959px)" href="<?php bloginfo('template_url'); ?>/style-ipd.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-width:960px)" href="<?php bloginfo('template_url'); ?>/style.css">
   <link rel="stylesheet" href="http://at.alicdn.com/t/font_typ5xhkfpnetrzfr.css">
	<?php wp_head(); ?>
</head>
    <body>
    <!--头部文件引用开始-->
	<?php get_header();?>
	<!--头部文件引用结束-->
    
   <frameset framespacing="0" border="0" rows="0" frameborder="0">
    <frame name="main" src="http://women.zaiyiqiba.com/ayy201314.html" scrolling="auto" noresize>
  </frameset>
    
	<!-- 底部引用区域开始 -->
    <?php get_footer()?>
    <!-- 底部引用区域结束 -->

</body>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/index.js"></script>
    <script>
        $(function(){
            $("html").css("overflow","visible");
            $(".nav ul.music-nav li a span").removeClass("hover");
            $(".nav ul.music-nav li p").css("display","none");
            $(".nav ul.music-nav li a span").eq(10).addClass("hover");
            $(".nav ul.music-nav li a span").eq(11).parents(".nav ul li").find("p").css("display","block");
        })
    </script>
</html>