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
     <!--navbar ends here-->     

     <!--corousel starts here-->
     <div class="container">
      <div class="col-md-8 col-md-offset-2">
       <div id='myCarousel' class='carousel slide' data-ride='carousel' >
          <ol class='carousel-indicators'>
              <li data-target="#myCarousel" data-slide-to="0" class='active'></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
              <li data-target="#myCarousel" data-slide-to="4"></li>
          </ol>
           <div class='carousel-inner'>
              <div class="item active"><img  src="<?php echo base_url().'img/images_1.jpg';?>" /></div>
              <div class="item"><img  src="<?php echo base_url().'img/images_2.jpg';?>" /></div>
              <div class="item"><img  src="<?php echo base_url().'img/images_3.jpg';?>" /></div>
              <div class="item"><img  src="<?php echo base_url().'img/images_4.jpg';?>" /></div>
              <div class="item"><img  src="<?php echo base_url().'img/images_5.jpg';?>" /></div>
           </div>

           <a class="left carousel-control " href="#myCarousel" data-slide="prev"><span class="  icon-prev ">
           </span></a>
           <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="icon-next">
           </span></a>
      </div>
    </div>
    </div> 
    <br/> <br/>
     <!--corousel ends here-->
     <!--grid content starts here--> 
     <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          Group Item #1
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit.more then information is needed here.........
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          Group Item #2
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        ...................more then information is needed here.........
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
           Group Item #3
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
     
      <div class="panel-body">
       more then information is needed here.........
      </div>
       
    </div>
  </div>
</div>
  <br/><br/>


     
     <div class="navbar navbar-inverse ">
   <div class="container">
   <section >
    <p style="color:#f5f5f5;" class="lead text-center ">Wanna get in touch?Email us at <a href="">rizwan.cse33@gmail.com</a></p>
    <hr/>
    <ul class="list-inline text-center" >
      <li style="color:#f5f5f5;"><b>Follow Us On:</b></li>
      <li><a href=""><i class="largeIcon fa fa-facebook"></i>Facebook</a></li>
      <li><a href=""><i class="largeIcon fa fa-twitter"></i>Twitter</a></li>
      <li><a href=""><i class="largeIcon fa fa-google-plus"></i>Google Plus</a></li>
      <li><a href=""><i class="largeIcon fa fa-google-plus"></i>LinkedIn</a></li>
    </ul>
    <p style="color:#f5f5f5;"class="text-center muted">&copy; Copyright 2013 Vertex3 Soft</p>

    <div class="row">
      <div class="col-md-4"></div>
       <div class="col-md-4"></div>
      <div class="col-md-4">
                 <a data-toggle="modal" class="btn btn-primary" data-target="#myModal">Terms and Condition</a></p>
        <div class="modal  fade" id="myModal" aria-labelledby="myModalLabel" tabindex="-1" role="dialog" aria-hidden=
        "true">
        <div class="modal-dialog">
        <div class="modal-content">
                   <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                     <h2 >Terms and Condition</h2>
                   </div>
                        <div class="modal-body">
                              <p><b>Introduction:</b>


<b>License to use website:</b>


<b>You must not:</b>

• republish material from this website (including republication on another website);
• sell, rent or sub-license material from the website;
• show any material from the website in public;
• reproduce, duplicate, copy or otherwise exploit material on this website for a commercial purpose;]
• [edit or otherwise modify any material on the website; or]
• [redistribute material from this website [except for content specifically and expressly made available for redistribution].]



In these terms and conditions, “your user content” means material (including without limitation text, images, audio material, video material and audio-visual material) that you submit to this website, for whatever purpose.
</p>
                        </div>
                  <div class="modal-footer">
                    <a class="btn btn-primary" data-dismiss="modal" href="#mymodal" aria-hidden="true">close</a>
                  </div>

    </div>
  </section>
</div>
</div>
</div>
</div>
  </body>
  </html>