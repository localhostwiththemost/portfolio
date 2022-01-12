"use strict";

// MENU OPEN/CLOSE
let menuOpen = document.querySelector(".navigation__checkbox").checked;

function hideMenu() {
  if ((menuOpen = true)) {
    document.querySelector(".navigation__checkbox").checked = false;
  }
}
window.addEventListener("scroll", hideMenu);
