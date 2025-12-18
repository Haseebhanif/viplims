 
  !function(s){"use strict";s("#sidebarToggle, #sidebarToggleTop").on("click",function(e){s("body").toggleClass("sidebar-toggled"),s(".sidebar").toggleClass("toggled"),s(".sidebar").hasClass("toggled")&&s(".sidebar .collapse").collapse("hide")}),s(window).resize(function(){s(window).width()<768&&s(".sidebar .collapse").collapse("hide"),s(window).width()<480&&!s(".sidebar").hasClass("toggled")&&(s("body").addClass("sidebar-toggled"),s(".sidebar").addClass("toggled"),s(".sidebar .collapse").collapse("hide"))}),s("body.fixed-nav .sidebar").on("mousewheel DOMMouseScroll wheel",function(e){if(768<s(window).width()){var o=e.originalEvent,l=o.wheelDelta||-o.detail;this.scrollTop+=30*(l<0?1:-1),e.preventDefault()}}),s(document).on("scroll",function(){100<s(this).scrollTop()?s(".scroll-to-top").fadeIn():s(".scroll-to-top").fadeOut()}),s(document).on("click","a.scroll-to-top",function(e){var o=s(this);s("html, body").stop().animate({scrollTop:s(o.attr("href")).offset().top},1e3,"easeInOutExpo"),e.preventDefault()})}(jQuery);

    $(document).ready(function() {
    $('#admin-datatables-min').DataTable();
} );

    jQuery(document).ready(function($) {
              $('.loop').owlCarousel({
                center: true,
                nav:false,
                    autoplay:true,
    				autoplayTimeout:10000,

                items: 2,
                loop: true,
                margin: 10,
                responsive: {
                  600: {
                    items: 2
                  }
                }
              });
             
            });

            $(".owl-item").hover(
  function () {
    $(this).addClass("owl-prev");
  },
  function () {
    $(this).removeClass("owl-prev");
  }
);

$(document).ready(function(){
  $(window).scroll(function () {
      if ($(this).scrollTop() > 50) {
        $('#click-to-top').fadeIn();
      } else {
        $('#click-to-top').fadeOut();
      }
    });
    // scroll body to 0px on click
    $('#click-to-top').click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 400);
      return false;
    });
});


var wow = new WOW({
    	offset:100,        // distance to the element when triggering the animation (default is 0)
    	mobile:false       // trigger animations on mobile devices (default is true)
  	});
	wow.init();

$('.sub-menu').on('click',function(){
  $('.user-drop-min-sub ').find('ul').slideToggle(350);
});

$('.sub-menu').on('click',function(){
  $('.down-arrow').toggleClass('fa-angle-up fa-angle-down');
});


$(document).ready(function(){
  $(".sub-menu-drop").click(function(){
    $(".sub-menu-drop").toggleClass("sub-menu-btn ");
  });
});
