<?php 
session_start();
session_destroy();
unset($_SESSION);
?>
<html>
<head></head>
<body>
<form action="2.php" method="post">
what is your location?
<select name="location">
	<option>clifton</option>
	<option>defence</option>
	<option>gulshan</option>
</select>
<button type="submit"  />
</form>

</body>
</html>