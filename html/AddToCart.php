<?php
    session_start(); 
    include "DBQuery.php"; 
    if(isset($_SESSION['ID'])){
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
           
            $ID = $_SESSION['productID']; 
            $path = "item.php?myVariable=" . urlencode($ID);
            $status = addtoFavorite($_SESSION["ID"], $_SESSION["productID"]); 

            if($status == 0){
                $status_message = "Item already added to Cart";  
            }

            else{
                $status_message = "Item has been added to Cart";  
            }


        echo "<script>  alert('$status_message'); window.location.href = '$path'; </script>";
        }
    }

    else if(!isset($_SESSION['ID'])){
        $status_message = "Please Log In First";
        $ID = $_SESSION['productID']; 
        $path = "item.php?myVariable=" . urlencode($ID);
        echo "<script>  alert('$status_message'); window.location.href = '$path'; </script>";

    }
?>