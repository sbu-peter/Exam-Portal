<?php
require_once 'dbConnection.php';
require_once 'sub.status.req.php';



  //uploading the script
  if (isset($_POST['btnUpload'])) {
     //exam type is constantly the same
     $examType = 'Document Upload';
     $examDate = $date;
     $endTime = $date;
     $examTime = $examDate;


     if (isset($_POST['rdSubmit'])) {
       // code...
       $declaration = "Yes";
       isset($_POST['rdSubmit']) ? $declaration = "Yes" : $declaration = "No";
     }
     //the file extension allowed
     $validExtensions = array("pdf", "PDF");
     //get the module code and the file
     $file = $_FILES['file'];
     $fileName = filter_var($_FILES['file']['name'], FILTER_SANITIZE_STRING);
     //link the module code to the question paper name
     $moduleCode = filter_var($_POST['moduleCode'], FILTER_SANITIZE_STRING);
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
       $directory = 'scripts/';
       //query to insert the file into the database
       $query = mysqli_query($conString,
       "INSERT INTO exams(studentNum, moduleCode, examDate, examType, startTime, declaration, uploadedFile, endTime)
       VALUES ('$studentNum', '$moduleCode', '$examDate', '$examType', '$examTime', '$declaration', '$fileName', '$endTime')");
       if ($query) {
        //move the file from the temporary locationto the directory
        move_uploaded_file($tmpLocation, $directory.$fileName);
        echo '<script>';
        echo 'window.location.href = "submission.status.php"';
        echo '</script>';

      }
  }
}
?>
