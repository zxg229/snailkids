<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	
<frameset rows="50px,*" border="0" frameborder="0" framespacing="0">
	<frame src="/bendi/thinkmuyin/index.php/Admin/Index/top" noresize="noresize" marginwidth="0px" marginheight="0px" name="top">
	<frameset cols="230px,*" border="0" frameborder="0" framespacing="0">
		<frame src="/bendi/thinkmuyin/index.php/Admin/Index/left" noresize="noresize" marginwidth="0px" marginheight="0px" name="left">
		<frame src="/bendi/thinkmuyin/index.php/Admin/Welcome/welcome" noresize="noresize" marginwidth="0px" marginheight="0px" name="right">
	</frameset>
	
	<noframes><body>您的浏览器无法处理框架！</body></noframes>
</frameset>

</html>
	
	
	
	
<!--<body>
	
	
	
<div class="container-fluid">
	<div class="row">
		
		<div class="col-xs-2 sk_col" >
			<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>Left</title>
    <!--<link href="<?php echo (ADMIN_PUBLIC_CSS); ?>bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" type="text/css" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
    <link href="<?php echo (ADMIN_PUBLIC_CSS); ?>sk_common.css" rel="stylesheet">
    <script src="<?php echo (ADMIN_PUBLIC_JS); ?>jquery-2.2.4.min.js"></script>
    <script src="<?php echo (ADMIN_PUBLIC_JS); ?>bootstrap.min.js"></script>
	<script type="text/javascript">
		var arr = new Array("collapseArea");
		var arr2 = new Array("collapseLinkArea","collapseLinkUser","collapseLinkTrailer","collapseLinkPhoto","collapseLinkVideo","collapseLinkOrder");
//		var collapseLinkId;
//		$(document).ready(function(){
//			var collapseIn = $("#collapseIn").html();
//			if(collapseIn != "" && collapseIn != null){
//				setCollapse();
//				setCollapseLink(collapseLinkId);
//			}
//		});
//		function setCollapse(){
//			for(var i=0;i<arr.length;i++){
//				if(arr[i] == a){
//					$("#"+arr[i]).addClass("in");
//					collapseLinkId = arr2[i];
//				}
//				else{
//					$("#"+arr[i]).removeClass("in");
//				}
//			}
//		}
		function setCollapseLink(id){
			for(var i=0;i<arr2.length;i++){
				if(arr2[i] == id){
					$("#"+arr2[i]).removeClass("sk_left_a");
					$("#"+arr2[i]).addClass("sk_left_a_choice");
				}
				else{
					$("#"+arr2[i]).removeClass("sk_left_a_choice");
					$("#"+arr2[i]).addClass("sk_left_a");
				}
			}
		}
	</script>
</head>

<body>

<!--<span style="display: none;" id="collapseIn"><?php echo ($collapseIn); ?></span>-->

