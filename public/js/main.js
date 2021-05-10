/* =================================
------------------------------------
	Cryptocurrency - Landing Page Template
	Version: 1.0
 ------------------------------------ 
 ====================================*/


'use strict';


$(window).on('load', function() {
	/*------------------
		Preloder
	--------------------*/
	$(".loader").fadeOut(); 
	$("#preloder").delay(400).fadeOut("slow");

});

(function($) {

	/*------------------
		Navigation
	--------------------*/
	$('.responsive-bar').on('click', function(event) {
		$('.main-menu').slideToggle(400);
		event.preventDefault();
	});


	/*------------------
		Background set
	--------------------*/
	$('.set-bg').each(function() {
		var bg = $(this).data('setbg');
		$(this).css('background-image', 'url(' + bg + ')');
	});

	
	/*------------------
		Review
	--------------------*/
	var review_meta = $(".review-meta-slider");
    var review_text = $(".review-text-slider");


    review_text.on('changed.owl.carousel', function(event) {
		review_meta.trigger('next.owl.carousel');
	});

	review_meta.owlCarousel({
		loop: true,
		nav: false,
		dots: true,
		items: 3,
		center: true,
		margin: 20,
		autoplay: true,
		mouseDrag: false,
	});


	review_text.owlCarousel({
		loop: true,
		nav: true,
		dots: false,
		items: 1,
		margin: 20,
		autoplay: true,
		navText: ['<i class="ti-angle-left"><i>', '<i class="ti-angle-right"><i>'],
		animateOut: 'fadeOutDown',
    	animateIn: 'fadeInDown',
	});



	 /*------------------
		Contact Form
	--------------------*/
    $(".check-form").focus(function () {
        $(this).next("span").addClass("active");
    });
    $(".check-form").blur(function () {
        if ($(this).val() === "") {
            $(this).next("span").removeClass("active");
        }
    });


})(jQuery);

/*[ Fixed Header ]
    ===========================================================*/
    // var header = $('header');
    // var logo = $(header).find('.logo img');
    // var linkLogo1 = $(logo).attr('src');
    // var linkLogo2 = $(logo).data('logofixed');


    // $(window).on('scroll',function(){
    //     if($(this).scrollTop() > 5 && $(this).width() > 992) {
    //         $(logo).attr('src',linkLogo2);
    //         $(header).addClass('header-fixed');
    //     }
    //     else {
    //         $(header).removeClass('header-fixed');
    //         $(logo).attr('src',linkLogo1);
    //     }
        
    // });
	window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("nav1").style.color="#20201F";	
	document.getElementById("nav2").style.color="#20201F";	
	document.getElementById("nav3").style.color="#20201F";	
	document.getElementById("nav4").style.color="#20201F";	
	document.getElementById("nav5").style.color="#20201F";	
  } else {
	document.getElementById("nav1").style.color="white";
	document.getElementById("nav2").style.color="white";
	document.getElementById("nav3").style.color="white";
	document.getElementById("nav4").style.color="white";
	document.getElementById("nav5").style.color="white";
	
  }
}

