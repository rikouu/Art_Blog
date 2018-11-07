# 唯品秀博客 - Wordpress主题

# https://www.weipxiu.com

> 一款基于jquery2.1.4开发的wordpress主题2.0版

> 主题介绍：https://www.weipxiu.com/?cat=10

## 使用方式

``` bash
# 步骤

1、本项目采用gulp自动化构建，可通过git克隆到本地，然后运行npm install安装依赖，接着运行gulp即可压缩打包整个项目，
   如不需要打包压缩代码等一系列工具功能可直接下载即可，然后找到项目文件的src目录，里面即是项目主题源码

2、将主题文件放在：/htdocs/wp-content/themes/目录下

3、在wordpress后台安装WP-PageNavi插件

4、删除首页index.php中的邮箱订阅php代码(需要借助插件配置才可以使用的，当然，你也可以折腾，插件名称：WordPress Mailer)

5、找到主题js文件下的index.js和javascript.js文件，改变if判断上的网址，设置为自己的域名地址

6、如果你的网站设置了https头，那么你应该将主题文件php模板页所有链接http改为https，否则可能报错找不到文件

7、在wordpress后台新建分类目录，新建后将鼠标放在分类名称上，在浏览器左下角出现链接，其中有个id=xx，
将这个id设置替换给主题文件里的category-x的x，重新上传修改过名字的文件，如有其它问题，欢迎打扰

8、文字枯燥还是不知道说的啥意思？亲自录制的教程视频：链接：https://pan.baidu.com/s/19wibJjeagvLRFOuUV2GvEQ 密码：6u6c

9、如果喜欢，请多多打赏。

```
<img src="https://raw.githubusercontent.com/weipxiu/weipxiu/master/src/images/zhiwei.png">

<h2>备注说明</h2>

> 1、wordpress主题制作有特别要求，例如主题根目录必须存在header.php、index.php、footer.php、style.css，否则是不认，无法加载的。因此不用觉得某些文件摆放不合理，存在必定有意义

> 2、为了更佳浏览效果，该主题对IE10及其以下浏览器作了屏蔽跳转

> 3、基于css文件作了根据终端分割，所以你会看到主题根目录下有三个css文件，有利有弊，不做过多评论

> 4、源码开放供大家使用并修改，但在使用过程中底部请保留"唯品秀"版权说明，
  即：在footer.php源码中请不要去掉：<p>本站主题由<a href="https://www.weipxiu.com/" class="highlight">WEIPXIU.COM</a>免费提供</p>

<!-- 
<h2>使用当前主题网站</h2>

>不完全统计

> 程平博客  https://www.chenii.com -->


