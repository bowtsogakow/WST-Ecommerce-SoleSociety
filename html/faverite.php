<?php session_start(); ?>.
<!DOCTYPE html>
<html>
<head>
<?php include "Headercopy.php";
		AddHead(); 
    ?>
    
    <style>
        header .first_header{
          position: sticky;
          top: 0;
        }
        section.favorite{
         
            margin-top: 80px;
        }
        section.favorite .container{
          padding: 20px;
        }
        section.favorite .headingname{
       text-align: center;
       background-color: #da190b;
       color: #FFFCF2;
       width: 350px;
       margin: 0 auto;
       padding: 15px;
       border-radius: 5px;
       margin-bottom: 20px;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #403D39;
            border-radius: 8px;
        }

        th{
       color: #403D39;
       padding: 10px;
       text-align: left;
        }
        
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            color: #FFFCF2;
        }

        th {
            background-color: #f2f2f2;
            text-transform: uppercase;
        }

        .btn {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .btn:hover {
            background-color: #45a049;
        }

        .btn-delete {
            background-color: #f44336;
        }

        .btn-delete:hover {
            background-color: #da190b;
        }
    

        
        <?php
  echo AddCss(); 
  ?>
    </style>
</head>
<body>
    <header>
        <?php
    if(isset($_SESSION['ID'])){
      
      if ($_SESSION['ID'] < 0) {
        LoginHeader();
    } else if ($_SESSION['ID'] == 0) {
        adminHeader();
    } else if ($_SESSION['ID'] > 0) {
        CartHeader();
    }
    
    }

    else if (!isset($_SESSION['ID'])){
        LoginHeader();

      
    }
        ?>
    </header>
<main>
    
    <section class="favorite">
    <div class="headingname">
        <h1>Favorite</h1>
    </div>
    <div class="container">
    <table id="favorites-table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           
            <?php 
                include "DBQuery.php"; 
                
                $List = getList_Favorite($_SESSION["ID"]); 

                if($List == 0 ){

                    echo "<div class='parent'><p> No item found</p></div>";  
                  }

                else {
                    $count = count($List); 
                    $productID = []; 
                    for ($i = 0; $i < $count; $i++){
                    $productID[$i] = getProductFavorite($List[$i]); 
                    }
                    $numberID = count($productID);
                    for($a = 0; $a < $numberID; $a++){

                        $product = getProductInfo($productID[$a]); 
                        favoriteRow($product); 
                    }
                    }     
                
            ?>
        </tbody>
    </div>
    </table>
    </section>
</main>
    <footer>
  <?php
echo AddFooter();
  ?>
</footer>
    
</body>
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

        var deleteButtons = document.querySelectorAll('.btn-delete');
        for (var i = 0; i < deleteButtons.length; i++) {
            deleteButtons[i].addEventListener('click', function() {
                this.parentNode.parentNode.remove();
            });
        }
    </script>
    <script src="../js/function.js"></script>
</html>