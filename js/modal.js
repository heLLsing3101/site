$(document).ready(function(){
// * Открытие/закрытие модального окна*
 var button = $('#button');
 var modal = $('#modal');
 var close = $('#close');

 button.on('click', function(){
    modal.addClass('modal_active');
 });

 close.on('click', function(){
    modal.removeClass('modal_active');
 });

// * Кнопка поднятия на верх *


if($(window).width() > 769){
    var buttonUp = $('#button-up');  
    $(window).scroll(function() {     
    if ($(window).scrollTop() > 300) {
        buttonUp.addClass('show');
    } else {
        buttonUp.removeClass('show');
    }
    });

    buttonUp.on('click', function(e){
        e.preventDefault;
        $('html, body').animate({scrollTop:0},'300');
    });
    };
});
