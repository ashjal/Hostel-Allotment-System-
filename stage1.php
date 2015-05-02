<?php

session_start();

echo $_SESSION['regno']."<br>";
echo $_SESSION['class']."<br>";

$class=$_SESSION['class'];
<<<<<<< HEAD
/*$connect=mysql_connect("localhost","root","admin") or die("Couldn't connect");
mysql_select_db("hostel_g") or die("Could not find db...");
*/
require("config.php");
=======
$connect=mysql_connect("localhost","root") or die("Couldn't connect");
mysql_select_db("hostel_g") or die("Could not find db...");
>>>>>>> a9988615205327bdc969cb2fc05cecd06ae3f253
$q=mysql_query("select * from rooms where class='$class'");
echo"<br><br><br><br><br>";
echo "rooms available are:"."<br><br><br>";

while($get=mysql_fetch_array($q))
{
	echo $get['room']."<br>";
}

?>