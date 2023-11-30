// document.addEventListener("DOMContentLoaded", function () {
//     const slider = document.querySelector(".slider");
//     let counter = 1;
  
//     function slide() {
      
//       slider.style.transition = "transform 0.5s ease-in-out";
//       slider.style.transform = "translateX(" + -counter * 100 + "%)";
//       counter++;
//     }
  
//     setInterval(slide, 3000); // Change slide every 3 seconds (adjust as needed)
//   });

$('.owl-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  autoplay:true, // Bật chế độ tự chạy
  autoplayTimeout:3000,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:1
      }
  }
})