<?php session_start(); ?>
<?php

// if (isset($_GET['myVariable'])) {
//     $receivedVariable = $_GET['myVariable'];
//     echo 'Received variable from JavaScript: ' . $receivedVariable;
//     $dataID =  $receivedVariable;
// } else {
//     echo 'No variable received.';
// }


function getName(){

  if (isset($_GET['myVariable'])) {
    $receivedVariable = $_GET['myVariable'];
    // echo 'Received variable from JavaScript: ' . $receivedVariable;
   
  } else {
    echo 'No variable received.';
  }
    



    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "solesocietyDB"; 

    $conn = new mysqli($servername, $username, $password, $database);

        $sql = "SELECT name FROM shoe_inventory Where id =  $receivedVariable";
        $result = $conn->query($sql);

   

        if ($result->num_rows > 0) {
         
          // output data of each row
          while($row = $result->fetch_assoc()) {
         echo '<p id ="naming" >' . $row["name"] . '</p>';
        
      
       
            
          }
    
        } else {
         
        }
       
    }
    function getBrand(){

      if (isset($_GET['myVariable'])) {
        $receivedVariable = $_GET['myVariable'];
        // echo 'Received variable from JavaScript: ' . $receivedVariable;
       
      } else {
        echo 'No variable received.';
      }
        
    
    
    
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "solesocietyDB"; 
    
        $conn = new mysqli($servername, $username, $password, $database);
    
            $sql = "SELECT Brand FROM shoe_inventory Where id =  $receivedVariable";
            $result = $conn->query($sql);
    
       
    
            if ($result->num_rows > 0) {
             
              // output data of each row
              while($row = $result->fetch_assoc()) {
             echo '<p id="branding">' . $row["Brand"] . '</p>';
            
          
           
                
              }
        
            } else {
             
            }
           
        }

        function getPrice(){

          if (isset($_GET['myVariable'])) {
            $receivedVariable = $_GET['myVariable'];
            // echo 'Received variable from JavaScript: ' . $receivedVariable;
           
          } else {
            echo 'No variable received.';
          }
            
        
        
        
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "solesocietyDB"; 
        
            $conn = new mysqli($servername, $username, $password, $database);
        
                $sql = "SELECT price FROM shoe_inventory Where id =  $receivedVariable";
                $result = $conn->query($sql);
        
           
        
                if ($result->num_rows > 0) {
                 
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                $price = $row["price"];
                $formattedAmount = "₱ " . number_format($price, 2);
              
               echo '<p id="amount">'. $formattedAmount .'</p>';
                    
                  }
            
                } else {
                 
                }
               
            }

            function getShort(){

              if (isset($_GET['myVariable'])) {
                $receivedVariable = $_GET['myVariable'];
                // echo 'Received variable from JavaScript: ' . $receivedVariable;
               
              } else {
                echo 'No variable received.';
              }
                
            
            
            
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "solesocietyDB"; 
            
                $conn = new mysqli($servername, $username, $password, $database);
            
                    $sql = "SELECT short_description FROM shoe_inventory Where id =  $receivedVariable";
                    $result = $conn->query($sql);
            
               
            
                    if ($result->num_rows > 0) {
                     
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                     echo '<p id ="shtdes">' . $row["short_description"] . '</p>';
                    
                  
                   
                        
                      }
                
                    } else {
                     
                    }
                   
                }

                function getSize(){

                  if (isset($_GET['myVariable'])) {
                    $receivedVariable = $_GET['myVariable'];
                    // echo 'Received variable from JavaScript: ' . $receivedVariable;
                   
                  } else {
                    echo 'No variable received.';
                  }
                    
                
                
                
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "solesocietyDB"; 
                
                    $conn = new mysqli($servername, $username, $password, $database);
                
                        $sql = "SELECT * FROM shoe_inventory Where id =  $receivedVariable";
                        $result = $conn->query($sql);
                
                   
                
                        if ($result->num_rows > 0) {
                         
                          // output data of each row
                          while($row = $result->fetch_assoc()) {

                            // para gawing check box yung size
                            // <div class='sizebox'>
                            //       <input type='checkbox' class='size-btn' id= 'chksize$size' name ='chksize$size'>
                            //               <label for='chksize$size' class ='size-label'> Size$size</label>
                              
                            //   </div>

                            // <div class='sizebox'>
                            //       <input type='checkbox' class='size-btndis' id= 'chksizedis$size ' name ='chksizedis$size ' disabled>
                            //       <label for='chksizedis$size'class ='size-label'>Size$size</label> </div>
                           

                            for ($size = 3; $size <= 12; $size++) {
                              $key = "size" . $size;
                              
                              if (isset($row[$key]) && $row[$key] == 1) {
                                // echo "<label><input type='radio' name='size' value='$size' class='sizebtn'> Size$size</label>";

                               ECHO" 
                        
                               <label>
                                <input type='radio' class='radio-input' name='size' value= 'Size$size' id ='Size$size'required>
                                <span class='radio-button'>Size$size</span>
                              </label>
                             
                              
                              ";




                            } else {
                                // echo "<label><input type='radio' name='size' value='$size' class='sizebtndis' disabled> Size$size</label>";
                                echo " <label>
                                <input type='radio' class='radio-input'disabled>
                                <span class='radio-button-dis'>Size$size</span>
                              </label>";
                            }
                          }
                          }
                          
   
                        } else {
                         
                        }
                       
                    }
                    function getCategory(){

                      if (isset($_GET['myVariable'])) {
                        $receivedVariable = $_GET['myVariable'];
                        // echo 'Received variable from JavaScript: ' . $receivedVariable;
                       
                      } else {
                        echo 'No variable received.';
                      }
                        
                    
                    
                    
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "solesocietyDB"; 
                    
                        $conn = new mysqli($servername, $username, $password, $database);
                    
                            $sql = "SELECT * FROM shoe_inventory Where id =  $receivedVariable";
                            $result = $conn->query($sql);
                    
                       
                    
                            if ($result->num_rows > 0) {
                             
                              // output data of each row
                              while($row = $result->fetch_assoc()) {
                             
                             if(isset($row["Women"]) && $row["Women"] == 1){
                            echo  '<button type="button" class ="sizebtn" >Women</button>';
                            }else{
                              echo '<button type="button" disabled class="sizebtndis">Women</button>';
                            }
                            if(isset($row["Men"]) && $row["Men"] == 1){
                            echo  '<button type="button" class ="sizebtn">Men</button>';
                            }else{
                                echo '<button type="button" disabled class="sizebtndis" >Men</button>';
                            }
                            if(isset($row["Kids"]) && $row["Kids"] == 1){
                              echo  '<button type="button"class ="sizebtn">Kids</button>';
                              }else{
                                echo '<button type="button" disabled class="sizebtndis">Kids</button>';
                              }
                              if(isset($row["Running"]) && $row["Running"] == 1){
                              echo  '<button type="button"class ="sizebtn">Running</button>';
                              }else{
                                  echo '<button type="button" disabled class="sizebtndis">Running</button>';
                              }
                              
                              if(isset($row["Basketball"]) && $row["Basketball"] == 1){
                              echo  '<button type="button" class ="sizebtn">Basketball</button>';
                              }else{
                                  echo '<button type="button" disabled class="sizebtndis">Basketball</button>';
                              }

                              
                                if(isset($row["Aesthetic"]) && $row["Aesthetic"] == 1){
                                  echo  '<button type="button"class ="sizebtn">Aesthetic</button>';
                                  }else{
                                      echo '<button type="button" disabled class="sizebtndis">Aesthetic</button>';
                                  }
                                  if(isset($row["Skateboarding"]) && $row["Skateboarding"] == 1){
                                    echo  '<button type="button"class ="sizebtn">Skateboarding</button>';
                                    }else{
                                        echo '<button type="button" disabled class="sizebtndis">Skateboarding</button>';
                                    }
                                    
                          
                           
                                
                              }
                        
                            } else {
                             
                            }
                           
                        }

                        function getImage(){

                          if (isset($_GET['myVariable'])) {
                            $receivedVariable = $_GET['myVariable'];
                            // echo 'Received variable from JavaScript: ' . $receivedVariable;
                           
                          } else {
                            echo 'No variable received.';
                          }
                            
                        
                        
                        
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $database = "solesocietyDB"; 
                        
                            $conn = new mysqli($servername, $username, $password, $database);
                        
                                $sql = "SELECT filename FROM shoe_inventory Where id =  $receivedVariable";
                                $result = $conn->query($sql);
                        
                           
                        
                                if ($result->num_rows > 0) {
                                 
                                  // output data of each row
                                  while($row = $result->fetch_assoc()) {
                                 echo  $row["filename"];
                                
                                
                               
                                    
                                  }
                            
                                } else {
                                 
                                }
                               
                            }
            

