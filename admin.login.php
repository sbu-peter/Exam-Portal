<?php
  require_once 'admin.login.req.php';
  //sources used in this entire project
    //w3schools website
    //tutorialspoint website
    //youtube channels by Thapa Technical, Pure Codig, Edureka, codingwithmosh
    //Books: Learning PHP, MySQL &  JavaScript by Robin Nixon,Murach's PHP and MySQL, Beginning PHP5, Apache,
    //and MySQL® Web Development by Elizabeth Naramore et al.
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
      <h2>ADMIN-LOGIN</h2>
        <form action="admin.login.php" method="post">
          <label>Username:</label><br>
          <input class="input-1" type="text" name="username"><br>
          <br>
          <label>Password:</label><br>
          <input class="input-1" type="password" name="password"><br>
          <br>
          <button type="submit" name="btnAdminLogin">Login</button>
          <b><p style="color: #FF0000 !important; font-size: 15px;"><?php echo $error; ?></p></b>
        </form>
    </div>
  </div>
  </body>
  <footer>Copyright &copy 2021</footer>
</html>
