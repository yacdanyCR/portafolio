const $switchMode = document.getElementById("switchMode");
const $switchNavbar=document.getElementById("sidebar");
const $light=document.querySelectorAll(".bg-white");
const $cardLight=document.querySelectorAll(".card");
const $btnUp=document.getElementById("menu-btn");
let dark = true;


$switchMode.addEventListener("click", (e) => {
    if (dark) {
        $switchMode.classList.remove("bi-moon-stars-fill");
        $switchMode.classList.add("bi-brightness-high-fill");


        $light.forEach(element => {
            element.classList.remove("bg-white");
        });

        $cardLight.forEach(element => {
            element.classList.remove("card")
        });

        document.body.classList.remove("bg-light");
        document.body.classList.add("bg-dark");
        document.body.style.color="white";
        $switchNavbar.classList.remove("side_light");
        $switchNavbar.classList.remove("side_dark");
       
        dark = false;
    } else {
        $switchMode.classList.remove("bi-brightness-high");
        $switchMode.classList.add("bi-moon-stars-fill");

        $light.forEach(element => {
            element.classList.remove("bg-dark");
            element.classList.add("bg-white");
        });

        $cardLight.forEach(element => {
            element.classList.add("card");
        });

        document.body.classList.remove("bg-dark");
        document.body.classList.add("bg-light");
        $switchNavbar.classList.remove("side_dark");
        $switchNavbar.classList.add("side_light");
        document.body.style.removeProperty("color");
        dark = true;
    }
})