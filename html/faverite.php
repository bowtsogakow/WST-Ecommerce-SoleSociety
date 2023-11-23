<!DOCTYPE html>
<html>
<head>
<?php include "Headercopy.php";
		AddHead(); 
    ?>
    
    <style>
        
        section.favorite{
            padding:20px;
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
      CartHeader();
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
            <tr>
                <td><img src="../image/newbalance/2002R__Eclipse.png"></td>
                <td>Product 1</td>
                <td>&#8369;10.99</td>
                <td><button class="btn btn-delete" onclick="removeFavorite(this)">Remove</button></td>
            </tr>
            <tr>
                <td><img src="../image/newbalance/2002R__Eclipse.png"></td>
                <td>Product 2</td>
                <td>&#8369;19.99</td>
                <td><button class="btn btn-delete" onclick="removeFavorite(this)">Remove</button></td>
            </tr>
            
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
        var deleteButtons = document.querySelectorAll('.btn-delete');
        for (var i = 0; i < deleteButtons.length; i++) {
            deleteButtons[i].addEventListener('click', function() {
                this.parentNode.parentNode.remove();
            });
        }
    </script>
    <script src="../js/function.js"></script>
</html>