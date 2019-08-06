<!DOCTYPE html>
<!-- saved from url=(0043)http://getbootstrap.com/examples/jumbotron/ -->
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="http://getbootstrap.com/docs-assets/ico/favicon.png">
   
    <title>ISP</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>css/bootstrap.css" >


    <!-- Custom styles for this template -->
   <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>css/boot.css" >
   <!--font link starts -->
     <link type="text/css" media="screen" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
   
</head>
 <body>
       
   <div class="container">
       <div class="row">
        <div class=" col-md-offset-3">
            <div class="col-md-12">
          <h2 style="margin-left:180px;margin-bottom:50px;color:#428bca;">User Login </h2>
          <?php echo form_open('web_user/input_validation');?>
          <div class="form-horizontal ">
            <div class="form-group ">
              <label for="user_id"class="col-sm-2 control-label text-center">User ID</label>  
              <div class="col-sm-4">
                  <input type="text" class="form-control" name="user_id" placeholder="Enter your User ID" required>
             <?php echo form_error('user_id','<p align="center" class="error">');?>
              </div>   
            </div>
             <div class="form-group">
              <label for="password"class="col-sm-2 control-label">Password</label>  
              <div class="col-sm-4">
                  <input type="password" class="form-control" name="password"  placeholder="Enter your password" required>
                <?php echo form_error('password','<p style="color:red;"align="center" class="error">');?>
              </div>
            </div>
              <div class="form-group">
                   <div class="col-sm-offset-2 col-sm-6">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-default">Clear</button>
              </div>    
            </div>
          </div>
          
            </div>
            <?php echo form_close();?>
       </div>
     </div>
   </div>
 
 </div>
  </body>
</html>