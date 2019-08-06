
<!DOCTYPE html>
<html lang="">
<head>
	<script language="JavaScript">
		  history.forward();
	</script>
	<meta charset="utf-8">
	<title>Internet Service Provider</title>
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url();?>css/login_style.css" media="all" />
	<!--[if IE]><link rel="stylesheet" href="css/ie.css" media="all" /><![endif]-->
</head>
<body class="login">
	<section>
		<h1>ISP</h1>
		<?php echo form_open('login/input_validation');?>
			<input type="text" placeholder="Username" name="uname" />
			<?php echo form_error('uname','<p align="center" class="error">');?>
			<input type="password" placeholder="Password" name="upass" />
			<?php echo form_error('upass','<p align="center" class="error">');?>
			<button class="blue">Login</button>
		<?php echo form_close();?>
	</section>
	<?php //echo validation_errors('<p align="center" class="error">');?>

</body>
</html>