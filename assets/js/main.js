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
});
