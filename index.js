var navlinks = document.getElementById("nav-links");

document.querySelectorAll(".icon")[0].addEventListener("click",function(){

    navlinks.style.right = "-200px";
});

document.querySelectorAll(".icon")[1].addEventListener("click",function(){

    navlinks.style.right = "0";
});

