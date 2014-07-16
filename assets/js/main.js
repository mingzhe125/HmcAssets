/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
	if ($('#frm_login #login').length > 0) {
		$('#frm_login #login').on('mouseover mousemove', function() {
			$(this).attr('src', './assets/img/btn_login_hover.png');
		}).mouseout(function() {
			$(this).attr('src', './assets/img/btn_login.png');
		});
	}
});
