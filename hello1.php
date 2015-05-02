</html><!DOCTYPE HTML>
<?php
session_start();
//if(isset($_SESSION['id']))
			{
			
?>
<html lang='en' >
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="jquery-ui.min.css" />
	<link rel="stylesheet" type="text/css" href="group.css" >
	<title>Group | Hostel-G</title>
	
	
	
</head>
	

<body>
	<header class="green_grad">
		<table>
			<tr>
				<td class="td_small">
					
				</td>
				<td class="td_big">
					<h1>Hostel-G, Thapar University</h1>
				</td>
				<td class="td_small">
					
				</td>
			</tr>
		</table>
	</header>
	<div class="body_area">
		<div class="body_content">
		<div class="gray_grad box group_form">
			<?php
				
				$var=$_SESSION['no_of_seats1'];
<<<<<<< HEAD
				/*$dbhost = 'localhost';
				$dbuser = 'root';
				@$conn = mysql_connect($dbhost, $dbuser,"admin");
=======
				$dbhost = 'localhost';
				$dbuser = 'root';
				@$conn = mysql_connect($dbhost, $dbuser);
>>>>>>> a9988615205327bdc969cb2fc05cecd06ae3f253
				mysql_select_db('hostel_g');

					if(! $conn )
						die('Could not connect: ' . mysql_error());
<<<<<<< HEAD
				*/
				require("config.php");	
=======
					
>>>>>>> a9988615205327bdc969cb2fc05cecd06ae3f253
				if($var==1)
				{	
					echo '<table id="members_table">
					<caption>You have successfully registered</caption>
					<tbody><br>';
					
					echo '<tr>
							<th colspan="3">Roll Number</th>
							<th >Name</th>
							</tr>';
						
					for($i=1;$i<=$var;$i++)
					{
						$temp="roll".$i;
						$roll_no=$_SESSION[$temp];
						
						$sql="select name from register where roll_no='$roll_no'";
						$val=mysql_query($sql);
						$get=mysql_fetch_array($val);
						
						echo '<tr ><td colspan ="3">';
					
						
						echo $_SESSION[$temp];
						echo '</td><td>';
						echo $get['name'];
						echo '</td><td>';
						echo'</tr>';

						unset($_SESSION[$temp]);				
					}
				}
				else
				{
					echo '<table id="members_table">
					<caption>These users have successfully been registered</caption>
					<tbody><br>';
					
					echo '<tr>
							<th colspan="2">Roll Number</th>
							<th colspan="1">Name</th>
							<th colspan="1">Room No<th>
							</tr>';
						
					for($i=1;$i<=$var;$i++)
					{
						$temp="roll".$i;
						$roll_no=$_SESSION[$temp];
						
						$sql="select name from register where roll_no='$roll_no'";
						$val=mysql_query($sql);
						$get=mysql_fetch_array($val);
						
						echo '<tr ><td colspan ="2">';
					
						
						echo $_SESSION[$temp];
						echo '</td><td colspan="	 1">';
						echo $get['name'];
						echo '</td><td colspan="1" width="50">';
						echo $_SESSION['room_no'];
						echo'</td></tr>';
						
						//unset($_SESSION[$temp]);				
					}
					
				}
					
					echo '<tr><td colspan="5"><a href="demo.php">Book For Others</a></td></tr>';
				echo '</tbody></table>';
				
				//session_destroy();
			}
			//else
			{
				//header("location:index.php");
				//die();
			}
				
			?>
	 	</div>
	</div>
	</div>
	
		
<footer class="green_grad">
		<ul>
			<li>
				<a target="_blank" href="help.php">Instructions</a>
			</li>
			<li class="separator">|</li>
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