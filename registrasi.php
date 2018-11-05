<!DOCTYPE html>
<html>
<head>
	<?php include_once 'front_end.php'; ?>
	<title>User Registrasi</title>
</head>
<body>
    <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">Sign Up</div>
                <div style="float:right; font-size: 85%; position: relative; top:-10px">
            		<a id="signinlink" href="index.php">Sign In</a>
            	</div>
            </div>  
            <div class="panel-body" >
                <form id="signupform" class="form-horizontal" role="form" action="controllers/User_controller.php?proses=signup" method="post">                        
                    <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">Username</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="username" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-md-3 control-label">Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Konfirmasi Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="konfirmasi_password" placeholder="Konfirmasi Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- Button -->                                        
                        <div class="col-md-offset-3 col-md-9">
                            <button id="btn-signup" type="submit" class="btn btn-primary btn-block pull-right"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                        </div>
                    </div>
                </form>
             </div>
        </div>
	</div> 
</body>
</html>