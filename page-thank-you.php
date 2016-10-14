<?php
/*
 Template Name: Frontpage
 */
?>
<?php
get_header(); ?>

<?php $image_attributes = wp_get_attachment_image_src( get_theme_mod( 'main_bkg' ), 'large' ); ?>
<section id="main" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>">
    <div class="row">
        <div class="columns align-self-middle text-center">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                        <h1><?php the_title(); ?></h1>
                        <!-- <div class="flex-video widescreen">
                            <video width="640" height="360" controls>
                                <source src="wp-content/themes/courseplanner/assets/CourseplanningWalkthrough.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div> -->
                        <?php the_content(); ?>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'courseplanner' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>
<section id="faq">
    <h2 class="text-center"><?php _e( 'The Benefits of Course Planner WP', 'courseplanner' ); ?></h2>
    <div class="row">
        <?php
            $args = array( 'post_type' => 'faq_posts', 'posts_per_page' => 6 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();

              echo '<div class="medium-4 columns small-12 text-center medium-text-left">';
            	echo '<h3>'; the_title(); echo '</h3>';
              	the_content();
              echo '</div>';
            endwhile;
        ?>
    </div>
</section>
<section id="contact">
    <?php get_template_part( 'contact', 'form' ); ?>
</section>            

<?php get_footer(); ?>