$(function(){
	/*导航*/
	var logoH='';
	logoH +='<li>';
	logoH	+='<a href="javascript:;" id="logo">';
	logoH	+='<img class="logo" src="/static/yili/images/logo.png" />';
	logoH	+='</a>';
	logoH	+='</li>';
	$('#H_menulist').children('li').eq(3).after(logoH);
	$('#logo').click(function(){
		"ga('send', 'event', 'C01_所有页面', 'C01A22_顶部左上方', 'C01A22L01_所有页面_顶部左上方logo');"
	})
	//中英文切换
	var cururl='';
	var navId=[['2','14','15','16','17','28'],['4','13'],['6','34','94']];
	if ( contains(navId[0],categoryId) || contains(navId[1],categoryId) || contains(navId[2],categoryId)){
		cururl="/";
	}
	else {
		cururl=window.location.href;
	}
	var regen=cururl.indexOf('en');
	var cururl2=cururl;
	if(cururl!=''&&cururl.length>0){
		cururl2=cururl.replace('cms','en');
	}
// console.log(cururl2)
	if(regen<0){
		// window.location.href='cururl2';
		$(".H_gq span a").attr({"href":cururl2});
		$(".H_gq0 span a").attr({"href":cururl2});
	}
	//导航激活
	//GetRequest();
	//国旗
	$(".H_gq").click(function(){
		if($(".h_gqlist").css("display")=="none"){
			$(".h_gqlist").fadeIn();
		}else{
			$(".h_gqlist").fadeOut();	
		}	
	});	
	
	$(".h_gqlist").hover(function(){
			
	},function(){
		$(".h_gqlist").hide();	
	});
	
	$(".h_gqlist ul li").click(function(){
		var index=$(this).index();
		var imgsrc=$(this).children().text();
		//console.log(imgsrc)	
		$(".H_gq span").html(imgsrc);
		$(".h_gqlist").fadeOut();
		
		var imgsrc0=$(".h_gqlist0 ul li").eq(index).children().text();
		//console.log(imgsrc)	
		$(".H_gq0 span").html(imgsrc0);	
	});
	
	$(".H_gq0").click(function(){
		if($(".h_gqlist0").css("display")=="none"){
			$(".h_gqlist0").fadeIn();
		}else{
			$(".h_gqlist0").fadeOut();	
		}	
	});	
	
	$(".h_gqlist0").hover(function(){
			
	},function(){
		$(".h_gqlist0").hide();	
	});
	
	$(".h_gqlist0 ul li").click(function(){
		var index=$(this).index();
		var imgsrc=$(this).children().text();
		//console.log(imgsrc)	
		$(".H_gq0 span").html(imgsrc);
		$(".h_gqlist0").fadeOut();
		
		var imgsrc0=$(".h_gqlist ul li").eq(index).children().text();
		//console.log(imgsrc)	
		$(".H_gq span").html(imgsrc0);			
	});
	

	//底部
	$(".H0_cwechat").hover(function(){
		$(".H0_bottomerweim").stop().fadeIn("slow");	
	},function(){
		$(".H0_bottomerweim").stop().fadeOut();		
	});
	
	
	//导航
	$(".H_menuconleft ul li").hover(function(){
		$(this).children(".H_menuconright").show();	
		$(this).siblings().children(".H_menuconright").hide();
	});
	$(".H_menulist li").hover(function(){
		$(this).children(".H_menucon").show();
		$(this).siblings().children(".H_menucon").hide();
	},function(){
		$(this).children(".H_menucon").hide();		
	});
	//调整酸奶产品排序
	var snstrs=[];
	var snstrsR=[];
	$('.P_snr .P_ytnrright p').each(function (index) {
		snstrsR[index]=$(this).html();
	});
	$('.P_snr .P_ytnrleft p').each(function (index) {
		snstrs[index]=$(this).html();
	});
	$('.P_snr .P_ytnrleft,.P_snr .P_ytnrright').empty();
	$('.P_snr .P_ytnrleft').html('<p>'+snstrs[0]+'</p><p>'+snstrs[3]+'</p><p>'+snstrsR[1]+'</p><p>'+snstrsR[2]+'</p>');
	$('.P_snr .P_ytnrright').html('<p>'+snstrsR[0]+'</p><p>'+snstrs[1]+'</p><p>'+snstrs[2]+'</p><p>'+snstrsR[3]+'</p>');
	//调整手机端lifeup 顺序
	/*if($(window).width()<769){
		var snlife=$('.S_sncon05 ').html();
		$('.S_sncon05 ').remove();
		$('.S_sncon03').before('<div class="S_sncon05 mr01">'+snlife+'</div>');
	}*/

	// $(".H_menulist li").click(function(){
	// 	$(this).addClass("active").siblings().removeClass("active");
	// });

	//$(".H_menucon").hover(function(){
//			
//	},function(){
//		$(".H_menucon").hide();	
//	});
	$(".H_menucon01 ul li").hover(function(){
		$(".H_menucon01").css({"width":"240px"});	
	},function(){
		$(".H_menucon01").css({"width":"120px"});
	});
	
	$(".H_menucon01 ul li.H_menuconleft02").hover(function(){
		$(".H_menucon01").css({"width":"120px"});	
	},function(){
		$(".H_menucon01").css({"width":"120px"});
	});

	$(".H_menuconleft ul .H_menuconleft01").hover(function(){
		$(".H_menucon01").css({"background":"url("+ STATIC + "/yili/images/nav-top-active.png) no-repeat center top"});
		$(".H_menucon02").css({"background":"url("+ STATIC + "/yili/images/nav-top-active.png) no-repeat center top"});		
	},function(){
		$(".H_menucon01").css({"background":"url("+ STATIC + "/yili/images/nav-top.png) no-repeat center top"});
		$(".H_menucon02").css({"background":"url("+ STATIC + "/yili/images/nav-top.png) no-repeat center top"});	
	});
	$(".H_menuconleft01 .H_menuconright p").eq(0).css({"border":"none"});



	//调整冷饮
	if($(window).width()<769){
		var lylife=$('.L_lycon05 ').html();
		$('.L_lycon05 ').remove();
		$('.L_lycon07').after('<div class="L_lycon05">'+lylife+'</div>');
	}
	
	//banner
	var bannerw=$(".H_banner").width();
	$(".H_banner").height(bannerw*0.475);
	/*var bannerw0=$(".H_banner0").height();
	$(".H_banner0").width(bannerw0*1.287);
	var bannerw0pad=$(".H_banner0pad").height();
	$(".H_banner0pad").width(bannerw0pad*0.88);
	var bannerw0wap=$(".H_banner0wap").width();
	$(".H_banner0wap").height(bannerw0wap*0.925);*/
	var bannerw0wap=$(".H_banner0wap").height();
	$(".H_banner0wap").height(bannerw0wap-64);
	//var h0jjw=$(".H0_yljj").width();
//	$(".H0_yljj").height(h0jjw*0.55);
//	
	$(".js-focus-prev").hover(function(){
		$(this).children().attr({"src":STATIC + "/yili/images/new-arr01.png"});
	},function(){
		$(this).children().attr({"src":STATIC + "/yili/images/new-arr01a.png"});
	});
	$(".js-focus-next").hover(function(){
		$(this).children().attr({"src":STATIC + "/yili/images/new-arr02.png"});
	},function(){
		$(this).children().attr({"src":STATIC + "/yili/images/new-arr02a.png"});
	});
	
	//酸奶
	var sbannerw=$(".S_banner").width();
	$(".S_banner").height(sbannerw*0.475);
	
	//开放工厂
	var kfgcw=$(".H_kfgc").width();
	$(".H_kfgc").height(kfgcw*0.4625);
	
	//返回顶部
	$(".H_xuanfu .H_top").click(function(){
		$("body,html").stop().animate({scrollTop:0},500);	
	});
	
	//分页
	var urlToObject=function(url){
		var urlObject = {};
		if (/\?/.test(url)){
			var urlString=url.substring(url.indexOf("?")+1);
			var urlArray=urlString.split("&");
			for(var i=0,len=urlArray.length;i<len;i++){
				var urlItem=urlArray[i];
				var item = urlItem.split("=");
				urlObject[item[0]]=item[1];
			}
			return urlObject;
		}
	};
	var result=urlToObject(location.href)||{};
	var currentP=result['pageNumber'];
	var qpageliw=$(".Q_pagecon ul li").width();
	var len8=$(".Q_pagecon ul li").length;
	$(".Q_page .Q_syy").click(function(){
			if(currentP>5){
				$(".Q_pagecon ul").animate({"left":-qpageliw},300);
			}
		});
	$(".Q_page .Q_xyy").click(function(){
		if(currentP>5){
			$(".Q_pagecon ul").animate({"left":-qpageliw},300);
		}
		});
	if(currentP>5){
		$(".Q_pagecon ul").animate({"left":-qpageliw},300);
	}
	//企业荣誉
	$('.qyry-section3-ul li').click(function () {
		var idx=$(this).index();
		$('.qyry-popup-mask').show();
		$('.qyry-popup-close').show();
		$('.qyry-popup').eq(idx).show();
		if($(window).width()>1024){
			$('.qyry-popup').css({'left':'50%','marginLeft':-$('.qyry-popup').width()/2});
			$('.qyry-popup').css({'top':'50%','marginTop':-$('.qyry-popup').height()/2});
		}
		else{
			$('.qyry-popup').css({'left':'50%','marginLeft':-$('.qyry-popup').width()/2});
			$('.qyry-popup').css('top',$(window).scrollTop()+130);
		}
	});
	$('.qyry-popup-close').click(function () {
		$('.qyry-popup-mask').hide();
		$('.qyry-popup').hide();
		$(this).hide();

	});
	function nowraph4(){
		$('.zhezhao h4').each(function () {
			var h4content=$(this).text();
			var strs=trim(h4content).split(" ");
			var h4new=strs[0]+'>> More';
			$(this).html(h4new);
		});
	}
	function nowrapP() {
		$('.qyry-popup-left-content p').each(function () {
			var pcontent=$(this).text();
			var strs=trim(pcontent).split(" ");
			var pnew=strs[0];
			$(this).html(pnew);
		});

	}
	nowrapP();
	nowraph4();
	function trim(str){ //删除左右两端的空格
		return str.replace(/(^\s*)|(\s*$)/g, "");
	}





	//发展历程
	$('.fzlc-section4-slide1').show().siblings().hide();
	$('.fzlc-section3-nav-ul li').click(function () {
		var idx=$(this).index()+1;
		$(this).addClass('active').siblings().removeClass('active');
		var str='.fzlc-section4-slide'+idx;
		$(str).show().siblings().hide();
	});
	$('.fzlc-section4-slide1 .fzlc-section4-slide-ul li').click(function () {
		$(this).addClass('current').siblings().removeClass('current');
		initial1();
	});
	$('.fzlc-next1').click(function () {
		var idx=$('.fzlc-section4-slide1 .fzlc-section4-slide-ul .current').index();
		$('.fzlc-section4-slide1 .fzlc-section4-slide-ul li').eq(idx+1).addClass('current').siblings().removeClass('current');
		initial1();
	});
	$('.fzlc-pre1').click(function () {
		var idx=$('.fzlc-section4-slide1 .fzlc-section4-slide-ul .current').index();
		if(idx-1>-1){
			$('.fzlc-section4-slide1 .fzlc-section4-slide-ul li').eq(idx-1).addClass('current').siblings().removeClass('current');
			initial1();
		}
		else{

		}
	});
	$('.fzlc-section4-slide2 .fzlc-section4-slide-ul li').click(function () {
		$(this).addClass('current').siblings().removeClass('current');
		initial2();
	});
	$('.fzlc-next2').click(function () {
		var idx=$('.fzlc-section4-slide2 .fzlc-section4-slide-ul .current').index();
		$('.fzlc-section4-slide2 .fzlc-section4-slide-ul li').eq(idx+1).addClass('current').siblings().removeClass('current');
		initial2();
	});
	$('.fzlc-pre2').click(function () {
		var idx=$('.fzlc-section4-slide2 .fzlc-section4-slide-ul .current').index();
		if((idx-1)>-1){
			$('.fzlc-section4-slide2 .fzlc-section4-slide-ul li').eq(idx-1).addClass('current').siblings().removeClass('current');
			initial2();
		}
	});
	$('.fzlc-section4-slide3 .fzlc-section4-slide-ul li').click(function () {
		$(this).addClass('current').siblings().removeClass('current');
		initial3();
	});
	$('.fzlc-next3').click(function () {
		var idx=$('.fzlc-section4-slide3 .fzlc-section4-slide-ul .current').index();
		$('.fzlc-section4-slide3 .fzlc-section4-slide-ul li').eq(idx+1).addClass('current').siblings().removeClass('current');
		initial3();
	});
	$('.fzlc-pre3').click(function () {
		var idx=$('.fzlc-section4-slide3 .fzlc-section4-slide-ul .current').index();
		if((idx-1)>-1){
			$('.fzlc-section4-slide3 .fzlc-section4-slide-ul li').eq(idx-1).addClass('current').siblings().removeClass('current');
			initial3();
		}
	});
	$('.fzlc-section4-slide4 .fzlc-section4-slide-ul li').click(function () {
		$(this).addClass('current').siblings().removeClass('current');
		initial4();
	});
	$('.fzlc-next4').click(function () {
		var idx=$('.fzlc-section4-slide4 .fzlc-section4-slide-ul .current').index();
		$('.fzlc-section4-slide4 .fzlc-section4-slide-ul li').eq(idx+1).addClass('current').siblings().removeClass('current');
		initial4();
	});
	$('.fzlc-pre4').click(function () {
		var idx=$('.fzlc-section4-slide4 .fzlc-section4-slide-ul .current').index();
		if((idx-1)>-1){
			$('.fzlc-section4-slide4 .fzlc-section4-slide-ul li').eq(idx-1).addClass('current').siblings().removeClass('current');
			initial4();
		}

	});
	if($(window).width()>1024){
		initial1();
		initial2();
		initial3();
		initial4();
	}
	else{

	}
	function initial1(){
		if($(window).width()>1024){
			var idx=$('.fzlc-section4-slide1 .fzlc-section4-slide-ul .current').index();
			console.log(idx);
			var len=$('.fzlc-section4-slide1 .fzlc-section4-slide-ul li').length;
			$('.fzlc-section4-slide1 .fzlc-section4-slide-ul li').removeAttr('style');
			for(var i=0;i<idx;i++){
				$('.fzlc-section4-slide1 .fzlc-section4-slide-ul li').eq(i).css({'top':25,'left':'35%','width':'600','height':'450','marginLeft':-300,'zIndex':(i)});
			}
			$('.fzlc-section4-slide1 .fzlc-section4-slide-ul li').eq(idx).css({'top':0,'left':'50%','width':'700','height':'500','marginLeft':-350,'zIndex':100});
			for(var j=(idx+1);j<len;j++){
				$('.fzlc-section4-slide1 .fzlc-section4-slide-ul li').eq(j).css({'top':25,'right':'35%','width':'600','height':'450','marginRight':-300,'zIndex':(len-j)});
			}
		}
		else{

		}
	}
	function initial2(){
		if($(window).width()>1024){
			var idx=$('.fzlc-section4-slide2 .fzlc-section4-slide-ul .current').index();
			var len=$('.fzlc-section4-slide2 .fzlc-section4-slide-ul li').length;
			$('.fzlc-section4-slide2 .fzlc-section4-slide-ul li').removeAttr('style');
			for(var i=0;i<idx;i++){
				$('.fzlc-section4-slide2 .fzlc-section4-slide-ul li').eq(i).css({'top':25,'left':'35%','width':'600','height':'450','marginLeft':-300,'zIndex':(i)});
			}
			$('.fzlc-section4-slide2 .fzlc-section4-slide-ul li').eq(idx).css({'top':0,'left':'50%','width':'700','height':'500','marginLeft':-350,'zIndex':100});
			for(var j=(idx+1);j<len;j++){
				$('.fzlc-section4-slide2 .fzlc-section4-slide-ul li').eq(j).css({'top':25,'right':'35%','width':'600','height':'450','marginRight':-300,'zIndex':(len-j)});
			}
		}
		else{

		}
	}
	function initial3(){
		if($(window).width()>1024){
			var idx=$('.fzlc-section4-slide3 .fzlc-section4-slide-ul .current').index();
			var len=$('.fzlc-section4-slide3 .fzlc-section4-slide-ul li').length;
			$('.fzlc-section4-slide3 .fzlc-section4-slide-ul li').removeAttr('style');
			for(var i=0;i<idx;i++){
				$('.fzlc-section4-slide3 .fzlc-section4-slide-ul li').eq(i).css({'top':25,'left':'35%','width':'600','height':'450','marginLeft':-300,'zIndex':(i)});
			}
			$('.fzlc-section4-slide3 .fzlc-section4-slide-ul li').eq(idx).css({'top':0,'left':'50%','width':'700','height':'500','marginLeft':-350,'zIndex':100});
			for(var j=(idx+1);j<len;j++){
				$('.fzlc-section4-slide3 .fzlc-section4-slide-ul li').eq(j).css({'top':25,'right':'35%','width':'600','height':'450','marginRight':-300,'zIndex':(len-j)});
			}
		}
		else{

		}
	}
	function initial4(){
		if($(window).width()>1024){
			var idx=$('.fzlc-section4-slide4 .fzlc-section4-slide-ul .current').index();
			var len=$('.fzlc-section4-slide4 .fzlc-section4-slide-ul li').length;
			$('.fzlc-section4-slide4 .fzlc-section4-slide-ul li').removeAttr('style');
			for(var i=0;i<idx;i++){
				$('.fzlc-section4-slide4 .fzlc-section4-slide-ul li').eq(i).css({'top':25,'left':'35%','width':'600','height':'450','marginLeft':-300,'zIndex':(i)});
			}
			$('.fzlc-section4-slide4 .fzlc-section4-slide-ul li').eq(idx).css({'top':0,'left':'50%','width':'700','height':'500','marginLeft':-350,'zIndex':100});
			for(var j=(idx+1);j<len;j++){
				$('.fzlc-section4-slide4 .fzlc-section4-slide-ul li').eq(j).css({'top':25,'right':'35%','width':'600','height':'450','marginRight':-300,'zIndex':(len-j)});
			}
		}
		else{

		}
	}
	
	//首页精彩合作wap
	var len001=$(".H_jchzul li").length;
	var m=0;
	$(".H0_arr01").click(function(){
		m--;
		if(m<0){
			m=0;
			}
		$(".H_jchzul li").eq(m).addClass("active").siblings().removeClass("active");
		})
		
	$(".H0_arr02").click(function(){
		m++;
		if(m>len001-1){
			m=len001-1;
			}
		$(".H_jchzul li").eq(m).addClass("active").siblings().removeClass("active");
		})
	var $windowh=$(window).height();
	$(".slidecon").height($windowh);
	//关于我们
	if($(window).width()>768){
		setTimeout(function () {
			sec4gt();
		},500);
	}
	if($(window).width()<=768){
		setTimeout(function () {
			sec4lt();
		},500);
	}
	function sec4lt() {
		var sec4W=($(window).width())*98/200;
		var sec4H=$('.aboutus-sec4').height()/3;
		$('.pos01').css({'left':sec4W-$('.pos01').width()/2,'top':sec4H*0.15});
		$('.pos02').css({'left':sec4W-$('.pos02').width()/2,'top':sec4H*0.15+sec4H});
		$('.pos03').css({'left':sec4W-$('.pos03').width()/2,'top':sec4H*0.15+sec4H*2});
		$('.aboutus-sec2-content').css('marginLeft',-$('.aboutus-sec2-content').width()/2);
	}
	function sec4gt() {
		var sec4W=$('.aboutus-sec4').width()/6;
		$('.pos01').css('left',sec4W-$('.pos01').width()/2);
		$('.pos02').css('left',sec4W*3-$('.pos02').width()/2);
		$('.pos03').css('left',sec4W*5-$('.pos03').width()/2);
	}


	//领导人
	var ldrconwidth=$(".H_ldrconpad").width();
	var ldrwidth=$(".H_ldrimg0").width();
	$(".H_ldrtxt0").width(ldrconwidth*0.9-ldrwidth);
	$(".H_yljjcon").height(ldrwidth*1.437);
	
	//视频
	var videow=$(".H_ldrvideo").width();
	//$(".H_ldrvv").height(videow*0.73);
	var videow2=$(".H_ldrvideo").width();
	//$(".H_ldrvv").height(videow2*0.73);
	$(".H_ldrvv #a2").height(videow*0.73);
//	$(".H_ldrvv #a1").width(videow);
//	$(".H_ldrvv #a2").height(videow2*0.73);
//	$(".H_ldrvv #a2").width(videow2);
	$(".videocenter #a1").height("100%");
	$(".videocenter #a1").width("100%");
	var h0videowidth=$(".H_ldrvv").width();
	$(".H_ldrvv").height(h0videowidth*0.562);

	//sncq视频
	var sncqvideow=$('.L_lyqlztvcon ul li').width();
	$('.L_lyqlztvcon ul li').height(sncqvideow*0.5625);
	$('.L_lyqlztvcon #a1').width(sncqvideow);
	$('.L_lyqlztvcon #a1').height(sncqvideow*0.5625);

	//移动端menu
	$(".H_menu").click(function(){
		if($(".H_menuwap").css("display")=="none"){
			$(".H_menuwap").fadeIn();	
		}else {
			$(".H_menuwap").fadeOut();		
		}
		
	});
	$(".H_menuwap ul li").click(function(){
		var index=$(this).index();
		if(index==1){
			$(".H_menuwapl").children().eq(index-1).show().siblings().hide();	
		}else if(index==2){
			$(".H_menuwapl").children().eq(index-1).show().siblings().hide();	
		}else if(index==3){
			$(".H_menuwapl").children().eq(index-1).show().siblings().hide();	
		}else if(index==4){
			$(".H_menuwapl").children().eq(index-1).show().siblings().hide();	
		}else if(index==5){
			$(".H_menuwapl").children().eq(index-1).show().siblings().hide();	
		}else if(index==6){
			$(".H_menuwapl").children().eq(index-1).show().siblings().hide();	
		}
	});
	$(".H_menuwap ul li.H_menunoi,.H_menuwaplcon p a").click(function(){
		$(".H_menuwap").fadeOut();		
	});
	
	//新闻图片大小
	var tjxw=$(".N_tjxwl .N_tjxwimg").width();
	$(".N_tjxwl .N_tjxwimg,.N_tjxwr .N_tjxwimg").height(tjxw*0.5526);
	
	//企业新闻
	var qyxwwidth=$(".Q_qyxwcon ul li .Q_qyxwimg").width();
	$(".Q_qyxwr").width($(".Q_qyxwcon ul li").width()-qyxwwidth-10);
	//$(".Q_qyxwtit p span a").click(function(){
//		$(this).addClass("active").siblings().removeClass("active");
//		var index=$(this).index();	
//	});
	//新闻中心首页
	var videonewsw=$('.N_mtspvideo').width();
	var videonewsh=$('.N_mtspvideo').height();
	$('.N_mtspvideo #a1').width(videonewsw);
	$('.N_mtspvideo #a1').height(videonewsh);

	//媒体视频
	var mtspwidth=$(".M_mtspcon ul li .M_mtspimg").width();
	$(".M_mtspcon ul li .M_mtspimg").height(mtspwidth*0.562);
	$(".M_mtspimg #a1, .M_mtspimg #a2,.M_mtspimg #a3,.M_mtspimg #a4").height(mtspwidth*0.562);
	$(".M_mtspimg #a1,.M_mtspimg #a2,.M_mtspimg #a3,.M_mtspimg #a4").width(mtspwidth);
	//合作伙伴
	var hzhbwidth=$(".Z_hzhbimg").width();
	$(".Z_hzhbimg").height(hzhbwidth*0.562);
	$(".Z_hzhbx01,.Z_hzhbx02").height(hzhbwidth*0.562);

	//合作伙伴pad
	var len=$(".Z_logopad ul li").length;
	var i=0;
	$(".Z_logopre").click(function(){
		i--;
		if(i<0){
			i=0;
			}
		$(".Z_logopad ul li").eq(i).addClass("active").siblings().removeClass("active");
		})
		
	$(".Z_logonext").click(function(){
		i++;
		if(i>len-1){
			i=len-1;
			}
		$(".Z_logopad ul li").eq(i).addClass("active").siblings().removeClass("active");
		})
		
	//关于伊利
//	var ldrjswidth=$(".A_ldrjscon img").width();
//	$(".A_ldrjscon").height(ldrjswidth*0.774);
//	$(".A_qyjscon").height(ldrjswidth*0.774);
//	$(".A_ylqqcon").height(ldrjswidth*0.774);
	var ylpzwidth=$(".A_ylpzright").width();
	$(".A_ylpzright").height(ylpzwidth*0.42535);
	$(".A_ylpzleft").height(ylpzwidth*0.42535);
	var qywhwidth=$(".A_qygm01").width();
	$(".A_qygm03").height(qywhwidth*0.34159);
	$(".A_qygm03pad").height(qywhwidth*0.4568);
	var qywhwidth=$(".A_qywh04").width();
	$(".A_qywh04").height(qywhwidth*0.28);
	$(".A_qywh04pad").height(qywhwidth*0.564);
	var qygmwidth=$(".A_qygm03wap").width();
	$(".A_qygm03wap").height(qygmwidth*1.0852);
	//console.log ($(".A_qygm03wap").height())
	
	//企业公民报告
	var gmbgconw=$(".Q_gmbg .Q_gmbgcon").width(),gmbgconlen=$(".Q_gmbg .Q_gmbgcon ul li").length,gmbgconwpad=$(".Q_gmbgpad .Q_gmbgcon").width(),gmbgconwwap=$(".Q_gmbgwap .Q_gmbgcon").width();
	$(".Q_gmbg .Q_gmbgcon ul li").css({"width":gmbgconw*0.25});
	$(".Q_gmbg .Q_gmbgcon ul").css({"width":gmbgconw*0.25*gmbgconlen});
	$(".Q_gmbgpad .Q_gmbgcon ul li").css({"width":gmbgconwpad*0.5});
	$(".Q_gmbgpad .Q_gmbgcon ul").css({"width":gmbgconwpad*0.5*gmbgconlen});
	$(".Q_gmbgwap .Q_gmbgcon ul li").css({"width":gmbgconwwap});
	$(".Q_gmbgwap .Q_gmbgcon ul").css({"width":gmbgconwwap*gmbgconlen});
	//console.log(gmbgconlen)
	var len0=gmbgconlen;
	var a=0;
	$(".Q_gmbg .Q_pre").click(function(){
		a--;
		if(a<0){
			a=0;
			}
		$(".Q_gmbg .Q_gmbgcon ul").stop().animate({left:-a*gmbgconw*0.25},300);
		})
		
	$(".Q_gmbg .Q_next").click(function(){
		a++;
		if(a>len0-4){
			a=len0-4;
			}
		$(".Q_gmbg .Q_gmbgcon ul").stop().animate({left:-a*gmbgconw*0.25},300);
		})
		
	var len1=gmbgconlen;
	var b=0;
	$(".Q_gmbgpad .Q_pre").click(function(){
		b--;
		if(b<0){
			b=0;
			}
		$(".Q_gmbgpad .Q_gmbgcon ul").stop().animate({left:-b*gmbgconwpad*0.5},300);
		})
		
	$(".Q_gmbgpad .Q_next").click(function(){
		b++;
		if(b>len1-2){
			b=len1-2;
			}
		$(".Q_gmbgpad .Q_gmbgcon ul").stop().animate({left:-b*gmbgconwpad*0.5},300);
		})
		
	var len2=gmbgconlen;
	var c=0;
	$(".Q_gmbgwap .Q_pre").click(function(){
		c--;
		if(c<0){
			c=0;
			}
		$(".Q_gmbgwap .Q_gmbgcon ul").stop().animate({left:-c*gmbgconwwap},300);
		})
		
	$(".Q_gmbgwap .Q_next").click(function(){
		c++;
		if(c>len2-1){
			c=len2-1;
			}
		$(".Q_gmbgwap .Q_gmbgcon ul").stop().animate({left:-c*gmbgconwwap},300);
		})
	
	//定期公告
	$(".Z_dqgglist ul li a").click(function(){
		var $this=$(this);
		if($this.parent().children(".Q_dqggload").css("display")=="none"){
			$this.parent().addClass("active");
		}else{
			$this.parent().removeClass("active");	
		}
		
	});
	
	//股票信息
	$(".G_gpxxcon").click(function(){
		var $this=$(this);
		$this.parent().siblings().removeClass("active");
		if($this.parent().hasClass("active")){
			$this.parent().removeClass("active");	
		}else{
			$this.parent().addClass("active");
		}
	});
	
	//沟通园地
	var gtydwidth=$(".G_gtydl").width(),gtydliwidth=$(".G_gtyd ul li").width();
	$(".G_gtydr").width(gtydliwidth-gtydwidth-10);
	//console.log(gtydwidth,$(".G_gtyd").width())
	//企业荣誉
	if($(window).width()>1024){
		$('.qyry-popup').css({'left':'50%','marginLeft':-$('.qyry-popup').width()/2});
		$('.qyry-popup').css({'top':'50%','marginTop':-$('.qyry-popup').height()/2});
	}
	//伊利品质
	$(".Y_ylpz01 .Y_down").click(function(){
		$(".Y_ylpz01bconwap").css({"height":"auto"});
		$(this).hide();
		$(".Y_ylpz01 .Y_up").show().css({"display":"block"});
	});
	$(".Y_ylpz01 .Y_up").click(function(){
		$(".Y_ylpz01bconwap").css({"height":"205px"});
		$(this).hide();
		$(".Y_ylpz01 .Y_down").show().css({"display":"block"});	
	});
	
	$(".Y_ylpz02 .Y_down").click(function(){
		$(".Y_ylpz02bconwap").css({"height":"auto"});
		$(this).hide();
		$(".Y_ylpz02 .Y_up").show().css({"display":"block"});
	});
	$(".Y_ylpz02 .Y_up").click(function(){
		$(".Y_ylpz02bconwap").css({"height":"205px"});
		$(this).hide();
		$(".Y_ylpz02 .Y_down").show().css({"display":"block"});	
	});
	
	$(".Y_ylpz03 .Y_down").click(function(){
		$(".Y_ylpz03r").css({"height":"auto"});
		$(this).hide();
		$(".Y_ylpz03 .Y_up").show().css({"display":"block"});
	});
	$(".Y_ylpz03 .Y_up").click(function(){
		$(".Y_ylpz03r").css({"height":"205px"});
		$(this).hide();
		$(".Y_ylpz03 .Y_down").show().css({"display":"block"});	
	});
	
	//服务中心
	var fwzximgw=$(".F_fwzxtopl img").width();
	$(".F_fwzxtopl,.F_fwzxtopr").css({"height":fwzximgw*0.93});
	var fwzxtxtlh=$(".F_fwzxbotl").height(),fwzxtxtrh=$(".F_fwzxbotr").height();
	if(fwzxtxtlh>fwzxtxtrh){
		$(".F_fwzxbotr").css({"height":fwzxtxtlh});
	}else{
		$(".F_fwzxbotl").css({"height":fwzxtxtrh});
	}
	
	//发展历程
	$(".F_fzlcleft ul li").click(function(){
		var index=$(this).index();
		$(this).addClass("active").siblings().removeClass("active");
		$(".F_fzlcright").children().eq(index).show().siblings().hide();	
	});
	$(".F_fzlcrtit span").click(function(){
		var index=$(this).index();
		$(this).addClass("active").siblings().removeClass("active");
		$(this).parent().next().children().eq(index).show().siblings().hide();
	});
	fzlctab0($(".lc01 .F_fzlcrcenter ul li"),$(".lc01 .F_fzlcpre"),$(".lc01 .F_fzlcnext"));
	fzlctab0($(".lc02 .F_fzlcrcenter ul li"),$(".lc02 .F_fzlcpre"),$(".lc02 .F_fzlcnext"));
	fzlctab0($(".lc03 .F_fzlcrcenter ul li"),$(".lc03 .F_fzlcpre"),$(".lc03 .F_fzlcnext"));
	fzlctab0($(".lc11 .F_fzlcrcenter ul li"),$(".lc11 .F_fzlcpre"),$(".lc11 .F_fzlcnext"));
	fzlctab0($(".lc21 .F_fzlcrcenter ul li"),$(".lc21 .F_fzlcpre"),$(".lc21 .F_fzlcnext"));
	fzlctab0($(".lc22 .F_fzlcrcenter ul li"),$(".lc22 .F_fzlcpre"),$(".lc22 .F_fzlcnext"));
	fzlctab0($(".lc23 .F_fzlcrcenter ul li"),$(".lc23 .F_fzlcpre"),$(".lc23 .F_fzlcnext"));
	fzlctab0($(".lc31 .F_fzlcrcenter ul li"),$(".lc31 .F_fzlcpre"),$(".lc31 .F_fzlcnext"));
	fzlctab0($(".lc32 .F_fzlcrcenter ul li"),$(".lc32 .F_fzlcpre"),$(".lc32 .F_fzlcnext"));
	fzlctab0($(".lc33 .F_fzlcrcenter ul li"),$(".lc33 .F_fzlcpre"),$(".lc33 .F_fzlcnext"));
	fzlctab0($(".lc34 .F_fzlcrcenter ul li"),$(".lc34 .F_fzlcpre"),$(".lc34 .F_fzlcnext"));
	fzlctab0($(".lc35 .F_fzlcrcenter ul li"),$(".lc35 .F_fzlcpre"),$(".lc35 .F_fzlcnext"));
	fzlctab0($(".lc36 .F_fzlcrcenter ul li"),$(".lc36 .F_fzlcpre"),$(".lc36 .F_fzlcnext"));
	fzlctab0($(".lc37 .F_fzlcrcenter ul li"),$(".lc37 .F_fzlcpre"),$(".lc37 .F_fzlcnext"));
	//fzlctab($(".lc015 .F_fzlcrcenter ul li"),$(".lc015 .F_fzlcpre"),$(".lc015 .F_fzlcnext"));
	
	//点赞
	$(".Y_heart").click(function(){
		$(this).css({"background":"url(images/icon022.png)"});
	});
	
	//品牌产品banner
	var ppbannerw=$(".P_ppbanner").width();
	$(".P_ppbanner").height(ppbannerw*0.575);
	
	//冷饮火炬
	var yllywapw=$(".L_yllyconwap ul").width();
	$(".L_yllyconwap ul").height(yllywapw*1.3636);
	//冷饮冰工厂
	var yllywapw=$(".L_yllyconwapbgc ul").width();
	$(".L_yllyconwapbgc ul").height(yllywapw*1.111);
	//冷饮基础产品
	var yllywapw=$(".L_yllyconwapjccp ul").width();
	$(".L_yllyconwapjccp ul").height(yllywapw*1.5);
	//冷饮甄稀
	var yllywapw=$(".L_yllyconwapzx ul").width();
	$(".L_yllyconwapzx ul").height(yllywapw*1.2);
	
	
	var len4=$(".L_yllyconwap0 ul li").length;
	var i=0;
	$(".L_yllyconwap0 .pre").click(function(){
		i--;
		if(i<0){
			i=0;
			}
		$(".L_yllyconwap0 ul li").eq(i).addClass("active").siblings().removeClass("active");
		$(".L_yllycondd i").eq(i).addClass("active").siblings().removeClass("active");
		})
		
	$(".L_yllyconwap0 .next").click(function(){
		i++;
		if(i>len4-1){
			i=len4-1;
			}
		$(".L_yllyconwap0 ul li").eq(i).addClass("active").siblings().removeClass("active");
		$(".L_yllycondd i").eq(i).addClass("active").siblings().removeClass("active");
		})
		
	var len7=$(".L_yllyconwap1 ul li").length;
	var g=0;
	$(".L_yllyconwap1 .pre").click(function(){
		g--;
		if(g<0){
			g=0;
			}
		$(".L_yllyconwap1 ul li").eq(g).addClass("active").siblings().removeClass("active");
		$(".L_yllycondd0 i").eq(g).addClass("active").siblings().removeClass("active");
		})
		
	$(".L_yllyconwap1 .next").click(function(){
		g++;
		if(g>len7-1){
			g=len7-1;
			}
		$(".L_yllyconwap1 ul li").eq(g).addClass("active").siblings().removeClass("active");
		$(".L_yllycondd0 i").eq(g).addClass("active").siblings().removeClass("active");
		})
	
	//社会招聘
	$(".X_shzplp span i").click(function(){
		$(this).addClass("active").siblings().removeClass("active");
	});
	
	//巧乐兹
	fzlctab($(".L_lyqlztvcon ul li"),$(".L_pre"),$(".L_next"));
	
	//首页人人
	//var shrwidth=$(".H_newstopbox").width();
//	$(".H_newstopbox").height(shrwidth*0.97);
//	var shrwidth=$(".H_newstopbox0").width();
//	$(".H_newstopbox0").height(shrwidth*0.97);
	var shrrheight=$(".H_newstopbox img").height();
	$(".H_newstopbox").height(shrrheight+30);
	var shrrpadheight=$(".H_newstopbox0 img").height();
	$(".H_newstopbox0").height(shrrpadheight+30);
	
	//伊利创新
	var ylcxwidth=$(".C_cpyfimg01").width();
	$(".C_cpyfimg01").css({"height":ylcxwidth*0.5584});
	
	//甄稀
	//pc
	var lyzxwidthlipc=$(".L_yllyconpczx ul li").width();
	var len6=$(".L_yllyconpczx ul li").length;
	var h=0;
	$(".L_yllyconpczx .pre").click(function(){
		h--;
		if(h<0){
			h=0;
			}
		$(".L_yllyconpczx ul").stop().animate({left:-h*lyzxwidthlipc},300);
		})
		
	$(".L_yllyconpczx .next").click(function(){
		h++;
		if(h>len6-3){
			h=len6-3;
			}
		$(".L_yllyconpczx ul").stop().animate({left:-h*lyzxwidthlipc},300);
		})
	//pad
	var lyzxwidthli=$(".L_yllyconpadzx ul li").width();
	var len5=$(".L_yllyconpadzx ul li").length;
	var f=0;
	$(".L_yllyconpadzx .pre").click(function(){
		f--;
		if(f<0){
			f=0;
			}
		$(".L_yllyconpadzx ul").stop().animate({left:-f*lyzxwidthli},300);
		})
		
	$(".L_yllyconpadzx .next").click(function(){
		f++;
		if(f>len5-2){
			f=len5-2;
			}
		$(".L_yllyconpadzx ul").stop().animate({left:-f*lyzxwidthli},300);
		});
	
	
	
	$(window).resize(function(){
		//首页人人
		//var shrwidth=$(".H_newstopbox").width();
//		$(".H_newstopbox").height(shrwidth*0.97);
//		var shrwidth=$(".H_newstopbox0").width();
//		$(".H_newstopbox0").height(shrwidth*0.97);
		var shrrheight=$(".H_newstopbox img").height();
		$(".H_newstopbox").height(shrrheight+30);
		var shrrpadheight=$(".H_newstopbox0 img").height();
		$(".H_newstopbox0").height(shrrpadheight+30);
		//banner
		var bannerw=$(".H_banner").width();
		$(".H_banner").height(bannerw*0.475);
		var bannerw0=$(".H_banner0").height();
		$(".H_banner0").width(bannerw0*1.287);
		var bannerw0pad=$(".H_banner0pad").height();
		$(".H_banner0pad").width(bannerw0pad*0.88);
		var bannerw0wap=$(".H_banner0wap").width();
		$(".H_banner0wap").height(bannerw0wap*0.925);

		var bannerw0wap=$(".H_banner0wap").height();
		$(".H_banner0wap").height(bannerw0wap-64);	
		//var h0jjw=$(".H0_yljj").width();
//		$(".H0_yljj").height(h0jjw*0.55);
		//开放工厂
		var kfgcw=$(".H_kfgc").width();
		$(".H_kfgc").height(kfgcw*0.4625);
		//关于我们
		if($(window).width()>768){
			setTimeout(function () {
				sec4gt();
			},500);
		}
		if($(window).width()<=768){
			setTimeout(function () {
				sec4lt();
			},500);
		}
		//领导人
		var ldrconwidth=$(".H_ldrconpad").width();
		var ldrwidth=$(".H_ldrimg0").width();
		$(".H_ldrtxt0").width(ldrconwidth*0.9-ldrwidth);
		//视频
		var videow=$(".H_ldrvideo").width();
		//$(".H_ldrvv").height(videow*0.73);
		var videow2=$(".H_ldrvideo").width();
		//$(".H_ldrvv").height(videow2*0.73);
		var h0videowidth=$(".H_ldrvv").width();
		$(".H_ldrvv").height(h0videowidth*0.562);
		//新闻图片大小
		var tjxw=$(".N_tjxwl .N_tjxwimg").width();
		$(".N_tjxwl .N_tjxwimg,.N_tjxwr .N_tjxwimg").height(tjxw*0.5526);
		//企业新闻
		var qyxwwidth=$(".Q_qyxwcon ul li .Q_qyxwimg").width();
		$(".Q_qyxwr").width($(".Q_qyxwcon ul li").width()-qyxwwidth-10);
		//新闻中心首页
		var videonewsw=$('.N_mtspvideo').width();
		var videonewsh=$('.N_mtspvideo').height();
		$('.N_mtspvideo #a1').width(videonewsw);
		$('.N_mtspvideo #a1').height(videonewsh);
		//媒体视频
		var mtspwidth=$(".M_mtspcon ul li .M_mtspimg").width();
		$(".M_mtspcon ul li .M_mtspimg").height(mtspwidth*0.562);
		$(".M_mtspimg #a1, .M_mtspimg #a2,.M_mtspimg #a3,.M_mtspimg #a4").height(mtspwidth*0.562);
		$(".M_mtspimg #a1,.M_mtspimg #a2,.M_mtspimg #a3,.M_mtspimg #a4").width(mtspwidth);
		var hzhbwidth=$(".Z_hzhbimg").width();
		$(".Z_hzhbimg").height(hzhbwidth*0.562);
		$(".Z_hzhbx01,.Z_hzhbx02").height(hzhbwidth*0.562);
		//发展历程
		if($(window).width()>1024){
			initial1();
			initial2();
			initial3();
			initial3();
		}
		else{

		}
		//sncq视频
		var sncqvideow=$('.L_lyqlztvcon ul li').width();
		$('.L_lyqlztvcon ul li').height(sncqvideow*0.5625);
		$('.L_lyqlztvcon #a1').width(sncqvideow);
		$('.L_lyqlztvcon #a1').height(sncqvideow*0.5625);
		//伊利创新
		var ylcxwidth=$(".C_cpyfimg01").width();
		$(".C_cpyfimg01").css({"height":ylcxwidth*0.5584});
		//关于伊利
//		var ldrjswidth=$(".A_ldrjscon img").width();
//		$(".A_ldrjscon").height(ldrjswidth*0.774);
//		$(".A_qyjscon").height(ldrjswidth*0.774);
//		$(".A_ylqqcon").height(ldrjswidth*0.774);	
		var ylpzwidth=$(".A_ylpzright img").width();
		$(".A_ylpzright").height(ylpzwidth*0.42535);
		$(".A_ylpzleft").height(ylpzwidth*0.42535);
		var qywhwidth=$(".A_qygm01").width();
		$(".A_qygm03").height(qywhwidth*0.34159);
		$(".A_qygm03pad").height(qywhwidth*0.4568);
		var qywhwidth=$(".A_qywh04").width();
		$(".A_qywh04").height(qywhwidth*0.28);
		$(".A_qywh04pad").height(qywhwidth*0.564);
		var qygmwidth=$(".A_qygm03wap").width();
		$(".A_qygm03wap").height(qygmwidth*1.0852);
		//企业公民报告
		var gmbgconw=$(".Q_gmbg .Q_gmbgcon").width(),gmbgconlen=$(".Q_gmbg .Q_gmbgcon ul li").length,gmbgconwpad=$(".Q_gmbgpad .Q_gmbgcon").width(),gmbgconwwap=$(".Q_gmbgwap .Q_gmbgcon").width();
		$(".Q_gmbg .Q_gmbgcon ul li").css({"width":gmbgconw*0.25});
		$(".Q_gmbg .Q_gmbgcon ul").css({"width":gmbgconw*0.25*gmbgconlen});
		$(".Q_gmbgpad .Q_gmbgcon ul li").css({"width":gmbgconwpad*0.5});
		$(".Q_gmbgpad .Q_gmbgcon ul").css({"width":gmbgconwpad*0.5*gmbgconlen});
		$(".Q_gmbgwap .Q_gmbgcon ul li").css({"width":gmbgconwwap});
		$(".Q_gmbgwap .Q_gmbgcon ul").css({"width":gmbgconwwap*gmbgconlen});
		var len0=gmbgconlen;
		var a=0;
		$(".Q_gmbg .Q_pre").click(function(){
			a--;
			if(a<0){
				a=0;
				}
			$(".Q_gmbg .Q_gmbgcon ul").stop().animate({left:-a*gmbgconw*0.25},300);
			})
			
		$(".Q_gmbg .Q_next").click(function(){
			a++;
			if(a>len0-4){
				a=len0-4;
				}
			$(".Q_gmbg .Q_gmbgcon ul").stop().animate({left:-a*gmbgconw*0.25},300);
			})
			
		var len1=gmbgconlen;
		var b=0;
		$(".Q_gmbgpad .Q_pre").click(function(){
			b--;
			if(b<0){
				b=0;
				}
			$(".Q_gmbgpad .Q_gmbgcon ul").stop().animate({left:-b*gmbgconwpad*0.5},300);
			})
			
		$(".Q_gmbgpad .Q_next").click(function(){
			b++;
			if(b>len1-2){
				b=len1-2;
				}
			$(".Q_gmbgpad .Q_gmbgcon ul").stop().animate({left:-b*gmbgconwpad*0.5},300);
			})
			
		var len2=gmbgconlen;
		var c=0;
		$(".Q_gmbgwap .Q_pre").click(function(){
			c--;
			if(c<0){
				c=0;
				}
			$(".Q_gmbgwap .Q_gmbgcon ul").stop().animate({left:-c*gmbgconwwap},300);
			})
			
		$(".Q_gmbgwap .Q_next").click(function(){
			c++;
			if(c>len2-1){
				c=len2-1;
				}
			$(".Q_gmbgwap .Q_gmbgcon ul").stop().animate({left:-c*gmbgconwwap},300);
			})
		//沟通园地
		var gtydwidth=$(".G_gtydl").width(),gtydliwidth=$(".G_gtyd ul li").width();
		$(".G_gtydr").width(gtydliwidth-gtydwidth-10);
		//服务中心
		var fwzximgw=$(".F_fwzxtopl img").width();
		$(".F_fwzxtopl,.F_fwzxtopr").css({"height":fwzximgw*0.93});
		var fwzxtxtlh=$(".F_fwzxbotl").height(),fwzxtxtrh=$(".F_fwzxbotr").height();
		if(fwzxtxtlh>fwzxtxtrh){
			$(".F_fwzxbotr").css({"height":fwzxtxtlh});
		}else{
			$(".F_fwzxbotl").css({"height":fwzxtxtrh});
		}
		//品牌产品banner
		var ppbannerw=$(".P_ppbanner").width();
		$(".P_ppbanner").height(ppbannerw*0.575);
		//冷饮火炬
		var yllywapw=$(".L_yllyconwap ul").width();
		$(".L_yllyconwap ul").height(yllywapw*1.3636);
		//冷饮冰工厂
		var yllywapw=$(".L_yllyconwapbgc ul").width();
		$(".L_yllyconwapbgc ul").height(yllywapw*1.111);
		//酸奶
		var sbannerw=$(".S_banner").width();
		$(".S_banner").height(sbannerw*0.475);
		//冷饮基础产品
		var yllywapw=$(".L_yllyconwapjccp ul").width();
		$(".L_yllyconwapjccp ul").height(yllywapw*1.5);
		//冷饮甄稀
		var yllywapw=$(".L_yllyconwapzx ul").width();
		$(".L_yllyconwapzx ul").height(yllywapw*1.2);
		//jlg
		var jlgH=$('.milk-jlg ul li img').eq(1).height();
		$('.milk-jlg').height(jlgH);
		//tfr
		var jlgH=$('.milk-tfr ul li img').eq(1).height();
		$('.milk-tfr').height(jlgH);

	})


});

