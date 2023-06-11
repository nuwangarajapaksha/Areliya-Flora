<?php
include './DB_Conn.php';
?>
<html>
    <head>
        <title>Admin Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="HeaderFooter.css"/>
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
    <body style="background: #fff;">
        <?php include './head-nav.php'; ?>

        <div class="categories">
            <h1 class='tre'>Categories</h1>
            <ul class="ul1">
                <h3 class="title">Natural</h3>
                <li class="list">Rose</li>
                <li class="list">Daisies</li>
                <li class="list">Calla Lilies</li>
                <li class="list">Gerbera Daisies</li>
                <li class="list">Orchids</li>
                <li class="list">Gardenias</li>
            </ul>
            <ul class="ul1">
                <h3 class="title">Artifical</h3>
                <li class="list">Rose</li>
                <li class="list">Daisies</li>
                <li class="list">Orchids</li>
                <li class="list">Gardenias</li>
            </ul>
        </div>
        <div class="newdiv"></div>
        
        <div class="search">
            <form mathod="post" action="adminHome.php">
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
        
        
        
        </br>
 
        <table class="newt">
            <tr>
                <td><img class="newimg2" src="img/poruwa.jpg">
                    <br><h5 class="newh5"> Poruwa Designs</h5>
                </td>
                <td><img class="newimg2" src="img/settee.jpg">
                    <br><h5 class="newh5"> Seteeback Decor</h5>
                </td>
                <td><img class="newimg2" src="img/tabledecor.jpg">
                    <br> <h5 class="newh5">Table Decor</h5>
                </td>
                <td><img class="newimg2" src="img/possy.jpg">
                    <br><h5 class="newh5"> Bouquet</h5>
                </td>
            </tr>
        </table>

        <br><br>
        <div>
            <?php include './Footer_Header.php'; ?>
        </div>

    </body>
</html>
