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
  <link rel="stylesheet" href="../css/style_forgotpassword">
  <link rel="icon" type="image/png" sizes="32x32" href="../image/icons/logo2.png" >
  
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src=".https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <title>Sole Society</title>
  <style>
     section.forgotpassword{
     display: flex; 
    justify-content: center;
    align-items: center;
    background-color: #252422;
    font-family: Arial, sans-serif;
    margin-top: 50px;
  }
  section.forgotpassword .container {
    width: 400px;
    padding: 40px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
  }
  
  h2{
    text-align: center;
    margin-bottom: 20px;
    text-transform: uppercase;
    font-weight: bolder;
}
  .input-box {
    position: relative;
    width: 100%;
    height: 40px;
    border-bottom: 1px solid black;
    margin: 30px 0;
  }

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
    color: #252422;
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
  
  .icon {
      position: absolute;
      right: 1rem;
      top: 50%;
      transform: translateY(-50%);
    }
    
    .icon-hide {
      visibility: hidden;
    }

    #login-link{
      text-decoration: none;
      color: #EB5E28;
    }
    <?php
    echo AddCss();
    ?>
  </style>
</head>
<body>
    <header>
    </header>
    <main>
        <section class="forgotpassword" data-aos="flip-right"  data-aos-duration="1000">
        <div class="container">
        <h2>Forgot Password</h2>

        <form id="forgotPasswordForm">
              <div class="input-box label-email">
                <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                <input type="text" name="Email" required>
                <label>Email</label>
              </div>
              <div class="input-box">
                <span class="icon icon-hide" id="hidePassword"><ion-icon name="eye-outline"></ion-icon></span>
                <span class="icon icon-show" id="showPassword"><ion-icon name="eye-off-outline"></ion-icon></span>
                <input type="password" name = "password" id="inputResetPassword" required>
                <label>Reset Password</label>
              </div>
              <div class="input-box">
                <span class="icon icon-hide" id="hidePassword"><ion-icon name="eye-outline"></ion-icon></span>
                <span class="icon icon-show" id="showPassword"><ion-icon name="eye-off-outline"></ion-icon></span>
                <input type="password" name = "password" id="inputConfirmPassword" required>
                <label>Confirm Password</label>
              </div>
              <button type="submit" class="btn1">Reset Password</button>
              <div style="text-align: center;"><a href="login.php" id="login-link">Log In</a></div>
        </form>
      </div>
        </section>
    </main>
    <footer>
  <?php
  echo AddFooter();
  ?>
  
</footer>
<script>
  AOS.init();
</script>
</body>
</html>