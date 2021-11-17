let base_url = window.location.origin;
if (base_url.includes("localhost")) {
  base_url = base_url + "/cc_admin";
}
let buttonAdd = document.querySelectorAll(".btn-add");
console.log(buttonAdd[0]);
function ajaxReq() {
  if (window.XMLHttpRequest) {
    return new XMLHttpRequest();
  } else if (window.ActiveXObject) {
    return new ActiveXObject("Microsoft.XMLHTTP");
  } else {
    alert("Browser does not support XMLHTTP.");
    return false;
  }
}
function ajax_get(url, callback) {
  var xmlhttp = ajaxReq();
  xmlhttp.onreadystatechange = function () {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      console.log("responseText:" + xmlhttp.responseText);
      try {
        var data = JSON.parse(xmlhttp.responseText);
      } catch (err) {
        console.log(err.message + " in " + xmlhttp.responseText);
        return;
      }
      callback(data);
    }
  };

  xmlhttp.open("POST", url, true);
  xmlhttp.send();
}
buttonAdd.forEach((item) => {
  item.addEventListener("click", (event) => {
    addToList(event.target);
  });
});

function addToList(button) {
  if (button.getAttribute("data-item") == "clothes") {
    console.log("yow");
    ajax_get(
      base_url + "/katalog/ajax.php?clothes=" + button.getAttribute("data-id"),
      function (data) {
        id = data["id"];
        console.log(id);
        img = data["gambar"];
        link = data["link"];
        const clothObject = composeClothObject(id, img, link);
        let sameIndex = clothes.findIndex((e) => e.id === id);
        if (sameIndex != -1) {
          clothes.splice(sameIndex, 1);
        }
        clothes.push(clothObject);
        updateDataToStorage();
        location.href = base_url + "/mixing";
      }
    );
  } else if (button.getAttribute("data-item") == "pants") {
    console.log("yow");
    ajax_get(
      base_url + "/katalog/ajax.php?pants=" + button.getAttribute("data-id"),
      function (data) {
        id = data["id"];
        console.log(id);
        img = data["gambar"];
        link = data["link"];
        const pantsObject = composePantsObject(id, img, link);
        let sameIndex = pants.findIndex((e) => e.id === id);
        if (sameIndex != -1) {
          pants.splice(sameIndex, 1);
        }
        pants.push(pantsObject);
        updateDataToStorage();
        location.href = base_url + "/mixing";
      }
    );
  } else if (button.getAttribute("data-item") == "shoes") {
    console.log("yow3");
    ajax_get(
      base_url + "/katalog/ajax.php?shoes=" + button.getAttribute("data-id"),
      function (data) {
        id = data["id"];
        console.log(id);
        img = data["gambar"];
        link = data["link"];
        const shoesObject = composeShoesObject(id, img, link);
        let sameIndex = shoes.findIndex((e) => e.id === id);
        if (sameIndex != -1) {
          shoes.splice(sameIndex, 1);
        }
        shoes.push(shoesObject);
        updateDataToStorage();
        location.href = base_url + "/mixing";
      }
    );
  }

  //   emptyCheck();
}
