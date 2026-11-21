const spiningImageArray = ["image_video\shoe_turntable_1630x1304.webm"];

const hambugerMenu = document.querySelector("#hamburgerMenu");
hambugerMenu.addEventListener("click", (event) => {
  const navMenuExtender = document.querySelector(".openedMenu");
  navMenuExtender.classList.toggle("inActive");
});

const accordions = document.querySelectorAll(".accordions > div");

accordions.forEach((accordion) => {
  accordion.addEventListener("click", () => {
    const accordionIcon = accordion.querySelector("img");
    accordion.classList.toggle("inActive");
    accordion.classList.contains("inActive")
      ? (accordionIcon.src = "image_video/plusIcon.svg")
      : (accordionIcon.src = "image_video/minus_icon.svg");
  });
});
