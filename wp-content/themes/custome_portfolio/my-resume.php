<?php
if (get_posts(['post_type' => 'timeline'])):
    $isRight = true; ?>

    <section class="my-resume">

        <h1>My Resume</h1>
        <span class="border"></span>
        <div class="timeline-container">
            <div class="timeline-header">
                <p><?php echo date('Y'); ?></p>
            </div>
            <?php

            foreach (get_posts(['post_type' => 'timeline']) as $post):
                $custom_fields = get_post_custom($post->ID);
                $title = $custom_fields['wpcf-title'][0];
                $sub_title = $custom_fields['wpcf-sub-title'][0];
                $description = $custom_fields['wpcf-description'][0]; ?>

                <div class="time-block-container">
                    <div class="<?php echo ($isRight) ? 'time-block-left' : 'time-block' ?>">
                        <i class="block-icon icon-facebook"></i>
                        <span class="block-period">2010 - 2013</span>

                        <div class="meta-container">
                            <div class="meta">
                                <h1><?php echo $title ?></h1>

                                <h2><?php echo $sub_title ?></h2>

                                <p><?php echo $description ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <?php
                $isRight = !$isRight;
            endforeach; ?>

            <div class="timeline-header">
                <p><?php echo date('Y'); ?></p>
            </div>
        </div>


    </section>
<?php endif; ?>