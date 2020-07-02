<?php
/*
Template Name: Productos
Template Post Type: page
*/
                                    
get_header();
?>
<section class="ftco-counter ftco-bg-dark img" id="section-about" style="background-image: url(<?php echo bloginfo('template_url');?>/images/vegetales.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Descubre la calidad</span>
                    <h2 style="color: white;" class="mb-4">Productos</h2>
                    <p style="color: white;">Famarg tiene como criterio minuciosos estandares de calidad ¿Quieres saber más sobre nuestro productos? 
                        selecciona el producto de tu preferencia y descubre las posibilidades con la calidad #Famarg</p>
                    <ul class="action-icons">
                        <li><span><i class="fa fa-info"></i> Ficha Tecnica</span></li>
                        <li><span><i class="fa fa-eye"></i> Caracteristicas</span></li>
                        <li><span><i class="fa fa-cutlery"></i> Recetas</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Productos Escritorio y Tabletas -->
    <section class="ftco-menu d-none col-md-12 d-sm-block">
        <div class="container">
            <div class="row d-md-flex">
                <div class="col-lg-12 ftco-animate p-md-5">
                    <div class="row">
                        <div class="d-none col-md-12 d-sm-block nav-link-wrap mb-5">
                            <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <?php 
                            $testArray = array();
                            $testName = array();
                            foreach( get_categories() as $category ){
                                if ($category->cat_name  != ('Recetas'))
                                {
                                    $catId = $category->cat_ID; 
                                    $catName = $category->cat_name;
                                    $testArray[] = $catId;
                                    $testName[] = $catName;
                            ?>
                                <a class="nav-link" data-toggle="pill" role="tab" aria-selected="false" href="#<?php echo $catId;?>"><?php echo $category->cat_name;?></a>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                        <div class="d-none col-md-12 d-sm-block">

                            <div class="tab-content" id="v-pills-tabContent">
                            <?php 
                                for($i=0;$i<count($testArray);$i++) 
                                {
                            ?>
                                <div class="tab-pane fade<?php if($i <= 0){echo 'show active';}?>" id="<?php echo $testArray[$i]; ?>" role="tabpanel">
                                    <div class="row">
                                        <!-- start -->
                                        <?php 
                                        $args = array(
                                            'category_name'=>$testName[$i],
                                            'cat' => '-5'
                                        );
                                        query_posts($args);
                                        while(have_posts()): 
                                        the_post(); 
                                        ?>
                                        <div class="col-md-4 col-lg-3 ftco-animate">
                                            <div class="product">
                                                <div class="img-prod">
                                                    <?php 
                                                        if ( has_post_thumbnail() ) {
                                                        the_post_thumbnail( 'the_post_thumbnail', array( 'class' => 'img-fluid' ) );
                                                        }
                                                        $temporada = false;
                                                        // Filtrar para mostrar si esta en temporada o no.
                                                        
                                                        if(get_post_meta($post->ID, 'temp', true)){
                                                            $mis_valores_de_campos = get_post_meta($post->ID, 'temp', true);
                                                            foreach ( $mis_valores_de_campos as $fecha) 
                                                            {
                                                                if($fecha == date('n'))
                                                                {
                                                                    $temporada = true;
                                                                    break;
                                                                }
                                                            }
                                                        }
                                                    ?>
                                                    <?php if($temporada == true){ ?>
                                                        <span class="status">Temporada</span>
                                                    <?php }else{?>
                                                        <span class="nostatus">No disponible</span>
                                                    <?php }?>
                                                    
                                                    <div class="overlay"></div>
                                                </div>
                                                <div class="text py-3 pb-4 px-3 text-center">
                                                    <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                                    <div class="d-flex">
                                                        <div class="pricing">
                                                            <p class="price"><?php if(get_post_meta($post->ID, 'sku', true)){ echo get_post_meta($post->ID, 'sku', true); }else{ echo 'N/A';}?></p>
                                                        </div>
                                                    </div>
                                                    <div class="bottom-area d-flex px-3">
                                                        <div class="m-auto d-flex">
                                                            <a href="<?php the_permalink();?>" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                                <span style="color:white"><i class="fa fa-eye"></i></span>
                                                            </a>
                                                            <a href="<?php the_permalink();?>" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                                <span style="color:white"><i class="fa fa-info"></i></span>
                                                            </a>
                                                            
                                                            <?php global $post;
                                                                if(get_the_tags()){
                                                                    foreach(get_the_tags($post->ID) as $tag)
                                                                    {
                                                                        echo '<a href="' . get_tag_link($tag->term_id) . '" class="buy-now d-flex justify-content-center align-items-center mx-1"><span style="color:white">
                                                                        <i class="fa fa-cutlery"></i></span></a>';
                                                                    }
                                                                }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php
                                        endwhile;
                                        ?>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Productos Celulares -->
    <section class="ftco-menu d-xl-none d-lg-none d-md-none col-sm-12 ">
        <div class="row d-md-flex ">
            
        <div class="d-xl-none d-lg-none d-md-none col-sm-12 nav-link-wrap sticky">
            <div class="nav ftco-animate nav-pills justify-content-center">
                <div class="row justify-content-center mb-5">
                    <div class="nav-link active show" id="cat-sm" data-toggle="pill" role="tab" aria-selected="false"><?php echo $testName[0];?></div>
                </div>  
            </div>
        </div>
            <div class="col-lg-12 ftco-animate p-md-5">
                <div class="row">
                    
                    <div class="d-xl-none d-lg-none d-md-none col-sm-12">
                        <div class="carousel-work owl-carousel">
                        <?php 
                            for($i=0;$i<count($testArray);$i++) 
                            {
                                
                        ?>
                            <div class="row">
                            <h2 class="sticky"><?php echo $testName[$i]; ?></h2>
                                <?php 
                                $args = array(
                                    'category_name'=>$testName[$i],
                                    'cat' => '-5'
                                );
                                query_posts($args);
                                while(have_posts()): 
                                the_post(); 
                                ?>
                                <div class="col-md-6 ftco-animate">
                                    <div class="product">
                                        <div class="img-prod">
                                        <?php 
                                            if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'the_post_thumbnail', array( 'class' => 'img-fluid' ) );
                                            }
                                            $temporada = false;
                                            // Filtrar para mostrar si esta en temporada o no.
                                            if(get_post_meta($post->ID, 'temp', true)){
                                                $mis_valores_de_campos = get_post_meta($post->ID, 'temp', true);
                                                foreach ( $mis_valores_de_campos as $fecha) 
                                                {
                                                    if($fecha == date('n'))
                                                    {
                                                        $temporada = true;
                                                        break;
                                                    }
                                                }
                                            }
                                        ?>
                                        <?php if($temporada == true){ ?>
                                            <span class="status">Temporada</span>
                                        <?php }else{?>
                                            <span class="nostatus">No disponible</span>
                                        <?php }?>
                                            <div class="overlay"></div>
                                        </div>
                                        <div class="text py-3 pb-4 px-3 text-center">
                                            <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                            <div class="d-flex">
                                                <div class="pricing">
                                                    <p class="price"><?php if(get_post_meta($post->ID, 'sku', true)){ echo get_post_meta($post->ID, 'sku', true); }else{ echo 'N/A';}?></p>
                                                </div>
                                            </div>
                                            <div class="bottom-area d-flex px-3">
                                                <div class="m-auto d-flex">
                                                    <a href="<?php the_permalink();?>" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                        <span style="color:white"><i class="fa fa-eye"></i></span>
                                                    </a>
                                                    <a href="<?php the_permalink();?>" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                        <span style="color:white"><i class="fa fa-info"></i></span>
                                                    </a>
                                                    
                                                    <?php global $post;
                                                        if(get_the_tags()){
                                                            foreach(get_the_tags($post->ID) as $tag)
                                                            {
                                                                echo '<a href="' . get_tag_link($tag->term_id) . '" class="buy-now d-flex justify-content-center align-items-center mx-1"><span style="color:white">
                                                                <i class="fa fa-book"></i></span></a>';
                                                            }
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                endwhile;
                                ?>
                            </div>
                        <?php
                        }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer();?>