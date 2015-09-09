$(function () {

$.scrollify({
	section: "section",
	sectionName: "section-name",
	easing: "easeOutExpo",
	scrollSpeed: 1100,
	offset: 0,
	scrollbars: true,
	before: function () {
	},
	after: function () {
	},
	afterResize: function () {
	}
});

function initialize() {

	var mapCanvas = document.getElementById('map');
	var mapOptions = {
		center: new google.maps.LatLng(32.014728, 34.787266),
		zoom: 14,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	var map = new google.maps.Map(mapCanvas, mapOptions)
}

google.maps.event.addDomListener(window, 'load', initialize);


function display_to_top(){

    var offset = $('.icon-chevron-up').offset().top;

    if(offset < $( window ).height()){
        $('.icon-chevron-up').css('visibility','hidden');
    }else{
        $('.icon-chevron-up').css('visibility','visible');
    }
}

    display_to_top();

	$(window).on('scroll', function () {
        display_to_top()
	});
	$('.icon-chevron-up').on('click', function () {
		$(window).scrollTo('0px',200);
	});

});