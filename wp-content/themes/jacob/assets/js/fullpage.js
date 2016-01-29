$(document).ready(function() {
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
        resize : true,
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
        onLeave: function(index, nextIndex, direction){
            console.log(index, nextIndex, direction);
        },
        afterLoad: function(anchorLink, index){},
        afterRender: function(){},
        afterResize: function(){},
        afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
        onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){
            console.log(anchorLink, index, slideIndex, direction, nextSlideIndex);
        }
    });
});