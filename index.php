<?php
  require_once 'dbConnection.php';
  require_once 'logout.req.php';
  require_once 'downloadPaper.php';
  require_once 'sub.status.req.php';
  require_once 'scripts.req.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Online Exam Portal</title>
  </head>
    <h1 class="welcome">Welcome to the Online Exam Portal</h1>
    <!--count down timer-->
    <div class="timer">
      <p id="timing"></p>
    </div>
    <!--form for the logout button-->
    <form  action="student.login.php" method="post">
      <button class="btnLogout" type="submit" name="btnLogout">Logout</button>
    </form>
  <body>
    <section class="left-section">
      <!--Section for the student to download the question paper-->
      <h1 style="color: #000066">Download Question Paper</h1>
      <p>Ensure that you have the correct module code with you then type it
         in the textbox below to download the question paper.</p>
      <h3 style="color: #000066">Enter your module code:</h3>
      <form action="index.php" method="get">
        <input class="input-d" type="text" name="module"><br><br>
        <button type="submit" name="download">Submit</button><br><br>
        <b><p style="color: #FF0000 !important; font-size: 20px;"><?php echo $message; ?></p></b>
        <!--Download link will appear below the Submit button-->
        <?php if (isset($_GET['download']) && !empty($_GET['module'])) {?>
        <?php
        if (mysqli_num_rows($query) > 0) {?>
          <?php if($data = mysqli_fetch_assoc($query)){?>
            <!--link to download the question paper-->
            <a id="link" href="<?php echo $data['paperLink']; ?>" download="<?php echo $data['fileName'] ?>">Download Question Paper</a>
          <?php } ?>
        <?php } ?>
        <?php } ?>
      </form>
    </section>
    <div class="right-section">
      <!--Section for the student to upload the exam document-->
      <h1 style="color: #000066">Upload your exam</h1>
      <h3 style="color: red">Checklist:</h3>
      <ul>
        <li>Ensure that you submit the correct document</li>
        <li>The document must be saved as studentnumber_modulecode.pdf,<br>
          e.g 12345678_ICT1511.pdf</li>
        <li>The document must be in PDF fomart</li>
        <li>You must click the Pledge Sign Here button before submitting</li>
        <li>The document must not be greater than 4MB</li>
        <li>Ensure that all form fields are completed</li>
      </ul>
      <p style="color: #000066"><b>Submit your exam below</b></p>
        <form action="scripts.req.php" method="post" enctype="multipart/form-data" required>
          <label>Enter your module code:</label>
          <input class="input-d" type="text" name="moduleCode">
          <br><br>
          <label style="color: #000066"><b>Upload your file:</b></label><br>
            <!--only allow pdf uploads-->
            <input  type="file" id"upload" name="file" accept="application/pdf">
            <br><br>
            <!--student must check this button for the submission togo through-->
            <input type="radio" name="rdSubmit">
              <lable style="color: red"><b>Pledge:</b><i>"I declare that the exam submission is my own work and,
                  understand the possible concequences should I be found guilty of dishonesty."</i></label>
              <br><br>
          <button type="submit" id="btnUpload" name="btnUpload">Upload</button>
        </form>
    </div>
    <script src="javascript/script.js"></script>
  </body><br>
  <footer>Copyright &copy 2021</footer>
</html>
