<!DOCTYPE HTML>
<html lang='en' >
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<?php
session_start();

$no_of_seats=$_POST['no_of_seats'];
$dbhost = 'localhost';
$dbuser = 'root';
$room_no=$_POST['room_no'];
//$vac=$_POST['vac'];

if($_SESSION['group_size']<$no_of_seats)
{
	$_SESSION['message']="Select seats less than your group size";
	$_SESSION['no_of_seats']=0;
	header("location:roomallot.php?room_no=$room_no");
	die();
}


/*@$conn = mysql_connect($dbhost, $dbuser,"admin");
mysql_select_db('hostel_g');

if(! $conn )
	die('Could not connect: ' . mysql_error());
*/
	
require("config.php");	
	
	
	if($room_no[0]==='A')
	{
		mysql_query("update block_a set vacancy=vacancy-'$no_of_seats' where room_no='$room_no'");
		$vac=mysql_query("select vacancy from block_a where room_no='$room_no'");
	}
	else
	{
		mysql_query("update block_b set vacancy=vacancy-'$no_of_seats' where room_no='$room_no'");
		$vac=mysql_query("select vacancy from block_b where room_no='$room_no'");
	}	
	
	if($get=mysql_fetch_array($vac))
	{
		$vacc=$get['vacancy'];
	}	
	
	

$_SESSION['no_of_seats']=$no_of_seats;
header("location:roomallot.php?room_no=$room_no");

		
?>