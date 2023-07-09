const login = document.getElementById("loginjs");
const modal = document.querySelector(".modal");
const modal2 = document.querySelector(".modal2");

const modallog = document.querySelector(".container-login");
const modallog1 = document.querySelector(".container-login1");

const dk = document.getElementById("dang-ky");

login.addEventListener("click", function () {
  modal.classList.add("open");
});
dk.addEventListener("click", function () {
  modal.classList.remove("open");
  modal2.classList.add("open");
});
modal.addEventListener("click", function () {
  modal.classList.remove("open");
});

modal2.addEventListener("click", function () {
  modal2.classList.remove("open");
});

modallog.addEventListener("click", function (e) {
  e.stopPropagation();
});
modallog1.addEventListener("click", function (e) {
  e.stopPropagation();
});