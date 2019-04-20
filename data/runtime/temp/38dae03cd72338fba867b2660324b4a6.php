<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:81:"D:\phpStudy\PHPTutorial\WWW\thinkcmf\public/themes/simpleboot3/portal\\index.html";i:1555339282;s:79:"D:\phpStudy\PHPTutorial\WWW\thinkcmf\public\themes\simpleboot3\public\head.html";i:1552830390;s:78:"D:\phpStudy\PHPTutorial\WWW\thinkcmf\public\themes\simpleboot3\public\nav.html";i:1554015425;s:88:"D:\phpStudy\PHPTutorial\WWW\thinkcmf\public\themes\simpleboot3\public\footer-bottom.html";i:1555204686;}*/ ?>
<!DOCTYPE html >
<html lang="en" style="overflow: hidden; height: 100%;">

<head>
	<title><?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?></title>
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
	<link type="text/css" rel="stylesheet" href="/static/yili/css/swiper-3.4.2.min.css">
	<script src="/static/yili/js/swiper-3.4.2.min.js"></script>
	<script src="/static/yili/js/template-web.js"></script>
	<style>
		.H_wrapper{
			min-width: 100%;
			max-width: 100%;
			position:relative;
		}

		.swiper-container-v {
			width: 100%;
		}

		.swiper-container-v img{
			height:100%;
			width:100%;
		}

		.swiper-container-h{
			margin:0 !important;
			height:100%;
		}

		.nest-slide{
			height:100% !important;
			width:100% !important;
		}

		.nest-slide img{
			height:100%;
			width:100%;
		}


		.slide-next{
			cursor:pointer;
			position:absolute;
			left:0;
			bottom:20px;
			width: 100%;
			z-index: 999;
			animation: myfirst 1s infinite linear;
			-webkit-animation: myfirst 1s infinite linear; /* Safari 与 Chrome */
		}
		.slide-next img{
			margin: 0 auto;
		}

		@keyframes myfirst
		{
			from{bottom:20px;}
			to{bottom:10px;}
		}

		@-webkit-keyframes myfirst  /* Safari 与 Chrome */
		{
			from{bottom:20px;}
			to{bottom:10px;}
		}


		.tpl-swiper1{
            color: #737373;
            font-size:16px;
		}

        .tpl-swiper1 .title{
            font-size:44px;
            position:absolute;
			top:0;
            left: 10%;
			opacity:0;
        }

        .tpl-swiper1 .content{
            margin:10px 0;
            line-height: 28px;
            position:absolute;
			top:0;
            left: 10%;
			opacity:0;
        }



	</style>
</head>

<body style="overflow: hidden; height: 100%;" class="fp-viewing-section-5">

	<div class="H0_wrapper">
		<div class="H_wrapper">
			<!--导航 s-->
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


			<!--导航 e-->

			<!--幻灯片 s-->
			<?php 
				$slide1 = [];
				$slide2 = [];
				if(request()->isMobile()){	   //mobile
					$slide1 = getSlide(2);
				    $slide2 = getSlide(4);		//嵌套
				} else {                       //pc
					$slide1 = getSlide(1);
					$slide2 = getSlide(3);	//嵌套
				}
			 ?>
			<div class="swiper-container swiper-container-v" >
				<div class="swiper-wrapper">

					<div class="swiper-slide">

						<div class="swiper-container swiper-container-h">
							<div class="swiper-wrapper">

								<?php if(is_array($slide2) || $slide2 instanceof \think\Collection || $slide2 instanceof \think\Paginator): $k = 0; $__LIST__ = $slide2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
									<div class="swiper-slide nest-slide">
										<a href="<?php echo $vo['url']; ?>">
											<img src="<?php echo cmf_get_image_url($vo['image']); ?>">
										</a>
									</div>
								<?php endforeach; endif; else: echo "" ;endif; ?>

							</div>

						</div>

					</div>

					<?php if(is_array($slide1) || $slide1 instanceof \think\Collection || $slide1 instanceof \think\Paginator): $k = 0; $__LIST__ = $slide1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
						<div class="swiper-slide"  data-title="<?php echo $vo['description']; ?>" data-content="<?php echo $vo['content']; ?>">
							<a href="<?php echo $vo['url']; ?>">
								<img class="slide-img swiper-lazy" data-src="<?php echo cmf_get_image_url($vo['image']); ?>" alt="">
							</a>
							<div class="swiper-lazy-preloader"></div>
						</div>
					<?php endforeach; endif; else: echo "" ;endif; ?>

					<div class="swiper-slide">
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
					</div>

				</div>

			</div>

			<div class="slide-next">
				<img src="/static/yili/images/icon042.png" alt="">
			</div>
			<!--幻灯片 e-->

		</div>
	</div>

	<script id="tpl-swiper1" type="text/html">
		<div class="tpl-swiper1">
			<h1 class="title">{{title}}</h1>
			<div class="content">{{@ content}}</div>
		</div>
	</script>


	<script>

		$(function(){
			var winWidh = $(window).width();
            var winHeight = $(window).height();
            var topHeigth = $('.H_header').height();			//头部高度
			var bottomHeight = $('.M_footer').height();			//底部高度
			//设置幻灯片容器高度
			$('.swiper-container-v').css({'height':winHeight - topHeigth,'margin-top':topHeigth});
			$('.swiper-container-v .swiper-slide:last-child').height(bottomHeight);



			//幻灯片
			var mySwiper= new Swiper ('.swiper-container-v', {
				direction: 'vertical',
                mousewheelControl : true,
                slidesPerView : 'auto',
                lazyLoading : true,
                onTransitionEnd: function(swiper){          //回调函数，过渡结束时触发
                    if(swiper.progress==1){         //对于swiper的progress属性，活动的slide在最左（上）边时为0，活动的slide在最右（下）边时为1，其他情况平分。
                        swiper.activeIndex = swiper.slides.length - 1
                    }
                },
                onSlideChangeEnd: function(swiper){

					var currentItem = swiper.slides[swiper.activeIndex],
                        title = $(currentItem).data('title'),
					    content = $(currentItem).data('content');

					//清除动画样式
					$.each(swiper.slides,function(i,e){
					    if($(e).find('.tpl-swiper1').length > 0){
							$(e).find('.tpl-swiper1 .title').css({top:'0',opacity:'0'});
							$(e).find('.tpl-swiper1 .content').css({top:'0',opacity:'0'});
						}
					});

					if($(currentItem).find('.tpl-swiper1').length > 0){
                        Animate1();
                    } else {
                        if(title && content){
                            var html = template('tpl-swiper1',{
                                title:title,
                                content:content,
                            });
                            currentItem.appendChild($(html)[0]);
                            Animate1();
                        }
                    }

                    function Animate1(){
                        $(currentItem).find('.tpl-swiper1 .title').animate({top:'8%',opacity:'1'},"slow",null,function(){
                            $(currentItem).find('.tpl-swiper1 .content').animate({top:'15%',opacity:'1'},"slow");
                        });
					}

                }
			});


			//嵌套
            var swiperV = new Swiper('.swiper-container-h', {
                effect : 'fade',
                loop : true,
                autoplay : 2000
            });


			//设置底部的显Z_zjyltit示
            $(".slide-next").click(function(){
                mySwiper.slideNext();
			});



		})



	</script>
</body>

</html>