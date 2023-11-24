 

<?php
// Connect to the database
$servername = "localhost";
$serveruser = "root";
$serverpass = "";
$dbname = "solesocietydb";
$conn;

#Initalizes DB connection, must be called everytime a query will be performed
function OpenDB(){
    global $conn, $servername, $serveruser, $serverpass, $dbname;
    $conn = new mysqli($servername, $serveruser, $serverpass, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
}

#closes Db connection, called at the end of every query
function closeDB(){
    global $conn; 
    $conn->close();
}

# checks wether username or email already exists, returns id or 0 if user does not exist
function checkExistingUser($user, $email){ 
    global $conn;

    $sql_query = "SELECT * FROM useraccount WHERE Username = ? OR Email = ?"; 
    $stmt = $conn->prepare($sql_query); 
    $stmt->bind_param('ss', $user, $email); 
    $stmt->execute(); 
    $result = $stmt->get_result();

    if ($result->num_rows > 0){
        return 1; 
    } 
    else {
        return 0; 
    }

}

function LogIn($Email, $InputPassword, $ConfirmPassword) {
   
        OpenDB(); 
        global $conn;  
        $sql_query = "Select id FROM useraccount WHERE Email = ? AND Password = ?"; 
        $stmt = $conn->prepare($sql_query); 
        $stmt->bind_param('ss', $Email, $InputPassword);  
        $stmt->execute(); 
        $stmt->bind_result($user_id); 
        $stmt->fetch();
        return $user_id; 
   
}

# Write user sign up info to the Database 
function SignUp($new_user, $new_email, $new_pass){
    OpenDB(); 
    global $conn;

    $existing = checkExistingUser($new_user, $new_email); 

    if($existing == 0){
        $sql_query = "Insert into useraccount(Username, Email, Password) values (?, ?, ?)"; 
        $stmt = $conn->prepare($sql_query);
        $stmt->bind_param('sss', $new_user, $new_email, $new_pass); 
        $stmt->execute(); 
        return 0;
    }else if ($existing >= 1){
        return 1;

    }
    

    closeDB();
} 

// Used in Add to cart, returns the id of all the entry in the cart 
// of a partivular user
function getList_Cart($ID){
    OpenDB(); 
    global $conn; 

    $cart_Id = []; 

    $sql_query = "SELECT id FROM cart WHERE userID = ?"; 
    $stmt = $conn->prepare($sql_query); 
    $stmt->bind_param('i', $ID); 
    $stmt->execute(); 
    $result = $stmt->get_result(); 

    if($result->num_rows > 0){
        $i = 0; 
        while($row = $result->fetch_assoc()){
            $cart_ID[$i] = $row["id"]; 
            $i++; 
        }
    
    } else {
        return 0; 
    }
    
    closeDB();
    return $cart_ID; 
}

// Accepts cart ID, return ID
function getProduct($ID){
    OpenDB(); 
    global $conn; 
    
    $sql_query = "SELECT productID FROM cart WHERE id = ?"; 
    $stmt = $conn->prepare($sql_query); 
    $stmt->bind_param('s', $ID); 
    $stmt->execute(); 
    $stmt->bind_result($product_ID); 
    $stmt->fetch();
    
    closeDB();
    return $product_ID; 

}

// Ininput yung id nung product, ni rereturn yung name at price
function getProductInfo($ID){
    OpenDB(); 
    global $conn; 
    $Info = []; 
    
    $sql_query = "SELECT Name, Price, filename, id FROM shoe_inventory WHERE id = ?"; 
    $stmt = $conn->prepare($sql_query); 
    $stmt->bind_param('s', $ID); 
    $stmt->execute(); 
    $result = $stmt->get_result();
    
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $Info[0] = $row["Name"]; 
            $Info[1] = $row["Price"]; 
            $Info[2] = $row["filename"];
            $Info[3] = $row["id"]; 
        }
    } else {
        return 0; 
    }

    
    
    closeDB();
    return $Info; 

}

// input user at product id, nirereturn 0 pag walang nakita na cart id, 
// return cart ID pag meron
function checkExistingCart($user_ID, $product_ID){
    OpenDB(); 
    global $conn; 
    
    $sql_query = "SELECT id FROM cart WHERE userID = ? AND productID = ?"; 
    $stmt = $conn->prepare($sql_query);
    $stmt->bind_param('ss', $user_ID, $product_ID); 
    $stmt->execute(); 
    $stmt->bind_result($cart_ID);
    $stmt->fetch(); 

    if($cart_ID > 0){
        return $cart_ID; 
    }
    else {
        return 0; 
    }
    

    closeDb();
}

// Accepts user at product ID, returns 1 if succesful pag add, 0 pag unsuccessful
function addtoCart($userID, $productID){
    OpenDB(); 
    global $conn; 

    $existing = checkExistingCart($userID, $productID); 

    if ($existing == 0) {
        $sql_query = "INSERT INTO cart(UserID, ProductID) VALUES (?, ?)"; 
        $stmt = $conn->prepare($sql_query);
        $stmt->bind_param('ss', $userID, $productID); 
        $InsertStatus = $stmt->execute(); 
        closeDb();
        return $InsertStatus; 
    }
    else if ($existing > 0) {
        return 0; 
    }
    
}

