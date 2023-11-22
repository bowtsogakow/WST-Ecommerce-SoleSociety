<?php 
  session_start();
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
  <link rel="stylesheet">
  <link rel="icon" type="image/png" sizes="32x32" href="../image/icons/logo2.png" >
  
  
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src=".https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <title>Sole Society</title>


  <Style>

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
  font-family: 'Poppins', system-ui,'Segoe UI',  'Open Sans', 'Helvetica Neue', sans-serif;
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
    padding: 5px 40px;
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
    top: 19px;
    left: 100px;
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
    height: 0;
    width: 300px;
    background: rgba(12, 12, 12, 0.1);
    backdrop-filter: blur(15px);
    border-radius: 5px;
    overflow: hidden;
    z-index: 1;
    transition: height 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  } 
  header .first_header .dropdown_menu.open{
    height: 140px;
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
    top: 13px;
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
    height: 140px;
  }
  header .Hidden_header .dropdown_menu li{
    padding:0.7rem;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  /* login */

.wrapper {
 
 width: 400px;
 color:#f2f2f2;
 border-radius: 10px;
 box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.6);
 display: flex;
 justify-content: center;
 align-items: center;
 background-color: #f2f2f2;
 margin: 50px auto;
}

.wrapper .form-box {
 width: 100%;
 padding: 40px;
}

.form-box h2 {
 font-size: 2em;
 color:#252422;
 text-align: center;
 text-transform: uppercase;
}

.input-box {
 position: relative;
 width: 100%;
 height: 40px;
 border-bottom: 1px solid #252422;
 margin: 30px 0;
}

/* .input-box {
     position: relative;
   width: 90%;
   max-width: 500px;
   border-radius: 5px;
   padding: 10px 20px;
   margin: 300px auto;
   display: flex;
} */


/* ... (previous CSS code) ... */

.input-box label {
 position: absolute;
 top: 50%;
 left: 5px;
 transform: translateY(-50%);
 font-size: 1em;
 color:#252422;
 font-weight: 500;
 pointer-events: none;
 transition: all 0.3s; 
}
/* Add transition property for smooth animation */

.input-box input:focus + label,
.input-box input:valid + label {
 top: -5px;
}

.input-box input {
 width: 100%;
 height: 100%;
 background: transparent;
 border: none;
 outline: none;
 font-size: 1em;
 color:#252422;
 font-weight: 600;
 padding: 0 20px 0 5px;


}

.input-box .icon {
 position: absolute;
 right: 8px;
 font-size: 1.2em;
 color:#EB5E28;
 line-height: 57px;
 cursor: pointer;

}
.btn1{
   width: 100%;
   padding: 10px;
   position: relative;
   background:#EB5E28 ;
   border: none;
   outline: none;
   cursor: pointer;
   border-radius: 7px;
   top: -20px;
   color: #f2f2f2;
}

.btn1:hover{
background-color: #d46f47;
}

.forgot-password-wrapper a{
 color: #EB5E28;
 text-decoration: none;
}


/* padding: 10px 20px;
background-color: #007bff;
color: #fff;
border: none;
cursor: pointer;
position: relative;
top: -20px; Ito ay nag-aadjust sa itaas */
.forgot-password-wrapper {
   text-align: center;
   margin: auto;
   margin-top: -10px;
   margin-bottom: 10px;
 }
 .create{
   text-align: center;
 }
 .btn2 {
   width: 75%;
   height: 40px;
   background: #EB5E28;
   border: none;
   outline: none;
   border-radius: 7px;
   color: #f2f2f2;
   cursor: pointer;
}
.btn2:hover{
 background-color: #d46f47;
}
.icon {
   position: absolute;
   right: 1rem;
   top: 50%;
   transform: translateY(-50%);
 }
 
 .icon-hide {
   visibility: hidden;
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
  top: 18px;
  left: 100px;
}
header .first_header .link .menu-icon{
  display: block;
 }
header .first_header .dropdown_menu{
  display: block;
 
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
    top: 18px;
    left: 100px;
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

  </Style>
</head>
<body>


  <header>
    <?php 
    if(isset($_SESSION['ID'])){
      
      if($_SESSION['ID']< 0) {
        echo '
      <section class="first_header">
        <div class="container">
          <div class="row">
            <div class="flex">
             <a href="../html/index.html">
              <a href="../index.html">
                <div class="logo">
                <img src="../image/icons/logo2.png" alt="">
                 </div></a></a>
               <div class="search">
            
                  <img src="../image/icons/search-icon.png" alt=""><input type="text" name="search" 
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
      </section>
      ';


      }

      else if ($_SESSION['ID'] > 0) {
        echo '
        <section class="first_header">
          <div class="container">
            <div class="row">
              <div class="flex">
               <div class="logo">
                <img src="../image/icons/logo1.png" alt="">
               </div>
                 <div class="search">
      
                <form>
                    <img src="../image/icons/search-icon.png" alt=""><input type="text" name="search" 
                    placeholder="Search products here" autocomplete="off" spellcheck="false">
                  </form>
       
              </div>
              </div>
              <div class="link">
                <ul>
                  <li><a href="">Shop</a></li>
                  <li><a href="">Cart</a></li>
                  <li><a href="">Foverite</a></li>
                  <li><a href="">Account</a></li>
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
                  <li><a href="">Account</a></li>
               </ul>
             </div>
        </section>';
     
    
      }
    }

    else if (!isset($_SESSION['ID'])){
      echo '
      <section class="first_header">
        <div class="container">
          <div class="row">
            <div class="flex">
             <a href="../html/index.html">
              <a href="./index.html">
                <div class="logo">
                <img src="../image/icons/logo2.png" alt="">
                 </div></a></a>
               <div class="search">
            
                  <img src="../image/icons/search-icon.png" alt=""><input type="text" name="search" 
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
      </section>
      ';
    }

    ?>
  
    
 </header>

 <main>
    <div class="wrapper" data-aos="flip-left"  data-aos-duration="1000">
  
    <div class="form-box login">
      <form action = "login.php" method = "post" >
      <h2>Login</h2>
         <!-- Email -->
         <div class="input-box label-email">
          <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
          <input type="text" required name = "email">
          <label>Email</label>
        </div>
       <!--Password-->
      <div class="input-box">
        <span class="icon icon-hide" id="hidePassword"><ion-icon name="eye-outline"></ion-icon></span>
        <span class="icon icon-show" id="showPassword"><ion-icon name="eye-off-outline"></ion-icon></span>
        <input type="password" name = "inputPassword" id="inputPassword" required>
        <label>Password</label>
      </div>
       <!--ConfirmPassword-->
       <div class="input-box label-confirm-password">
        <span class="icon icon-hide" id="hideConfirmPassword"><ion-icon name="eye-outline"></ion-icon></span>
        <span class="icon icon-show" id="showConfirmPassword"><ion-icon name="eye-off-outline"></ion-icon></span>
        <input type="password" name = "confirmPassword" id="confirmPassword" required>
        <label>Confirm Password</label>
      </div>
      <button type="submit" class="btn1">Login</button>
       </form>
        <div class="forgot-password-wrapper">
          <a href="#">Forgot Password</a>
        </div>
       <div class="create">
        <a href=""> <button type="submit" class="btn2">Create new account</button></a>
       </div>
      </div>
      </div>
  </main>

 <footer>
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
        <a href=""><i class='bx bxl-facebook'></i></a>
        <a href=""><i class='bx bxl-twitter' ></i></a>
        <a href=""><i class='bx bxl-instagram'></i></a>
        <a href=""><i class='bx bxl-google-plus'></i></a>
        
      </div>
    </div>
  </div>
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