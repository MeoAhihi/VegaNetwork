const slider = document.querySelector(".slider__img");
const sliderIMG = document.querySelectorAll(".slider__img img");

// Slider
// Buttons
const prevBtn = document.querySelector("#prevBtn");
const nextBtn = document.querySelector("#nextBtn");

// Counter
let counter = 1;
const size = sliderIMG[0].clientWidth;

slider.style.transform = "translateX(" + -size * counter + "px)";

// Buttons Listener
nextBtn.addEventListener("click", () => {
  if (counter >= sliderIMG.length - 1) return;
  slider.style.transition = "transform 0.4s ease-in-out";
  counter++;
  slider.style.transform = "translateX(" + -size * counter + "px)";
});
prevBtn.addEventListener("click", () => {
  if (counter <= 0) return;
  slider.style.transition = "transform 0.4s ease-in-out";
  counter--;
  slider.style.transform = "translateX(" + -size * counter + "px)";
});

slider.addEventListener("transitionend", () => {
  if (sliderIMG[counter].id === "slider__img--lastClone") {
    slider.style.transition = "none";
    counter = sliderIMG.length - 2;
    slider.style.transform = "translateX(" + -size * counter + "px)";
  }
  if (sliderIMG[counter].id === "slider__img--firstClone") {
    slider.style.transition = "none";
    counter = sliderIMG.length - counter;
    slider.style.transform = "translateX(" + -size * counter + "px)";
  }
});

// Class List
