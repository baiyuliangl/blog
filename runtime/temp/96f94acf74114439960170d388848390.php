<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:75:"D:\wamp64\www\blog_all\public/../application/index\view\article\detail.html";i:1541041895;s:64:"D:\wamp64\www\blog_all\application\index\view\layout\layout.html";i:1540960761;s:64:"D:\wamp64\www\blog_all\application\index\view\layout\header.html";i:1541041478;s:62:"D:\wamp64\www\blog_all\application\index\view\layout\side.html";i:1541038138;s:64:"D:\wamp64\www\blog_all\application\index\view\layout\footer.html";i:1540960982;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
 <head> 
  <meta charset="UTF-8" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
  <meta http-equiv="Cache-Control" content="no-transform" /> 
  <meta http-equiv="Cache-Control" content="no-siteapp" /> 
  <title>lampol</title> 
  <meta name="description" content="网站描述" /> 
  <meta name="keywords" content="网站关键词" /> 
  <!--[if lt IE 9]>
<script src="/static/home/js/html5.js"></script>
<script src="/static/home/js/css3-mediaqueries.js"></script>
<![endif]--> 
  <link rel="stylesheet" id="crayon-font-mydream-css" href="/static/home/css/mydream.css" type="text/css" media="all" /> 
  <link rel="stylesheet" id="style-css" href="/static/home/css/style.css" type="text/css" media="all" /> 
  <link rel="stylesheet" id="swiper-css-css" href="/static/home/css/swiper.min.css" type="text/css" media="all" /> 
  <script type="text/javascript" src="/static/home/js/jquery.min.js"></script> 
  <script src="/static/home/js/swipe.jquery.min.js"></script> 
  <link rel='stylesheet' id='iconfont-css'  href='/static/home/css/font.css' type='text/css' media='all' />
<script type='text/javascript' src='/static/home/js/superfish.js'></script>
 </head> 
 <body> 
  <header id="masthead" class="site-header"> 
   <div id="fix-header"></div> 
   <div id="menu-box"> 
    <div id="main-menu"> 
     <hgroup class="logo-sites"> 
      <h1 class="site-title"> <a href="www.lampol-blog.com/"><img src="/static/home/images/logo.png" alt="lampol" /></a> </h1> 
     </hgroup> 
     <div id="sidr-close"> 
      <a href="#sidr-close" class="toggle-sidr-close">&times;</a> 
     </div> 
     <a href="#sidr-main" id="navigation-toggle" class="bars"><i class="iconfont icon-viewheadline"></i></a> 
     <div id="site-nav-wrap"> 
      <nav id="site-nav" class="main-nav"> 
       <div class="menu-container"> 
        <ul id="menu" class="down-menu nav-menu"> 
          <?php if(isset($cur)): ?>
         <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item"><a href="/"><i class="iconfont icon-home"></i>首页</a></li> 
         <?php else: ?>
         <li class="menu-item menu-item-type-custom menu-item-object-custom current_page_item"><a href="/"><i class="iconfont icon-home"></i>首页</a></li> 
         <?php endif; if(is_array($cat) || $cat instanceof \think\Collection || $cat instanceof \think\Paginator): $i = 0; $__LIST__ = $cat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if((isset($cid) && $vo['id']==$cid)): ?>
         <li class="menu-item menu-item-type-taxonomy menu-item-object-category current-menu-item menu-item-has-children"><a href="<?php echo url('/list',['cid'=>encrypt($vo['id'])]); ?>"><?php echo $vo['cat_name']; ?></a> </li> 
         <?php else: ?>
         <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children"><a href="<?php echo url('/list',['cid'=>encrypt($vo['id'])]); ?>"><?php echo $vo['cat_name']; ?></a> </li>
         <?php endif; endforeach; endif; else: echo "" ;endif; ?>
        </ul> 
       </div> 
      </nav> 
     </div> 
    </div> 
    <div class="clear"></div> 
   </div> 
  </header> 
  

