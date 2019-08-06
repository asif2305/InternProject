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
				<td width="30%"><span style='color:green'>Username</span></td>
				<td><?php echo $employee->username; ?></td>
			</tr>
			<tr>
				<td valign="top">Name</td>
				<td><?php echo $employee->name; ?></td>
			</tr>
			<tr>
				<td valign="top">Gender</td>
				<td><?php echo strtoupper($employee->gender)=='Male'? 'Male':'Female' ; ?></td>
			</tr>
			<tr>
				<td valign="top">Date of birth (dd-mm-yyyy)</td>
				<td><?php echo date('d-m-Y',strtotime($employee->dob)); ?></td>
			</tr>
			<tr>
				<td valign="top">Email</td>
				<td><?php echo $employee->email; ?></td>
			</tr>
			<tr>
				<td valign="top">Phone</td>
				<td><?php echo $employee->phone; ?></td>
			</tr>
			<tr>
				<td valign="top">Salary</td>
				<td><?php echo $employee->salary; ?></td>
			</tr>
			<tr>
				<td valign="top">Privilege</td>
				<td><?php echo $employee->privilege; ?></td>
			</tr>
						
		</table>
		</div>
		<br/>
		<?php echo $link_back; ?>
	</div>
</body>
</html>