<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/Style_Shopping_Cart.css">
    <?php include "Headercopy.php";
		AddHead(); 
    ?>

<style> 
header .first_header .row{
 gap:1rem;}
section .container{
  max-width: 1440px;
  margin: 0px auto;
}

section .container .row{
  color:#FFFCF2; 
}
section .container .heading {
  background-color:#EB5E28;
  width: 350px;
  text-align: center;
  margin: 0 auto;
  margin-bottom: 40px;
  padding: 10px;
  border-radius: 5px;
  text-transform: uppercase;
    padding: 10px;
}

section table{
  width:100%

 }
section .content{
 max-width: 1300px;
 margin: 0 auto; 
 background-color: #403D39;
 border-radius: 5px;
}
section thead {
  border: 1px solid white;
  background-color: #FFFCF2;
  border-collapse: block;
  border: none;
  text-align: center;
  border-radius: 5px;
}
section th  {
  color: #525050;
  text-transform: uppercase;
}
section th, td {
  text-align: center;
  padding: 30px;

}
section td{
  width: 23%;
}
section .product1{
  border-bottom: 3px solid #525050;
  
}

section .total {
  font-weight: bold;
}

section .item-img {
width: 200px;
}
section table {
  border-collapse: collapse;
  width: 100%;
}
section thead th{
  padding: 15px;
  
}
section .quantity-btn {
    margin-top: 118px;
    display: flex;
}
section tr .total{
  text-align: center;
}
section .quantity-btn input{
  width: 30px;
  border: none;
  outline: none;
  text-align: center;
  background-color: #EB5E28;
  color: #FFFCF2;

}
section .quantity-btn button {
  margin: 0 2px;
  padding: 2px 8px;
  background-color: #e0e0e0;
  border: none;
  cursor: pointer;
}

section .quanlity{
    display: flex;
    justify-content: center;
    align-items: center;
    

}
/* checkout buttons */
section .checkout-buttons {
 
  bottom: 20px;
  right: 50px;
  display: flex;
  flex-direction: column;
  background-color: #FFFCF2;
  padding: 30px;
  width: 500px;
  border-radius: 5px;
  position: fixed;
  color: #403D39;

  
}

section .checkout-buttons button {
  margin-bottom: 10px;
}

section .container .div1 .flex{
  display: flex;
  justify-content: space-between;
  
  
}
 main{
padding-top: 100px;
}

section .container .div1 .select p {
cursor: pointer;
}
section .container .div1 .select p:hover{
color: #FDCE29;
}
section .container .checkout-buttons .line{
  border-bottom: 1px solid #525050;
  width: 100%;
  margin-top: 20px;
  margin-bottom: 20px;
  opacity: .30;
}
section .container .div2 {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
}
section .container .div2 .delete button{
  background: transparent;
  border: none;
  cursor: pointer;
}
section .container .div2 .delete button:hover{
  color: #FDCE29;
}

section .container .div3 {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  align-items: center;
  
}

section .container .div3 .total h1{
  color: #EB5E28;
}
section .container .div3 button {
  background-color:#EF8258;
  border: none;
  width: 100%;
  padding: 10px;
  cursor: pointer;
  border-radius: 5px;
  color: #e0e0e0;
  font-weight: bold;
}
section .container .div3 button:hover{
  background-color: #EB5E28;
}

footer{
  margin-top: 200px;
  position: relative;
}


section.PlaceOrder  #closeButton {
  /* display: none; */
  margin-top: 5px;
  color: red;
  cursor: pointer;
  bottom: 240px;
  right: 5px;
  position: absolute;
  z-index: 4;
  font-size: 20px;
  font-weight: bold;
 
    }
 section.PlaceOrder .buttons .line{
  border-bottom: 1px solid #525050;
  width: 100%;
  margin-top: 20px;
  margin-bottom: 20px;
  color: white;
 opacity: .15;
}
section.PlaceOrder .buttons .boldprice{
color: #EB5E28;
}
section.PlaceOrder .buttons .flex button{
background-color: #EF8258;
border: none;
padding: 10px;
color: #FFFCF2;
width: 100%;
border-radius: 5px;
cursor: pointer;
}
section.PlaceOrder .buttons .flex button:hover{
background-color: #EB5E28;
}
.parent p{
  text-align: center;
  color: #FDCE29;
  font-size: 50px;
  font-weight: bold;
}

