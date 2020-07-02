<?php get_header();?>
<section class="ftco-counter ftco-bg-dark img" id="section-about" style="background-image: url(<?php echo bloginfo('template_url');?>/images/vegetales.jpg);
padding-top: 150px !important; padding-bot: 150px !important; ">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                
                <span class="subheading"><?php wp_title('');?></span>
                <h2 class="mb-4" style="font-family: 'Josefin Sans', Arial, sans-serif;">Bienvenido a nuestro sitio de noticias</h2>
            </div>
        </div>
    </div>
</section>

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
                                <a class="d-inline-block" href="<?php the_permalink();?>">
                                    <h2 style="color: black "><?php the_title();?></h2>
                                </a>
                                <p><?php echo excerpt('20');?></p>
                                <ul class="blog-info-link list-unstyled">
                                    <li><i class="fa fa-user"></i><?php the_author();?></li>
                                </ul>
                            </div>
                        </article>

                        <?php endwhile; else : ?>
                            <p><?php esc_html_e( 'Huy!, parece que lo que estas buscando no se encuentra en neustra pagina, lo sentimos mucho :(' ); ?></p>
                        <?php endif; ?>
                        
                        <nav class="blog-pagination justify-content-center d-flex">
                        <?php get_template_part('plantillas/content', 'paginacion')?>
                        </nav>
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