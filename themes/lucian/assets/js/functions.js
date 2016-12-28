var $=jQuery.noConflict();

(function($){
    "use strict";
    $(function(){

        /*------------------------------------*\
            #GLOBAL
        \*------------------------------------*/
        $(window).ready(function(){
            footerBottom();
        });

        $(window).on('resize', function(){
            footerBottom();
        });

        $(".btn-open-modal").click(function() {
            $('body').addClass("overflow-hidden");
        });

        $(".w3-closebtn").click(function() {
            $('body').removeClass("overflow-hidden");
        });

    });
})(jQuery);

//Footer Bottom



function getHeaderHeight(){
    return $('.js-header').outerHeight();
}// getHeaderHeight

function getFooterHeight(){
    return $('#zo-footer-top').outerHeight();
}// getFooterHeight

function footerBottom(){
    var alturaFooter = getFooterHeight();
    $('.main-body').css('padding-bottom', alturaFooter );
    console.log(getFooterHeight());
}