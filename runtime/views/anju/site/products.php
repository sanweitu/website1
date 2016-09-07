<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $this->_siteConfig->name;?></title>
	<link type="image/x-icon" href="<?php echo IUrl::creatUrl("")."favicon.ico";?>" rel="icon">
	<link rel="stylesheet" href="<?php echo $this->getWebSkinPath()."css/index.css";?>" />
	<script type="text/javascript" charset="UTF-8" src="/iwebshop/runtime/_systemjs/jquery/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" charset="UTF-8" src="/iwebshop/runtime/_systemjs/form/form.js"></script>
	<script type="text/javascript" charset="UTF-8" src="/iwebshop/runtime/_systemjs/autovalidate/validate.js"></script><link rel="stylesheet" type="text/css" href="/iwebshop/runtime/_systemjs/autovalidate/style.css" />
	<script type="text/javascript" charset="UTF-8" src="/iwebshop/runtime/_systemjs/artdialog/artDialog.js"></script><script type="text/javascript" charset="UTF-8" src="/iwebshop/runtime/_systemjs/artdialog/plugins/iframeTools.js"></script><link rel="stylesheet" type="text/css" href="/iwebshop/runtime/_systemjs/artdialog/skins/aero.css" />
	<script type="text/javascript" charset="UTF-8" src="/iwebshop/runtime/_systemjs/artTemplate/artTemplate.js"></script><script type="text/javascript" charset="UTF-8" src="/iwebshop/runtime/_systemjs/artTemplate/artTemplate-plugin.js"></script>
	<script type='text/javascript' src="<?php echo $this->getWebViewPath()."javascript/common.js";?>"></script>
	<script type='text/javascript' src='<?php echo $this->getWebViewPath()."javascript/site.js";?>'></script>
	
	<!-- Custom Theme files -->
	<!--theme style-->
	<link href="<?php echo $this->getWebSkinPath()."css/style.css";?>" rel="stylesheet" type="text/css" media="all" />	
	<script src="<?php echo $this->getWebViewPath()."javascript/jquery.min.js";?>"></script>

	<!--//theme style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- start menu -->
	<script src="<?php echo $this->getWebViewPath()."javascript/simpleCart.min.js";?>"> </script>
	<!-- start menu -->
	<link href="<?php echo $this->getWebSkinPath()."css/memenu.css";?>" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="<?php echo $this->getWebViewPath()."javascript/memenu.js";?>"></script>
	<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
	<!-- /start menu -->
</head>
<body class="index">
<div class="container">
	<div class="header">
		<h1 class="logo"><a title="<?php echo $this->_siteConfig->name;?>" style="background:url(<?php if($this->_siteConfig->logo){?><?php echo IUrl::creatUrl("")."".$this->_siteConfig->logo."";?><?php }else{?><?php echo $this->getWebSkinPath()."images/front/logo.jpg";?><?php }?>) center no-repeat;background-size:contain;" href="<?php echo IUrl::creatUrl("");?>"><?php echo $this->_siteConfig->name;?></a></h1>
		<ul class="shortcut">
			<li class="first"><a href="<?php echo IUrl::creatUrl("/ucenter/index");?>">淘宝网首页</a></li>
			<li><a href="<?php echo IUrl::creatUrl("/ucenter/order");?>">购物车</a></li>
			<li><a href="<?php echo IUrl::creatUrl("/simple/seller");?>">卖家中心</a></li>
			<li><a href="<?php echo IUrl::creatUrl("/seller/index");?>">我的淘宝</a></li>
			<li class='last'><a href="<?php echo IUrl::creatUrl("/site/help_list");?>">联系客服</a></li>
		</ul>
		<p class="loginfo">
			<?php if($this->user){?>
			<?php echo $this->user['username'];?>您好，欢迎您来到<?php echo $this->_siteConfig->name;?>购物！[<a href="<?php echo IUrl::creatUrl("/simple/logout");?>" class="reg">安全退出</a>]
			<?php }else{?>
			[<a href="<?php echo IUrl::creatUrl("/simple/login");?>">登录</a><a class="reg" href="<?php echo IUrl::creatUrl("/simple/account");?>">免费注册</a>]
			<?php }?>
		</p>
	</div>

	<div class="navbar">
		<ul>
			<li><a href="<?php echo IUrl::creatUrl("/site/index");?>">首页</a></li>
			<?php foreach(Api::run('getCategoryListTop') as $key => $first){?>
			<li><a href="<?php echo IUrl::creatUrl("/site/pro_list/cat/".$first['id']."");?>"><?php echo isset($first['name'])?$first['name']:"";?></a></li>
			<?php }?>
		</ul>

		
	</div>

	<div class="searchbar">
	<div class="searchbox">
			<form method='get' action='<?php echo IUrl::creatUrl("/");?>'>
				<input type='hidden' name='controller' value='site' />
				<input type='hidden' name='action' value='search_list' />
				<input class="text" type="text" name='word' autocomplete="off" value="" placeholder="请输入关键词..."  />
				<input class="btn" type="submit" value="搜索" />
			</form>
		</div>
		
	</div>

	<script type="text/javascript" charset="UTF-8" src="/iwebshop/runtime/_systemjs/artTemplate/artTemplate.js"></script><script type="text/javascript" charset="UTF-8" src="/iwebshop/runtime/_systemjs/artTemplate/artTemplate-plugin.js"></script>
