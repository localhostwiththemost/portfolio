"use strict";

// MENU OPEN/CLOSE
let menuOpen = document.querySelector(".navigation__checkbox").checked;

function hideMenu() {
  if ((menuOpen = true)) {
    document.querySelector(".navigation__checkbox").checked = false;
  }
}
window.addEventListener("scroll", hideMenu);

// SLIDER COMPONENT (CAROUSEL)
const slider = function () {
  const slides = document.querySelectorAll(".slide");
  const btnLeft = document.querySelector(".slider__btn--left");
  const btnRight = document.querySelector(".slider__btn--right");
  const dotContainer = document.querySelector(".dots");

  let curSlide = 0;
  const maxSlide = slides.length;

  // FUNCTIONS
  // Carousel dots
  const createDots = function () {
    slides.forEach(function (_, i) {
      dotContainer.insertAdjacentHTML(
        "beforeend",
        `<button class="dots__dot" data-slide="${i}"></button>`
      );
    });
  };

  // Dot active slide indicator
  const activateDot = function (slide) {
    // selecting all of the dots and removing the active class from each
    document
      .querySelectorAll(".dots__dot")
      .forEach((dot) => dot.classList.remove("dots__dot--active"));

    document
      .querySelector(`.dots__dot[data-slide="${slide}"]`)
      .classList.add("dots__dot--active");
  };

  // Allows cycling of slides
  // s for slide, i for index
  const goToSlide = function (slide) {
    slides.forEach(
      (s, i) => (s.style.transform = `translateX(${100 * (i - slide)}%)`)
    );
  };

  // Next slide
  const nextSlide = function () {
    if (curSlide === maxSlide - 1) {
      curSlide = 0;
    } else {
      curSlide++;
    }
    goToSlide(curSlide);
    activateDot(curSlide);
  };

  // Previous slide
  const prevSlide = function () {
    if (curSlide === 0) {
      curSlide = maxSlide - 1;
    } else {
      curSlide--;
    }
    goToSlide(curSlide);
    activateDot(curSlide);
  };

  const init = function () {
    // carousel starts on slide 0 initially
    goToSlide(0);

    // create dots for carousel
    createDots();

    // makes first dot active initially
    activateDot(0);
  };
  init();

  // EVENT HANDLERS
  btnRight.addEventListener("click", nextSlide);
  btnLeft.addEventListener("click", prevSlide);

  document.addEventListener("keydown", function (e) {
    // if the event's key is ArrowLeft, we're calling prevSlide
    if (e.key === "ArrowLeft") prevSlide();
    // same idea but using short circuiting, both ways work
    e.key === "ArrowRight" && nextSlide();
  });

  // dots (event delegation)
  dotContainer.addEventListener("click", function (e) {
    if (e.target.classList.contains("dots__dot")) {
      // we're using object destructuring here because if we didnt we'd have to write: const slide = e.target.dataset.slide
      const { slide } = e.target.dataset;
      // now we're calling these functions with the slide number we just read from the dataset
      goToSlide(slide);
      activateDot(slide);
    }
  });
};
slider();
