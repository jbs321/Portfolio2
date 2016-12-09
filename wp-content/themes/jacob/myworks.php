<div class="section container-fluid myworks" data-section="5">
    <div class="home-overlay"></div>

    <h1 class="animated" data-animate-type="slideInLeft">My Work</h1>


    <div class="container animated">
        <?php
        $products = get_posts(['post_type' => 'product']);
        $idx = 0;

        foreach ($products as $product):
            $title = $product->post_title;
            $custom_fields = get_post_custom($product->ID);
            $screenShotLink = $custom_fields['wpcf-screenshot'][0];
            $websiteLink = $custom_fields['wpcf-site_link'][0];

            if(!isset($screenShotLink)) {
                continue;
            }
            ?>

            <figure class="animated <?="delay-0-{$idx}";?>"  <?=($idx%2) == 0 ? 'data-animate-type="slideInLeft"' : 'data-animate-type="slideInRight"';?>>
                <img width="400" height="300" src="<?=$screenShotLink;?>" alt="Thumb"/>
                <figcaption>
                    <div><?=$title;?><p><a href="<?=$websiteLink;?>" target="_blank"><i class="fa fa-external-link"></i></a></p></div>
                </figcaption>
            </figure>

            <?php
            $idx++;
        endforeach;
        ?>
    </div>
</div>