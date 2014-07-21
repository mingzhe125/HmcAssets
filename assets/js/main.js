/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var map = null;
var geocoder = null;
var markers = [];
$(document).ready(function() {
    if ($('#frm_login #login').length > 0) {
		$('#frm_login #login').on('mouseover mousemove', function() {
			$(this).attr('src', './assets/img/btn_login_hover.png');
		}).mouseout(function() {
			$(this).attr('src', './assets/img/btn_login.png');
		});
	}
    
	if ($('.selectpicker').length > 0) {
		$('.selectpicker').selectpicker();
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
    
	if ($('#page-investor-properties').length > 0) {
		$('#page-investor-properties').bootpag({
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

	if ($('#my_favorites_notes_page').length === 0) {
		$('.property-note').hide();
	}

	if ($('#map-result-box').length > 0) {
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
		map = new google.maps.Map(document.getElementById("map-result-box"), mapOptions);

		geocoder = new google.maps.Geocoder();
		codeAddress();
	}

});

function codeAddress() {
	var address = '1217 W 109th Street, Los Angeles, CA, USA';
	geocoder.geocode({'address': address}, function(results, status) {
		if (status === google.maps.GeocoderStatus.OK) {
			map.setCenter(results[0].geometry.location);
			var marker = new google.maps.Marker({
				map: map,
				position: results[0].geometry.location
			});

			markers.push(marker);
			var infowindow = new google.maps.InfoWindow({
				content: ""
			});

			google.maps.event.addListener(marker, 'click', function(target, elem) {
				infowindow.open(map, marker);
				$.ajax({
					type: "POST",
					url: "ajax.php",
					success: function(contentString) {
						infowindow.setContent(contentString);
					}
				});
			});
		} else {
			alert("Geocode was not successful for the following reason: " + status);
		}
	});

}
