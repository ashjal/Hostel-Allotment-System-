<!DOCTYPE HTML>
<html lang='en' >
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<?php
session_start();
$var=$_SESSION['group_size'];
if(! get_magic_quotes_gpc())
{
	for($i=1;$i<=$var;$i++) 
	{
		$haha="t".$i;
		$haha1="unique_id_t".$i;
		$t[$i]=addslashes($_POST[$haha]);
		$t_id[$i]=addslashes($_POST[$haha1]);
	}
}
else
{
	for($i=1;$i<=$var;$i++) 
	{
		$haha="t".$i;
		$haha1="unique_id_t".$i;
		$t[$i]=$_POST[$haha];
		$t_id[$i]=$_POST[$haha1];
	}
	
}
$id=uniqid();
$dbhost = 'localhost';
$dbuser = 'root';
@$conn = mysql_connect($dbhost, $dbuser);
mysql_select_db('hostel_g');

if(! $conn )
	die('Could not connect: ' . mysql_error());


$flag_of_register=1;
for($i=1;$i<=$var;$i++) 
{
	$password=$t_id[$i];
	$roll_no=$t[$i];
	$k="SELECT * FROM register WHERE pass_key='$password' AND roll_no='$roll_no'";
	$retval_k=mysql_query($k);
	if(mysql_num_rows($retval_k)==0)
	{
		$flag_of_register=0;
		break;
	}
}


if($flag_of_register==0)
{
	$_SESSION['message']="Entered Data is wrong or one of the users is not registered"; 
	header("location:createGroup.php");
	die();
}

$flag_of_main_login=1;
for($i=1;$i<=$var;$i++) 
{
	$roll_no=$t[$i];
	$sql_k="select * from main_login where roll_no='$roll_no'";
	$retval_k=mysql_query($sql_k);
	if(mysql_num_rows($retval_k)==1)
	{
		$flag_of_main_login=0;
		break;
	}
}

if($flag_of_main_login==0)
{
	$_SESSION['message']="one of the users is already registered in another group"; 
	header("location:createGroup.php");
	die();
}

for($i=1;$i<=$var;$i++) 
{
	$roll_no=$t[$i];
	
	$sql_class="select class from register where roll_no='$roll_no'";
	$val=mysql_query($sql_class);
	
	$get=mysql_fetch_array($val);
	$class=$get['class'];
	$sql="insert into main_login (roll_no,password,class) values('$roll_no','$id','$class')";
	//echo $i;
	mysql_query($sql);
}

$_SESSION['id']=$id;
for($i=1;$i<=$var;$i++)
{
	$temp="roll".$i;
	$_SESSION[$temp]=$t[$i];
}

header("location:hello.php");

		
?>