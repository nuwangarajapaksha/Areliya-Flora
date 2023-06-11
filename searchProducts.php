<!DOCTYPE html>
<?php
include './DB_Conn.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="SearchStyle.css">
        <?php
        $keyword = "";
        if (isset($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
            ?>
        <?php
    }
    ?>
</head>
<body>
    <div class="categories">
        <h1>Categories</h1>
        <ul class="ul1">
            <li>Live
                <ul class="ul2">
                    <li><a>Rose</a></li>
                    <li><a>lily</a></li>
                </ul>
            </li>
            <li>Artificial
                <ul class="ul2">
                    <li><a>Rose</a></li>
                    <li><a>lily</a></li>
                </ul>
            </li>

        </ul>
    </div>
    <div class="search">
        <form mathod="post" action="searchProducts.php">
            <input type="search" name="keyword" id="keyword" class="inSBar">
            <input type="submit" name="inSearchButton" id="inSearchButton" value="SEARCH" class="inSButton">
        </form>

        </br>
        <table> 
            <?php
            $query = "SELECT * FROM products where product_name like '%" . $keyword . "%' OR product_catagory like '%" . $keyword . "%'";
            $result = $connection->query($query);
            while ($row = $result->fetch_assoc()) {
                ?>

            <tr class="tr1">

                    <td>
                        <a href="viewProduct.php?pid=<?php echo $row["id_product"]; ?>">
                            <img class="img1" src="img/<?php echo $row["img_url"]; ?>">
                        </a>
                    </td>
                    <td>
                        <a href="viewProduct.php?pid=<?php echo $row["id_product"]; ?>">
                            <?php
                            echo "<h2>" . $row["product_name"] . "</h2>"."</br>";
                            echo "<h4>" . $row["product_discription"] . "</h4>"."</br>";
                            echo "<h3>Price : LKR" . $row["sell_price"] . "</h3>"."</br>";
                            ?>
                        </a>
                    </td>
                </tr> 
            <?php } ?>
        </table> 
    </div>    
</body>
</html>
