<?php

function set_cookies($name,$value)
{
$cookie_name = $name;
$cookie_value = $value;
setcookie($cookie_name,$cookie_value,time() + (86400+30),"/");
}

function say($s)
{

	echo $s; 
}

?>