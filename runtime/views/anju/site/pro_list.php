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
	
	<link href="<?php echo $this->getWebSkinPath()."/bootstrap.css";?>" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo $this->getWebSkinPath()."/docs.min.css";?>" rel="stylesheet">
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
			<li class="grid"><a href="<?php echo IUrl::creatUrl("/site/pro_list/cat/".$first['id']."");?>"><?php echo isset($first['name'])?$first['name']:"";?></a>
				<div class="mepanel">
					<div class="row">
						<div class="col1 me-one">
							<h4>选择分类</h4>
							<?php foreach(Api::run('getCategoryByParentid',array('#parent_id#',$first['id'])) as $key => $second){?>
							<ul class="category selected">
								<li>
									<a href="<?php echo IUrl::creatUrl("/site/pro_list/cat/".$second['id']."");?>"><?php echo isset($second['name'])?$second['name']:"";?></a>
								</li>

								<dd>
									<?php foreach(Api::run('getCategoryByParentid',array('#parent_id#',$second['id'])) as $key => $third){?>
									<a href="<?php echo IUrl::creatUrl("/site/pro_list/cat/".$third['id']."");?>"><?php echo isset($third['name'])?$third['name']:"";?></a>|
									<?php }?>
								</dd>
							</ul>
							<?php }?>
						</div>
					</div>
				</div>
			</li>
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

	<?php $breadGuide = goods_class::catRecursion($this->catId)?>
<?php $goodsObj = search_goods::find(array('category_extend' => $this->childId),21);$resultData = $goodsObj->find()?>
<div class="position">
	<span>您当前的位置：</span>
	<a href="<?php echo IUrl::creatUrl("");?>">首页</a><?php foreach($breadGuide as $key => $item){?> » <a href="<?php echo IUrl::creatUrl("/site/pro_list/cat/".$item['id']."");?>"><?php echo isset($item['name'])?$item['name']:"";?></a><?php }?>
</div>

