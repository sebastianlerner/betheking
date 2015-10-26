
 
 
<?php
$message = "wrong answer";
echo "<script type='text/javascript'>alert('$message');</script>";

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("users", $con);
 
$sql="INSERT INTO user_info (name, email, address, city, state, zip) VALUES ('seb', 'sebastian@betheking.com', '1027 wertland street', 'oak hill', 'va', '20171')";
 
$result = mysql_query($sql);
echo "<h2>1 record added</h2>";
 
mysql_close($con)
?>
