<?php
session_start();
include "includes/places.php";
include "includes/user.php";

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

<div class="container">
<?php foreach( get_places() as $place ): ?>
    <div id="hometext"class="">

    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6c/Herjangsfjorden_%26_Ofotfjorden%2C_wide%2C_2009_09.jpg"/>
    <p>
        Welkom bij vakantieland.
        <br>
        Plek <?= $place['ID'] ?> is <?= $place['surface'] ?> groot.
        <br>
        Reserveer uw campingplaats nu! (Account nodig!)


    <a href="reserve.php" class="button">Reserveer</a>
</div>

<?php endforeach; ?>
</div>



<footer>

</footer>

</body>
</html>
