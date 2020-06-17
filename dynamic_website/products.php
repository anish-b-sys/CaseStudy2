<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>products</title>
    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/styles.css">

</head>
<body onload="invoice()">

<?php
include_once "header.php";
?>



<div id = "catDivContainer">
    <div id = 'catDiv'>
        <ul>
            <?php
                $categoryID = $_GET["categoryID"];
                $products = $user->showProductsByCategory($categoryID);
                $i = 0;
                while ($i < sizeof($products)){
                    $product = $products[$i];
                    ?>
                <li>
                    <img src="<?php echo $product->image;?>"/>
                    <p>"<?php echo $product->name; ?>"</p>
                    <p> = "Price: $<?php echo $product->price; ?>"</p>
                    Qty: <input placeholder="qty" type = number>
                    <button name="<?php echo $product->name; ?>"
                            price = "<?php echo $product->price; ?>"
                            onclick="addProductToCart(this)">Add to cart</button>
                </li>
            <?php
            $i = $i + 1;} ?>
        </ul>
    </div>
</div>

<?php
include_once "categories.php";
?>

<?php
include_once "footer.php";
?>

</body>
</html>
