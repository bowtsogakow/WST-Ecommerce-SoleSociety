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
  
  font-family: 'Poppins', system-ui,'Segoe UI',  'Open Sans', 'Helvetica Neue', sans-serif;
  font-size: 16px;
}
.container{
  max-width: 1440px;
  margin: 0 auto;
}

.hidden{ 
  display: none; 
}

/* HEADER */

 header {
  position: sticky;
  top: 0;
  z-index: 9999;
 }
header .first_header .row{
  display: flex;
  justify-content: space-between;
  align-items: center;
  }
  header .first_header {
    padding: 10px 40px;
    background-image: linear-gradient(to right,#252422 , #EB5E28);
    z-index: 1;
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
    top: 18px;
    left: 99px;
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
    height: max-content;
  }
  header .first_header .dropdown_menu li{
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

  /*SECTION HERO | SLIDESHOW */
  section.hero{
    padding-top: 70px;
    background-image: linear-gradient(to right,#252422 , #EB5E28);
  }
section.hero .container{
    max-width: 1440px;
    margin: 0 auto;
    padding: 0px 40px;
}
section.hero  .slideshow {
  max-width: 1100px;
  position: relative;
  margin: auto;
  overflow: hidden;
  margin-top: 20px;
}
section.hero .back, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  
}
section.hero .next {
  right: 0;
  border-radius: 3px 0 0 3px;
}
section.hero .back:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);

}
section.hero  .text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
section.hero .numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
section.hero .active, .dot:hover {
  background-color: #717171;
}

section.hero .fade {
  animation-name: fade;
  animation-duration: 1.5s;
}
section.hero .product{
  margin-top: 20px;
 }
 section.hero .featured_product{
  display: grid;
  grid-template-columns: repeat(4,1fr);
 
 }
 section.hero  .mySlides:not(:first-child) {
    display: none;
  }

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}




/* PRODUCT SLIDE | SCROLL*/
section.scroll_product {

  background-size: cover;
  background-repeat: no-repeat;
  padding: 50px 0px 100px 0px;
  background-color: #252422;
} 
section.scroll_product a{
text-decoration: none;
}
section.scroll_product  .container{
  max-width: 1440px;
  margin: 0 auto;
  padding: 0px 40px;
  padding-bottom: 50px;
}
section.scroll_product .container{
  max-width: 1440px;
  margin: 0 auto;
}
  section.scroll_product .products-slide {
  display: grid;
  grid-template-columns: 1fr;
 
}
 section.scroll_product .product-heading{
  color: #FFFCF2;
 text-transform: uppercase;
 margin-bottom: 20px;
}
 .feature-products {
  height: 320px;
  display: grid;
  grid-template-columns: repeat(7, 1fr);
  gap: 1rem;
  overflow-x: scroll;
  scroll-snap-type: x mandatory;
  white-space: nowrap;
}
.product-catergory p{
  font-size: 10px;
}
.product-categories {
  height: 320px;
  display: grid;
  grid-template-columns: repeat(7, 1fr);
  gap: 1rem;
  overflow-x: scroll;
  scroll-snap-type: x mandatory;
  white-space: nowrap;
}
::-webkit-scrollbar {
background-color: #000;
width: 5px;
height: 5px;
cursor: pointer;
}
::-webkit-scrollbar-thumb {
  background:#e1774d;

  border-radius:20px ;
  height: 5px;
 
}

section.scroll_product .product-brands {
  height: 320px;
  display: grid;
  grid-template-columns: repeat(7, 1fr);
  gap: 1rem;
  overflow-x: scroll;
  scroll-snap-type: x mandatory;
  white-space: nowrap;
}

section.scroll_product .product-heading:nth-of-type(2), .product-heading:nth-of-type(3){
  margin-top: 3rem;
}
section.scroll_product .product {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  flex-direction: column;
  scroll-snap-align: center;
  width: 250px;
  height: 300px;
  background-color: #3a3936;
  padding: 2rem;
  border-radius: 10px;
  cursor: pointer;
}
section.scroll_product .product:hover{
  background-color: #5d5c59;
}
section.scroll_product .product:hover > .product-image{
  opacity: 0.7;
}
section.scroll_product .product-image {
  width: 100%;
  height: 100%;
  background-color: #fff;
  padding: 1rem;
  margin-bottom: 0.5rem;
  border-radius: 4px;
}
section.scroll_product .product-image img{
  width: 100%;
  height: 100%;
  object-fit: contain;
  object-position: center;
  vertical-align: middle;
}

section.scroll_product .product-name {
  margin-bottom: .2rem;
  font-weight: 700;
}
section.scroll_product .product-name, .product-catergory {
  color: #fff;
}
section.scroll_product .product-price{
  color: #EB5E28;
}

/* FOOTER */
footer {
  background-color:#000000;
  height: 600px;
  color: #FFFCF2;
  font-size: 16px;
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
  left: 80px;
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
  height: 1200px;
  color: #FFFCF2;
  font-size: 16px;
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
        <img class="profile-image" src="avatar.jpg" width="10%" />
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
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script>
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

function toggleDropdown() {
  var dropdown = document.getElementById("dropdownContent");
  if (dropdown.style.display === "none") {
    dropdown.style.display = "block";
  } else {
    dropdown.style.display = "none";
  }
}

const accountDropDown = document.getElementById('accountDropDown');

accountDropDown.addEventListener('click', () =>{
  const dropdownContent = document.querySelector('.dropdown-content');

  if(!dropdownContent.classList.contains('active')) {
    dropdownContent.classList.add('active');
  }else {
    dropdownContent.classList.remove('active');
  }
});
  </script>
</body>
</html>