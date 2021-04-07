<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>
		Hello, <?php echo $user_data['user_name']; ?> <br>
		<a href="logout.php">Logout</a>
	<form action="request.php" method="post" >
		<br>
	        <p>Request System access</p><br><br>
	        <label for="systems">select system no. : </label>
	        <input type="number" name="systemNumber" >
	        <label for="Ipaddress">Enter Ip address: </label>
	        <input type="text" name="Ipaddress" placeholder="ex.192.168.0.2">
	        <input type="submit" name="Request" value="submit">
	    </form>








	<br>

</body>
</html>
