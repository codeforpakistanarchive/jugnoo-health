<?php 

session_start();
$_SESSION['phonenumber']=$_POST['phonenumber'];	
//var_dump($_SESSION);
require_once 'DB.php';

$db = new DB();

$db->connectDB();
$db->executeQuery("insert into ambulance(location,unconcious,breathing,phonenumber) values('" . $_SESSION['location'] . "','" . $_SESSION['unconscious'] ."','" .$_SESSION['breathing'] . "','" .$_SESSION['phonenumber']."')");


?>
<html>
<head></head>
<body>
Our representative will be calling you shortly
</body>
</html>
