<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $this->_siteConfig->name;?></title>
	<link type="image/x-icon" href="<?php echo IUrl::creatUrl("")."favicon.ico";?>" rel="icon">
	<link rel="stylesheet" href="<?php echo $this->getWebSkinPath()."css/index.css";?>" />
	<link href="<?php echo $this->getWebSkinPath()."/bootstrap.css";?>" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo $this->getWebSkinPath()."/docs.min.css";?>" rel="stylesheet">
	<!--link rel="stylesheet" href="<?php echo $this->getWebSkinPath()."css/index.css";?>" /-->
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
<script src="<?php echo $this->getWebViewPath()."javascript/responsiveslides.min.js";?>"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: false,
      });
    });
  </script>
  
<div class="header-top">
	<div class="header-bottom">
		<div class="logo">
			<h1><a href="index.html">Lighting</a></h1>					
		</div>
	</div>

	 <div class="top-nav">
		<ul class="memenu skyblue"><li class="active"><a href="index.html">Home</a></li>
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
</div>
	<!--div class="searchbar">
		<p class="loginfo">
			<?php if($this->user){?>
			<?php echo $this->user['username'];?>您好，欢迎您来到<?php echo $this->_siteConfig->name;?>购物！[<a href="<?php echo IUrl::creatUrl("/simple/logout");?>" class="reg">安全退出</a>]
			<?php }else{?>
			[<a href="<?php echo IUrl::creatUrl("/simple/login.html");?>">登录</a>|<a class="reg" href="<?php echo IUrl::creatUrl("/simple/reg");?>">注册</a>]
			<?php }?>
		</p>
		
	</div-->
	<div class="position"> <span>您当前的位置：</span> <a href="<?php echo IUrl::creatUrl("");?>"> 首页</a> » <a href="<?php echo IUrl::creatUrl("/site/help_list/id/".$this->cat_row['id']."");?>"><?php echo isset($this->cat_row['name'])?$this->cat_row['name']:"";?></a> </div>
<div class="container_2 wrapper clearfix">
	<div class="help_c sidebar f_l">
		<?php foreach(Api::run('getHelpCategoryLeft',10) as $key => $item){?>
		<div class="hc_title"><strong><?php echo isset($item['name'])?$item['name']:"";?></strong></div>
		<ul class="list m_10">
			<?php foreach(Api::run('getHelpListByCatidAll',array('#cat_id#',$item['id'])) as $key => $help_row){?>
			<li><a href="<?php echo IUrl::creatUrl("/site/help/id/".$help_row['id']."");?>"><?php echo isset($help_row['name'])?$help_row['name']:"";?></a></li>
			<?php }?>
		</ul>
		<?php }?>
	</div>
	<div class="main f_r">
		<div class="box"><div class="hc_title"><?php echo isset($this->help_row['name'])?$this->help_row['name']:"";?></div></div>
		<div class="c_box">
			<div class="textcontent">
				<?php echo isset($this->help_row['content'])?$this->help_row['content']:"";?>
			</div>
			<a class="toindex f_r" href="<?php echo IUrl::creatUrl("");?>">返回首页</a>
		</div>
	</div>
</div>


	<?php echo IFilter::stripSlash($this->_siteConfig->site_footer_code);?>


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
