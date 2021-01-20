const menu = document.querySelector('.hamburger');

const navbar = document.querySelector('.responsive-navbar');

menu.addEventListener('click', () => {
    navbar.classList.toggle("change");
})


var prevScrollpos = window.pageYOffset;

window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;

    if (prevScrollpos > currentScrollPos) {
        document.querySelector(".navbar").style.top = "0";
    } else {
        document.querySelector(".navbar").style.top = "-60px";

    }
    prevScrollpos = currentScrollPos;
}
        












