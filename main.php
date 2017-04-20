<?php
$username = "root";
$password = "";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysql_select_db("saltadeportes",$dbhandle)
  or die("Could not select saltadeportes");
  
  //execute the SQL query and return records
  $sql = "SELECT * FROM `productos`";
$result = mysql_query($sql);
//fetch tha data from the database
while ($row = mysql_fetch_array($result)) {
   echo "ID:".$row{'DESCRIPCION'}."<br>";
}
?>