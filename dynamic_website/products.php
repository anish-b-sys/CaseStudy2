<link rel="stylesheet" href="css/styles.css">

<?php
include_once "header.php";
?>

<div id = "catDivContainer">
    <div id = 'catDiv'>
<?php
    $categoryID = $_GET["categoryID"];
    $products = $user->showProductsByCategory($categoryID);
    $i = 0;
    while ($i<sizeof($products)){
        $product = $products[$i];
?>
<
        <ul>
            <li>
                <img src="<?php echo $product->image;?>"/>
                <p>"<?php echo $product->name; ?>"</p>
                <p> = "Price: $<?php echo $product->price; ?>"</p>

                Qty: <input type = number id = 'dogFood1Qty' class = qty>

                <button name="<?php echo $product->name; ?>"
                        price = "<?php echo $product->price; ?>"
                        onclick="addProductToCart(this)">Add to cart</button>

            </li>
        </ul>

    </div>
</div>

<?php
$i = $i + 1;
}
?>

<?php
include_once "categories.php";
?>


<?php
include_once "footer.php";
?>