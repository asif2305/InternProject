<div class="row">
	<div class="col-xs-6 col-md-5"></div>
	<div>
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Change your password if needed
</button>
</div>
</div>
<br/><br/><br/><br/><br/>
<div class="row">
	<div class="col-xs-6 col-md-5  "></div>
	<div style="color:red; " class="largeIcon">
  
   <?php echo $message; ?>
      
</div>
</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Password Change</h4>
      </div>
      <div class="modal-body">
      	 <?php echo form_open('web_user/change');?>
        <div class="form-horizontal" role="form">
              <div class="form-group">
					    <label for="inputPassword" class="col-sm-2 control-label">Previous Password</label>
					    <div class="col-sm-8">
					      <input type="password" name="prvpassword"class="form-control" id="disabledInput" required >
			           <?php echo form_error('prvpassword','<p style="color:red;" align="center" class="error">');?>      
			          </div>
              </div>
              
              <div class="form-group">
					    <label for="inputPassword" class="col-sm-2 control-label">New Password</label>
					    <div class="col-sm-8">
					      <input type="password" name="password" class="form-control" id="disabledInput" required>
			              <?php echo form_error('password','<p style="color:red;" align="center" class="error">');?>   
			          </div>
              </div>

               <div class="form-group">
              <label for="inputPassword" class="col-sm-2 control-label">Password Check</label>
              <div class="col-sm-8">
                <input type="password" name="check" class="form-control" id="disabledInput" required>
                    <?php echo form_error('check','<p style="color:red;" align="center" class="error">');?>   
                </div>
              </div>
              <div class="form-group">
					    <label for="inputPassword" class="col-sm-2 control-label"></label>
					    <div class="col-sm-8">
					      <button type="submit" class="btn btn-primary">Submit</button>
                          <button type="reset" class="btn btn-default">Reset</button>
			          </div>
              </div>
             
        </div>
    <?php echo form_close();?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

