
<!DOCTYPE html>
<!--<meta http-equiv="refresh" content="15">-->
<?php
session_start();
if(!isset($_SESSION['regno']))
{
header("location:index.php");
}
//var_dump($_SESSION);



?>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <title>Hostel Map</title>
    <link href="demo.css" type="text/css" rel="stylesheet" media="screen" />
	<script type="text/javascript"
    src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script>
    $(document).ready(
            function() {
                setInterval(function() {
                     var url = 'demo.php';  
	        $('#showa').load(url + ' #showa');
			 $('#showb').load(url + ' #showb');
                }, 5000);
            });
</script>

  </head>
  <body>
  <?php
  
		@mysql_connect("localhost","root");
		mysql_select_db("hostel_g");
		$password=$_SESSION['password'];
		$array=mysql_query("select * from main_login where password='$password'");
		$i=0;
		while($get=mysql_fetch_array($array))
			$roll_no[$i++]=$get['roll_no'];
		
		echo '<font size="3"><strong>Welcome</strong></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		for($k=0;$k<$i;$k++)
		{
			echo $roll_no[$k].'&nbsp;&nbsp;&nbsp;&nbsp;';
		}
		echo '<form method="post" action="logout.php" style="float:right; margin: 0 100px 0 0; clear:both;">
	<input type="submit" name="submit" value="LOGOUT">  
  </form>';
		echo '<br><br>';
		
		?>
	<div id="showb">
   <?php
  
		@mysql_connect("localhost","root");
		mysql_select_db("hostel_g");
		$a=mysql_query("select room_no,vacancy from block_b");
		
		$c=0;
		while($get=mysql_fetch_array($a))
		{
			$k=$c;
			//echo $k;
			$c=$get['room_no'];
			$d=$get['vacancy'];
			
			if($c=='B-201' or $c=='B-102')
			{
				echo '<hr size="pixels">';
				echo '<br> ';
			}
			
			echo '<ul class="small-grid" style="display:inline;">';
			if($c=="WR")
			{
				if($k!='B-311')
				echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			}
			if($c!="WR" and $c[2]!=3)
				echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
		
		
				
			
			
			if ($d!=0)
			echo '<a href="roomallot.php?room_no='.$c.'" class="link" style="text-decoration:none;"><li style="margin:0 2px 10px 2px;"><font size="3">'.$c.' <strong>Vac:</strong>'.$d.'</font></li></a>';
			else
			{
				if($c=='WR')
				{	
				echo '<li style="background-color:red; margin:0 2px 0 2px;">'.$c.'</li>';
				}
				else
				{
				echo '<li style="background-color:grey; margin:0 2px 0 2px;">'.$c.'</li>';
				}
			}
			echo '</ul>';
			
			
		}
  
  ?>
 </div>
    <ul class="item-grid" style="margin:10px 0 10px 0px;">
      <li style="width:60px; margin:5px 100px 5px 0; text-align:center; color:white; padding-top:50px;">MAIN GATE</li>
      <li style="margin:5px 100px 5px 0;  background-color:green; text-align:center; color:white; padding-top:50px;">GROUND</li>
	  <li style=" margin:5px 0px 5px 0px;width:300px; text-align:center; color:white; padding-top:50px;">MESS</li>
      
      </ul>
	  <div id="showa">
	  	<?php
		$c=0;
		$a=mysql_query("select room_no,vacancy from block_a");
		
		
		while($get=mysql_fetch_array($a))
		{
			$k=$c;
		
			$c=$get['room_no'];
			$d=$get['vacancy'];
				
		
		if($c=='A-201' or $c=='A-301')
		{
		echo '<hr size="pixels">';
		echo '<br>';
		
		}
		
		
		echo '<ul class="small-grid" style="display:inline;">';
		if($c=="WR")
		{
			if($k!='A-311')
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
		}
		if($c!="WR" and $c[2]!=3)
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
						
		
		
		
		if ($d!=0)
		echo '<a href="roomallot.php?room_no='.$c.'" class="link" style="text-decoration:none;"><li style="margin:0 2px 10px 2px;"><font size="3">'.$c.' <strong>Vac:</strong>'.$d.'</font></li></a>';
		else
		{
			if($c=='WR')
			{	
			echo '<li style="background-color:red; margin:0 2px 0 2px;">'.$c.'</li>';
			}
			else
			{
			echo '<li style="background-color:grey; margin:0 2px 0 2px;">'.$c.'</li>';
			}
		}
		echo '</ul>';
  
			
		}
  
  ?>
	 </div>
	
  
  
  
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

    <script src="gridem.js"></script>

    <script>
      $(document).ready(function() {

        function randSize( direction, minSize, maxSize ) {
          $('.item-grid').children().each(function() {
            newSize = Math.floor(Math.random()*maxSize+minSize);
            $(this).css(direction, newSize + 'px');
          });
        }

      });
      
    </script>
  </body>
</html>
