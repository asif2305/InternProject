<html lang="en"><!--<![endif]--><head>
<meta charset="utf-8">
<!--[if lte IE 9 ]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

<title>Internet Srevice Provider</title>

<!-- STYLESHEETS -->
<link rel="stylesheet" media="screen" href="<?php echo base_url()?>css/icon.css">
<link rel="stylesheet" media="screen" href="<?php echo base_url();?>css/reset.css">
<link rel="stylesheet" media="screen" href="<?php echo base_url();?>css/grids.css">
<link rel="stylesheet" media="screen" href="<?php echo base_url()?>css/style.css">
<link rel="stylesheet" media="screen" href="<?php echo base_url()?>css/forms.css">
<link rel="stylesheet" media="screen" href="<?php echo base_url()?>css/jquery.uniform.css">
<link rel="stylesheet" media="screen" href="<?php echo base_url()?>css/style2.css">
  <link rel="shortcut icon" href="http://getbootstrap.com/docs-assets/ico/favicon.png">
<style type="text/css">
    #loading-container {position: absolute; top:50%; left:50%;}
    #loading-content {width:800px; text-align:center; margin-left: -400px; height:50px; margin-top:-25px; line-height: 50px;}
    #loading-content {font-family: "Helvetica", "Arial", sans-serif; font-size: 18px; color: black; text-shadow: 0px 1px 0px white; }
    #loading-graphic {margin-right: 0.2em; margin-bottom:-2px;}
    #loading {background-color: #eeeeee; height:100%; width:100%; overflow:hidden; position: absolute; left: 0; top: 0; z-index: 99999;}
</style>

<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE, NO-STORE, must-revalidate">
<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
<META HTTP-EQUIV="EXPIRES" CONTENT=0>


<!-- STYLESHEETS END -->

<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<script type="text/javascript" src="js/selectivizr.js"></script>
<![endif]-->
   
<link href="<?php echo base_url(); ?>style/calendar.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo base_url(); ?>script/calendar.js"></script>


</head>
<body>
     

    <div id="wrapper">
        <header>
            <h1><a href="">ISP</a></h1>
            <nav>
                <ul id="main-navigation" class="clearfix">  
                    <li class="fr dropdown"> 
                        <a href="#" class="with-profile-image"><span style="margin-top:12px;margin-right:-25px;"class="glyphicon glyphicon-user"></span>&nbsp;<?php echo $this->session->userdata('name')?> <b class="caret"></b></a> 
                        <ul>
                            <li><a href="<?php echo base_url();?>index.php/employee_list_form/change/">Change Password</a></li> 
                            <li><a href="<?php echo base_url();?>index.php/logout">Signout</a></li> 
                        </ul> 
                    </li> 
                </ul> 
            </nav>
        </header>
        
        <section>
            <!-- Sidebar -->
            
            <aside>
                <nav>
                    <ul>
                        <li><a href="<?php echo base_url();?>index.php/home">Home</a></li>
                        <li><a href="<?php echo base_url();?>index.php/package">Package Details</a></li>
                        <li><a href="<?php echo base_url();?>index.php/customer_list_form">Customer's Information</a></li>
                        <li><a href="<?php echo base_url();?>index.php/invoice_gen">Invoice & payment</a></li>
                        <li><a href="<?php echo base_url();?>index.php/sell_list">Selling Section</a></li>
                    </ul>
                </nav>
            </aside>

            <!-- Sidebar End -->
<section><div class="scrollbar-vertical" style="height: 288px;"><div class="scrollbar-button-start"></div><div class="scrollbar-track-piece" style="height: 268px;"></div><div class="scrollbar-button-end"></div></div><div class="viewport">