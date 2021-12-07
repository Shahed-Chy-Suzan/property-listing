require('./bootstrap');
import Alpine from 'alpinejs';
// import jQuery from './jquery-3.6.0.slim.min';  //deleted later, and installed with NPM
window.Alpine = Alpine;
Alpine.start();


window.$ = window.jQuery = require('jquery'); //jquery added here after appling npm install --save jquery

require('./slick-1.8.1.min');       //slick added here

jQuery(window).scroll(function() {                //for navbar
    const scroll = jQuery(window).scrollTop();

    if (scroll >= 50) {
        jQuery('.sticky-header').addClass('sticky-header-active');
    } else {
        jQuery('.sticky-header').removeClass('sticky-header-active');
    }
});

jQuery(document).ready(function ($) {   //for slick slider
    $('.gallery-slider').slick({
            asNavFor: '.thumbnail-slider'
        // slidesToShow: 1,
        // slidesToScroll: 1,
        // arrows: true,
        // fade: false,
        // asNavFor: ".thumbnail-slider",
        // prevArrow: '<i class="fa fa-angle-left slick-prev"></i>',
        // nextArrow: '<i class="fa fa-angle-right slick-next"></i>'
    });
    $('.thumbnail-slider').slick({
            slidesToShow: 3,
            asNavFor: '.gallery-slider',
            centerMode: true,
            focusOnSelect: true
        // slidesToShow: 7,
        // slidesToScroll: 1,
        // arrows: true,
        // centerPadding: '20px',
        // asNavFor: ".gallery-slider",
        // dots: false,
        // centerMode: true,
        // focusOnSelect: true,
        // prevArrow: '<i class="fa fa-angle-left slick-prev"></i>',
        // nextArrow: '<i class="fa fa-angle-right slick-next"></i>'
    });
});
