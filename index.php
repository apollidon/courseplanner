<?php
get_header(); ?>

<?php $image_attributes = wp_get_attachment_image_src( get_theme_mod( 'main_bkg' ), 'large' ); ?>
<section id="main" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>">
    <div class="row">
        <div class="columns align-self-middle text-center">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Course-Planner-Boring.png" />
            <p class="text-center" style="color:<?php echo get_theme_mod( 'main_subheading_color' ); ?>;"><?php echo get_theme_mod( 'main_subheading', __( 'Pellentesque sed sapien lorem at lacinia urna.', 'courseplanner' ) ); ?></p>
            <h2 class="text-center" style="color:<?php echo get_theme_mod( 'main_title_color' ); ?>;"><?php echo get_theme_mod( 'main_title', __( 'Pellentesque Sed Sapien Lorem', 'courseplanner' ) ); ?></h2>
            <a href="#contact">
                <button class="orange-button" style="background-color:<?php echo get_theme_mod( 'main_button_color' ); ?>;">
                    <?php echo get_theme_mod( 'main_button', __( 'Request Demo', 'courseplanner' ) ); ?>
                </button>
            </a>
        </div>
    </div>
</section>
<section id="how-it-works">
    <div class="row">
        <div class="columns medium-12">
            <div class="row align-center">
                <div class="columns medium-10">
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                                <h1><?php the_title(); ?></h1>
                                <div class="flex-video widescreen">
                                    <video width="640" height="360" controls>
                                        <source src="wp-content/themes/courseplanner/assets/CourseplanningWalkthrough.mp4" type="video/mp4">
                                        <!-- <source src="assets/courseplannerDemo.ogg" type="video/ogg"> -->
                                        <?php _e( 'Your browser does not support the video tag.', 'courseplanner' ); ?>
                                    </video>
                                    <!-- <iframe width="640" height="360" src="assets/courseplannerDemo.mp4" frameborder="0" allowfullscreen></iframe> -->
                                </div>
                                <?php the_content(); ?>
                                <a href="#contact">
                                    <button class="orange-button float-center">
                                        <?php _e( 'Request Demo', 'courseplanner' ); ?>
                                    </button>
                                </a>
                            </article>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.', 'courseplanner' ); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- .column end -->
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
    <?php get_template_part( 'contact', 'form' ); ?>
</section>            

<?php get_footer(); ?>