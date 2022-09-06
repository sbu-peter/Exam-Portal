<?php
  require_once 'submissions.req.php';
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
    </style>
  </head>
  <body>
    <form  method="post">
      <h1 class="welcome">OEP Reports</h1>
      <button class="btnLogout" type="submit" name="backButton">Back</button>
    </form>
      <div class="report-wrapper">
        <h1 style="color: #000066; font-family: Tahoma;">Exam Submissions Report</h1>
        <form class="" action="submissions.php" method="post">
          <table class="sub-table">
            <thead>
              <tr>
                <th>Module Code</th>
                <th>Files Uploaded</th>
               </tr>
             </thead>
             <?php while ($uploadsDataRow = mysqli_fetch_assoc($uploadsData)) { ?>
             <tr>
               <td><?php echo $uploadsDataRow['Module Code'];  ?> </td>
               <td><?php echo $uploadsDataRow['Files Uploaded']; ?> </td>
            </tr>
            <?php  } ?>
            </table>
          </form>
      </div>
  </body>
</html>
