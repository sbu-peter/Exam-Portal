<?php
  require_once 'sub.status.req.php';

    if (isset($_POST['confirm'])) {
      //send email to the student
      $mail = $_SESSION['username']."@mylife.unisa.ac.za";
      $subject = "Exam submission";
      $body = "Your examination has been successfully submitted on " .
      "Date: " . date("Y-m-d") . " and " .
      "Time: " . date("H:i:s") . $module;
      $headers = "From: sbusisosk1@gmail.com";
      //alert the student of the submision confirmation email
      if (mail($mail, $subject, $body, $headers)) {
        echo '<script>';
        echo 'alert("An email has been sent to you to confirm your submission.");';
        echo 'window.location.href = "index.php"';
        echo '</script>';
      } else {
        echo '<script>';
        echo 'alert("Email not sent.");';
        echo 'window.location.href = "index.php"';
        echo '</script>';
      }

    }
?>
