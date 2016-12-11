<?php
 include "file_constants.php";
 error_reporting(E_ALL);
 if(isset($_GET['id']) && is_numeric($_GET['id'])) {
     //connect to db
     $link = mysql_connect("$host", "$user", "$pass")
     or die("Could not connect: " . mysql_error());

     // select database
     mysql_select_db("$db") or die(mysql_error());

     // get the image from the db
     $sql = "SELECT image FROM test_image WHERE id=" .$_GET['id'] . ";";

     // the result of the query
     $result = mysql_query("$sql") or die("Invalid query: " . mysql_error());

     // set the header for the image
     header("Content-type: image/jpeg");
     echo mysql_result($result, 0);

     // close the db link
     mysql_close($link);
 }
 else {
     echo 'Error';
 }
?>
