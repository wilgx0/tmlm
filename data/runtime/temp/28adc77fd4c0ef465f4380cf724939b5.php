<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:79:"D:\phpStudy\PHPTutorial\WWW\thinkcmf\public/themes/simpleboot3/portal\list.html";i:1555146450;s:79:"D:\phpStudy\PHPTutorial\WWW\thinkcmf\public\themes\simpleboot3\public\head.html";i:1552830390;s:78:"D:\phpStudy\PHPTutorial\WWW\thinkcmf\public\themes\simpleboot3\public\nav.html";i:1554015425;s:80:"D:\phpStudy\PHPTutorial\WWW\thinkcmf\public\themes\simpleboot3\public\bread.html";i:1554027832;s:81:"D:\phpStudy\PHPTutorial\WWW\thinkcmf\public\themes\simpleboot3\public\footer.html";i:1554017417;s:88:"D:\phpStudy\PHPTutorial\WWW\thinkcmf\public\themes\simpleboot3\public\footer-bottom.html";i:1555204686;s:87:"D:\phpStudy\PHPTutorial\WWW\thinkcmf\public\themes\simpleboot3\public\footer-right.html";i:1554017331;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $category['name']; ?> <?php echo $category['seo_title']; ?> <?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?></title>
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

    <div class="Q_qyxw">
        <span><?php echo $category['name']; ?></span>
    </div>
    <!--文章列表-->
    <div class="Q_qyxwcon">
        <ul>
            <?php 
                $limit = 5;
                $articlesList = getArticlesList(['limit'=>$limit,'order'=>'post.create_time DESC','category_ids'=>$category->id]);
                $total = getArticlescount(['category_ids'=>$category->id]);
                $articlesCount = count($articlesList['articles']);
             if(is_array($articlesList['articles']) || $articlesList['articles'] instanceof \think\Collection || $articlesList['articles'] instanceof \think\Paginator): $i = 0; $__LIST__ = $articlesList['articles'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <li>
                    <div class="Q_qyxwimg">
                        <a href="<?php echo cmf_url('portal/Article/index',array('id'=>$item['id'],'cid'=>$category['id'])) .'?categoryId='. request()->get('categoryId') ?>">
                            <img src="<?php echo empty($item['thumbnail']) ? '/static/yili/images/no-img.png' : '/upload/'.$item['thumbnail']; ?>">
                        </a>
                    </div>

                    <div class="Q_qyxwr" style="width: 1040px;">
                        <h1>
                            <a href="<?php echo cmf_url('portal/Article/index',array('id'=>$item['id'],'cid'=>$category['id'])) .'?categoryId='. request()->get('categoryId') ?>"><?php echo $item['post_title']; ?></a>
                        </h1>
                        <span><?php echo date('Y-m-d',$item['published_time']); ?> 原文出自：
                            <a href=""><?php echo $item['post_source']; ?></a>
                        </span>
                        <p><?php echo $item['post_excerpt']; ?></p>
                        <a href="<?php echo cmf_url('portal/Article/index',array('id'=>$item['id'],'cid'=>$category['id'])) .'?categoryId='. request()->get('categoryId') ?>"
                           class="H_ldrmore0">查看详情</a>
                    </div>

                    <div class="Q_qyxwrwap">
                        <h1>
                            <a href="<?php echo cmf_url('portal/Article/index',array('id'=>$item['id'],'cid'=>$category['id'])) .'?categoryId='. request()->get('categoryId') ?>">
                                <?php echo $item['post_title']; ?>
                            </a>
                        </h1>
                        <span><?php echo date('yy-m-d',$item['published_time']); ?> 原文出自：
                            <a href=""><?php echo $item['post_source']; ?></a>
                        </span>
                        <p><?php echo $item['post_excerpt']; ?></p>
                        <a href="<?php echo cmf_url('portal/Article/index',array('id'=>$item['id'],'cid'=>$category['id'])) .'?categoryId='. request()->get('categoryId') ?>"
                           class="H_ldrmore0">查看详情
                        </a>
                    </div>
                </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>

        <?php if($articlesCount > 0): ?>
            <div class="Q_qyxwmore" id="more1">
                <i class="Q_qyxwline">&nbsp;</i>
                <div class="Q_qyxwmorecon">
                    <p>
                        更多新闻<i id="nextPage" onclick="showMore(&quot;2&quot;);"></i>
                        还有<b id="remain"><?php echo ($total - $limit < 0 ? 0 : $total - $limit); ?></b>篇
                    </p>
                </div>
            </div>

            <div class="Q_qyxwmorewap" id="more2">
                <p class="H_ldrmore5" onclick="showMore(&quot;2&quot;);">加载更多</p>
            </div>
        <?php endif; ?>

    </div>

    <script type="text/javascript">

        var cid = "<?php echo $category['id']; ?>";
        var categoryId = "<?php echo request()->get('categoryId') ?>";

        console.log(cid,categoryId);
        function showMore(nextPage) {
            $.ajax({
                url: "<?php echo url('portal/List/getArticleList');?>",
                type: "POST",
                data: {
                    categoryId: "<?php echo $category->id; ?>",
                    pageNumber: nextPage
                },
                dataType: "json", //返回json格式的数据
                async: true,
                success: function (data) {

                    //处理封面图片的路径
                    function handleImg(imgStr){

                        return imgStr == ''?'/static/yili/images/no-img.png':'/upload/'+imgStr;
                    }
                    if(!(data.code && data.code==1)){
                        console.log("数据获取失败");
                        return false;
                    }


                    //计算剩余文章的数量
                    data = data.data;
                    if(!data.page.list.length > 0){
                        console.log("没有更多数据");
                        return false;
                    }
                    //console.log(data);
                    var calculatePage = data.page
                    var remain = calculatePage.total - (calculatePage.pageNum-1) * calculatePage.pageSize;
                    console.log(remain);
                    //先遍历nextPage的数据列表，添加到more1的上面
                    var page = data.page;
                    var html = "";
                    var len = page.list.length;
                    var description = '';
                    for (var i = 0; i < len; i++) {
                        if (page.list[i].description == null) {
                            var body = page.list[i].body;
                           // description = delHtmlTag(body);
                            description = body;
                        }
                        html += '<ul>';
                        html += '<li><div class="Q_qyxwimg"><a href="/portal/Article/index/id/'
                            + page.list[i].id + "/cid/" + cid + ".html?categoryId="+ categoryId
                            + '"><img src="' + handleImg(page.list[i].imageUrl) + '"/></a></div>';
                        html += '<div class="Q_qyxwr">';
                        html += '<h1><a href="/portal/Article/index/id/'
                            + page.list[i].id + "/cid/" + cid + ".html?categoryId="+ categoryId
                            + '">'
                            + page.list[i].title + '</a></h1>';
                        html += '<span>'
                            + page.list[i].createdAt
                            + '&nbsp;&nbsp;原文出自：'
                            + page.list[i].author + '</span>';
                        html += '<p>' + description + '</p>';
                        html += '<a href="/portal/Article/index/id/'
                            + page.list[i].id + "/cid/" + cid + ".html?categoryId="+ categoryId
                            + '" class="H_ldrmore0">查看详情</a>';
                        html += '</div>';
                        html += '<div class="Q_qyxwrwap">';
                        html += '<h1><a href="/portal/Article/index/id/'
                            + page.list[i].id + "/cid/" + cid + ".html?categoryId="+ categoryId
                            + '">'
                            + page.list[i].title + '</a></h1>';
                        html += '<span>' + page.list[i].createdAt
                            + '&nbsp;&nbsp;原文出自：'
                            + page.list[i].author + '</span>';
                        html += '<p>' + description + '</p>';
                        html += '<a href="/portal/Article/index/id/'
                            + page.list[i].id+ "/cid/" + cid + ".html?categoryId="+ categoryId
                            + '" class="H_ldrmore0">查看详情</a>';
                        html += '</div></li>';
                    }
                    html += '</ul>';

                    $("#more1").before(html);
                    //如果当前的页是最后一页，隐藏显示更多
                    if (page.isLastPage) {
                        $("#more1").hide();
                        $("#more2").hide();
                    } else {
                        //如果当前的页不是最后一页，动态修改showMore的nextPage值，和剩余的篇数值
                        $("#nextPage").attr("onclick",
                            "showMore(" + page.nextPage + ");")
                            .next().html(remain);
                    }
                },


                error: function () {
                    alert("error...");
                }
            });
            setTimeout(function () {
                //企业新闻
                var qyxwwidth = $(".Q_qyxwcon ul li .Q_qyxwimg").width();
                $(".Q_qyxwr").width(
                    $(".Q_qyxwcon ul li").width() - qyxwwidth - 10);
            }, 1000);
        }
        function delHtmlTag(str) {
            return str.replace(/<[^>]+>/g, "");//去掉所有的html标记
        }
    </script>
    <!-- 内容 结束-->

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
        <span>
            © 2010 YILI.COM INC. ALLRIGHTS RESERVED. 内蒙古伊利实业集团股份有限公司版权所有 蒙ICP备09003253号-2
        </span>
    </div>

    <div class="H_footer F_footer0">
        <div class="H_footercon">
            <ul>
                <li>
                    <span>
                        <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=1">关于我们</a>
                    </span>

                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=29">走进伊利</a>
                    </p>

                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=9">伊利品质</a>
                    </p>
                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=36">企业文化</a>
                    </p>
                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=39">企业公民</a>
                    </p>
                </li>

                <li>
                    <span>
                        <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=2">新闻中心</a>
                    </span>

                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=14">企业新闻</a>
                    </p>
                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/videos/list?categoryId=15">媒体视频</a>
                    </p>
                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=16">精彩合作</a>
                    </p>
                </li>
                <li>
                    <span>
                        <a href="http://www.yili.com/cms/rest/reception/products/list?categoryId=3">品牌产品</a>
                    </span>

                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=23">品牌理念</a>
                    </p>
                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/products/list?categoryId=24">液态奶</a>
                    </p>
                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/products/list?categoryId=26">奶粉</a>
                    </p>
                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/products/list?categoryId=27">酸奶</a>
                    </p>
                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/products/list?categoryId=25">冷饮</a>
                    </p>
                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/products/list?categoryId=900">奶酪</a>
                    </p>
                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=28">乳制品的营养</a>
                    </p>
                </li>
                <li>
                    <span>
                        <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=4">伊利创新</a>
                    </span>

                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=13">研发创新</a>
                    </p>
                </li>
                <li>
                    <span>
                        <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=5">投资者关系</a>
                    </span>

                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/files/list?categoryId=101">公司公告</a>
                    </p>

                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/files/list?categoryId=102">公司治理</a>
                    </p>

                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=103">公司基本信息</a>
                    </p>

                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=108">投资者服务</a>
                    </p>

                </li>
                <li>
                    <span>
                        <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=6">加入伊利</a>
                    </span>

                    <p>
                        <a href="http://yili.hotjob.cn/wt/yili/web/index/social" target="_blank">社会招聘</a>
                    </p>

                    <p>
                        <a href="http://yili.hotjob.cn/wt/yili/web/index/campus" target="_blank">校园招聘</a>
                    </p>

                    <p>
                        <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=34">伊人风采</a>
                    </p>
                </li>
                <li>

                    <span>
                        <a href="http://www.yili.com/cms/rest/reception/articles/list?categoryId=7">服务中心</a>
                    </span>


                </li>
            </ul>

            <div class="H0_bottom">

                <div class="H0_bottomerweim">
                    <img src="/static/yili/images/sy011.png">
                </div>

                <a href="http://weibo.com/u/5236823068?is_hot=1" target="_blank" class="H0_csina">
                    <img src="/static/yili/images/icon039.png">
                </a>

                <a href="javascript:;" class="H0_cwechat">
                    <img src="/static/yili/images/icon038.png">
                </a>

            </div>
        </div>

        <div class="H_footerbot">
            <div class="H_footerbotcon">
                <p>
                    <a href=""></a>
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