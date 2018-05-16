<?php
include "includes/places.php";
include "includes/user.php";
session_start();
 if ( ! isset($_SESSION['user']) || ! $_SESSION['user']['is_admin'] ) {
   header("Redirect: /");
   exit;
 }

$database = connect();
$query = "SELECT * FROM users WHERE is_admin=0";
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

<table class="highlight white-text flow-text">
<?php
if ($result = $database->query($query)){

  while($row = $result->fetch_assoc()){ ?>
    <thead>
           <tr>
             <th>First Name</th>
             <th>Last Name</th>
           </tr>
         </thead>

         <tbody>
           <tr>
             <td><?php echo $row["first_name"]?></td>
             <td> <?php echo $row["last_name"]?></td>
             <td><form action="delete.php" method="POST"><button type="delete">Delete</button></form></td>
           <?php  }
         }?>
       </tr>
     </tbody>
   </table>
</body>
