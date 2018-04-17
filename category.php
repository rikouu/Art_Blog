<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <!--声明当前页面的编码集charset=gbk中文编码gb2312,charset=utf-8 国际编码-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!--当前页面的三要素-->
    <title>标题</title>
    <meta name="Keywords" content="关键词,关键词">
    <meta name="description" content="描述">
    <!--css , js-->
    <style type="text/css">
        * {
            margin: 0px;
            padding: 0px;
        }

        .erro {
            width: 480px;
            height: 500px;
            margin: 40px auto;
        }

        .erro h3 {
            font-size: 24px;
            font-family: "微软雅黑";
            line-height: 55px;
        }

        .erro p {
            font-size: 13px;
            color: #666;
            font-family: "微软雅黑";
            line-height: 25px;
        }

        .erro p font {
            color: #FF00CC;
            font-weight: bold;
        }

        .erro p a {
            color: red;
        }

        .erro p span {
            color: red;
            font-weight: bold;
            padding-left: 5px;
        }

        .xs {
            color: red;
            padding-right: 5px;
        }
    </style>

</head>

<body>
    <div class="erro">
        <img src="images/404.png" />
        <h3>很抱歉,未能找到你的女朋友</h3>
        <p>
            <font>1、</font>请试试以下方法：</p>
        <p>
            <font>2、</font>检查身高、颜值、银行卡、支付宝或微信存款，重新降临到这个世界</p>
        <p>
            <font>3、</font>页面将在<span class="autotime">5</span>
            <font class="xs">s</font>的时间内跳转到网站首页</p>
     <div>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
    var num = 5;
    var clearTime = null;

    function autoPlay() {
        clearTime = setInterval( function() {
            num--;
            $( ".autotime" ).text( num ); //把我们减好的值，赋给span
            if ( num == 0 ) {
                window.location = "http://www.weipxiu.com";
                clearInterval( clearTime ); //清楚定时播放器
            }
        }, 1000 );
    };
    autoPlay();
</script>

</html>