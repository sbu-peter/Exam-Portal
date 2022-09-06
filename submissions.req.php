<?php
  require_once 'dbConnection.php';

    //query the database for the total student submissions per module
    $getSubData = "SELECT DISTINCT(moduleCode) AS 'Module Code', examDate AS 'Exam Date',
                   COUNT(studentNum) AS 'Number of Students', COUNT(*) AS 'Total Submissions'
                   FROM exams
                   GROUP BY moduleCode
                   ORDER BY examDate ASC";
            $subData = mysqli_query($conString, $getSubData) or die(mysqli_error($getSubData));
      //query the database for all the files uploaded per module
      $getUploads = "SELECT DISTINCT(moduleCode) AS 'Module Code', COUNT(uploadedFile) AS 'Files Uploaded'
                     FROM exams
                     GROUP BY moduleCode";
            $uploadsData = mysqli_query($conString, $getUploads) or die(mysqli_error($getUploads));
    //route the user back to the admin dashboard screen
    if (isset($_POST['backButton'])) {
      header('location: admin.php');
      exit();
    }
 ?>
