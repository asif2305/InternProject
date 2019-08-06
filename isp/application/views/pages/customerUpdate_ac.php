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
        
    </div>

	<section class="container_12 clearfix">
    <div class="portlet grid_12">
        <header>
            <h2>Customer information Update Form</h2>
        </header>

        <section class="form has-validation">
           <?php echo form_open($action); ?>	

			<div class="clearfix">

                <label for="form-id" class="form-label">ID <em>*</em><small>Enter Unique Id Number</small></label>

                <div class="form-input"><input type="text" name="ci_id" disabled="disable" class="text" value="<?php echo (isset($customer['cu_id']))?$customer['cu_id']:''; ?>"/> </td>
				<input type="hidden" name="cu_id" value="<?php echo (isset($customer['cu_id']))?$customer['cu_id']:''; ?>"/>
            </div>

            <div class="clearfix">

                <label for="form-name" class="form-label">Name <em>*</em><small>Enter your name</small></label>

                <div class="form-input"><input type="text" id="form-name" name="name"class="text" value="<?php echo (isset($customer['cu_name']))?$customer['cu_name']:''; ?>" ></div>

                <div class="form-err clearfix">
                    <?php echo form_error("name","<p align='left' class='error'>");?>
                </div>
            </div>
			
			<div class="clearfix">

                <label for="form-address" class="form-label">Address<em>*</em><small>Current address</small></label>

                <div class="form-input"><input type="text" id="form-address" name="address" class="text" value="<?php echo (isset($customer['address']))?$customer['address']:''; ?>" ></div>

                <div class="form-err clearfix">
                    <?php echo form_error("address","<p align='left' class='error'>");?>
                </div>

            </div>
                                
            <div class="clearfix">

                <label for="form-dob" class="form-label">Birth Date<em>*</em><small>Date Of Birth</small></label>
                                    
                <div class="form-input"><input type="text" id="form-dob" name="dob" onclick="displayDatePicker('dob');" value="<?php echo (set_value('dob'))?set_value('dob'):$customer['dob']; ?>">
                	
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

                <div class="form-input"><input type="text" id="form-phone" name="phone" class="text" value="<?php echo (isset($customer['contact']))?$customer['contact']:''; ?>" ></div>
            
                <div class="form-err clearfix">
                    <?php echo form_error("phone","<p align='left' class='error'>");?>
                </div>
            </div>

            <div class="clearfix">

           		<label for="form-email" class="form-label">Email <em>*</em><small>A valid email address</small></label>

                <div class="form-input"><input type="text" id="form-email" name="email" class="text" value="<?php echo (isset($customer['email']))?$customer['email']:''; ?>"></div>

                <div class="form-err clearfix">
                    <?php echo form_error("email","<p align='left' class='error'>");?>
                </div>
            </div>


            <div class="clearfix">

	            <label for="form-ip" class="form-label">IP adress<em>*</em><small>User IP address</small></label>

    	        <div class="form-input"><input type="text" name="ip" disabled="disable" class="text" value="<?php echo (isset($customer['ip']))?$customer['ip']:''; ?>"/> </td>
                <input type="hidden" name="ip" value="<?php echo (isset($customer['ip']))? $customer['ip']:''; ?>"/>               
            </div>

            <div class="clearfix">

                <label for="form-mac" class="form-label">MAC adress <em>*</em><small>User MAC address</small></label>

                <div class="form-input"><input type="text" name="mac" disabled="disable" class="text" value="<?php echo (isset($customer['mac']))?$customer['mac']:''; ?>"/> </td>
                <input type="hidden" name="mac" value="<?php echo (isset($customer['mac']))?$customer['mac']:''; ?>"/>
                                     
            </div>

            <div class="clearfix">

               <label for="form-pacage" class="form-label">Package<small>Select a package of your choice</small></label>

                <div class="form-input">
                <select class="selector" name="package" class="text" >
                    <?php foreach($res as $tem):?>
                <option value="<?php echo $tem->name;?>" <?php echo (isset($customer['package']) && $customer['package']==$tem->name)?'selected':''; ?>><?php echo $tem->name;?></option>
                    <?php endforeach;?>    
                </select>
                </div>
            </div>

            <div class="clearfix">

                <label for="form-paid" class="form-label">Paid<small>Paid Service Chare</small></label>

                <div class="form-input">
                <select class="selector" name="paid"class="text" >
                    <option value="Yes" <?php echo (isset($customer['paid']) && $customer['paid']=='Yes')?'selected':''; ?>>Yes</option>
                    <option value="No" <?php echo (isset($customer['paid']) && $customer['paid']=='No')?'selected':''; ?>>No</option>
                    <option value="Not yet Paid" <?php echo (isset($customer['paid']) && $customer['paid']=='Not yet Paid')?'selected':''; ?>>Not yet Paid</option>
                    <option value="Defaulter" <?php echo (isset($customer['paid']) && $customer['paid']=='Defaulter')?'selected':''; ?>>Defaulter</option>                                  
                </select>
                </div>
            </div>            

            <div class="clearfix">

                <label for="form-status" class="form-label">Status<small>Customer current status</small></label>

                <div class="form-input">
                <select class="selector" name="status"class="text" >
                    <option value="inactive" <?php echo (isset($customer['status']) && $customer['status']=='inactive')?'selected':''; ?> >Inactive</option>
                    <option value="active" <?php echo (isset($customer['status']) && $customer['status']=='active')?'selected':''; ?> >Active</option>                                  
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