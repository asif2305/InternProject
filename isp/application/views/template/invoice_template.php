<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	 <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
</head>

<body  style="background-color:#7A7A7A" >

	<section class="form has-validation">
       <?php echo form_open('Invoice_gen/send_email'); ?>
		
	<div class="box" style="width:100%; height:50%;border:medium solid #c8c8c8;margin-top:5%">
		
        <h1  style ="text-align:center;" >Company Name (FAT)</h1>
        <h2 style="text-align:center;color:red;">INVOICE</h2>
 
 			
				<div class="box" style="box-sizing:border-box;-moz-box-sizing:border-box; /* Firefox */ -webkit-box-sizing:border-box; /* Opera, Safari And Chrome */ -ms-flexbox-sizing:border-box; /* Internet Explorer */
										width:47.5%;height:0%;border:2px solid #c8c8c8;text-align:center;float:left;padding:none;margin-left:1em;">
					<div class="box" style="box-sizing:border-box; -moz-box-sizing:border-box; /* Firefox */ -webkit-box-sizing:border-box; /* Opera, Safari And Chrome */ -ms-flexbox-sizing:border-box; /* Internet Explorer */
											 width:auto;height:auto;border:1px solid #c8c8c8;margin:.5em;
											 border-top:2px solid red;border-bottom:2px solid green;border-left:2px solid red;border-right:2px solid green;">
				       
							<h4 style="text-align:center;"><b>Invoiced To</b></h4>
						
						
						    <table align="center">
							<tr><td>Name : </td>
							<td> <?php echo $customer->cu_name; ?> </td></tr>
							<tr><td>Address : </td>
							<td><?php echo $customer->address; ?></td></tr>
							<tr><td>phone : </td>
							<td><?php echo $customer->contact; ?></td></tr>
							</table>
						
					</div>
				</div>

				<div class="box" style="box-sizing:border-box;-moz-box-sizing:border-box; /* Firefox */ -webkit-box-sizing:border-box; /* Opera, Safari And Chrome */ -ms-flexbox-sizing:border-box; /* Internet Explorer */
										width:47.5%;height:50%;border:2px solid #c8c8c8;text-align:center;float:left;padding:none;">
					<div class="box" style="box-sizing:border-box; -moz-box-sizing:border-box; /* Firefox */ -webkit-box-sizing:border-box; /* Opera, Safari And Chrome */ -ms-flexbox-sizing:border-box; /* Internet Explorer */
											 width:auto;height:auto;padding-left:none;border:1px solid #c8c8c8;margin:.5em;
											 border-top:2px solid red;border-bottom:2px solid green;border-left:2px solid red;border-right:2px solid green;">
				       
							<h4 style="text-align:center;"><b>Invoiced From</b></h4>
							<table align="center">
							<tr><td>Face Of Art Technologies Ltd </td></tr>
							<tr><td>Address : Mohakhali DOHS </td></tr>
							<tr><td>Phone : +88017******85</td/></tr>
							</table>
						</div>
				</div>
			   
			 		<br><br /><br><br /><br><br /><br><br /><br><br />
			
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<b>Invoice ID # <?php echo $customer->cu_id; ?>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Invoice Date # ...............</b>
			              
		            <br><br /><br />

				<table border ='1' align="center" style ="border:2px solid #c8c8c8;background:#7A7A7A;width:95%;height:30%">
				   
				   <thead>
				      <tr>
				        <th rowspan="5" style="border-top:2px solid red;border-bottom:2px solid green;border-left:2px solid red;border-right:2px solid green;">Code No</th>
				        <th rowspan="5" style="border-top:2px solid red;border-bottom:2px solid green;border-left:2px solid red;border-right:2px solid green;">Name</th>
				        <th rowspan="5" style="border-top:2px solid red;border-bottom:2px solid green;border-left:2px solid red;border-right:2px solid green;">Description</th>
				        <th colspan="5" style="border-top:2px solid red;border-bottom:2px solid green;border-left:2px solid red;border-right:2px solid green;">Amount</th>
				      </tr>
				      <tr>
				        <th rowspan="3" style="border-top:2px solid red;border-bottom:2px solid green;border-left:2px solid red;border-right:2px solid green;">Tk.</th>
				        <th rowspan="3" style="border-top:2px solid red;border-bottom:2px solid green;border-left:2px solid red;border-right:2px solid green;">Ps.</th>
				      </tr>
				   </thead>

				   <tbody>
				      
				    	<tr>
							<td align ="center" style="border-top:2px solid red;border-bottom:2px solid green;border-left:2px solid red;border-right:2px solid green;">1</td>
							<td style="border-top:2px solid red;border-bottom:2px solid green;border-left:2px solid red;border-right:2px solid green;">Package Name</td>
							<td style="border-top:2px solid red;border-bottom:2px solid green;border-left:2px solid red;border-right:2px solid green;"><?php echo $customer->package; ?></td>
						</tr>
						<tr>
							<td align ="center" style="border-top:2px solid red;border-bottom:2px solid green;border-left:2px solid red;border-right:2px solid green;">2</td>
							<td style="border-top:2px solid red;border-bottom:2px solid green;border-left:2px solid red;border-right:2px solid green;">Bandwidth</td>
							<td style="border-top:2px solid red;border-bottom:2px solid green;border-left:2px solid red;border-right:2px solid green;"><?php echo $bandwidth; ?></td>
						</tr>
						<tr>
							<td align ="center" style="border-top:2px solid red;border-bottom:2px solid green;border-left:2px solid red;border-right:2px solid green;">3</td>
							<td style="border-top:2px solid red;border-bottom:2px solid green;border-left:2px solid red;border-right:2px solid green;">Your Ip</td>
							<td style="border-top:2px solid red;border-bottom:2px solid green;border-left:2px solid red;border-right:2px solid green;"><?php echo $customer->ip; ?></td>
						</tr>
						<tr>
							<td align ="center" style="border-top:2px solid red;border-bottom:2px solid green;border-left:2px solid red;border-right:2px solid green;">4</td>
							<td style="border-top:2px solid red;border-bottom:2px solid green;border-left:2px solid red;border-right:2px solid green;">Your Mac</td>
							<td style="border-top:2px solid red;border-bottom:2px solid green;border-left:2px solid red;border-right:2px solid green;"><?php echo $customer->mac; ?></td>
						</tr>
						<tr>
							<td align ="center" style="border-top:2px solid red;border-bottom:2px solid green;border-left:2px solid red;border-right:2px solid green;">5</td>
							<td style="border-top:2px solid red;border-bottom:2px solid green;border-left:2px solid red;border-right:2px solid green;">Monthly bill</td>
							<td style="border-top:2px solid red;border-bottom:2px solid green;border-left:2px solid red;border-right:2px solid green;"></td>
							<td align="center" style="border-top:2px solid red;border-bottom:2px solid green;border-left:2px solid red;border-right:2px solid green;">
								<?php  
									$p_name = $customer->package;	
								
									$query = "select * from package";
									$package = mysql_query($query);

									if(mysql_num_rows($package) >= 0) { 
										while($tem = mysql_fetch_array($package)) {
											if($tem[1] == $p_name)									     			
												echo "$tem[4]";
										}
									}
								 ?> 
							</td>
							<td align="center" style="border-top:2px solid red;border-bottom:2px solid green;border-left:2px solid red;border-right:2px solid green;">.00</td>
						</tr>
        	            <tr>
						    <th colspan="3" style="border-top:2px solid red;border-bottom:2px solid green;border-left:2px solid red;border-right:2px solid green;">Total</th>
						    <th colspan = "3" style="align:center; border-top:2px solid red;border-bottom:2px solid green;border-left:2px solid red;border-right:2px solid green;">
						       	<?php  
									$p_name = $customer->package;	
								
									$query = "select * from package";
									$package = mysql_query($query);

									if(mysql_num_rows($package) >= 0) { 
										while($tem = mysql_fetch_array($package)) {
											if($tem[1] == $p_name)									     			
												echo "$tem[4]";
										}
									}
								?>.00 /=</th>
					    </tr>
				   </tbody>
				</table>
			
			   	<br />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					........................ 
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					...............................
					<br />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					User Signature
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;				
					Authorized Officer
					
					<br /><br />
		</div>   
		
		<?php echo form_close();?>
	</section>
		
</body>

</html>

