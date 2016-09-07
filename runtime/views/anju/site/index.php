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

	<script type="text/javascript" charset="UTF-8" src="/iwebshop/runtime/_systemjs/jquerySlider/jquery.bxslider.min.js"></script><link rel="stylesheet" type="text/css" href="/iwebshop/runtime/_systemjs/jquerySlider/jquery.bxslider.css" />

<div class="wrapper clearfix">

	<div class="main f_l">
		<?php if($this->index_slide){?>
		<ul class="bxslider">
			<?php foreach($this->index_slide as $key => $item){?>
			<li title="<?php echo isset($item['name'])?$item['name']:"";?>"><a href="http://www.baidu.com" target="_blank"><img src="<?php echo IUrl::creatUrl("/pic/thumb/img/".$item['img']."");?>"  title="<?php echo isset($item['name'])?$item['name']:"";?>" /></a></li>
			<?php }?>
		</ul>
		<?php }?>
	</div>
	
	<!--幻灯片 结束-->
</div>

<div class="wrapper clearfix">
	

	<div class="main f_l">

		<!--最新商品-->
		<div class="box yellow m_10">
			<div class="title2">
				<h2><img src="<?php echo $this->getWebSkinPath()."images/front/new_product.gif";?>" alt="最新商品" width="160" height="36" /></h2>
			</div>
			<div class="cont clearfix">
				<ul class="prolist">
					<?php foreach(Api::run('getCommendNew',8) as $key => $item){?>
					<?php $tmpId=$item['id'];?>
					<li style="overflow:hidden">
						<a href="<?php echo IUrl::creatUrl("/site/products/id/".$tmpId."");?>"><img src="<?php echo IUrl::creatUrl("/pic/thumb/img/".$item['img']."/w/175/h/175");?>" width="175" height="175" alt="<?php echo isset($item['name'])?$item['name']:"";?>" /></a>
						<p class="pro_title"><a title="<?php echo isset($item['name'])?$item['name']:"";?>" href="<?php echo IUrl::creatUrl("/site/products/id/".$tmpId."");?>"><?php echo isset($item['name'])?$item['name']:"";?></a></p>
						<p class="brown"><b>￥<?php echo isset($item['sell_price'])?$item['sell_price']:"";?></b></p>
						<p class="light_gray"><s>￥<?php echo isset($item['market_price'])?$item['market_price']:"";?></s></p>
					</li>
					<?php }?>
				</ul>
			</div>
		</div>
		<!--最新商品-->

		<!--首页推荐商品-->
		<?php foreach(Api::run('getCategoryListTop') as $key => $first){?>
		<div class="product-model" name="showGoods">
			<div class="title title3">
				<h2><a href="<?php echo IUrl::creatUrl("/site/pro_list/cat/".$first['id']."");?>"><strong><?php echo isset($first['name'])?$first['name']:"";?></strong></a></h2>
				<a class="more" href="<?php echo IUrl::creatUrl("/site/pro_list/cat/".$first['id']."");?>">更多商品...</a>
				<ul class="category">
					<?php foreach(Api::run('getCategoryByParentid',array('#parent_id#',$first['id'])) as $key => $second){?>
					<li><a href="<?php echo IUrl::creatUrl("/site/pro_list/cat/".$second['id']."");?>"><?php echo isset($second['name'])?$second['name']:"";?></a><span></span></li>
					<?php }?>
				</ul>
			</div>

			<div class="cont clearfix">
				<ul class="prolist">
					<?php foreach(Api::run('getCategoryExtendList',array('#categroy_id#',$first['id']),8) as $key => $item){?>
					<li style="overflow:hidden">
						<a href="<?php echo IUrl::creatUrl("/site/products/id/".$item['id']."");?>"><img src="<?php echo IUrl::creatUrl("/pic/thumb/img/".$item['img']."/w/175/h/175");?>" width="175" height="175" alt="<?php echo isset($item['name'])?$item['name']:"";?>" title="<?php echo isset($item['name'])?$item['name']:"";?>" /></a>
						<p class="pro_title"><a title="<?php echo isset($item['name'])?$item['name']:"";?>" href="<?php echo IUrl::creatUrl("/site/products/id/".$item['id']."");?>"><?php echo isset($item['name'])?$item['name']:"";?></a></p>
						<p class="brown"><b>￥<?php echo isset($item['sell_price'])?$item['sell_price']:"";?></b></p>
						<p class="light_gray"><s>￥<?php echo isset($item['market_price'])?$item['market_price']:"";?></s></p>
					</li>
					<?php }?>
				</ul>
			</div>
		</div>
		<?php }?>

		
	</div>
</div>

<script type='text/javascript'>
//dom载入完毕执行
jQuery(function()
{
	//幻灯片开启
	$('.bxslider').bxSlider({'mode':'fade','captions':true,'pager':false,'auto':true});

	//index 分类展示
	$('#index_category tr').hover(
		function(){
			$(this).addClass('current');
		},
		function(){
			$(this).removeClass('current');
		}
	);

	

	//首页商品变色
	var colorArray = ['green','yellow','purple','black'];
	$('div[name="showGoods"]').each(function(i)
	{
		$(this).addClass(colorArray[i%colorArray.length]);
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
