<?php session_start();?>

<head>
  
<?php include "Headercopy.php";
		AddHead(); 
    ?>
  <style>
   section.sales{
    padding: 20px;
    background-color: #252422;
   }
    
    table {
            border-collapse: collapse;
            width: 100%;
            background-color: #403D39;
        }
        
        th{
          padding: 10px;
          background-color: #f5f5f5;
          text-align: left;
          border-bottom: 1px solid #ddd;
          text-transform: uppercase;
        }
       td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            padding: 35px;
            color: #f5f5f5;
        }
        
        tr:hover {
            background-color: #969393;
        }
        
        .product-image {
           
            object-fit: cover;
        }
        .heading{
          color:#f5f5f5;
          background-color:#EA5E28;
          width: 300px;
          text-align: center;
          margin: 0 auto;
          padding: 10px;
          margin-bottom: 20px;
          border-radius: 10px;
          margin-top: 80px;
          text-transform: uppercase;
        }
        
     <?php
    echo AddCss();
    ?>
  </style>
</head>
<body>
  <header>
  <?php
    echo adminHeader();
    ?>
  </header>

  <main>
    <section class="sales">
    <div class="heading">
    <h1>Best Sales</h1>
    </div>
    <table>
        <tr>
            <th>Product</th>
            <th>Product name</th>
            <th>Total Sales</th>
        </tr>
        <tr>
            <td>
                <img src="../image/Dior/B25Runnerneaker.png" alt="Product A" class="product-image" style="width: 200px; height:100px;">
               
            </td> 
           <td> Centennial 85 Low Shoes</td>
            <td>&#8369;253,234.00</td>
        </tr>
        <tr>
            <td>
                <img src="../image/newbalance/2002R__Eclipse.png" alt="Product B" class="product-image" style="width: 200px; height:100px;">
                
            </td>
            <td>2002R 'Eclipse'</td>
            <td>&#8369;125,456.00</td>
        </tr>
        <tr>
            <td>
                <img src="../image/vans/sk8hi.png" alt="Product C" class="product-image" style="width: 210px; height:100px;">
                
            </td>
           <td> Sk8-Hi Shoe</td>
            <td>&#8369;123,181,00</td>
        </tr>
        <tr>
            <td>
                <img src="../image/nike/Nike_Air_Max_97.png" alt="Product C" class="product-image" style="width: 210px; height:100px;">
                
            </td>
           <td> Nike Air Max 97</td>
            <td>&#8369;143,181,00</td>
        </tr>
        <tr>
            <td>
                <img src="../image/reebok/ReebokNanoX3.png" alt="Product C" class="product-image" style="width: 230px; height:100px;">
                
            </td>
           <td> Sk8-Hi Shoe</td>
            <td>&#8369;113,181,00</td>
        </tr>
    </table>
    </section>
    <footer>
      <?php
       echo AddFooter();
      ?>
    </footer>
  </main>
</body>
</html>