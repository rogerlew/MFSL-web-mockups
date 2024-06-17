var currentSlide = 1;
const slides = document.getElementsByClassName("slide");
const captions = document.getElementsByClassName("slide-caption");
const navButtons = document.getElementsByClassName("slide-nav");

function hideSlide(slide) {
    slides[slide].style.display = "none";
    captions[slide].style.display = "none";
}

function showSlide(slide) {
    slides[slide].style.display = "block";
    captions[slide].style.display = "block";
}

function nextSlide() {
    goToSlide(currentSlide === slides.length - 1 ? 0 : currentSlide + 1);
}

function prevSlide() {
    goToSlide(currentSlide === 0 ? slides.length - 1 : currentSlide - 1);
}

function goToSlide(slide) {
    hideSlide(currentSlide);
    navButtons[currentSlide].style.backgroundColor = "white";
    currentSlide = slide;
    navButtons[currentSlide].style.backgroundColor = "lightgray";
    showSlide(currentSlide);
}

prevSlide();

setInterval(nextSlide, 5000);