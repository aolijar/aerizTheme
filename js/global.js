// THIS SECTION IS FOR BUTTONS ONLY ------------------------- NEED TO CHANGE LOCATION OF STORING THESE FUNCTION/HOW
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

// ==============================================================================================================================
// OPENS NAV BAR MENU ---------------
document.getElementById("nav__toggle-btn").addEventListener("click", () => {
  var hamburgerBtn = document.getElementById("nav__toggle-btn");
  var outsideLinks = document.querySelectorAll("footer a");
  var headerLinks = document.querySelector(".header__site-branding a");
  //
  document.querySelector("body").classList.toggle("nav__module--active");
  hamburgerBtn.setAttribute("aria-pressed", "true");
  //
  if (
    document.querySelector("body").classList.contains("nav__module--active")
  ) {
    //
    document.querySelector("body").style.overflow = "hidden";
    // document.querySelector(".hamburger__text").innerText = "EXIT";
    //
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
    //
    setTimeout(() => {
      document.querySelector(".nav__module-primary-navigation").style.opacity =
        "1";
    }, 150);
  } else {
    //
    hamburgerBtn.setAttribute("aria-pressed", "false");
    document.querySelector("body").style.overflow = "auto";
    // document.querySelector(".hamburger__text").innerText = "MENU";
    //
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
    //
  }
});
// ==============================================================================================================================
// HANDLES HERO SCROLL OBSERVE FUNCTIONS ---------------
function observingHeroScrollMouse(e) {
  const holographicElement = document.querySelectorAll(
    ".section__hero-text-mask"
  );
  const x = e.clientX;
  const y = e.clientY;
  // console.log(x, y);
  const width = document.querySelector(
    ".section__hero-scroll-content-container"
  ).clientWidth;
  const height = document.querySelector(
    ".section__hero-scroll-content-container"
  ).clientHeight;
  const valueX = x / width;
  const valueY = y / height;
  const percentage = `${valueX * 100}% ${valueY * 100}%`;
  holographicElement.forEach((text) => {
    text.style.backgroundPosition = percentage;
  });
}

