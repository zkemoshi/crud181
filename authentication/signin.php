<?php 
  session_start();

  if(isset($_POST['save'])){
    include "db.php";
    // get data from from to variables

    // Check wheather password 
      $username = $_POST['username'];
      $password = $_POST['password'];
      

      $sql = "SELECT * FROM registration WHERE username='$username' AND password='$password'";

      // Execute the query
      $result = mysqli_query($connection, $sql);

      // count if the query return any number of row(1) or empty row (0)
      $count = mysqli_num_rows($result);

      // if count if not empty then the user exist
      if($count > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        header('location:index.php');    
      }else{
        echo "User does not exist";
      }

  }

  


  include "header.php";
?>

    <h1 class='text-center mt-3'>Sign In</h1>

    <form method="POST" action="" class='w-50 m-auto'>
      <div class="mb-3">
        <label  class="form-label">Username</label>
        <input type="text" class="form-control" name="username">
      </div>
      <div class="mb-3">
        <label  class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password1">
      </div>
      <button type="submit" name="save" class="btn btn-danger w-100">Login</button>
      <div id='error'></div>
    </form>
  
  <?php include 'footer.php'; ?>
  