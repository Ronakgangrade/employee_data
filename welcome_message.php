
<body>
	<div class="col-md-12 ">
		<div class="col-md-4"></div>
		<div class="col-md-4 ">
			<form method="post" action="<?php echo base_url();?>Welcome/signin">

	<label>User Id</label>
	<input type="text" name="user_id" value="" placeholder="enter your id.." required>
	<br><br>
	<label>Password</label>
	<input type="password" name="password" value="" placeholder="enter your password.." >
	<br><br>
	<label>Retype passwoed</label>
	<input type="password" name="repass" value="" placeholder="enter your retype password..">
	<input type="submit" name="submit">
	<a href="<?php echo base_url()?>Welcome/login">If already have account</a>
</form>
		</div>

		<div class="col-md-4"></div>
		
	</div>