function observingHeroScroll() {
  var frame = Number(
    document
      .getElementById("section__hero-canvas-container")
      .getAttribute("data-frame")
  );

  if (frame <= 15) {
    document
      .querySelector(".section__hero-scroll-one")
      .classList.add("section__hero-scroll-text--active");
    document
      .querySelector(".section__hero-scroll-two")
      .classList.remove("section__hero-scroll-text--active");
    document
      .querySelector(".section__hero-scroll-three")
      .classList.remove("section__hero-scroll-text--active");
    document
      .querySelector(".section__hero-main-content")
      .classList.remove("section__hero-main-content--active");
    // ATTRIBUTES
    document
      .querySelector(".section__hero-scroll-one-text")
      .setAttribute("aria-hidden", "false");
    document
      .querySelector(".section__hero-scroll-two-text")
      .setAttribute("aria-hidden", "true");
    document
      .querySelector(".section__hero-scroll-three-text")
      .setAttribute("aria-hidden", "true");
    document
      .querySelector(".section__hero-main-scroll-text")
      .setAttribute("aria-hidden", "true");
    // document.getElementById("btn__hero").setAttribute("tabIndex", "-1");
  } else if (frame > 15 && frame < 42) {
    document
      .querySelector(".section__hero-scroll-one")
      .classList.remove("section__hero-scroll-text--active");
    document
      .querySelector(".section__hero-scroll-two")
      .classList.remove("section__hero-scroll-text--active");
    document
      .querySelector(".section__hero-scroll-three")
      .classList.remove("section__hero-scroll-text--active");
    document
      .querySelector(".section__hero-main-content")
      .classList.remove("section__hero-main-content--active");
    // ATTRIBUTES
    document
      .querySelector(".section__hero-scroll-one-text")
      .setAttribute("aria-hidden", "true");
    document
      .querySelector(".section__hero-scroll-two-text")
      .setAttribute("aria-hidden", "true");
    document
      .querySelector(".section__hero-scroll-three-text")
      .setAttribute("aria-hidden", "true");
    document
      .querySelector(".section__hero-main-scroll-text")
      .setAttribute("aria-hidden", "true");
    // document.getElementById("btn__hero").setAttribute("tabIndex", "-1");
  } else if (frame >= 42 && frame < 70) {
    document
      .querySelector(".section__hero-scroll-one")
      .classList.remove("section__hero-scroll-text--active");
    document
      .querySelector(".section__hero-scroll-two")
      .classList.add("section__hero-scroll-text--active");
    document
      .querySelector(".section__hero-scroll-three")
      .classList.remove("section__hero-scroll-text--active");
    document
      .querySelector(".section__hero-main-content")
      .classList.remove("section__hero-main-content--active");
    // ATTRIBUTES
    document
      .querySelector(".section__hero-scroll-one-text")
      .setAttribute("aria-hidden", "true");
    document
      .querySelector(".section__hero-scroll-two-text")
      .setAttribute("aria-hidden", "false");
    document
      .querySelector(".section__hero-scroll-three-text")
      .setAttribute("aria-hidden", "true");
    document
      .querySelector(".section__hero-main-scroll-text")
      .setAttribute("aria-hidden", "true");
    // document.getElementById("btn__hero").setAttribute("tabIndex", "-1");
  } else if (frame >= 70 && frame < 100) {
    document
      .querySelector(".section__hero-scroll-one")
      .classList.remove("section__hero-scroll-text--active");
    document
      .querySelector(".section__hero-scroll-two")
      .classList.remove("section__hero-scroll-text--active");
    document
      .querySelector(".section__hero-scroll-three")
      .classList.add("section__hero-scroll-text--active");
    document
      .querySelector(".section__hero-main-content")
      .classList.remove("section__hero-main-content--active");
    // ATTRIBUTES
    document
      .querySelector(".section__hero-scroll-one-text")
      .setAttribute("aria-hidden", "true");
    document
      .querySelector(".section__hero-scroll-two-text")
      .setAttribute("aria-hidden", "true");
    document
      .querySelector(".section__hero-scroll-three-text")
      .setAttribute("aria-hidden", "false");
    document
      .querySelector(".section__hero-main-scroll-text")
      .setAttribute("aria-hidden", "true");
    // document.getElementById("btn__hero").setAttribute("tabIndex", "-1");
  } else if (frame >= 100) {
    document
      .querySelector(".section__hero-scroll-one")
      .classList.remove("section__hero-scroll-text--active");
    document
      .querySelector(".section__hero-scroll-two")
      .classList.remove("section__hero-scroll-text--active");
    document
      .querySelector(".section__hero-scroll-three")
      .classList.remove("section__hero-scroll-text--active");
    document
      .querySelector(".section__hero-main-content")
      .classList.add("section__hero-main-content--active");
    // ATTRIBUTES
    document
      .querySelector(".section__hero-scroll-one-text")
      .setAttribute("aria-hidden", "true");
    document
      .querySelector(".section__hero-scroll-two-text")
      .setAttribute("aria-hidden", "true");
    document
      .querySelector(".section__hero-scroll-three-text")
      .setAttribute("aria-hidden", "true");
    document
      .querySelector(".section__hero-main-scroll-text")
      .setAttribute("aria-hidden", "false");
    // document.getElementById("btn__hero").setAttribute("tabIndex", "0");
  }
  // WILL NEED TO SET THIS UP TO BE ACTIVE BTN WHEN PAST THE HERO?
  // MAYBE IF TAB TO BTN IT WILL SCROLL ALL THE WAT TO BOTTOM OF CANVAS??????
  // POSSIBLY CHANGE ALL THESE OPACITYS TO A CLASS

  // console.log(frame);
}

const heroScrollObserver = new IntersectionObserver(
  (entries) => {
    if (entries[0].isIntersecting) {
      // console.log("on");
      document
        .querySelector(".section__hero-scroll-content-container")
        .addEventListener("mousemove", observingHeroScrollMouse);
      window.addEventListener("scroll", observingHeroScroll);
    } else {
      // console.log("off");
      document
        .querySelector(".section__hero-scroll-content-container")
        .removeEventListener("mousemove", observingHeroScrollMouse);
      window.removeEventListener("scroll", observingHeroScroll);
    }
  },
  { threshold: 0.1 }
);

heroScrollObserver.observe(
  document.querySelector(".section__hero-scroll-content-container")
);

// MAKES HERO BTN SCROLL INTO VIEW ON TAB
// ==============================================================================================================================
document.getElementById("btn__hero").addEventListener("focus", () => {
  var heroBtn = document.getElementById("section__hero");
  heroBtn.scrollIntoView(false);
});
