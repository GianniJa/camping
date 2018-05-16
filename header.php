<div class="nav">
    <img class="topimage" src="https://upload.wikimedia.org/wikipedia/commons/7/72/Wide_view_over_S%C3%B8rfjorden_from_the_coast_of_Sveingard%2C_2012_June.jpg"/>
    <ul class="header">
        <li style="float:left"><a href="index.php">Home</a></li>
        <?php if (user_is_logged_in()): ?>
          <li><a href="logout.php">Logout</a></li>
        <?php else: ?>
        <li><a href="login.php">Login</a></li>
      <?php endif; ?>
      <?php if (isset($_SESSION['user']) && $_SESSION['user']['is_admin'] ): ?>
        <li><a href="admin.php">Admin Page</a></li>
      <?php endif;?>
    </ul>
    <div class="clear"></div>
</div>
