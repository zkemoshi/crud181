<?php 
include 'db.php';
session_start();

// Registration
if(isset($_POST['register'])){
   
  // get data from from to variables
   $name = $_POST['name'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $password2 = $_POST['password2'];

  // Check if password confirmed
  if($password != $password2){
    echo "password not equal";
  }else {
    // Check if user exist
    $sql = "SELECT * FROM user WHERE email='$email'";

    $check_result = mysqli_query($connection, $sql);
    $num_rows = mysqli_num_rows($check_result); 

    if($num_rows>0){
      echo "User already exist";
    }else {

      // Send data to database
      $sql = "INSERT INTO user (name,password,email) VALUES ('$name','$password','$email')";

      // Execute the query
      $result = mysqli_query($connection, $sql);

      if($result){     
        header('location:login.php');
        
      }else {
        echo "data not added to database";
      }
    }

    
  }
 
}


// Login 
if(isset($_POST['login'])){
  // get data from from to variables
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Check credential
  $sql = "SELECT * FROM user WHERE email='$email'";
  $check_result = mysqli_query($connection, $sql);
  $num_rows = mysqli_num_rows($check_result); 
  if($num_rows > 0){
    $row = mysqli_fetch_assoc($check_result);
    $db_password = $row['password'];
    $db_email = $row['email'];
    $db_name = $row['name'];

      if($password != $db_password){
        echo "Invalid Credential pawd";
      }else {
          $_SESSION['name'] = $db_name;
          $_SESSION['email'] = $db_email;
          header('location:index.php');
      }
  }else {
    echo "invalide credential email";
  }
  
}


// Logout 
if(isset($_GET['logout'])){
  session_destroy();
  header('location:login.php');
}