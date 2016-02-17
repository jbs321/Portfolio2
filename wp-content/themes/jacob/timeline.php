<div class="section container-fluid timeline" id="timeline" data-section="4">
    <div class="row-wrapper">
        <div class="row">
            <h1 class="section-header">MY ENTIRE CAREER</h1>

            <section class="col-xs-12 col-md-4 education " >
                <h2>Education</h2>

                <div class="col-xs-12 box animated" data-animate-type="slideInLeft">
                    <div class="range">2004 - 2005</div>
                    <div class="description">
                        <div class="bold">Univercity Name</div>
                        <span class="text">sfdas asd asd asd asd sadasf asfas</span>
                    </div>
                </div>

                <div class="col-xs-12 box delay-0-5 animated" data-animate-type="slideInLeft">
                    <div class="range">2004 - 2005</div>
                    <div class="description">
                        <div class="bold">Univercity Name</div>
                        <span class="text">sfdas asd asd asd asd sadasf asfas</span>
                    </div>
                </div>
            </section>

            <section class="cd-horizontal-timeline col-xs-12 col-md-8 animated" data-animate-type="slideInRight">
                <h2 class="title">Work experience</h2>
                <div class="timeline">
                    <div class="events-wrapper">
                        <div class="events">
                            <ol>
                                <li><a href="#0" data-date="16/01/2014" class="selected">16 Jan</a></li>
                                <li><a href="#0" data-date="28/02/2014">28 Feb</a></li>
                                <li><a href="#0" data-date="20/04/2014">20 Mar</a></li>
                                <li><a href="#0" data-date="20/05/2014">20 May</a></li>


                                <!--                    --><?php //$first = 0;
                                //                    foreach (get_posts(['post_type' => 'timeline']) as $post):
                                //                        $custom_fields = get_post_custom($post->ID);
                                //                        $title = $custom_fields['wpcf-title'][0];
                                //                        $sub_title = $custom_fields['wpcf-sub_title'][0];
                                //                        $sDate = date("d/m/Y", $custom_fields['wpcf-start_date'][0]);
                                //                        $eDate = date("dd/mm/YYYY", $custom_fields['wpcf-end_date'][0]);
                                //                        $content = $custom_fields['wpcf-content'][0];
                                //                        ?>
                                <!--                        <li><a href="#0" data-date="--><? //=$sDate?><!--" -->
                                <?php //if($first == 0): ?><!-- class="selected" --><?php //endif; ?><!-- >-->
                                <? //=$sDate?><!--</a></li>-->
                                <!--                        --><?php //$first++; ?>
                                <!--                    --><?php //endforeach; ?>

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
                    <ol>
                        <!--            --><?php //$first = 0;
                        //            foreach (get_posts(['post_type' => 'timeline']) as $post):
                        //                $custom_fields = get_post_custom($post->ID);
                        //                $title = $custom_fields['wpcf-title'][0];
                        //                $sub_title = $custom_fields['wpcf-sub_title'][0];
                        //                $sDate = date("d/m/Y", $custom_fields['wpcf-start_date'][0]);
                        //                $eDate = date("dd/mm/YYYY", $custom_fields['wpcf-end_date'][0]);
                        //                $content = $custom_fields['wpcf-content'][0];
                        //                ?>
                        <!--                <li --><?php //if($first == 0): ?><!-- class="selected" -->
                        <?php //endif; ?><!-- data-date="--><? //=$sDate ?><!--">-->
                        <!--                    <h2>--><? //=$title?><!--</h2>-->
                        <!--                    <em>January 16th, 2014</em>-->
                        <!--                    <p>-->
                        <!--                        test text-->
                        <!--                    </p>-->
                        <!--                </li>-->
                        <!--                --><?php //$first++;?>
                        <!--            --><?php //endforeach; ?>

                        <li class="selected" data-date="16/01/2014">
                            <h2>Horizontal Timeline</h2>
                            <em>January 16th, 2014</em>
                            <p>
                                test text
                            </p>
                        </li>

                        <li data-date="28/02/2014">
                            <h2>Event title here</h2>
                            <em>February 28th, 2014</em>
                            <p>
                                test text
                            </p>
                        </li>

                        <li data-date="20/04/2014">
                            <h2>Event title here</h2>
                            <em>March 20th, 2014</em>
                            <p>
                                test text
                            </p>
                        </li>

                        <li data-date="20/05/2014">
                            <h2>Event title here</h2>
                            <em>May 20th, 2014</em>
                            <p>
                                test text
                            </p>
                        </li>
                    </ol>
                </div> <!-- .events-content -->
            </section>
        </div>
    </div>
</div>