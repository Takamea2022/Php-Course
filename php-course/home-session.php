<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
</head>
<body>
    This is the Home page <br>
    <form action="home.php" method="post">
        <input type="submit" name="logout" value="logout">
    </form>
</body>
</html>
<?php
  // $_SESSION["username"] = "EmanCute";
  // $_SESSION["password"] = "Wawawee987";

  // echo $_SESSION["username"] . "<br>";
  // echo $_SESSION["password"] . "<br>";

    if(isset($_POST["logout"])) {
      session_destroy();
      header("Location: index.php");
    }
?>