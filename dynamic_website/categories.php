<div id = "categories">
    <ul>
        <?php
        include_once "class/User.php";
        $user = new User(null, "", "", ""); // public user
        $categories = $user->viewCategories();
        $i = 0;
        while ($i < sizeof($categories)){ // goes through each row
            $category = $categories[$i];
            echo "<li><a href = 'products.php?categoryID=".$category->id."'><img src = '".$category->picture."'/></a></li>"; // extracts id dependent on category
            $i = $i + 1;
        }
        ?>
    </ul>
</div>