<div class="aside">
    <h3>前端简介</h3>
    <video id="my-video" class="video-js vjs-default-skin vjs-big-play-centered" controls preload  width="328" height="185" style="margin-top:0"
        poster="<?php bloginfo('template_url'); ?>/images/s1.png" width="328" height="185" data-setup="{}">
        <source src="<?php bloginfo('template_url'); ?>/music/2018.mp4" type="video/mp4">
        <p class="vjs-no-js"> 要查看此视频，请启用JavaScript，并考虑升级到Web浏览器版本。 <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a> </p>
    </video>
    <img src="<?php bloginfo('template_url'); ?>/images/s1.png" width="328" height="185" alt="" style="width:100%;display: none; margin-top:10px;background-size: 330px 185px;">
    <div class="textwidget">
        <p class="clearfix">
            唯品秀博客: weipxiu.com，一个关注Web前端开发技术、关注用户体验、坚持更多原创实战教程的个人网站，
            愿景：成为宇宙中最具有代表性的前端博客，期待您的参与,<a rel="nofollow" target="_blank" href="/?cat=10">了解更多...</a>
        </p>
        <ul class="social">
            <ul class="social">
                <li class="weibo">
                    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=343049466&site=qq&menu=yes"><i class="iconfont icon-qq"></i>QQ</a>
                </li>
                <li class="qq">
                    <a target="_blank" href="https://jq.qq.com/?_wv=1027&k=4BemYKg" rel="nofollow" class="top-tip" title="加入web前端QQ群"><i class="iconfont icon-qqqun"></i>Q群</a>
                </li>
                <li class="feed">
                    <a target="_blank" href="tencent://message/?uin=343049466&Site=qq&Menu=yes" rel="nofollow" class="top-tip" title="QQ临时会话"><i class="iconfont icon-qq"></i>会话</a>
                </li>
                <li class="email">
                    <a href="mailto:343049466@qq.com.com" target="_blank" rel="nofollow" class="top-tip" title="给我发送qq邮件"><i class="iconfont icon-youxiang"></i>邮件</a>
                </li>
                <li class="weixin">
                    <a href="http://www.weipxiu.com/feed" target="_blank" rel="nofollow" class="top-tip" title="关注微信"><i class="iconfont icon-weixin"></i>微信</a>
                </li>
            </ul>
        </ul>
    </div>
</div>
<!-- 前端日报开始 -->
<div class="widget mouseover">
    <div class="daily-list">
        <h3 class="widget-title"><a href="javascript:()"><i class="fa fa-bars" aria-hidden="true"></i>大家喜欢</a></h3>
        <ul>
            <?php
              $args = array(
                  'post_password' => '',
                  'post_status' => 'publish', // 只选公开的文章.
                  'post__not_in' => array($post->ID),//排除当前文章
                  'caller_get_posts' => 1, // 排除置頂文章.
                  'orderby' => 'rand', // 依評論數排序.
                  'posts_per_page' => 10 // 设置调用条数
              );
              $query_posts = new WP_Query();
              $query_posts->query($args);
              while( $query_posts->have_posts() ) { $query_posts->the_post(); ?>
                <li>
                    <em></em>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php the_title(); ?>
                    </a>
                </li>
                <?php } wp_reset_query();?>
        </ul>
    </div>
</div>
<!-- 前端日报结束 -->

<!-- 技术分类开始 -->
<div class="classif">
    <h3 class="widget-title"><a href="javascript:()"><i class="fa fa-bars" aria-hidden="true"></i>文章分类</a></h3>
    <div class="items">
        <a href="http://www.weipxiu.com/?cat=3">HTML/CSS (<?php echo wt_get_category_count(3); ?>)</a>
        <a href="http://www.weipxiu.com/?cat=6">HTML5 (<?php echo wt_get_category_count(6); ?>)</a>
        <a href="http://www.weipxiu.com/?cat=6">CSS3详解 (<?php echo wt_get_category_count(6); ?>)</a>
        <a href="http://www.weipxiu.com/?cat=5">JavaScript (<?php echo wt_get_category_count(5); ?>)</a>
        <a href="http://www.weipxiu.com/?cat=5">jQuery (<?php echo wt_get_category_count(5); ?>)</a>
        <a href="http://www.weipxiu.com/?cat=14">Vue.js (<?php echo wt_get_category_count(14); ?>)</a>
        <a href="http://www.weipxiu.com/?cat=14">Angular.js (<?php echo wt_get_category_count(14); ?>)</a>
        <a href="http://www.weipxiu.com/?cat=22">Node.js (<?php echo wt_get_category_count(22); ?>)</a>
        <a href="http://www.weipxiu.com/?cat=13">前端技巧 ((<?php echo wt_get_category_count(13); ?>))</a>
        <a href="http://www.weipxiu.com/?cat=14">前端资源 (<?php echo wt_get_category_count(14); ?>)</a>
        <a href="http://www.weipxiu.com/?cat=29">前端工具 (<?php echo wt_get_category_count(29); ?>)</a>
        <a href="http://www.weipxiu.com/?cat=2">wordpress (<?php echo wt_get_category_count(2); ?>)</a>
        <a href="javascript:void(0);">Webpack (43)</a>
        <a href="javascript:void(0);">W3c标准 (16)</a>
        <a href="http://www.weipxiu.com/?cat=1">网站公告 (99)</a>
        <a href="javascript:void(0);">作品欣赏 (10)</a>
        <a href="javascript:void(0);">网页设计 (10)</a>
        <a href="javascript:void(0);">UI设计 (10)</a>
        <a href="javascript:void(0);">站长必备 (27)</a>
        <a href="https://github.com/weipxiu">Github开源(3)</a>
        <a href="javascript:void(0);">WEB兼容 (17)</a>
    </div>
