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
            </div>

            <div class="clearfix">

                <label for="form-name" class="form-label">Name <em>*</em><small>Enter your name</small></label>

               <div class="form-input"><input type="text" name="cu_name" disabled="disable" class="text" value="<?php echo (isset($customer['cu_name']))?$customer['cu_name']:''; ?>"/> </td>
                <input type="hidden" name="cu_name" value="<?php echo (isset($customer['cu_name']))?$customer['cu_name']:''; ?>"/>
                </div>
            </div>
			
			<div class="clearfix">

                <label for="form-address" class="form-label">Address<em>*</em><small>Current address</small></label>

               <div class="form-input"><input type="text" name="address" disabled="disable" class="text" value="<?php echo (isset($customer['address']))?$customer['address']:''; ?>"/> </td>
                <input type="hidden" name="address" value="<?php echo (isset($customer['address']))?$customer['address']:''; ?>"/>
                </div>

            </div>
                                
            <div class="clearfix">

                <label for="form-dob" class="form-label">Birth Date<em>*</em><small>Date Of Birth</small></label>
                                    
                <div class="form-input"><input type="text" name="dob" disabled="disable" class="text" value="<?php echo (isset($customer['dob']))?$customer['dob']:''; ?>"/> </td>
                <input type="hidden" name="dob" value="<?php echo (isset($customer['dob']))?$customer['dob']:''; ?>"/>

                </div>

            </div>

            <div class="clearfix">

                <label for="form-gender" class="form-label">Gender<em>*</em><small>Enter Gender Option</small></label>

               <div class="form-input"><input type="text" name="gender" disabled="disable" class="text" value="<?php echo (isset($customer['gender']))?$customer['gender']:''; ?>"/> </td>
                <input type="hidden" name="gender" value="<?php echo (isset($customer['gender']))?$customer['gender']:''; ?>"/>
                </div>

            </div>

            <div class="clearfix">

                <label for="form-phone" class="form-label">Phone <em>*</em><small>Enter your Phone number</small></label>

                <div class="form-input"><input type="text" name="phone" disabled="disable" class="text" value="<?php echo (isset($customer['contact']))?$customer['contact']:''; ?>"/> </td>
                <input type="hidden" name="phone" value="<?php echo (isset($customer['contact']))?$customer['contact']:''; ?>"/>
                </div>
            </div>

            <div class="clearfix">

           		<label for="form-email" class="form-label">Email <em>*</em><small>A valid email address</small></label>

                <div class="form-input"><input type="text" name="email" disabled="disable" class="text" value="<?php echo (isset($customer['email']))?$customer['email']:''; ?>"/> </td>
                <input type="hidden" name="email" value="<?php echo (isset($customer['email']))?$customer['email']:''; ?>"/>
                </div>

            </div>


            <div class="clearfix">

	            <label for="form-ip" class="form-label">IP adress<em>*</em><small>User IP address</small></label>

    	        <div class="form-input"><input type="text" id="form-ip" name="ip" class="text" value="<?php echo (isset($customer['ip']))?$customer['ip']:''; ?>" ></div>

                <div class="form-err clearfix">
                    <?php echo form_error("ip","<p align='left' class='error'>");?>
                </div>
            </div>              
            

            <div class="clearfix">

                <label for="form-mac" class="form-label">MAC adress <em>*</em><small>User MAC address</small></label>

                <div class="form-input"><input type="text" id="form-mac" name="mac" class="text" value="<?php echo (isset($customer['mac']))?$customer['mac']:''; ?>" ></div>

                <div class="form-err clearfix">
                    <?php echo form_error("mac","<p align='left' class='error'>");?>
                </div> 
            </div>
                                     
           
            <div class="clearfix">

               <label for="form-pacage" class="form-label">Package<small>Select a package of your choice</small></label>

                 <div class="form-input"><input type="text" name="package" disabled="disable" class="text" value="<?php echo (isset($customer['package']))?$customer['package']:''; ?>"/> </td>
                <input type="hidden" name="package" value="<?php echo (isset($customer['package']))?$customer['package']:''; ?>"/>
                </div>
            </div>

            <div class="clearfix">

                <label for="form-paid" class="form-label">Paid<small>Paid Service Chare</small></label>

                <div class="form-input"><input type="text" name="paid" disabled="disable" class="text" value="<?php echo (isset($customer['paid']))?$customer['paid']:''; ?>"/> </td>
                <input type="hidden" name="paid" value="<?php echo (isset($customer['paid']))?$customer['paid']:''; ?>"/>
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