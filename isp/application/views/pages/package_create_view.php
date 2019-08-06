<html>
<head>

<link href="<?php echo base_url(); ?>style/style.css" rel="stylesheet" type="text/css" />
   
<link href="<?php echo base_url(); ?>style/calendar.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo base_url(); ?>script/calendar.js"></script>

</head>    
<body>

    <header class="container_12 clearfix">
        <div class="grid_12">
            <h1><?php echo $title; ?></h1>
        </div>
    </header>

    <div class="content">
      
        <?php echo $message; ?>
        <?php echo validation_errors(); ?>
                
    </div>

<section class="container_12 clearfix">
    <div class="portlet grid_12">
        <header>
            <h2>Create Package Form</h2>
        </header>
        <section class="form has-validation">
           <?php echo form_open($action); ?>

            <div class="clearfix">

            <label for="form-name" class="form-label">Package Name <em>*</em><small>Enter Package name</small></label>

            <div class="form-input"><input type="text" id="form-name" name="name" ></div>

             <div class="form-err clearfix">
                <?php echo form_error("name","<p align='left' class='error'>");?>
            </div>

        </div>

        <div class="clearfix">

            <label for="form-bandwidth" class="form-label">Bandwidth<em>*</em><small>Package Bandwidth Range</small></label>

            <div class="form-input"><input type="text" id="form-bandwidth" name="bandwidth" ></div>

            <div class="form-err clearfix">
                <?php echo form_error("bandwidth","<p align='left' class='error'>");?>
            </div>  
        </div>

        <div class="clearfix">

            <label for="form-speed" class="form-label">Speed <em>*</em><small>Package Speed limit</small></label>

            <div class="form-input"><input type="text" id="form-speed" name="speed" ></div>
            <div class="form-err clearfix">
                <?php echo form_error("speed","<p align='left' class='error'>");?>
            </div>  

        </div>

        <div class="clearfix">

            <label for="form-price" class="form-label">Price <em>*</em><small>Package Price</small></label>

            <div class="form-input"><input type="text" id="form-price" name="price" ></div>

            <div class="form-err clearfix">
                <?php echo form_error("price","<p align='left' class='error'>");?>
            </div>
        </div>

        

        <div class="clearfix">

            <label for="form-description" class="form-label">Description<em>*</em><small>Package Details</small></label>

            <div class="form-input"><textarea id="form-description" name="description" rows="6" cols="35"></textarea></div>

            <div class="form-err clearfix">
                <?php echo form_error("description","<p align='left' class='error'>");?>
            </div>  
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






