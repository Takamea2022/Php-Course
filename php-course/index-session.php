
<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
</head>
<body>
  <!-- <form action="index.php" method="post">
    User Name: <br>
    <input type="text" name="username"><br>
    Password:<br>
    <input type="password" name="password"><br>
    <input type="submit" name="login" value="login"> -->

  </form>
</body>
</html>

<?php

  foreach($_SERVER as $key => $value) {
    echo "{$key} = {$value} <br>";
  }





  // if (isset($_POST["login"])) {
  //   if(!empty($_POST["username"]) && !empty($_POST["password"])) {
  //     $_SESSION["username"] = $_POST["username"];
  //     $_SESSION["username"] = $_post["passwoed"];

  //     header("Location: home.php");
  //   }else {
  //     echo "Missing User Name / Password.";
  //   }
  // }


  // if(isset($_POST["login"])) {
  //     if(!empty($_POST["username"]) && !empty($_POST["password"])) {
  //       $_SESSION["username"] = $_POST["username"];
  //       $_SESSION["password"] = $_POST["password"];

  //       header("Location: home.php  ");
     
  //     }else {
  //       echo "Missing Username/Password";
  //     }

  // }

  // $_SESSION["username"] = "EmanCute";
  // $_SESSION["password"] = "Wawawee987";

  // echo $_SESSION["username"] . "<br>";
  // echo $_SESSION["password"] . "<br>";
?>