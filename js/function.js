let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides((slideIndex += n));
}

function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  slides[slideIndex - 1].style.display = "block";
}

function autoSlide() {
  plusSlides(1);
}

setInterval(() => {
  autoSlide();
}, 5000);

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



const accountDropDownBurger = document.getElementById('accountDropDown-burger');

accountDropDownBurger.addEventListener('click', () =>{
  const dropdownContentBurger = document.querySelector('.dropdown-content-burger');

  if(!dropdownContentBurger.classList.contains('active')) {
    dropdownContentBurger.classList.add('active');
  }else {
    dropdownContentBurger.classList.remove('active');
  }
});
