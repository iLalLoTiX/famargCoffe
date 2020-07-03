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
                                    <td><?php if(get_post_meta($post->ID, 'sku', true)){ echo get_post_meta($post->ID, 'sku', true); }else{ echo 'N/A';}?></td>
                                    <td>TEMPERATURA DE RECIBO:</td>
                                    <td><?php if(get_post_meta($post->ID, 'sku', true)){ echo get_post_meta($post->ID, 'sku', true); }else{ echo 'N/A';}?></td>
                                </tr>
                                <tr>
                                    <td>COLOR:</td>
                                    <td><?php if(get_post_meta($post->ID, 'sku', true)){ echo get_post_meta($post->ID, 'sku', true); }else{ echo 'N/A';}?></td>
                                    <td>EMBALAJE:</td>
                                    <td><?php if(get_post_meta($post->ID, 'sku', true)){ echo get_post_meta($post->ID, 'sku', true); }else{ echo 'N/A';}?></td>
                                </tr>
                                <tr>
                                    <td>TEXTURA:</td>
                                    <td><?php if(get_post_meta($post->ID, 'sku', true)){ echo get_post_meta($post->ID, 'sku', true); }else{ echo 'N/A';}?></td>
                                    <td>PRESENTACION:</td>
                                    <td><?php if(get_post_meta($post->ID, 'sku', true)){ echo get_post_meta($post->ID, 'sku', true); }else{ echo 'N/A';}?> KG</td>
                                </tr>
                                <tr>
                                    <td>PESO MINIMO:</td>
                                    <td><?php if(get_post_meta($post->ID, 'sku', true)){ echo get_post_meta($post->ID, 'sku', true); }else{ echo 'N/A';}?> KG</td>
                                    <td>TEMPERATURA DE ANAQUEL:</td>
                                    <td><?php if(get_post_meta($post->ID, 'sku', true)){ echo get_post_meta($post->ID, 'sku', true); }else{ echo 'N/A';}?></td>
                                </tr>
                                <tr>
                                    <td>PESO MAXIMO:</td>
                                    <td><?php if(get_post_meta($post->ID, 'sku', true)){ echo get_post_meta($post->ID, 'sku', true); }else{ echo 'N/A';}?> KG</td>
                                    <td>HUMEDAD:</td>
                                    <td><?php if(get_post_meta($post->ID, 'sku', true)){ echo get_post_meta($post->ID, 'sku', true); }else{ echo 'N/A';}?></td>
                                </tr>
                                <tr>
                                    <td>CALIBRE:</td>
                                    <td><?php if(get_post_meta($post->ID, 'sku', true)){ echo get_post_meta($post->ID, 'sku', true); }else{ echo 'N/A';}?></td>
                                    <td>PUNTO DE CONGELACION:</td>
                                    <td><?php if(get_post_meta($post->ID, 'sku', true)){ echo get_post_meta($post->ID, 'sku', true); }else{ echo 'N/A';}?></td>
                                </tr>
                                <tr>
                                    <td>GRADOS BRIX:</td>
                                    <td><?php if(get_post_meta($post->ID, 'sku', true)){ echo get_post_meta($post->ID, 'sku', true); }else{ echo 'N/A';}?></td>
                                    <td>ROTACIÓN:</td>
                                    <td><?php if(get_post_meta($post->ID, 'sku', true)){ echo get_post_meta($post->ID, 'sku', true); }else{ echo 'N/A';}?></td>
                                </tr>
                            </tbody>
                        </table>
					</div>
    				<div class="cart-list">
                        <table class="table table-bordered table-sm">
                            <thead class="encabezado">
                                <tr>
                                    <th>3. FOTOGRAFÍA</th>
                                    <th>4. TEMPORADA</th>
                                    <th>5. ZONA DE PRODUCCION</th>
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
                                    
                                    <td class="text-center" style="width: 300px;">
                                        <?php $image = get_field('zona');
                                        if( $image ):

                                            // Image variables.
                                            $url = $image['url']; $title = $image['title']; $alt = $image['alt'];

                                            // Thumbnail size attributes.
                                            $size = 'thumbnail'; $thumb = $image['sizes'][ $size ]; ?>
                                                    <a href="<?php echo esc_url($url); ?>" title="<?php echo esc_attr($title); ?>">
                                                        <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" />
                                                    </a>
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
                                    <th>6. INFORMACION ADICIONAL</th>
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
                    <div class="cart-list">
                        <table class="table table-bordered table-sm">
                            <thead class="encabezado">
                                <tr>
                                    <th colspan="4">7. INFORMACION ADICIONAL</th>
                                </tr>
                            </thead>
                            <tbody class="tablaCuerpo">
                                <tr>
                                    <td class="text-center" >
                                    <!--DEFORMES-->
                                    <?php $image = get_field('zona');
                                    if( $image ):
                                    $url = $image['url']; $title = $image['title']; $alt = $image['alt'];
                                    $size = 'thumbnail'; $thumb = $image['sizes'][ $size ]; ?>
                                        <a href="<?php echo esc_url($url); ?>" title="<?php echo esc_attr($title); ?>">
                                            <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" />
                                        </a>
                                    <?php endif; ?>
                                    </td>
                                    <td class="text-center" >
                                    <!--CICATRIZADAS-->
                                    <?php $image = get_field('zona');
                                    if( $image ):
                                    $url = $image['url']; $title = $image['title']; $alt = $image['alt'];
                                    $size = 'thumbnail'; $thumb = $image['sizes'][ $size ]; ?>
                                        <a href="<?php echo esc_url($url); ?>" title="<?php echo esc_attr($title); ?>">
                                            <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" />
                                        </a>
                                    <?php endif; ?>
                                    </td>
                                    <td class="text-center" >
                                    <!--RAYADA-->
                                    <?php $image = get_field('zona');
                                    if( $image ):
                                    $url = $image['url']; $title = $image['title']; $alt = $image['alt'];
                                    $size = 'thumbnail'; $thumb = $image['sizes'][ $size ]; ?>
                                        <a href="<?php echo esc_url($url); ?>" title="<?php echo esc_attr($title); ?>">
                                            <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" />
                                        </a>
                                    <?php endif; ?>
                                    </td>
                                    <td class="text-center" >
                                    <!--MALTRADAS-->
                                    <?php $image = get_field('zona');
                                    if( $image ):
                                    $url = $image['url']; $title = $image['title']; $alt = $image['alt'];
                                    $size = 'thumbnail'; $thumb = $image['sizes'][ $size ]; ?>
                                        <a href="<?php echo esc_url($url); ?>" title="<?php echo esc_attr($title); ?>">
                                            <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" />
                                        </a>
                                    <?php endif; ?>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot class="encabezado">
                                <tr colspan="4">
                                    <th>DEFORMES</th>
                                    <th>CICATRIZADAS</th>
                                    <th>RAYADA</th>
                                    <th>MALTRATADAS</th>
                                </tr>
                            </tfoot>
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