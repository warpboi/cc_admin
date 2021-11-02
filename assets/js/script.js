const burger = document.querySelector(".menu_burger");
const barStack = document.querySelector(".menu_burger-stack");
const barClose = document.querySelector(".menu_burger-close");
const menu_responsive = document.querySelector(".menu-container");

document.addEventListener("DOMContentLoaded", (event) => {
  burger.addEventListener("click", () => {
    toggleNav();
  });

  // document.querySelectorAll('.nav-item').forEach(item => {
  //     item.addEventListener('click', event => {
  //       closeNav()
  //     })
  //   })
});

window.addEventListener("resize", function () {
  if (window.innerWidth > 770) {
    closeNav();
  }
});

function toggleNav() {
  burger.classList.toggle("active");
  menu_responsive.classList.toggle("active");
}
function closeNav() {
  burger.classList = "menu_burger";
  menu_responsive.classList = "menu-container";
}
