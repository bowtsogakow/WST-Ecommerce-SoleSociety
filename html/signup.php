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
  <link rel="stylesheet" href="../css/style_signup.css">
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

  <div class="wrapper" data-aos="flip-left"  data-aos-duration="1000">
    <div class="form-box login">
      <h2>Sign Up</h2>
          <form action = "signup.php" method="post" id = "SignUpForm">
            
        <!-- Username -->
              <div class="input-box label-username">
                <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                <input type="text" name="Username" required>
                <label>Username</label>
              </div>
            <!--Email-->
            <div class="input-box label-email">
              <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
              <input type="text" name="Email" required>
              <label>Email</label>
            </div>
            <!--Password-->
            <div class="input-box">
              <span class="icon icon-hide" id="hidePassword"><ion-icon name="eye-outline"></ion-icon></span>
              <span class="icon icon-show" id="showPassword"><ion-icon name="eye-off-outline"></ion-icon></span>
              <input type="password" name = "password" id="inputPassword" required>
              <label>Password</label>
            </div>
            <!--Confirm Password-->
            <div class="input-box label-confirm-password">
              <span class="icon icon-hide" id="hideConfirmPassword"><ion-icon name="eye-outline"></ion-icon></span>
              <span class="icon icon-show" id="showConfirmPassword"><ion-icon name="eye-off-outline"></ion-icon></span>
              <input type="password" name = "confirmPassword" id="confirmPassword" required>
              <label>Confirm Password</label>
           </div>
            <!-- Captcha -->
            <div class="form-group">
                    <div class="captcha">
                      <label for="captcha">Captcha:</label>
                      <span id="captchaText"></span>
                      <button type="button" id="refreshCaptcha">Refresh</button>
                    </div>
                    <input type="text" id="captchaInput" required placeholder="Enter Captcha">
                  </div>
              
            <button type="submit" class="btn1" style="margin-bottom: 1rem;">SIGN UP</button>
            <a href="login.php" style="
            color: #e1774d;
            margin: 4rem 3.4rem;
            text-decoration: none;
            ">Already have an Account?</a>
         

            </form>
          </div>
          <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
          <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        </div>
  
</form>
</main>
<footer>
  
  <?php echo AddFooter();?>
</footer>
<script>
  AOS.init();
</script>
</body>

  <?php 
    include "DBQuery.php"; 
    $username; 
    $email; 
    $password; 

    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $username = $_POST["Username"];
      $email = $_POST["Email"]; 
      $password = $_POST["password"]; 
      $status_message; 
      
      $status_code = SignUp($username, $email, $password); 

      if ($status_code == 1){
        $status_message = "Username or email already exists"; 
      }
      else if ($status_code == 0){
        $status_message = "User successfully created"; 
        $_SESSION['ID'] = login($username, $email, $password); 
      }
      echo "<script>  alert('$status_message'); window.location.href = 'index.php';</script>";
    }

    

  ?> 

<script>
function toggleDropdown() {
  var dropdown = document.getElementById("dropdownContent");
  if (dropdown.style.display === "none") {
    dropdown.style.display = "block";
  } else {
    dropdown.style.display = "none";
  }
}


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


  function generateCaptchaText() {
    const characters =
      "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    let captchaText = "";
    for (let i = 0; i < 6; i++) {
      captchaText += characters.charAt(Math.floor(Math.random() * characters.length));
    }
    return captchaText;
  }
  
function refreshCaptcha() {
    const captchaText = generateCaptchaText();
    document.getElementById("captchaText").textContent = captchaText;
    document.getElementById("captchaInput").value = "";
  }
  
function validateForm() {
    const captchaText = document.getElementById("captchaText").textContent;
    const captchaInput = document.getElementById("captchaInput").value;
  
    if (captchaInput === captchaText) {

      // dito palagay ata lalagay link pag tama lahat ng sagot
      
      return true;
    } 
    else {
      alert("Invalid captcha. Please try again.");
      refreshCaptcha();
      return false;
    }
  }
  
document.getElementById("refreshCaptcha").addEventListener("click", refreshCaptcha);
  
refreshCaptcha();

  


  function generateCaptchaText() {
    const characters =
      "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    let captchaText = "";
    for (let i = 0; i < 6; i++) {
      captchaText += characters.charAt(Math.floor(Math.random() * characters.length));
    }
    return captchaText;
  }
  
function refreshCaptcha() {
    const captchaText = generateCaptchaText();
    document.getElementById("captchaText").textContent = captchaText;
    document.getElementById("captchaInput").value = "";
  }
  
function validateForm() {
    const captchaText = document.getElementById("captchaText").textContent;
    const captchaInput = document.getElementById("captchaInput").value;
  
    if (captchaInput === captchaText) {

      // dito palagay ata lalagay link pag tama lahat ng sagot
      
      return true;
    } 
    else {
      alert("Invalid captcha. Please try again.");
      refreshCaptcha();
      return false;
    }
  }
  
document.getElementById("refreshCaptcha").addEventListener("click", refreshCaptcha);
  
refreshCaptcha();

  

  </script>
  
   
</html>
