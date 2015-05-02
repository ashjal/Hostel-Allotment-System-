<!DOCTYPE HTML>
<html lang='en' >
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="jquery-ui.min.css" />
<link rel="stylesheet" type="text/css" href="register.css">

<title>Register | Hostel-G</title>

<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="jquery-ui.min.js"></script>
<script type="text/javascript" src="jquery-uniform.js"></script>

</head>

<body>
<!DOCTYPE HTML>
<html lang='en' >
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<?php
if(isset($_POST['submit']))
{
	session_start();
	
	if(!get_magic_quotes_gpc())
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
		$permanent_address=addslashes($_POST['permanent_address']);
		$alternate_address=addslashes($_POST['alternate_address']);
		$room_type=addslashes($_POST['room_type']);
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
		$permanent_address=$_POST['permanent_address'];
		$alternate_address=$_POST['alternate_address'];
		$room_type=$_POST['room_type'];
	}
<<<<<<< HEAD
	/*$dbhost = 'localhost';
	$dbuser = 'root';
	@$conn = mysql_connect($dbhost, $dbuser,'admin');
	mysql_select_db('hostel_g');
	*/
	require("config.php");
=======
	$dbhost = 'localhost';
	$dbuser = 'root';
	@$conn = mysql_connect($dbhost, $dbuser);
	mysql_select_db('hostel_g');
	
>>>>>>> a9988615205327bdc969cb2fc05cecd06ae3f253
	$q="select * from register where roll_no='$roll_no' and pass_key='$pass_key'";
	$retval_q=mysql_query($q);
	if(mysql_num_rows($retval_q)==0)
	{	
		$k="SELECT * FROM login WHERE pass_key='$pass_key' AND roll_no='$roll_no'";
		$retval=mysql_query($k);
		if(mysql_num_rows($retval)==1)
		{
			if(! $conn )
				die('Could not connect: ' . mysql_error());

			$sql="INSERT INTO register (pass_key,roll_no,name,class,branch,current_year,dob,category,blood_group,
			mobile_no,e_mail,father_name,father_mobile,permanent_address,alternate_address) 
			values ('$pass_key','$roll_no','$name','$class','$branch','$current_year','$dob','$category','$blood_group',
			'$s_mobile','$e_mail','$f_name','$f_mobile','$permanent_address','$alternate_address')";
			
			mysql_query($sql);
			if($room_type==="individual")
			{
				$password=uniqid();
				$sql="insert into main_login (roll_no,password,class) values('$roll_no','$password','$class')";
				$retval=mysql_query($sql);
				$_SESSION['id']=$password;	
				$_SESSION['group_size']=1;
				$_SESSION['roll1']=$roll_no;
				header("location:hello.php");
				die();
				
			}
			header("location:index.php");
			//echo "your password is : $password";
		}
		else
		{
			echo "wrong pass_key or roll no";
		}
	}
	else
	{
		echo "already registered";
	}
	
}

		
//header("location:.php");
?>
<header class="green_grad">

<table>
<tr>
<td class="td_small">

</a>
</td>

<td class="td_big">

<h1> Hostel-G, Thapar University</h1>
</td>
<td class="td_small">

</a>
</td>
</tr>

</table>
</header>

<div class="body_area">
<div class="body_content">

<form method="POST" action="register.php" enctype="multipart/form-data" class="register_form gray_grad box">

<input type="hidden" name="ajax_request" value="true">

<input type="hidden" name="MAX_FILE_SIZE" value="2097152">
<table>

<caption>Registration Form</caption>

<tr>

<td>
<label for="input_unique_id">PassKey<sup class="req">*</sup> :</label>
</td>

<td>
<input type="text" required class="required" id="input_unique_id" name="pass_key" title="Please provide your Passkey available in your Web-Kiosk under Hostel Choice.">
</td>

</tr>

<tr>

<td>
<label for="input_roll_no">Roll No<sup class="req">*</sup> :</label>
</td>

<td>
<input type="text" required class="required" id="input_roll_no" name="roll_no" title="Please provide your University Roll Number">
</td>

</tr>

<tr>

<td>
<label for="input_name">Name<sup class="req">*</sup> :</label>
</td>

<td>
<input type="text" required class="required" id="input_name" name="name" title="Please provide your Full Name">
</td>

</tr>
<tr>

<td>
<label for="input_class">Class<sup class="req">*</sup> :</label>
</td>

<td><select name="class" required class="required" id="input_class" title="Please provide your Class">
<option selected="selected">BTech</option>

