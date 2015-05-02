
<?php
session_start();
$regno=strip_tags($_POST['roll_no']);
$password=strip_tags($_POST['password']); 

if($regno&&$password)
{	
	$connect=mysql_connect("localhost","root") or die("Couldn't connect");
	mysql_select_db('hostel_g') or die('Could not find db...');
	$query=mysql_query("SELECT * FROM main_login WHERE roll_no='$regno' && password='$password'");
	
	
	$query1=mysql_query("SELECT * FROM main_login WHERE password='$password'");
	if(mysql_num_rows($query)==1)
	{	
		$get=mysql_fetch_array($query); 	
		$user_id=$get['id'];
		$_SESSION['user_id']=$user_id;
		$_SESSION['regno']=$regno;
		$_SESSION['class']=$get['class'];
		$_SESSION['password']=$password;
		$_SESSION['group_size']=mysql_num_rows($query1);
		$_SESSION['start']=time();
		header("location:demo.php");
		
	}
	else
		echo "alert('invalidusername')";		
}
else
	echo("please enter username and password!");

	
	
?>