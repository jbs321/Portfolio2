$(function () {
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