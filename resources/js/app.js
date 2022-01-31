require('./bootstrap');
import Alpine from 'alpinejs';
// import jQuery from './jquery-3.6.0.slim.min';  //deleted later, and installed with NPM
window.Alpine = Alpine;
Alpine.start();


window.$ = window.jQuery = require('jquery'); //jquery added here after appling npm install --save jquery

require('./slick-1.8.1.min');       //slick added here

jQuery(window).scroll(function() {        //for navbar
    const scroll = jQuery(window).scrollTop();

    if (scroll >= 50) {
        jQuery('.sticky-header').addClass('sticky-header-active');
    } else {
        jQuery('.sticky-header').removeClass('sticky-header-active');
    }
});

jQuery(document).ready(function ($) {   //for slick slider
    $('.gallery-slider').slick({
            asNavFor: '.thumbnail-slider',
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            prevArrow: '<svg class="prevArrowBtn" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M20 40C8.9543 40 -2.7141e-06 31.0457 -1.74846e-06 20C-7.8281e-07 8.9543 8.95431 -2.7141e-06 20 -1.74846e-06C31.0457 -7.8281e-07 40 8.9543 40 20C40 31.0457 31.0457 40 20 40ZM16.1206 13.5198C15.7554 13.1055 15.1632 13.1055 14.798 13.5198L9.58704 19.4308C9.22182 19.8451 9.22182 20.5168 9.58704 20.931L14.798 26.8421C15.1632 27.2563 15.7554 27.2563 16.1206 26.8421C16.4858 26.4278 16.4858 25.7561 16.1206 25.3418L12.4912 21.2248L29.6865 21.2248C30.2388 21.2248 30.6865 20.7771 30.6865 20.2248C30.6865 19.6725 30.2388 19.2248 29.6865 19.2248L12.4138 19.2248L16.1206 15.02C16.4858 14.6057 16.4858 13.934 16.1206 13.5198Z" fill="#ffffff"/></svg>',
            nextArrow: '<svg class="nextArrowBtn" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M20 3.49691e-06C31.0457 5.4282e-06 40 8.95431 40 20C40 31.0457 31.0457 40 20 40C8.9543 40 1.56562e-06 31.0457 3.49691e-06 20C5.4282e-06 8.95431 8.95431 1.56562e-06 20 3.49691e-06ZM23.8794 26.4802C24.2446 26.8945 24.8368 26.8945 25.202 26.4802L30.413 20.5692C30.7782 20.1549 30.7782 19.4833 30.413 19.069L25.202 13.1579C24.8368 12.7437 24.2446 12.7437 23.8794 13.1579C23.5142 13.5722 23.5142 14.2439 23.8794 14.6582L27.5088 18.7752L10.3135 18.7752C9.7612 18.7752 9.31348 19.2229 9.31348 19.7752C9.31348 20.3275 9.76119 20.7752 10.3135 20.7752L27.5862 20.7752L23.8794 24.98C23.5142 25.3943 23.5142 26.066 23.8794 26.4802Z" fill="#ffffff"/></svg>', //fill="#7C8B9C"
    });
    $('.thumbnail-slider').slick({
            asNavFor: '.gallery-slider',
            slidesToShow: 5,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            centerMode: true,
            focusOnSelect: true,
            centerPadding: '30px',
            prevArrow: '<i class="fa fa-angle-left slick-prev prevArrowBtn"></i>',
            nextArrow: '<i class="fa fa-angle-right slick-next nextArrowBtn"></i>'
    });


    // Notice Panel
    setTimeout(() => {
        $("#notice").slideUp("slow");
     }, 2000);


    // Open Reply Box
    $('#reply-box-open').on('click', function(){
        $(this).fadeOut();
        $("#reply-delete-btn").fadeOut();
        $("#reply-box").slideDown('slow');
    });
    $('#cancel-reply-btn').on('click', function(){
        $('#reply-delete-btn').fadeIn();
        $('#reply-box-open').fadeIn();
        $("#reply-box").slideUp('slow');
    });


});