﻿    <div class="clear"></div> 
   </div> 
   <div class="breadcrumb"> 
    <a class="crumbs" title="返回首页" href="<?php echo url('/'); ?>">返回首页</a>
   </div> 
   <div id="content"> 
    <div id="primary" class="single-area"> 
     <main id="main" class="site-main" role="main"> 
      <!-- 文章内容 --> 
      <article id="post-93" class="post-93 post type-post status-publish format-standard hentry category-web-technology tag-ssl tag-startssl tag-43"> 
       <header class="entry-header"> 
        <div class="single-meta"> 
         <span><i class="iconfont icon-calendartext"></i>&nbsp;<?php echo date('Y-m-d H:i:s',$article['created_at']); ?></span> 
         <span><i class="iconfont icon-chartbar"></i>&nbsp;<?php echo $article['views']; ?></span> 
         <span><a href="www.lampol-blog.com/93.html#comments"><i class="iconfont icon-messageprocessing"></i> 2</a></span> 
        </div> 
        <div class="clear"></div> 
        <h1 class="entry-title"><?php echo $article['title']; ?></h1> 
        <div class="single-tag">
         <i class="iconfont icon-tagmultiple"></i>&nbsp;标签：
         <a href="www.lampol-blog.com/tag/ssl" rel="tag"><?php echo $article['tag']; ?></a>&nbsp;&nbsp;
         <a href="www.lampol-blog.com/tag/startssl" rel="tag">StartSSL</a>&nbsp;&nbsp;
         <a href="www.lampol-blog.com/tag/%e8%af%81%e4%b9%a6" rel="tag">证书</a>
        </div> 
        <div class="clear"></div> 
       </header> 
       <div class="single-content">
            <?php echo $article['contents']; ?>
       </div> 
       <!-- 文章点赞分享 --> 
       <div class="clear"></div> 
       <div id="social"> 
        <div class="social-main"> 
         <span class="post-like"> <a href="javascript:;" data-action="ding" data-id="93" class="md_like "><i class="iconfont icon-thumbupoutline"></i>喜欢 <i class="count"> 0</i> </a> </span> 
         <span class="share-sd"> <span class="share-s"><a href="javascript:void(0)" id="share-s" title="分享"><i class="iconfont icon-sharevariant"></i>分享</a></span> 
          <div id="share"> 
           <ul class="bdsharebuttonbox"> 
            <li><a title="分享到QQ空间" class="iconfont icon-kongjian" data-cmd="qzone"></a></li> 
            <li><a title="分享到QQ好友" class="iconfont icon-qq0" data-cmd="sqq"></a></li> 
            <li><a title="分享到新浪微博" class="iconfont icon-sina" data-cmd="tsina"></a></li> 
            <li><a title="分享到人人网" class="iconfont icon-renren0" data-cmd="renren"></a></li> 
            <li><a title="分享到微信" class="iconfont icon-weixin0" data-cmd="weixin"></a></li> 
           </ul> 
          </div> </span> 
         <div class="clear"></div> 
        </div> 
       </div> 
      </article> 
      <div id="copyright"> 
       <img alt="" src="/static/home/images/nick.jpg" class="avatar avatar-72" width="72" height="72" /> 
       <ul class="spostinfo"> 
        <li>原文链接：<a target="_blank" rel="nofollow" href="<?php echo url('/detail',['aid'=>encrypt($article['id'])],'',true); ?>">原文链接</a></li>
        <li>版权声明：本站原创文章，于<?php echo date('Y-m-d H:i:s',$article['created_at']); ?>，由<span title="由skysmile发布" rel="author"><?php echo $article['author']; ?></span>发表。</li> 
        <li>转载请注明：<span rel="bookmark" title="本文固定链接 www.lampol-blog.com/93.html"><?php echo $article['title']; ?></span></li> 
       </ul> 
      </div> 
      <div id="related-img"> 
       <!--如果存在tag标签，列出tag相关文章 --> 
       <!-- 如果tag相关文章少于10篇，那么继续以分类作为相关因素列出相关文章 --> 
       <div class="r4"> 
        <div class="related-site"> 
         <figure class="related-site-img"> 
          <a href="www.lampol-blog.com/48.html"><img src="/static/home/images/demo.jpg" alt="Google Adsense 广告加载缓慢解决办法" /></a> 
         </figure> 
         <div class="related-title">
          <a href="www.lampol-blog.com/48.html">Google Adsense 广告加载缓慢解决办法</a>
         </div> 
        </div> 
       </div> 
       <div class="r4"> 
        <div class="related-site"> 
         <figure class="related-site-img"> 
          <a href="www.lampol-blog.com/12.html"><img src="/static/home/images/demo.jpg" alt="自定义字体图标" /></a> 
         </figure> 
         <div class="related-title">
          <a href="www.lampol-blog.com/12.html">自定义字体图标</a>
         </div> 
        </div> 
       </div> 
       <div class="clear"></div> 
      </div> 
      <!-- 上下文 --> 
      <nav class="nav-single"> 
       <a href="www.lampol-blog.com/91.html" rel="prev"><span class="meta-nav"><span class="post-nav"><i class="iconfont icon-chevronleft"></i> 旧一篇</span><br />申请免费的自己域名邮箱</span></a>
       <span class="meta-nav"><span class="post-nav">没有了<br /></span>已是最新文章</span> 
       <div class="clear"></div> 
      </nav> 
      <!-- 文章评论 --> 
      <!-- 引用 --> 
      <div id="comments" class="comments-area"> 
       <h2 class="comments-title"> 2 条留言&nbsp;&nbsp;访客：1 条&nbsp;&nbsp;博主：1 条 </h2> 
       <ol class="comment-list"> 
        <li class="comment even thread-even depth-1 parent" id="comment-34"> 
         <div id="div-comment-34" class="comment-body"> 
          <div class="comment-author vcard"> 
           <img alt="" src="/static/home/images/tx-2.jpg" class="avatar avatar-48" width="48" height="48" /> 
           <!--<cite class="fn">卡珊德拉</cite> <span class="says">:</span>--> 
           <strong> 卡珊德拉 </strong> 
           <span class="comment-meta commentmetadata"> <a href="www.lampol-blog.com/93.html#comment-34"></a><br /> <span class="comment-aux"> <span class="reply"><a rel="nofollow" class="comment-reply-link" href="www.lampol-blog.com/93.html?replytocom=34#respond" onclick="return addComment.moveForm( &quot;div-comment-34&quot;, &quot;34&quot;, &quot;respond&quot;, &quot;93&quot; )" aria-label="回复给卡珊德拉">回复</a></span> 2017年08月03日 下午4:50 <span class="floor"> &nbsp;沙发 </span> </span> </span> 
          </div> 
          <p>不知博主有没有听过它乱发证书的事情。。。某大数字安全公司旗下的 沃通 收购了 StartCom chrome 火狐都除名了 据说Let’s Encrypt 挺好的 有很多大佬站台</p> 
         </div> 
         <ul class="children"> 
          <li class="comment byuser comment-author-skysmile bypostauthor odd alt depth-2" id="comment-37"> 
           <div id="div-comment-37" class="comment-body"> 
            <div class="comment-author vcard"> 
             <img alt="" src="/static/home/images/tx-3.jpg" class="avatar avatar-48" width="48" height="48" /> 
             <!--<cite class="fn">skysmile</cite> <span class="says">:</span>--> 
             <strong> skysmile </strong> 
             <strong><font color="#0AB59B">博主</font></strong> 
             <span class="comment-meta commentmetadata"> <a href="www.lampol-blog.com/93.html#comment-37"></a><br /> <span class="comment-aux"> <span class="reply"><a rel="nofollow" class="comment-reply-link" href="www.lampol-blog.com/93.html?replytocom=37#respond" onclick="return addComment.moveForm( &quot;div-comment-37&quot;, &quot;37&quot;, &quot;respond&quot;, &quot;93&quot; )" aria-label="回复给skysmile">回复</a></span> 2017年08月03日 下午6:26 <span class="floor"> &nbsp;1层 </span> </span> </span> 
            </div> 
            <p><span class="at">@<a href="#comment-34">卡珊德拉</a></span> 我已经不用这个了，现在的是赛门铁克的</p> 
           </div> </li>
         </ul>
 </li>

       </ol>

       <div id="respond" class="comment-respond"> 
        <h3 id="reply-title" class="comment-reply-title">给我留言<small><a rel="nofollow" id="cancel-comment-reply-link" href="/93.html#respond" style="display:none;">取消回复</a></small></h3> 
        <form action="www.lampol-blog.com/wp-comments-post.php" method="post" id="commentform"> 
         <div id="comment-author-info"> 
          <p class="comment-form-author"> <input type="text" name="author" id="author" class="commenttext" value="" tabindex="1" /> <label for="author">昵称（必填）</label> </p> 
         </div> 
         <div class="clear"></div> 
         <p class="comment-tool"> 
		 <span class="smiley-box">
	评论内容
