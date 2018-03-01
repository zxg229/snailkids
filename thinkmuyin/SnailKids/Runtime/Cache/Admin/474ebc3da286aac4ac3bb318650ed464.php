<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>Photo Edit</title>
    <!--<link href="<?php echo (ADMIN_PUBLIC_CSS); ?>bootstrap.min.css" rel="stylesheet" type="text/css">-->
    <link rel="stylesheet" type="text/css" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
    <link href="<?php echo (ADMIN_PUBLIC_CSS); ?>sk_common.css" rel="stylesheet">
    <script src="<?php echo (ADMIN_PUBLIC_JS); ?>jquery-2.2.4.min.js"></script>
    <script src="<?php echo (ADMIN_PUBLIC_JS); ?>bootstrap.min.js"></script>
    <script type="text/javascript">
    	$(document).ready(function(){			
	
			$("#name").focus(function(){
				$("#alert").html('');
			});
			$("#introduce").focus(function(){
				$("#alert").html('');
			});
			
			$("#savePhoto").click(function(){		
				var name = $("#name").val();
				var introduce = $("#introduce").val();
				if(name==""||name==null||introduce==""||introduce==null){
					$("#alert").html('<span style="color:#F39C12" class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;Incomplete information!');
				}
				else{
					$("#editForm").submit();
				}
			});
			
    	});
    </script>
</head>
<body>

