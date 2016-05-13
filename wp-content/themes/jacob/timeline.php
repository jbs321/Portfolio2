<?php
$first = 0;
$timelineEvents = [];
foreach (get_posts(['post_type' => 'timeline']) as $post):
    $custom_fields = get_post_custom($post->ID);
    $title = $custom_fields['wpcf-title'][0];
    $sub_title = $custom_fields['wpcf-sub_title'][0];
    $sDate = date("d/m/Y", $custom_fields['wpcf-start_date'][0]);
    $eDate = date("dd/mm/YYYY", $custom_fields['wpcf-end_date'][0]);
    $content = $custom_fields['wpcf-content'][0];

    $timelineEvents[] = [
        "title" => $title,
        "sub_title" => $sub_title,
        "sDate" => $sDate,
        "eDate" => $eDate,
        "content" => $content
    ];
endforeach;

usort($timelineEvents, function ($a, $b) {
    return strtotime(str_replace('/', '-', $a['sDate'])) - strtotime(str_replace('/', '-', $b['sDate']));
});
?>

<div class="section timeline" id="timeline" data-section="5">

    <div class="home-overlay"></div>

    <h1 class="col-md-10 col-md-offset-1">MY ENTIRE CAREER</h1>

    <div class="row-wrapper col-md-10 col-md-offset-1">
        <section class="col-xs-12 col-md-4 education ">
            <h2>Education</h2>

            <div class="col-xs-12 box animated" data-animate-type="slideInLeft">
                <div class="range">2006 - 2009</div>
                <div class="description">
                    <div class="bold">Ort Ramat Yosef High School</div>
                    <span class="text">Finished Computer Science Program</span>
                </div>
            </div>

            <div class="col-xs-12 box delay-0-5 animated" data-animate-type="slideInLeft">
                <div class="range">2015 - now</div>
                <div class="description">
                    <div class="bold">Open University of Israel</div>
                    <span class="text">Started BS.c. in the OU of Israel</span>
                </div>
            </div>
        </section>

        <section class="cd-horizontal-timeline col-xs-12 col-md-7 animated" data-animate-type="slideInRight">
            <h2 class="title">Work experience</h2>
            <div class="timeline">
                <div class="events-wrapper">
                    <div class="events">
                        <ol>
                            <?php
                            $first = 0;
                            foreach ($timelineEvents as $timelineEvent): ?>
                                <li>
                                    <a href="#0"
                                       data-date="<?= explode('/', $timelineEvent['sDate'])[0] . "/" . explode('/', $timelineEvent['sDate'])[1] . "/" . explode('/', $timelineEvent['sDate'])[2] ?>" <?php if ($first == 0): ?> class="selected" <?php endif; ?>>
                                        <?= explode('/', $timelineEvent['sDate'])[2] ?>
                                    </a>
                                </li>
                                <?php
                                $first++;
                            endforeach;
                            ?>
                        </ol>

                        <span class="filling-line" aria-hidden="true"></span>
                    </div> <!-- .events -->
                </div> <!-- .events-wrapper -->

                <ul class="cd-timeline-navigation">
                    <li><a href="#0" class="prev inactive">Prev</a></li>
                    <li><a href="#0" class="next">Next</a></li>
                </ul> <!-- .cd-timeline-navigation -->
            </div> <!-- .timeline -->

            <div class="events-content">
                <ol class="list-items">
                    <?php $first = 0;
                    foreach ($timelineEvents as $timelineEvent): ?>

                        <li <?php if ($first == 0): ?> class="selected"
                        <?php endif; ?>
                            data-date="<?= explode('/', $timelineEvent['sDate'])[0] . "/" . explode('/', $timelineEvent['sDate'])[1] . "/" . explode('/', $timelineEvent['sDate'])[2] ?>">
                            <h2>  <?= $timelineEvent['title'] ?></h2>
                            <em><?= date_format(date_create($timelineEvent['sDate']), "F jS, Y"); ?></em>
                            <p>
                                <?= $timelineEvent['content'] ?>
                            </p>
                        </li>
                        <?php $first++; ?>
                    <?php endforeach; ?>
                </ol>
            </div> <!-- .events-content -->
        </section>
    </div>
</div>