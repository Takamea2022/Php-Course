<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learn Php</title>
</head>
<body>
  
  <form action="index.php" method="post">
    User Name<br>
    <input type="text" name="userName"><br>
    <label>Age:</label><br>
    <input type="text" name="age"><br>
    <label>Email:</label><br>
    <input type="text" name="email"><br>

    <input type="submit" name="login" value="login">
  </form>





 
  <!-- <form action="index.php" method="post">
    <label for="">User Name</label>
    <input type="text" name="Username"><br>
    <label for="">Password</label>
    <input type="password" name="Password"><br>
    <input type="submit"name="login" value="Log in"><br>

  </form> -->
  <!-- <form action="index.php" method="post">
    <input type="radio" name="credit_card" value="Visa">Visa<br>
    <input type="radio" name="credit_card" value="Master Card">Mater Card<br>
    <input type="radio" name="credit_card" value="G-Cash">G-Cash<br>
    <input type="submit" name="confirm" value="confirm"><br> -->

  <!-- </form> -->

  <!-- <form action="index.php" method="post">
    <input type="checkbox" name="foods[]" value="Pizza">Pizza<br>
    <input type="checkbox"  name="foods[]"  value="Hambuger">Hamburger<br>
    <input type="checkbox"  name="foods[]"  value="Hotdog">Hatdog<br>
    <input type="checkbox"  name="foods[]"  value="Tacco">Taco<br>
    <input type="submit" name="submit"><br>
  </form> -->


</body>
</html>

<?php
  if ($_POST["login"]) {

    
    // $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);


    // $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

      if(empty($age)) {
        echo "That age wasn't valid";
      }else {
        echo "You are $age years old";
      }






    // $user_name = filter_input(INPUT_POST, "userName", FILTER_SANITIZE_SPECIAL_CHARS);

    // $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

    // $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
   
    // echo "You are {$email} years old";

  }





  // $userName = array("Eman", "is", "Cute");
  // $phoneNumber = "123-456-7890";

  // $userName = strtolower($userName);
  // $userName = strtoupper($userName);
  // $userName = trim($userName); 
  // $user_name = str_pad($userName, 20, "e");
  // $phone_number = str_replace("-", "/", $phoneNumber);
  // $user_name = strrev($userName);
  // $user_name = str_shuffle($userName);
  // $user_name = strcmp($userName, "Eman Cute"); 
  // $count = strlen($userName);
  // $user_name = strpos($userName, "m");
  // $user_name = substr($userName, 0, 4);
  // $user_name = substr($userName, 5);
  // $user_name = explode(" ", $userName);
  // $user_name = implode("-", $userName);

  

  // echo $user_name;
  // foreach($user_name as $name) {
  //   echo $name . "<br>";
  // }






// echo  $user_name;

  // echo $userName;


  // function hypotenuse ($a, $b) {
  //   $c = sqrt($a ** 2 + $b ** 2);
  //   return $c;
  // }

// echo hypotenuse(3, 4);

  // function isEvenOdd($number) {
  //  return $number % 2 == 0;
  // }

  // echo isEvenOdd(6);



  // function happyBirthday ($firstName, $age) {
  //   echo "Happy birthday to you {$firstName} <br>";
  //   echo "Happy birthday to you <br>";
  //   echo "Happy birthday to you <br>";
  //   echo "Happy birthday to you <br>";
  //   echo "Happy birthday to you {$firstName} <br>";
  //   echo "You are {$age} year's old <br>";
  // }

  // happyBirthday("EmaCute", 31);
  // happyBirthday("Mart", 20);
  // happyBirthday("Justine", 22);



  // if(isset($_POST["submit"])) {

  //   $foods = $_POST["foods"];

  //     foreach($foods as $food) {
  //       echo "$food <br>";
  //     }



    
    // if(isset($_POST["pizza"])){
    //   echo "You like Pizza <br>";
    // }if(isset($_POST["hamburger"])){
    //   echo "You like Hamburger <br>";
    // }if(isset($_POST["hotdog"])){
    //   echo "You like Hotdog <br>";
    // }if(isset($_POST["taco"])){
    //   echo "You like Taco <br>";
    // }

    // if(empty($_POST["pizza"])){
    //   echo "You DON'T like Pizza <br>";
    // }if(empty($_POST["hamburger"])){
    //   echo "You DON'T like Hamburger <br>";
    // }if(empty($_POST["hotdog"])){
    //   echo "You DON'T like Hotdog <br>";
    // }if(empty($_POST["taco"])){
    //   echo "You DON'T like Taco <br>";
    // }else {
    //   echo "Make a selection.";
    // }
  // }

  // foreach($_POST as $key => $values) {
  //   echo "{$key} = {$values} <br>";
  // }

  // if(isset($_POST["login"])) {
  //   $username = $_POST["Username"];
  //   $password = $_POST["Password"];

  //     if(empty($username)) {
  //       echo "Username is missing";
  //     }elseif(empty($password)) {
  //       echo "Password is missing";
  //     }
  //     else {
  //       echo "Hello {$username}";
  //     }
  // }


  // if(isset($_POST["confirm"])) {
  //   $credit_card = null;
   

  //     if(isset($_POST["credit_card"])) {
  //       $credit_card = $_POST["credit_card"];
       
      // }if($credit_card == "Visa"){
      //   echo "You selected Visa";
      // }elseif($credit_card == "Master Card") {
      //   echo "You selected Master Card";
      // }elseif($credit_card == "G-Cash") {
      //   echo "You selected G-Cash Master Card";
      // }else {
      //   echo "Make a selection.";
        
  //     }
  //     switch($credit_card) {
  //       case "Visa":
  //         echo "You selected Visa";
  //         break;
  //       case "Master Card":
  //         echo "You selected Master Card";
  //         break;
  //       case "G-Cash":
  //         echo "You selected G-Cash";
  //         break;
  //       default:
  //         echo "Make a selection";
  //     }

  // }

?> 