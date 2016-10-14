<?php
/*
 Template Name: Frontpage
 */
?>
<?php
get_header(); ?>

<section id="main">
    <div class="row">
        <div class="columns align-self-middle text-center">
            <h2 class="text-center"><?php _e( 'Page not Found :(', 'courseplanner' ); ?></h2>
            <p class="text-center"><?php _e( 'We did not find what you are looking for.', 'courseplanner' ); ?></p>
        </div>
    </div>
</section>
<section id="faq">
    <h2 class="text-center"><?php _e( 'ANSWERS TO FREQUENTLY ASKED QUESTIONS…', 'courseplanner' ); ?></h2>
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