// THIS SECTION IS FOR BUTTONS ONLY -------------------------

const btn = document.querySelectorAll(".btn_default");

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

const hamburgerBtn = document.getElementById("nav_toggle-btn");
const outsideLinks = document.querySelectorAll("footer a");
const headerLinks = document.querySelector(".site_branding a");
hamburgerBtn.addEventListener("click", () => {
  //
  document.querySelector("body").classList.toggle("active-nav");
  hamburgerBtn.setAttribute("aria-pressed", "true");
  //

  if (document.querySelector("body").classList.contains("active-nav")) {
    //
    document.querySelector(".nav_module-container ").style.display = "grid";
    setTimeout(() => {
      document.querySelector(".nav_module-container ").style.opacity = "1";
    }, 1);
    //
    document.querySelector("body").style.overflow = "hidden";
    document.querySelector(".hamburger_text").innerText = "EXIT";
    outsideLinks.forEach((a) => {
      a.setAttribute("tabindex", "-1");
    });
    headerLinks.setAttribute("tabindex", "-1");
    document
      .querySelector(".footer_input-email")
      .setAttribute("tabindex", "-1");
    document
      .querySelector(".footer_input-submit")
      .setAttribute("tabindex", "-1");
  } else {
    //
    document.querySelector(".nav_module-container ").style.opacity = "0";
    setTimeout(() => {
      document.querySelector(".nav_module-container ").style.display = "none";
    }, 500);
    //
    document.querySelector(".nav_module-container ").style.display = "grid";
    hamburgerBtn.setAttribute("aria-pressed", "false");
    document.querySelector("body").style.overflow = "auto";
    document.querySelector(".hamburger_text").innerText = "MENU";
    outsideLinks.forEach((a) => {
      a.setAttribute("tabindex", "0");
    });
    headerLinks.setAttribute("tabindex", "0");
    document.querySelector(".footer_input-email").setAttribute("tabindex", "0");
    document
      .querySelector(".footer_input-submit")
      .setAttribute("tabindex", "0");
  }
});

// nav link effects
