<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hashing</title>
</head>
<body>
  
</body>
</html>

<?php

  $password = "Emancute134";

  $hash = password_hash($password, PASSWORD_DEFAULT);

  if(password_verify("Emancute134", $hash)) {
    echo "You are login!";
  }else {
    echo"Incorect password";
  
  }

  // echo $hash;

?>