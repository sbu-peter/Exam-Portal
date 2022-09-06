<?php
// close the user's session and route to the login page
if (isset($_POST['btnLogout'])) {
  session_unset();
  session_destroy();
  header('location: student.login.php');
  die();
}

if (isset($_POST['btnAdminLogout'])) {
  session_unset();
  session_destroy();
  header('location: admin.login.php');
  die();
}
?>
