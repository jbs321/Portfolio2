$(document).ready(function () {
    $('#fullpage').fullpage({
        //Navigation
        menu: '#menu',
        lockAnchors: false,
        //anchors:['firstPage', 'secondPage'],
        navigation: true,
        navigationPosition: 'right',
        navigationTooltips: ['Main', 'About Me', 'Skills', 'Timeline', 'Map'],
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
        loopHorizontal: true,
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
        verticalCentered: true,
        resize: true,
        //sectionsColor : ['#ccc', '#fff'],
        //paddingTop: '-1em',
        //paddingBottom: '10px',
        //fixedElements: '#header, .footer',
        //responsiveWidth: 0,
        responsiveHeight: 0,

        //Custom selectors
        sectionSelector: '.section',
        slideSelector: '.slide',

        //events
        onLeave: function (index, nextIndex, direction) {

            if ($("[data-slide-section='" + index + "'][data-battery='true']").attr('data-battery') == "true") {
                $("[data-slide-section='" + index + "'][data-battery='true']").attr('data-battery', "false");
            }

            //go down
            if (index > nextIndex) {
                $("[data-slide-section='" + index + "']").addClass('slide-reverse');
                $("[data-slide-section='" + index + "']").removeClass('slide-' + $("[data-slide-section='" + index + "']").attr('data-slide-dir'));
            }

            //go up
            if (index < nextIndex) {
                $("[data-slide-section='" + nextIndex + "']").removeClass('slide-reverse');
                $("[data-slide-section='" + nextIndex + "']").addClass('slide-' + $("[data-slide-section='" + nextIndex + "']").attr('data-slide-dir'));
            }
        },
        afterLoad: function (anchorLink, index) {

            if ($("[data-slide-section='" + index + "'][data-battery='false']").attr('data-battery') == "false") {
                $("[data-slide-section='" + index + "'][data-battery='false']").attr('data-battery', "true");
            }


            if (index > 1) {
                $("[data-battery='false']").attr('data-battery', "true");
                $('#go-up').removeClass('hidden hidden-fixed');
                $('#go-up').addClass('display');
            } else if (index == 1) {
                $("[data-slide-section='" + index + "']").addClass('slide-' + $("[data-slide-section='" + index + "']").attr('data-slide-dir'));
            } else {
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