</div>
<!-- 技术分类结束 -->

<!-- <div class="widget Label">
  <h3 class="widget-title"><a href="javascript:()"><i class="fa fa-bars" aria-hidden="true"></i>标签云</a></h3>
  <div class="daily-list">
      <?php wp_tag_cloud('smallest=10&largest=14&number=32&order=RAND') ?>
  </div>
</div> -->

<!-- 评论模块开始 -->
<div class="classif" id="primary-sidebar">
    <div class="com-s com">
        <h3 class="widget-title">
            <a href="javascript:()"><i class="fa fa-bars" aria-hidden="true"></i>精彩评论</a>
        </h3>
        <!-- 代码1：放在页面需要展示的位置  -->
        <!-- 如果您配置过sourceid，建议在div标签中配置sourceid、cid(分类id)，没有请忽略  -->
        <div id="cyReping" role="cylabs" data-use="reping"></div>
        <!-- 代码2：用来读取评论框配置，此代码需放置在代码1之后。 -->
        <!-- 如果当前页面有评论框，代码2请勿放置在评论框代码之前。 -->
        <!-- 如果页面同时使用多个实验室项目，以下代码只需要引入一次，只配置上面的div标签即可 -->
        <!-- 评论模块结束 -->
    </div>
</div>

<!-- 友情链接开始 -->
<div class="widget friendship">
    <div class="daily-list">
        <h3 class="widget-title"><a href="javascript:()"><i class="fa fa-bars" aria-hidden="true"></i>风云英雄</a></h3>
        <p>他们同样是一群网虫，却不是每天泡在网上游走在淘宝和网游之间、刷着本来就快要透支的信用卡。他们或许没有踏出国门一步，却获得了斯坦福、哈佛等许多常青藤名校课程的结业证……他们的同学不局限在一国一校，而是遍及全球……加入他们，成为一名互联网学习者！
        </p>
		<ul class="friendsChain">
			<?php wp_list_bookmarks('title_li=&categorize=0'); ?>
		</ul>
    </div>
</div>
<!-- 友情链接结束 -->

<div class="widget" id="web-tj">
    <div class="daily-list">
        <h3 class="widget-title"><a href="javascript:()"><i class="fa fa-bars" aria-hidden="true"></i>站点统计</a></h3>
        <ul>
            <li>文章：
                <?php $count_posts = wp_count_posts(); echo $published_posts = $count_posts->publish; ?> 篇</li>
            <li>分类：
                <?php echo $count_categories = wp_count_terms('category'); ?> 个</li>
            <li>标签：
                <?php echo $count_tags = wp_count_terms('post_tag'); ?> 个</li>
            <!-- <li>链接：<?php $link = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->links WHERE link_visible = 'Y'"); echo $link; ?> 个</li> -->
            <li>运行：
                <?php echo floor((time()-strtotime("2016-12-15"))/86400);?>天</li>
            <li>访问：6,587,558次</li>
            <li>更新：
                <?php $last = $wpdb->get_results("SELECT MAX(post_modified) AS MAX_m FROM $wpdb->posts WHERE (post_type = 'post' OR post_type = 'page') AND (post_status = 'publish' OR post_status = 'private')");$last = date('Y年n月j日', strtotime($last[0]->MAX_m));echo $last; ?>
            </li>
            <!-- <li style="margin:0; line-height: 22px;">
                  <a href="<?php bloginfo('rss2_url'); ?>" title="RSS订阅本站">
                      <font class="iconfont icon-1" style="color:#666; font-size:16px;"></font>
                  </a>
              </li> -->
        </ul>
    </div>
</div>
<script type="text/javascript" charset="utf-8" src="https://changyan.sohu.com/js/changyan.labs.https.js?appid=cyt2b1NqT"></script>
<!-- 畅言js -->