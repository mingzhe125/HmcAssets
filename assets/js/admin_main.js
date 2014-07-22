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

    $('.listing-control a').click(function() {
        if ($(this).parents('.investor-wrapper').hasClass(('expand'))) {
            $(this).parents('.investor-wrapper').removeClass('expand');
        } else {
            $(this).parents('.investor-wrapper').addClass('expand');
        }
    });

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
});