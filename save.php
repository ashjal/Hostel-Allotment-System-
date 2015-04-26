<!DOCTYPE HTML>
<html lang='en' >
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<?php

if(! get_magic_quotes_gpc())
{
	$pass_key=addslashes($_POST['pass_key']);
	$roll_no=addslashes($_POST['roll_no']);
	$name=addslashes($_POST['name']);
	$class=addslashes($_POST['class']);
	$branch=addslashes($_POST['branch']);
	$current_year=addslashes($_POST['current_year']);
	$dob=addslashes($_POST['dob']);
	$category=addslashes($_POST['category']);
	$blood_group=addslashes($_POST['blood_group']);
	$s_mobile=addslashes($_POST['s_mobile']);
	$e_mail=addslashes($_POST['e_mail']);
	$f_name=addslashes($_POST['f_name']);
	$f_mobile=addslashes($_POST['f_mobile']);
	$m_name=addslashes($_POST['m_name']);
	$m_mobile=addslashes($_POST['m_name']);
	$permanent_address=addslashes($_POST['permanent_address']);
	$alternate_address=addslashes($_POST['alternate_address']);
}

else
{
	$pass_key=$_POST['pass_key'];
	$roll_no=$_POST['roll_no'];
	$name=$_POST['name'];
	$class=$_POST['class'];
	$branch=$_POST['branch'];
	$current_year=$_POST['current_year'];
	$dob=$_POST['dob'];
	$category=$_POST['category'];
	$blood_group=$_POST['blood_group'];
	$s_mobile=$_POST['s_mobile'];
	$e_mail=$_POST['e_mail'];
	$f_name=$_POST['f_name'];
	$f_mobile=$_POST['f_mobile'];
	$m_name=$_POST['m_name'];
	$m_mobile=$_POST['m_name'];
	$permanent_address=$_POST['permanent_address'];
	$alternate_address=$_POST['alternate_address'];
}
$dbhost = 'localhost';
$dbuser = 'root';
@$conn = mysql_connect($dbhost, $dbuser);
mysql_select_db('hostel_g');

if(! $conn )
	die('Could not connect: ' . mysql_error());

$sql="INSERT INTO register (pass_key,roll_no,name,class,branch,current_year,dob,category,blood_group,
mobile_no,e_mail,father_name,father_mobile,mother_name,mother_mobile,permanent_address,alternate_address) 
values ('$pass_key','$roll_no','$name','$class','$branch','$current_year','$dob','$category','$blood_group',
'$s_mobile','$e_mail','$f_name','$f_mobile','$m_name','$m_mobile','$permanent_address','$alternate_address')";


$retval = mysql_query($sql);
if(! $retval )
{
	die('Could not enter data: ' . mysql_error());
}

echo "ksjdfvb";
//header("location:.php");
?>