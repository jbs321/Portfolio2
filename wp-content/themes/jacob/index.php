<?php get_header(); ?>
<body id="perspective" class="perspective effect-airbnb">
<div class="home-overlay">
    <i class="fa fa-arrow-left"></i>
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
        get_template_part('what-i-do', 'what-i-do.php');
        get_template_part('myworks', 'myworks.php');
        get_template_part('timeline', 'timeline.php');
        get_template_part('contact-me', 'contact-me.php');
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
<script src="<?php echo get_template_directory_uri() ?>/assets/js/fullpage.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/timeline/timeline.js"></script>