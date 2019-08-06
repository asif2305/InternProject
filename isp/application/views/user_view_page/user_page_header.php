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
   
   
     <link type="text/css" media="screen" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
   
      
    
      
     <script type="text/javascript" src="<?php echo base_url();?>js/jquery.js"></script>
     
     <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.js"></script>
     <script type="text/javascript" src="<?php echo base_url();?>js/code.js"></script>
     
  
     <script type="text/javascript"> $(document).ready(function () { $('.dropdown-toggle').dropdown(); });
 
      </script>
    


  </head>
  <body>
    <!---------menu -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
      <div >
           <div clss="container">
              <div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                   <span class="sr-only">Toggle navigation</span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                 </button>
                 <a href="#" class="navbar-brand">User Personal Page</a>

              </div>  
              <div class="  collapse navbar-collapse">
                     <ul class="nav navbar-nav " >
                         <li><a href="<?php echo base_url();?>index.php/web_user/user_profile">User Profile</a></li>
                          <li><a href="<?php echo base_url();?>index.php/web_user/change_password">Change Password</a></li>
                           <li><a href="<?php echo base_url();?>index.php/web_user/transaction">Transation_History</a></li>
                            <li><a href="<?php echo base_url();?>index.php/web_user/login">Logout</a></li>
                     </ul>
              </div>
           </div>
      </div>
</nav>