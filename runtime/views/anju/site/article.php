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
</head>
<body class="index">
<div class="container">
	<div class="header">
		<ul class="shortcut">
			<li class="first"><a href="<?php echo IUrl::creatUrl("/ucenter/index");?>">我的账户</a></li>
			<li class='last'><a href="<?php echo IUrl::creatUrl("/site/help_list");?>">使用帮助1</a></li>
		</ul>
		<p class="loginfo">
			<?php if($this->user){?>
			<?php echo $this->user['username'];?>您好，欢迎您来到<?php echo $this->_siteConfig->name;?>购物！[<a href="<?php echo IUrl::creatUrl("/simple/logout");?>" class="reg">安全退出</a>]
			<?php }else{?>
			[<a href="<?php echo IUrl::creatUrl("/simple/login");?>">登录</a><a class="reg" href="<?php echo IUrl::creatUrl("/simple/reg");?>">免费注册</a>]
			<?php }?>
		</p>
	</div>
	<div class="navbar">
		<ul>
			<li><a href="<?php echo IUrl::creatUrl("/site/index");?>">首页</a></li>
			<?php foreach(Api::run('getGuideList') as $key => $item){?>
			<li><a href="<?php echo IUrl::creatUrl("".$item['link']."");?>"><?php echo isset($item['name'])?$item['name']:"";?><span> </span></a></li>
			<?php }?>
		</ul>

		
	</div>

	<div class="searchbar">
		<div class="allsort">
			<a href="javascript:void(0);">全部商品分类</a>

			<!--总的商品分类-开始-->
			<ul class="sortlist" id='div_allsort' style='display:none'>
				<?php foreach(Api::run('getCategoryListTop') as $key => $first){?>
				<li>
					<h2><a href="<?php echo IUrl::creatUrl("/site/pro_list/cat/".$first['id']."");?>"><?php echo isset($first['name'])?$first['name']:"";?></a></h2>

					<!--商品分类 浮动div 开始-->
					<div class="sublist" style='display:none'>
						<div class="items">
							<strong>选择分类</strong>
							<?php foreach(Api::run('getCategoryByParentid',array('#parent_id#',$first['id'])) as $key => $second){?>
							<dl class="category selected">
								<dt>
									<a href="<?php echo IUrl::creatUrl("/site/pro_list/cat/".$second['id']."");?>"><?php echo isset($second['name'])?$second['name']:"";?></a>
								</dt>

								<dd>
									<?php foreach(Api::run('getCategoryByParentid',array('#parent_id#',$second['id'])) as $key => $third){?>
									<a href="<?php echo IUrl::creatUrl("/site/pro_list/cat/".$third['id']."");?>"><?php echo isset($third['name'])?$third['name']:"";?></a>|
									<?php }?>
								</dd>
							</dl>
							<?php }?>
						</div>
					</div>
					<!--商品分类 浮动div 结束-->
				</li>
				<?php }?>
			</ul>
			<!--总的商品分类-结束-->
		</div>

		<div class="searchbox">
			<form method='get' action='<?php echo IUrl::creatUrl("/");?>'>
				<input type='hidden' name='controller' value='site' />
				<input type='hidden' name='action' value='search_list' />
				<input class="text" type="text" name='word' autocomplete="off" value="" placeholder="请输入关键词..."  />
				<input class="btn" type="submit" value="商品搜索" />
			</form>
		</div>

		<div class="hotwords">热门搜索：
			<?php foreach(Api::run('getKeywordList') as $key => $item){?>
			<?php $tmpWord = urlencode($item['word']);?>
			<a href="<?php echo IUrl::creatUrl("/site/search_list/word/".$tmpWord."");?>"><?php echo isset($item['word'])?$item['word']:"";?></a>
			<?php }?>
		</div>
	</div>

	<div class="position"> <span>您当前的位置：</span> <a href="<?php echo IUrl::creatUrl("");?>">首页</a> » <?php if($catRow){?><?php echo isset($catRow['name'])?$catRow['name']:"";?><?php }else{?>最新资讯<?php }?> </div>
<div class="wrapper clearfix container_2">
	<div class="sidebar f_l">
		<div class="box m_10">
			<div class="title">热卖商品</div>
			<div class="content">
				<ul class="ranklist">
					<?php foreach(Api::run('getCommendHot',5) as $key => $item){?>
					<li class='current'><a href="<?php echo IUrl::creatUrl("/site/products/id/".$item['id']."");?>"><img src="<?php echo IUrl::creatUrl("/pic/thumb/img/".$item['img']."/w/58/h/58");?>" width="58" height="58" alt="<?php echo isset($item['name'])?$item['name']:"";?>" /></a><a title="<?php echo isset($item['name'])?$item['name']:"";?>" class="p_name" href="<?php echo IUrl::creatUrl("/site/products/id/".$item['id']."");?>"><?php echo isset($item['name'])?$item['name']:"";?></a><b>￥<?php echo isset($item['sell_price'])?$item['sell_price']:"";?></b></li>
					<?php }?>
				</ul>
			</div>
		</div>

		<div class="box m_10">
			<div class="title">资讯分类</div>
			<div class="content">
				<ul class="ranklist">
					<?php foreach(Api::run('getArticleCategoryList',10) as $key => $item){?>
					<li><a title="<?php echo isset($item['name'])?$item['name']:"";?>" href="<?php echo IUrl::creatUrl("/site/article/id/".$item['id']."");?>"><?php echo isset($item['name'])?$item['name']:"";?></a></li>
					<?php }?>
				</ul>
			</div>
		</div>
	</div>
	<div class="main f_r">
		<div class="box m_10">
			<div class="title2"><?php if($catRow){?><?php echo isset($catRow['name'])?$catRow['name']:"";?><?php }else{?>最新资讯<?php }?></div>
			<div class="cont">
				<h5 class="list_title gray"><span class="f_l">标题</span>发表时间</li></h5>
				<ul class="newslist">
				    <?php foreach($queryArticle->find() as $key => $item){?>
					<li><a href="<?php echo IUrl::creatUrl("/site/article_detail/id/".$item['id']."");?>"><?php echo isset($item['title'])?$item['title']:"";?></a><span>(<?php echo isset($item['create_time'])?$item['create_time']:"";?>)</span></li>
					<?php }?>
				</ul>
				<?php echo $queryArticle->getPageBar();?>
			</div>
		</div>
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
