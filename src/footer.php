<!-- 底部区域开始 -->
<footer class="footer">
  <div class="container">
    <?php 
        echo get_option('weipxiu_options')['footer_copyright'];
    ?>本站主题由 <a href="https://www.weipxiu.com/" class="highlight">WEIPXIU.COM</a>
    提供 <a href="https://github.com/weipxiu/Art_Blog" class="highlight">主题源码</a></p>
  </div>
</footer>
<!-- 底部区域结束 -->

<!-- 底部半透明遮盖层 -->
<div class="footer-banner__navi">
  <div class="js_banner_nav mod-banner_nav">
    <a class="js_nav current" href="javascript:;"></a>
    <a class="js_nav" href="javascript:;"></a>
    <a class="js_nav" href="javascript:;"></a>
    <a class="js_nav" href="javascript:;"></a>
    <a class="js_nav" href="javascript:;"></a>
    <a class="js_nav" href="javascript:;"></a>
  </div>
  <span class="mod-banner__nav-dot">
    <canvas id="dotCanvas"></canvas>
  </span>
</div>

<!-- 自定义右键菜单提示开始 -->
<div id="menu">
  别看啦，宝宝好羞涩
  <span>*^_^*</span>
</div>
<!-- 自定义右键菜单提示结束 -->

<!-- 小飞机start -->
<div class="aircraft">
  <font class="iconfont icon-huojian-copy"></font>
</div>
<!-- 小飞机end -->

<!--ajax加载loading-->
<div id="loading">
  <div class="k-ball-holder">
      <div class="k-ball7a"></div>
      <div class="k-ball7b"></div>
      <div class="k-ball7c"></div>
      <div class="k-ball7d"></div>
  </div>
</div>
<!--ajax加载loading end-->

<!-- 在线客服开始 -->
<div id="divStayTopright" style="position:fixed;z-index:999999;top:40%;right:0px;height:16px;">
  <div id="wuyousujian-kefuDv" style="right: -196px; position: fixed;">
    <script>
      var isIn = true;
      var isLeft = "right";
    </script>
    <table>
      <tbody>
        <tr>
          <td id="navLog">
            <img src="<?php bloginfo('template_url'); ?>/images/open_im.png" width="40" height="133" id="imgNav">
          </td>
          <td>
            <table id="__01" width="105" class="customer-list" style="min-width:105px" border="0" cellpadding="0" cellspacing="0">
              <tbody>
                <tr>
                  <td>
                    <div class="kefu1">服务热线：</div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="telNo" id="txtTelNo">&nbsp;<?php 
                      echo get_option('weipxiu_options')['phone-number'];
                      ?>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="kefu3"></div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="wangwang-names" style="margin-bottom:7px">&nbsp;QQ在线交流</p>
                    <div class="qqSmall">
                      <a target="_blank" href="https://wpa.qq.com/msgrd?v=3&uin=<?php 
                      echo get_option('weipxiu_options')['QQ-number'];
                      ?>&site=qq&menu=yes">
                        <img border="0" width="77" height="22" src="<?php bloginfo('template_url'); ?>/images/zaixian_qq.gif" width="77" height="22" alt="点击这里给我发消息" title="点击这里给我发消息"
                        />
                      </a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="qqSmall">
                      <a target="_blank" href="https://wpa.qq.com/msgrd?v=3&uin=<?php 
                      echo get_option('weipxiu_options')['QQ-number'];
                      ?>&site=qq&menu=yes">
                        <img border="0" src="<?php bloginfo('template_url'); ?>/images/zaixian_qq.gif" alt="点击这里给我发消息" title="点击这里给我发消息" />
                      </a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="wangwang-names">&nbsp;旺旺在线</p>
                    <div class="qqSmall">
                      <a target="_blank" href="https://amos.alicdn.com/getcid.aw?spm=a1z10.1-c.0.0.LyS6rO&v=3&groupid=0&s=1&charset=utf-8&uid=可爱天使5202012&site=cntaobao&groupid=0&s=1&fromid=cntaobao可爱天使5202012"
                        style="position: relative; overflow: hidden;">
                        <img border="0" src="<?php bloginfo('template_url'); ?>/images/zaixian_ww.gif" alt="点击这里给我发消息" width="77" height="19" style="vertical-align:middle;">
                        <span class="image-overlay overlay-type-extern" style="display: none;">
                          <span class="image-overlay-inside"></span>
                        </span>
                      </a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="qqSmall">
                      <a target="_blank" href="https://amos.alicdn.com/getcid.aw?spm=a1z10.1-c.0.0.LyS6rO&v=3&groupid=0&s=1&charset=utf-8&uid=可爱天使5202012&site=cntaobao&groupid=0&s=1&fromid=cntaobao可爱天使5202012"
                        style="position: relative; overflow: hidden;">
                        <img src="<?php bloginfo('template_url'); ?>/images/lixian_ww.gif" alt="点击这里给我发消息" width="77" height="18" style="vertical-align:middle;">
                        <span class="image-overlay overlay-type-extern" style="display: none;">
                          <span class="image-overlay-inside"></span>
                        </span>
                      </a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="line"></div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="qq-kefu-fun-box">
                      <a class="qq-kefu-qrCode" id="qq-kefu-qrCode" href="javascript:;"></a>
                      <a class="qq-kefu-backUp-2" id="qq-kefu-backUp" href="javascript:;"></a>
                      <div class="qqkefu-qrcode-box" pos="2">
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<!-- 在线客服结束 -->
<!-- 判断用户当前是否登录成功开始 -->
<?php  /*if (is_user_logged_in()){            
	   echo "<script>$('#username a:lt(3)').hide();
     $('#username a:gt(2)').show()</script>";          
	 }           
	 else {             
	   echo "<script>$('#username a:lt(3)').show();
      $('#username a:gt(2)').hide();</script>";           
	   };*/  
