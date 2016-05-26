<?php
include ('function.php');
set_cookies("newuser","Vy");
?>


<!DOCTYPE html>
<html>
<head>
	<title>Cookies</title>
</head>
<body>

<?php




if(!isset($_COOKIE["newuser"]))
{
echo "Cookie named new is not set!";
}
else
{
	echo "Value is :". $_COOKIE["newuser"];
}



?>

</body>
</html>