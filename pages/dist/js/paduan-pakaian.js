document.addEventListener("DOMContentLoaded", function () {
  let clothes_imagesAreaImages = document.querySelectorAll(
    "#cloth .images-area img"
  );
  let clothes_imagesAreaFirstImage = document.querySelector(
    "#cloth .images-area .firstImage"
  );

  let clothes_previousBtn = document.querySelector(".previous-btn#pick_cloth");
  let clothes_nextBtn = document.querySelector(".next-btn#pick_cloth");
  let clothes_currentImageCount = 1;

  let clothes_sliderController;

  let pants_imagesAreaImages = document.querySelectorAll(
    "#pants .images-area img"
  );
  let pants_imagesAreaFirstImage = document.querySelector(
    "#pants .images-area .firstImage"
  );

  let pants_previousBtn = document.querySelector(".previous-btn#pick_pants");
  let pants_nextBtn = document.querySelector(".next-btn#pick_pants");
  let pants_currentImageCount = 1;

  let pants_sliderController;

  let shoes_imagesAreaImages = document.querySelectorAll(
    "#shoes .images-area img"
  );
  let shoes_imagesAreaFirstImage = document.querySelector(
    "#shoes .images-area .firstImage"
  );

  let shoes_previousBtn = document.querySelector(".previous-btn#pick_shoes");
  let shoes_nextBtn = document.querySelector(".next-btn#pick_shoes");
  let shoes_currentImageCount = 1;

  let shoes_sliderController;

  clothes_previousBtn.addEventListener("click", clothes_previousImage);
  clothes_nextBtn.addEventListener("click", clothes_nextImage);

  // Previous Image Function
  function clothes_previousImage() {
    if (clothes_currentImageCount === 1) {
      return false;
    } else {
      clothes_currentImageCount--;
      clothes_sliderController();
    }
  }

  // Next Image Function
  function clothes_nextImage() {
    if (clothes_currentImageCount === clothes_imagesAreaImages.length) {
      return false;
    } else {
      clothes_currentImageCount++;
      clothes_sliderController();
    }
  }

  // Slider Controler Function
  (clothes_sliderController = function () {
    activeButton();

    let currentImageMinusOne = clothes_currentImageCount - 1;
    clothes_imagesAreaFirstImage.style.marginLeft = `-${
      210 * currentImageMinusOne
    }px`;
    console.log(600 * currentImageMinusOne);
  })();

  function removeAllActive(targetElement) {
    for (var i = 0; i < targetElement.length; i++) {
      targetElement[i].classList.remove("active");
    }
  }

  function activeButton() {
    clothes_currentImageCount === 1
      ? clothes_previousBtn.classList.add("disabled")
      : clothes_previousBtn.classList.remove("disabled");

    // If The Current Image Count Equle clothes_imagesAreaImages.length
    clothes_currentImageCount === clothes_imagesAreaImages.length
      ? clothes_nextBtn.classList.add("disabled")
      : clothes_nextBtn.classList.remove("disabled");
  }

  pants_previousBtn.addEventListener("click", pants_previousImage);
  pants_nextBtn.addEventListener("click", pants_nextImage);

  // Previous Image Function
  function pants_previousImage() {
    if (pants_currentImageCount === 1) {
      return false;
    } else {
      pants_currentImageCount--;
      pants_sliderController();
    }
  }

  // Next Image Function
  function pants_nextImage() {
    if (pants_currentImageCount === pants_imagesAreaImages.length) {
      return false;
    } else {
      pants_currentImageCount++;
      pants_sliderController();
    }
  }

  // Slider Controler Function
  (pants_sliderController = function () {
    activeButton();

    let currentImageMinusOne = pants_currentImageCount - 1;
    pants_imagesAreaFirstImage.style.marginLeft = `-${
      210 * currentImageMinusOne
    }px`;
    console.log(600 * currentImageMinusOne);
  })();

  function removeAllActive(targetElement) {
    for (var i = 0; i < targetElement.length; i++) {
      targetElement[i].classList.remove("active");
    }
  }

  function activeButton() {
    pants_currentImageCount === 1
      ? pants_previousBtn.classList.add("disabled")
      : pants_previousBtn.classList.remove("disabled");

    // If The Current Image Count Equle pants_imagesAreaImages.length
    pants_currentImageCount === pants_imagesAreaImages.length
      ? pants_nextBtn.classList.add("disabled")
      : pants_nextBtn.classList.remove("disabled");
  }

  shoes_previousBtn.addEventListener("click", shoes_previousImage);
  shoes_nextBtn.addEventListener("click", shoes_nextImage);

  // Previous Image Function
  function shoes_previousImage() {
    if (shoes_currentImageCount === 1) {
      return false;
    } else {
      shoes_currentImageCount--;
      shoes_sliderController();
    }
  }

  // Next Image Function
  function shoes_nextImage() {
    if (shoes_currentImageCount === shoes_imagesAreaImages.length) {
      return false;
    } else {
      shoes_currentImageCount++;
      shoes_sliderController();
    }
  }

  // Slider Controler Function
  (shoes_sliderController = function () {
    activeButton();

    let currentImageMinusOne = shoes_currentImageCount - 1;
    shoes_imagesAreaFirstImage.style.marginLeft = `-${
      210 * currentImageMinusOne
    }px`;
    console.log(600 * currentImageMinusOne);
  })();

  function removeAllActive(targetElement) {
    for (var i = 0; i < targetElement.length; i++) {
      targetElement[i].classList.remove("active");
    }
  }

  function activeButton() {
    shoes_currentImageCount === 1
      ? shoes_previousBtn.classList.add("disabled")
      : shoes_previousBtn.classList.remove("disabled");

    // If The Current Image Count Equle shoes_imagesAreaImages.length
    shoes_currentImageCount === shoes_imagesAreaImages.length
      ? shoes_nextBtn.classList.add("disabled")
      : shoes_nextBtn.classList.remove("disabled");
  }
});
