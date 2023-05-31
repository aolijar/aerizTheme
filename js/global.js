// THIS SECTION IS FOR BUTTONS ONLY -------------------------

const btn = document.querySelectorAll(".btn-default");

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