.dropdown {
    position: relative;
    display: inline-block;
  }
  #accountDropDown{
    cursor: pointer;
  }
  .dropdown-content {
    visibility: hidden;
    position: absolute;
    top: 2rem;
    
    right: 0;
    z-index: 1;
    min-width: 160px;
    display: flex;
    flex-direction: column;
    text-align: center;
    gap: 1rem;
    padding: 1rem 0.5rem;
    background: transparent;
    backdrop-filter: blur(50px);
    box-shadow: 3px 5px 10px rgba(0,0,0,0.5);
    border-radius: 10px;
    width: max-content;
  }
  .dropdown-content.active {
    visibility: visible;
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
  <?php
    include "DBQuery.php"; 
    $CartValue = getList_Cart($_SESSION["ID"]); 

      
    if($CartValue == 0 ){

      echo "<div class='parent'><p> No item found</p></div>";  
    }


    else {
      $count = count($CartValue); 
      $productID = []; 
      for ($i = 0; $i < $count; $i++){
        $productID[$i] = getProduct($CartValue[$i]); 
       
      }  
    
      echo "<section class='car'>
    <div class='container'>
        <div class='row'>
          <div class='heading'>
            <h1>cart</h1>
          </div>
            <div class='content'>
            <table>
                <thead>
                    <tr>
                      <th class='Product'>Product</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th class='total'>Total</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>";   

                $numberID = count($productID);
                for($a = 0; $a < $numberID; $a++){

                  $product = getProductInfo($productID[$a]); 
                  addRow($product); 
                }
             
        echo "</tbody>
            
              
          </div>
       </table>
            </div>
          
        </div>
    </div>


    <script>
        const quantityInputs = document.querySelectorAll('.quantity');
        quantityInputs.forEach(input => {
            input.addEventListener('change', calculateTotal);
        });

        const addToCartCheckboxes = document.querySelectorAll('.add-to-cart');
        addToCartCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', calculateSelectAll);
        });

        const selectAllCheckbox = document.getElementById('selectAll');
        selectAllCheckbox.addEventListener('change', toggleAllCheckboxes);

        function calculateTotal() {
            const row = this.parentNode.parentNode;
            const quantity = parseFloat(this.value);
            const price = parseFloat(row.cells[2].textContent.replace('₱', ''));
            const totalCell = row.cells[4];
            totalCell.textContent = '₱' + (quantity * price).toFixed(2);
        }

        function calculateSelectAll() {
            const checkboxes = document.querySelectorAll('.add-to-cart');
            selectAllCheckbox.checked = Array.from(checkboxes).every(checkbox => checkbox.checked);
        }

        function updateQuantity(button, increment) {
            const quantityInput = button.parentNode.querySelector('.quantity');
            let quantity = parseInt(quantityInput.value);
            quantity += increment;
            quantity = Math.max(quantity, 1);
            quantityInput.value = quantity;
            calculateTotal.call(quantityInput);
        }

        function toggleAllCheckboxes() {
            const checkboxes = document.querySelectorAll('.add-to-cart');
            checkboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
                const totalCell = checkbox.parentNode.parentNode.cells[4];

                if (this.checked) {
                    totalCell.style.fontWeight = 'bold';
                } else {
                    totalCell.style.fontWeight = 'normal';
                }
            });
        }
        function deleteSelected() {
            const selectedItems = document.querySelectorAll('.add-to-cart:checked');
            selectedItems.forEach(item => {
                const row = item.parentNode.parentNode;
                row.remove();
            });
        }
        function checkout() {
        const selectedItems = document.querySelectorAll('.add-to-cart:checked');
        const totalAmount = Array.from(selectedItems).reduce((total, item) => {
            const row = item.parentNode.parentNode;
            const price = parseFloat(row.cells[2].textContent.replace('₱', ''));
            const quantity = parseFloat(row.cells[3].querySelector('.quantity').value);
            total += price * quantity;
            return total;
        }, 0);

        // You can customize this part based on your checkout logic
        alert('Total amount: ₱' + totalAmount.toFixed(2));
    }
    
    function showPlaceOrder() {
      document.getElementById('placeOrder').style.display = 'block';
      document.getElementById('closeButton').style.display = 'inline';
    }

    function closePlaceOrder() {
      document.getElementById('placeOrder').style.display = 'none';
      document.getElementById('closeButton').style.display = 'none';
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
    document.addEventListener('DOMContentLoaded', function() {
      const navigationType = performance.getEntriesByType('navigation')[0].type;
  
      if (navigationType === 'reload') {
          closePlaceOrder();
      }
  });
  
  function showPlaceOrder() {
      document.getElementById('placeOrder').style.display = 'block';
      document.getElementById('closeButton').style.display = 'inline';
  }
  
  function closePlaceOrder() {
      document.getElementById('placeOrder').style.display = 'none';
      document.getElementById('closeButton').style.display = 'none';
  }
  
  
    </script>"; }?>
</main>
<footer id="pooter">
  <?php
  echo AddFooter();
  ?>
</footer>

<script src="../js/function.js"></script>
</body>

</html>

  