<div class="section container-fluid contact-me" data-section="6">
    <div class="col-xs-12 contact-me-header">
        <div>Contact Me</div>
    </div>
    <div class="col-md-8 map-container animated" data-animate-type="slideInLeft" id="map">
        <script>
            function initMap() {
                var location = {lat: 49.210407, lng: -123.148131};
                var mapDiv = document.getElementById('map');
                var map = new google.maps.Map(mapDiv, {
                    center: location,
                    zoom: 10
                });

                var marker = new google.maps.Marker({
                    map: map,
                    title: 'Home Sweet Home!',
                    position: location,
                    draggable: true,
                    animation: google.maps.Animation.DROP
                });
            }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
    </div>
    <div class="col-md-4 right animated" data-animate-type="slideInRight">
        <div class="container">
            <div class="row connect">

                <p>Connect</p>

                <div id='social'>
                    <a class='social' href="https://www.facebook.com/jack.balabanov">
                        <i class='fa fa-facebook'></i>
                    </a>
                    <a class='social' href="https://www.linkedin.com/nhome/?trk=hb_signin">
                        <span class='fa fa-linkedin'></span>
                    </a>
                    <a class='social' href="https://github.com/jbs321">
                        <span class='fa fa-github'></span>
                    </a>

                </div>

                <form id="make-contact">
                    <p>Get in Contact</p>
                    <input placeholder="Email" required name="email" id="email" type="email">
                    <input placeholder="Phone" required name="phone" id="phone" type="text">
                    <input placeholder="Subject" required name="subject" id="subject" type="text">
                    <textarea placeholder="Message" required name="message" id="message" rows="4"></textarea>
                    <input placeholder="Send" type="submit">
                </form>

                <div>Other Way</div>
                <div><i class="fa fa-envelope" style="margin-right: 5px; font-size: 1em"></i>jbs321.work@gmail.com</div>
                <div><i class="fa fa-phone" style="margin-right: 5px; font-size:1em;"></i>  +1 (778) 882 - 0853</div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        $('form#make-contact').submit( function (e) {
            e.preventDefault();
            NProgress.start();
            $.ajax({
                type:"POST",
                url: "wp-admin/admin-ajax.php",
                data: {
                    action : 'notify_me',
                    email: $('#make-contact #email').val(),
                    phone: $('#make-contact #phone').val(),
                    subject: $('#make-contact #subject').val(),
                    message: $('#make-contact #message').val()
                },
                success: function( data ) {
                    console.log('dasds');
                    NProgress.done();
                    ohSnap('Thank You!', {'color':'red', 'container-id':'perspective'});
                }
            });
        });
    });

</script>