<option>MTech</option>

<option>PHD</option>
</select>
</td>

</tr>

<tr>

<td>
<label for="input_branch">Branch<sup class="req">*</sup> :</label>
</td>

<td>
<input type="text" required class="required" id="input_branch" name="branch" title="Please provide your Branch">
</td>

</tr>

<tr>
<td>
<label for="input_year">Current Year<sup class="req">*</sup> :</label>
</td>

<td><select name="current_year" required class="required" id="input_year" title="Please provide your current Year of study">

<option>1</option>
<option selected="selected">2</option>
<option>3</option>

</select>
</td>

</tr>

<tr>

<td>
<label for="input_dob">Date Of Birth<sup class="req">*</sup> :</label>
</td>

<td>
<input type="text" id="input_dob" required class="datefield required" name="dob" title="Please provide your Date Of Birth (YYYY-MM-DD)">
</td>

</tr>

<tr>

<td>
<label for="input_category">Category<sup class="req">*</sup> :</label>
</td>

<td>
<select name="category" class="required" required id="input_category" title="Please provide your Category">

<option selected="selected">GEN</option>
<option>SC</option>
<option>ST</option>
<option>BC</option>
<option>NRI</option>
</select>
</td>

</tr>

<tr>

<td>
<label for="input_blood">Blood Group<sup class="req">*</sup> :</label>
</td>

<td>
<select name="blood_group" required class="required" id="input_blood" title="Please provide your Blood Group">

<option>A+</option>
<option>A-</option>
<option>B+</option>
<option>B-</option>
<option>O+</option>
<option>O-</option>
<option>AB+</option>
<option>AB-</option>
</select>
</td>

</tr>

<tr>

<td>
<label for="input_stud_mob">Student Mobile<sup class="req">*</sup> :</label>
</td>

<td>
<input type="text" required id="input_stud_mob"  maxlength="10" minlength="10" class="mobilefield required" name="s_mobile" title="Please provide your Mobile number">
</td>
</tr>

<tr>
<td>
<label for="input_email">E-mail<sup class="req">*</sup> :</label>
</td>

<td>
<input type="email"  required class="required" id="input_email" name="e_mail" title="Please provide your valid Email address">
</td>

</tr>

<tr>
<td><label for="input_father_name">Father&apos;s Name<sup class="req">*</sup> :</label>
</td>

<td>
<input type="text" required class="required" id="input_father_name" name="f_name" title="Please provide your Father&apos;s Name (excluding Title)">
</td>
</tr>

<tr>

<td>
<label for="input_father_mob">Father&apos;s Mobile<sup class="req">*</sup> :</label>
</td>

<td>
<input type="text" maxlength="10" minlength="10" required id="input_father_mob" class="mobilefield required" name="f_mobile" title="Please provide your Father&apos;s Mobile number">
</td>

</tr>

<tr>

<td>
<label for="input_addr">Permanent Address<sup class="req">*</sup> :</label>
</td>

<td>
<textarea class="required" required id="input_addr" name="permanent_address" title="Please provide your Permanent Address"></textarea>
</td>

</tr>

<tr>

<td>
<label for="input_alt_addr">Alternate Address :</label>
</td>

<td>
<textarea id="input_alt_addr" required name="alternate_address" title="Please provide your Alternate Address (if any)"></textarea>
</td>

</tr>


<tr>

<td>
<label for="input_type">Want room as<sup class="req">*</sup> :</label>
</td>

<td>
<select name="room_type" required class="required" id="input_type" title="Please select whether you want to take room as an Individual or as a part of a Group">

<option value="individual" selected="selected">an Individual</option>
<option value="group">a part of a Group</option>
</select></td>

</tr>



<td colspan="2">
<input type="checkbox"  required id="input_agreement" name="agreement">
<label for="input_agreement">I have read all <a href="rules.pdf" target="_blank">
Hostel Rules &amp; Regulations</a>. 
I will abide by all of them failing which authorities can take punitive action.
</label>
</td>

</tr>

<tr>

<td colspan="2" style="text-align: center;">
<input type="submit" name="submit" value="Register">
</td>

</tr>

</table>
</form>
</div>
</div>

<footer class="green_grad">
<ul>

<li>
<a target="_blank" href="help.php">Instructions</a>
</li>

<li class="separator">|
</li>

<li>
<a target="_blank" href="complaint.php">Support</a>
</li>
<li class="separator">|</li>
<li>
<a target="_blank" href="developers.php">Developers</a>
</li>
</ul>
</footer>
</body>

</html>