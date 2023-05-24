<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

  if(isset($_POST['save'])){
    include "db.php";
    // get data from from to variables

    // Check wheather password 
      $username = $_POST['username'];
      $password = $_POST['password'];
      $confirm_password = $_POST['confirm_password'];
      

    if ($password != $confirm_password){
        echo "Password Not Matching";
    } else {
      // Send data to database
      $sql = "INSERT INTO registration (username,password) VALUES ('$username','$password')";

      // Execute the query
      $result = mysqli_query($connection, $sql);
      if($result) {
        header("location:signin.php");
      }

    }

  }


  include "header.php";
?>

    <h1 class='text-center mt-3'>Sign Up</h1>

    <form method="POST" action="" class='w-50 m-auto'>
      <div class="mb-3">
        <label  class="form-label">Username</label>
        <input type="text" class="form-control" name="username">
      </div>
      <div class="mb-3">
        <label  class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password1">
      </div>
      <div class="mb-3">
        <label  class="form-label">Confirm Password</label>
        <input type="password" class="form-control" name="confirm_password" id="password2">
      </div>
      <button type="submit" name="save" class="btn btn-danger w-100">Register</button>
      <div id='error'></div>
    </form>
  
  <?php include 'footer.php'; ?>
  