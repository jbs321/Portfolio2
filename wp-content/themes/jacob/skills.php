<?php
$skills = [];

foreach (get_posts(['post_type' => 'skill', 'numberposts' => -1]) as $post):
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
    <h1 class=""><?= get_theme_mod('skills_page_title', 'Skills Page Title'); ?></h1>

    <div class="col-xs-10 col-md-offset-1">
        <div class="row">

            <?php foreach ($skills as $idx => $skill): ?>
                <?php $e = ($idx % 2 !== 0) ? "col-xs-12 col-md-offset-1 col-md-5" : "col-xs-12 col-md-5" ?>
                <div class="<?= $e; ?>">
                    <span class="battery-title"><?= $skill['skill_name'] ?></span><span
                        class="battery-percentage"><?= $skill['percent']; ?>%</span>
                    <div class="battery-wrapper" data-battery="false" data-battery-percente="<?= $skill['percent']; ?>"
                         data-slide="true"
                         data-slide-dir="opacity" data-slide-section="3">

                        <em class="deactive-load"></em>
                        <em class="active-load"></em>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
</div>
</div>