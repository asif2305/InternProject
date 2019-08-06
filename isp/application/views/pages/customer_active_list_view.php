<html>

<head>
	 
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>style/style.css" />

</head>

<body>
    
    <header class="container_12 clearfix">
                    <div class="grid_12">
                       <h1>Active Customers List</h1>
                    </div>
    </header>
	
	
    	<section class="form has-validation">
    	<?php echo form_open($action); ?>	
			<div class="clearfix">

	            <label for="form-id" class="form-label">Customer ID<small>Enter customer id to clear the bill</small></label>

	            <div class="form-input"><input type="text" id="form-id" name="id" ></div>

	            <div class="form-err clearfix">
	                <?php echo form_error("id","<p align='left' class='error'>");?>
	            </div>

	            <label for="form-amount" class="form-label">Amount<small>Amount that customer paid</small></label>

	            <div class="form-input"><input type="text" id="form-amount" name="amount" ></div>

	            <div class="form-err clearfix">
	                <?php echo form_error("amount","<p align='left' class='error'>");?>
	            </div>


	            <div class="form-action clearfix">

		            <button class="button" type="submit" >Submit</button>

		        </div>
	        </div>
	    <?php echo form_close();?>    
	    </section>
	
	<div class="content">	        
		<div class="data"><?php echo $table; ?></div>
		<br>
		<div class="paging"><?php echo $pagination; ?></div>
		<br/>
	    <?php echo '<p>'."Total Bandwidth needed for active user : ".$sum.' GB </p>'?>
	</div>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript">
     $('tr:even').css('background', '#e3e3e3');
	</script>

</body>
</html>