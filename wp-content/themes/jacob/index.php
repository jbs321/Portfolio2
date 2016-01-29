<?php get_header(); ?>
<body id="perspective" class="perspective effect-airbnb">
<div class="home-overlay">
    <div class="video-container">
        <video id="my-video" class="video" autoplay muted loop>
            <source src="<?php echo get_template_directory_uri() ?>/assets/videos/bg_video.mp4" type="video/mp4">
        </video>
    </div>
</div>


<?php get_template_part('menu', 'menu.php'); ?>
<div class="view_container">
    <div class="wrapper" id="fullpage">
        <?php
        get_template_part('main', 'main.php');
        get_template_part('about-me', 'about-me.php');
                get_template_part('skills', 'skills.php');
                get_template_part('timeline', 'timeline.php');
        ////        get_template_part('tornado', 'tornado.php');
////        get_template_part('contact-me', 'contact-me.php');
        get_template_part('map', 'map.php');
//        get_template_part('template/modal', 'modal');
        ?>
    </div>
</div>
<?php get_footer(); ?>
</body>
</html>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/modernizr.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/classie.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/main.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/menu.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/charts.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/fullpage.js"></script>
<!-- Skill -->
<!--<script src="--><?php //echo get_template_directory_uri() ?><!--/assets/js/skill/raphael.js"></script>-->
<!--<script src="--><?php //echo get_template_directory_uri() ?><!--/assets/js/skill/init.js"></script>-->
<!--<script src="--><?php //echo get_template_directory_uri() ?><!--/assets/js/pio/pio.js"></script>-->