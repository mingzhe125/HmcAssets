/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
    if ($('.selectpicker').length > 0) {
        $('.selectpicker').selectpicker();
    }

    $('.table .action a.disabled').on('mouseover', function() {
        if ($(this).hasClass('disabled')) {
            $(this).html('Enable').css('color', '#c61e1e');
        } else {
            $(this).html('Disable').css('color', '#888');
        }
    }).on('mouseout', function() {
        if ($(this).hasClass('disabled')) {
            $(this).html('Disabled').css('color', '#888');
        } else {
            $(this).html('Enabled').css('color', '#c61e1e');
        }
    }).on('click', function() {
        if ($(this).hasClass('disabled')) {
            $(this).html('Enabled').css('color', '#c61e1e').removeClass('disabled').addClass('enabled');
        } else {
            $(this).html('Disabled').css('color', '#888').removeClass('enabled').addClass('disabled');
        }
    });

    $('.table .action a.enabled').on('mouseover', function() {
        if ($(this).hasClass('enabled')) {
            $(this).html('Disable').css('color', '#888');
        } else {
            $(this).html('Enable').css('color', '#c61e1e');
        }
    }).on('mouseout', function() {
        if ($(this).hasClass('enabled')) {
            $(this).html('Enabled').css('color', '#c61e1e');
        } else {
            $(this).html('Disabled').css('color', '#888');
        }
    }).on('click', function() {
        if ($(this).hasClass('disabled')) {
            $(this).html('Enabled').css('color', '#c61e1e').removeClass('disabled').addClass('enabled');
        } else {
            $(this).html('Disabled').css('color', '#888').removeClass('enabled').addClass('disabled');
        }
    });
});