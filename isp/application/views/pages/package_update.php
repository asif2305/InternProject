<html>
<head>

<link href="<?php echo base_url(); ?>style/style.css" rel="stylesheet" type="text/css" />
   
<link href="<?php echo base_url(); ?>style/calendar.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo base_url(); ?>script/calendar.js"></script>

</head>    
<body>

    <header class="container_12 clearfix">
        <div class="grid_12">
            <h1><?php echo $title ; ?></h1>
        </div>
    </header>

    <div class="content">
      
        <?php echo $message; ?>
        <?php echo validation_errors(); ?>
        
    </div>

	<section class="container_12 clearfix">
    <div class="portlet grid_12">
        <header>
            <h2>package information Update Form</h2>
        </header>

        <section class="form has-validation">
           <?php echo form_open($action); ?>	

		<div class="clearfix">

            <label for="form-id" class="form-label">ID <em>*</em><small>Enter Unique Id Number</small></label>

            <div class="form-input"><input type="text" name="no" disabled="disable" class="text" value="<?php echo (isset($package['no']))?$package['no']:''; ?>"/> </td>
			<input type="hidden" name="no" value="<?php echo (isset($package['no']))?$package['no']:''; ?>"/>
        </div>

        <div class="clearfix">

            <label for="form-name" class="form-label">Name <em>*</em><small>Enter package name</small></label>

            <div class="form-input"><input type="text" id="form-name" name="name"class="text" value="<?php echo (isset($package['name']))?$package['name']:''; ?>" ></div>

        </div>
		
		<div class="clearfix">

            <label for="form-bandwidth" class="form-label">Bandwidth <em>*</em><small>User Bandwidth limitation</small></label>

            <div class="form-input"><input type="text" id="form-bandwidth" name="bandwidth"class="text" value="<?php echo (isset($package['bandwidth']))?$package['bandwidth']:''; ?>" ></div>

        </div>                     
        
        <div class="clearfix">

            <label for="form-speed" class="form-label">Speed <em>*</em><small>Enter Speed value</small></label>

            <div class="form-input"><input type="text" id="form-speed" name="speed" class="text" value="<?php echo (isset($package['speed']))?$package['speed']:''; ?>" ></div>
        </div>

        <div class="clearfix">

       		<label for="form-price" class="form-label">Price <em>*</em><small>Enter price value</small></label>

        <div class="form-input"><input type="text" id="form-price" name="price" class="text" value="<?php echo (isset($package['price']))?$package['price']:''; ?>">
        </div>

        </div>

        <div class="clearfix">

            <label for="form-description" class="form-label">Description<em>*</em><small>Package Details</small></label>

            <div class="form-input"><textarea id="form-description" name="description" rows="6" cols="35"><?php echo (isset($package['description']))?$package['description']:''; ?></textarea></div>

        </div>

        <div class="form-action clearfix">
            <button class="button" type="submit" >Submit</button>
            <button class="button" type="reset">Reset</button>
        </div>
                                
       <?php echo form_close();?>
       <br></br>
       <?php echo $link_back; ?>
        </section>
    </div>
</section> 
</body>               
</html>