<div class="wrapper clearfix container_2">
	<div class="sidebar f_l">
		<!--侧边栏分类-->
		<?php $catSide = goods_class::catTree($this->catId)?>
		<?php if($catSide){?>
		<div class="box_2 m_10">
			<div class="title"><?php echo isset($this->catRow['name'])?$this->catRow['name']:"";?></div>
			<div class="content">
				<?php foreach($catSide as $key => $first){?>
				<dl class="clearfix">
					<dt><a href="<?php echo IUrl::creatUrl("/site/pro_list/cat/".$first['id']."");?>"><?php echo isset($first['name'])?$first['name']:"";?></a></dt>
					<?php foreach(Api::run('getCategoryByParentid',array('#parent_id#',$first['id'])) as $key => $second){?>
					<dd><a href="<?php echo IUrl::creatUrl("/site/pro_list/cat/".$second['id']."");?>"><?php echo isset($second['name'])?$second['name']:"";?></a></dd>
					<?php }?>
				</dl>
				<?php }?>
			</div>
		</div>
		<?php }?>
		<!--侧边栏分类-->

		<!--销售排行-->
		<div class="box m_10">
			<div class="title">销售排行榜</div>
			<div class="content">
				<ul class="ranklist" id='ranklist'>
					<?php foreach(Api::run('getCategoryExtendListByCategoryid',array('#categroy_id#',$this->childId)) as $key => $item){?>
				  	<li>
				  		<span><?php echo intval($key+1);?></span>
				  		<a href="<?php echo IUrl::creatUrl("/site/products/id/".$item['id']."");?>" target="_blank">
				  			<img src="<?php echo IUrl::creatUrl("/pic/thumb/img/".$item['img']."/w/60/h/60");?>" width="60" height="60" alt="<?php echo isset($item['name'])?$item['name']:"";?>" />
				  		</a>
				  		<a title="<?php echo isset($item['name'])?$item['name']:"";?>" class="p_name" href="<?php echo IUrl::creatUrl("/site/products/id/".$item['id']."");?>"><?php echo isset($item['name'])?$item['name']:"";?></a>
				  		<b>￥<?php echo isset($item['sell_price'])?$item['sell_price']:"";?></b>
				  	</li>
				  	<?php }?>
				</ul>
			</div>
		</div>
		<!--销售排行-->
	</div>

	<div class="main f_r">
		<!--推荐商品-->
		<?php $pro_list = Api::run('getCategoryExtendByCommendid',array('#childId#',$this->childId))?>
	  	<?php if($pro_list){?>
		<div class="brown_box m_10 clearfix">
			<p class="caption"><span>推荐</span></p>

			<ul class="prolist">
				<?php foreach($pro_list as $key => $item){?>
				<li>
					<a class="pic" href="<?php echo IUrl::creatUrl("/site/products/id/".$item['id']."");?>"><img src="<?php echo IUrl::creatUrl("/pic/thumb/img/".$item['img']."/w/85/h/85");?>" alt="<?php echo isset($item['name'])?$item['name']:"";?>" height="85px" width="85px"></a>
					<p class="pro_title"><a class="blue" href="<?php echo IUrl::creatUrl("/site/products/id/".$item['id']."");?>"><?php echo isset($item['name'])?$item['name']:"";?></a><span class="gray"><?php echo isset($item['description'])?$item['description']:"";?></span></p>
					<p><b>￥<?php echo isset($item['sell_price'])?$item['sell_price']:"";?></b> <s>￥<?php echo isset($item['market_price'])?$item['market_price']:"";?></s></p>
				</li>
				<?php }?>
			</ul>
		</div>
		<?php }?>
		<!--推荐商品-->

		<!--商品条件筛选-->
		<?php require(ITag::createRuntime("_goods_list_filter"));?>

		<?php if($resultData){?>
		<ul class="display_list clearfix m_10">
			<?php foreach($resultData as $key => $item){?>
			<li name="goodsItems" class="clearfix win">
				<div class="pic">
					<a title="<?php echo isset($item['name'])?$item['name']:"";?>" href="<?php echo IUrl::creatUrl("/site/products/id/".$item['id']."");?>"><img src="<?php echo IUrl::creatUrl("/pic/thumb/img/".$item['img']."/w/200/h/200");?>" width="200px" height="200px" alt="<?php echo isset($item['name'])?$item['name']:"";?>" title="<?php echo isset($item['name'])?$item['name']:"";?>" name="goodsImage" /></a>
				</div>
				<h3 class="title"><a title="<?php echo isset($item['name'])?$item['name']:"";?>" class="p_name" href="<?php echo IUrl::creatUrl("/site/products/id/".$item['id']."");?>"><?php echo isset($item['name'])?$item['name']:"";?></a><span>总销量：<?php echo isset($item['sale'])?$item['sale']:"";?><a class="blue" href="<?php echo IUrl::creatUrl("/site/comments_list/id/".$item['id']."");?>">( <?php echo isset($item['comments'])?$item['comments']:"";?>人评论 )</a></span><span class="grade-star g-star<?php echo Common::gradeWidth($item['grade'],$item['comments']);?>"></span></h3>
				<div class="handle">
					<label class="btn_gray_m"><img src="<?php echo $this->getWebSkinPath()."images/front/ucenter/shopping.gif";?>" width="15" height="15" /><input type="button" value="加入购物车" onclick="joinCart_list(<?php echo isset($item['id'])?$item['id']:"";?>);"></label>
					<label class="btn_gray_m"><img src="<?php echo $this->getWebSkinPath()."images/front/ucenter/favorites.gif";?>" width="15" height="14" /><input type="button" value="收藏" onclick="favorite_add_ajax('<?php echo isset($item['id'])?$item['id']:"";?>',this);"></label>
				</div>
				<div class="price">￥<?php echo isset($item['sell_price'])?$item['sell_price']:"";?><s>￥<?php echo isset($item['market_price'])?$item['market_price']:"";?></s></div>
			</li>
			<?php }?>
		</ul>
		<?php echo $goodsObj->getPageBar();?>

		<?php }else{?>
		<p class="display_list mt_10" style='margin-top:50px;margin-bottom:50px'>
			<strong class="gray f14">对不起，没有找到相关商品</strong>
		</p>
		<?php }?>
		<!--商品列表展示-->
	</div>
</div>

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
