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