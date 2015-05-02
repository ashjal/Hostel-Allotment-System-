<!DOCTYPE HTML>
<html lang='en' >
<meta http-equiv="refresh" content="20">
<?php
session_start();
/*if(!isset($_SESSION['regno']))
{

	header("location:index.php");
}
?>
<?php

if(!isset($_GET['room_no']))
{
	header("location:demo.php");
}*/
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
					<a href="index.php">
					</a>
				</td>
				<td class="td_big">
					<h1>Hostel-G, Thapar University</h1>
				</td>
				<td class="td_small">
					</a>
				</td>
			</tr>
		</table>
	</header>
	<div class="body_area">
		<div class="body_content">
		<?php
  
<<<<<<< HEAD
		/*mysql_connect("localhost","root","admin");
		mysql_select_db("hostel_g");
		*/
		require("config.php");
=======
		@mysql_connect("localhost","root");
		mysql_select_db("hostel_g");
>>>>>>> a9988615205327bdc969cb2fc05cecd06ae3f253
		$_SESSION['room_no']=$_GET['room_no'];$a=$_GET['room_no'];
					//$_SESSION['vac']
							//$vac=$_GET['vac'];
							$room_no=$a;
							
							if($room_no[0]==='A')
							{
								
								$vac=mysql_query("select vacancy from block_a where room_no='$room_no'");
							}
							else
							{
								
								$vac=mysql_query("select vacancy from block_b where room_no='$room_no'");
							}	

							if($get=mysql_fetch_array($vac))
							{
								$vacc=$get['vacancy'];
								
							}	
							if($vacc===0)
							{
								header("location:demo.php");
							}
								
		?>
			<form method="POST" class="gray_grad box group_form" action="val_del.php">
				<input type="hidden" name="create_group" value="true">
				<input type="hidden" name="ajax_request" value="true">
				<table >
				
					<caption>ROOM NO : <?php  echo $a;?></caption>
					<tbody>
						<tr>
							<td colspan="2">
								<strong>NOTE : </strong>Once you choose a room, you can&apos;t <strong>CHANGE </strong>it.
							</td>
						</tr>
						<tr></tr>
				<tr>
						<td >
							<p><label for="input_size">Number of seats<sup class="req">*</sup> :</label><p>
						</td>
					<td>
						<select id="input_size" name="no_of_seats"  class="required" title="Please select the number of seats">
							<option disabled selected >...</option>
							
							
							<?php
							for($i=1;$i<=$vacc;$i++)
							{
								echo '<option value="'.$i.'">'.$i.'</option>';
							}?>	
						</select>
					</td>
				</tr>
				<tr>
				</tr>
				<tr >
				<td colspan="2"><input type="submit" value="Book" name="submit" style='float:right;'>
				<input type="hidden" value="<?php echo $_GET['room_no']; ?>" name="room_no"/>
				<!--<input type="hidden" value="<?php //$vacc; ?>" name="vac"/>-->
				 </td>
				 </tr>
				 </form>
				</tbody>
				</table>
				
			</form>	
		
	<?php
	
	
	if(isset($_SESSION['no_of_seats']))
	{	
			$a=$_SESSION['no_of_seats'];
			$_SESSION['no_of_seats1']=$a;
			
		for($i=1;$i<=$a;$i++)
		{
			if($i==1)
			{
				echo '<table id="members_table">
				<caption>Enter the roll numbers for the room selected</caption>
				<tbody>';
				
				echo '<form method="post" action="room_alloted.php">
					<tr>
					<th colspan="3">Roll Number</th>
					</tr>';
				
			}
			
			$haha="t".$i;
			$haha1="unique_id_t".$i;
			echo '<tr>
			<td colspan="3">
			<input type="text" name="'.$haha.'" class="required tip_left" title="Please provide Roll Number of group member">
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
				'<tr>
				<td colspan="2">';
				echo $_SESSION['message'];
				unset($_SESSION['message']);
				echo'</td></tr>';
			}
			unset($_SESSION['no_of_seats']);
			echo '</tbody>';
			echo '</form>';			
				}
	?>
	<br>
	<!--<a href="logout.php"> Logout</a>-->
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


<?php
/*$int=20;	
if(isset($_SESSION['regno']))
{
	$diff=time()-$_SESSION['start'];
	if($diff>$int)
	{
		header("location:demo.php");
	}
}*/
?>
