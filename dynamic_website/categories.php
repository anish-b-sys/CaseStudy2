
<link rel="stylesheet" href="css/styles.css">
<div id = "categories">
    <ul>
        <?php
        include_once "class/User.php";
        $user = new User(null, "", "", "");
        $categories = $user->viewCategories();
        $i = 0;
        while ($i < sizeof($categories)){
            $category = $categories[$i];
//            echo "<li><a href='products.php?'><img src =".$category->picture."/></a></li>";
//            categoryID=".$category->id."
//            echo "<li>"
            echo "<li> <a href = 'products.php?categoryID=".$category->id."'><img src = ".$category->picture."/></a></li>";
//            echo $categoryID;
            $i = $i + 1;
        }
        ?>
    </ul>
</div>