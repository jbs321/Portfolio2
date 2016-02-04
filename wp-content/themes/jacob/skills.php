<div class="section container-fluid skills">
    <div class="slide first active">
                <div class="skills-meta" data-slide="true" data-slide-dir="top" data-slide-section="3">
                    <h1 class="section-header">Skills</h1>
                    The crossover between design and programming has always been of interest to me, and since moving to London six
                    years ago, I've been lucky enough to work alongside some talented teams on a number of high profile websites.
                    I have a wide range of skills that include design (and working closely with designers), front-end development
                    (HTML5, CSS3, Javascript, Responsive, UX), back-end development using open source technologies (PHP, Drupal,
                    Django and Ruby on Rails), Linux server system administration, load balancing (Varnish and Memcached),
                    deployment and performance tuning (Apache, MySQL and NGinx).
                </div>

<!--        <div class="skills-item show_state" data-level="98" data-base-color="#ffe89c" data-skill-color="#35a49d">-->
<!--            <div class="inner_wrap">-->
<!--                <div class="desc"><h5><a-->
<!--                            href="http://livedemo00.template-help.com/wordpress_50917/skills-view/html5-css3/"-->
<!--                            title="HTML5 / CSS3">HTML5 / CSS3</a></h5></div>-->
<!--                <div class="diagram"><span style="width: 98%;"><em></em></span></div>-->
<!--                <div class="level"><span>98%</span></div>-->
<!--            </div>-->
<!--        </div>-->

        <style>
            .skills_wrapper .skills-item {
                width: 300px;
                float: left;
                position: relative;
                margin: 0 20px 60px 0 !important;
            }

            .skills_wrapper .skills-item .inner_wrap {
                padding-right: 74px;
            }

            .skills_wrapper .skills-item .inner_wrap .desc {
                margin-top: 0;
            }

            .skills_wrapper .skills-item .inner_wrap .desc h5 {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                font-weight: 300 !important;
                font-size: 18px;
                line-height: 1.2em;
                font-weight: 700;
                text-transform: uppercase;
                margin: 0 0 9px 0;
            }

            .skills_wrapper .skills-item .inner_wrap .desc h5 a {
                color: #fff;
                -webkit-transition: color 0.3s;
                -moz-transition: color 0.3s;
                -o-transition: color 0.3s;
                transition: color 0.3s;
            }

            .skills_wrapper .skills-item .inner_wrap .diagram {
                height: 54px;
                margin: 0 12px 0 8px;
                position: relative;
                background-color: transparent;
                background-repeat: repeat-x;
                background-image: url(images/diagram-tail.gif);
            }

            .skills_wrapper .skills-item .inner_wrap .diagram:before {
                width: 8px;
                left: -8px;
                background-image: url(images/diagram-left.png);
            }

            .skills_wrapper .skills-item .inner_wrap .diagram span {
                width: 0%;
                height: 100%;
                display: block;
                background-color: transparent;
            }

            .skills_wrapper .skills-item.show_state .inner_wrap .diagram em {
                width: 100%;
                -webkit-transition: 0.8s;
                -moz-transition: 0.8s;
                -o-transition: 0.8s;
                transition: 0.8s;
            }

            .skills_wrapper .skills-item .inner_wrap .diagram em {
                background-repeat: no-repeat;
                background-position: 0 50%;
                background-repeat: repeat-x;
                background-image: url(images/diagram-active.gif);
                height: 100%;
                display: block;
            }
        </style>
    </div>
    <div class="slide">
        <div id="serverChart"></div>
    </div>
    <div class="slide">
        <div id="clientChart"></div>
    </div>
</div>