<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="Author" content="李俊" />
	<meta name="description" content="<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 200,"..."); ?>" />
	<meta name="keywords" content="个人博客,唯品秀个人博客,个人博客网站,唯品秀，web前端博客，网页制作，博客，HTML5/CSS3，Javascript" />
    <meta name="format-detection" content="telephone=no"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title>我的博客我做主&nbsp;-&nbsp;了解唯品秀从这里开始&nbsp;|&nbsp;唯品秀博客</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen and (max-width:767px)" href="<?php bloginfo('template_url'); ?>/css/style-ios.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width:768px) and (max-width:1199px)" href="<?php bloginfo('template_url'); ?>/css/style-ipd.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width:1200px)" href="<?php bloginfo('template_url'); ?>/style.css">
	<?php wp_head(); ?>
</head>
    <body>
    <!--头部文件引用开始-->
	<?php get_header();?>
	<!--头部文件引用结束-->

    <!-- 正文区域start -->
    <div class="continar">
         <div class="continar-left" id="details">
             <!-- 用户中心头部start -->
             <div class="head_user_b"> 
                   <div class="head_user"> 
                    <div class="head_user_a"> 
                     <div class="head_avatar"> 
                      <a href="/author/1?info=home"> 
                       <m class="head_user_avatar_aa"> 
                             <img src="https://www.weipxiu.com/wp-content/themes/boke/images/ttx.png" class="avatar" width="160" height="160" />
                       </m> <span class="verify_1"></span></a> 
                     </div> 
                     <div class="head_avatar_a">
                      <p>Admin<i class="img-icon icon_male"></i><span title="等级：45级" style="vertical-align: 0px;" class="lv lv45"></span> <a href="/author/0?info=vip#user_menu" title="VIP 6" class="vip_aa"><img src="https://www.weipxiu.com/wp-content/themes/boke/images/vip9.png" class="vip_ico vip6" /></a></p>
                     </div> 
                     <div class="head_avatar_b">
                        <p> 管理员 </p>
                     </div> 
                     <div class="head_avatar_c"> 
                        <span class="follow-btn unfollowed" onclick="jinsom_pop_login_style();"><i class="fa fa-plus"></i> 关 注</span> 
                     </div> 
                    </div> 
                    <div class="head_user_data">
                         <span>人气：9999+</span> 
                         <span>粉丝：998</span> 
                         <span>关注：1983</span>
                    </div> 
                   </div> 
             </div>
             <!-- 用户中心头部end -->
             <h4 class="h4">站长简介</h4>
             <ul class="clearfix">
                    <!-- <li class="photo limit_w">
                        <a href="#" title="李俊">
                            <img src="<?php bloginfo('template_url'); ?>/images/IMG_0028.JPG" width="150" alt="李俊" title="李俊">
                        </a>
                    </li> -->
                    <li class="limit_w"><span>姓名：李俊</span><span>名族：大汉</span></li>
                    <li class="limit_w"><span>星座：金牛座</span><span>学历：大专</span></li>
                    <li class="limit_w"><span>籍贯：湖北黄冈</span></li>
                    <li class="limit_w"><span>专业：移动通信</span></li>
                    <li class="" style="margin-bottom:0"><span>职业：Web前端开发工程师</span></li>
                    <li><span>坐标：上海 - 浦东新区</span></li>
                    <!-- <li>
                        <span class="zym">
                            原创座右铭：人与人的智商的确是存在差异的，但这绝不应该成为你不愿意去努力拼搏的借口 —— 天生我材必有用！
                        </span>
                    </li> -->
                    <li class="zw_li h5"><span class="career">自我说明：</span></li>
                    <li class="index">
						欢迎来到weipxiu！本人前端小萌新，喜欢养花花草草、小动物（曾一把屎一把尿养过一只重达7斤大肉兔）、各种有趣的事。父母务农，初中就喜欢计算机（当然，那时候是喜欢游戏*^_^*），于是大学报读电子信息工程系。当进入大学后，我骤然发现人与人的区别竟然是那么的明显，有同学城市户口，有的家里开公司办厂，和同学一比难免无比自卑（唯一的班花明明我最先认识，还被别专业的瓜娃子抢走了）。加之如今的大学含金量真是。。。老师讲的课无力吐槽。。。于是想，未来该怎么办？如何在这个社会立足？
                    </li>
                    <li class="index">
                        13年进大学-期间在学生会任职游玩了半年，总觉得只是小打小闹。14年（上）兼职开淘宝一年。这段时间里我体会到了赚钱的心酸和快乐，在淘宝上我遇到过形形色色的买家，各种奇葩，当然，也遇到鼓励我的给甚至我钱的（东西不想要了还不要我退款），对于专业成绩我一直显得十分的尴尬，在老师眼里，我就是落后分子但不调皮的好约束的那种。一直延续到快去实习。
                    </li>
                    <li class="index">
                        偶然机会在"腾讯课堂"看到了公开课讲网页制作（还不算前端）,顿时被震撼，那时候我觉得视频里老师就是神一般的存在，他就像一个画家，在苍白的屏幕上点缀了闪烁的光彩，才觉悟，原来这才是真正的开发，让我重新燃起了希望。经过大约半年的前端学习，终于找到了前端开发的工作，向成功迈进了一步。现在是一名web前端工程师，但还需努力，要成为更好的自己。
                    </li>
                    <li><span class="career">职业生涯：</span></li>
                    <li class="index">
                        2015年6月（大二末）踏入前端生涯，同年8月下旬第一家面试 - 前程无忧武汉分公司。期望薪资2.5k，面试背景：刚学好布局，不会js、jQuery，被无视，面试官认为不适合面试前端，有辱“前端”这个新型高端职业字眼，当场淘汰。
                    </li>
                    <li class="index">
                        2015年9月再次找工作，面试近7-8家，三家成功，一家有缘 - 武汉点趣信息技术网络有限公司，成功入坑，2.5k/月（试用）。公司虽小不到10人，但老板人还行，加班看自己心情。不打卡。因温饱问题，迫于无奈，次年5月初跳槽，面试一家 - 武汉格林威治网络科技有限公司（外包），成功入坑！薪资底薪4500/月，加班1:1薪资补贴，综合6000+/月。加班晚餐大鱼大肉应有尽有，夜间打车报销，每月一次员工聚会（继续大鱼大肉），体重蹭蹭蹭，脂肪重点落在腹部。同年10月待定前端组长，未等升职加薪，因迫于长期熬夜加班出现白头发，每天欠睡眠，担心身体吃不消猝死英年早逝（还没老婆孩子甚至女朋友）10月末辞职。
                    </li>
                    <li class="index">
                        2017年2月只身北漂来上海，简历投递数百份，面试近10家，两家成功，一家闹眼子，成功入职 - 上海汇航捷讯网络科技有限公司（运去哪），公司总体大概不到300人，技术部9人，在职期间一直招人，同时一直有同事离职，
                        中途成功融资2轮，总金额约1.5亿+，至此大规模扩招，后大约扩展到400人+，技术部50人+，来自携程等大公司出来的大牛也有好几个
                    </li>
                    <li class="index">
                        但，这些和我没关系，刚来上海，人生地不熟，只想早点入坑，薪资要的不高，不到10k，毕竟在上海多耗一天多一天的危险，没钱还狂消费的日子不是谁都吼的住，进去后前8个月只有我一个前端，后端一直在扩招，从9人团队慢慢20人，30人，前端还是我一个人，
                        做的最多的就是写布局，写特效，曾经也想过扭转改变现状，但考虑因素太多，首先自己技术真的菜，就算平时自学点东西，在公司前后端1：20,1:30的人员分配下，你没办法去融入到实际项目中，
                        因为你不能因为个人原因导致整个项目延期，于是学了忘，忘了学，好像一直在原地。。。
                    </li>
                    <li class="index">
                        直到大约10月中下旬，公司开始膨胀了，规模越来越大，而我能发挥的能力也越来越小，为此迫不得已，公司开始真心招前端了，在这里要说明，从我入职第一天起，前端就一直没停止过招人，但。。。
                        于是面进来一个前端架构师，自称8年前端开发经验，后事实工作证明，8年开发经验不是盖的，也是我截止写下这段话时间在工作实际中遇到的最牛逼前端，这点不能不服，哪怕我对他的感觉并不算太好。
                        再次前端开始成立小组，继续扩招，后来又进来3个，基本在2-3年经验，但他们的薪资待遇却高出我的约40%+。这里不得不说到一个问题，很多传统企业很多跟不上技术潮流的老家伙是并不很在意前端这个岗位的，
                        哪怕他虽然认为这个岗位不可或缺，但并不觉得你有很高的价值，所以在前端这块招人公司对成本把控比较严格，乃至技术部即使到了50人+规模时候，前后端人员配置也将近1:6，这个比例在前后端正式分开开发后是很夸张的。
                    </li>
                    <li class="index">
                        持续到次年4月末，选择了离职，在一家不愿意给老员工提薪资，在一家新员工不满一年流失率高达80%公司，我想是个正常人都知道是有严重问题的，虽然公司做大了，但老板却越来越小气了，从原有的强制加班但给调休，后成强制加班，调休也成为奢望。
                        而让我坚持超过一年的原因主要是刚开始先在上海占坑，而后首席架构师人不错，很多问题他帮助我解决或者跟上面协调做出让步，到后面来了前端架构师，想着白干那么久，实际学点东西再走，再到后来公司一些制度以及个人原因实在让人忍无可忍就走了，
                        不得不说的一个插曲，公司年终奖是在年前发，在此前一天提离职的同事都是一毛钱拿不到的，也因为有意思的是测试部在拿到年终奖后全体离职，包括其中技术部唯一的被评选的优秀员工，狠狠的打了公司管理层的脸，成为一大笑话，
                        而年会抽到最大奖一台mac的客服妹子（据说刚转正），据说次年也没有来了，站在领导角度，我不知道那时候他们是如何感想。
                    </li>
                    <li class="index">
                        2018年5月重新找工作，天气带着小炎热，却发现被解脱的感觉是多么美好，望天空天变蓝了，看湖水水变清澈了。凭借着此前几个月时间的实际项目锻炼，我发现外面的世界也没想象的那么可怕，第二面就成功拿到了16k，
                        但规模不大，而且制度996被我当场拒绝了，后面慢悠悠，边面试边总结经验，在此又有个插曲，东方网力公司，一家奇葩的公司，面试5轮，前面几轮都谈的都愉快，最后一轮北京总部一个傻屌嫌弃我学历不够，把我放弃了，
                        整整一个星期时间都白消耗，上市公司，真的很了不起吗？不以为然，未完待续。。。
                    </li>
                </ul>
                <h4 class="h4">博客介绍</h4>
                <p class="px">
                    唯品秀个人博客，是我首次创建的个人博客，主要用于记录学习前端学习、工作笔记、心得的地方，抒发自己情感的地方，在今后的岁月里会慢慢来打磨并持续更新维护。
                </p>
                <p class="px">
                    此网站后台采用WordPress，前端模块完全自主开发(自主开发不代表不参考，如有雷同纯属巧合。。。)，运用大量js+css3运动，整体页面华丽的同时也会暗藏bug，尽管本人多次测试，但难免在众多设备或不同人不同见解下任有所不足之处，如有好的意见欢迎给我留言，博客会适当改进，慢慢改版。最后感谢大家的关注，尤其谢谢<a href="https://www.weipxiu.com/wp-content/themes/boke/thanks.php">各位</a>提供的帮助！
                </p>
                <p class="px">
                    也有人说，你花那么多时间去自己开发和维护这么一个小小个人博客网站有多大意义？这种网站只要有1-2年前端经验的就可以去完成，开发完了又开源出来供大家免费使用，
                    既没什么收益，又耗费时间，何不去把这些时间去用于更高级的技术层面研究上。其实这个问题问的一针见血，开发维护这个网站确实占用了很大一部分业余时间，但是，
                    既然当初花那么大的精力做出来了，为啥不继续维护好呢？毕竟很多时候你会发现，养了一只巴掌大宠物时间久了，也会有感情的，尤其是：
                    你能独立做一个网站和你独立做成过一个网站其实是两回事。还可以通过博客这个平台，还可以让全世界的人有更多机会认识到自己和了解自己，互相有所交流，
                    也是一件有趣的事情。
                </p>
                <!-- <p class="px">
                    最后感谢大家的关注，尤其谢谢<a href="https://www.weipxiu.com/wp-content/themes/boke/thanks.php">各位</a>提供的帮助！
                </p>
                <p class="px">
                    网址:<a href="https://www.weipxiu.com" target="_blank">www.weipxiu.com</a>
                    <a href="https://wanwang.aliyun.com/domain/" rel="nofollow" target="_blank">购买域名</a>
                </p> -->
                <!-- <p class="px">
                    服务器：阿里云服务器
                    <a href="https://s.click.taobao.com/t?e=m%3D2%26s%3DWoG1gOGHloYcQipKwQzePCperVdZeJviEViQ0P1Vf2kguMN8XjClAhhTilfuDb7gmOBYHCj3evBOAbTbYw7EPlvF2q5tuT9EvoVXXVCKRFy3TeD3oX5%2B6TDVuRn8ddiDsEVVC24eqozcHtRpEUy6RHVyxRO0gvF4QxJtmCgOmCLXl8Q7TEjBF%2BX11FSyvDCnQiv%2BJKjlPObGDmntuH4VtA%3D%3D" rel="nofollow" target="_blank">购买服务器</a>
                </p> -->
                <!-- <p class="px">
                    程序：WordPress
                </p>
                <p class="px">联系方式↓</p>
                <ul class="bon-1">
                    <li>QQ：30607580</li>
                    <li>E-mail：30607580@qq.com</li>   
                </ul> -->
         </div>
         <!-- 左侧区域结束 -->
    </div>
    <!-- 正文区域end -->
    
	<!-- 底部引用区域开始 -->
    <?php get_footer()?>
    <!-- 底部引用区域结束 -->
</body>
</html>