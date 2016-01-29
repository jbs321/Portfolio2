$(function () {
    var screenHeight = $(window).height();

    go_up_display();

    $(window).on('scroll touchmove', function(){
        go_up_display();

        //var top = $(this).scrollTop();
        //$('#modal').modal('show');
    });

    $('#go-up').click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 500);
    });

    function go_up_display() {
        if($(this).scrollTop() <= screenHeight)
            $('#go-up').addClass('hidden');
        else
            $('#go-up').removeClass('hidden');
    }

    $('a[data-navto]').click(function(e) {
        e.preventDefault();
        $navto = $(this).data('navto');
        cl($navto);

        setTimeout(function () {
            $.fn.fullpage.moveTo($navto);
        }, 500)
    });

    function cl(content){
        console.log(content);
    }
});