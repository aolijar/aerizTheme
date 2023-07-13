// THIS SECTION IS FOR BUTTONS ONLY ------------------------- NEED TO CHANGE LOCATION OF STORING THESE FUNCTION/HOW

function btnFillFunc() {
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
}
btnFillFunc();
// CAROUSEL =============================================
function handleBtnCarousel() {
  const listBtns = document.querySelectorAll(".section__products-tab-button");
  const indicatorBtns = document.querySelectorAll(".tab-indicator");
  const productImgs = document.querySelectorAll(".product-carousel-content");
  var oldId = 1;
  listBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      listBtns.forEach((a) => {
        a.classList.remove("section__products-tab-button--active");
        a.setAttribute("aria-selected", "false");
        a.setAttribute("aria-current", "false");
      });
      btn.setAttribute("aria-selected", "true");
      btn.setAttribute("aria-current", "true");
      btn.classList.add("section__products-tab-button--active");
      //
      var id = btn.getAttribute("data-tab-id");
      var nextOne = Number(id) + 1;
      nextOne > 8 ? (nextOne = 1) : (nextOne = Number(id) + 1);
      //
      productImgs.forEach((a) => {
        a.classList.remove("product_carousel-spotlight");
        a.classList.remove("product_carousel-spotlight-50");
        a.firstElementChild.setAttribute("tabIndex", "-1");
        a.firstElementChild.classList.remove("tab--deactivate");
        if (a.getAttribute("data-product-id") == id) {
          a.firstElementChild.setAttribute("tabIndex", "0");
          a.classList.add("product_carousel-spotlight");
          a.firstElementChild.classList.add("tab--deactivate");
        }
      });
      // console.log(id - oldId <= 0 ? (id - oldId) * -1 : id - oldId);
      // CALC TRANSITION TIME BASED ON DISTANCE
      var carouselTransition = id - oldId <= 0 ? (id - oldId) * -1 : id - oldId;
      document.querySelector(
        ".products-carousel-container"
      ).style.transition = `all ease-in-out ${
        carouselTransition * 100 + 500
      }ms`;
      //
      oldId = Number(id);
      document.querySelector(
        ".products-carousel-container"
      ).style.transform = `translateX(${(id - 1) * -11}%)`;
      // SET OPACITY DECK
      document
        .querySelector(`[data-product-id="${nextOne}"]`)
        .classList.add("product_carousel-spotlight-50");
      //
      indicatorBtns.forEach((a) => {
        a.classList.remove("section__products-tab-indicator--active");
        if (a.getAttribute("data-indicator-id") == id) {
          a.classList.add("section__products-tab-indicator--active");
        }
      });
    });
  });

  indicatorBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      indicatorBtns.forEach((a) => {
        a.classList.remove("section__products-tab-indicator--active");
      });
      btn.classList.add("section__products-tab-indicator--active");
      //
      var id = btn.getAttribute("data-indicator-id");
      var nextOne = Number(id) + 1;
      nextOne > 8 ? (nextOne = 1) : (nextOne = Number(id) + 1);
      //
      productImgs.forEach((a) => {
        a.classList.remove("product_carousel-spotlight");
        a.classList.remove("product_carousel-spotlight-50");
        a.firstElementChild.setAttribute("tabIndex", "-1");
        a.firstElementChild.classList.remove("tab--deactivate");
        if (a.getAttribute("data-product-id") == id) {
          a.firstElementChild.setAttribute("tabIndex", "0");
          a.classList.add("product_carousel-spotlight");
          a.firstElementChild.classList.add("tab--deactivate");
        }
      });
      // CALC TRANSITION TIME BASED ON DISTANCE
      var carouselTransition = id - oldId <= 0 ? (id - oldId) * -1 : id - oldId;
      document.querySelector(
        ".products-carousel-container"
      ).style.transition = `all ease-in-out ${
        carouselTransition * 100 + 500
      }ms`;
      //
      oldId = Number(id);
      //
      document.querySelector(
        ".products-carousel-container"
      ).style.transform = `translateX(${(id - 1) * -11}%)`;
      // ON DECK CLASS ADD
      document
        .querySelector(`[data-product-id="${nextOne}"]`)
        .classList.add("product_carousel-spotlight-50");
      //
      listBtns.forEach((a) => {
        a.classList.remove("section__products-tab-button--active");
        a.setAttribute("aria-selected", "false");
        a.setAttribute("aria-current", "false");
        if (a.getAttribute("data-tab-id") == id) {
          a.setAttribute("aria-selected", "true");
          a.setAttribute("aria-current", "true");
          a.classList.add("section__products-tab-button--active");
        }
      });
    });
  });
}
handleBtnCarousel();
// ==============================================================================================================================
// OPENS NAV BAR MENU ---------------
document.getElementById("nav__toggle-btn").addEventListener("click", () => {
  var hamburgerBtn = document.getElementById("nav__toggle-btn");
  var footerLinks = document.querySelectorAll("footer a");
  var headerLinks = document.querySelectorAll(".header__site-branding a");
  var deactivateTabLinks = document.querySelectorAll(".tab--deactivate");
  //
  document.querySelector("body").classList.toggle("nav__module--active");
  hamburgerBtn.setAttribute("aria-pressed", "true");
  //
  if (
    document.querySelector("body").classList.contains("nav__module--active")
  ) {
    //
    document.querySelector(".hamburger__text").innerText = "EXIT";
    //
    footerLinks.forEach((a) => {
      a.setAttribute("tabindex", "-1");
    });
    headerLinks.forEach((a) => {
      a.setAttribute("tabindex", "-1");
    });
    //
    deactivateTabLinks.forEach((a) => {
      a.setAttribute("tabindex", "-1");
    });
    //
    setTimeout(() => {
      document.querySelector(".nav__module-primary-navigation").style.opacity =
        "1";
    }, 150);
    //
  } else {
    //
    document.querySelector(".hamburger__text").innerText = "MENU";
    //
    hamburgerBtn.setAttribute("aria-pressed", "false");
    //
    footerLinks.forEach((a) => {
      a.setAttribute("tabindex", "0");
    });
    headerLinks.forEach((a) => {
      a.setAttribute("tabindex", "0");
    });
    deactivateTabLinks.forEach((a) => {
      a.setAttribute("tabindex", "0");
    });
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
  const width = document.getElementById(
    "section__hero-scroll-content-container"
  ).clientWidth;
  const height = document.getElementById(
    "section__hero-scroll-content-container"
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

  if (frame <= 14) {
    //OPACITY
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
      .querySelector(".section__hero-main-content-back")
      .classList.remove("section__hero-main-content-back--active");
    document
      .querySelector(".section__hero-main-content-forward")
      .classList.remove("section__hero-main-content-forward--active");
  } else if (frame > 15 && frame < 42) {
    // OPACITY ONLY
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
      .querySelector(".section__hero-main-content-back")
      .classList.remove("section__hero-main-content-back--active");
    document
      .querySelector(".section__hero-main-content-forward")
      .classList.remove("section__hero-main-content-forward--active");
  } else if (frame >= 42 && frame < 70) {
    // OPACITY
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
      .querySelector(".section__hero-main-content-back")
      .classList.remove("section__hero-main-content-back--active");
    document
      .querySelector(".section__hero-main-content-forward")
      .classList.remove("section__hero-main-content-forward--active");
  } else if (frame >= 70 && frame < 100) {
    // OPACITY
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
      .querySelector(".section__hero-main-content-back")
      .classList.remove("section__hero-main-content-back--active");
    document
      .querySelector(".section__hero-main-content-forward")
      .classList.remove("section__hero-main-content-forward--active");
  } else if (frame >= 100) {
    //OPACITY
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
      .querySelector(".section__hero-main-content-back")
      .classList.add("section__hero-main-content-back--active");
    document
      .querySelector(".section__hero-main-content-forward")
      .classList.add("section__hero-main-content-forward--active");
  }
}

const heroScrollObserver = new IntersectionObserver(
  (entries) => {
    if (entries[0].isIntersecting) {
      // console.log("on");
      document
        .getElementById("section__hero-scroll-content-container")
        .addEventListener("mousemove", observingHeroScrollMouse);
      window.addEventListener("scroll", observingHeroScroll);
    } else {
      // console.log("off");
      document
        .getElementById("section__hero-scroll-content-container")
        .removeEventListener("mousemove", observingHeroScrollMouse);
      window.removeEventListener("scroll", observingHeroScroll);
    }
  },
  { threshold: 0.1 }
);

heroScrollObserver.observe(
  document.getElementById("section__hero-scroll-content-container")
);

// MAKES HERO BTN SCROLL INTO VIEW ON TAB
// ==============================================================================================================================
document.getElementById("btn__hero").addEventListener("focus", () => {
  var heroBtn = document.getElementById("section__hero");
  heroBtn.scrollIntoView(false);
});

const ethosScrollObserver = new IntersectionObserver(
  (entries) => {
    if (entries[0].isIntersecting) {
      console.log("on");
      document.querySelectorAll(".text__hover-img").forEach((text) => {
        var movement = false;
        text.addEventListener("mouseenter", (e) => {
          movement = true;
          if (text.classList.contains("text__color-mask-yellow")) {
            console.log("yellow");
          } else if (text.classList.contains("text__color-mask-pink")) {
            console.log("pink");
          } else if (text.classList.contains("text__color-mask-blue")) {
            console.log("blue");
          }
        });
        text.addEventListener("mouseleave", () => {
          movement = false;
          if (text.classList.contains("text__color-mask-yellow")) {
            console.log("yellow");
          } else if (text.classList.contains("text__color-mask-pink")) {
            console.log("pink");
          } else if (text.classList.contains("text__color-mask-blue")) {
            console.log("blue");
          }
        });
        text.addEventListener("mousemove", (e) => {
          console.log(movement);
          if (movement === true) {
            var x = e.clientX;
            var y = e.clientY;
            console.log(x, y);
          }
        });
      });
      // document.querySelectorAll(".text__hover-img").forEach((text) => {});
    } else {
      console.log("off");
      document.querySelectorAll(".text__hover-img").forEach((text) => {
        text.removeEventListener("mouseenter", () => {
          if (text.classList.contains("text__color-mask-yellow")) {
            console.log("yellow");
          } else if (text.classList.contains("text__color-mask-pink")) {
            console.log("pink");
          } else if (text.classList.contains("text__color-mask-blue")) {
            console.log("blue");
          }
        });
        text.removeEventListener("mouseleave", () => {
          if (text.classList.contains("text__color-mask-yellow")) {
            console.log("yellow");
          } else if (text.classList.contains("text__color-mask-pink")) {
            console.log("pink");
          } else if (text.classList.contains("text__color-mask-blue")) {
            console.log("blue");
          }
        });
      });
    }
  },
  { threshold: 0.1 }
);

ethosScrollObserver.observe(document.getElementById("section__ethos"));
