var $=jQuery.noConflict();

(function($){
    "use strict";
    $(function(){

        /*------------------------------------*\
            #GLOBAL
        \*------------------------------------*/
        $(window).ready(function(){
            footerBottom();
            formWrap();
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

        $( "#row-animated2 a" ).click(function(e) {
            //$( "#row-animated2 a" ).on('click', function(e) {
            //e.preventDefault();
          $( "#row-animated1, #row-animated2" ).animate({
            bottom: "+=1000"
          }, 1000, function() {
            // Animation complete.
          });
        });

        $('#agenda-visita').on('submit', function(event){
            event.preventDefault();

            var nombre = $('#nombre_visita').val();
            var email = $('#email_visita').val();
            var telefono = $('#telefono_visita').val();
            var personas = $('#n_personas_visita').val();
            var fecha = $('#fecha_visita').val();


            if (nombre == '' || email == '' || telefono == '' || personas == '' || fecha == '') {
                alert('Favor de llenar todos los campos');
            }else{
                document.agendavisita.submit();
            };

        });

        // $('form').submit( function(e){
        //     e.preventDefault();
        //     jsonForm();
        // });

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

function formWrap(){
    (function() {
        var formWrap = document.getElementById( 'fs-form-wrap' );

        [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
            new SelectFx( el, {
                stickyPlaceholder: false,
                onChange: function(val){
                    document.querySelector('span.cs-placeholder').style.backgroundColor = val;
                }
            });
        } );

        new FForm( formWrap, {
            onReview : function() {
                classie.add( document.body, 'overview' ); // for demo purposes only
            }
        } );
    })();
}

// function jsonForm(){
//     var formData = $(this).serialize();
//     $.post(
//         ajax_url,
//         formData,
//         function( response ){
//             var jsonResponse = $.parseJSON( response );
//             if( 0 === jsonResponse.error ){
//                 dataLayer.push({'event': 'contacto-exitoso'});
//             } else {
//                 dataLayer.push({'event': 'contacto-error'});
//             }
//             if( 0 === jsonResponse.error ){
//                 $('.js-success-msg').text( jsonResponse.message );
//                 $('.js-success-msg').removeClass('hidden');
//                 return;
//             }
//         }
//     );
// }
