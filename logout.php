<?php
session_start(); 
if(isset($_SESSION))
{
	SESSION_unset();
	session_destroy();
}
header('location:index.php');

?>