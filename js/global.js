// THIS SECTION IS FOR BUTTONS ONLY -------------------------

const btn = document.querySelectorAll(".btn__default");

btn.forEach((b) =>
  b.addEventListener("mouseenter", (e) => {
    var rect = b.getBoundingClientRect();
    var x = e.clientX - rect.left; //x position within the element.
    var y = e.clientY - rect.top; //y position within the element.
    b.style.setProperty("--btnFillTop", `${y}px`);
    b.style.setProperty("--btnFillLeft", `${x}px`);
    // FIX THIS LATER SHOUDLNT BOTH RUN AT SAME TIME
    b.style.setProperty("--btnFillTop", `${y}px`);
    b.style.setProperty("--btnFillLeft", `${x}px`);
  })
);

// OPEN NAV BAR MENU ---------------

const hamburgerBtn = document.getElementById("nav__toggle-btn");
const outsideLinks = document.querySelectorAll("footer a");
const headerLinks = document.querySelector(".header__site-branding a");
hamburgerBtn.addEventListener("click", () => {
  //
  document.querySelector("body").classList.toggle("nav__module--active");
  hamburgerBtn.setAttribute("aria-pressed", "true");
  //
  if (
    document.querySelector("body").classList.contains("nav__module--active")
  ) {
    document.querySelector("body").style.overflow = "hidden";
    document.querySelector(".hamburger__text").innerText = "EXIT";
    outsideLinks.forEach((a) => {
      a.setAttribute("tabindex", "-1");
    });
    headerLinks.setAttribute("tabindex", "-1");
    document
      .querySelector(".footer__input-email")
      .setAttribute("tabindex", "-1");
    document
      .querySelector(".footer__input-submit")
      .setAttribute("tabindex", "-1");
    document.getElementById("btn__header-shop").setAttribute("tabindex", "-1");
  } else {
    hamburgerBtn.setAttribute("aria-pressed", "false");
    document.querySelector("body").style.overflow = "auto";
    document.querySelector(".hamburger__text").innerText = "MENU";
    outsideLinks.forEach((a) => {
      a.setAttribute("tabindex", "0");
    });
    headerLinks.setAttribute("tabindex", "0");
    document
      .querySelector(".footer__input-email")
      .setAttribute("tabindex", "0");
    document
      .querySelector(".footer__input-submit")
      .setAttribute("tabindex", "0");
    document.getElementById("btn__header-shop").setAttribute("tabindex", "0");
  }
});

// nav link effects
