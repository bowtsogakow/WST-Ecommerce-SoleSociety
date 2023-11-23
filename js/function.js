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

function selectPaymentOption(optionId) {
  // Check if the clicked button is the credit card button
  const isCreditCardButton = optionId === 'credit-card';

  // Get the previously selected button
  let previouslySelectedButton = document.querySelector('.payment-options button.selected');

  // Remove the 'selected' class from the previously selected button, but only if it's not the credit card button
  if (previouslySelectedButton && !isCreditCardButton) {
    previouslySelectedButton.classList.remove('selected');
  }

  // Select the clicked button
  const selectedButton = document.getElementById(optionId);
  selectedButton.classList.add('selected');
}

function selectPaymentOption(option) {
  const paymentOptions = document.querySelectorAll('.payment-options button');
  const creditCardForm = document.getElementById('credit-card-form');

  paymentOptions.forEach(button => button.classList.remove('selected'));

  if (option === 'cash-on-delivery') {
    document.getElementById('cash-on-delivery').classList.add('selected');
    creditCardForm.classList.add('hidden');
  } else if (option === 'credit-card') {
    document.getElementById('credit-card').classList.add('selected');
    creditCardForm.classList.remove('hidden');
  } else if (option === 'other') {
    document.getElementById('other').classList.add('selected');
    creditCardForm.classList.add('hidden');
  }
}