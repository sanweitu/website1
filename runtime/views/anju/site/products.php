
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $this->_siteConfig->name;?></title>
	<link type="image/x-icon" href="<?php echo IUrl::creatUrl("")."favicon.ico";?>" rel="icon">
	<link href="<?php echo $this->getWebSkinPath()."css/bootstrap.css";?>" rel='stylesheet' type='text/css' />
	<!-- jQuery (necessary JavaScript plugins) -->
	<script type='text/javascript' src="<?php echo $this->getWebViewPath()."javascript/jquery-1.11.1.min.js";?>"></script>
	<!-- Custom Theme files -->
	<link href="<?php echo $this->getWebSkinPath()."css/style.css";?>" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="die shi" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script type="text/javascript" charset="UTF-8" src="/iwebshop/runtime/_systemjs/jquery/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" charset="UTF-8" src="/iwebshop/runtime/_systemjs/form/form.js"></script>
	<script type="text/javascript" charset="UTF-8" src="/iwebshop/runtime/_systemjs/autovalidate/validate.js"></script><link rel="stylesheet" type="text/css" href="/iwebshop/runtime/_systemjs/autovalidate/style.css" />
	<script type="text/javascript" charset="UTF-8" src="/iwebshop/runtime/_systemjs/artdialog/artDialog.js"></script><script type="text/javascript" charset="UTF-8" src="/iwebshop/runtime/_systemjs/artdialog/plugins/iframeTools.js"></script><link rel="stylesheet" type="text/css" href="/iwebshop/runtime/_systemjs/artdialog/skins/aero.css" />
	<script type="text/javascript" charset="UTF-8" src="/iwebshop/runtime/_systemjs/artTemplate/artTemplate.js"></script><script type="text/javascript" charset="UTF-8" src="/iwebshop/runtime/_systemjs/artTemplate/artTemplate-plugin.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Montserrat|Raleway:400,200,300,500,600,700,800,900,100' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
	<!-- start menu -->
	<link href="<?php echo $this->getWebSkinPath()."css/megamenu.css";?>" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="<?php echo $this->getWebViewPath()."javascript/megamenu.js";?>"></script>
	<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
	<script src="<?php echo $this->getWebViewPath()."javascript/menu_jquery.js";?>"></script>
	<script src="<?php echo $this->getWebViewPath()."javascript/simpleCart.min.js";?>"> </script>
	<script src="<?php echo $this->getWebViewPath()."javascript/responsiveslides.min.js";?>"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 1
      $("#slider1").responsiveSlides({
         auto: true,
		 nav: true,
		 speed: 500,
		 namespace: "callbacks",
      });
    });
  </script>
  
</head>
<body>
<!-- header -->
<div class="top_bg">
	<div class="container">
		<div class="header_top-sec">
			<div class="top_right">
				<ul>
				<li><a href="<?php echo IUrl::creatUrl("/site/index");?>">首页 </a></li>
				<?php foreach(Api::run('getGuideList') as $key => $item){?>
				<li><a href="<?php echo IUrl::creatUrl("".$item['link']."");?>"><?php echo isset($item['name'])?$item['name']:"";?><span> </span></a></li>
				<?php }?>
				</ul>
			</div>
			<div class="top_left">
				<ul>
					<li class="top_link">Email:<a href="295131283@qq.com">info(at)Funiture.com</a></li>|
					<li class="top_link"><?php if($this->user){?>
			<?php echo $this->user['username'];?>您好，欢迎您来到<?php echo $this->_siteConfig->name;?>购物！[<a href="<?php echo IUrl::creatUrl("/simple/logout");?>" class="reg">安全退出</a>]
			<?php }else{?>
			[<a href="<?php echo IUrl::creatUrl("/simple/login");?>">登录</a>|<a class="reg" href="<?php echo IUrl::creatUrl("/simple/reg");?>">注册</a>]
			<?php }?></li>|
						
					
				</ul>
				<div class="social">
					<ul>
						<li><a href="#"><i class="facebook"></i></a></li>
						<li><a href="#"><i class="twitter"></i></a></li>
						<li><a href="#"><i class="dribble"></i></a></li>	
						<li><a href="#"><i class="google"></i></a></li>										
					</ul>
				</div>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="header_top">
	 <div class="container ">
		 <div class="logo">
		 	<a href="index.php"><img src="<?php echo $this->getWebSkinPath()."images/front/logo.jpg";?>" alt="" height="60px"/></a>			 
		 </div>
		  <div class="clearfix"></div>	
	 </div>
</div>

