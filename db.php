<?php 
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $database_name = 'crud181';


  $connection = mysqli_connect($servername,$username,$password,$database_name);

  if(!$connection){
    echo "Dabatabse connection problem!";
  }

?>