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

        },
        afterLoad: function (anchorLink, index) {
            if (index > 1) {
                $('#go-up').removeClass('hidden hidden-fixed');
                $('#go-up').addClass('display');
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
            if(index === 3){
                loadCharts();
            }
        },
        onSlideLeave: function (anchorLink, index, slideIndex, direction, nextSlideIndex) {
            //console.log(anchorLink, index, slideIndex, direction, nextSlideIndex);
        }
    });

    function cl(data) {
        if (Array.isArray(data)) {
            data.forEach(function (elem) {
                console.log(elem);
            });
        }
        else if(typeof data == "string")
        {
            console.log(data);
        }
    }

    function loadCharts(){
        AmCharts.makeChart("clientChart",
            {
                "type": "serial",
                "categoryField": "category",
                "angle": 30,
                "depth3D": 30,
                "color": "#FFFFFF",
                "handDrawn": true,
                "startDuration": 1,
                "categoryAxis": {
                    "gridPosition": "start"
                },
                "trendLines": [],
                "graphs": [
                    {
                        "colorField": "color",
                        "fillAlphas": 1,
                        "id": "AmGraph-1",
                        "lineColorField": "color",
                        "title": "graph 1",
                        "type": "column",
                        "valueField": "column-1"
                    },
                    {
                        "id": "AmGraph-2",
                        "title": "graph 2",
                        "valueField": "Compass"
                    }
                ],
                "guides": [],
                "valueAxes": [
                    {
                        "id": "ValueAxis-1",
                        "title": "Knowledge(%)"
                    }
                ],
                "allLabels": [],
                "balloon": {},
                "titles": [
                    {
                        "id": "Title-1",
                        "size": 20,
                        "color": "#FF6600",
                        "text": "Client Skills"
                    }
                ],
                "dataProvider": [
                    {
                        "category": "JavaScript",
                        "column-1": "95"
                    },
                    {
                        "category": "Jquery",
                        "column-1": "90"
                    },
                    {
                        "category": "CSS/SCSS/LESS",
                        "column-1": "100"
                    },
                    {
                        "category": "HTML5",
                        "column-1": "100"
                    },
                    {
                        "category": "Bootstrap 3",
                        "column-1": "80"
                    },
                    {
                        "category": "AngularJS",
                        "column-1": "70"
                    },
                    {
                        "category": "HTTP",
                        "column-1": "80"
                    },
                    {
                        "category": "Responsive Design",
                        "column-1": "100"
                    },
                    {
                        "category": "Compass",
                        "column-1": "90"
                    }
                ]
            }
        );

        AmCharts.makeChart("serverChart",
            {
                "type": "serial",
                "categoryField": "category",
                "startDuration": 1,
                "angle": 30,
                "depth3D": 30,
                "handDrawThickness": 0,
                "handDrawn": true,
                "color": "#FFFFFF",
                "theme": "light",
                "categoryAxis": {
                    "gridPosition": "start"
                },
                "trendLines": [],
                "graphs": [
                    {
                        "colorField": "color",
                        "fillAlphas": 1,
                        "id": "AmGraph-1",
                        "lineColorField": "color",
                        "title": "graph 1",
                        "type": "column",
                        "valueField": "column-1"
                    }
                ],
                "guides": [],
                "valueAxes": [
                    {
                        "id": "ValueAxis-1",
                        "color": "#fff",
                        "title": "Knowledge(%)"
                    }
                ],
                "allLabels": [],
                "balloon": {},
                "titles": [
                    {
                        "id": "Title-1",
                        "size": 20,
                        "color": "#67B7DC",
                        "text": "Server Skills"
                    }
                ],
                "dataProvider": [
                    {
                        "category": "PHP",
                        "column-1": "95"
                    },
                    {
                        "category": "JAVA",
                        "column-1": "90"
                    },
                    {
                        "category": "MVC",
                        "column-1": "100"
                    },
                    {
                        "category": "OOP",
                        "column-1": "100"
                    },
                    {
                        "category": "Laravel",
                        "column-1": "95"
                    },
                    {
                        "category": "Codeigniter",
                        "column-1": "90"
                    },
                    {
                        "category": "WordPress",
                        "column-1": "95"
                    },
                    {
                        "category": "SQL",
                        "column-1": "95"
                    },
                    {
                        "category": "JSON/XML",
                        "column-1": "95"
                    }
                ]
            }
        );
    }
});