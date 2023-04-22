
let searchForm = document.querySelector(".search-form");
let header = document.querySelector(".dropdown-menu");
document.querySelector("#search-btn").onmouseover = () => {
  searchForm.classList.toggle("active");
};
window.onscroll = () => {
  searchForm.classList.remove("active");
};

let Comp1 = document.querySelector(".search-form-1");
let Comp2 = document.querySelector(".search-form-2");

document.querySelector("#compare-1").onclick = () => {
    Comp1.classList.toggle("active");
};
document.querySelector("#compare-2").onclick = () => {
    Comp2.classList.toggle("active");
};

document.querySelector("#close-1").onclick = () => {
    Comp1.classList.remove("active");
};
document.querySelector("#close-2").onclick = () => {
    Comp2.classList.remove("active");
};