</span> </p> 
         <p class="comment-form-comment"><textarea id="comment" name="comment" rows="4" tabindex="4"></textarea></p> 
         <p class="form-submit"> <input id="submit" name="submit" type="submit" tabindex="5" value="提&nbsp;交" /> <input id="reset" name="reset" type="reset" tabindex="6" value="重&nbsp;写" /> <input type="hidden" name="comment_post_ID" value="93" id="comment_post_ID" /> <input type="hidden" name="comment_parent" id="comment_parent" value="0" /> </p> 
        </form> 

       </div> 
      </div> 
      <!-- #comments --> 
     </main> 
    </div> 
   <!-- 返回顶部 --> 
   <ul id="scroll"> 
    <li><a class="hidden-widget" href="javascript:hiddenwidget()" title="隐藏侧边栏"><i class="iconfont icon-windowclose"></i></a></li> 
    <li><a class="scroll-top" title="返回顶部"><i class="iconfont icon-chevronup"></i></a></li> 
    <li><a class="scroll-bottom" title="转到底部"><i class="iconfont icon-chevrondown"></i></a></li> 
   </ul> 
  </header>
 </body>
</html>

<!-- 右侧开始--> 
   <div id="sidebar" class="widget-area"> 
<!-- 右侧搜索框开始--> 
    <aside id="search-2" class="widget widget_search"> 
     <div id="searchbar"> 
      <form method="get" id="searchform" action="www.lampol-blog.com/"> 
       <input type="text" value="" name="s" id="s" placeholder="输入搜索内容" required="" /> 
       <button type="submit" id="searchsubmit">搜索</button> 
      </form> 
     </div> 
     <div class="clear"></div> 
    </aside> 
