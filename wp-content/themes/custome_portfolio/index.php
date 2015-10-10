<?php get_header(); ?>
<body id="perspective" class="perspective effect-airbnb">
<?php get_template_part('menu', 'menu.php'); ?>

<div class="container">
    <div class="wrapper">
        <div class="main clearfix">
            <?php get_template_part('main', 'main.php'); ?>
            <?php get_template_part('about-me', 'about-me.php'); ?>
            <?php get_template_part('my-resume', 'my-resume.php'); ?>
            <?php get_template_part('map', 'map.php'); ?>
            <?php get_template_part('contact-me', 'contact-me.php'); ?>
            <?php get_template_part('my-education', 'my-education.php'); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
</body>
</html>

<script src="<?php echo get_template_directory_uri() ?>/assets/js/classie.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/menu.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/main.js"></script>
