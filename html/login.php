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
        echo '';


      }

      else if ($_SESSION['ID'] > 0) {
        echo '';
     
    
      }
    }

    else if (!isset($_SESSION['ID'])){
      echo '';
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
      
      <button type="submit" class="btn1">Login</button>
       </form>
        <div class="forgot-password-wrapper">
          <a href="#">Forgot Password</a>
        </div>
       <div class="create">
        <a href="signup.php"> <button type="submit" class="btn2">Create new account</button></a>
       </div>
      </div>
      </div>
  </main>

<footer>
  
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
    if($_SESSION['ID'] > 0){
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
