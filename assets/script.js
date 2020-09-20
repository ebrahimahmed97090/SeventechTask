jQuery("#carousel").owlCarousel({
    autoplay: true,
    lazyLoad: true,
    loop: true,
    margin: 20,
    /*
   animateOut: 'fadeOut',
   animateIn: 'fadeIn',
   */
    responsiveClass: true,
    autoHeight: true,
    rtl: true,
    dots: true,
    autoplayTimeout: 7000,
    smartSpeed: 800,

    responsive: {
        0: {
            items: 1
        },

        600: {
            items: 3
        },

        1024: {
            items: 4
        },

        1366: {
            items: 4
        }
    }
});
let images = document.querySelectorAll(".itm");

if (screen.availWidth > 1440) {
    alert("does not supports 4k screens yet")
}

document.addEventListener('scroll', (e) => {


    for (let z = 0; z < images.length; z++) {
        images[z].style.backgroundImage = "url('assets/images/" + z + ".jpg')";
    }
})