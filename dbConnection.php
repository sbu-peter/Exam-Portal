<?php
session_start();
//database connection variables
  $serverName = 'localhost';
  $userName = 'root';
  $passWord = 'u@_Base#99';
  $dbName = 'examination';

//database connection string
  $conString = mysqli_connect($serverName, $userName, $passWord, $dbName);
//check database connection
  if(!$conString){
    die("Connection failed: " . mysqli_connect_error());
  }
 ?>
