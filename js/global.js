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
// ==========================================
hamburgerBtn.addEventListener("click", () => {
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

// =====================

document.getElementById("hero").addEventListener("mousemove", (event) => {
  const holographicElement = document.querySelectorAll(".card__text");

  const x = event.clientX;
  const y = event.clientY;
  // console.log(x, y);
  const width = document.getElementById("hero").clientWidth;
  const height = document.getElementById("hero").clientHeight;
  const valueX = x / width;
  const valueY = y / height;
  const percentage = "" + valueX * 150 + "% " + valueY * 200 + "%";
  holographicElement.forEach((text) => {
    text.style.backgroundPosition = percentage;
  });
});

window.addEventListener("scroll", () => {
  console.log("ok");
  var frame = Number(
    document.getElementById("canvas-container").getAttribute("data-frame")
  );

  if (frame <= 15) {
    document.querySelector(".hero-scroll-one").style.opacity = "1";
    document.querySelector(".hero-scroll-two").style.opacity = "0";
    document.querySelector(".hero-scroll-three").style.opacity = "0";
    document.querySelector(".hero__main-content").style.opacity = "0";
  } else if (frame > 15 && frame < 42) {
    document.querySelector(".hero-scroll-one").style.opacity = "0";
    document.querySelector(".hero-scroll-two").style.opacity = "0";
    document.querySelector(".hero-scroll-three").style.opacity = "0";
    document.querySelector(".hero__main-content").style.opacity = "0";
  } else if (frame >= 42 && frame < 70) {
    document.querySelector(".hero-scroll-one").style.opacity = "0";
    document.querySelector(".hero-scroll-two").style.opacity = "1";
    document.querySelector(".hero-scroll-three").style.opacity = "0";
    document.querySelector(".hero__main-content").style.opacity = "0";
  } else if (frame >= 70 && frame < 100) {
    document.querySelector(".hero-scroll-one").style.opacity = "0";
    document.querySelector(".hero-scroll-two").style.opacity = "0";
    document.querySelector(".hero-scroll-three").style.opacity = "1";
    document.querySelector(".hero__main-content").style.opacity = "0";
  } else if (frame >= 100) {
    document.querySelector(".hero-scroll-one").style.opacity = "0";
    document.querySelector(".hero-scroll-two").style.opacity = "0";
    document.querySelector(".hero-scroll-three").style.opacity = "0";
    document.querySelector(".hero__main-content").style.opacity = "1";
  }

  console.log(frame);
});
