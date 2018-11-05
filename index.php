<!DOCTYPE html>
<html>
<head>
	<?php include_once 'front_end.php'; ?>
	<title>Login Aplikasi</title>
</head>
<body>
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3">          
        <div class="panel panel-default" >
		    <div class="panel-heading">
		        <div class="panel-title">Sign In</div>
		    </div>     
		    <div style="padding-top:30px" class="panel-body" >
		        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
		        <form id="loginform" class="form-horizontal" role="form" action="controllers/User_controller.php?proses=login" method="post">
		            <div style="margin-bottom: 25px" class="input-group">
		                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		                <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Username">                                        
		            </div>
		            <div style="margin-bottom: 25px" class="input-group">
		                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		                <input id="login-password" type="password" class="form-control" name="password" placeholder="Password">
		            </div>
					<div class="input-group">
						<div class="checkbox">
							<label>
								<input id="login-remember" type="checkbox" name="remember"> Remember me
							</label>
						</div>
					</div>
		            <div style="margin-top:10px" class="form-group">
		                <div class="col-sm-12 controls">
							<button id="btn-login" type="submit" href="#" class="btn btn-primary btn-block">Login  </button>
		                </div>
		            </div>
		            <div class="form-group">
		                <div class="col-md-12 control">
		                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
			                    <a href="registrasi.php">
			                        Sign Up Here
			                    </a>
		                    </div>
		                </div>
		            </div>    
	            </form>     
		    </div>                     
        </div>  
    </div>
</body>
</html>