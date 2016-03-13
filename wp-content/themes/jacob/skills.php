<?php
$skills = [];

foreach (get_posts(['post_type' => 'skill', 'numberposts'=>-1]) as $post):
    $custom_fields = get_post_custom($post->ID);
    $skills[] = [
        "skill_name" => $post->post_title,
        "percent" => $custom_fields['wpcf-percent'][0]
    ];
endforeach;
?>

<div class="section container-fluid skills">
    <div class="home-overlay">
        <div class="video-container">
            <video id="my-video" class="video" autoplay muted loop>
                <source src="<?php echo get_template_directory_uri() ?>/assets/videos/footage-desk-working.webm"
                        type="video/mp4">
            </video>
        </div>
    </div>

    <h1 class="">WHAT I’M BEST AT</h1>

    <div class="col-xs-10 col-md-offset-1">
        <div class="row">

            <?php foreach ($skills as $idx => $skill): ?>
                <?php $e = ($idx % 2 !== 0) ? "col-xs-12 col-md-offset-1 col-md-5" : "col-xs-12 col-md-5" ?>
                <div class="<?= $e; ?>">
                    <span class="battery-title"><?= $skill['skill_name'] ?></span><span
                        class="battery-percentage"><?= $skill['percent']; ?>%</span>
                    <div class="battery-wrapper" data-battery="false" data-battery-percente="<?= $skill['percent']; ?>"
                         data-slide="true"
                         data-slide-dir="opacity" data-slide-section="3"><em></em></div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
    <div class="col-xs-12 col-md-9 col-md-offset-1">
        <ul class="tags">
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw purple"></span>HTML5</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw green"></span>CSS3</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw blue"></span>SCSS</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw yellow"></span>Compass</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw dark-blue"></span>Bootstrap</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw light-purple"></span>ANGULARJS</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw pink"></span>MVC</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw cyan"></span>Responsive</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw purple"></span>JQUERY</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw yellow"></span>CDN</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw blue"></span>AJAX</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw dark-blue"></span>JSON</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw purple"></span>LARAVEL</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw green"></span>CODEIGNITER</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw blue"></span>PHPCAKE</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw yellow"></span>Composer</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw dark-blue"></span>PSR</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw light-purple"></span>CURL</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw pink"></span>REST</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw cyan"></span>OAuth2</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw purple"></span>API</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw yellow"></span>APACHE</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw blue"></span>MYSQL</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw dark-blue"></span>InnoDB</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw green"></span>SQL</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw blue"></span>PHPStorm</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw yellow"></span>REDIS</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw dark-blue"></span>NODEJS</li></a>

            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw purple"></span>LINUX</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw yellow"></span>Ubuntu14.04</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw blue"></span>VPS</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw dark-blue"></span>DigitalOcean</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw green"></span>AWS</li></a>

            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw light-purple"></span>CentOS</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw pink"></span>SUDO</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw cyan"></span>BASH</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw purple"></span>GIT</li></a>
            <a class="grow" href="#"><li class="tag"><span class="fa fa-circle fa-fw yellow"></span>GITHUB</li></a>
        </ul>
    </div>
</div>