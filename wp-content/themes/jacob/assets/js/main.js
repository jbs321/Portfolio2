$(function () {
    $('a[data-navto], [data-navto]').click(function(e) {
        e.preventDefault();
        $navto = $(this).data('navto');
        cl($navto);

        setTimeout(function () {
            $.fn.fullpage.moveTo($navto);
        }, 500)
    });

    $('button').click(function(){
        $('#slideout').toggleClass('on');
    });

    function cl(content){
        console.log(content);
    }
});