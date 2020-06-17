<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HomePage</title>
    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/styles.css">

</head>

<?php
include_once "header.php"; // retrieves header.php
?>

<img src="images/headingImage.jpg" id ="headingImg"/>

<?php
include_once "categories.php";
?>

<div id="promo">
    <ul>
        <li><a><img src="images/promos/promo1.png"/></a></li>
        <li><a><img src="images/promos/promo3.png"/></a></li>
        <li><a><img src="images/promos/promo2.png"/></a></li>
    </ul>
</div>
<?php
include_once "footer.php";
?>
</body>
</html>