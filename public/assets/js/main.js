$(window).load(function() {
	$(".loader").delay(800).fadeOut("slow");
    $("#load-over").delay(800).fadeOut("slow");

    //isotope
    var $grid = $('.grid-group').isotope({
        itemSelector: '.grid',
        masonry: {
            columnWidth:1,
        }
    });

    $grid.isotope({ filter: "*" });
        // filter items on button click
        $('.filter-button').on( 'click', 'button', function() {
        var filterValue = $(this).attr('data-filter');

        $('filter-button .btn .activeGrid').removeClass('activeGrid');
        $(this).addClass('activeGrid');

        $grid.isotope({ filter: filterValue });
    });

})

$('.menu-button').click(function(){
  	$('.section-side-header').toggleClass('open-sidebar');
});

$('.menu-button').click(function(){
  	$('.main-wrapper').toggleClass('margin-sidebar');
});

var offsetTop = $(".section-skill").offset().top;

$(window).scroll(function() {
	var height = $(window).height();
	if ($(window).scrollTop() + height > offsetTop) {
		jQuery(".progress-bar-custom").each(function() {
			jQuery(this).find(".progress-content").animate(
				{
					width: jQuery(this).attr("data-percentage")
				},
				2000
			);

			jQuery(this).find(".progress-number-mark").animate(
				{
					left: jQuery(this).attr("data-percentage")
				},
				{
					duration: 2000,
					step: function(now, fx) {
					var data = Math.round(now);
					jQuery(this).find(".percent").html(data + "%");
					}
				}
			);
		});
	}
});
//end skills progress bar

//achivement counter
$('.counter').counterUp({
	delay: 10,
	time: 2000
});
//end achivement counter

// testiminial carousel
$(document).ready(function(){
	$('.carousel-testimonial').owlCarousel({
		loop:true,
		nav:true,
		dots:true,
        autoPlay: true,
        autoPlayTimeout: 500,
		margin:25,
		responsiveClass:true,
		autoHeight:true,
		smartSpeed:800,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:2
			}
		}
	})
})

// Client carousel
$(document).ready(function(){
	$('.carousel-client').owlCarousel({
		loop:true,
		nav:true,
        dots:true,
        autoPlay: true,
        autoPlayTimeout: 500,
		margin:25,
		responsiveClass:true,
		autoHeight:true,
		smartSpeed:800,
		responsive:{
			0:{
				items:2
			},
			600:{
				items:3
			},
			1000:{
				items:4
			}
		}
	})
})
// testiminial carousel


$('a[href*=#]').bind('click', function(e) {
	e.preventDefault();
	var target = $(this).attr("href");
	$('html, body').stop().animate({
		scrollTop: $(target).offset().top
	}, 1500, function() {
		location.hash = target;
	});

	return false;
});

$(window).scroll(function() {
var scrollDistance = $(window).scrollTop();

// Assign active class to nav links while scolling
$('.jump').each(function(i) {
        if ($(this).position().top <= scrollDistance + 50) {
              $('li.active').removeClass('active');
              $('li').eq(i).addClass('active');
        }
	});
}).scroll();
// form menu jumper