?>
<!-- 判断用户当前是否登录 结束 -->

<!-- <script type="text/javascript" color="0,0,255" opacity='0.7' zIndex="-1" count="99" src="<?php bloginfo('template_url'); ?>/js/canvas-nest.min.js"></script> -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main_min.js"></script>
<script>
  $(function(){
    function secondToDate(second) {
    if (!second) {
      return 0;
    }
    var time = new Array(0, 0, 0, 0, 0);
    if (second >= 365 * 24 * 3600) {
      time[0] = parseInt(second / (365 * 24 * 3600));
      second %= 365 * 24 * 3600;
    }
    if (second >= 24 * 3600) {
      time[1] = parseInt(second / (24 * 3600));
      second %= 24 * 3600;
    }
    if (second >= 3600) {
      time[2] = parseInt(second / 3600);
      second %= 3600;
    }
    if (second >= 60) {
      time[3] = parseInt(second / 60);
      second %= 60;
    }
    if (second > 0) {
      time[4] = second;
    }
    return time;
  }

  function setTime() {
    // 博客创建时间秒数，时间格式中，月比较特殊，是从0开始的，所以想要显示5月，得写4才行，如下
    var create_time = Math.round(new Date(Date.UTC(2016, 10, 16, 0, 0, 0))
      .getTime() / 1000);
    // 当前时间秒数,增加时区的差异
    var timestamp = Math.round((new Date().getTime() + 8 * 60 * 60 * 1000) / 1000);
    currentTime = secondToDate((timestamp - create_time));
    currentTimeHtml = currentTime[0] + '年' + currentTime[1] + '天' +
      currentTime[2] + '时' + currentTime[3] + '分' + currentTime[4] +
      '秒';
    $('#htmer_time').html(currentTimeHtml)
  }
  setInterval(setTime, 1000);
  // 网站运行时间end

    if ($(document).width() >= 1200) {
    // 文字琴弦效果start
    (function ($) {
      // 换算字符串长度所占字符
      String.prototype.gblen = function() {    
          var len = 0;    
          for (var i=0; i<this.length; i++) {    
              if (this.charCodeAt(i)>127 || this.charCodeAt(i)==94) {    
                  len += 2;    
              } else {    
                  len ++;    
              }    
          }    
          return len;    
      } 
      // end
      $.extend($.easing, {
        easeOutElastic: function (x, t, b, c, d) {
          var s = 1.70158;
          var p = 0;
          var a = c;
          if (t == 0) return b;
          if ((t /= d) == 1) return b + c;
          if (!p) p = d * .3;
          if (a < Math.abs(c)) {
            a = c;
            var s = p / 4;
          } else var s = p / (2 * Math.PI) * Math.asin(c / a);
          return a * Math.pow(2, -10 * t) * Math.sin((t * d - s) * (2 * Math.PI) / p) + c + b;
        }
      });

      $.fn.qin = function (options) {
        var defaults = {
          offset: 22, // 最大偏移量
          duration: 500, // 晃动时间
          recline: 0.1 // 每像素偏移量
        };

        var opt = $.extend({}, defaults, options);

        return this.each(function () {
          var $ele = $(this);
          fillSpan($ele);
          stringAnimate($ele, opt);
        });
      };

      function fillSpan($ele) {
        //通过字符换算，尽可能让所有列长度一致
        var baseContent = ''; //初始化字符串 
        var strLengh = 0; //初始化截取位数
        if($ele.text().trim().gblen() < 38){
          baseContent = $ele.text().trim();
        }else{
          for(var k=0;k < 38;k++){
            if(baseContent.gblen() < 38){
              baseContent = $ele.text().trim().slice(0,strLengh) + '...';
              //console.log(baseContent,baseContent.gblen())
            }else{
              break;
            }
            strLengh ++;
          }
        }

        var content = '';
        for (var i = 0, len = baseContent.length; i < len; i++) {
          content += '<span>'+baseContent.substr(i, 1)+'</span>' 
        }
        $ele.html(content);
        var positionArr = []; //存放原始位置
        $ele.children('span').each(function () {
          var $span = $(this);
          var position = $span.position();
          positionArr.push(position);
          $span.css({
            top: 0 + "px", 
            left: position.left + "px"
          });
          setTimeout(function () {
            $span.css("position", "absolute");
          }, 0);
        });
        $ele.data("stringPosition", positionArr);
      }

      function stringAnimate($ele, opt) {
        var positionArr = $ele.data("stringPosition"); // 原始位置 

        var startX = 0; // 初始x轴位置
        var startY = 0; // 初始y轴位置 

        $ele.mouseenter(function (ex) {

          var offset = $ele.offset();

          startX = ex.pageX - offset.left; // 鼠标在容器内 x 坐标
          startY = ex.pageY - offset.top; // 鼠标在容器内 y 坐标
        });

        $ele.mousemove(function (ex) {
          var offset = $ele.offset();

          var xPos = ex.pageX - offset.left; // 鼠标在容器内 x 坐标
          var yPos = ex.pageY - offset.top; // 鼠标在容器内 y 坐标

          var offsetY = yPos - startY; // Y轴移动距离

          if (Math.abs(offsetY) > opt.offset) { // 如果偏移超过最大值
            return;
          }

          var ifDown = offsetY > 0; // 是否是向下移动

          $ele.children("span").each(function (index) {
            var $span = $(this); // 当前span
            var position = positionArr[index]; // 当前原始position
            var reclineNum = Math.abs(xPos - position.left) * opt.recline; // Y 轴移动距离，基于原始位置
            reclineNum *= ifDown ? 1 : (-1); // 基于向下为正方向

            var resultY = position.top + offsetY - reclineNum;

            if (ifDown && resultY < position.top) {
              resultY = position.top;
            } else if (!ifDown && resultY > position.top) {
              resultY = position.top;
            }

            $span.css({
              top: resultY + "px"
            });

          });
        });
        $ele.mouseleave(function () {
          $ele.children("span").each(function (index) {
            $(this).stop(true, false).animate({
              top: 0 + "px" //源代码：top: positionArr[index].top + "px"
            }, {
                duration: opt.duration,
                easing: "easeOutElastic"
              });
          });
        });
      };

    })(jQuery);
    $(".mouseover ul li a").qin({
      offset: 20, // default , 最大偏移量
      duration: 500, // default , 晃动时间
      recline: 0.1 // default , 每像素偏移量，越小“琴弦绷的越紧”
    });
    //文字琴弦效果end
  }
  })
</script>