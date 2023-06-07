var html = document.getElementById("html");

burger.addEventListener('click', dropdown = function () {
    let burger = document.getElementById("burger");
    let nav = document.getElementById("nav-ul");
    if (nav.className == "open") {
        nav.className = "";
        burger.src = "assets/BurgerWhite.svg"
    } else if (nav.className == "") {
        nav.className = "open";
        burger.src = "assets/CloseWhite.svg"
    };
});

let first = document.getElementById("1st");
first.addEventListener('click', fontSize = function () {
    html.style.fontSize = "23px";
});

let second = document.getElementById("2nd");
second.addEventListener('click', fontSizeSmaller = function () {
    html.style.fontSize = "20px";
});