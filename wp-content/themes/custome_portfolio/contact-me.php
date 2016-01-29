<div data-anchor="contact-me" class="section container-fluid contact-me">
    <div class="form-wrapper">
        <h1>Contact Me</h1>
        <span class="border"></span>
        <form id="contact-me" class="contact-me" method="post" action="/portfolio/wp-admin/admin-post.php">
            <fieldset class="form-group col-xs-12">
                <input id="name" name="name" class="form-control name" type="text" placeholder="NAME">
            </fieldset>

            <fieldset class="form-group col-xs-12">
                <input id="email" class="form-control" name="email" type="email" placeholder="EMAIL">
            </fieldset>

            <fieldset class="form-group col-xs-12">
                <textarea id="msg" name="msg" class="form-control" placeholder="MESSAGE" rows="10"></textarea>
            </fieldset>
            <fieldset class="form-group col-xs-12">
                <input type="submit" class="form-control" value="SEND">
            </fieldset>
            <!-- Hidden -->
            <input type="hidden" name="action" value="add_foobar">
            <input type="hidden" name="data" value="foobarid">
        </form>
    </div>

    <div class="space">
        <div class="ship">
            <div class="ship-rotate">
                <div class="pod"></div>
                <div class="fuselage"></div>
            </div>
        </div>
        <div class="ship-shadow"></div>
        <div class="mars">
            <div class="tentacle"></div>
            <div class="flag">
                <div class="small-tentacle"></div>
            </div>
            <div class="planet">
                <div class="surface"></div>
                <div class="crater1"></div>
                <div class="crater2"></div>
                <div class="crater3"></div>
            </div>
        </div>
        <div class="test"></div>
    </div>
</div>