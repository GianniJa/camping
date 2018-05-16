<?php
include "includes/places.php";
include "includes/user.php";

if(user_is_logged_in()) {
  // redirect naar index;
  header('Location: index.php');
}

if(isset($_POST['username']) && isset($_POST['password'])) {
  // login
  $login_successfull = login($_POST['username'], $_POST['password']);

  if ( ! $login_successfull ) {
    echo "ja werk tniet";
  }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Cool Beans</title>
    <meta charset="UTF-8">
    <script src="/Javascript/..."></script>
    <link rel="stylesheet" type="text/css" href="CSS/stylesheet.css">
</head>
<body>

<?php include "header.php" ?>

<form method="POST">
<div class="login">
  <div class="container">
    <label for="username"><b>EMAIL</b></label>
    <input type="text" placeholder="Enter EMAIL" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">Login</button>
  </div>
</div>
</form>


</body>
</html>
