<!DOCTYPE html>
<html>
<head>
<title>Pengisian Formulir </title>
</head>

<body>

<?php echo validation_errors(); ?>
<?php echo form_open('form'); ?>
<?php $this->load->helper('url'); ?>
<h5>Username</h5>
<input type="text" name="username" value ="" size="75"/>
<h5>Password</h5>
<input type="password" name="password" value="" size="75"/>
<h5>Password Confirm</h5>
<input type="password" name="passconf" value="" size="75"/>
<h5>Email Address</h5>
<input type="text" name="email" value="" size="75"/>
<tr>
<tr>
<tr><div><input type="submit" value="Submit"/></div></tr>

</body>
</html>