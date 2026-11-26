/*const spiningImageArray = [
  {
    name: "Bloom shoe",
    videoUrl: "image_video\\shoe_turntable_1630x1304.webm",
  },
  {
    name: "Bloom bottle",
    videoUrl: "image_video\\bottle_360_inåt_512samples.webm",
  },
]; */

const lifeStyleImages = [
  {
    name: "blackColorButton",
    imageUrl: "image_video\\Lifestyle_Green 1.png",
  },
  {
    name: "brownColorButton",
    imageUrl: "image_video\\Lifestyle_brown 1.png",
  },
  {
    name: "yellowColorButton",
    imageUrl: "image_video\\Lifestyle_Beige 1.png",
  },
];

const lifeStyleImage = document.querySelector(".secondBanner > img");

const colorButtonSecondBanner = document.querySelectorAll(
  ".secondProductBannerDescription > .colorButtons > button",
);

const spiningProductVideo = document.querySelector(".productBanner video");
const spiningProductVideoSource = document.querySelector(
  ".productBanner video > source",
);

const productCards = document.querySelectorAll(".card");

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

productCards.forEach((productCard) => {
  productCard.querySelector("div").addEventListener("click", () => {
    const productName = productCard.querySelector("h3");
    spiningImageArray.forEach((video) => {
      if (video.name == productName.textContent) {
        spiningProductVideoSource.src = video.videoUrl;
        spiningProductVideo.load();
      }
    });
  });
});

colorButtonSecondBanner.forEach((colorButton) => {
  colorButton.addEventListener("click", () => {
    colorButtonSecondBanner.forEach((button) => {
      if (button.classList.contains("colorButtonActive")) {
        button.classList.remove("colorButtonActive");
      }
    });

    lifeStyleImages.forEach((image) => {
      colorButton.classList.add("colorButtonActive");
      if (colorButton.classList.contains(image.name)) {
        lifeStyleImage.src = image.imageUrl;
        lifeStyleImage.load();
      }
    });
  });
});
