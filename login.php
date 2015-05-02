
<?php
session_start();
$regno=strip_tags($_POST['roll_no']);
$password=strip_tags($_POST['password']); 


if($regno&&$password)
{	
	$connect=@mysql_connect("localhost","root") or die("Couldn't connect");
	mysql_select_db('hostel_g') or die('Could not find db...');
	$query=mysql_query("SELECT * FROM main_login WHERE roll_no='$regno' && password='$password'");
	
	
	
	$array=mysql_query("SELECT roll_no FROM main_login WHERE password='$password'");
	//$queryx=mysql_query("select * from room_alloted where"); 
	
	
	if(mysql_num_rows($query)==1)
	{	
		$get=mysql_fetch_array($query); 	
		$user_id=$get['id'];
		$_SESSION['user_id']=$user_id;
		$_SESSION['regno']=$regno;
		$_SESSION['class']=$get['class'];
		$_SESSION['password']=$password;
		$_SESSION['group_size']=mysql_num_rows($array);
		$_SESSION['start']=time();
		
		
		while($get=mysql_fetch_array($array))
		{
			$roll_no=$get['roll_no'];
			$k=mysql_query("select * from alloted_room where roll_no='$roll_no'");
			
			if(mysql_num_rows($k)==1)
			$_SESSION['group_size']--;	
		}
		
		//echo $_SESSION['group_size'];
		
		if($_SESSION['group_size']==0)
		{
			$_SESSION['message']="All the members in your group have already been alloted a room number";
			header("location:index.php");
			die();
		}
		header("location:demo.php");
		
	}
	else
	{
		$_SESSION['message']="Invalid Username or Password";
		header("location:index.php");
	}		
}
else
{
	header("location:index.php");
	die();
	
	
?>