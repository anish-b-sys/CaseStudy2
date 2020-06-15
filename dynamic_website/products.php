<div id = "categories">
    <ul>
        <?php
        include_once "class/User.php";
        $user = new User(null, "", "", "");
        $categories = $user->viewCategories();
        $i = 0;
        while ($i < sizeof($categories)){
            $category = $categories[$i];
            echo "<li><a href='products.php?categoryID=".$category->id."'>".$category->name."</a></li>";
            $i = $i + 1;
        }
        ?>
        <!--        <li><a href="dogFood.html"><img src="images/products/dog.png"/></a></li>-->
        <!--        <li><a href="catFood.html"><img src="images/categories/cat.png"/></a></li>-->
        <!--        <li><a href="birdFood.html"><img src="images/categories/bird.png"/></a></li>-->
        <!--        <li><a href="fishFood.html"><img src="images/categories/fish.png"/></a></li>-->
        <!--        <li><a href="smallAnimalFood.html"><img src="images/categories/smallAnimal.png"/></a></li>-->
        <!--        <li><a href="reptileFood.html"><img src="images/categories/reptile.png"/></a></li>-->
    </ul>
</div>