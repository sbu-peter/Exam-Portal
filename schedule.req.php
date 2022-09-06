<?php
require_once 'dbConnection.php';
    // query the database for data as per the dates provided by the user
    if (isset($_POST['schedule'])) {
      //initialise the variables to get date user inputs
          $startDate = filter_var($_POST['date1'], FILTER_SANITIZE_STRING);
          $startTime = filter_var($_POST['date2'], FILTER_SANITIZE_STRING);
              $getData = "SELECT moduleCode AS 'Module Code', startDate AS 'Exam Date', startTime AS Commencement
                          FROM exam_papers
                          WHERE startDate BETWEEN '$startDate' AND '$startTime'";
               //perform the query on the database
               $datesData = mysqli_query($conString, $getData) or die(mysqli_error($getData));
             }
    //take the user to the previous page
    if (isset($_POST['backButton'])) {
      header('location: admin.php');
      exit();
    }
?>
