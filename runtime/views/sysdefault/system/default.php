<?php $menuData=menu::init($this->admin['role_id']);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>后台管理</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="<?php echo $this->getWebSkinPath()."css/admin.css";?>" />
	<meta name="robots" content="noindex,nofollow">
	<link rel="shortcut icon" href="<?php echo IUrl::creatUrl("")."favicon.ico";?>" />
	<script type="text/javascript" charset="UTF-8" src="/iwebshop/runtime/_systemjs/jquery/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" charset="UTF-8" src="/iwebshop/runtime/_systemjs/artdialog/artDialog.js"></script><script type="text/javascript" charset="UTF-8" src="/iwebshop/runtime/_systemjs/artdialog/plugins/iframeTools.js"></script><link rel="stylesheet" type="text/css" href="/iwebshop/runtime/_systemjs/artdialog/skins/aero.css" />
	<script type="text/javascript" charset="UTF-8" src="/iwebshop/runtime/_systemjs/form/form.js"></script>
	<script type="text/javascript" charset="UTF-8" src="/iwebshop/runtime/_systemjs/autovalidate/validate.js"></script><link rel="stylesheet" type="text/css" href="/iwebshop/runtime/_systemjs/autovalidate/style.css" />
	<script type="text/javascript" charset="UTF-8" src="/iwebshop/runtime/_systemjs/artTemplate/artTemplate.js"></script><script type="text/javascript" charset="UTF-8" src="/iwebshop/runtime/_systemjs/artTemplate/artTemplate-plugin.js"></script>
	<script type='text/javascript' src="<?php echo $this->getWebViewPath()."javascript/common.js";?>"></script>
	<script type='text/javascript' src="<?php echo $this->getWebViewPath()."javascript/admin.js";?>"></script>
</head>
<body>
	<div class="container">
		<div id="header">
			<div class="logo">
				<a href="<?php echo IUrl::creatUrl("/system/default");?>"><img src="<?php echo $this->getWebSkinPath()."images/admin/logo.png";?>" width="303" height="43" /></a>
			</div>
			<div id="menu">
				<ul name="topMenu">
					<?php foreach(menu::getTopMenu($menuData) as $key => $item){?>
					<li>
						<a hidefocus="true" href="<?php echo IUrl::creatUrl("".$item."");?>"><?php echo isset($key)?$key:"";?></a>
					</li>
					<?php }?>
				</ul>
			</div>
			<p><a href="<?php echo IUrl::creatUrl("/systemadmin/logout");?>">退出管理</a> <a href="<?php echo IUrl::creatUrl("/system/admin_repwd");?>">修改密码</a> <a href="<?php echo IUrl::creatUrl("/system/default");?>">后台首页</a> <a href="<?php echo IUrl::creatUrl("webroot:index");?>" target='_blank'>商城首页</a> <span>您好 <label class='bold'><?php echo isset($this->admin['admin_name'])?$this->admin['admin_name']:"";?></label>，当前身份 <label class='bold'><?php echo isset($this->admin['admin_role_name'])?$this->admin['admin_role_name']:"";?></label></span></p>
		</div>
		<div id="info_bar">
			<span class="nav_sec">
			<?php $adminId = $this->admin['admin_id']?>
			<?php $query = new IQuery("quick_naviga");$query->where = "admin_id = $adminId and is_del = 0";$items = $query->find(); foreach($items as $key => $item){?>
			<a href="<?php echo isset($item['url'])?$item['url']:"";?>" class="selected"><?php echo isset($item['naviga_name'])?$item['naviga_name']:"";?></a>
			<?php }?>
			</span>
		</div>

		<div id="admin_left">
			<ul class="submenu">
				<?php $leftMenu=menu::get($menuData,IWeb::$app->getController()->getId().'/'.IWeb::$app->getController()->getAction()->getId())?>
				<?php foreach(current($leftMenu) as $key => $item){?>
				<li>
					<span><?php echo isset($key)?$key:"";?></span>
					<ul name="leftMenu">
						<?php foreach($item as $leftKey => $leftValue){?>
						<li><a href="<?php echo IUrl::creatUrl("".$leftKey."");?>"><?php echo isset($leftValue)?$leftValue:"";?></a></li>
						<?php }?>
					</ul>
				</li>
				<?php }?>
			</ul>
			<div id="copyright"></div>
		</div>

		<div id="admin_right">
			<?php $store_num_warning = $this->_siteConfig->store_num_warning ? $this->_siteConfig->store_num_warning : 20?>
<form action="<?php echo IUrl::creatUrl("/");?>" method="get" name="storeNumWarning">
	<input type='hidden' name='controller' value='goods' />
	<input type='hidden' name='action' value='goods_list' />
	<input type='hidden' name='search[store_nums]' value='go.store_nums < <?php echo isset($store_num_warning)?$store_num_warning:"";?>' />
</form>

<div class="content_box" style="border:none">
	<div class="content">
