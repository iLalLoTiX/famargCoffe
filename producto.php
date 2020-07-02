<?php
/*
Template Name: Ficha Producto
Template Post Type: post
*/
get_header();
?>

    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row" id="areaImprimir">
                <img width="25%" src="<?php echo bloginfo('template_url');?>/images/logo_1.png" alt="">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    				<div class="cart-list">
                        <table class="table table-bordered table-sm">
                            <thead class="encabezado">
                                <tr>
                                    <th>DESCRIPCIÓN</th>
                                    <th>CODIGO</th>
                                    <th>UNIDAD DE MEDIDA</th>
                                </tr>
                            </thead>
                            <tbody class="tablaCuerpo">
                                <tr>
                                    <td><?php the_title();?></td>
                                    <td><?php if(get_post_meta($post->ID, 'sku', true)){ echo get_post_meta($post->ID, 'sku', true); }else{ echo 'N/A';}?></td>
                                    <td>KILOGRAMO</td>
                                </tr>
                            </tbody>
                        </table>
					</div>
    				<div class="cart-list">
                        <table class="table table-bordered table-sm">
                            <thead class="encabezado">
                                <tr>
                                    <th colspan="2">1. CARACTERISTICAS DEL PRODUCTO</th>
                                    <th colspan="2">2. RECEPCION</th>
                                </tr>
                            </thead>
                            <tbody class="tablaCuerpo">
                                <tr>
                                    <td>FORMA:</td>
                                    <td>REDONDA</td>
                                    <td>TEMPERATURA DE RECIBO:</td>
                                    <td>TEMPERATURA AMBIENTE</td>
                                </tr>
                                <tr>
                                    <td>COLOR:</td>
                                    <td>VERDE OBSCURO</td>
                                    <td>EMBALAJE:</td>
                                    <td>PLASTICO CARTON</td>
                                </tr>
                                <tr>
                                    <td>TEXTURA:</td>
                                    <td>PIEL DELGADA, INTERIOR CRUJIENTE</td>
                                    <td>PRESENTACION:</td>
                                    <td>18 KG</td>
                                </tr>
                                <tr>
                                    <td>PESO MINIMO:</td>
                                    <td>250 KG</td>
                                    <td>TEMPERATURA DE ANAQUEL:</td>
                                    <td>VITRINA - AMBIENTE</td>
                                </tr>
                                <tr>
                                    <td>PESO MAXIMO:</td>
                                    <td>750 KG</td>
                                    <td>HUMEDAD:</td>
                                    <td>N/A</td>
                                </tr>
                                <tr>
                                    <td>CALIBRE:</td>
                                    <td>N/A</td>
                                    <td>PUNTO DE CONGELACION:</td>
                                    <td>N/A</td>
                                </tr>
                                <tr>
                                    <td>GRADOS BRIX:</td>
                                    <td>N/A</td>
                                    <td>ROTACIÓN:</td>
                                    <td>N/A</td>
                                </tr>
                            </tbody>
                        </table>
					</div>
    				<div class="cart-list">
                        <table class="table table-bordered table-sm">
                            <thead class="encabezado">
                                <tr>
                                    <th>3. FOTOGRAFÍA</th>
                                    <th>2. TEMPORADA</th>
                                    <th>3. ZONA DE PRODUCCION</th>
                                </tr>
                            </thead>
                            <tbody class="tablaCuerpo">
                                <tr>
                                    <td style="width: 300px;">
                                        <div>
                                            <?php 
                                                if ( has_post_thumbnail() ) {
                                                the_post_thumbnail( 'the_post_thumbnail', array( 'class' => 'img-fluid' ) );
                                                }
                                            ?>
                                        </div>
                                    </td>
                                    <td>
                                    <?php
                                        // Load field settings and values.
                                        $field = get_field_object('temp');
                                        $colors = $field['value'];

                                        // Display labels.
                                        if( $colors ): ?>
                                        <ul>
                                            <?php foreach( $colors as $color ): ?>
                                                <li><?php echo $field['choices'][ $color ]; ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                        <?php endif; ?>
                                    </td>
                                    
                                    <td style="width: 300px;">
                                        <?php
                                        $image = get_field('zona');
                                        if( $image ):

                                            // Image variables.
                                            $url = $image['url'];
                                            $title = $image['title'];
                                            $alt = $image['alt'];
                                            $caption = $image['caption'];

                                            // Thumbnail size attributes.
                                            $size = 'thumbnail';
                                            $thumb = $image['sizes'][ $size ];
                                            $width = $image['sizes'][ $size . '-width' ];
                                            $height = $image['sizes'][ $size . '-height' ];

                                            // Begin caption wrap.
                                            if( $caption ): ?>
                                                <div class="wp-caption">
                                            <?php endif; ?>

                                            <a href="<?php echo esc_url($url); ?>" title="<?php echo esc_attr($title); ?>">
                                                <img src="<?php echo esc_url($size); ?>" alt="<?php echo esc_attr($alt); ?>" />
                                            </a>

                                            <?php 
                                            // End caption wrap.
                                            if( $caption ): ?>
                                                <p class="wp-caption-text"><?php echo esc_html($caption);?></p>
                                                </div>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="cart-list">
                        <table class="table table-bordered table-sm">
                            <thead class="encabezado">
                                <tr>
                                    <th>5. INFORMACION ADICIONAL</th>
                                </tr>
                            </thead>
                            <tbody class="tablaCuerpo">
                                <tr>
                                    <td>
                                        <?php the_content();?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
					</div>
                <?php endwhile; else : ?>
                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
            </div>
            <input type="button" onclick="printDiv('areaImprimir')" value="imprimir div"/>
        </div>
    </section>
    <!--================Blog Area =================-->

<?php get_footer();?>