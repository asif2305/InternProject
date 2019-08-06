<!DOCTYPE html>
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
   
      
    <!-- font link ends -->

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
      
     <script type="text/javascript" src="<?php echo base_url();?>js/jquery.js"></script>
     
     <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.js"></script>
     <script type="text/javascript" src="<?php echo base_url();?>js/code.js"></script>
     
  
     <script type="text/javascript"> $(document).ready(function () { $('.dropdown-toggle').dropdown(); });
 
      </script>
    


  </head>
  <body>
    
    <!--navbar starts here-->
    <div class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               <!-- <span class="sr-only">Toggle navigation</span> -->
               <span class="glyphicon glyphicon-arrow-down"></span>MENU

                            </button>
            <a href="#" class="navbar-brand"> <img style="margin-top:-30px;" src="<?php echo base_url().'img/image_logo.jpg';?>" /></a>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right ">
                    <li ><a class="btn-primary" href="http://localhost/isp"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
                    <li class="dropdown">
                      <a  class="btn-primary" href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list"></span>&nbsp;About US <b class="caret"></b></a>
                      <ul class="dropdown-menu  ">
                        <li><a href="<?php echo base_url();?>index.php/about/our_company">Our Company &nbsp;&nbsp;<span class="glyphicon glyphicon-flash"></span></a></li>
                        <li><a href="<?php echo base_url();?>index.php/about/our_culture">Our Culture &nbsp;&nbsp;<span class="glyphicon glyphicon-flash"></span></a></li>
                        <li><a href="<?php echo base_url();?>index.php/about/our_brand">Our Brand &nbsp;&nbsp;<span class="glyphicon glyphicon-flash"></span></a></li>
                        <li><a href="<?php echo base_url();?>index.php/about/media_center">Media Center &nbsp;&nbsp;<span class="glyphicon glyphicon-flash"></span></a></li>
                    </ul>     
                    </li>
                    <li><a class="btn-primary" href="<?php echo base_url();?>index.php/contact_us"><span class="glyphicon glyphicon-link"></span>&nbsp;Contact Us</a></li>
                    <li><a class="btn-primary" href="<?php echo base_url();?>index.php/home/investor_relations"> <span class="glyphicon glyphicon-new-window"></span>&nbsp;Investor Relations</a></li>
                      <li class="dropdown">
                      <a  class="btn-primary" href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-credit-card"></span>&nbsp;Customers <b class="caret"></b></a>
                      <ul class="dropdown-menu  ">
                        <li><a href="<?php echo base_url();?>index.php/about/enterprise">Enterprise &nbsp;&nbsp;<span class="glyphicon glyphicon-file"></span></a></li>
                        <li><a href="<?php echo base_url();?>index.php/about/bank">Bank & DSE &nbsp;&nbsp;<span class="glyphicon glyphicon-file"></span></a></li>
                        
                    </ul>     
                    </li>
                    <li class="dropdown ">
                      <a  class="btn-primary" href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-leaf"></span>&nbsp;Service Plans <b class="caret"></b></a>
                      <ul class="dropdown-menu  ">
                        <li  ><a href="<?php echo base_url();?>index.php/service_plans/postpaid_plans">Postpaid Plans <span class="glyphicon glyphicon-cog"></a></li>
                        <li ><a href="<?php echo base_url();?>index.php/service_plans/prepaid_plans">Prepaid Plans <span class="glyphicon glyphicon-cog"></a></li>
                        <li><a href="<?php echo base_url();?>index.php/service_plans/corporate_solution">Corporate Servics <span class="glyphicon glyphicon-cog"></a></li>
                          <li ><a href="<?php echo base_url();?>index.php/service_plans/device">Device Options <span class="glyphicon glyphicon-cog"></a> </li>
                    </ul>
                  </li>
                   <li><a class="btn-primary"class="btn-primary"href="<?php echo base_url();?>index.php/web_user/login"><span class="glyphicon glyphicon-user"></span>&nbsp;My Contact</a></li>
                </ul>
            </div>
        </div>
    </div>