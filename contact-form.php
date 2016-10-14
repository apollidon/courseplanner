<form class="request_demo" action="
http://marketing.apollidon.com/l/63232/2016-10-12/33fnwh">
    <div class="row">
        <div class="columns medium-10 medium-offset-1">
            <h3 class="text-center"><?php _e( 'Contact Us', 'courseplanner' ); ?></h3>
            <div class="row">
                <div class="columns small-12 medium-6">
                    <input id="first" type="text" name="first_name" placeholder="First Name*" pattern="[a-zA-Z\s]{1,}" title="Please only use letters" required="" />
                    <input id="last" type="text" name="last_name" placeholder="Last Name*" pattern="[a-zA-Z\s]{1,}" title="Please only use letters" required="" />
                    <input id="email" type="email" name="email" placeholder="Email*" required="" />
                    <!--<select>
                                        <option value="husker">interested in</option>
                                        <option value="starbuck">Starbuck</option>
                                        <option value="hotdog">Hot Dog</option>
                                        <option value="apollo">Apollo</option>
                                    </select>-->
                </div>
                <div class="columns small-12 medium-6">
                    <textarea id="message" name="message" placeholder="Message"></textarea>
                    <button class="orange-button">
                        <?php _e( 'Submit', 'courseplanner' ); ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div style="position:absolute; left:-9999px; top: -9999px;">
        <label for="pardot_extra_field">
            <?php _e( 'Comments', 'courseplanner' ); ?>
        </label>
        <input type="text" id="pardot_extra_field" name="pardot_extra_field">
    </div>
</form>