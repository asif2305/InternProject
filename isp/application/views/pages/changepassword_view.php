<html>
<head>

<link href="<?php echo base_url(); ?>style/style.css" rel="stylesheet" type="text/css" />
   
</head>    
<body>

    <header class="container_12 clearfix">
        <div class="grid_12">
            <h1><?php echo $title ; ?></h1>
        </div>
    </header>

    <div class="content">
      
        <?php echo $message; ?>
     </div>

    <section class="container_12 clearfix">
    <div class="portlet grid_12">
        <header>
            <h2>Change Password Form</h2>
        </header>

        <section class="form has-validation">
           <?php echo form_open($action); ?>    

        <div class="clearfix">

            <label for="form-prvpassword" class="form-label">Previous Password<em>*</em><small>Enter previous password</small></label>

            <div class="form-input"><input type="password" id="form-prvpassword"  name="prvpassword" maxlength="30"></div>

            <div class="form-err clearfix">
                <?php echo form_error("prvpassword","<p align='left' class='error'>");?>
            </div>  
        </div>

        <div class="clearfix">

            <label for="form-password" class="form-label">New Password<em>*</em><small>max. 30 char.</small></label>

            <div class="form-input"><input type="password" id="form-password"  name="password" maxlength="30"></div>

            <div class="form-err clearfix">
                <?php echo form_error("password","<p align='left' class='error'>");?>
            </div>  
        </div>

        <div class="clearfix">

            <label for="form-password-check" class="form-label">Re-enter Password<em>*</em><small>Re-enter new password</small></label>

            <div class="form-input"><input type="password" id="form-password-check"  name="check"  maxlength="30"></div>

            <div class="form-err clearfix">
                <?php echo form_error("check","<p align='left' class='error'>");?>
            </div>  

        </div>

        <div class="form-action clearfix">

            <button class="button" type="submit" >Submit</button>

            <button class="button" type="reset">Reset</button>

        </div>
                                
           <?php echo form_close();?>
           <br></br>
           <?php // echo $link_back; ?>
        </section>
    </div>
</section> 
</body>               
</html>


          