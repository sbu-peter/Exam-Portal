<?php
  require_once 'login.req.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" content="width=device-width, initial-scale=1">
    <title>Online Exam Portal</title>
    <link rel="stylesheet" href="styles/styles.css">
  </head>
  <header>
    <h1>EXAM PORTAL</h1>
  </header>
  <body>
  <div class="container">
    <div class="wrapper">
      <h2>LOGIN</h2>
        <form action="student.login.php" method="post">
          <label>Username:</label><br>
          <input class="input-1" type="text" name="username"<br>
          <br>
          <label>Password:</label><br>
          <input class="input-1" type="password" name="password"><br>
          <br>
          <button type="submit" name="btnLogin">Login</button>
            <b><p style="color: #FF0000 !important; font-size: 15px;"><?php echo $error; ?></p></b>
        </form>
    </div>
  </div>
  </body>
  <footer>Copyright &copy 2021</footer>
</html>
