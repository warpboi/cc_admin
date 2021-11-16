let clothesListContainer = document.querySelector(
  "#pick_cloth_img .images-area"
);

document.addEventListener("DOMContentLoaded", function () {
  if (clothes.length > 0) {
    console.log(clothesListContainer);
    clothes
      .slice()
      .reverse()
      .forEach((e, i) => {
        const imageCloth = document.createElement("img");
        if (i == 0) {
          imageCloth.classList.add("firstImage");
        }
        imageCloth.src = base_url + "/uploads/" + e["img"] + ".jpg";
        clothesListContainer.append(imageCloth);
      });
  } else {
    console.log("kosong");
    const toCatalog = document.createElement("a");
    var linkText = document.createTextNode("Add item");
    toCatalog.appendChild(linkText);
    toCatalog.classList.add("btn", "pick-btn");
    toCatalog.href = "./katalog/clothes";
    clothesListContainer.append(toCatalog);
  }
});

let pantsListContainer = document.querySelector("#pick_pants_img .images-area");

document.addEventListener("DOMContentLoaded", function () {
  if (pants.length > 0) {
    console.log(pantsListContainer);
    pants
      .slice()
      .reverse()
      .forEach((e, i) => {
        const imageCloth = document.createElement("img");
        if (i == 0) {
          imageCloth.classList.add("firstImage");
        }
        imageCloth.src = base_url + "/uploads/" + e["img"] + ".jpg";
        pantsListContainer.append(imageCloth);
      });
  } else {
    console.log("kosong");
    const toCatalog = document.createElement("a");
    var linkText = document.createTextNode("Add item");
    toCatalog.appendChild(linkText);
    toCatalog.classList.add("btn", "pick-btn");
    toCatalog.href = "./katalog/pants";
    pantsListContainer.append(toCatalog);
  }
});
let shoesListContainer = document.querySelector("#pick_shoes_img .images-area");

document.addEventListener("DOMContentLoaded", function () {
  if (shoes.length > 0) {
    console.log(shoesListContainer);
    shoes
      .slice()
      .reverse()
      .forEach((e, i) => {
        const imageCloth = document.createElement("img");
        if (i == 0) {
          imageCloth.classList.add("firstImage");
        }
        imageCloth.src = base_url + "/uploads/" + e["img"] + ".jpg";
        shoesListContainer.append(imageCloth);
      });
  } else {
    console.log("kosong");
    const toCatalog = document.createElement("a");
    var linkText = document.createTextNode("Add item");
    toCatalog.appendChild(linkText);
    toCatalog.classList.add("btn", "pick-btn");
    toCatalog.href = "./katalog/shoes";
    shoesListContainer.append(toCatalog);
  }
});
