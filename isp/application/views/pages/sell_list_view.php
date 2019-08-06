<html>

<head>
	 
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>style/style.css" />

</head>

<body>
    
    <header class="container_12 clearfix">
                    <div class="grid_12">
                       <h1>Payment Details</h1>
                    </div>
    </header>
	
	<div class="content">
		<div class="data"><?php echo $table; ?></div>
		<br/>
		<?php echo "Total entry : ",$nrows;?><br/>
		<?php echo "Total amount : ",$total;?>
	</div>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript">
     $('tr:even').css('background', '#e3e3e3');
	</script>

</body>
</html>