<div class="container-fluid sk_left" style="padding-bottom: 10px;">
	<div class="row" style="padding: 10px;">
		<div class="col-xs-3 sk_col">
			<img src="<?php echo (ADMIN_PUBLIC_IMGS); ?>default_user_icon.jpg" class="img-responsive" style="border-radius: 50%;"/>
		</div>
		<div class="col-xs-1 sk_col"></div>
		<div class="col-xs-8 sk_col" style=" padding-top:10px; color: #E9FFFF;">
			<div style="font-size: 12px;">Administrator:&nbsp;<?php echo (session('SNAILKIDS_ADMIN_REALNAME')); ?></div>
			<div style=""><span class="glyphicon glyphicon-ok-sign" style="color: #3C763D;"></span>&nbsp;&nbsp;Online</div>
		</div>
	</div>
	
	<div style="background-color: #1A2226; height: 37px; line-height: 37px; padding-left: 10px; color: #4B645C;">MAIN NAVIGATION</div>
	
	<div class="panel-group sk_pmb" id="accordion">

		<div class="panel panel-default sk_pmb">
			<div class="panel-heading sk_pmb sk_left">
				<div class="sk_left_nav">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseArea" id="collapseLinkArea" class="sk_left_a" onclick="setCollapseLink('collapseLinkArea');">
						<span class="glyphicon glyphicon-map-marker"></span>&nbsp;&nbsp;地区库&nbsp;&nbsp;<small style="color: #999999;">Area</small>
					</a>
				</div>
			</div>
			<div id="collapseArea" class="panel-collapse collapse">
		        <a class="sk_left_subnav_a" href="/bendi/thinkmuyin/index.php/Admin/Province/index" target="right"><span class="glyphicon glyphicon-menu-right"></span>&nbsp;&nbsp;省份&nbsp;&nbsp;<small style="color: #999999;">Province</small></a>
		        <a class="sk_left_subnav_a" href="/bendi/thinkmuyin/index.php/Admin/City/index" target="right"><span class="glyphicon glyphicon-menu-right"></span>&nbsp;&nbsp;城市&nbsp;&nbsp;<small style="color: #999999;">City</small></a>
		        <a class="sk_left_subnav_a" href="/bendi/thinkmuyin/index.php/Admin/Area/district" target="right"><span class="glyphicon glyphicon-menu-right"></span>&nbsp;&nbsp;区县&nbsp;&nbsp;<small style="color: #999999;">District</small></a>
    		</div>
		</div>
		
		<div class="panel panel-default sk_pmb">
			<div class="panel-heading sk_pmb sk_left">
				<div class="sk_left_nav">
					<a href="/bendi/thinkmuyin/index.php/Admin/User/index" target="right" id="collapseLinkUser" class="sk_left_a" onclick="setCollapseLink('collapseLinkUser');">
						<span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;用户管理&nbsp;&nbsp;<small style="color: #999999;">User</small>
					</a>
				</div>
			</div>
		</div>

		<div class="panel panel-default sk_pmb">
			<div class="panel-heading sk_pmb sk_left">
				<div class="sk_left_nav">
					<a href="/bendi/thinkmuyin/index.php/Admin/Trailer/index" target="right" id="collapseLinkTrailer" class="sk_left_a" onclick="setCollapseLink('collapseLinkTrailer');">
						<span class="glyphicon glyphicon glyphicon-bullhorn"></span>&nbsp;&nbsp;宣传片&nbsp;&nbsp;<small style="color: #999999;">Trailer</small>
					</a>
				</div>
			</div>
		</div>
		
		<div class="panel panel-default sk_pmb">
			<div class="panel-heading sk_pmb sk_left">
				<div class="sk_left_nav">
					<a href="/bendi/thinkmuyin/index.php/Admin/Photo/index" target="right" id="collapseLinkPhoto" class="sk_left_a" onclick="setCollapseLink('collapseLinkPhoto');">
						<span class="glyphicon glyphicon-th"></span>&nbsp;&nbsp;照片组&nbsp;&nbsp;<small style="color: #999999;">Photos</small>
					</a>
				</div>
			</div>
		</div>
		
		<div class="panel panel-default sk_pmb">
			<div class="panel-heading sk_pmb sk_left">
				<div class="sk_left_nav">
					<a href="/bendi/thinkmuyin/index.php/Admin/Video/index" target="right" id="collapseLinkVideo" class="sk_left_a" onclick="setCollapseLink('collapseLinkVideo');">
						<span class="glyphicon glyphicon-facetime-video"></span>&nbsp;&nbsp;视频样片&nbsp;&nbsp;<small style="color: #999999;">Video</small>
					</a>
				</div>
			</div>
		</div>
		
		<div class="panel panel-default sk_pmb">
			<div class="panel-heading sk_pmb sk_left">
				<div class="sk_left_nav">
					<a href="/bendi/thinkmuyin/index.php/Admin/Package/index" target="right" id="collapseLinkPackage" class="sk_left_a" onclick="setCollapseLink('collapseLinkPackage');">
						<span class="glyphicon glyphicon-briefcase"></span>&nbsp;&nbsp;套餐组&nbsp;&nbsp;<small style="color: #999999;">Package</small>
					</a>
				</div>
			</div>
		</div>
		
		<div class="panel panel-default sk_pmb">
			<div class="panel-heading sk_pmb sk_left">
				<div class="sk_left_nav">
					<a href="/bendi/thinkmuyin/index.php/Admin/Order/index" target="right" id="collapseLinkOrder" class="sk_left_a" onclick="setCollapseLink('collapseLinkOrder');">
						<span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;预约订单&nbsp;&nbsp;<small style="color: #999999;">Order</small>
					</a>
				</div>
			</div>
		</div>
		

	</div>
	
</div>

</body>
</html>
			
		</div>
		
		
		<div class="col-xs-10 sk_col" style="background-color: red;">
			<iframe src="left1.html#collapseFour" height="800px" width="100%" marginheight="0px" marginwidth="0px" frameborder="0" scrolling="auto"></iframe>
		</div>
	</div>
</div>
	
	

</body>



</html>-->