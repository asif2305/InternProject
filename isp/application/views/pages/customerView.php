<html>

<head>
	 
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>style/style.css" />

</head>

<body>
    
    <header class="container_12 clearfix">
                    <div class="grid_12">
                       <h1><?php echo $title; ?></h1>
                       <br></br>
                    </div>
    </header>
	<div class="content1">
		

		<div class="data">
		<table>
			<tr>
				<td width="30%"><span style='color:green'>ID</span></td>
				<td><?php echo $customer->cu_id; ?></td>
			</tr>
			<tr>
				<td valign="top">Name</td>
				<td><?php echo $customer->cu_name; ?></td>
			</tr>
			<tr>
				<td valign="top">Address</td>
				<td><?php echo $customer->address; ?></td>
			</tr>
			<tr>
				<td valign="top">Date of birth (dd-mm-yyyy)</td>
				<td><?php echo date('d-m-Y',strtotime($customer->dob)); ?></td>
			</tr>
			
			<tr>
				<td valign="top">Gender</td>
				<td><?php echo strtoupper($customer->gender)=='Male'? 'Male':'Female' ; ?></td>
			</tr>

			<tr>
				<td valign="top">phone</td>
				<td><?php echo $customer->contact; ?></td>
			</tr>
			<tr>
				<td valign="top">Email</td>
				<td><?php echo $customer->email; ?></td>
			</tr>
			
			<tr>
				<td valign="top">Ip</td>
				<td><?php echo $customer->ip; ?></td>
			</tr>
			<tr>
				<td valign="top">Mac</td>
				<td><?php echo $customer->mac; ?></td>
			</tr>
			<tr>
				<td valign="top">Package</td>
				<td><?php echo $customer->package; ?></td>
			</tr>
			<tr>
				<td valign="top">Status</td>
				<td><?php echo $customer->status; ?></td>
			</tr>
			<tr>
				<td valign="top">Paid</td>
				<td><?php echo $customer->paid; ?></td>
			</tr>
			<tr>
				<td valign="top">Balance</td>
				<td><?php echo $customer->amount; ?></td>
			</tr>
			
		</table>
		</div>
		<br />
		<?php echo $link_back; ?>
	</div>
</body>
</html>