?>
<!DOCTYPE html>
<html>


<head>
<?php include "Headercopy.php";
		AddHead(); 
    ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700;800&display=swap" rel="stylesheet">

<link rel="stylesheet" href="../css/style_item.css">

<style>
  body{
    background-color: #FFFCF2;
  }
  <?php
  echo AddCss(); 
  ?>
</style>
</head>
<body  style ="background-color:#FFFCF2">
<main>
  <header>
  <?php
CartHeader();

?>
  </header>
</main>
<div id="parent">
        <div id ="name">
        <?php getName(); ?>
        <?php getBrand(); ?>

        </div>
      
        
<div id="container">

  <div id="left">
      <div id ="image">
      <img src="../WSTShoesNoBackground/<?php getImage(); ?>"  id = "shoeIMG">
      </div>
  </div>



<div id="right">
  <div id="vertical">
      <div id ="short">
        <?php getShort(); ?>
        </div>
        

       
        <p>Available sizes</p>                  
        
       
        <form action ='testpasa.php'id='submitTO' method= 'POST'>
        <?php getSize(); ?>
        </form>


        <p>Categories</p>
        <div id ="category">
                  
        <?php getCategory(); ?>
        </div>

        <div id ="price">
        <?php getPrice(); ?>


        </div>

      </div>

      <div id="btnss">

         <?php 
            $_SESSION['productID'] = $_GET['myVariable'];
          ?>
         
          <div id="carton"  class="box">
            <form action="Favorite.php" method ="post">
            <input type = hidden name = "productID">
          <button class="button-30" role="button">Favorite</button>
          </form>
          </div>
          
          <div id="fav" class="box">
          <form action="AddToCart.php" method ="post">
          <button class="button-30" role="button">Add to cart</button>
          </form>
          </div>

          

          <div id="chkout"  class="box">
          <a href ="#" class ="chk" id ="chkID">
          <button class="button-82-pushable" role="Submit" form ="submitTO">
  <span class="button-82-shadow"></span>
  <span class="button-82-edge"></span>
  <span class="button-82-front text">
    Check Out
  </span>
</button>
             
                  
          </a>



          </div>
      </div>
    </div>
  </div> 

</div>
<footer id ="pooter">
  <?php
  echo AddFooter();
  ?>
</footer>
<script>
  const toggleBtn = document.getElementById('menuIcon');
const dropDownMenu = document.getElementById('dropDownMenu');

toggleBtn.addEventListener('click', ()=> {
  if(dropDownMenu.classList.contains('open')) {
    dropDownMenu.classList.remove('open');
  }
  else {
    dropDownMenu.classList.add('open');
  }
});

function toggleDropdown() {
  var dropdown = document.getElementById("dropdownContent");
  if (dropdown.style.display === "none") {
    dropdown.style.display = "block";
  } else {
    dropdown.style.display = "none";
  }
}

const accountDropDown = document.getElementById('accountDropDown');

accountDropDown.addEventListener('click', () =>{
  const dropdownContent = document.querySelector('.dropdown-content');

  if(!dropdownContent.classList.contains('active')) {
    dropdownContent.classList.add('active');
  }else {
    dropdownContent.classList.remove('active');
  }
});
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- <script src="item_js.js"> </script> -->

<script src="../js/function.js"></script>

</body>
</html>

