let topPosition = 0;

function openMobileMenu() {
  topPosition = window.scrollY;

  const mobileMenu = document.querySelector(".header-nav-mobile");
  mobileMenu.style.display = "flex";
  document.querySelector(".hide-menu-el").style.display = "none";
  document.body.style.position = "fixed";
  document.body.style.top = `-${topPosition}px`;
  document.body.style.left = 0;
}

function closeMobileMenu() {
  const mobileMenu = document.querySelector(".header-nav-mobile");
  mobileMenu.style.display = "none";
  document.querySelector(".hide-menu-el").style.display = "block";
  document.body.style.position = "";
  document.body.style.top = "";
  document.body.style.left = "";
  window.scrollTo(0, topPosition);
}
document.querySelectorAll(".mobile__menu__li").forEach((li) => {
  li.addEventListener("click", () => closeMobileMenu());
});
