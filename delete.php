<?php 

if(isset($_GET['deleteid'])){
  include "db.php";

  $id = $_GET['deleteid'];

  $sql = "DELETE FROM user WHERE id='$id'";
  

  $result = mysqli_query($connection, $sql);

  if($result){
    header('location:display.php');
  }else {
    echo "Item not deleted!";
  }
}


?>