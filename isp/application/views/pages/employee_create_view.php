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
        <?php //echo validation_errors(); ?>
                
    </div>

<section class="container_12 clearfix">
    <div class="portlet grid_12">
        <header>
            <h2>Employee Registration Form</h2>
        </header>
        <section class="form has-validation">
           <?php echo form_open($action); ?>

            <div class="clearfix">
 
               <label for="form-username" class="form-label">Username <em>*</em><small>Enter a unique username</small></label>

                <div class="form-input"><input type="text" id="form-username" name="username" ></div>

                    <div class="form-err clearfix">
                        <?php echo form_error("username","<p align='left' class='error'>");?>
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

                <label for="form-name" class="form-label">Name <em>*</em><small>Enter Employee name</small></label>

                <div class="form-input"><input type="text" id="form-name" name="name" ></div>

                    <div class="form-err clearfix">
                        <?php echo form_error("name","<p align='left' class='error'>");?>
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

                <label for="form-dob" class="form-label">Birthday<em>*</em><small>Date Of Birth</small></label>
                                    
                    <div class="form-input"><input type="text" id="form-dob" name="dob" onclick="displayDatePicker('dob');" value="<?php echo (set_value('dob'))?set_value('dob'):''; ?>"/>
                        <a href="javascript:void(0);" onclick="displayDatePicker('dob');"><img src="<?php echo base_url(); ?>style/images/calendar.png" alt="calendar" border="0"></a>
                    </div>

                    <div class="form-err clearfix">
                        <?php echo form_error("dob","<p align='left' class='error'>");?>
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

                <label for="form-phone" class="form-label">Phone <em>*</em><small>Enter your Phone number</small></label>

                    <div class="form-input"><input type="text" id="form-phone" name="phone" ></div>
                    <div class="form-err clearfix">
                        <?php echo form_error("phone","<p align='left' class='error'>");?>
                    </div>  
            </div>

             <div class="clearfix">

                <label for="form-salary" class="form-label">Salary <em>*</em><small>Enter Employee Salary</small></label>

                <div class="form-input"><input type="text" id="form-salary" name="salary" ></div>

                    <div class="form-err clearfix">
                        <?php echo form_error("salary","<p align='left' class='error'>");?>
                    </div>
            </div>
                                
            <div class="clearfix">

                <label for="form-privilege" class="form-label">Privilege<small>Select employee privilege</small></label>

                <div class="form-input">
                    <select class="selector" name="privilege">
                        <option value="Admin">Admin</option>
                        <option value="Accounts">Accounts</option>
                        <option value="It">IT</option>
                    </select>
                </div>
            </div>

            <div class="form-action clearfix">

                <button class="button" type="submit" >Submit</button>
                <button class="button" type="reset">Reset</button>
            </div>

                                
           <br></br>
           <?php echo $link_back; ?>
        </section>
    </div>
</section> 
</body>               
</html>






