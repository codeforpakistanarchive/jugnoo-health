<?php 
session_start();
$_SESSION['unconscious']=$_POST['unconscious'];

?>
<html>
<head></head>
<body>
	<?php 

	if($_POST['unconscious']=='no')
	{
		?>
	<form action="4.php" method="post">
		is your patient having trouble in breathing now? 
		<select name="breathing">
			<option>yes</option>
			<option>no</option>
		</select>
		<button type="submit" />
	</form>
	<?php 
	}
	else
	{
		?>
	<form action="5.php" method="post">
		Please text your phone number? <input type="text" name="phonenumber" />
		<button type="submit" />
	</form>

	<?php 
	}
	?>


</body>
</html>
