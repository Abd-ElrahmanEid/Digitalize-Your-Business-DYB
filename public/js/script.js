let navToggler = document.querySelector('.navbar-toggler i')

$(".navbar-toggler").click(function(){
    $(".navbar-nav").toggleClass("transform-nav");
    $(".navbar-overlay").toggleClass("navbar-display");

})

$(".fas fa-bars").click(function(){
    $(".navbar-overlay").toggleClass("navbar-display")
})

$(".navbar-overlay").click(function(){
    $(".navbar-nav").removeClass("transform-nav");
    $(".navbar-overlay").removeClass("navbar-display");
    $(".navbar-collapse").removeClass("show");
});





//---------------------------------------scroll--------------------------------------------------------------------


let hide = document.querySelector(".hide")


window.onscroll = function() {

    if (window.scrollY > 500) {
        hide.style.display = 'block'
    } else {
        hide.style.display = 'none'
    }


}


