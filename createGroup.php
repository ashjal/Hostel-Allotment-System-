<!DOCTYPE HTML>
<html lang='en' >
<?php
session_start();
?>
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
			<form method="POST" class="gray_grad box group_form">
				<input type="hidden" name="create_group" value="true">
				<input type="hidden" name="ajax_request" value="true">
				<table id="password_table">
					<caption>Create Group</caption>
					<tbody>
						<tr>
							<td colspan="2">
								<strong>NOTE : </strong>Once you create a group, you can&apos;t <strong>ADD/REMOVE </strong>a member.
							</td>
						</tr>
						
						<tr>
							<td>
								<label for="input_size">Number of members<sup class="req">*</sup> :</label>
							</td>
							
						<td>
							<form method="post">
								<select id="input_size" name="group_size" onChange="submit();" class="required" title="Please select the number of members in your Group">
									<option disabled selected >...</option>
									<option <?php if(isset($_POST['group_size'])&&($_POST['group_size']==2)){ ?>selected <?php } ?>  value="2" >2  </option>
									<option <?php if(isset($_POST['group_size'])&&($_POST['group_size']==3)){ ?>selected <?php } ?>  value="3" >3  </option>
									<option <?php if(isset($_POST['group_size'])&&($_POST['group_size']==4)){ ?>selected <?php } ?>  value="4" >4  </option>	
								</select>
							</form>	
							</form>	
							
							</td>
						</tr>
					</tbody>
				</table>
			</form>	
		
	
			<?php
	 
	 if(isset($_POST['group_size'])||isset($_SESSION['group_size']))
	 {
		 if(isset($_POST['group_size']))
			$a=$_POST['group_size'];
		elseif(isset($_SESSION['group_size']))
				$a=0;
		for($i=1;$i<=$a;$i++)
		{
			if($i==1)
			{
				echo '<table id="members_table">
				<caption>Members Details</caption>
				<tbody>';
				
				echo '<form method="post" action="save.php">
					<tr>
					<th>Roll Number</th>
					<th>Unique ID</th>
					</tr>';
				
			}
			
			$haha="t".$i;
			$haha1="unique_id_t".$i;
			echo '<tr>
			<td>
			<input type="text" name="'.$haha.'" class="required tip_left" title="Please provide Roll Number of group member">
			</td>
			
			<td>
			<input type="text" name="'.$haha1.'" class="required tip_right" title="Please provide Unique ID of group member.">
			</td>
			</tr>';
		}
		echo 
			'<tr>
			</tr>
			<tr><br>
			<td colspan="2">';
			if($a!=0)
				echo'<input type="submit" name="submit1"  value="Go Ahead">';
			echo'</td></tr>';
			if(isset($_SESSION['message']))
			{
				echo 
				'<tr><br>
				<td colspan="2">';
				echo $_SESSION['message'];
				unset($_SESSION['message']);
				echo'</td></tr>';
			}
			echo '</tbody>';
			echo '</form>';
			$_SESSION['group_size']=$a;
		}
		
	?>
	</table>
	

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