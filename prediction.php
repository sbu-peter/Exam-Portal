<?php
  require_once 'predictions.req.php';
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
    }.uses {
      font-family: Tahoma, Helvetica, sans-serif, Verdana;
      float: right;
      margin-top: -50px;
    }
    .times {
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
        <form class="" action="prediction.php" method="post">
          <h1 style="color: #000066; font-family: Tahoma;">Exam Time Predictions Report</h1>
            <div class="uses">
              <label>From Time:</label>
              <input class="times" type="text" name="time1" placeholder="08:00:00">
              <label>To Time:</label>
              <input class="times" type="text" name="time2" placeholder="09:00:00">
              <button type="submit" name="prediction">View</button>
            </div>
          <table class="sub-table">
            <thead>
              <tr>
                <th>Total Students</th>
                <th>Commencement</th>
                <th>Module Code</th>
               </tr>
             </thead>
             <!--Display the data in the tabe when the user clicks the view button after times input -->
             <?php if (isset($_POST['prediction'])){
               ?>
               <?php
                  while ($predictionsDataRow = mysqli_fetch_assoc($predictionsData)) { ?>
                     <tr>
                       <td><?php echo $predictionsDataRow['Total Students']; ?></td>
                       <td><?php echo $predictionsDataRow['Commencement']; ?></td>
                       <td><?php echo $predictionsDataRow['Module Code']; ?></td>
                    </tr>
              <?php  } ?>
            <?php  } ?>
            </table>
          </form>
      </div>
  </body>
</html>
