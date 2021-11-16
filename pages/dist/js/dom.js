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
      window.location.origin +
        "/katalog/ajax.php?clothes=" +
        button.getAttribute("data-id"),
      function (data) {
        id = data["id"];
        console.log(id);
        img = data["gambar"];
        link = data["link"];
        const clothObject = composeClothObject(id, img, link);
        clothes.push(clothObject);
        updateDataToStorage();
        location.href = "../mixing";
      }
    );
  } else if (button.getAttribute("data-item") == "pants") {
    console.log("yow");
    ajax_get(
      window.location.origin +
        "/katalog/ajax.php?pants=" +
        button.getAttribute("data-id"),
      function (data) {
        id = data["id"];
        console.log(id);
        img = data["gambar"];
        link = data["link"];
        const pantsObject = composePantsObject(id, img, link);
        pants.push(pantsObject);
        updateDataToStorage();
        location.href = "../mixing";
      }
    );
  } else if (button.getAttribute("data-item") == "shoes") {
    console.log("yow3");
    ajax_get(
      window.location.origin +
        "/katalog/ajax.php?shoes=" +
        button.getAttribute("data-id"),
      function (data) {
        id = data["id"];
        console.log(id);
        img = data["gambar"];
        link = data["link"];
        const shoesObject = composeShoesObject(id, img, link);
        shoes.push(shoesObject);
        updateDataToStorage();
        location.href = "../mixing";
      }
    );
  }

  //   emptyCheck();
}
