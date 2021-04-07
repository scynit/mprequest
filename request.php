<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<html>
<body>
<?php
include_once "login.php";
$Ip= $_GET["Ipaddress"];
 ?>
Username is: <?php echo $_GET["user_name"]; ?><br>
Your temporary password is: <?php echo 123456; ?>

</body>
</html>
