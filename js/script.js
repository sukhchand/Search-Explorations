$( document ).ready(function() {
    $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
    $(".popular_searches").outerHeight($(".search_popup").height());
    $(".search_field").on("click", function(){
        $(".search_popup").slideToggle();
    })
    $('.popular_searches li a').on('click', function(){
        $('.products').css('display','none');
        $('.categories').css('display','none');
        $('.products_selected').css('display','block');

    })
});