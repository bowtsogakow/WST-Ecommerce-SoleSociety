<?php
/* head */
function AddHead(){
  echo'
      <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" 
    <link rel="icon" type="image/png" sizes="32x32" href="../image/icons/logo2.png" >
    
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src=".https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>Sole Society</title>'
    ; 
}
/* style css */
function AddCss(){
  echo'
  *,*::before,*::after{
    box-sizing: border-box;
    
  }
  
  * {
    padding: 0;
    margin: 0;
    font-family: inherit;
  }
  
  html {
    scroll-behavior: smooth;
  }
  
  body{
    background-color: #252422;
    font-family: "Poppins", system-ui,"Segoe UI",  "Open Sans", "Helvetica Neue", sans-serif;
    font-size: 16px;
  }
  .container{
    max-width: 1440px;
    margin: 0 auto;
  }
  
  /* HEADER */
  header .first_header .row{
    display: flex;
    justify-content: space-between;
    align-items: center;
    }
    header .first_header {
      padding: 10px 40px;
      background-image: linear-gradient(to right,#252422 , #EB5E28);
      width: 100%;
      
    
    }
    header .first_header .flex {
      gap: 20px;
      cursor: pointer;
      display: flex;
      align-items: center;
      position: relative;
    }
    header .first_header .flex .logo img{
      width: 50px;
      cursor: pointer;
    
    }
    header .first_header .flex .search img{
      position: absolute;
    width: 18px;
    top: 8px;
    left: 31px;
    }
    header .first_header .flex .search input{
      padding: 8px;
      padding-left: 30px;
      border-radius: 15px;
      border: none;
      outline: none;
      width: 100%;
     
    }
    
    header .first_header .link ul{
      display: flex;
      gap: 30px;
      list-style: none;
  }
    header .first_header .link a{
      text-decoration: none;
      color: #FFFCF2;
      text-transform: uppercase;
     font-weight: 700;
    }
    header .first_header .link a:hover{
      color:#FDCE29 ;
    }
  
    header .first_header .link .menu-icon{
      display: none;
      color: #f2f2f2;
      cursor: pointer;
    }
    header .first_header .link .menu-icon .bx {
      vertical-align: middle;
    }
    header .first_header .dropdown_menu ul{
      list-style: none;
    }
  
    header .first_header .dropdown_menu a{
      text-decoration: none;
      color: #fffcfc;
      text-transform: uppercase;
      font-weight: 700;
     
    }
    header .first_header .dropdown_menu  a:hover{
      color:#FDCE29 ;
    }
  
    header .first_header .dropdown_menu{
      display: none;
      position: absolute;
      right: 2.1rem;
      top: 60px;
      height: 0px;
      width: 300px;
      background: rgba(12, 12, 12, 0.1);
      backdrop-filter: blur(15px);
      border-radius: 5px;
      overflow: hidden;
      z-index: 1;
      transition: height 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    } 
    header .first_header .dropdown_menu.open{
      height:max-content;
    }
    header .first_header .dropdown_menu li{
      padding:0.7rem;
      display: flex;
      align-items: center;
      justify-content: center;
    }
  
   /* header hidden */
   header .Hidden_header .row{
    display: flex;
    justify-content: space-between;
    align-items: center;
    }
    header .Hidden_header {
      padding: 10px 40px;
      background-image: linear-gradient(to right,#252422 , #EB5E28);
      z-index: 1;
      position: fixed;
      width: 100%;
      display:none;
     }
    header .Hidden_header .flex {
      gap: 20px;
      cursor: pointer;
      display: flex;
      align-items: center;
      position: relative;
    }
    header .Hidden_header .flex .logo img{
      width: 50px;
      cursor: pointer;
    
    }
    header .Hidden_header .flex .search img{
      position: absolute;
      width: 18px;
      top: 15px;
      left: 80px;
    }
    header .Hidden_header .flex .search input{
      padding: 8px;
      padding-left: 30px;
      border-radius: 15px;
      border: none;
      outline: none;
      width: 100%;
     
    }
    header .Hidden_header .link ul{
      display: flex;
      gap: 30px;
      list-style: none;
  }
    header .Hidden_header .link a{
      text-decoration: none;
      color: #FFFCF2;
      text-transform: uppercase;
     font-weight: 700;
    }
    header .Hidden_header .link a:hover{
      color:#FDCE29 ;
    }
  
    header .Hidden_header .link .menu-icon{
      display: none;
      color: #f2f2f2;
      cursor: pointer;
    }
    header .Hidden_header .link .menu-icon .bx {
      vertical-align: middle;
    }
    header .Hidden_header .dropdown_menu ul{
      list-style: none;
    }
  
    header .Hidden_header .dropdown_menu a{
      text-decoration: none;
      color: #fffcfc;
      text-transform: uppercase;
      font-weight: 700;
     
    }
    header .Hidden_header .dropdown_menu  a:hover{
      color:#FDCE29 ;
    }
  
    header .Hidden_header .dropdown_menu{
      display: none;
      position: absolute;
      right: 2.1rem;
      top: 60px;
      height: 0;
      width: 300px;
      background: rgba(12, 12, 12, 0.1);
      backdrop-filter: blur(15px);
      border-radius: 5px;
      overflow: hidden;
      z-index: 1;
      transition: height 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    } 
    header .Hidden_header .dropdown_menu.open{
      height: max-content;
    }
    header .Hidden_header .dropdown_menu li{
      padding:0.7rem;
      display: flex;
      align-items: center;
      justify-content: center;
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
  /* FOOTER */
  footer {
    background-color:#000000;
    height: 600px;
    color: #FFFCF2;
    font-size: 16px;
    margin-top: 150px;
  }
  footer .logo img{
    margin-bottom: 20px;
    width: 100px;
    cursor: pointer;
  }
  footer .container{
    max-width: 1440px;
    margin: 0 auto;
    padding: 40px 40px;
  }
  footer .links{
    display: grid;
    grid-template-columns: repeat(4,1fr);
   gap: 2rem;
  }
  footer .line{
    border-bottom: 1px solid rgb(41, 40, 40);
    margin-top: 30px;
    margin-bottom: 20px;
  }
  
  
  footer .link li , .phone a {
  list-style: none;
  }
  footer .link li a , .phone a , .email a{
    text-decoration: none;
    color: #FFFCF2; 
  }
  footer .link li a:hover , .phone a:hover, .email a:hover{
    color: #FDCE29;
  }
  footer .link .about_us{
    display: grid;
    gap: 20px;
  }
  footer .link .about_us p{
    margin-bottom: 20px;
  }
  footer .footer-heading {
   margin-bottom: 20px;
   color:#EB5E28;
   text-transform: uppercase;
  }
   footer .link .info{
    color: #EB5E28;
    text-transform: uppercase;
    margin-top: 40px;
   }
   footer .link input{
    width: 100%;
    border: none;
    padding: 8px;
    border-radius: 5px;
    margin-bottom: 10px;
    outline: none;
   }
   footer .link button{
    width: 50%;
    background-color: #EB5E28;
    border: none;
    color: #FFFCF2;
    padding: 7px;
    border-radius: 5px;
    cursor: pointer;
   }
   footer .link button:hover{
    background-color: #e1774d;
   }
   footer .link_icons {
    text-align: center;
   }
   footer .link_icons a {
    color: #EB5E28;
   }
   footer .link_icons .bx{
    outline: 1px solid #EB5E28 ;
    margin-left: 12px;
    outline-offset: 5px;
    border-radius: 50%;
  }
  footer .link_icons .bx:hover{
    opacity: 0.5;
  }
  
  
  /* RESPONSIVE  */
  @media (max-width: 600px) {
    /* First header */
    header .first_header .link ul a {
      display: none;
      flex-direction: column;
    }
    header .first_header .flex .logo{
      color: #FFFCF2;
      font-size:12px ;
    }
     
    header .first_header .flex .search input {
      padding: 8px;
      padding-left: 30px;
      border-radius: 15px;
      border: none;
      outline: none;
      text-overflow: ellipsis;
      white-space: nowrap;
  }
  header .first_header .flex .search img {
    position: absolute;
    width: 18px;
    top: 9px;
    left: 33px;
  }
  header .first_header .link .menu-icon{
    display: block;
   }
  header .first_header .dropdown_menu{
    display: block;
   
  } 
  header .first_header .link ul {
    display: none;
    gap: 30px;
    list-style: none;
}
  header .first_header .row{
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
    }
    footer .links{
      display: grid;
      grid-template-columns: repeat(2,1fr);
      
     }
     header .flex .search img{
      position: absolute;
      width: 18px;
      top: 12px;
      left: 80px;
    }
  
    /* Hidden_header */
    header .Hidden_header .link ul a {
      display: none;
      flex-direction: column;
    }
    header .Hidden_header .flex .logo{
      color: #FFFCF2;
      font-size:12px ;
    }
     
    header .Hidden_header .flex .search input {
      padding: 8px;
      padding-left: 30px;
      border-radius: 15px;
      border: none;
      outline: none;
      text-overflow: ellipsis;
      white-space: nowrap;
  }
  header .Hidden_header .flex .search img {
    position: absolute;
    width: 18px;
    top: 12px;
    left: 80px;
  }
  header .Hidden_header .link .menu-icon{
    display: block;
   }
  header .Hidden_header .dropdown_menu{
    display: block;
   
  } 
  header .Hidden_header .row{
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
    }
  
    footer .links{
      display: grid;
      grid-template-columns: repeat(2,1fr);
      
     }
    
  }
    /* TABLET */
  @media (max-width: 768px){
    .products-slide {
      display: grid;
      grid-template-columns: 1fr;
      padding: 0px;
    }
    footer .links{
      display: grid;
      grid-template-columns: repeat(2,1fr);
      
     }
     footer {
      background-color:#000000;
      height: 800px;
      color: #FFFCF2;
      font-size: 16px;
    }
  }
  /* MOBILE-L */
  @media (max-width: 425px){
  header .first_header .flex .search img {
    position: absolute;
    width: 18px;
    top: 10px;
    left: 31px;
  }
  header .first_header .link ul {
    display: none;
    gap: 30px;
    list-style: none;
}
    .products-slide {
      display: grid;
      grid-template-columns: 1fr;
      padding: 0px;
  }
  footer .links{
    display: grid;
    grid-template-columns: repeat(1,1fr);
    gap: 1rem;
   }
   
  footer {
    background-color:#000000;
    height: 1100px;
    color: #FFFCF2;
    font-size: 16px;
    margin-top: 150px;
  }
  .wrapper .form-box {
  width: 90%;
    padding: 25px;
  }
  .wrapper {
    width: 350px;
    color: #f2f2f2;
    border-radius: 10px;
   display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f2f2f2;
    margin: 50px auto;
  }
  
  }
  /* MOBILE-M */
  @media (max-width: 375px){
    .products-slide {
      display: grid;
      grid-template-columns: 1fr;
      padding: 0px;
  }
  
  }	
  ';
}
/* login header */
function LoginHeader(){
  echo
  '<section class="first_header">
    <div class="container">
      <div class="row">
        <div class="flex">
         <a href="../html/index.html">
          <a href="../index.html">
            <div class="logo">
            <img src="../image/icons/logo1.png" alt="">
             </div></a></a>
           <div class="search">
        
              <input type="text" name="search" 
              placeholder="Search products here" autocomplete="off" spellcheck="false">
            </form>
           </div>
        </div>
        <div class="link">
          <ul>
            <li><a href="signup.php">Sign up</a></li>
            <li><a href="login.php">Log in</a></li>
           </ul>
           <div class="menu-icon" id="menuIcon">
            <i class="bx bx-menu bx-md"></i>
           </div>
        </div>
        </div>
       </div>
       <div class="dropdown_menu" id="dropDownMenu">
        <ul>
          <li><a href="signup.php">Sign up</a></li>
          <li><a href="login.php">Log in</a></li>
         </ul>
       </div>
  </section>' 
  ;
}
/* footer */
function AddFooter(){
	echo '
  <div class="container">
    <div class="row">
       <div class="logo">
     <a href=""> <img src="../image/icons/logo1.png" alt=""></a>
       </div>
       <div class="links">
        <div class="link">
          <div class="about_us">
            <div class="">
              <h2 class="footer-heading">About Us</h2>
           <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo, reprehenderit!</p>
            </div>
           <div class="link">
            <div class="contact_us">
            <h2 class="footer-heading">Contact Us</h2>
            <div class="phone">
              <img src="../image/icons/icon-phone.svg" alt="">
             <a href="">Phone: +1-543-123-4567</a>
           </div>
           <div class="email">
             <img src="../image/icons/icon-email.svg" alt="">
           <a href=""> example@fylo.com</a>
          </div>
         </div>
        </div>
      </div>
        </div>

        <div class="link">
          <div class="information">
            <h2 class="footer-heading">information</h2>
            <li><a href="">About Us</a></li>
            <li><a href="">More Search</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="">Testimonals</a></li>
            <li><a href="">Events</a></li>
          </div>
        </div>

        <div class="link">
          <div class="helpful-links">
            <h2 class="footer-heading">helpful Links</h2>
            <li><a href="">Services</a></li>
            <li><a href="">Supports</a></li>
            <li><a href="">Terms</a></li>
            <li><a href="">privacy Policy</a></li>
           </div>
        </div>

        <div class="link input">
          <p class="info">Subscribe More Info</p>
          <form >
            <input type="text" placeholder="Enter your Email" required>
         <div class="button">
          <button>Subscribe</button>
         </div>
          </form>
        </div>
       </div>

       <div class="line"></div>

       <div class="link_icons">
        <a href=""><i class="bx bxl-facebook"></i></a>
        <a href=""><i class="bx bxl-twitter" ></i></a>
        <a href=""><i class="bx bxl-instagram"></i></a>
        <a href=""><i class="bx bxl-google-plus"></i></a>
        
      </div>
    </div>
  </div>

'; 
}
/* cart */
function CartHeader(){
  echo '
  <section class="first_header">
  <div class="container">
    <div class="row">
      <div class="flex">
       <div class="logo">
        <img src="../image/icons/logo2.png" alt="">
       </div>
         <div class="search">

        <form>
            <input type="text" name="search" 
            placeholder="Search products here" autocomplete="off" spellcheck="false">
          </form>

      </div>
      </div>
      <div class="link">
        <ul>
          <li><a href="Product_item.php">Shop</a></li>
          <li><a href="Shopping_Cart.php">Cart</a></li>
          <li><a href="">Favorite</a></li>
          <li>
            <div class="dropdown">
              <a id="accountDropDown">Account</a>
              <div id="dropdownContent" class="dropdown-content">
                <a href="#">Purchase History</a>
                <a href="#">User Profile</a>
                <a href="#">Log Out</a>
              </div>
            </div>
          </li>
          
         </ul>
         <div class="menu-icon" id="menuIcon">
          <i class="bx bx-menu bx-md"></i>
         </div>
      </div>
      </div>
     </div>
     <div class="dropdown_menu" id="dropDownMenu">
      <ul>
          <li><a href="">Shop</a></li>
          <li><a href="">Cart</a></li>
          <li><a href="">Favorite</a></li>
          <li><a href="">Purchase History</a></li>
          <li><a href="">User Profile</a></li>
          <li><a href="">Log Out</a></li>
       </ul>
     </div>
  </section>
  ' ;
}
?>