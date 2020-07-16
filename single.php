<?php get_header();?>

    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <?php 
                                    if ( has_post_thumbnail() ) {
                                    the_post_thumbnail( 'the_post_thumbnail', array( 'class' => 'img-fluid' ) );
                                    }
                                ?>
                                <a href="#" class="blog_item_date">
                                    <h3><?php the_time('d');?></h3>
                                    <p><?php the_time('M');?></p>
                                </a>
                            </div>
                            
                            <div class="blog_details">
                                
                            <h1 style="color: black "><?php the_title();?></h1>
                            
                            
                                <ul class="blog-info-link list-unstyled">
                                    <li><i class="fa fa-user"></i><?php the_author();?></li>
                                    <li><?php the_tags('<span>Etiquetas: </span>', '-', '' );?></li>
                                    <li><?php the_category('<span>Etiquetas: </span>', '-', '' );?></li>
                                    <li><?php bs_social_share();?></li>
                                </ul>
                                <div>
                                    <?php the_content();?>
                                </div>
                                <h5>Compartir:</h5>
                                <?php bs_social_share();?>
                            </div>
                        </article>

                        <?php endwhile; else : ?>
                            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <?php get_sidebar();?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

<?php get_footer();?>