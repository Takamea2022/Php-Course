
<?php
  include("database.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <h2>Welcome to Fakebook!</h2>
    username: <br>
    <input type="text" name="username"> <br>
    password: <br>
    <input type="password" name="password"> <br>
    <input type="submit" name="submit" value="register">

  </form>
</body>
</html>

<?php

// Assuming you have established a database connection using $conn

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($username)) {
        echo "Please enter a username";
    } elseif (empty($password)) { // Changed from $_password to $password
        echo "Please enter a password";
    } else {
        // Hash the password using bcrypt
        $hash = password_hash($password, PASSWORD_DEFAULT);

        // Using prepared statements to prevent SQL injection
        $sql = "INSERT INTO users (user, password) VALUES (?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            // Bind parameters and execute the statement
            mysqli_stmt_bind_param($stmt, "ss", $username, $hash);
            if (mysqli_stmt_execute($stmt)) {
                echo "You are now registered!";
            } else {
                // echo "Error: " . mysqli_stmt_error($stmt);
            }

            // Close the statement[]
            mysqli_stmt_close($stmt);
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } 
}

// Close the database connection
mysqli_close($conn);
?>


/*
  if($_SERVER["REQUEST_METHOD"] == "POST") {

      $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
      $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

      if(empty($username)) {
        echo "Please enter a username";
      }
      elseif(empty($_password)) {
        echo "Please Enter a Password";
      }
      else {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (user, password)
                VALUES ('$username', '$hash')";
        mysqli_query($conn, $sql);
  
        echo "You are now Registered!";
      } 
  
  }
  */



  
  mysqli_close($conn);
?>




  <!-- // $sql = "SELECT * FROM users";
  // $result = mysqli_query($conn, $sql);

  //   if(mysqli_num_rows($result) > 0) {
  //     while($row = mysqli_fetch_assoc($result)){
  //       echo $row["id"] . "<br>";
  //       echo $row["user"] . "<br>";
  //       echo $row["reg_time"] . "<br>";
  //     };
  //   }
  //   else {
  //     echo "No user found!";
  //   } -->


  <!-- //Insert data to the table

  // $username = "Patrick";
  // $password = "rock3";
  // $hash = password_hash($password, PASSWORD_DEFAULT);

  // $sql = "INSERT INTO users (user, password)
  //         VALUES ('$username', '$hash')";
  
  // try {
  //   mysqli_query($conn, $sql);
  //   echo "User is now Registered";
  // }catch(mysqli_sql_exception) {
  //   echo "Could not register user";
  // } -->

  <!-- // mysqli_close($conn);   -->
<!-- ?> -->


<!-- <!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php connectToDb</title>
</head>
<body>
  Hi! EmanCute: <br>
</body>
</html> -->