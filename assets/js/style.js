 $(document).ready(function () {

     $(".nav li").on("click", function () {
         $(".nav li").removeClass("active");
         $(this).addClass("active");
     });

     $(function () {
         $('body').on('click', '.page-scroll a', function (event) {
             var $anchor = $(this);
             $('html, body').stop().animate({
                 scrollTop: $($anchor.attr('href')).offset().top
             }, 1500, 'easeInOutExpo');
             event.preventDefault();
         });
     });
 });