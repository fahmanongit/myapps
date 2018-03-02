<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url(); ?>assets/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/build/css/custom.min.css" rel="stylesheet">
    
  </head>

  <body class="login">
    <div class="container" style="margin-top:170px">
      <div class="col-md-4 col-md-offset-4">
          <div class="panel panel-default">
            
                <div class="panel-heading"><h3 class="panel-title"><strong>Sign in </strong></h3></div>
                <div class="panel-body">
              <form id="login_val" role="form" method="post">
                <div class="form-group">
                  <label for="usr_email">Email</label>
                  <input type="usr_email" class="form-control" style="border-radius:0px" id="usr_email" name="usr_email" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="usr_passwd">Password <a href="/sessions/forgot_password">(forgot password)</a></label>
                  <input type="password" class="form-control" style="border-radius:0px" id="usr_passwd" name="usr_passwd" placeholder="Password">
                </div>
                <button type="submit" value="Submit" class="btn btn-sm btn-default">Sign in</button>
            
            </form>
            </div>
        </div>
      </div>
      </div>
      </div>
  </body>
</html>
