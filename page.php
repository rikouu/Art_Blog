<!DOCTYPE html>
<html lang="en">

<head>
    <!--声明当前页面的编码集charset=gbk中文编码gb2312,charset=utf-8 国际编码-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!--当前页面的三要素-->
    <title>登录注册</title>
    <meta name="Keywords" content="关键词,关键词">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen and (max-width:640px)" href="<?php bloginfo('template_url'); ?>/style-ios.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width:641px) and (max-width:959px)" href="<?php bloginfo('template_url'); ?>/style-ipd.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width:1025px)" href="<?php bloginfo('template_url'); ?>/style.css">
    <?php wp_head(); ?>
    <style>
        /*会员登录注册开始*/

        #WebCon {
            width: 330px;
            margin: 50px auto 0;
            background: #fff;
            padding: 35px 20px 30px 31px;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, .2);
            border-radius: 7px;
        }

        #web_page {
            color: #999
        }

        #web_page .wpuf-message {
            text-align: center;
            font-size: 18px;
            color: #ed145b;
        }

        #web_page label {
            display: inline-block;
            width: 74px;
        }

        #web_page p {
            line-height: 45px;
            margin-top: 10px;
            height: 45px;
        }

        #web_page input {
            height: 38px;
            border: 1px solid #bbb;
            text-indent: 2px;
            border-radius: 5px;
            width: 185px
        }

        #web_page #wp-submit {
            background: #04A4CC;
            color: #fff;
            text-align: center;
            font-size: 14px;
            display: block;
            margin: 0 auto;
            padding: 8px 30px;
            width: 150px;
            cursor: pointer;
        }

        #web_page #wpuf-rememberme {
            width: 12px;
            height: 12px;
            margin-top: 18px;
            cursor: pointer;
        }

        #web_page a {
            display: inline-block;
            text-align: center;
            margin: 20px 42px 0;
        }

        .forgetmenot {
            height: 26px;
            line-height: 26px
        }

        #WebCon .forgetmenot label {
            width: 170px;
        }

        #WebCon .forgetmenot label[for*="wpuf-rememberme"] {
            width: 115px
        }

        #web_page p[class*="forgetmenot"] {
            text-align: center;
        }

        #web_page p input[name*="user_login"] {
            width: 267px;
            display: block;
        }

        #web_page #lostpasswordform label[for*="wpuf-user_login"] {
            width: 100%;
        }

        #web_page #wp-submit[value*="获取新密码"] {
            margin-top: 60px;
        }

        span.wpuf-user-avatar img {
            display: block;
            margin: 0 auto;
            border-radius: 100%
        }

        .wpuf-user-loggedin>ul li {
            margin-top: 30px;
        }

        #WebCon .wpuf-user-loggedin>a {
            margin: 20px 0px 3px 43px;
        }

        .ds-login {
            display: none
        }
        /*会员登录注册结束*/
    </style>
    <?php wp_head(); ?>
</head>

<body class="webBody">
    <?php get_header(); ?>
    <?php  if (is_user_logged_in()){
  		echo '<script>window.location.href="http://www.weipxiu.com"</script>';
	}/*用户登录成功立即跳转到网站首页*/
?>
    <!-- 正文区域start -->
    <div class="continar" style="width:1000px; min-height:445px">
        <div id="WebCon">
            <div id="web_page">
                <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; ?>
                <?php endif; ?>
                <div style="clear:both"></div>
            </div>
        </div>
    </div>
    <!-- 正文区域结束 -->
    <?php get_footer() ?>
    <?php wp_footer(); ?>
</body>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/index.js"></script>
<script>
    $( function() {
        $( "#wpuf-avatar-pickfiles" ).parents( ".continar" ).css( {
            "min-height": "600px",
            "margin-bottom": "60px",
            "width": "560px"
        } );
        $( "#wpuf-avatar-pickfiles" ).parents( "#WebCon" ).css( "width", "100%" );
        $( "#wpuf-login-form a:last" ).html( "忘记密码？" );
        $( "#lostpasswordform" ).prev().html( "请输入您注册时填写的电子邮件账号。您将收到一个链接，以通过电子邮件创建一个新的密码！" );
        //移动端搜索区域结束
        if ( $( "body,html" ).width() < 960 ) {
            $( ".continar" ).css( "width", "95%" );
        }
    } )
</script>
</html>