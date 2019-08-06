<html>

<head>
	 
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>style/style.css" />

</head>

<body>
    
    <header class="container_12 clearfix">
                    <div class="grid_12">
                       <h1>Details Information for Customers List</h1>
                    </div>
    </header>
	
	<div class="content">
		<div class="data"><?php echo $table; ?></div>
		<br>
		<div class="paging"><?php echo $pagination; ?></div>
		<br><br/>
		<?php

		 $prev = $this->session->userdata('privilege');
		 if($prev != 'It') 
		 	echo '<h5>'.anchor('customer_list_form/addPerson/','Add new customer',array('class'=>'addPerson')).'</h5>';
	    ?>
	    
	</div>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript">
     $('tr:even').css('background', '#e3e3e3');
	</script>

</body>
</html>