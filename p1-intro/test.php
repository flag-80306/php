<?php
// Database configuration
$host  = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "world";
 
// Create database connection
$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
$query = "SELECT * FROM city LIMIT 2";
 
if ($result=mysqli_query($conn,$query))
{
    echo "<pre>";
var_dump($result);
echo "</pre>";
echo "<hr>";
echo "<hr>";
  // Fetch one and one row
  while ($row=mysqli_fetch_array($result))
    {
        echo "<pre>";
        var_dump($row);
        echo "</pre>";
        echo "<hr>";
        echo " Item name :".$row[0]." , ";
        echo " Description : ".$row[1];
        echo  nl2br (" \n ");
    }//end while
  // Free result set
  mysqli_free_result($result);
}// end if
mysqli_close($conn);
?>