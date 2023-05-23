<?php include 'header.php'; ?>

  <a href='index.php' class ='btn btn-primary my-4'>Add User</a>

  <table class='table table-bordered'>
    <thead>
      <tr>
        <th>#</th>
        <th>name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Mobile</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>

    <?php 
      $sql = "SELECT * FROM user";

      $result = mysqli_query($connection, $sql);
      $num= 0;
      if($result){
        while($row = mysqli_fetch_assoc($result)){
          $id = $row["id"];
          $name = $row["name"];
          $email = $row["email"];
          $password = $row["password"];
          $mobile = $row["mobile"];
          $num++;

          echo "
          <tr>
          <td>$num</td>
          <td>$name</td>
          <td>$email</td>
          <td>$password</td>
          <td>$mobile</td>
          <td>
            <a href='edit.php?editid=".$id."' class='btn btn-success'>Edit</a>
            <a href='delete.php?deleteid=".$id."' class='btn btn-danger'>Delete</a>
          </td>
        </tr>
          ";
          
        }
        
      } else {
        echo "No result found!";
      }
    
    ?>
      
     
    </tbody>
  </table>

<?php include 'footer.php'; ?>
