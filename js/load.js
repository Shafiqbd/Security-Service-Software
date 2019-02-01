//
//$(document).ready(function () {
//    var header_height = $('.header_warp').height();
//    var w = window.innerWidth;
//    if (w > 981) {
//        
//        $(window).scroll(function (event) {
//            var header = $('.header_warp');
//            var  scroll = $(window).scrollTop();
//            event.preventDefault();
//            var hash = this.hash;
//            
//            if (scroll >= 70) {
//                header.addClass('cus_nav');
//                $('.he_fixed').css('height': header_height +'px');
//
//            }else {
//                header.removeClass('cus_nav');
//                $('.he_fixed').css('height': '0px');
//            }
//
//        });
//        $('html, body').animate({
//            scrollTop: $(hash).offset().top
//        }, 1000, function () {
//            window.location.hash = hash;
//        });
//
//    }
//});
