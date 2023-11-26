const body = document.querySelector("body");
const nav = document.querySelector("nav");
const sidebarOpen = document.querySelector(".sidebarOpen");
const siderbarClose = document.querySelector(".siderbarClose");
const title = document.querySelector(".title");

sidebarOpen.addEventListener("click", () => {
    nav.classList.add("active-navbar");
    title.style.display = "none";
});

siderbarClose.addEventListener("click", () => {
    title.style.display = "block";
});

body.addEventListener("click", e => {
    let clickedElm = e.target;

    if (!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")) {
        nav.classList.remove("active-navbar");
        title.style.display = "block";
    }
});

let accountBox = document.querySelector('.nav-bar .account-box');

document.querySelector('#user-btn').onclick = () => {
    accountBox.classList.toggle('active');
    navbar.classList.remove('active');
}