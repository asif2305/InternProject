<html>

<head>
     
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>style/style.css" />
  
</head>

<body>
    
    <header class="container_12 clearfix">
                    <div class="grid_12">
                       <h1>Details Information for Packages List</h1>
                    </div>
    </header>
    
    <div class="content">
        <div class="data"><?php echo $table; ?></div>
        <br>
        <div class="paging"><?php echo $pagination; ?></div>
        <br><br/>
        <?php
            if($this->session->userdata('privilege')=='Admin') 
                echo "<h5>".anchor('package/addpackage/','Add new package',array('class'=>'addpackage'))."</h5>"; 
       ?>

    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript">
     $('tr:even').css('background', '#e3e3e3');
    </script>
  

</body>
</html>




