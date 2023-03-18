
let searchForm = document.querySelector(".search-form");
let header = document.querySelector(".dropdown-menu");
document.querySelector("#search-btn").onmouseover = () => {
  searchForm.classList.toggle("active");
};
window.onscroll = () => {
  searchForm.classList.remove("active");
};
