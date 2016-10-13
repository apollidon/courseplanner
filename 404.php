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