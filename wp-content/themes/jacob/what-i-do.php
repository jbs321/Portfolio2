<div class="section container-fluid what-i-do" data-section="4">

    <div class="home-overlay"></div>

    <h1 class="col-xs-10 col-xs-offset-1"><?= get_theme_mod('howidoit_page_title', 'HOW I DO IT PAGE TITLE'); ?></h1>

    <div class="row-wrapper col-xs-10 col-xs-offset-1">
        <div class="col-xs-12 col-md-5 col-md-offset-1 animated " data-animate-type="slideInLeft">
            <ul>
                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h2>What I bring to the Team</h2>
                    <p>
                        ccordion element. Media queries are used to make the element responsive
                        to different screen sizes.
                    </p>
                </li>
                <li>
                    <input type="checkbox" checked>
                    <i></i>

                    <h2>How it Works</h2>

                    <p>Using the sibling and checked selectors, we can determine the styling of sibling elements based
                        on the checked state of the checkbox input element. One use, as demonstrated here, is an
                        entirely CSS and HTML accordion element. Media queries are used to make the element responsive
                        to different screen sizes.</p>
                </li>
                <li>
                    <input type="checkbox" checked>
                    <i></i>

                    <h2>Points of Interest</h2>

                    <p>By making the open state default for when :checked isn't detected, we can make this system
                        accessable for browsers that don't recognize :checked. The fallback is simply an open accordion.
                        The accordion can be manipulated with Javascript (if needed) by changing the "checked" property
                        of the input element.</p>
                </li>
            </ul>
        </div>
        <div class="col-xs-12 col-md-4 animated" data-animate-type="slideInRight">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/services-img.png">
        </div>
    </div>
</div>