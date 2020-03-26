$(document).ready(function(){
	$('.hero').slick({
		dots: true,
		arrows: true,
		autoplay: true,
		infinite: true,
		speed: 300
	});
});


$(document).ready(function(){
	$('.client-reviews-slides').slick({
		arrows: true,
		autoplay: true,
		infinite: true,
		speed: 300,
		slidesToShow: 2,
        slidesToScroll: 1,
		responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
	{
      breakpoint: 768,
      settings: {
		arrows: false,
		slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
	});
});


var url = window.location.pathname;
// Will only work if string in href matches with location
$('ul.navbar-nav a[href="'+ url +'"]').parent().addClass('active');

// Will also work for relative and absolute hrefs
$('ul.navbar-nav a').filter(function() {
    return this.href == url;
}).parent().addClass('active');

