<!DOCTYPE HTML>
<html lang='en' >
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
session_start();
if(!isset($_SESSION['regno']))
{
	header("location:index.php");
}
?>

<?php
$var=$_SESSION['no_of_seats1'];
$password=$_SESSION['password'];
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

$dbhost = 'localhost';
$dbuser = 'root';
@$conn = mysql_connect($dbhost, $dbuser);
mysql_select_db('hostel_g');

if(! $conn )
	die('Could not connect: ' . mysql_error());
	$room_no=$_SESSION['room_no'];
$flag_of_roll=1;
for($i=1;$i<=$var;$i++) 
{
	
	$roll_no=$t[$i];
	$sql_q="select * from main_login where roll_no='$roll_no' and password='$password'";
	$retval_q=mysql_query($sql_q);
	
	if(mysql_num_rows($retval_q)==0)
	{
		$flag_of_roll=0;
		break;
	}
	
}
echo $roll_no;
echo '<br>';
//echo $flag_of_roll;
if($flag_of_roll==0)
{
	if($room_no[0]==='A')
		mysql_query("update block_a set vacancy=vacancy+'$var' where room_no='$room_no'");
	else
		mysql_query("update block_b set vacancy=vacancy+'$var' where room_no='$room_no'");

	
	$_SESSION['message']="Please Enter correct roll number Your current booking have been cancelled";
	header("location:demo.php");
	die();
}

echo $roll_no;
echo '<br>';


$flag_of_allocated=1;
for($i=1;$i<=$var;$i++) 
{
	$roll_no=$t[$i];
		$sql_roll="select * from alloted_room where roll_no='$roll_no'";
	$retval_roll=mysql_query($sql_roll);
	
	if(mysql_num_rows($retval_roll)==1)
	{
		$flag_of_allocated=0;
		break;
	}
	
}
echo $flag_of_allocated;
echo '<br>';
echo $var;
echo '<br>';

if($flag_of_allocated==0)
{
	if($room_no[0]==='A')
	{
		echo $room_no;
		echo '<br>';
		mysql_query("update block_a set vacancy=vacancy+'$var' where room_no='$room_no'") or die(mysql_error());
	}
	else
	{
		echo $room_no;
		echo '<br>';
		mysql_query("update block_b set vacancy=vacancy+'$var' where room_no='$room_no'") or die(mysql_error());
	}
	$_SESSION['message']="The roll number that you entered have already been alloted a room Your current booking have been cancelled";
	header("location:demo.php");
	die();
}
echo $roll_no;
echo '<br>';



	
for($i=1;$i<=$var;$i++) 
{
	$roll_no=$t[$i];
	$sql="insert into alloted_room (roll_no,room_no) values ('$roll_no','$room_no')";
	mysql_query($sql);
}

for($i=1;$i<=$var;$i++)
{
	$temp="roll".$i;
	$_SESSION[$temp]=$t[$i];
}
$_SESSION['group_size']-=$var;
echo "group_size =".$_SESSION['group_size'];

header("location:hello1.php");

		
?>