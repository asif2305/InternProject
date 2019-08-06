
<div class="row">
	<div class="col-xs-6 col-md-5"></div>
	<div>
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Click Here For View Details
</button>
</div>
</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Personal Information</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
              <div class="form-group">
					    <label for="inputPassword" class="col-sm-2 control-label">User_ID</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="disabledInput" disabled  value="<?php echo $record->cu_id;?>">
			          </div>
              </div>
               <div class="form-group">
					    <label for="inputPassword" class="col-sm-2 control-label">Username</label>
					    <div class="col-sm-8">
					      <input type="text"  class="form-control" id="disabledInput" disabled value="<?php echo $record->cu_name;?>">
			          </div>
              </div>
               <div class="form-group">
					    <label for="inputPassword" class="col-sm-2 control-label">Address</label>
					    <div class="col-sm-8">
					      <input type="text"  class="form-control" id="disabledInput"disabled value="<?php echo $record->address;?>" >
			          </div>
              </div>
               <div class="form-group">
					    <label for="inputPassword" class="col-sm-2 control-label">Date of Birth</label>
					    <div class="col-sm-8">
					      <input type="text"  class="form-control" id="disabledInput" disabled value="<?php echo $record->dob;?>">
			          </div>
              </div>
               <div class="form-group">
					    <label for="inputPassword" class="col-sm-2 control-label">Gender</label>
					    <div class="col-sm-8">
					      <input type="text"  class="form-control" id="disabledInput"disabled value="<?php echo $record->gender;?>" >
			          </div>
              </div>
               <div class="form-group">
					    <label for="inputPassword" class="col-sm-2 control-label">Contact</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="disabledInput" disabled value="<?php echo $record->contact;?>">
			          </div>
              </div>
               <div class="form-group">
					    <label for="inputPassword" class="col-sm-2 control-label">Email</label>
					    <div class="col-sm-8">
					      <input type="text"  class="form-control" id="disabledInput" disabled value="<?php echo $record->email;?>">
			          </div>
              </div>
               
               <div class="form-group">
					    <label for="inputPassword" class="col-sm-2 control-label">IP</label>
					    <div class="col-sm-8">
					      <input type="text"  class="form-control" id="disabledInput" disabled value="<?php echo $record->ip;?>">
			          </div>
              </div>
               <div class="form-group">
					    <label for="inputPassword" class="col-sm-2 control-label">Mac</label>
					    <div class="col-sm-8">
					      <input type="text"  class="form-control" id="disabledInput" disabled value="<?php echo $record->mac;?>">
			          </div>
              </div>
               <div class="form-group">
					    <label for="inputPassword" class="col-sm-2 control-label">Package</label>
					    <div class="col-sm-8">
					      <input type="text"  class="form-control" id="disabledInput" disabled value="<?php echo $record->package;?>">
			          </div>
              </div>
               <div class="form-group">
					    <label for="inputPassword" class="col-sm-2 control-label">Paid</label>
					    <div class="col-sm-8">
					      <input type="text"  class="form-control" id="disabledInput" disabled value="<?php echo $record->paid;?>">
			          </div>
              </div>
               <div class="form-group">
					    <label for="inputPassword" class="col-sm-2 control-label">Amount</label>
					    <div class="col-sm-8">
					      <input type="text"  class="form-control" id="disabledInput" disabled value="<?php echo $record->amount;?>">
			          </div>
              </div>
               <div class="form-group">
					    <label for="inputPassword" class="col-sm-2 control-label">Status</label>
					    <div class="col-sm-8">
					      <input type="text"  class="form-control" id="disabledInput" disabled value="<?php echo $record->status;?>">
			          </div>
              </div>
 
         </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

    