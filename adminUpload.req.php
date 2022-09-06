<?php
  //to get a database connectiuon
  require_once 'dbConnection.php';
  $message = ""; // to display the alert messages
  //when the user clicks the upload button
  if (isset($_POST['adminUpload']) && !empty($_POST['module']) && !empty($_POST['duration'])){
    if (empty($_POST['module']) && empty($_POST['duration'])) {
      $message = "Please complete all fileds.";
    }else{
    //the file extension allowed
    $validExtensions = array("pdf", "PDF");
    //get the exam information
    $examDuration = filter_var($_POST['duration']);
    $startDate = filter_var($_POST['startDate']);
    $startTime = filter_var($_POST['startTime']);
    $endDate = filter_var($_POST['endDate']);
    $endTime = filter_var($_POST['endTime']);
    //get the module code and the file
    $fileName = filter_var($_FILES['file']['name'], FILTER_SANITIZE_STRING);
    //link the module code to the question paper name
    $moduleCode = filter_var($_POST['module'], FILTER_SANITIZE_STRING);
    $questPaper = filter_var($_POST['module'], FILTER_SANITIZE_STRING)."_".$fileName;
    //get the file extension and keep it at lowercase
    $extension = pathinfo($fileName, PATHINFO_EXTENSION);
    $extension = strtolower($extension);
    //validate the file extension
    if (!in_array($extension, $validExtensions)) {
    $message = "File type not allowed, only pdf allowed.";
    } else {
      //file temporary location in memory
      $tmpLocation = $_FILES['file']['tmp_name'];
      //directory storing the uploaded files
      $directory = 'uploads/';
      $link = $directory . $questPaper;
      //query to insert the file into the database
      $query = mysqli_query($conString, "INSERT INTO exam_papers(fileName, startDate, moduleCode, startTime, paper, paperLink, duration, endDate, endTime)
      VALUES ('$fileName', '$startDate', '$moduleCode', '$startTime', '$questPaper', '$link', '$examDuration', '$endDate', '$endTime')");
      if ($query) {
       //move the file from the temporary locationto the directory
       move_uploaded_file($tmpLocation, $directory.$questPaper);
       $message = "Question Paper Successfully Uploaded";
     } else {
       $message = "Upload Failed";
     }
   }
 }
 }
  //back to dashboard
  if (isset($_POST['cancelUpload'])) {
    header('location: admin.php');
    exit();
  }
 ?>
