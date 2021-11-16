document.addEventListener("DOMContentLoaded", function () {
  if (isStorageExist()) {
    loadDataFromStorage();
  }
});
document.addEventListener("ondatasaved", () => {
  console.log("loaded");
});
