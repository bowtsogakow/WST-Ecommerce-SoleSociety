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

  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  /* border: 3px solid red; */
  background-image: linear-gradient(to right, #252422, #eb5e28, #252422);
}

h1 {
  text-align: center;
}
.top-text {
  background-color: red;
  width: 20%;
  margin: auto;
  padding: 5px;
  box-sizing: border-box; /* Include padding and border in the width calculation */
  border-radius: 50px;
}

.profile-container {
  display: grid;
  grid-template-columns: 1.5fr 2fr;
  flex-direction: column;
  align-items: center;
  padding: 20px; /* Add padding for better spacing */
  background-color: none;
  margin-inline-end: 150px;
  margin-inline-start: 150px;
}

.profile-image {
  width: 200px;
  height: 200px;
  border-radius: 50%;
  object-fit: cover;
  margin-block: 25px;
  outline: 3px solid white;
  outline-offset: 0.25rem;
}

.profile-info {
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 20px;
  margin-bottom: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  background-color: rgb(16, 16, 16);
  text-align: center;
}

.info div {
  color: white;
  text-align: left;
  margin-block: 1rem;
}

.profile-field {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.field-label {
  flex-basis: 150px;
  font-weight: bold;
}

.field-data {
  flex-grow: 1;
}
.buttons {
}
.profile-info .info .buttons .button {
  display: block;
  background-color: #eb5e28;
  width: 70%;
  margin: 1rem auto;
  color: #1d1d1d;
  font-weight: bold;
  padding: 10px 20px;
  cursor: pointer;
  border-radius: 0.5rem;
  text-align: center;
  border: none;
}
.profile-info .info .buttons .button:hover {
  background-color: #b0451b;
  outline: 1px solid #b0451b;
  outline-offset: 0.1rem;
}
.profile-info .info .buttons .button:active {
  background-color: #b35c3a;
}

.link-buttons {
  display: flex;
  flex-direction: column;
  margin: 1rem;
  gap: 3rem;
}
.link-buttons button {
  cursor: pointer;
  display: flex;
  padding: 1rem;
  text-align: left;
  justify-content: space-between;
  background-color: none;
  background: transparent;
  border: none;
  border-bottom-style: solid;
  border-bottom-width: 1px;
  font-weight: bold;
  font-size: 1rem;
  border-radius: 0.5rem 0.5rem 0 0;
  transition: background-color 0.3s ease;
  color: white;
}
.link-buttons button:hover {
  background-color: #a2a2a2;
  backdrop-filter: blur(50px);
  color: black;
}

.link-buttons button ion-icon {
  font-size: 1.5rem;
}

@media (max-width: 1125px) {
  .profile-container {
    display: block;
  }
  .info {
  }
  .info .profile-field {
    width: 60%;
    margin: 1rem auto;
  }
}

  </style>
</head>
<body>
    <header>
        <?php
    CartHeader()
    ?>
   </header>
    <main>
        <section class="userprofile">
        <div class="profile-container">
      <div class="profile-info">
        <img class="profile-image" src="William2x2.jpg" width="10%" />
        <div class="info">
          <div class="profile-field">
            <span class="field-label">Username:</span>
            <span class="field-data">Username</span>
          </div>

          <div class="profile-field">
            <span class="field-label">Name:</span>
            <span class="field-data">Full Name</span>
          </div>

          <div class="profile-field">
            <span class="field-label">Email Address:</span>
            <span class="field-data">Email</span>
          </div>

          <div class="profile-field">
            <span class="field-label">Phone Number:</span>
            <span class="field-data">###</span>
          </div>

          <div class="profile-field">
            <span class="field-label">Gender:</span>
            <span class="field-data">Gender</span>
          </div>

          <div class="profile-field">
            <span class="field-label">Date of Birth:</span>
            <span class="field-data">MM-DD-YYYY</span>
          </div>
          <div class="buttons">
            <button class="logout-button button">Log Out</button>
          </div>
        </div>
      </div>
      <div class="link-buttons">
        <button>
          <span class="label">Favorite</span
          ><ion-icon name="chevron-forward-outline"></ion-icon>
        </button>
        <button>
          Purchase History<ion-icon name="chevron-forward-outline"></ion-icon>
        </button>
        <button>
          View Cart<ion-icon name="chevron-forward-outline"></ion-icon>
        </button>
      </div>
        </section>
    </main>
    <footer>
    <?php
    echo AddFooter();   
    ?>
  
  </footer>
  <script
        type="module"
        src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
      ></script>
      <script
        nomodule
        src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
      ></script>
</body>
</html>