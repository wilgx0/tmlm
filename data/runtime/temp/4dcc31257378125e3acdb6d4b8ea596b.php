<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:79:"D:\phpStudy\PHPTutorial\WWW\thinkcmf\public/themes/simpleboot3/portal\page.html";i:1552835222;s:79:"D:\phpStudy\PHPTutorial\WWW\thinkcmf\public\themes\simpleboot3\public\head.html";i:1552830390;s:78:"D:\phpStudy\PHPTutorial\WWW\thinkcmf\public\themes\simpleboot3\public\nav.html";i:1554015425;s:80:"D:\phpStudy\PHPTutorial\WWW\thinkcmf\public\themes\simpleboot3\public\bread.html";i:1554027832;s:81:"D:\phpStudy\PHPTutorial\WWW\thinkcmf\public\themes\simpleboot3\public\footer.html";i:1554017417;s:88:"D:\phpStudy\PHPTutorial\WWW\thinkcmf\public\themes\simpleboot3\public\footer-bottom.html";i:1554214175;s:87:"D:\phpStudy\PHPTutorial\WWW\thinkcmf\public\themes\simpleboot3\public\footer-right.html";i:1554017331;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $page['post_title']; ?></title>
    <!--head s-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="msapplication-tap-highlight" content="no">
<meta name="renderer" content="webkit">


<meta name="keywords" content="<?php echo (isset($site_info['site_seo_keywords']) && ($site_info['site_seo_keywords'] !== '')?$site_info['site_seo_keywords']:''); ?>" />
<meta name="description" content="<?php echo (isset($site_info['site_seo_description']) && ($site_info['site_seo_description'] !== '')?$site_info['site_seo_description']:''); ?>">


<link rel="shortcut icon" href="/static/yili/images/favicon.ico">
<link type="text/css" rel="stylesheet" href="/static/yili/css/style.css">
<link type="text/css" rel="stylesheet" href="/static/yili/css/jquery.mCustomScrollbar.css">

<link type="text/css" rel="stylesheet" href="/static/yili/css/jquery.fullpage.css">
<link rel="stylesheet" href="/static/yili/css/share_style0_16.css">

<script>
    var STATIC = "/static";
</script>

<script async="" src="/static/yili/js/analytics.js"></script>
<script src="/static/yili/js/hm.js"></script>
<script async="" src="/static/yili/js/gtm.js"></script>

<script>
    var static_path = "/cms/resources/reception/";
    var video_path = "http://yiliimg.ttge.com/upload/";
    var categoryId = '1' || 0;
</script>
<script type="text/javascript" src="/static/yili/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/static/yili/js/jquery.mCustomScrollbar.js"></script>
<script src="/static/yili/js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="/static/yili/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/static/yili/js/myfocus.js"></script>
<script type="text/javascript" src="/static/yili/js/common.js"></script>
<script src="/static/yili/js/share.js"></script>
<style>
    .main{
        width:100%;
       clear:both;
    }
</style>
    <!--head e-->

    <style>
        .page-content img{
            width:100% !important;
        }

    </style>
</head>


