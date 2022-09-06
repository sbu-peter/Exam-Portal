<?php
  require_once 'schedule.req.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Module Exam Uploads</title>
    <style media="screen">
    .sub-table {
      font-family: Tahoma, Helvetica, sans-serif, Verdana;
      border-collapse: collapse;
      margin: 25px 0;
      width: 80%;
    }
    .sub-table thead tr {
      background-color: #cc6600;
      color: #ffffff;
      text-align: left;
      padding: 25px;
      font-size: 10px;
    }
    .sub-table th, .sub-table td {
      padding: 12px 15px;
      font-size: 15px;
      text-align: center;
      border-bottom: 1px solid #cc6600;
    }
    .report-wrapper {
      border-radius: 25px;
      border:4px solid #990000;
      height: inherit;
      width: inherit;
      padding: 20px;
    }
    .uses {
      font-family: Tahoma, Helvetica, sans-serif, Verdana;
      float: right;
      margin-top: -50px;
    }
    .dates {
      border-color: #990000;
      border-radius: 15px;
      text-align: center;
    }
    </style>
  </head>
  <body>
    <form method="post">
      <h1 class="welcome">OEP Reports</h1>
      <button class="btnLogout" type="submit" name="backButton">Back</button>
    </form>
      <div class="report-wrapper">
        <form action="schedule.php" method="post">
          <h1 style="color: #000066; font-family: Tahoma;">Exams Schedule</h1>
          <div class="uses">
            <label>Start Date:</label>
            <input class="dates" type="text" name="date1" placeholder="2021-01-21">
            <label>End date:</label>
            <input class="dates" type="text" name="date2" placeholder="2021-03-30">
            <button type="submit" name="schedule">View</button>
          </div>
          <table class="sub-table">
            <thead>
              <tr>
                <th>Module Code</th>
                <th>Exam Date</th>
                <th>Commencement</th>
               </tr>
             </thead>
             <!--Display the data in the tabe when the user clicks the view button after dates input -->
              <?php if (isset($_POST['schedule'])) { ?>
                <?php while ($scheduleDataRow = mysqli_fetch_assoc($datesData)) { ?>
                     <tr>
                       <td><?php echo $scheduleDataRow['Module Code']; ?></td>
                       <td><?php echo $scheduleDataRow['Exam Date']; ?></td>
                       <td><?php echo $scheduleDataRow['Commencement']; ?></td>
                     </tr>
                <?php } ?>
              <?php } ?>
            </table>
          </form>
      </div>
  </body>
</html>
