<!DOCTYPE HTML>
<html lang='en' >
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<?php
session_start();
$var=$_SESSION['no_of_seats1'];
if(! get_magic_quotes_gpc())
{
	for($i=1;$i<=$var;$i++) 
	{
		$haha="t".$i;
		$t[$i]=addslashes($_POST[$haha]);
	}
}
else
{
	for($i=1;$i<=$var;$i++) 
	{
		$haha="t".$i;
		$t[$i]=$_POST[$haha];
	}
	
}
/*$dbhost = 'localhost';
$dbuser = 'root';
@$conn = mysql_connect($dbhost, $dbuser,"admin");
mysql_select_db('hostel_g');


if(! $conn )
	die('Could not connect: ' . mysql_error());
*/
	
	require("config.php");
	$room_no=$_SESSION['room_no'];
		
for($i=1;$i<=$var;$i++) 
{
	$roll_no=$t[$i];
	$sql="insert into alloted_room (roll_no,room_no) values ('$roll_no','$room_no')";
	mysql_query($sql) or die(mysql_error());
}

for($i=1;$i<=$var;$i++)
{
	$temp="roll".$i;
	$_SESSION[$temp]=$t[$i];
}



header("location:hello1.php");

		
?>