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
                                    <textarea id="message" name="message" placeholder="Message*" required=""></textarea>
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
            </section>            

<?php get_footer(); ?>