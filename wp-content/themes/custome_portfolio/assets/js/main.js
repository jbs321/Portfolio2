
$(function () {
    $.scrollify({
        section: "section",
        sectionName: "section-name",
        easing: "easeOutExpo",
        scrollSpeed: 1100,
        offset: 0,
        scrollbars: true
        //before: function () {
        //},
        //after: function () {
        //},
        //afterResize: function () {
        //}
    });

    //Event Listeners
    $(window).on('scroll load', function (){
        ($('.icon-chevron-up').offset().top < $(window).height()) ?
            /* 1 */$('.icon-chevron-up').css('visibility', 'hidden') :
            /* 0 */$('.icon-chevron-up').css('visibility', 'visible');
    });

    $('.icon-chevron-up').on('click', function () {
        $(window).scrollTo('0px', 200);
    });

    $('a[data-navto]').click(function (e) {
        e.preventDefault;

        $('.container').trigger('click');

        var target = $(this).attr('data-navto');
        $('.container').scrollTo('300px');
    });
});