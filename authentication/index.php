<?php 
session_start();

$username = $_SESSION['username'];
$id = $_SESSION['id'];
?>

<?php include 'header.php'; ?>

<div>
  <h1>Welcome,</h1>
  <small><?php echo "$username"; ?></small>
</div>

<a href="logout.php" class='btn btn-danger'>Logout</a>

<?php include 'footer.php'; ?>