<!-- 右侧搜索框结束--> 
<!-- 右侧分类开始--> 
    <aside id="categories-2" class="widget widget_categories"> 
     <h3 class="widget-title"><i class="iconfont icon-viewgrid"></i>分类目录</h3> 
     <ul> 
      <?php if(is_array($cat) || $cat instanceof \think\Collection || $cat instanceof \think\Paginator): $i = 0; $__LIST__ = $cat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
      <li class="cat-item cat-item-47"><a href="<?php echo url('/list',['cid'=>encrypt($vo['id'])]); ?>"><?php echo $vo['cat_name']; ?></a> </li> 
      <?php endforeach; endif; else: echo "" ;endif; ?>
     </ul> 
     <div class="clear"></div> 
    </aside> 
  <!-- 右侧分类结束--> 

  <!-- 近期文章开始--> 
    <aside id="recent-posts-2" class="widget widget_recent_entries"> 
     <h3 class="widget-title"><i class="iconfont icon-viewgrid"></i>近期文章</h3> 
     <ul> 
      <?php if(is_array($new_article) || $new_article instanceof \think\Collection || $new_article instanceof \think\Paginator): $i = 0; $__LIST__ = $new_article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
      <li> <a href="<?php echo url('/detail',['aid'=>encrypt($vo['id'])]); ?>"><?php echo $vo['title']; ?></a> </li> 
      <?php endforeach; endif; else: echo "" ;endif; ?>
     </ul> 
     <div class="clear"></div> 
    </aside> 