<body>

    <div class="H_wrapper">
        <div class="H_header">
    <a class="logowap" href="" >
        <img class="logo" src="/static/yili/images/logo.png">
    </a>
    <?php 
        $nav = getNav();

     ?>

    <ul class="H_menulist" id="H_menulist">
        <?php if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(empty($vo['children'])): ?>
                <li <?php echo input('categoryId',1)== $vo['id'] || isSubCategory($vo['id'],input('categoryId',1)) ? 'class="active"':'' ?> ><a href="<?php echo $vo['href']?(handleNavUrl($vo['href']).'?categoryId='.$vo['id']):'javascript:;'; ?>" ><?php echo $vo['name']; ?></a></li>
            <?php else: ?>
                <li <?php echo input('categoryId',1)== $vo['id'] || isSubCategory($vo['id'],input('categoryId',1)) ? 'class="active"':'' ?> >
                    <a href="<?php echo $vo['href']?(handleNavUrl($vo['href']).'?categoryId='.$vo['id']):'javascript:;'; ?>" ><?php echo $vo['name']; ?></a>
                    <div class="H_menucon01 H_menucon" style="width: 120px; background: url(/static/yili/images/nav-top.png) center top no-repeat; display: none;">
                        <div class="H_menuconleft">
                            <ul>
                                <?php if(is_array($vo['children']) || $vo['children'] instanceof \think\Collection || $vo['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vovo): $mod = ($i % 2 );++$i;?>
                                    <li class="H_menuconleft0<?php echo $i; ?>">
                                        <a href="<?php echo $vovo['href']?(handleNavUrl($vovo['href']).'?categoryId='.$vovo['id']):'javascript:;'; ?>" ><?php echo $vovo['name']; ?></a>
                                        <?php if(!empty($vovo['children'])): ?>
                                            <div class="H_menuconright" style="display: none;">
                                                <?php if(is_array($vovo['children']) || $vovo['children'] instanceof \think\Collection || $vovo['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vovo['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vovovo): $mod = ($i % 2 );++$i;?>
                                                    <p><a href="<?php echo $vovovo['href']?(handleNavUrl($vovovo['href']).'?categoryId='.$vovovo['id']):'javascript:;'; ?>" ><?php echo $vovovo['name']; ?></a></p>
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </div>
                                        <?php endif; ?>
                                    </li>

                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>
                </li>
            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
    </ul>



    <div class="header_right">
        <div class="H_shop">
            <a href="https://yili.tmall.com/shop/view_shop.htm?spm=a1z10.3-b.w5001-13187320225.3.KsXCrp&amp;scene=taobao_shop" target="_blank"><i></i>
                在线商城</a>
        </div>
        <div class="H_search">
            <div class="H_search_active">
                <div class="H_search_activecon">
                    <input class="qsrnr" type="search" id="search" placeholder="请输入搜索的内容"> <input type="button" class="qsrgo" onclick="goSearch();">
                </div>
            </div>
        </div>
        <div class="H_menu"></div>
    </div>
    <div class="H_menuwap">
        <ul>
            <?php if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li class="H_menunoi"><a href="<?php echo $vo['href']?(handleNavUrl($vo['href']).'?categoryId='.$vo['id']):'javascript:;'; ?>"><?php echo $vo['name']; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>


<script type="text/javascript">
    function goSearch() {
        var searchStr = $("#search").val();
        if (searchStr == null || searchStr == "") {
            return false;
        }
        window.location.href = "/cms/rest/reception/articles/search?title="
            + encodeURI(encodeURI(searchStr));
    }
</script>
<script>
    //去掉最后一个导航的下拉菜单
    $(".H_menulist li").last().children(".H_menucon02").remove();
</script>



        <?php 
    $subMenu = getSubNav(request()->get('categoryId'));
 ?>

<div class="Z_zjyltit">
    <p>
        <?php echo getBreadTitle(request()->get('categoryId')); if(count($subMenu) > 0): ?>
            <span>
                <?php if(is_array($subMenu) || $subMenu instanceof \think\Collection || $subMenu instanceof \think\Paginator): $i = 0; $__LIST__ = $subMenu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="<?php echo $vo['href']?(handleNavUrl($vo['href']).'?categoryId='.$vo['id']):'javascript:;'; ?>"
                       <?php echo input('categoryId',1)== $vo['id'] || isSubCategory($vo['id'],input('categoryId',1)) ? 'class="active"':'' ?> >
                        <?php echo $vo['name']; ?></a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </span>
        <?php endif; ?>
    </p>
</div>


        <div class="main">
            <div class="page-content">
                <?php echo (isset($page['post_content']) && ($page['post_content'] !== '')?$page['post_content']:''); ?>
            </div>
        </div>
    </div>
    
<div class="M_footer">
    <div class="H_footerpad F_footer0">
        <p class="H_footerp1">
            <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=1">关于我们</a>
            <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=2">新闻中心</a>
            <a href="http://www.yili.com/cms/rest/reception/products/list?categoryId=3">品牌产品</a>
            <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=4">伊利创新</a>
            <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=5">投资者关系</a>
            <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=6">加入伊利</a>
            <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=7">服务中心</a>
        </p>
        <p class="H_footerp0">
            <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=1">关于我们</a>
            <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=2">新闻中心</a>
            <a href="http://www.yili.com/cms/rest/reception/products/list?categoryId=3">品牌产品</a>
            <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=7">服务中心</a>
        </p>
        <span>© 2010 YILI.COM INC. ALLRIGHTS RESERVED. 内蒙古伊利实业集团股份有限公司版权所有 蒙ICP备09003253号-2</span>
    </div>
    <div class="H_footer F_footer0">
        <div class="H_footercon">
            <ul>
                <li><span><a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=1" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;C01_所有页面&#39;, &#39;C01A12_底部一级导航&#39;, &#39;C01A12L01_所有页面_底部一级导航_关于我们按钮&#39;);">关于我们</a></span>
                    <!--/////////////-->
                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=29" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;C01_所有页面&#39;, &#39;C01A13_底部关于我们二级导航&#39;, &#39;C01A13L01_所有页面_底部关于我们二级导航_走进伊利按钮&#39;);">走进伊利</a>
                    </p>
                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=9" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;C01_所有页面&#39;, &#39;C01A13_底部关于我们二级导航&#39;, &#39;C01A13L02_所有页面_底部关于我们二级导航_伊利品质按钮&#39;);">伊利品质</a>
                    </p>
                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=36" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;C01_所有页面&#39;, &#39;C01A13_底部关于我们二级导航&#39;, &#39;C01A13L03_所有页面_底部关于我们二级导航_企业文化按钮&#39;);">企业文化</a>
                    </p>
                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=39" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;C01_所有页面&#39;, &#39;C01A13_底部关于我们二级导航&#39;, &#39;C01A13L04_所有页面_底部关于我们二级导航_企业公民按钮&#39;);">企业公民</a>
                    </p>
                </li>
                <li><span><a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=2" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;C01_所有页面&#39;, &#39;C01A12_底部一级导航&#39;, &#39;C01A12L02_所有页面_底部一级导航_新闻中心按钮&#39;);">新闻中心</a></span>
                    <!--/////////////-->
                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=14" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;C01_所有页面&#39;, &#39;C01A14_底部新闻中心二级导航&#39;, &#39;C01A14L01_所有页面_底部新闻中心二级导航_企业新闻按钮&#39;);">企业新闻</a>
                    </p>
                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/videos/list?categoryId=15" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;C01_所有页面&#39;, &#39;C01A14_底部新闻中心二级导航&#39;, &#39;C01A14L02_所有页面_底部新闻中心二级导航_媒体视频按钮&#39;);">媒体视频</a>
                    </p>
                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=16" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;C01_所有页面&#39;, &#39;C01A14_底部新闻中心二级导航&#39;, &#39;C01A14L03_所有页面_底部新闻中心二级导航_精彩合作按钮&#39;);">精彩合作</a>
                    </p>
                </li>
                <li><span><a href="http://www.yili.com/cms/rest/reception/products/list?categoryId=3" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;C01_所有页面&#39;, &#39;C01A12_底部一级导航&#39;, &#39;C01A12L03_所有页面_底部一级导航_品牌产品按钮&#39;);">品牌产品</a></span>
                    <!--/////////////-->
                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=23" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;C01_所有页面&#39;, &#39;C01A15_底部品牌产品二级导航&#39;, &#39;C01A15L01_所有页面_底部品牌产品二级导航_品牌理念按钮&#39;);">品牌理念</a>
                    </p>
                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/products/list?categoryId=24" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;C01_所有页面&#39;, &#39;C01A15_底部品牌产品二级导航&#39;, &#39;C01A15L02_所有页面_底部品牌产品二级导航_液态奶按钮&#39;);">液态奶</a>
                    </p>
                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/products/list?categoryId=26" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;C01_所有页面&#39;, &#39;C01A15_底部品牌产品二级导航&#39;, &#39;C01A15L03_所有页面_底部品牌产品二级导航_奶粉按钮&#39;);">奶粉</a>
                    </p>
                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/products/list?categoryId=27" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;C01_所有页面&#39;, &#39;C01A15_底部品牌产品二级导航&#39;, &#39;C01A15L04_所有页面_底部品牌产品二级导航_酸奶按钮&#39;);">酸奶</a>
                    </p>
                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/products/list?categoryId=25" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;C01_所有页面&#39;, &#39;C01A15_底部品牌产品二级导航&#39;, &#39;C01A15L05_所有页面_底部品牌产品二级导航_冷饮按钮&#39;);">冷饮</a>
                    </p>
                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/products/list?categoryId=900" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;C01_所有页面&#39;, &#39;C01A15_底部品牌产品二级导航&#39;, &#39;C01A15L06_所有页面_底部品牌产品二级导航_奶酪按钮&#39;);">奶酪</a>
                    </p>
                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=28" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;C01_所有页面&#39;, &#39;C01A15_底部品牌产品二级导航&#39;, &#39;C01A15L07_所有页面_底部品牌产品二级导航_乳制品的营养按钮&#39;);">乳制品的营养</a>
                    </p>
                </li>
                <li><span><a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=4" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;C01_所有页面&#39;, &#39;C01A12_底部一级导航&#39;, &#39;C01A12L04_所有页面_底部一级导航_伊利创新按钮&#39;);">伊利创新</a></span>
                    <!--/////////////-->
                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=13" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;C01_所有页面&#39;, &#39;C01A16_底部伊利创新二级导航&#39;, &#39;C01A16L01_所有页面_底部伊利创新二级导航_研发创新按钮&#39;);">研发创新</a>
                    </p>
                </li>
                <li><span><a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=5" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;C01_所有页面&#39;, &#39;C01A12_底部一级导航&#39;, &#39;C01A12L05_所有页面_底部一级导航_投资者关系按钮&#39;);">投资者关系</a></span>
                    <!--/////////////-->
                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/files/list?categoryId=101" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;C01_所有页面&#39;, &#39;C01A17_底部投资者关系二级导航&#39;, &#39;C01A17L01_所有页面_底部投资者关系二级导航_公司公告按钮&#39;);">公司公告</a>
                    </p>
                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/files/list?categoryId=102" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;C01_所有页面&#39;, &#39;C01A17_底部投资者关系二级导航&#39;, &#39;C01A17L02_所有页面_底部投资者关系二级导航_公司治理按钮&#39;);">公司治理</a>
                    </p>
                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=103" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;C01_所有页面&#39;, &#39;C01A17_底部投资者关系二级导航&#39;, &#39;C01A17L03_所有页面_底部投资者关系二级导航_公司基本信息按钮&#39;);">公司基本信息</a>
                    </p>
                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=108" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;C01_所有页面&#39;, &#39;C01A17_底部投资者关系二级导航&#39;, &#39;C01A17L04_所有页面_底部投资者关系二级导航_投资者服务按钮&#39;);">投资者服务</a>
                    </p>
                </li>
                <li><span><a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=6" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;C01_所有页面&#39;, &#39;C01A12_底部一级导航&#39;, &#39;C01A12L06_所有页面_底部一级导航_加入伊利按钮&#39;);">加入伊利</a></span>
                    <!--/////////////-->
                    <p>
                        <a href="http://yili.hotjob.cn/wt/yili/web/index/social" target="_blank" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;C01_所有页面&#39;, &#39;C01A18_底部加入伊利二级导航&#39;, &#39;C01A18L01_所有页面_底部加入伊利二级导航_社会招聘按钮&#39;);">社会招聘</a>
                    </p>
                    <p>
                        <a href="http://yili.hotjob.cn/wt/yili/web/index/campus" target="_blank" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;C01_所有页面&#39;, &#39;C01A18_底部加入伊利二级导航&#39;, &#39;C01A18L02_所有页面_底部加入伊利二级导航_校园招聘按钮&#39;);">校园招聘</a>
                    </p>
                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=34" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;C01_所有页面&#39;, &#39;C01A18_底部加入伊利二级导航&#39;, &#39;C01A18L03_所有页面_底部加入伊利二级导航_伊人风采按钮&#39;);">伊人风采</a>
                    </p>
                </li>
                <li><span><a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=7" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;C01_所有页面&#39;, &#39;C01A12_底部一级导航&#39;, &#39;C01A12L07_所有页面_底部一级导航_服务中心按钮&#39;);">服务中心</a></span>
                    <!--/////////////-->
                </li>
            </ul>
            <!---->
            <div class="H0_bottom">
                <div class="H0_bottomerweim">
                    <img src="/static/yili/images/sy011.png">
                </div>
                <a href="http://weibo.com/u/5236823068?is_hot=1" target="_blank" class="H0_csina" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;C01_所有页面&#39;, &#39;C01A19_底部社交媒体按钮&#39;, &#39;C01A19L02_所有页面_底部新浪微博按钮_新浪微博&#39;);"><img
                        src="/static/yili/images/icon039.png"></a> <a href="javascript:;" class="H0_cwechat" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;C01_所有页面&#39;, &#39;C01A19_底部社交媒体按钮&#39;, &#39;C01A19L01_所有页面_底部社交媒体按钮_微信&#39;);"><img
                    src="/static/yili/images/icon038.png"></a>
            </div>
        </div>
        <div class="H_footerbot">
            <div class="H_footerbotcon">
                <p>
                    <a href="" ></a>
                    <span>
                        <?php if(!(empty($site_info['site_icp']) || (($site_info['site_icp'] instanceof \think\Collection || $site_info['site_icp'] instanceof \think\Paginator ) && $site_info['site_icp']->isEmpty()))): ?>
                            <a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo $site_info['site_icp']; ?></a>
                            <?php else: ?>
                            请在后台设置"网站信息"设置"ICP备"
                        <?php endif; if(!(empty($site_info['site_gwa']) || (($site_info['site_gwa'] instanceof \think\Collection || $site_info['site_gwa'] instanceof \think\Paginator ) && $site_info['site_gwa']->isEmpty()))): ?>
                            <img src="/themes/simpleboot3/public/assets/images/ghs.png">
                            <a href="http://beian.gov.cn/" target="_blank"><?php echo $site_info['site_gwa']; ?></a>
                            <?php else: ?>
                            请在后台设置"网站信息"设置"公网安备"
                        <?php endif; ?>
                    </span>
                </p>
            </div>
        </div>
    </div>
</div>
<!--右侧分享-->
<div class="H_xuanfu">
    <span class="H_share">
        <div class="bdsharebuttonbox shareSide bdshare-button-style0-16" data-bd-bind="1551705296625">
            <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=1#" class="bds_weixin" id="weixinSide" data-cmd="weixin"
               title="分享到微信"></a>
            <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=1#" class="popup_sqq"
               id="qqSide" data-cmd="sqq" title="分享到QQ好友"></a>
            <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=1#"
               class="bds_tsina" id="sinaSide" data-cmd="tsina" title="分享到新浪微博"></a>
        </div>
    </span>
    <a href="javascript:;" class="H_top" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;C01_所有页面&#39;, &#39;C01A21_右侧导航按钮&#39;, &#39;C01A21L04_所有页面_右侧导航按钮_TOP&#39;);"></a>
</div>
<!--右侧分享-->





</body>


</html>