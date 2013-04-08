<?php 
session_start();

if(isset($_POST['breathing']))
$_SESSION['breathing']=$_POST['breathing'];

?>
<html>
<head></head>
<body>

	<form action="5.php" method="post">
		Please text your phone number? <input type="text" name="phonenumber" />
		<button type="submit" />
	</form>


</body>
</html>