function fzlctab(li,pre,next){
	var len3=li.length;
	var d=0;
	pre.click(function(){
		d--;
		if(d<0){
			d=0;
			}
		li.eq(d).fadeIn().addClass("active").siblings().removeClass("active").hide();
		})
		
	next.click(function(){
		d++;
		if(d>len3-1){
			d=len3-1;
			}
		li.eq(d).fadeIn().addClass("active").siblings().removeClass("active").hide();
		})
}
function fzlctab0(li,pre,next){
	var len3=li.length;
	var d=0;
	//console.log(len3)
	if(len3==1){
		pre.hide();
		next.hide();
	}
	pre.click(function(){
		d--;
		if(d<0){
			d=0;
			}	
		next.show();
		if(d==0){
			pre.hide();
		}else if(d!=0){
			pre.show();
		}
		li.eq(d).fadeIn().addClass("active").siblings().removeClass("active").hide();
		})
		
	next.click(function(){
		d++;
		if(d>len3-1){
			d=len3-1;
			}
		pre.show();
		if(d==len3-1){
			next.hide();
		}else if(d!=len3-1){
			next.show();
		}
		//console.log(d)
		li.eq(d).fadeIn().addClass("active").siblings().removeClass("active").hide();
		})
}

// function GetRequest() {
//
// 	var url = location.search;
// 	if (url.indexOf("?") != -1) {
// 		var str = url.substr(1);
// 		strs = str.split("=");
// 		var navId=[['1','9','29','30','31','36','37','38','39','40','41','50'],['2','14','15','16','17'],['3','23','24','25','26','27','28'],['4','13'],['5','19','20','21','22','101','102','103','104','109'],['6','34','94'],['7']];
//
// 		if(contains(navId[0],strs[1])){
// 			$('.H_menulist>li').eq(1).addClass('active').siblings().removeClass('active');
// 		}
// 		else if(contains(navId[1],strs[1])){
// 			$('.H_menulist>li').eq(2).addClass('active').siblings().removeClass('active');
// 		}
// 		else if(contains(navId[2],strs[1])){
// 			$('.H_menulist>li').eq(3).addClass('active').siblings().removeClass('active');
// 		}
// 		else if(contains(navId[3],strs[1])){
// 			$('.H_menulist>li').eq(5).addClass('active').siblings().removeClass('active');
// 		}
// 		else if(contains(navId[4],strs[1])){
// 			$('.H_menulist>li').eq(6).addClass('active').siblings().removeClass('active');
// 		}
// 		else if(contains(navId[5],strs[1])){
// 			$('.H_menulist>li').eq(7).addClass('active').siblings().removeClass('active');
// 		}
// 		else if(contains(navId[6],strs[1])){
// 			$('.H_menulist>li').eq(8).addClass('active').siblings().removeClass('active');
// 		}
// 		else{
// 			$('.H_menulist>li').eq(0).addClass('active').siblings().removeClass('active');
// 		}
// 	}
// 	else{
// 		$('.H_menulist>li').eq(0).addClass('active').siblings().removeClass('active');
// 	}
// }


function contains(arr, obj) {
	var i = arr.length;
	while (i--) {
		if (arr[i] === obj) {
			return true;
		}
	}
	return false;
}
window.onload= function () {
	//jlg
	var jlgH=$('.milk-jlg ul li img').eq(1).height();
	$('.milk-jlg').height(jlgH);
	//tfr
	var jlgH=$('.milk-tfr ul li img').eq(1).height();
	$('.milk-tfr').height(jlgH);
};
