<?php 
  include "db.php";

  if(isset($_POST['save'])){
    // get data from from to variables
      $name = $_POST['name'];
      $email = $_POST['email'];
      $mobile = $_POST['mobile'];
      $password = $_POST['password'];

    // Send data to database
    $sql = "INSERT INTO user (name,password,mobile,email) VALUES ('$name','$password','$mobile','$email')";

    // Execute the query
    $result = mysqli_query($connection, $sql);

    if($result){
      echo "Data successfully added to database";
    }else {
      echo "data not added to database";
    }
  }


  include "header.php";
?>

    <h1>CRUD Operations</h1>

    <form method="POST" action="">
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
      <button type="submit" name="save" class="btn btn-danger">Submit</button>
    </form>
  
  <?php include 'footer.php'; ?>
  