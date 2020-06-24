<?php get_header();?>
    
    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg">
        <h3><?php the_title();?></h3>
    </div>
    <!-- bradcam_area_end -->



	<!-- Start Align Area -->
	<div class="whole-wrap">
		<div class="container box_1170">
			<div class="section-top-border">
            
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
				<div class="row">
					<div class="col-md-3">
                        <?php 
                        if ( has_post_thumbnail() ) {
                        the_post_thumbnail( 'the_post_thumbnail', array( 'class' => 'img-fluid' ) );
                        }
                        ?>
					</div>
					<div class="col-md-9 mt-sm-20">
                        <h1><?php the_title();?></h1>
                        <?php the_content();?>
					</div>
                </div>
                <?php endwhile; endif;?>
			</div>
            
            
           

            <div class="section-top-border">
				<div class="row">
					<div class="col-md-4">
                        
						<h3 class="mb-20">Recetas</h3>
						<div class="typography recetas">
                        <?php 
                        $tag = get_the_title();
                        $args = array(
                            'tag'=>$tag,
                        );
                        query_posts($args); 
                        while ( have_posts() ) : the_post();?>
                            <h3 class="receta"><?php the_title();?></h3>
                        <?php endwhile; ?>
                        </div>
                        
                    </div>
                    <div class="col-md-8">
                    <?php 
                    query_posts($args); 
                    while ( have_posts() ) : the_post();?>
                    <div class="articulos">
                        <div class="articulo">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1 class="receta"><?php the_title();?></h1>
                                    <?php 
                                    if ( has_post_thumbnail() ) {
                                    the_post_thumbnail( 'the_post_thumbnail', array( 'class' => 'img-fluid' ) );
                                    }
                                    ?>
                                </div>
                                <div class="col-md-6">
                                    <ul class="unordered-list">
                                        <h3>Ingredientes</h3>
                                        <?php $cadena = ( get_post_meta( $post->ID, 'ingrediente', true) );
                                        $array = explode(",", $cadena);
                                        $tamaño = sizeof($array);
                                        for($i = 0; $i < $tamaño ; $i++)
                                        {
                                                ?>
                                                <li><?php echo $array[$i];?></li>
                                                <?php
                                        } ?>
                                
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <?php the_content();?>
                            </div>                            
                        </div>
                    </div>
                    <?php endwhile; ?>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Align Area -->
<?php get_footer(); ?>