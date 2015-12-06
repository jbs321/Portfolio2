<section class="timeline">
    <header class="clearfix">
        <h1>Vertical Timeline</h1>
    </header>
    <div class="main">
        <ul class="timeline_container">
        <?php
        foreach (get_posts(['post_type' => 'timeline']) as $post):
            $custom_fields = get_post_custom($post->ID);
            $title = $custom_fields['wpcf-title'][0];
            $sub_title = $custom_fields['wpcf-sub_title'][0];
            $sDate = date("d-m-Y", $custom_fields['wpcf-start_date'][0]);
            $eDate = date("d-m-Y", $custom_fields['wpcf-end_date'][0]);
            $content = $custom_fields['wpcf-content'][0];
        ?>

                <li>
                    <time class="cl_time" datetime="<?=$sDate?>"><span><?=$sDate?></span></time>
                    <div class="cl_icon cbp_tmicon-phone"></div>
                    <div class="cl_label">
                        <h1><?=$title?></h1>
                        <h2><?=$sub_title?></h2>
                        <p><?=$content?></p>
                    </div>
                </li>

        <?php endforeach; ?>
        </ul>
    </div>
</section>