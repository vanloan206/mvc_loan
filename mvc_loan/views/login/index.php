<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Login</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap 3.3.6 -->
      <link rel="stylesheet" href="<?php echo URL ?>/public/css/bootstrap.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="<?php echo URL ?>/public/css/AdminLTE.min.css">
      <link rel="stylesheet" href="<?php echo URL ?>/public/css/style.css">
      
   </head>
   <body class="hold-transition login-page login-bg">
      <div class="login-box">
         <div class="login-box-body">
            <div class="loginvne">
			<p class="login-box-msg">Đăng nhập hệ thống</p>
            <form name="fredkh" method="post" class="form-horizontal" action="login/run" id="fredkh" enctype="multipart/form-data">
               <div class="form-group has-feedback">
                  <input type="text" name="username" class="form-control" id="username" placeholder="Tên đăng nhập" required>
                  <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
               </div>
               <div class="form-group has-feedback">
                  <input type="password" name="password" class="form-control" id="password" placeholder="Mật khẩu" required>
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
               </div>
               <div class="row">
                  <input type="hidden" name="Login" value="Login">
                  <button type="submit" class="btn btn-primary btn-block btn-flat" >Login</button>
                  <input type="hidden" name="Cancel" value="Cancel">
                  <button type="submit" class="btn btn-primary btn-block btn-flat" ><a href="<?php echo URL ?>/" title="">Cancel</a></button>
               </div>
            </form>
		</div>            
	</div>
         <!-- /.login-box-body -->
</div>
   </body>
</html>
