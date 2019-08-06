<html>
<head>

<link href="<?php echo base_url(); ?>style/style.css" rel="stylesheet" type="text/css" />
   
<link href="<?php echo base_url(); ?>style/calendar.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo base_url(); ?>script/calendar.js"></script>

</head>    
<body>

    <header class="container_12 clearfix">
        <div class="grid_12">
            <h1>Create New Customer</h1>
        </div>
    </header>

    <div class="content">
      
        <?php echo $message; ?>
        
    </div>

<section class="container_12 clearfix">
    <div class="portlet grid_12">
        <header>
            <h2>Customer Registration Form</h2>
        </header>
        <section class="form has-validation">
           <?php echo form_open($action); ?>

        <div class="clearfix">

            <label for="form-name" class="form-label">Name <em>*</em><small>Enter your name</small></label>

            <div class="form-input"><input type="text" id="form-name" name="name" ></div>

            <div class="form-err clearfix">
               	<?php echo form_error("name","<p align='left' class='error'>");?>
            </div>
        </div>

        <div class="clearfix">

            <label for="form-address" class="form-label">Address<em>*</em><small>Current address</small></label>

            <div class="form-input"><input type="text" id="form-address" name="address" ></div>

            <div class="form-err clearfix">
                <?php echo form_error("address","<p align='left' class='error'>");?>
            </div>  
        </div>
                                
        <div class="clearfix">

            <label for="form-dob" class="form-label">Birth Date<em>*</em><small>Date Of Birth</small></label>
                                    
            <div class="form-input"><input type="text" id="form-dob" name="dob" onclick="displayDatePicker('dob');" value="<?php echo (set_value('dob'))?set_value('dob'):''; ?>"/>

            <a href="javascript:void(0);" onclick="displayDatePicker('dob');"><img src="<?php echo base_url(); ?>style/images/calendar.png" alt="calendar" border="0"></a>
            </div>

            <div class="form-err clearfix">
                <?php echo form_error("dob","<p align='left' class='error'>");?>
            </div>  
        </div>
        
        <div class="clearfix">

            <label for="form-gender" class="form-label">Gender <em>*</em><small>Enter Gender Option</small></label>

            <div class="form-input">
             <td><input type="radio" name="gender" value="Male" <?php echo set_radio('gender', 'Male', TRUE); ?>/> Male
                <input type="radio" name="gender" value="Female" <?php echo set_radio('gender', 'Female'); ?>/> Female
             </td>
            </div>

            <div class="form-err clearfix">
                <?php echo form_error("gender","<p align='left' class='error'>");?>
            </div>  
        </div>

        <div class="clearfix">

            <label for="form-phone" class="form-label">Phone <em>*</em><small>Enter your Phone number</small></label>

            <div class="form-input"><input type="text" id="form-phone" name="phone" ></div>
            <div class="form-err clearfix">
                <?php echo form_error("phone","<p align='left' class='error'>");?>
            </div>  
        </div>

        <div class="clearfix">

            <label for="form-email" class="form-label">Email <em>*</em><small>A valid email address</small></label>

            <div class="form-input"><input type="text" id="form-email" name="email" ></div>

            <div class="form-err clearfix">
              	<?php echo form_error("email","<p align='left' class='error'>");?>
            </div>
        </div>

        <div class="clearfix">

            <label for="form-password" class="form-label">Password<em>*</em><small>max. 30 char.</small></label>

            <div class="form-input"><input type="password" id="form-password"  name="password" maxlength="30"></div>

            <div class="form-err clearfix">
               	<?php echo form_error("password","<p align='left' class='error'>");?>
            </div>	
        </div>

        <div class="clearfix">

            <label for="form-password-check" class="form-label">Password check<em>*</em><small>Re-enter password</small></label>

            <div class="form-input"><input type="password" id="form-password-check"  name="check"  maxlength="30"></div>

            <div class="form-err clearfix">
               	<?php echo form_error("check","<p align='left' class='error'>");?>
            </div>	
        </div>

        <div class="clearfix">

            <label for="form-ip" class="form-label">IP adress<em>*</em><small>User IP address</small></label>

            <div class="form-input"><input type="text" name="ip" disabled="disable" class="text" value="<?php echo (isset($customer['ip']))?$customer['ip']:''; ?>"/> </td>
            <input type="hidden" name="ip" value="<?php echo (isset($customer['ip']))?$customer['ip']:''; ?>"/>
            </div>
            <div class="form-err clearfix">
                <?php echo form_error("ip","<p align='left' class='error'>");?>
            </div>  
        </div>

        <div class="clearfix">

            <label for="form-mac" class="form-label">MAC adress <em>*</em><small>User MAC address</small></label>

            <div class="form-input"><input type="text" name="mac" disabled="disable" class="text" value="<?php echo (isset($customer['mac']))?$customer['mac']:''; ?>"/> </td>
            <input type="hidden" name="mac" value="<?php echo (isset($customer['mac']))?$customer['mac']:''; ?>"/>
            </div>
   
            <div class="form-err clearfix">
                <?php echo form_error("mac","<p align='left' class='error'>");?>
            </div>  
        </div>

        <div class="clearfix">

            <label for="form-pacage" class="form-label">Package<small>Select a package of your choice</small></label>

            <div class="form-input">
           		<select class="selector" name="package">
                    <?php foreach($res as $tem):?>
                	<option value="<?php echo $tem->name;?>"><?php echo $tem->name;?></option>
                    <?php endforeach;?>    
				</select>
			</div>
        </div>

        <div class="clearfix">

            <label for="form-amount" class="form-label">Amount<small>Amount that customer paid</small></label>

            <div class="form-input"><input type="text" id="form-amount" name="amount" ></div>

            <div class="form-err clearfix">
                <?php echo form_error("amount","<p align='left' class='error'>");?>
            </div>
        </div>

        <div class="clearfix">

            <label for="form-paid" class="form-label">Paid<small>Paid Service Chare</small></label>

            <div class="form-input">
            <select class="selector" name="paid"class="text" value="<?php echo (isset($customer['paid']))?$customer['paid']:''; ?>">
                <option value="Yes">Yes</option>
                <option value="Not yet paid">No</option>                                  
            </select>
            </div>
        </div>

        <div class="clearfix">

            <label for="form-status" class="form-label">Status<small>Customer current status</small></label>

            <div class="form-input">
                <select class="selector" name="status">
                    <option value="inactive">Inactive</option>
                    <option value="active">Active</option>
                </select>
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