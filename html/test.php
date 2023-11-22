<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "DBQuery.php"; 
        $cartID = []; 
        $Info = []; 
        $cartID = getList_cart(11); 
        $i; 

        getProductInfo(11);
        foreach($cartID as $i){
            $productID = getProduct($i);
            $Info = getProductInfo($productID);
            $cart = checkExistingCart(1, $productID);
            echo $i . " " . $productID . " " . $Info[0] . $Info[1] . " " . $cart . " " . "<br>"; 
        }

        $add = addtoCart(11, 20);
        $remove = removeFromCart(8); 
        $latest = getLatestOrder(14); 

        echo "<br>" . $add . " " . $remove . " " . $latest; 
        
    ?>
</body>
</html>