// input cart ID, then removes it 
function removeFromCart($ID){
    OpenDB(); 
    global $conn; 

    $sql_query = "DELETE FROM cart where id = ?"; 
    $stmt = $conn->prepare($sql_query);
    $stmt->bind_param('s', $ID); 
    $result = $stmt->execute(); 
    closeDb();
    return $result; 
}

//ORDER

// Input user id, and mag aadd ng order 
function addOrder($userID, $productID, $price, $quantity){
    OpenDB(); 
    global $conn;

    $date = date("Y-m-d"); 
    $sql_query = "INSERT INTO orders(userId, productId, quantity, price, order_date) VALUES (?, ?, ?, ?, ?)"; 
    $stmt = $conn->prepare($sql_query);
    $stmt->bind_param('ss', $userID, $productID, $quantity, $price, $date); 
    removeFromCart($productID); 
    $result = $stmt->execute(); 
    return $result;

    closeDB();  
}

//Kukuhanin pinakamataas or pinakabagong id, yung pinakabago, doon ililink yung mga order items  
function getLatestOrder($userID){
    OpenDB(); 
    global $conn; 
    
    $sql_query = "SELECT MAX(order_id) FROM orders WHERE user_id = ?"; 
    $stmt = $conn->prepare($sql_query);
    $stmt->bind_param('s', $userID); 
    $execute = $stmt->execute();   
    $stmt->bind_result($orderID);
    $stmt->fetch();    
    return $orderID;
    closeDb();
}

//FAVORITES

// input user at product id, nirereturn 0 pag walang nakita na favorite, 
// return fave id pag meron
function checkExistingFavorite($user_ID, $product_ID){
    OpenDB(); 
    global $conn; 
    
    $sql_query = "SELECT fave_id FROM favorite WHERE userid = ? AND productid = ?"; 
    $stmt = $conn->prepare($sql_query);
    $stmt->bind_param('ss', $user_ID, $product_ID); 
    $stmt->execute(); 
    $stmt->bind_result($fave_ID);
    $stmt->fetch(); 

    if($fave_ID > 0){
        return $fave_ID; 
    }
    else {
        return 0; 
    }
    

    closeDb();
}

function getList_Favorite($ID){
    OpenDB(); 
    global $conn; 

    $favorite_Id = []; 

    $sql_query = "SELECT fave_id FROM favorite WHERE userID = ?"; 
    $stmt = $conn->prepare($sql_query); 
    $stmt->bind_param('i', $ID); 
    $stmt->execute(); 
    $result = $stmt->get_result(); 

    if($result->num_rows > 0){
        $i = 0; 
        while($row = $result->fetch_assoc()){
            $favorite_Id[$i] = $row["fave_id"]; 
            $i++; 
        }
    
    } else {
        return 0; 
    }
    
    closeDB();
    return $favorite_Id; 
}

function addtoFavorite($userID, $productID){
    OpenDB(); 
    global $conn; 

    $existing = checkExistingFavorite($userID, $productID);

    if ($existing == 0) {
        $sql_query = "INSERT INTO favorite(UserID, ProductID) VALUES (?, ?)"; 
        $stmt = $conn->prepare($sql_query);
        $stmt->bind_param('ss', $userID, $productID); 
        $InsertStatus = $stmt->execute(); 
        closeDb();
        return $InsertStatus; 
    }
    else if ($existing > 0) {
        return 0; 
    }
    
}


// Accepts cart ID, return ID
function getProductFavorite($ID){
    OpenDB(); 
    global $conn; 
    
    
    $sql_query = "SELECT productID FROM favorite WHERE fave_id = ?"; 
    $stmt = $conn->prepare($sql_query); 
    $stmt->bind_param('s', $ID); 
    $stmt->execute(); 
    $stmt->bind_result($product_ID); 
    $stmt->fetch();
    
    closeDB();
    return $product_ID; 

}

function addRow($product){
      
     
    echo "
        
        <tr class='product1'>
        <td><img class='item-img' src='../WSTShoesNoBackground/$product[2]' alt='Apple'></td>
        <td class='name'>$product[0]</td>
        <td class='price'>&#8369; $product[1]</td>
       
        
        <form id = 'checkoutForm' action = 'checkout.php' method = POST> 
       
        <input type = hidden name = productID value = $product[3]>
        <td><input type='submit' class='add-to-cart' value='Check Out' style='
        padding: 0.5rem 1rem;
        background-color: #e1774d;
        border: none;
        color: white;
        cursor: pointer;
        '></form></td></tr>
        
        <script> 
        var sourceInput = document.getElementById('qty$product[3]');
        var destinationInput = document.getElementById('2qty$product[3]');
       
        destinationInput.value = sourceInput.value;
        </script> 
        " 
        ;

  }

  function checkOutRow($Product, $Qty){
        $Total = $Product[1] * $Qty; 
        echo "<div class='grid-item grid-item-1'>$Product[0]  &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  $Qty</div>
        <div class='grid-item grid-item-1'>Price:  &nbsp &nbsp  &nbsp  &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp$Product[1]</div>    
        <div class='grid-item total'>Total  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp &nbsp  &nbsp  &nbsp  &nbsp &nbsp  &nbsp  $Product[1] </div> ";
         
  }


?>

