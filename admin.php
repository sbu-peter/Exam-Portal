<?php
  require_once 'dbConnection.php';
  require_once 'stats.req.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" content="width=device-width, initial-scale=1">
    <title>Online Exam Portal</title>
    <link rel="stylesheet" href="styles/styles.css">
  </head>
  <body>
    <h1 class="welcome">Online Exam Portal</h1>
    <!--form for the logout button-->
    <form  action="admin.login.php" method="post">
      <button class="btnLogout" type="submit" name="btnAdminLogout">Logout</button>
    </form>
    <div class="admin-wrapper">
      <h1 style="color: #000066; font-family: Tahoma;">Admin Dashboard</h1>
      <aside>
        <!--this is the admin menu section-->
        </menu>
        <a class="q-paper" href="upload.admin.php">Upload Question Paper</a><br><br>
          <label class="reports">Summary Reports</label><br><br>
            <a class="r-links" href="submissions.php">Exam Submissions</a><br><br>
            <a class="r-links" href="moduleUploads.php">Module Exam Uploads</a><br><br>
            <label class="reports">Trend Report</label><br><br>
          <a class="r-links" href="schedule.php">Exam Schedule</a><br><br>
        <label class="reports">Prediction Report</label><br><br>
        <a class="r-links" href="prediction.php">Exam Time Predictions</a><br>
      </aside>
      <main>
        <!--middle dashboard items-->
          <h2 style="color: #000066; font-family: Tahoma;">Examination Enrollments</h2>
        <div class="main-div1">
          <h3>Total students</h2>
            <p style="text-align: center; padding-top: 40px;">
              <b><?php echo $students; ?></b>
            </p>
        </div>
        <div class="main-div2">
          <h3>Total Modules</h2>
            <p style="text-align: center; padding-top: 40px;">
              <b><?php echo $modules; ?></b>
            </p>
        </div>
      </main>
    </div>
  </body>
</html>
