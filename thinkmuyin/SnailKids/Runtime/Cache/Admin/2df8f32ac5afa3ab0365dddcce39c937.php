<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>Login</title>
    <!--<link href="<?php echo (ADMIN_PUBLIC_CSS); ?>bootstrap.min.css" rel="stylesheet" type="text/css">-->
    <link rel="stylesheet" type="text/css" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
    <link href="<?php echo (ADMIN_PUBLIC_CSS); ?>sk_common.css" rel="stylesheet">
    <script src="<?php echo (ADMIN_PUBLIC_JS); ?>jquery-2.2.4.min.js"></script>
    <script src="<?php echo (ADMIN_PUBLIC_JS); ?>bootstrap.min.js"></script>
    <script type="text/javascript">
    	$(document).ready(function(){
    		var loginResult = $("#loginResult").html();
    		//alert(loginResult);
    		if(loginResult == "paramError"){
    			$("#info").html('<span style="color:#F39C12" class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;Incomplete information');
    		}
    		else if(loginResult == "usernameError"){
    			$("#info").html('<span style="color:#DD4B39" class="glyphicon glyphicon-remove-sign"></span>&nbsp;&nbsp;username does not exist');
    		}
    		else if(loginResult == "passwordError"){
    			$("#info").html('<span style="color:#DD4B39" class="glyphicon glyphicon-remove-sign"></span>&nbsp;&nbsp;Username password does not match');
    		}
    		else if(loginResult == "verifyError"){
    			$("#info").html('<span style="color:#DD4B39" class="glyphicon glyphicon-remove-sign"></span>&nbsp;&nbsp;Verification code error');
    		}

    		$("#username").focus(function(){
    			$("#info").html('Sign in to start your session');
    		});
    		$("#password").focus(function(){
    			$("#info").html('Sign in to start your session');
    		});
    		
    		$("#loginForm").submit(function(){
				var username = $("#username").val();
				var password = $("#password").val();
				var verifyCode = $("#verifyCode").val();
				if(username == '' || username == null || password == '' || password == null || verifyCode == '' || verifyCode == null){
					$("#info").html('<span style="color:#F39C12" class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;Incomplete information!');
					return false;
				}
    		});
    	});
    </script>
</head>
<body style="background-color: #D2D6DE;">

<div class="container-fluid">
	<div class="row" style="padding-top: 105px; padding-bottom: 110px;">
		<div class="col-xs-4 col-xs-offset-4" style="padding: 0px 40px;">
			<form id="loginForm" name="loginForm" method="post" action="/bendi/thinkmuyin/index.php/Admin/Index/loginDo" >
			<div class="text-center" style="font-size: 35px; height: 40px; line-height: 40px; margin-bottom: 40px;">
				<b>Snail</b><span style="color: #CC0000;">KIDS</span>
			</div>
			<div class="text-center" style="background-color: #FFFFFF; color: #666666; padding: 25px 20px;">
				<div id="info" style="margin-bottom: 25px;">Sign in to start your session</div>
				<div id="loginResult" style="display: none;" ><?php echo ($loginResult); ?></div>
				
				<div class="input-group" style="margin-bottom: 15px;">
  					<input type="text" id="username" name="username" placeholder="username" class="form-control sk_input" value="<?php echo ($tempUsername); ?>">
  					<span class="input-group-addon" style="border-radius: 0px; background-color: #FFFFFF; color: #777777;"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
				</div>
				
				<div class="input-group" style="margin-bottom: 15px;">
  					<input type="password" id="password" name="password" placeholder="password" class="form-control sk_input">
  					<span class="input-group-addon" style="border-radius: 0px; background-color: #FFFFFF; color: #777777;"><span class="glyphicon glyphicon-lock"></span></span>
				</div>
				
				<div style="margin-bottom: 15px;">
					<div class="row" style="height: 32px;">
						<div class="col-xs-5 sk_col"><input class="form-control sk_input" id="verifyCode" name="verifyCode" style="width:100%;" type="text" placeholder="verify"></div>
						<div class="col-xs-4 sk_col"><img src="/bendi/thinkmuyin/index.php/Admin/Index/verify" class="img-responsive" style="height: 32px;" /></div>
						<div class="col-xs-3 sk_col"><input class="btn btn-primary" style="width:100%; background-color:#3C8DBC; font-size: 12px; border-radius: 0px; height: 32px;" type="submit" value="Sign In"></div>
					</div>
				</div>
				
				<div style="clear:both;margin-bottom: 15px;">- OR -</div>
				
				<div style="margin-bottom: 5px; background-color: #3B5998; width: 100%; height: 35px; line-height: 35px; color: #FFFFFF;"><a href="#">
					<div style="float: left; border-right: 1px solid #555555; width: 35px;color: #FFFFFF;"><span class="glyphicon glyphicon-earphone"></span></div>
					<div style="float: left; padding-left: 10px;color: #FFFFFF;">Call administrator's mobiel phone</div></a>
				</div>
				
				<div style="margin-bottom: 5px; background-color: #DD4B39; width: 100%; height: 35px; line-height: 35px; color: #FFFFFF;"><a href="#">
					<div style="float: left; border-right: 1px solid #555555; width: 35px; color: #FFFFFF;"><span class="glyphicon glyphicon-envelope"></span></div>
					<div style="float: left; padding-left: 10px;color: #FFFFFF;">Send an email to Boss Leona</div></a>
				</div>
				
				<div class="text-left"><a href="#">Register a new membership</a></div>
				<div class="text-left"><a href="#">Jump to SnailKids website</a></div>

			</div>
			
			</form>
		</div>
		
	</div>
</div>

</body>
</html>