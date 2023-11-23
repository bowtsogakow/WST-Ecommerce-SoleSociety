<!DOCTYPE html>
<html lang="en">
<head>
   <?php include "Headercopy.php";
		AddHead(); 
    ?>
<style>

* {
    margin: 0;
  }
  
  body{
    background-color:#525050;
    
  }
section.purchase_history{
    padding:0 20px
}
  
img {
    display: block;
    max-width: 100%;
}

:root{
    --orange: #EB5E28;
}

.title{
    display: flex;
    gap: 1rem;
    color: white;
    font-weight: bold;
    align-items: center;
    margin-block: 2rem;
}
.title ion-icon{
    padding: 0.5rem;
    border: 2px solid white;
    border-radius: 100%;
    font-size: 1.25rem;
}

.border{
    border-radius: 1rem;
}

.purchaseHistory-table{
    border-radius: 0.5rem;
    width: 100%;
    height: 1000px;
    margin: 0 auto;
    background-color: white;
}

.topMenu{
    display: flex;
    padding: 1rem;
    padding-top: 2rem;
    align-items: center;
    justify-content: space-between;
    gap: 2rem;
}
#searchBar{
    display: flex;
    gap: 0.5rem;
    padding: 0.5rem;
    padding-inline: 1rem;
    align-items: center;
    border-style: solid;
    border-width: 1px;
    border-color: var(--orange);
    border-radius: 1rem;
    width: 40%;
}
#searchBar ion-icon{
    font-size: 1.25rem;
    filter: opacity(70%);
}
#searchBar input{
    width: 100%;
    border-style: none;
    outline: none;
}
.filter div{
    align-items: center;
    padding: 0.3rem;
    padding-inline: 1rem;
    border-style: solid;
    border-width: 1px;
    border-color: var(--orange);
    border-radius: 1rem;
    cursor: pointer;
}
.filter div h1{
    background: none;
    border: none;
    rotate: 90deg;
    font-size: 1rem;
    font-weight: normal;
}
.pages{
    gap: 2rem;
}
.pages-all{
    border-style: solid;
    border-width: 1px;
    border-color: var(--orange);
    border-radius: 0.5rem;
    padding: 0.3rem;
    padding-inline: 0.5rem;
    cursor: pointer;
}
.pages-all h1{
    background: none;
    border: none;
    rotate: 90deg;
    font-size: 1rem;
    font-weight: normal;
}
.filter, .pages-button,
.pages-all{
    display: flex;
    gap: 0.5rem;
    align-items: center;
}

.label{
    display: grid;
    grid-template-columns: 20% 20% 20% 20% 1rem;
    justify-content: space-between;
    background-color: var(--orange);
    margin-bottom: 1rem;
    padding: 1rem;
}
.label p{
    color: white;
    font-weight: bold;
}
.label ion-icon{
    color: white;
    cursor: pointer;
    font-size: 1.25rem;
}

.purchaseHistory-list ol{
    list-style: none;
    padding: 0;
}
.purchaseHistory-list ol .list-item{
    display: grid;
    grid-template-columns: 20% 20% 20% 20% 1rem;
    justify-content: space-between;
    padding: 1rem;
    margin-bottom: 1rem;
    position: relative;
}
.list-item:nth-child(odd) {
    background-color: #f0f0f0;
  }
.list-item:nth-child(even) {
    background-color: #ffd8ac;
}

.more-btn{
    display: flex;
    flex-direction: column;
    gap: 2px;
    width: max-content;
    position: absolute;
    top: 50%;
    right: 1rem;
    transform: translateY(-50%);
    cursor: pointer;
    padding-inline: 0.5rem;
}
.more-btn p{
    background-color: black;
    width: 3px;
    height: 3px;
    border-radius: 100%;
}
.more-btn::before,
.more-btn::after{
    content: "";
    width: 3px;
    height: 3px;
    background-color: black;
    border-radius: 100%;
}

<?php
  AddCss(); 
  ?>
</style>
</head>


<header> 
	<?php 
  CartHeader();
  ?> 
</header>
<body>
  <section class="purchase_history">
  <div class="title">
        <ion-icon name="cart-outline"></ion-icon>
        <p>PURCHASE HISTORY</p>
    </div>
    <div class="border">
        <main class="purchaseHistory-table">
            <div class="topMenu">
                <div id="searchBar">
                    <ion-icon name="search"></ion-icon>
                    <input type="text" placeholder="Search">
                </div>
                <div class="filter">
                    <p>Filter</p>
                    <div style="display: flex; gap: 1rem;">
                        <p>Portially Receive Orders</p>
                        <h1>&#10095;</h1>
                    </div>
                </div>
                <div class="pages" style="display: flex; gap: 0.5rem;">
                    <div  class="pages-button">
                        <button>&#10094;</button>
                        <p>1-10</p> 
                        <button>&#10095;</button>
                    </div>
                    <div class="pages-all">
                        <p>10/Page</p>
                        <h1>&#10095;</h1>
                    </div>
                </div>
            </div>
            <div class="label">
                <div style="display: flex; gap: 1rem;">
                    <input type="checkbox">
                    <p>Date</p>
                </div>
                <p>Purchase Order</p>
                <p>Delivery Date</p>
                <p>Amount</p>
                <ion-icon name="settings-outline"></ion-icon>
            </div>
            <div class="purchaseHistory-list">
                <ol>
                    <li class="list-item">
                        <div style="display: flex; gap: 1rem;">
                            <input type="checkbox">
                            <p id="date">06/02/2023</p>
                        </div>
                        <p id="purchaseOrder">PO-00123456</p>
                        <p id="deliveryDate">07/12/2023</p>
                        <p id="amount">₱264</p>
                        <label class="more-btn"><p></p></label>
                    </li>
                </ol>
            </div>
        </main>
    </div>
  </section>
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
<footer>
  <?php
  AddFooter();
  ?>
</footer>
</html>