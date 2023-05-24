<?php include "header.php"; ?>
<?php 
session_start(); 
$name = $_SESSION['name'];

if(!$_SESSION['name']){
  header('location:login.php');
}

?>

<h2>Welcome, </h2>
<h3><?php echo "$name"; ?></h3>

<a href="server.php?logout=1" class='btn btn-primary'>Logout</a>

<?php include "footer.php"; ?>