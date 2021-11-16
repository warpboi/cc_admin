const CLOTH_STORAGE_KEY = "FASHION_DESIGN_STORAGE_CLOTHES";
const PANTS_STORAGE_KEY = "FASHION_DESIGN_STORAGE_PANT";
const SHOES_STORAGE_KEY = "FASHION_DESIGN_STORAGE_SHOES";
// const USER_STORAGE_KEY = "USER_TODO_APP";

let clothes = [];
let pants = [];
let shoes = [];
function isStorageExist() {
  if (typeof Storage === undefined) {
    alert("Browser anda tak mendukung local storage");
    return false;
  }
  return true;
}
function saveData() {
  const cl_parsed = JSON.stringify(clothes);
  const pnt_parsed = JSON.stringify(pants);
  const sho_parsed = JSON.stringify(shoes);
  localStorage.setItem(CLOTH_STORAGE_KEY, cl_parsed);
  localStorage.setItem(PANTS_STORAGE_KEY, pnt_parsed);
  localStorage.setItem(SHOES_STORAGE_KEY, sho_parsed);
  document.dispatchEvent(new Event("ondatasaved"));
  //   saveUserData();
}

function loadDataFromStorage() {
  const cl_serializedData = localStorage.getItem(CLOTH_STORAGE_KEY);
  const pn_serializedData = localStorage.getItem(PANTS_STORAGE_KEY);
  const sho_serializedData = localStorage.getItem(SHOES_STORAGE_KEY);

  let cl_data = JSON.parse(cl_serializedData);
  let pn_data = JSON.parse(pn_serializedData);
  let sho_data = JSON.parse(sho_serializedData);

  if (cl_data !== null) clothes = cl_data;
  if (pn_data !== null) pants = pn_data;
  if (pn_data !== null) shoes = sho_data;

  document.dispatchEvent(new Event("ondataloaded"));
}

function updateDataToStorage() {
  if (isStorageExist()) {
    saveData();
  }
}

function composeClothObject(id, img, link) {
  return {
    id,
    img,
    link,
  };
}
function composePantsObject(id, img, link) {
  return {
    id,
    img,
    link,
  };
}
function composeShoesObject(id, img, link) {
  return {
    id,
    img,
    link,
  };
}

function findTodo(todoId) {
  for (todo of todos) {
    if (todo.id === todoId) return todo;
  }
  return null;
}

function findTodoIndex(todoId) {
  let index = 0;
  for (todo of todos) {
    if (todo.id === todoId) return index;

    index++;
  }
  return -1;
}
