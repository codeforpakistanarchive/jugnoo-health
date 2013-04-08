<?php 
session_start();
$_SESSION['location']=$_POST['location'];

?>
<html>
<head></head>
<body>
<form action="3.php" method="post">
is your patient unconscious?
<select name="unconscious">
	<option>yes</option>
	<option>no</option>
</select>
<button type="submit"  />
</form>

</body>
</html>