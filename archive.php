<?php
get_header(); ?>

<?php $image_attributes = wp_get_attachment_image_src( get_theme_mod( 'main_bkg' ), 'large' ); ?>
<section id="main" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>">
    <div class="row">
        <div class="columns align-self-middle text-center">
            <h2 class="text-center" style="color:<?php echo get_theme_mod( 'main_title_color' ); ?>;"><?php echo get_theme_mod( 'main_title', __( 'archive.php', 'courseplanner' ) ); ?></h2>
            <p class="text-center" style="color:<?php echo get_theme_mod( 'main_subheading_color' ); ?>;"><?php echo get_theme_mod( 'main_subheading', __( 'Pellentesque sed sapien lorem at lacinia urna.', 'courseplanner' ) ); ?></p>
        </div>
    </div>
</section>
<section id="how-it-works">
    <div class="row">
        <div class="columns medium-12">
            <h1><?php _e( 'Pellentesque sed sapien lorem at lacinia urna', 'courseplanner' ); ?></h1>
            <div class="row align-center">
                <div class="columns medium-8">
                    <div class="flex-video widescreen">
                        <iframe width="640" height="360" src="https://www.youtube.com/embed/qZKvZzRynLE?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <p><?php _e( 'Pellentesque sed sapien lorem, at lacinia urna. In hac habitasse platea dictumst. Vivamus vel justo in leo laoreet ullamcorper non vitae lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ullamcorper rutrum.', 'courseplanner' ); ?> </p>
                    <button class="orange-button float-center">
                        <?php _e( 'Request Demo', 'courseplanner' ); ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="faq">
    <h2 class="text-center"><?php _e( 'ANSWERS TO FREQUENTLY ASKED QUESTIONS…', 'courseplanner' ); ?></h2>
    <div class="row">
        <div class="medium-4 columns small-12 text-center medium-text-left">
            <h3><?php _e( 'Do you offer a free trial?', 'courseplanner' ); ?></h3>
            <p><?php _e( 'Proin suscipit luctus orci placerat fringilla. Donec hendrerit laoreet risus eget adipiscing. Suspendisse in urna ligula, a volutpat mauris. Sed enim mi, bibendum eu pulvinar vel, sodales vitae dui. Pellentesque sed sapien lorem, at lacinia urna. In hac habitasse platea dictumst.', 'courseplanner' ); ?></p>
        </div>
        <div class="medium-4 columns small-12 text-center medium-text-left">
            <h3><?php _e( 'Can I use on more than one website?', 'courseplanner' ); ?></h3>
            <p><?php _e( 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 'courseplanner' ); ?></p>
        </div>
        <div class="medium-4 columns small-12 text-center medium-text-left">
            <h3><?php _e( 'Do you provide free updates?', 'courseplanner' ); ?></h3>
            <p><?php _e( 'Proin suscipit luctus orci placerat fringilla. Donec hendrerit laoreet risus eget adipiscing. Suspendisse in urna ligula, a volutpat mauris. Sed enim mi, bibendum eu pulvinar vel, sodales vitae dui.', 'courseplanner' ); ?></p>
        </div>
    </div>
</section>
<section id="contact">
    <form>
        <div class="row">
            <div class="columns medium-10 medium-offset-1">
                <h3 class="text-center"><?php _e( 'Contact Us', 'courseplanner' ); ?></h3>
                <div class="row">
                    <div class="columns small-12 medium-6">
                        <input type="text" name="name" placeholder="*name" pattern="[a-zA-Z\s]{1,}" title="Please only use letters" required="" />
                        <input type="email" name="email" placeholder="*email" required="" />
                        <select>
                            <option value="husker">
                                <?php _e( 'interested in', 'courseplanner' ); ?>
                            </option>
                            <option value="starbuck">
                                <?php _e( 'Starbuck', 'courseplanner' ); ?>
                            </option>
                            <option value="hotdog">
                                <?php _e( 'Hot Dog', 'courseplanner' ); ?>
                            </option>
                            <option value="apollo">
                                <?php _e( 'Apollo', 'courseplanner' ); ?>
                            </option>
                        </select>
                    </div>
                    <div class="columns small-12 medium-6">
                        <textarea placeholder="* comments" required=""></textarea>
                        <button class="orange-button">
                            <?php _e( 'Submit', 'courseplanner' ); ?>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>            

<?php get_footer(); ?>