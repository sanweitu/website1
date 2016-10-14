
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

	
<div class="login_sec">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="index.html">Home</a></li>
		  <li class="active">Login</li>
		 </ol>
		 <h2>Login</h2>
		 <div class="col-md-6 log">			 
			 <p>Welcome, please enter the folling to continue.</p>
			 
			 <form action='<?php echo IUrl::creatUrl("/simple/login_act");?>' method='post'>
				<?php if($this->getError()){?>
				<tr><td colspan="2">
					<div class="prompt"><img src="<?php echo $this->getWebSkinPath()."images/front/error_s.gif";?>" width="16" height="15" /><?php echo $this->getError();?></div>
				</td></tr>
				<?php }?>
				 <h5>用户名/邮箱/手机：</h5>	
				 <input type="text" name="login_info" pattern='required' alt='填写用户名，邮箱，手机号'  />
				 <h5>密码：</h5>			
				 <input  type="password" name="password" pattern='^\S{6,32}$' alt='填写密码' />
				 <input type="submit" value="Login">
				  <a href="<?php echo IUrl::creatUrl("/simple/find_password");?>">忘记密码 ?</a>
			 </form>
					
		 </div>
		 <?php if(IReq::get('tourist') === null){?>
		  <div class="col-md-6 login-right">
			  	<h3>NEW REGISTRATION</h3>
				<p>您还不是<span class="orange"><?php echo $this->_siteConfig->name;?></span>用户</strong></p>
						<p>现在免费注册成为<?php echo $this->_siteConfig->name;?>商城用户，便能立即享受便宜又放心的购物乐趣。<a class="blue" href="<?php echo IUrl::creatUrl("index.php");?>">网站首页>></a></p>
				<a class="acount-btn" href="<?php echo IUrl::creatUrl("/simple/reg");?>">注册新用户</a>
		 </div>
		 <?php }else{?>
		 <p class="mt_40 f_r"><a class="next_step" href="javascript:next_step();">下一步</a></p>
		 <?php }?>
		 <div class="clearfix"></div>
		 
			
	 </div>
</div>
<!---->


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