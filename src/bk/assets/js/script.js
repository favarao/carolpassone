function scrollToClass(className) {
    var target = $('.' + className);
    if (target.length) {
        menos = 0;
        if ($(window).width() <= 992)
            menos = 80;
        $('html, body').animate({
            scrollTop: target.first().offset().top-menos
        }, 0); // Rola suavemente para a posição do alvo em 1 segundo (1000 ms)
        $(".black-screen").click();
    }
}


$(document).ready(function(){
    $(window).on('resize', function() {
        if ($(window).width() <= 992) {
            $('.nav-links').addClass('link-mobile');
        } else {
            $('.nav-links').removeClass('link-mobile');
        }
    }).trigger('resize');

$(".link-mobile .nav-item a").click(function(e){
    if($(this).parent().hasClass('sub-item'))
        return;
    
    menu = $(this).next();
    if(menu.hasClass('menu-group'))
    {
        e.preventDefault();
        if(menu.is(':visible'))
            menu.hide();
        else
            menu.show();
    }
});

$("#sidebarToggle").click(function(){
    $('.nav').animate({left: '0px'}, "slow");
    $(".black-screen").fadeIn();
});

$(".black-screen").click(function(){
    $('.nav').animate({left: '-250px'}, "slow");
    $(".black-screen").hide();
    
})

// $('.nav-item').hover(
//     function () {if($(".link-mobile").length>0) return;
//         $(this).find('.menu-group').stop(true, true).slideDown();
//     },
//     function () {if($(".link-mobile").length>0) return;
//         $(this).find('.menu-group').stop(true, true).hide();
//     }
// );
});

