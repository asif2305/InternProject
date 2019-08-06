
<header class="container_12 clearfix">
                    <div class="grid_12">
                       <h1>View Transection History</h1>
                    </div>
    </header>

<section class="form has-validation">
    	<?php echo form_open($action); ?>	
		<div class="clearfix">

            <label for="form-fstdt" class="form-label">From Date:<small>in formet Year-Month-Day</small></label>
            
            <div class="form-input"><input type="text" id="form-fstdt" name="fstdt" onclick="displayDatePicker('fstdt');" value="<?php echo (set_value('fstdt'))?set_value('fstdt'):''; ?>"/>
            <a href="javascript:void(0);" onclick="displayDatePicker('fstdt');"><img src="<?php echo base_url(); ?>style/images/calendar.png" alt="calendar" border="0"></a>
            </div>

            <div class="form-err clearfix">
                <?php echo form_error("fstdt","<p align='left' class='error'>");?>
            </div>  
        </div>

        <div class="clearfix">

            <label for="form-secdt" class="form-label">To Date:<small>in formet Year-Month-Day</small></label>
            
            <div class="form-input"><input type="text" id="form-secdt" name="secdt" onclick="displayDatePicker('secdt');" value="<?php echo (set_value('secdt'))?set_value('secdt'):''; ?>"/>
            <a href="javascript:void(0);" onclick="displayDatePicker('secdt');"><img src="<?php echo base_url(); ?>style/images/calendar.png" alt="calendar" border="0"></a>
            </div>

            <div class="form-err clearfix">
                <?php echo form_error("secdt","<p align='left' class='error'>");?>
            </div>  
        </div>

        <div class="form-action clearfix">

            <button class="button" type="submit" >Submit</button>

            <button class="button" type="reset">Reset</button>

        </div>

	    <?php echo form_close();?>    
</section>