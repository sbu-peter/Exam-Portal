<?php
  //get the database connection
  require_once 'dbConnection.php';
  //initialise empty variables for errors and,
  //the array to store results from the query
  $error= "";
  $data = [];
  //handle the login button
  if (isset($_POST['btnLogin'])) {
    //sanitize user inputs
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    //link the username to the session
    $_SESSION['username'] = $username;
    //check if the fields are empty and throw a message
    if(empty($username) || empty($password)){
      $error = 'All field must be completed';
    }else {
      //compare user inputs against the saved database data
      $query = "SELECT * FROM users WHERE studentNum = '$username' AND password = '$password'";
      $result = mysqli_query($conString, $query) or die(mysqli_error($query));
      $row = mysqli_fetch_array($result);
      $data = mysqli_num_rows($result);
      //take the user to the index page
      if ($data == 1 && $_SESSION['username']){
        header("location: index.php");
      } else {
        //display error message and clear the wrong inputs
        $error = 'Invalid login credentials. Try again.';
        $username = "";
        $password = "";
      }
    }
  }
?>