<!-- 近期文章结束--> 
    <aside id="img_cat-2" class="widget img_cat"> 
     <h3 class="widget-title"><i class="iconfont icon-viewgrid"></i>最多评论</h3> 
     <div class="img_cat"> 
      <ul> 
       <div class="img-box"> 
        <div class="img-x2"> 
         <figure class="insets"> 
          <a href="www.lampol-blog.com/27.html"><img src="/static/home/images/demo.jpg" alt="MYDREAM主题 最新更新版本V1.8 2017-8-23更新" /></a> 
          <div class="img-title"> 
           <a href="www.lampol-blog.com/27.html" rel="bookmark">MYDREAM主题 最新更新版本V1.8 2017-8-23更新</a> 
          </div> 
         </figure> 
        </div> 
       </div> 
       <div class="img-box"> 
        <div class="img-x2"> 
         <figure class="insets"> 
          <a href="www.lampol-blog.com/100.html"><img src="/static/home/images/demo.jpg" alt="Wordpress插件之CKPlayer" /></a> 
          <div class="img-title"> 
           <a href="www.lampol-blog.com/100.html" rel="bookmark">WordPress插件之CKPlayer</a> 
          </div> 
         </figure> 
        </div> 
       </div> 
       <div class="img-box"> 
        <div class="img-x2"> 
         <figure class="insets"> 
          <a href="www.lampol-blog.com/167.html"><img src="/static/home/images/demo.jpg" alt="运用autoit写的系统补丁检测" /></a> 
          <div class="img-title"> 
           <a href="www.lampol-blog.com/167.html" rel="bookmark">运用autoit写的系统补丁检测</a> 
          </div> 
         </figure> 
        </div> 
       </div> 
       <div class="img-box"> 
        <div class="img-x2"> 
         <figure class="insets"> 
          <a href="www.lampol-blog.com/185.html"><img src="/static/home/images/demo.jpg" alt="MyDream主题使用教程" /></a> 
          <div class="img-title"> 
           <a href="www.lampol-blog.com/185.html" rel="bookmark">MyDream主题使用教程</a> 
          </div> 
         </figure> 
        </div> 
       </div> 
       <div class="clear"></div> 
      </ul> 
     </div> 
     <div class="clear"></div> 
    </aside> 

    <!-- 人们标签开始--> 
    <div class="sidebar-roll"> 
     <aside id="tag_cloud-2" class="widget tag_cloud"> 
      <h3 class="widget-title"><i class="iconfont icon-viewgrid"></i>热门标签</h3> 
      <div class="tagcloud"> 
       <?php if(is_array($hot_tag) || $hot_tag instanceof \think\Collection || $hot_tag instanceof \think\Paginator): $i = 0; $__LIST__ = $hot_tag;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
       <a href="javascript:;" class="tag-cloud-link tag-link-16 tag-link-position-2" style="color:#63e40e;font-size: 15px;;"><?php echo $vo; ?></a> 
       <?php endforeach; endif; else: echo "" ;endif; ?>
       <div class="clear"></div> 
      </div> 
      <div class="clear"></div> 
     </aside> 
    </div> 
  <!-- 热门标签结束--> 
   </div> 
   <div class="clear"></div> 
  </div> 

  <!-- 友情链接 --> 
  <div id="links"> 
   <ul> 
    <li id="linkcat-25" class="linkcat"><h2>博友</h2> 
     <ul class="xoxo blogroll"> 
      <span class="lx7"><span class="link-f"><a href="http://www.maninmusic.com" target="_blank">乐之随</a></span></span> 
      <span class="lx7"><span class="link-f"><a href="http://www.ichenkun.cn" rel="nofollow" target="_blank">个人网站</a></span></span> 
      <span class="lx7"><span class="link-f"><a href="https://www.lukedever.cn" target="_blank">Lukedever</a></span></span> 
     </ul> </li> 
    <span class="lx7"> <span class="link-f"> <li><a href="www.lampol-blog.com/links" target="_blank" title="全部链接">更多链接<i class="icon-li"></i></a></li> </span> </span> 
   </ul> 
   <div class="clear"></div> 
  </div> 
  <!-- 版权说明 --> 
  <footer id="footer"> 
   <div class="bottom-nav"> 
    <div class="menu-container"> 
     <ul id="menu" class="bottom-menu"> 
      <li id="menu-item-23" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23"><a href="www.lampol-blog.com/archives">文章归档</a></li> 
      <li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24"><a href="www.lampol-blog.com/sitemap">站点地图</a></li> 
      <li id="menu-item-65" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-65"><a href="www.lampol-blog.com/message">给我留言</a></li> 
      <li id="menu-item-66" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-66"><a href="www.lampol-blog.com/links">友情链接</a></li> 
     </ul> 
    </div> 
   </div> 
   <div id="contentinfo">
     Copyright &copy; 2007-2017 
    <a href="www.lampol-blog.com/" rel="home">lampol</a> All rights reserved. | Theme by 
    <a href="www.lampol-blog.com/27.html" title="lampol" target="_blank">Mydream</a> | 鲁ICP备11034536号 
   </div> 
  </footer> 
  <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        loop: true, /**循环**/
		autoplayDisableOnInteraction: false,
		direction: 'vertical',	/**切换方向**/	
		speed: 500,  /**幻灯片切换时间**/
		autoplay: 5000, /**设置，自动播放开启，并设置停留时间**/
        paginationClickable: true, /**导航可以点击**/
		effect: 'flip', /**切换效果**/	
    });
</script> 
 </body>
</html>