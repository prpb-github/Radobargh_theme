const searchBarType2 = document.querySelector(".search-bar-container");
const magnifier = document.querySelector(".magnifier");

magnifier.addEventListener("click",()=>{
    searchBarType2.classList.toggle("active");
});