<!------>
<div class="mega_nav">
	 <div class="container">
		 <div class="menu_sec">
		 <!-- start header menu -->
		 <ul class="megamenu skyblue">
			 <li class="active grid"><a class="color1" href="index.php">Home</a></li>
			 <?php foreach(Api::run('getCategoryListTop') as $key => $first){?>
				<li class="grid"><a class="color2" href="<?php echo IUrl::creatUrl("/site/pro_list/cat/".$first['id']."");?>"><?php echo isset($first['name'])?$first['name']:"";?></a>
				<div class="megapanel">
					<div class="row">
			
						<div class="col1">
							<div class="h_nav">
								<h4><a href="<?php echo IUrl::creatUrl("/site/pro_list/cat/".$first['id']."");?>"><?php echo isset($first['name'])?$first['name']:"";?></a></h4>
								<ul>
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
								</ul>	
							</div>							
						</div>
						<?php }?>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
									
			   </ul> 
			   <div class="search">
				 <form method='get' action='<?php echo IUrl::creatUrl("/");?>'>
					<input type='hidden' name='controller' value='site' />
					<input type='hidden' name='action' value='search_list' />
					<input class="text" type="text" name='word' autocomplete="off" value="" placeholder="Search..."  />
					<input type="submit" value="">
				</form>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	  </div>
</div>

	<script type="text/javascript" charset="UTF-8" src="/iwebshop/runtime/_systemjs/artTemplate/artTemplate.js"></script><script type="text/javascript" charset="UTF-8" src="/iwebshop/runtime/_systemjs/artTemplate/artTemplate-plugin.js"></script>
<script type="text/javascript" charset="UTF-8" src="/iwebshop/runtime/_systemjs/jqueryZoom/jquery.imagezoom.min.js"></script><link rel="stylesheet" type="text/css" href="/iwebshop/runtime/_systemjs/jqueryZoom/imagezoom.css" />
<script type="text/javascript" charset="UTF-8" src="/iwebshop/runtime/_systemjs/jquerySlider/jquery.bxslider.min.js"></script><link rel="stylesheet" type="text/css" href="/iwebshop/runtime/_systemjs/jquerySlider/jquery.bxslider.css" />
<!--etalage-->
<link rel="stylesheet" href="<?php echo $this->getWebSkinPath()."css/etalage.css";?>">
<script src="<?php echo $this->getWebViewPath()."javascript/jquery.etalage.min.js";?>"></script>

<script type="text/javascript" src="<?php echo $this->getWebViewPath()."javascript/products.js";?>"></script>

<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
</script>


<!-- //etalage-->
  
<div class="single-sec">
	 <div class="container">
		 <?php $breadGuide = goods_class::catRecursion($category);?>
		<ol class="breadcrumb">
			<li><a href="<?php echo IUrl::creatUrl("");?>">Home</a></li>
			<?php foreach($breadGuide as $key => $item){?>  <li class="active"><a href="<?php echo IUrl::creatUrl("/site/pro_list/cat/".$item['id']."");?>"><?php echo isset($item['name'])?$item['name']:"";?></a></li><?php }?>
		</ol>
		 <!-- start content -->	
			<div class="col-md-9 det">
				  <div class="single_left">
					 <div class="grid images_3_of_2">
						 <ul id="etalage">
						 <?php foreach($photo as $key => $item){?>
							<li>
								<a href="javascript:void(0);" thumbimg="<?php echo IUrl::creatUrl("/pic/thumb/img/".$item['img']."");?>" sourceimg="<?php echo IUrl::creatUrl("")."".$item['img']."";?>">
								<img class="etalage_source_image" src="<?php echo IUrl::creatUrl("/pic/thumb/img/".$item['img']."");?>"  />
								<img class="etalage_source_image" src="<?php echo IUrl::creatUrl("/pic/thumb/img/".$item['img']."");?>"   title="" />
								</a>

							</li>
							<?php }?>
						 </ul>
						 <div class="clearfix"></div>		
				      </div>
				  </div>
					
				<div class="single-right">
					
						 <h3><?php echo isset($name)?$name:"";?> </h3>
						 <div class="id"><h4>ID: <?php echo $goods_no?$goods_no:$id;?></h4></div>
						<div class='single-bottom1 content' style='border:0px;padding:3px; PADDING:0px; width:100%; height:180px; LINE-HEIGHT: 20px; OVERFLOW: auto;' >
							<h6>推荐理由：</h6>
							<p  class="prod-desc" ><?php echo isset($reason)?$reason:"";?></p>
							<?php if(isset($up_time) && $up_time){?>
							<li>发表于  <?php echo isset($up_time)?$up_time:"";?></li>
							<?php }?>
						 </div>	
					
					
				  
					 <?php if(($attribute)){?>
						<?php foreach($attribute as $key => $item){?>
						<li><?php echo isset($item['name'])?$item['name']:"";?>：<?php echo isset($item['attribute_value'])?$item['attribute_value']:"";?></li>
						<?php }?>
					<?php }?>
					
					  <div class="cost" style='height:70px'>
						 <div class="prdt-cost">
							 <ul>
								 
								 <a href="<?php echo isset($link)?$link:"";?>">￥<?php echo isset($sell_price)?$sell_price:"";?>  | GET NOW ></a>
								
							 </ul>
							 
						 </div>
					 </div>
						 <div class="clearfix"></div>
						 <div class="bshare-custom"><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到人人网" class="bshare-renren"></a><a title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到网易微博" class="bshare-neteasemb"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a><span class="BSHARE_COUNT bshare-share-count">0</span></div><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/button.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script><a class="bshareDiv" onclick="javascript:return false;"></a><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
					  
					  
					  
			
		
		
		     <div class="clearfix"></div>
		</div>
	  </div>
	     				
	  </div>
	  