<script type="text/javascript" charset="UTF-8" src="/iwebshop/runtime/_systemjs/jqueryZoom/jquery.imagezoom.min.js"></script><link rel="stylesheet" type="text/css" href="/iwebshop/runtime/_systemjs/jqueryZoom/imagezoom.css" />
<script type="text/javascript" charset="UTF-8" src="/iwebshop/runtime/_systemjs/jquerySlider/jquery.bxslider.min.js"></script><link rel="stylesheet" type="text/css" href="/iwebshop/runtime/_systemjs/jquerySlider/jquery.bxslider.css" />
<script type="text/javascript" src="<?php echo $this->getWebViewPath()."javascript/products.js";?>"></script>
<div class="wrapper clearfix">
	<div class="summary">

		<!--基本信息区域-->

		<div class="single-para ">
			 <h4><?php echo isset($name)?$name:"";?> </h4>	
				<li>
					<span class="f_r light_gray">商品编号：<label id="data_goodsNo"><?php echo $goods_no?$goods_no:$id;?></label></span>
				</li>						 
				<h5 class="item_price">￥<span class="f30" id="data_sellPrice"><?php echo isset($sell_price)?$sell_price:"";?></span></h5>							
				<p class="para">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Vivamus porttitor tincidunt elementum nisi a, euismod rhoncus urna. Curabitur scelerisque vulputate diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat </p>
				<a href="#" class="add-cart item_add">马上拥有</a>							
		</div>
		
	</div>

	<!--图片放大镜-->
	<div class="preview">
		<div class="pic_show" style="width:435px;height:435px;position:relative;z-index:5;padding-bottom:5px;">
			<img id="picShow" rel="" src="" />
		</div>

		<ul id="goodsPhotoList" class="pic_thumb">
			<?php foreach($photo as $key => $item){?>
			<li>
				<a href="javascript:void(0);" thumbimg="<?php echo IUrl::creatUrl("/pic/thumb/img/".$item['img']."/w/435/h/435");?>" sourceimg="<?php echo IUrl::creatUrl("")."".$item['img']."";?>">
					<img src='<?php echo IUrl::creatUrl("/pic/thumb/img/".$item['img']."/w/60/h/60");?>' width="60px" height="60px" />
				</a>
				
			</li>
			<?php }?>
		</ul>
	</div>
</div>


<script type="text/javascript">
//DOM加载结束后
$(function(){
	//初始化商品详情对象
	var productInstance = new productClass("<?php echo isset($id)?$id:"";?>","<?php echo isset($this->user['user_id'])?$this->user['user_id']:"";?>","<?php echo isset($promo)?$promo:"";?>","<?php echo isset($active_id)?$active_id:"";?>");

	//初始化商品轮换图
	$('#goodsPhotoList').bxSlider({
		infiniteLoop:false,
		hideControlOnEnd:true,
		controls:true,
		pager:false,
		minSlides: 5,
		maxSlides: 5,
		slideWidth: 72,
		slideMargin: 15,
		onSliderLoad:function(currentIndex){
			//默认初始化显示第一张
			$('[thumbimg]:eq('+currentIndex+')').trigger('click');

			//放大镜
			$("#picShow").imagezoom();
		}
	});

});
</script>


	<div class="help m_10">
		<div class="cont clearfix">
			<?php foreach(Api::run('getHelpCategoryFoot') as $key => $helpCat){?>
			<dl>
     			<dt><a href="<?php echo IUrl::creatUrl("/site/help_list/id/".$helpCat['id']."");?>"><?php echo isset($helpCat['name'])?$helpCat['name']:"";?></a></dt>
				<?php foreach(Api::run('getHelpListByCatidAll',array('#cat_id#',$helpCat['id'])) as $key => $item){?>
					<dd><a href="<?php echo IUrl::creatUrl("/site/help/id/".$item['id']."");?>"><?php echo isset($item['name'])?$item['name']:"";?></a></dd>
				<?php }?>
      		</dl>
      		<?php }?>
		</div>
	</div>
	<?php echo IFilter::stripSlash($this->_siteConfig->site_footer_code);?>
</div>

<script type='text/javascript'>
$(function()
{
	//搜索框填充默认数据
	$('input:text[name="word"]').val("<?php echo $this->word;?>");

	var allsortLateCall = new lateCall(200,function(){$('#div_allsort').show();});

	//商品分类
	$('.allsort').hover(
		function(){
			allsortLateCall.start();
		},
		function(){
			allsortLateCall.stop();
			$('#div_allsort').hide();
		}
	);
	$('.sortlist li').each(
		function(i)
		{
			$(this).hover(
				function(){
					$(this).addClass('hover');
					$('.sublist:eq('+i+')').show();
				},
				function(){
					$(this).removeClass('hover');
					$('.sublist:eq('+i+')').hide();
				}
			);
		}
	);

	//排行,浏览记录的图片
	$('#ranklist li').hover(
		function(){
			$(this).addClass('current');
		},
		function(){
			$(this).removeClass('current');
		}
	);
});
</script>
</body>
</html>
