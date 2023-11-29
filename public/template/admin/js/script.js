document.addEventListener("DOMContentLoaded", function () {
    const slider = document.querySelector(".slider");
    let counter = 1;
  
    function slide() {
      slider.style.transition = "transform 0.5s ease-in-out";
      slider.style.transform = "translateX(" + -counter * 100 + "%)";
      counter++;
    }
  
    setInterval(slide, 3000); // Change slide every 3 seconds (adjust as needed)
  });