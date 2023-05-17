<?php include 'header.php'; ?>

  <button class ='btn btn-primary my-4'>Add User</button>

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

      if($result){
        while($row = mysqli_fetch_assoc($result)){

          echo '
      <tr>
        <td>'. $row["id"] . '</td>
        <td>'. $row["name"] . '</td>
        <td>'. $row["email"] . '</td>
        <td>'. $row["password"] . '</td>
        <td>'. $row["mobile"] . '</td>
        <td>
          <button class="btn btn-success">Edit</button>
          <button class="btn btn-danger">Delete</button>
        </td>
      </tr>
          ';
        }
        
      } else {
        echo "No result found!";
      }
    
    ?>
      
     
    </tbody>
  </table>

<?php include 'footer.php'; ?>
