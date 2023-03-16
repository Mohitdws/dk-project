var testowl = $('.our_project_slider');
testowl.owlCarousel({
    loop:true,
    margin: 30,
    nav:true,
	dots: false,
	autoplay:true,
	autoplayTimeout:5000,
	autoplayHoverPause:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

$('.next').click(function() {
    testowl.trigger('next.owl.carousel');
})
// Go to the previous item
$('.prev').click(function() {
    testowl.trigger('prev.owl.carousel', [300]);
})
$("footer.main_footer .ct_backtop").click(function (e) {
	e.preventDefault();
   $("html, body").animate({scrollTop: 0}, 500);
});


