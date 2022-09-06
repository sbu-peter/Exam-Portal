<?php
  require_once 'dbConnection.php';
  require_once 'logout.req.php';
  require_once 'sub.status.req.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exam Submission</title>
    <style media="screen">
    h1 {
      font-family: Tahoma, Helvetica, sans-serif, Verdana;
      background: -webkit-linear-gradient(#000066, #990000, #cc6600);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    main {
      color: #000066;
      font-size: 20px;
      text-align: left;
      margin: 20px;
      height: 450px;
      width: inherit;
      background: #FFFFFF;
      perspective: 500px;
      padding: 20px;
      border-radius: 25px;
      border:4px solid #990000;
    }
    button {
      font-size: 15px;
      border-radius: 15px;
      width: 10em;
      color: #ffffff;
      background:#cc6600;
      border:2px solid;
      text-align: center;
      padding: 5px;
    }
    button:hover{
      background: #000066;
      color: #FFFFFF;
    }
    .btnLogout{
      font-size: 15px;
      border-radius: 15px;
      width: 7.5em;
      color: #ffffff;
      background:#cc6600;
      border:2px solid;
      text-align: center;
      float: right;
      margin-top: -50px;
    }
    .btnLogout:hover{
      background: #000066;
      color: #FFFFFF;
    }
    </style>
  </head>
  <body>
    <h1>Exam Submission</h1>
    <form  action="submission.status.php" method="post">
      <button class="btnLogout" type="submit" name="btnLogout">Logout</button>
    </form>
      <main>
        <h3>Thank you for your submision.</h3>
        <form action="mail.php" method="post">
          <h4 style="color: red;"><i>An email will be sent to you to confrim receipt of your submission.</i></h4>
              <p>You may click cancel should you need to make some changes on your submision.</p>
              <p style="color: red;">Please verify the information below</p>
              <!--the information about the user's submisison will be displayed here using PHP-->
              <p>Module Code:<i name="module" style="color: black;"><?php echo " ".$_SESSION['module']; ?></i></p>
              <p>Student Number:<i name="StdNum" style="color: black;"><?php echo " ".$_SESSION['username']; ?></i></p>
              <p>Email:<i name="email" style="color: black;"><?php echo " ".$_SESSION['username']."@mylife.unisa.ac.za"; ?></i></p>
              <p>Document Name:<i name="docName" style="color: black;"><?php echo " ".$_SESSION['file']; ?></i></p>
              <p>Date:<i name="mydate" style="color: black;"><?php echo " ".date("Y-m-d"); ?></i></p>
              <br>
              <br><br>
              <button type="submit" name="confirm">Confirm Submission</button>
              <button type="submit" name="cancel">Cancel</button>
          </form>
      </main>
  </body>
</html>