</div>
<!---->

<div class="wrapper clearfix container_2">

	
	<!--滑动面tab标签-->
	<div class="main f_r" style="overflow:hidden">

		<div name="showBox">
			
			<!-- 网友讨论圈 start -->
			<div >
				<div class="title3">
					<span class="f_r f12 normal"><a class="comm_btn" name="discussButton">发表评论</a></span>
					<img src="<?php echo $this->getWebSkinPath()."images/front/discuss.gif";?>" width="18px" height="19px" />
					评论<span class="f12 normal">（共<b class="red2"><?php echo isset($discussion)?$discussion:"";?></b>记录）</span>
				</div>
				<div class="wrap_box no_wrap">
					<!--讨论内容列表-->
					<table width="100%" class="list_table">
						<colgroup>
							<col />
							<col width="150">
						</colgroup>

						<tbody id='discussBox'></tbody>
					</table>

					<!--讨论JS模板-->
					<script type='text/html' id='discussRowTemplate'>
					<tr>
						<td class="t_l discussion_td" style="border:none;">
							<span class="blue"><%=username%></span>
						</td>
						<td style="border:none;" class="t_r gray discussion_td"><%=time%></td>
					</tr>
					<tr><td class="t_l" colspan="2" style="padding:0 7px 0 13px;"><%=contents%></td></tr>
					</script>

					<!--讨论内容输入框-->
					<table class="form_table" style="display:none;" id="discussTable">
						<colgroup>
							<col width="80px">
							<col />
						</colgroup>

						<tbody>
							<tr>
								<th>讨论内容：</th>
								<td valign="top"><textarea id="discussContent" pattern="required" alt="请填写内容"></textarea></td>
							</tr>
							<tr>
								<th>验证码：</th>
								<td><input type='text' class='gray_s' name='captcha' pattern='^\w{5}$' alt='填写下面图片所示的字符' /><label>填写下面图片所示的字符</label></td>
							</tr>
							<tr class="low">
								<th></th>
								<td><img src='<?php echo IUrl::creatUrl("/site/getCaptcha");?>' id='captchaImg' /><span class="light_gray">看不清？<a class="link" href="javascript:changeCaptcha();">换一张</a></span></td>
							</tr>
							<tr>
								<td></td>
								<td><label class="btn"><input type="submit" value="发表" name="sendDiscussButton" /></label></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!-- 网友讨论圈 end -->
			
		</div>
	</div>
</div>
<script type="text/javascript">
//DOM加载结束后
$(function(){
	//初始化商品详情对象
	var productInstance = new productClass("<?php echo isset($id)?$id:"";?>","<?php echo isset($this->user['user_id'])?$this->user['user_id']:"";?>","<?php echo isset($promo)?$promo:"";?>","<?php echo isset($active_id)?$active_id:"";?>");
productInstance.discuss_ajax();
	
});
</script>

<!---->

<!---->

<div class="footer-content">
	 <div class="container">
		 <div class="ftr-grids">
		 <?php foreach(Api::run('getHelpCategoryFoot') as $key => $helpCat){?>
			 <div class="col-md-3 ftr-grid">
				 <h4><a href="<?php echo IUrl::creatUrl("/site/help_list/id/".$helpCat['id']."");?>"><?php echo isset($helpCat['name'])?$helpCat['name']:"";?></a></h4>
				 <ul>
				 <?php foreach(Api::run('getHelpListByCatidAll',array('#cat_id#',$helpCat['id'])) as $key => $item){?>
					 <li><a href="<?php echo IUrl::creatUrl("/site/help/id/".$item['id']."");?>"><?php echo isset($item['name'])?$item['name']:"";?></a></li>
					<?php }?>				 
				 </ul>
			 </div>
			<?php }?> 
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="footer">
	 <div class="container">	 
		 <div class="copywrite">
			 <p>Copyright © 2016 Furnyish Store All rights reserved | Design by <a href="http://shit.com">shit</a></p>
		 </div>			 
		 </div>
	 </div>
</div>
<!---->
<script type='text/javascript'>
$(function()
{
	//搜索框填充默认数据
	$('input:text[name="word"]').val("<?php echo $this->word;?>");
	
	var allsortLateCall = new lateCall(200,function(){$('#div_allsort').show();});
});
</script>
</body>
</html>