<?php 
  session_start();
  include "HeaderCopy.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- FONTS -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Poppins -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" 
rel="stylesheet">
  <link rel="stylesheet" href="../css/style_index.css">
  <link rel="icon" type="image/png" sizes="32x32" href="../image/icons/logo2.png" >
  
  
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src=".https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <title>Sole Society</title>
</head>
<body>


  <header>
 
   <style> 
   section.hero {
    padding-top: 10px;
    background-image: linear-gradient(to right,#252422 , #EB5E28);
}  
   header .first_header .row{
 gap:1rem;}
   header .first_header .flex .search img {
    top: 10px;
    left: 31px
;
}
   @media(max-width:600px){
    header .first_header .link ul {
    display: none;
    gap: 30px;
    list-style: none;
    }
    header .first_header .flex .search img {
    top: 9px;
    left: 30px;
}}


 </style>
    <?php 
    if(isset($_SESSION['ID'])){
      
      if($_SESSION['ID']< 0) {
        echo CartHeader();
      }

      else if ($_SESSION['ID'] > 0) {
        echo CartHeader();
     
    
      }
    }

    else if (!isset($_SESSION['ID'])){
      echo CartHeader();

      
    }

    ?>

   
 </header>

 
<main>
  <section class="hero" >
    <div class="container">
      <div class="row">
        <div class="slideshow" data-aos="zoom-in" data-aos-duration="1000">
          <div class="mySlides fade">
            <img src="../image/posters/poster1.jpg" style="width:100%;">
          </div>
          <div class="mySlides fade">
            <img src="../image/posters/poster2.jpg" style="width:100%;">
          </div>
          <div class="mySlides fade">
            <img src="../image/posters/poster3.jpg" style="width:100%;">
          </div>
          <div class="mySlides fade">
            <img src="../image/posters/poster4.jpg" style="width:100%;">
          </div>
          <div class="mySlides fade">
            <img src="../image/posters/poster5.jpg" style="width:100%;">
          </div>
          <a class="back" onclick="plusSlides(-1)">❮</a>
          <a class="next"  onclick="plusSlides(1)">❯</a>
        </div>
        <br>
      </div>
    </div>
  </section>

  <section class="scroll_product">
      <div class="container">
        <div class="row">
          <div class="products-slide">
            <h1 class="product-heading" data-aos="zoom-out-right" data-aos-duration="1000">Featured Products</h1>
            
            <!-- feature products -->
            <div class="feature-products " data-aos="zoom-in" data-aos-duration="1000">
              <div class="product">
              <div class="product-image">
             <a href=""><img src="../image/Dior/B25Runnerneaker.png" alt=""></a>
              </div>
              <div class="product-name ">
              <p>B25 Runner neaker</p>
              </div>
              <div class="product-catergory">
              <p>Men , Running</p>
              </div>
              <div class="product-price">
               <p>&#8369;10,000.00</p>
              </div>
            </div>
            <div class="product">
              <div class="product-image">
               <a href=""><img src="../image/adidas/CENTENNIAL_85_LOW_SHOES.png "alt=""></a>
              </div>
              <div class="product-name">
               <p>Centennial 85 Low Shoes </p>
              </div>
              <div class="product-catergory">
             <p>Men , Women , Basketball</p>
              </div>
              <div class="product-price">
               <p>₱5,300</p>
              </div>
            </div>
            <div class="product">
              <div class="product-image">
                <a href=""><img src="../image/newbalance/2002R__Eclipse.png" alt=""></a>
              </div>
              <div class="product-name">
                <p>2002R 'Eclipse'</p>
              </div>
             <div class="product-catergory">
               <p>Men , Kids , Running</p>
              </div>
              <div class="product-price">
              <p>₱10,495</p>
              </div>
            </div>
            <div class="product">
              <div class="product-image">
                <a href=""><img src="../image/vans/sk8hi.png" alt=""></a>
              </div>
              <div class="product-name">
                <p>Sk8-Hi Shoe</p>
              </div>
              <div class="product-catergory">
             <p>Men , Women , Skateboarding</p>
              </div>
              <div class="product-price">
                <p>₱4,181</p>
              </div>
            </div>
            <div class="product">
              <div class="product-image">
               <a href=""><img src="../image/nike/Nike_Air_Max_97.png" alt=""></a>
              </div>
              <div class="product-name">
                <p>Nike Air Max 97</p>
              </div>
              <div class="product-catergory">
               <p>Men , Asthetic</p>
              </div>
              <div class="product-price">
              <p>₱8,095</p>
              </div>
            </div>
            <div class="product">
              <div class="product-image">
              <a href=""><img src="../image/reebok/ReebokNanoX3.png" alt=""></a>
              </div>
              <div class="product-name">
                <p>Reebok Nano X3</p>
              </div>
              <div class="product-catergory">
                <p>Women , Running</p>
              </div>
              <div class="product-price">
               <p>₱6,396</p>
              </div>
            </div>
            <div class="product">
              <div class="product-image">
                <a href=""><img src="../image/Converse/Chuck_70.png" alt=""></a>
              </div>
              <div class="product-name">
                <p>Chuck 70 </p>
              </div>
              <div class="product-catergory">
              <p>Men , Asthetic , Skateboarding</p>
              </div>
              <div class="product-price">
               <p>₱4,390</p>
              </div>
            </div>
            </div>
        
        
        
             <!-- product categories -->
            <h1 class="product-heading"  data-aos="zoom-out-right" data-aos-duration="1000">Categories</h1>
            <div class="product-categories " data-aos="zoom-in" data-aos-duration="1000">
             <div class="product">
                <div class="product-image">
              <a href=""> <img src="../image/categories/men.jpg" alt=""></a>
                </div>
                <div class="product-name">
                  <p>Nike</p>
              </div>
              </div>
        
              <div class="product">
                <div class="product-image">
                 <a href=""><img src="../image//categories/women.jpg" alt=""></a>
                </div>
                <div class="product-name">
               <p>Women</p>
              </div>
              </div>
        
              <div class="product">
                <div class="product-image">
                <a href=""> <img src="../image/categories/kids.jpg" alt=""></a>
                </div>
                <div class="product-name">
               <p>Kids</p>
              </div>
              </div>
              <div class="product">
                <div class="product-image">
                 <a href=""><img src="../image/categories/running.jpg" alt=""></a>
                </div>
                <div class="product-name">
                 <p>Running</p>
              </div>
              </div>
              <div class="product">
                <div class="product-image">
                <a href=""> <img src="../image/categories/basketball.jpg" alt=""></a>
                </div>
                <div class="product-name">
                 <p>Basketball</p>
              </div>
              </div>
              
              <div class="product">
                <div class="product-image">
                  <a href=""><img src="../image/categories/aesthetic.jpg" alt=""></a>
                </div>
                <div class="product-name">
                 <p>Asthetic</p>
              </div>
              </div>
              <div class="product">
                <div class="product-image">
              <a href=""><img src="../image/categories/skateboarding.jpg" alt=""></a>
                </div>
                <div class="product-name">
                 <p>Skateboarding</p>
              </div>
              </div>
            </div>
               <!-- product brands -->
            <h1 class="product-heading" data-aos="zoom-out-right" data-aos-duration="1000">Brands</h1>
            <div class="product-brands " data-aos="zoom-in" data-aos-duration="1000">
              <div class="product">
                <div class="product-image">
                  <a href=""><img src="../image/brands/Adidas.png" alt=""></a>
                </div>
                <div class="product-name">
                  <p>Adidas</p>
              </div>
              </div>
              <div class="product">
                <div class="product-image">
                  <a href=""><img src="../image/brands/Dior.png" alt=""></a>
                </div>
                <div class="product-name">
                  <p>Dior</p>
              </div>
              </div>
              <div class="product">
                <div class="product-image">
                  <a href=""><img src="../image/brands/Converse.png" alt=""></a>
                </div>
                <div class="product-name">
                <p>Converse</p>
              </div>
              </div>
              <div class="product">
                <div class="product-image">
                 <a href=""><img src="../image/brands/New-Balance.png" alt=""></a>
                </div>
                <div class="product-name">
                 <p>New Balance</p>
              </div>
              </div>
              <div class="product">
                <div class="product-image">
                <a href=""> <img src="../image//brands/nike.png" alt=""></a>
                </div>
                <div class="product-name">
                 <p>Nike</p>
              </div>
              </div>
              <div class="product">
                <div class="product-image">
                  <a href=""><img src="../image/brands/Reebok.png" alt=""></a>
                </div>
                <div class="product-name">
                  <p>Reebok</p>
              </div>
              </div>
              <div class="product">
                <div class="product-image">
                   <a href=""><img src="../image/brands/vans.png" alt=""></a>
                </div>
                <div class="product-name">
                  <p>Vans</p>
              </div>
              </div>
            </div>
        </div>
      </div>
  </section>
  
 </main>

  <footer>
    <?php echo AddFooter();?>
  </footer>
  
  <script src="../js/function.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>

<?php 
  session_abort(); 
?>