var burger = document.getElementById("burger");
var nav = document.getElementById("nav-ul");
var first = document.getElementById("1st");
var second = document.getElementById("2nd");
var third = document.getElementById("3rd");
var html = document.getElementById("html");

burger.onclick = function () {
    if (nav.className == "open") {
        nav.className = "";
        burger.src = "assets/BurgerWhite.svg"
    } else if (nav.className == "") {
        nav.className = "open";
        burger.src = "assets/CloseWhite.svg"
    };
};

first.onclick = function () {
    html.style.fontSize = "25px";
}

second.onclick = function () {
    html.style.fontSize = "20px";
}

third.onclick = function () {
    html.style.fontSize = "15px";
}