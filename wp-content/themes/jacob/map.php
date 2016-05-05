<div class="section container-fluid map" data-section="6">
    <div class="home-overlay"></div>

<!--    <iframe frameborder="0"-->
<!--            scrolling="no"-->
<!--            src="https://maps.google.com/maps?hl=en&q=ב.ס.ר&ie=UTF8&t=roadmap&z=14&iwloc=B&output=embed"></iframe>-->

    <h1 class="col-xs-10 col-xs-offset-1">GET IN TOUCH WITH ME</h1>

    <div class="row-wrapper col-xs-10 col-xs-offset-1">

        <div class="contact col-xs-12 " >
            <div class="col-lg-4 col-lg-offset-1 text-center animated" data-animate-type="slideInLeft">

                <h4><strong>Jacob Balabnov Lanir</strong></h4>

                <p>Israel, Tel-Aviv</p>

                <ul class="list-unstyled">
                    <li><i class="fa fa-phone fa-fw"></i> (972) 0523651994</li>
                    <li><i class="fa fa-envelope-o fa-fw"></i> <a
                            href="mailto:name@example.com">jbs321.work@gmail.com</a>
                    </li>
                </ul>

                <br>

                <ul class="list-inline">
                    <li><a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin fa-fw fa-3x"></i></a></li>
                    <li><a href="#"><i class="fa fa-github fa-fw fa-3x"></i></a></li>
                </ul>
            </div>
            <form class="mapper col-lg-5">
                <div class="field name-box">
                    <input type="text" id="name" placeholder="Who Are You?"/>
                    <label for="name">Name</label>
                    <span class="ss-icon">check</span>
                </div>

                <div class="field email-box">
                    <input type="text" id="email" placeholder="name@email.com"/>
                    <label for="email">Email</label>
                    <span class="ss-icon">check</span>
                </div>

                <div class="field msg-box">
                    <textarea id="msg" rows="4" placeholder="Your message goes here..."/></textarea>
                    <label for="msg">Msg</label>
                    <span class="ss-icon">check</span>
                </div>

                <input class="button" type="submit" value="Send" />
            </form>

            <script>
                // Input Lock
                $('textarea').blur(function () {
                    $('#hire textarea').each(function () {
                        $this = $(this);
                        if ( this.value != '' ) {
                            $this.addClass('focused');
                            $('textarea + label + span').css({'opacity': 1});
                        }
                        else {
                            $this.removeClass('focused');
                            $('textarea + label + span').css({'opacity': 0});
                        }
                    });
                });

                $('#hire .field:first-child input').blur(function () {
                    $('#hire .field:first-child input').each(function () {
                        $this = $(this);
                        if ( this.value != '' ) {
                            $this.addClass('focused');
                            $('.field:first-child input + label + span').css({'opacity': 1});
                        }
                        else {
                            $this.removeClass('focused');
                            $('.field:first-child input + label + span').css({'opacity': 0});
                        }
                    });
                });

                $('#hire .field:nth-child(2) input').blur(function () {
                    $('#hire .field:nth-child(2) input').each(function () {
                        $this = $(this);
                        if ( this.value != '' ) {
                            $this.addClass('focused');
                            $('.field:nth-child(2) input + label + span').css({'opacity': 1});
                        }
                        else {
                            $this.removeClass('focused');
                            $('.field:nth-child(2) input + label + span').css({'opacity': 0});
                        }
                    });
                });
            </script>
            </div>
        </div>
    </div>

    <div class="footer col-xs-12" style="padding: 0; margin: 0;">
        <div>© 2016 Resume. All Rights Reserved.</div>
    </div>
</div>
