<?php
require_once  'dbConnection.php';
//declare global varibale to store messages
$message = "";
//get the module code and download the question paper
if (isset($_GET['download'])) {
  if (empty($_GET['module'])) {
    // error message if no module code prvided
    $message = "Please enter a module code.";

  }else{

  //get the module code from the user
  $module = filter_var($_GET['module'], FILTER_SANITIZE_STRING);
  $query = mysqli_query($conString, "SELECT * FROM exam_papers WHERE paperLink LIKE '%$module%'");
  }
}

?>
