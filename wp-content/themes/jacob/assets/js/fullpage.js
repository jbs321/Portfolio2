$(document).ready(function () {
    $('#fullpage').fullpage({
        //Navigation
        menu: '#menu',
        lockAnchors: false,
        navigation: true,
        navigationPosition: 'right',
        navigationTooltips: ['Main', 'About Me', 'Skills', 'Timeline', 'Map', 'Contact Me'],
        showActiveTooltip: true,
        slidesNavigation: true,
        slidesNavPosition: 'bottom',


        //Scrolling
        css3: true,
        scrollingSpeed: 700,
        autoScrolling: true,
        fitToSection: true,
        fitToSectionDelay: 1000,
        //scrollBar: false,
        //easing: 'easeInOutCubic',
        //easingcss3: 'ease',
        loopBottom: false,
        //loopTop: false,
        loopHorizontal: false,
        continuousVertical: false,
        scrollOverflow: true,
        //touchSensitivity: 15,
        //normalScrollElementTouchThreshold: 5,
        //
        ////Accessibility
        keyboardScrolling: true,
        animateAnchor: true,
        recordHistory: true,

        ////Design
        controlArrows: true,
        verticalCentered: false,
        resize: true,
        //sectionsColor : ['#ccc', '#fff'],
        //paddingTop: '0',
        //paddingBottom: '0',
        //fixedElements: '#header, .footer',
        //responsiveWidth: 0,
        responsiveHeight: 0,

        //Custom selectors
        sectionSelector: '.section',
        slideSelector: '.slide',

        //events
        onLeave: function (index, nextIndex, direction) {

            //go down
            if (index > nextIndex) {
                $("[data-slide-section='" + index + "']").addClass('slide-reverse');
                //$("[data-slide-section='" + index + "']").removeClass('slide-' + $("[data-slide-section='" + index + "']").attr('data-slide-dir'));
            }

            //go up
            if (index < nextIndex) {
                $('[data-section="' + nextIndex + '"] .animated').each(function () {
                    var anim_type = $(this).data('animate-type');
                    var anim_end = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

                    $(this).addClass(anim_type);

                    $(this).one(anim_end, function () {
                        $(this).removeClass(anim_type);
                    })
                });

                if ($("[data-slide-section='" + nextIndex + "'][data-battery='true']").attr('data-battery') == "true") {
                    $("[data-slide-section='" + nextIndex + "'][data-battery='true']").attr('data-battery', "false");
                }

                $("[data-slide-section='" + nextIndex + "']").removeClass('slide-reverse');
                $("[data-slide-section='" + nextIndex + "']").each(function() {
                    $(this).addClass('slide-' + $(this).attr('data-slide-dir'));
                });
            }
        },
        afterLoad: function (anchorLink, index) {

            if ($("[data-slide-section='" + index + "'][data-battery='true']").attr('data-battery') == "true") {
                $("[data-slide-section='" + index + "'][data-battery='true']").attr('data-battery', "false");
            }

            //switch Battery effect on
            if ($("[data-slide-section='" + index + "'][data-battery='false']").attr('data-battery') == "false") {
                $("[data-slide-section='" + index + "'][data-battery='false']").attr('data-battery', "true");
            }

            if (index > 1) {
                $('#go-up').removeClass('hidden hidden-fixed');
                $('#go-up').addClass('display');
            } else if (index == 1) {
                $("[data-slide-section='" + index + "']").addClass('slide-' + $("[data-slide-section='" + index + "']").attr('data-slide-dir'));

                $('#go-up').removeClass('display');
                $('#go-up').addClass('hidden');
            }
        },
        afterRender: function () {
        },
        afterResize: function () {
        },
        afterSlideLoad: function (anchorLink, index, slideAnchor, slideIndex) {
        },
        onSlideLeave: function (anchorLink, index, slideIndex, direction, nextSlideIndex) {
        }
    });

    function cl(data) {
        if (Array.isArray(data)) {
            data.forEach(function (elem) {
                console.log(elem);
            });
        }
        else if (typeof data == "string") {
            console.log(data);
        }
    }
});