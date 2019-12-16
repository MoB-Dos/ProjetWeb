$(document).ready(function() {
           $(".menu-icon").on("click", function() {
                 $("nav ul").toggleClass("showing");
                 $("nav ul").toggleClass("Grey");
           });
     });

     // Scrolling Effect

     $(window).on("scroll", function() {
           if($(window).scrollTop()) {
                 $('nav').addClass('black');
                 $('nav').removeClass('Grey');
           }

           else {
                 $('nav').removeClass('black');
                 $('nav').addClass('Grey');
           }
     })
