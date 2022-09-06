<?php
  require_once 'dbConnection.php';
  require_once 'login.req.php';

  //when the user clicks the button to upload a script
  if(isset($_POST['btnUpload'])){
    if (empty($_POST['moduleCode']) && !isset($_POST['file'])) {
      //javascript to pop out an alert to complete all fileds
      echo '<script>';
      echo 'alert("Please complete all fields.");';
      echo 'window.location.href = "index.php"';
      echo '</script>';
    }elseif(!isset($_POST['rdSubmit'])) {
      //check if the student signed the pledge
      echo '<script>';
      echo 'alert("Please sign the pledge before you submit.");';
      echo 'window.location.href = "index.php"';
      echo '</script>';
    }else{
    //get student and file submision information
    $studentNum = $_SESSION['username'];
    $module = filter_var($_POST['moduleCode'], FILTER_SANITIZE_STRING);
    $email = $studentNum."@mylife.unisa.ac.za";
    $fileName = $_FILES['file']['name'];
    $date = Date("Y-m-d H:i:s");
    $fileSize = round($_FILES['file']['size'] / 1024, 1)."KB";
    if ($fileSize > 4096) {
    // check if the size is not over 4MB...
    echo '<script>';
    echo 'alert("Your file is larger than 4MB.");';
    echo 'window.location.href = "index.php"';
    echo '</script>';
    }
  }
  //get get the information of the uploaded file for submision confirmation
  $_SESSION['module'] = $module;
  $_SESSION['file'] = $fileName;
  $_SESSION['username'] = $studentNum;

}
  //take the user back to the index page
  if (isset($_POST['cancel'])) {
    header('Location: index.php');
  }
?>
