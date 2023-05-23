<?php 

  if(isset($_POST['edit'])){

    // Get the Id of the row from Global GET parameter
    $id = $_GET['editid'];

    // connect to db
    include "db.php";
    // get data from from to variables
      $name = $_POST['name'];
      $email = $_POST['email'];
      $mobile = $_POST['mobile'];
      $password = $_POST['password'];

    // Send data to database
    $sql = "UPDATE user SET name='$name', email='$email', mobile='$mobile', password='$password' WHERE id='$id'";

    // Execute the query
    $result = mysqli_query($connection, $sql);

    if($result){     
      header('location:display.php');
      
    }else {
      echo "data not updated to database";
    }
  }


  include "header.php";
?>

    <h1 class='text-center mt-3'>EDIT</h1>

    <form method="POST" action="" class='w-50 m-auto'>
      <div class="mb-3">
        <label  class="form-label">Name</label>
        <input type="text" class="form-control" name="name">
      </div>
      <div class="mb-3">
        <label  class="form-label">Email</label>
        <input type="email" class="form-control" name="email">
      </div>
      <div class="mb-3">
        <label  class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
      </div>
      <div class="mb-3">
        <label  class="form-label">Mobile</label>
        <input type="text" class="form-control" name="mobile">
      </div>
      <button type="submit" name="edit" class="btn btn-danger w-100">UPDATE</button>
    </form>
  
  <?php include 'footer.php'; ?>
  