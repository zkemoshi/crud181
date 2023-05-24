<?php include 'header.php'; ?>

<h1 class='text-center mt-3'>Login</h1>

    <form method="POST" action="server.php" class='w-50 m-auto'>
      
      <div class="mb-3">
        <label  class="form-label">Email</label>
        <input type="email" class="form-control" name="email">
      </div>
      <div class="mb-3">
        <label  class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
      </div>
      <button type="submit" name="login" class="btn btn-danger w-100">Sign In</button>
    </form>
  
<?php include 'footer.php'; ?>