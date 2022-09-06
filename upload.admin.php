<?php
require_once 'adminUpload.req.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Upload Paper</title>
  </head>
  <body>
    <h2 style="color: #000066; font-family: Tahoma;">Upload Question Paper</h2>
    <!--form to upload the question paper-->
    <form class="q-upload" action="upload.admin.php" method="post" enctype="multipart/form-data">
      <label style="color: #000066">Enter module code: </label>
      <br><br>
        <input style="text-align: center;" class="q-input" type="text" name="module">
      <br><br>
      <label style="color: #000066">Choose your file: </label>
        <br><br>
          <!--only allow pdf uploads-->
          <input type="file" name="file" accept="application/pdf">
            <br><br>
            <label style="color: #000066">Enter Exam Duration(in hours):</label>
            <input style="text-align: center;" class="q-input"type="text" name="duration" value="">
              <br><br>
              <label style="color: #000066">Start Date:</label>
              <input style="text-align: center;" class="q-input"type="text" name="startDate" placeholder="2021-01-01">
              <br><br>
                <label style="color: #000066">Start Time:</label>
                <input style="text-align: center;" class="q-input"type="text" name="startTime" placeholder="02:00:00">
                <br><br>
                  <label style="color: #000066">End Date:</label>
                  <input style="text-align: center;" class="q-input"type="text" name="endDate" placeholder="2021-01-01">
                  <br><br>
                <label style="color: #000066">End Time:</label>
                <input style="text-align: center;" class="q-input"type="text" name="endTime" placeholder="02:00:00">
                <br><br>
            <button class="q-button" type="submit" name="adminUpload">Upload</button>
            <button class="q-button" type="submit" name="cancelUpload">Back</button>
        <br><br>
        <!--Display a message for the paper upload status-->
        <b><i style="color: #FF0000 !important; font-size: 15px;"><?php echo $message; ?></i><b>
      </form>
  </body>
</html>
