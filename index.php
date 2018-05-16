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
        vakantieland is the place to visit when you want vakantie, and even if you don't want vakantie.
        Get vakantie or get rid of children, the place is here at vakantieland. vakantiedepantie.
    </p>
    <a href="http://google.com" class="button">Reserveer</a>
</div>

<?php endforeach; ?>
</div>



<footer>

</footer>

</body>
</html>
