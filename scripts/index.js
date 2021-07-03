// Hover animation for ifo on index page

var ifo = document.querySelector(".ifo");
var inphoTitleDiv = document.querySelector(".imaginary-inpho-square-title");
var inphoImageDiv = document.querySelector(".imaginary-inpho-square-image");
var imaginaryInphoSquare = document.querySelector(".imaginary-inpho");
var body = document.querySelector("body");

imaginaryInphoSquare.addEventListener("mouseover", function() {
    inphoTitleDiv.classList.add("fadeOut");
    inphoImageDiv.classList.add("fadeIn");
    //body.style.backgroundColor = "#404040";
    //body.style.color = "white";
});

imaginaryInphoSquare.addEventListener("mouseout", function() {
    inphoTitleDiv.classList.remove("fadeOut");
    inphoImageDiv.classList.remove("fadeIn");
    //body.style.backgroundColor = "#f7f7f7";
    //body.style.color = "black";
});

// Hover animation for about me

var aboutSquare = document.querySelector(".about-me");
var aboutTitleDiv = document.querySelector(".about-title");
var aboutHoverDiv = document.querySelector(".about-hover");
var i = 0;
var txt = "Hi! My name is Ian Van Harten. This is my developer portfolio website, and I've included a bit of extra stuff I'm interested in as well. If you are still reading this, please go ahead and click and you'll go right to the actual about page...";
var speed = 85;

function typeEffect()
{
    if (i < txt.length)
    {
        document.querySelector(".about-hover-text").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeEffect, speed);
    }
}

aboutSquare.addEventListener("mouseover", function() {
    aboutTitleDiv.classList.add("fadeOut");
    aboutHoverDiv.classList.add("fadeIn");
    typeEffect();
});

aboutSquare.addEventListener("mouseout", function() {
    document.querySelector(".about-hover-text").innerHTML = "";
    aboutTitleDiv.classList.remove("fadeOut");
    aboutHoverDiv.classList.remove("fadeIn");
    i = 0;
});

