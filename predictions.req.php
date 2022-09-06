<?php
require_once 'dbConnection.php';

  // query the database for exam time predictions
  if (isset($_POST['prediction'])) {
      //initialise the variables to get user time inputs
      $startTime = filter_var($_POST['time1'], FILTER_SANITIZE_STRING);
      $endTime = filter_var($_POST['time2'], FILTER_SANITIZE_STRING);
        $getPredictions = "SELECT COUNT(studentNum) As 'Total Students', startTime AS Commencement, moduleCode AS 'Module Code'
                           FROM exams
                           WHERE startTime BETWEEN '$startTime' AND '$endTime'
                           GROUP By moduleCode
                           ORDER BY startTime";
        //perform the query on the database
        $predictionsData = mysqli_query($conString, $getPredictions) or die(mysqli_error($getPredictions));
      }
    //take the user to the previous page
    if (isset($_POST['backButton'])) {
      header('location: admin.php');
      exit();
    }
?>