<?php $safeInstance = new safeStrategy();$checkResult = $safeInstance->check();?>

		<table width="31%" cellspacing="0" cellpadding="5" class="border_table_org" style="float:left">
			<thead>
				<tr><th>系统信息</th></tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<table class="list_table2" width="100%">
							<colgroup>
								<col width="80px" />
								<col />
							</colgroup>
							<tbody>
								
								<tr><th>当前版本号</th><td><?php echo Common::getLocalVersion();?></td></tr>
								<tr><th>最新版本号</th><td>...</td></tr>
								<tr><th>官网地址</th><td><a href='http://www.dieshi.com' target='_blank'><b class='red3'>www.dieshi.com</b></a></td></tr>
								<tr><th>服务器软件</th><td><?php echo isset($_SERVER['SERVER_SOFTWARE'])?$_SERVER['SERVER_SOFTWARE']:"";?></td></tr>
								<tr><th>附件上传容量</th><td><?php echo IUpload::getMaxSize();?></td></tr>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>

		<table width="32%" cellspacing="0" cellpadding="5" class="border_table_org" style="float:left">
			<thead>
				<tr><th>基础统计</th></tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<table class="list_table2" width="100%">
							<colgroup>
								<col width="80px" />
								<col />
							</colgroup>
							<tbody>
								<tr><th>商家数量</th><td><?php $query = new IQuery("seller");$query->fields = "count(*) as amount";$items = $query->find(); foreach($items as $key => $item){?><a href="<?php echo IUrl::creatUrl("/member/seller_list");?>"><b class="f14 red3"><?php echo isset($item['amount'])?$item['amount']:"";?></b> 家</a><?php }?></td></tr>
							
								<tr><th>注册用户</th><td><?php $query = new IQuery("user");$query->fields = "count(id) as countNums";$items = $query->find(); foreach($items as $key => $item){?><a href="<?php echo IUrl::creatUrl("/member/member_list");?>"><b class="f14 red3"><?php echo isset($item['countNums'])?$item['countNums']:"";?></b> 个</a><?php }?></td></tr>
								<tr><th>产品数量</th><td><a href="<?php echo IUrl::creatUrl("/goods/goods_list");?>"><b class="f14 red3"><?php echo statistics::goodsCount();?></b> 个</a></td></tr>
								<tr><th>品牌数量</th><td><?php $query = new IQuery("brand");$query->fields = "count(id) as countNums";$items = $query->find(); foreach($items as $key => $item){?><a href="<?php echo IUrl::creatUrl("/brand/brand_list");?>"><b class="f14 red3"><?php echo isset($item['countNums'])?$item['countNums']:"";?></b> 个</a><?php }?></td></tr>
								
								
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>

		<table width="33%" cellspacing="0" cellpadding="5" class="border_table_org" style="float:left">
			<thead>
				<tr><th>待处理</th></tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<table class="list_table2" width="100%">
							<colgroup>
								<col width="80px" />
								<col />
							</colgroup>

							<tbody>
								<tr><th>待回复评论</th><td><a href="<?php echo IUrl::creatUrl("/comment/comment_list/search[c.recomment_time]/=0");?>"><b class="red3 f14"><?php echo statistics::commentCount();?></b></a> 个</td></tr>
								<tr><th>待回复建议</th><td><?php $query = new IQuery("suggestion");$query->where = "re_time is null";$query->fields = "count(*) as countNums";$items = $query->find(); foreach($items as $key => $item){?><a href='<?php echo IUrl::creatUrl("/comment/suggestion_list/search[a.re_time=]/0");?>'><b class="red3 f14"><?php echo isset($item['countNums'])?$item['countNums']:"";?></b></a><?php }?> 个</td></tr>
								<tr><th>待回复咨询</th><td><a href="<?php echo IUrl::creatUrl("/comment/refer_list/search[r.status=]/0");?>"><b class="red3 f14"><?php echo statistics::referWaitCount();?></b></a> 个</td></tr>

								<tr><th>待审商品</th><td><?php $query = new IQuery("goods");$query->fields = "count(id) as countNums";$query->where = "is_del = 3";$items = $query->find(); foreach($items as $key => $item){?><a href="<?php echo IUrl::creatUrl("/goods/goods_list/search[is_del]/3");?>"><b class="red3 f14"><?php echo isset($item['countNums'])?$item['countNums']:"";?></b></a> 个<?php }?></td></tr>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>

	</div>
</div>
		</div>
	</div>

	<script type='text/javascript'>
	//隔行换色
	$(".list_table tr:nth-child(even)").addClass('even');
	$(".list_table tr").hover(
		function () {
			$(this).addClass("sel");
		},
		function () {
			$(this).removeClass("sel");
		}
	);

	//按钮高亮
	var topItem  = "<?php echo key($leftMenu);?>";
	$("ul[name='topMenu']>li:contains('"+topItem+"')").addClass("selected");

	var leftItem = "<?php echo IUrl::getUri();?>";
	$("ul[name='leftMenu']>li a[href^='"+leftItem+"']").parent().addClass("selected");
	</script>
</body>
</html>
