<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>Video Edit</title>
    <!--<link href="<?php echo (ADMIN_PUBLIC_CSS); ?>bootstrap.min.css" rel="stylesheet" type="text/css">-->
    <link rel="stylesheet" type="text/css" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
    <link href="<?php echo (ADMIN_PUBLIC_CSS); ?>sk_common.css" rel="stylesheet">
    <script src="<?php echo (ADMIN_PUBLIC_JS); ?>jquery-2.2.4.min.js"></script>
    <script src="<?php echo (ADMIN_PUBLIC_JS); ?>bootstrap.min.js"></script>
    <script type="text/javascript">
    	$(document).ready(function(){			
	
			$("#title").focus(function(){
				$("#alert").html('');
			});
			$("#introduce").focus(function(){
				$("#alert").html('');
			});
			$("#duration").focus(function(){
				$("#alert").html('');
			});
			$("#svideo_path").focus(function(){
				$("#alert").html('');
			});
			$("#hvideo_path").focus(function(){
				$("#alert").html('');
			});
			
			$("#saveLink").click(function(){		
				var title = $("#title").val();
				var introduce = $("#introduce").val();
				var duration = $("#duration").val();
				var svideo_path = $("#svideo_path").val();
				var hvideo_path = $("#hvideo_path").val();
				if(title==""||title==null||introduce==""||introduce==null||duration==""||duration==null||svideo_path==""||svideo_path==null||hvideo_path==""||hvideo_path==null){
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
			<span class="glyphicon glyphicon-tags"></span>&nbsp;&nbsp;<b>视频样片</b>&nbsp;&nbsp;<small style="color: #999999;">Video management</small>
		</div>
		<div class="col-xs-6 sk_col text-right" style="color: #444444;">
			<span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Home&nbsp;&nbsp;&rsaquo;&nbsp;&nbsp;
			<span class="glyphicon glyphicon-facetime-video"></span>&nbsp;&nbsp;Video&nbsp;&nbsp;&rsaquo;&nbsp;&nbsp;
			Edit
		</div>
	</div>
	
	<div class="row" style="margin-top: 15px;">
		<!-- 表单开始 -->
		<form id="editForm" method="post" enctype="multipart/form-data" action="/snailkids.php/Admin/Video/editDo/id/<?php echo ($id); ?>/p/<?php echo ($pageNow); ?>/where/<?php echo ($where); ?>/order/<?php echo ($order); ?>" style="margin: 0px; padding: 0px;">
		
		<!-- add left-->
		<div class="col-xs-6 sk_col" style="padding-right: 5px;">
			<div class="sk_option_back" style="border-top-color: #00A65A;">
				
				<div class="row" style="height:30px; line-height:30px;border-bottom: 1px dotted #EEEEEE; margin-bottom: 15px;">
					<div class="col-xs-6 sk_col">编辑当前视频</div>
					<div class="col-xs-6 sk_col text-right" id="alert"></div>
				</div>
				
				<div class="form-group">
					<label for="title">视频标题</label>
					<input type="text" class="form-control sk_input" id="title" name="title" maxlength="50" placeholder="人生第一次领悟" value="<?php echo ($videoData["title"]); ?>">
				</div>
				
				<div class="form-group">
					<label for="introduce">视频介绍</label>
					<textarea class="form-control" rows="5" id="introduce" name="introduce"><?php echo ($videoData["introduce"]); ?></textarea>
				</div>
				
				<div class="form-group">
					<label for="duration">视频时长</label>
					<input type="text" class="form-control sk_input" id="duration" name="duration" maxlength="50" placeholder="00:05:30" value="<?php echo ($videoData["duration"]); ?>">
				</div>
				
				<div class="form-group">
					<label for="theme_id">所属主题</label>
					<select class="form-control sk_input" id="theme_id" name="theme_id">
						<?php if(is_array($themeData)): foreach($themeData as $key=>$v): switch($v["id"]): case $videoData["theme_id"]: ?><option value="<?php echo ($v["id"]); ?>" selected="selected"><?php echo ($v["name"]); ?></option><?php break;?>
								<?php default: ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></option><?php endswitch; endforeach; endif; ?>
					</select>
				</div>
				
				<div class="form-group">
    				<label for="cover_path">视频封面</label>
    				<p><a href="<?php echo (getCompleteAddress($videoData["cover_path"])); ?>" target="_blank">
						<img src="<?php echo (getCompleteAddress($videoData["cover_path"])); ?>" style="width: auto; height: 100px; border-radius: 2px;">
					</a></p>
    				<input type="file" id="cover_path" name="cover_path">
  				</div>
				<span class="help-block sk_help_block"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;&nbsp;支持jpg、png、bmp格式图像 文件不得超过1024k</span>
				
				<div class="form-group">
					<label for="locally">视频文件存放位置</label>
					<select class="form-control sk_input" id="locally" name="locally">
						<option value="0" <?php if($videoData["locally"] == 0): ?>selected="selected"<?php endif; ?> >第三方支持</option>
						<option value="1" <?php if($videoData["locally"] == 1): ?>selected="selected"<?php endif; ?> >本地服务器</option>
					</select>
					<span class="help-block sk_help_block"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;&nbsp;不同的存放位置 决定后面文件地址填写的差别</span>
				</div>
		

			</div>
		</div>
		
		<!-- add right-->
		<div class="col-xs-6 sk_col" style="padding-left: 5px;">
			<div class="sk_option_back" style="border-top-color: #00A65A;">
				
				<div class="row" style="height:30px; line-height:30px;border-bottom: 1px dotted #EEEEEE; margin-bottom: 15px;">
				</div>
				
				<div class="form-group">
					<label for="svideo_path">标清视频地址</label>
					<input type="text" class="form-control sk_input" id="svideo_path" name="svideo_path" maxlength="200" value="<?php echo ($videoData["svideo_path"]); ?>">
				</div>
				<span class="help-block sk_help_block">
					<span class="glyphicon glyphicon-info-sign"></span><br />
					服务器本地存放视频文件时请确保文件真实存在<br />
					地址格式范例：SnailKids/Public/Upload/Video/SVideo/20160612_23S.mp4<br />
					第三方存放文件时范例：http://v.youku.com/storage/235667/20160612_23S.mp4
				</span>
				
				<div class="form-group">
					<label for="hvideo_path">高清视频地址</label>
					<input type="text" class="form-control sk_input" id="hvideo_path" name="hvideo_path" maxlength="200" value="<?php echo ($videoData["hvideo_path"]); ?>">
				</div>
				<span class="help-block sk_help_block">
					<span class="glyphicon glyphicon-info-sign"></span><br />
					服务器本地存放视频文件时请确保文件真实存在<br />
					地址格式范例：SnailKids/Public/Upload/Video/HVideo/20160612_23S.mp4<br />
					第三方存放文件时范例：http://v.youku.com/storage/235667/20160612_23H.mp4
				</span>
				
				<div class="form-group">
					<label for="enable">视频可用性</label>
					<select class="form-control sk_input" id="enable" name="enable">
						<option value="1" <?php if($videoData["enable"] == 1): ?>selected="selected"<?php endif; ?> >上线</option>
						<option value="0" <?php if($videoData["enable"] == 0): ?>selected="selected"<?php endif; ?> >下线</option>
					</select>
					<span class="help-block sk_help_block"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;&nbsp;下线的节目内容将不会出现在应用程序中</span>
				</div>
				
				<div style="margin-bottom: 15px;">
  					<p><b>添加时间：</b>&nbsp;&nbsp;<?php echo (date("m-d H:i",$videoData["add_time"])); ?></p>
  					<p><b>编辑时间：</b>&nbsp;&nbsp;<?php echo (date("m-d H:i",$videoData["edit_time"])); ?></p>
  					<p><b>管理员名：</b>&nbsp;&nbsp;<?php echo ($videoData["admin_name"]); ?></p>
  				</div>
				
				<div class="form-group">
					<a id="saveLink" class="btn-success sk_submitbtn" href="#"><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;保存 save</a>
					<a id="back" class="btn-warning sk_submitbtn" href="/snailkids.php/Admin/Video/index/p/<?php echo ($pageNow); ?>/where/<?php echo ($where); ?>/order/<?php echo ($order); ?>"><span class="glyphicon glyphicon-share"></span>&nbsp;&nbsp;放弃 back</a>
				</div>
				
			</div>
		</div>
		</form><!-- 表单结束 -->
		
	</div>
	
</div>

</body>
</html>