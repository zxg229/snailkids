<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>Province</title>
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
    		$("#name_en").focus(function(){
    			$("#alert").html('');
    		});
    		$("#alias").focus(function(){
    			$("#alert").html('');
    		});
			
			$("#add_form").submit(function(){
				var name = $("#name").val();
				var name_en = $("#name_en").val();
				var alias = $("#alias").val();
				if(name == '' || name == null || name_en == '' || name_en == null || alias == '' || alias == null){
					$("#alert").html('<span style="color:#F39C12" class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;Incomplete information!');
					return false;
				}
			});
    	});
    </script>
</head>
<body>

<div class="container-fluid" style="padding: 15px;">
	<div class="row">
		<div class="col-xs-6 sk_col text-left" style="font-size: 14px;">
			<span class="glyphicon glyphicon-tags"></span>&nbsp;&nbsp;<b>省份管理</b>&nbsp;&nbsp;<small style="color: #999999;">Province management</small>
		</div>
		<div class="col-xs-6 sk_col text-right" style="color: #444444;">
			<span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Home&nbsp;&nbsp;&rsaquo;&nbsp;&nbsp;
			<span class="glyphicon glyphicon-map-marker"></span>&nbsp;&nbsp;Area&nbsp;&nbsp;&rsaquo;&nbsp;&nbsp;
			Province
		</div>
	</div>
	
	<div class="row" style="margin-top: 15px;">
		
		<!-- add -->
		<div class="col-xs-4 sk_col" style="padding-right: 10px;">
			<div class="sk_option_back" style="border-top-color: #3C8DBC;">
				<div style="font-size:12px;height:30px; line-height:30px;border-bottom: 1px dotted #EEEEEE;">
					<div style="float: left;">添加一个省份</div>
					<div id="alert" style="float: right;"></div>
				</div>
				<div style="clear: both;"></div>

				<form id="add_form" method="post" action="/thinkmuyin/index.php/Admin/Province/addDo" style="margin: 0px; padding: 0px;">
					
					<div class="form-group" style="margin-top: 15px;">
    					<label for="name">省份名称</label>
    					<input type="text" class="form-control sk_input" id="name" name="name" maxlength="20" placeholder="province name, e.g. 吉林省">
  					</div>
  					
  					<div class="form-group">
    					<label for="name_en">省份英文名</label>
    					<input type="text" class="form-control sk_input" id="name_en" name="name_en" maxlength="20" placeholder="province english name, e.g. JiLin">
  					</div>
  					
  					<div class="form-group">
    					<label for="alias">省份别名</label>
    					<input type="text" class="form-control sk_input" id="alias" name="alias" maxlength="20" placeholder="province alias name, e.g. 吉林">
  					</div>
  					
  					<div class="form-group">
  						<label for="enable">数据可用性</label>
  						<select class="form-control sk_input" id="enable" name="enable">
  							<option value="1">上线&nbsp;Online</option>
  							<option value="0" selected="selected">下线&nbsp;Offline</option>
						</select>
						<span class="help-block sk_help_block"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;&nbsp;下线的内容将不会出现在应用程序中</span>
  					</div>
  					
 					<div class="sk_add_btn_gp">
 						<input class="sk_add_btn_ipt" type="submit" value="添加&nbsp;add" />
 					</div>
				</form>
			</div>
		</div>
		
		<!-- list -->
		<div class="col-xs-8 sk_col" style="padding-left: 10px;">
			<div class="sk_option_back" style="border-top-color: #F39C12;">
				<div style="font-size:12px;height:30px; line-height:30px;border-bottom: 1px dotted #EEEEEE;">
					<div id="option_title" style="float: left;">省份列表</div>
					<div id="option_alert" style="float: right;"></div>
				</div>
				<div style="clear: both;"></div>
				<?php if(($count == 0)): ?><div style="margin-top: 15px; color: #AAAAAA;">No data...</div>
				<?php else: ?>
					<table class="table table-bordered" style="margin: 0px;">
	   					<caption style="margin-top: 5px; font-weight: bold; color: #333333;">当前省份表数据&nbsp;-&nbsp;<span class="sk_thead_oTitle"><?php echo ($orderTitle); ?></span></caption>
	   					<thead>
		      				<tr>
		         				<th>#</th>
		         				<?php if(is_array($thead)): foreach($thead as $k=>$v): ?><th><?php echo ($v); ?></th><?php endforeach; endif; ?>
		         				<th>Option</th>
		      				</tr>
	   					</thead>
	   					<tbody>
					    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
	   							<td><?php echo ($i); ?>.</td>
	   							<td><?php echo ($vo["id"]); ?></td>
	   							<td><?php echo ($vo["name"]); ?></td>
	   							<?php if($vo["enable"] == 1): ?><td><span class="glyphicon glyphicon-circle-arrow-up" style="color: green;"></span>&nbsp;&nbsp;上线</td>
	   							<?php else: ?>
	   								<td><span class="glyphicon glyphicon-circle-arrow-down" style="color: red;"></span>&nbsp;&nbsp;下线</td><?php endif; ?>
	   							<td><?php echo (date("m-d H:i",$vo["edit_time"])); ?></td>
	   							<td><a href="/thinkmuyin/index.php/Admin/Province/edit/id/<?php echo ($vo["id"]); ?>/p/<?php echo ($pageNow); ?>/order/<?php echo ($order); ?>" class="sk_table_ooption"><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;edit</a></td>
					    	</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	   					</tbody>
					</table>
					
					<nav style="margin-top: 10px;" class="text-right">
  						<ul class="pagination pagination-sm" style="margin: 0px;">
						<?php if(($pageNow == 1)): ?><li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
						<?php else: ?>
							<li><a href="/thinkmuyin/index.php/Admin/Province/index/p/<?php echo ($pageNow-1); ?>/order/<?php echo ($order); ?>" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li><?php endif; ?>
					    <?php $__FOR_START_23483__=1;$__FOR_END_23483__=$totalPage;for($i=$__FOR_START_23483__;$i <= $__FOR_END_23483__;$i+=1){ if(($i == $pageNow)): ?><li class="active"><a href="/thinkmuyin/index.php/Admin/Province/index/p/<?php echo ($i); ?>/order/<?php echo ($order); ?>"><?php echo ($i); ?></a></li>
					    	<?php else: ?>
					    		<li><a href="/thinkmuyin/index.php/Admin/Province/index/p/<?php echo ($i); ?>/order/<?php echo ($order); ?>"><?php echo ($i); ?></a></li><?php endif; } ?>
						<?php if(($pageNow == $totalPage)): ?><li class="disabled"><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
						<?php else: ?>
							<li><a href="/thinkmuyin/index.php/Admin/Province/index/p/<?php echo ($pageNow+1); ?>/order/<?php echo ($order); ?>" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li><?php endif; ?>
  						</ul>
					</nav><?php endif; ?>
			</div>
		</div>
		
	</div>
	
</div>

</body>
</html>