<div class="container-fluid" style="padding: 15px;">
	<div class="row">
		<div class="col-xs-6 sk_col text-left" style="font-size: 14px;">
			<span class="glyphicon glyphicon-tags"></span>&nbsp;&nbsp;<b>照片组</b>&nbsp;&nbsp;<small style="color: #999999;">Photo management</small>
		</div>
		<div class="col-xs-6 sk_col text-right" style="color: #444444;">
			<span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Home&nbsp;&nbsp;&rsaquo;&nbsp;&nbsp;
			<span class="glyphicon glyphicon-th"></span>&nbsp;&nbsp;Photo&nbsp;&nbsp;&rsaquo;&nbsp;&nbsp;
			Edit
		</div>
	</div>
	
	<div class="row" style="margin-top: 15px;">
		<!-- 表单开始 -->
		<form id="editForm" method="post" enctype="multipart/form-data" action="/bendi/thinkmuyin/index.php/Admin/Photo/editDo/id/<?php echo ($id); ?>/p/<?php echo ($pageNow); ?>/where/<?php echo ($where); ?>/order/<?php echo ($order); ?>" style="margin: 0px; padding: 0px;">
		
		<!-- add left-->
		<div class="col-xs-6 sk_col" style="padding-right: 5px;">
			<div class="sk_option_back" style="border-top-color: #00A65A;">
				
				<div class="row" style="height:30px; line-height:30px;border-bottom: 1px dotted #EEEEEE; margin-bottom: 15px;">
					<div class="col-xs-6 sk_col">编辑当前照片组</div>
					<div class="col-xs-6 sk_col text-right" id="alert"></div>
				</div>
				
				<div class="form-group">
					<label for="name">照片组名称</label>
					<input type="text" class="form-control sk_input" id="name" name="name" maxlength="50" placeholder="小蜗牛传媒第一次集体合影" value="<?php echo ($photoData["name"]); ?>">
				</div>
				
				<div class="form-group">
					<label for="introduce">照片组介绍</label>
					<textarea class="form-control" rows="5" id="introduce" name="introduce"><?php echo ($photoData["introduce"]); ?></textarea>
				</div>
				
				<div class="form-group">
    				<label for="photo1">照片1</label>
    				<p><a href="<?php echo (getCompleteAddress($photoData["imagePathGroup"]["0"])); ?>" target="_blank">
						<img src="<?php echo (getCompleteAddress($photoData["imagePathGroup"]["0"])); ?>" style="width: auto; height: 100px; border-radius: 2px;">
					</a></p>
    				<input type="file" id="photo1" name="photo1">
  				</div>
				<span class="help-block sk_help_block"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;&nbsp;支持jpg、png、bmp格式图像 500x380 不超过70k</span>
				
				<div class="form-group">
    				<label for="photo2">照片2</label>
    				<p><a href="<?php echo (getCompleteAddress($photoData["imagePathGroup"]["1"])); ?>" target="_blank">
						<img src="<?php echo (getCompleteAddress($photoData["imagePathGroup"]["1"])); ?>" style="width: auto; height: 100px; border-radius: 2px;">
					</a></p>
    				<input type="file" id="photo2" name="photo2">
  				</div>
				<span class="help-block sk_help_block"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;&nbsp;支持jpg、png、bmp格式图像 500x380 不超过70k</span>
				
				<div class="form-group">
    				<label for="photo3">照片3</label>
    				<p><a href="<?php echo (getCompleteAddress($photoData["imagePathGroup"]["2"])); ?>" target="_blank">
						<img src="<?php echo (getCompleteAddress($photoData["imagePathGroup"]["2"])); ?>" style="width: auto; height: 100px; border-radius: 2px;">
					</a></p>
    				<input type="file" id="photo3" name="photo3">
  				</div>
				<span class="help-block sk_help_block"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;&nbsp;支持jpg、png、bmp格式图像 500x380 不超过70k</span>
				
				

			</div>
		</div>
		
		<!-- add right-->
		<div class="col-xs-6 sk_col" style="padding-left: 5px;">
			<div class="sk_option_back" style="border-top-color: #00A65A;">
				
				<div class="row" style="height:30px; line-height:30px;border-bottom: 1px dotted #EEEEEE; margin-bottom: 15px;">
				</div>
				
				<div class="form-group">
    				<label for="photo4">照片4</label>
    				<p><a href="<?php echo (getCompleteAddress($photoData["imagePathGroup"]["3"])); ?>" target="_blank">
						<img src="<?php echo (getCompleteAddress($photoData["imagePathGroup"]["3"])); ?>" style="width: auto; height: 100px; border-radius: 2px;">
					</a></p>
    				<input type="file" id="photo4" name="photo4">
  				</div>
				<span class="help-block sk_help_block"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;&nbsp;支持jpg、png、bmp格式图像 500x380 不超过70k</span>
				
				<div class="form-group">
    				<label for="photo5">照片5</label>
    				<p><a href="<?php echo (getCompleteAddress($photoData["imagePathGroup"]["4"])); ?>" target="_blank">
						<img src="<?php echo (getCompleteAddress($photoData["imagePathGroup"]["4"])); ?>" style="width: auto; height: 100px; border-radius: 2px;">
					</a></p>
    				<input type="file" id="photo5" name="photo5">
  				</div>
				<span class="help-block sk_help_block"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;&nbsp;支持jpg、png、bmp格式图像 500x380 不超过70k</span>
				
				<div class="form-group">
    				<label for="photo6">照片6</label>
    				<p><a href="<?php echo (getCompleteAddress($photoData["imagePathGroup"]["5"])); ?>" target="_blank">
						<img src="<?php echo (getCompleteAddress($photoData["imagePathGroup"]["5"])); ?>" style="width: auto; height: 100px; border-radius: 2px;">
					</a></p>
    				<input type="file" id="photo6" name="photo6">
  				</div>
				<span class="help-block sk_help_block"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;&nbsp;支持jpg、png、bmp格式图像 500x380 不超过70k</span>
				
				<div class="form-group">
					<label for="enable">照片组可用性</label>
					<select class="form-control sk_input" id="enable" name="enable">
						<option value="0"<?php if($photoData["enable"] == 0): ?>selected="selected"<?php endif; ?> >下线</option>
						<option value="1" <?php if($photoData["enable"] == 1): ?>selected="selected"<?php endif; ?> >上线</option>
					</select>
					<span class="help-block sk_help_block"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;&nbsp;下线的节目内容将不会出现在应用程序中</span>
				</div>
				
				<div style="margin-bottom: 15px;">
  					<p><b>添加时间：</b>&nbsp;&nbsp;<?php echo (date("m-d H:i",$photoData["add_time"])); ?></p>
  					<p><b>编辑时间：</b>&nbsp;&nbsp;<?php echo (date("m-d H:i",$photoData["edit_time"])); ?></p>
  					<p><b>管理员名：</b>&nbsp;&nbsp;<?php echo ($photoData["admin_name"]); ?></p>
  				</div>
				
				<div class="form-group">
					<a id="savePhoto" class="btn-success sk_submitbtn" href="#"><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;保存 save</a>
					<a id="back" class="btn-warning sk_submitbtn" href="/bendi/thinkmuyin/index.php/Admin/Photo/index/p/<?php echo ($pageNow); ?>/where/<?php echo ($where); ?>/order/<?php echo ($order); ?>"><span class="glyphicon glyphicon-share"></span>&nbsp;&nbsp;放弃 back</a>
				</div>
				
			</div>
		</div>
		</form><!-- 表单结束 -->
		
	</div>
	
</div>

</body>
</html>