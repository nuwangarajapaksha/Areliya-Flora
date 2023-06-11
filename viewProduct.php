<?php
include './DB_Conn.php';
?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="viewStyle.css"/>
        <?php
        $pid = $_GET['pid'];
        ?>
    </head>
    <body> 
        <?php
        $query = "SELECT * FROM products where "
                . "id_product = '" . $pid . "'";
        $result = $connection->query($query);
        while ($row = $result->fetch_assoc()) {
            ?>
        
        
        
            <div>
                <img class="img3" 
                     src="img/<?php echo $row["img_url"]; 
                     ?>"/>
            </div>    
            <div class="d">
                <span class="sp1"><?php echo $row["product_name"]; 
                ?></span></br></br>
                <span class="sp2"><?php echo $row["product_"
                    . "discription"]; ?></span></br></br></br>
                <span class="sp3">Price : LKR<?php echo 
                $row["sell_price"]; ?>/=</span></br></br></br>

                <button class="button1">Buy Now !</button> 
                <a href="adminHome.php"> 
                    <button class="button2">Back</button>
                </a>
            </div> 
        <?php } ?>
    </body>
</html>
