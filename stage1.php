<?php

session_start();

echo $_SESSION['regno']."<br>";
echo $_SESSION['class']."<br>";

$class=$_SESSION['class'];
/*$connect=mysql_connect("localhost","root") or die("Couldn't connect");
mysql_select_db("hostel_g") or die("Could not find db...");*/
require("config.php");
$q=mysql_query("select * from rooms where class='$class'");
echo"<br><br><br><br><br>";
echo "rooms available are:"."<br><br><br>";

while($get=mysql_fetch_array($q))
{
	echo $get['room']."<br>";
}

?>