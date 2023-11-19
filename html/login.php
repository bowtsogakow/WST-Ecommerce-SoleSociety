<?php 
  session_start();  
  ?>
<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- FONTS -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Poppins -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" 
rel="stylesheet">
  <link rel="stylesheet" href="../css/style_login.css">
  <link rel="icon" type="image/png" sizes="32x32" href="../image/icons/logo2.png" >
  
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src=".https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <title>Sole Society</title>
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

      else if ($_SESSION['ID'] > 0) {
        echo '
        <section class="Hidden_header">
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
                  <li><a href="">Foverite</a></li>
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

    </form>
  </div>
</footer>
<script>
  AOS.init();
</script>
</body>

<?php
  include "DbQuery.php"; 
  $email; 
  $password1;
  $password2;
  $status; 
  $_SESSION['ID'] = -1; 
  

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password1 = $_POST["inputPassword"];
    $password2 = $_POST["confirmPassword"];
    $status_message;
    $_SESSION['ID'] = login($email, $password1, $password2); 
    if($_SESSION['ID'] >= 0){
      $status_message = "Login Succesfully"; 
    } 
    else if ($_SESSION['ID'] == -1 || $_SESSION['ID'] == -2){
      $status_message = "Incorrect email or password"; 
    }

    echo "<script>  alert('$status_message'); window.location.href = 'index.php';</script>";
    
    }


?>

<script>
const showPass = document.getElementById("showPassword");
const hidePass = document.getElementById("hidePassword");
const inputPassword = document.getElementById("inputPassword");

const showConfirmPass = document.getElementById("showConfirmPassword");
const hideConfirmPass = document.getElementById("hideConfirmPassword");
const confirmPass = document.getElementById("confirmPassword");


showPass.addEventListener("click", () => {
  inputPassword.setAttribute("type", "text");
  showPass.style.visibility = "hidden";
  hidePass.style.visibility = "visible";
});

hidePass.addEventListener("click", () => {
  inputPassword.setAttribute("type", "password");
  showPass.style.visibility = "visible";
  hidePass.style.visibility = "hidden";
});

showConfirmPass.addEventListener("click", () => {
  confirmPass.setAttribute("type", "text");
  showConfirmPass.style.visibility = "hidden";
  hideConfirmPass.style.visibility = "visible";
});

hideConfirmPass.addEventListener("click", () => {
  confirmPass.setAttribute("type", "password");
  showConfirmPass.style.visibility = "visible";
  hideConfirmPass.style.visibility = "hidden";
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
</script>
</html>
