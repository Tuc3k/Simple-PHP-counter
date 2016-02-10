<?php

$life_span = 1800; // 30 min

if (!isset($_COOKIE["counter"])) {
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "database";

  $conn = new mysqli($servername, $username, $password, $dbname);
  $sql = "UPDATE my_database SET counter=counter+1 WHERE 1";
  if ($conn->query($sql) === true) {
  setcookie("counter",true,time()+$life_span);
  } 
  $conn->close();
}
?>