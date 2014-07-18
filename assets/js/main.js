/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
	if ($('.selectpicker').length > 0) {
		$('.selectpicker').selectpicker();
	}

	if ($('#frm_login #login').length > 0) {
		$('#frm_login #login').on('mouseover mousemove', function() {
			$(this).attr('src', './assets/img/btn_login_hover.png');
		}).mouseout(function() {
			$(this).attr('src', './assets/img/btn_login.png');
		});
	}

	if ($('#page-selection-property').length > 0) {
		$('#page-selection-property').bootpag({
			total: 9,
			page: 2,
			maxVisible: 5,
			href: "#pro-page-{{number}}",
			leaps: false,
			next: 'Next',
			prev: 'Prev'
		}).on('page', function(event, num) {
			;
		});
	}

	if ($('#page-selection-note').length > 0) {
		$('#page-selection-note').bootpag({
			total: 9,
			page: 3,
			maxVisible: 5,
			href: "#pro-page-{{number}}",
			leaps: false,
			next: 'Next',
			prev: 'Prev'
		}).on('page', function(event, num) {
			;
		});
	}

	if ($('#page-selection-listing').length > 0) {
		$('#page-selection-listing').bootpag({
			total: 20,
			page: 3,
			maxVisible: 8,
			href: "#pro-page-{{number}}",
			leaps: false,
			next: 'Next',
			prev: 'Prev'
		}).on('page', function(event, num) {
			;
		});
	}

	$('.listing-control a').click(function() {
		if ($(this).parents('.listing-wrapper').hasClass(('expand'))) {
			$(this).parents('.listing-wrapper').removeClass('expand');
		} else {
			$(this).parents('.listing-wrapper').addClass('expand');
		}
	});

	if ($('#map-box').length > 0) {
		var defLocation = {
			lat: 51.923481,
			lon: 4.469265
		};
		var defLatlng = new google.maps.LatLng(defLocation.lat, defLocation.lon);
		var mapOptions = {
			center: defLatlng,
			zoom: 15,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		map = new google.maps.Map(document.getElementById("map-box"), mapOptions);
	}
});
