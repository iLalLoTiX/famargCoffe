<?php
/*
Template Name: Somos
Template Post Type: page
*/
get_header();
?>
<section class="ftco-counter img" id="section-about" style="background-image: url(<?php echo bloginfo('template_url');?>/images/instalaciones.jpg);
padding-top: 150px !important; padding-bot: 150px !important; ">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Nosotros</span>
                <h2 class="mb-4" style="font-family: 'Josefin Sans', Arial, sans-serif;">¿Quieres saber mas?</h2>
            </div>
        </div>
    </div>
</section>
<section class="ftco-counter img" id="1">
    <div class="container">
        
    <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 d-none d-sm-none d-md-block">
                <div class="about_thumb2">
                    <div class="img_1">
                        <img width="100%" class="hidden-table" src="<?php echo bloginfo('template_url');?>/images/nosotros2.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="about_info">
                    <div class="section_title mb-20px">
                        <h3>¿Quienes somos?</h3> 
                        <span>Empaque y selección de alta Calidad</span>
                    </div>
                    <div class="align-center border-choose">
                        <div class="images">
                            <img style="width: 70%" src="<?php echo bloginfo('template_url');?>/images/huerto2.png" alt="icon">
                        </div>
                    </div>
                    <div style="text-align: justify;">
                        <p>En Famarg nos dedicamos la compra y venta de frutas y vegetales originarias del sur del estado de Yucatán. 
                        Dichos productos son llevados a la empacadora central donde son sometidos a un minucioso proceso de selección 
                        y empaquetado para ser llevado a su destino; nos destacamos por tener altos estándares de calidad, como un tamaño uniforme 
                        y  el color característico del producto, nuestros productos pasan por filtros que nos permiten seleccionar 
                        los mejores productos, desde que ingresa, hasta se empaca.</p>
                    </div>
                

                    <div class="d-xl-none d-lg-none col-sm-12 mt-3 mb-3">
                        <div class="about_thumb2">
                            <div class="img_1">
                                <img width="100%" src="<?php echo bloginfo('template_url');?>/images/nosotros2.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="socail_links text-center">
                            <p class="mb-2" style="font-weight: 500; font-size: 18px;">Siguenos en nuestra redes sociales</p>
                        <ul style="padding: 0px;">
                            <li>
                                <a href="https://www.facebook.com/Famarg-104780141189748" target="_blank">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/comercializadora.famarg/" target="_blank">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCvwG4Q8gn72B_sDaXqMuEdw" target="_blank">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-counter img" id="2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="about_info">
                    <div class="section_title mb-20px">
                        <h3>¿Que hacemos?</h3> 
                        <span>Para que lo anterior se cumpla, describimos lo que hacemos a continuación.</span>
                    </div>
                    <div style="text-align: justify;">
                        <p>Detrás de cada fruta que llega a su destino, existe una parte de cada uno de los trabajadores 
                            FAMARG que hacen posible esta labor. Somos una familia integrada por compradores, por empacadores, 
                            por oficinistas, por promotores, por choferes y copilotos, cada uno apoyando con sus fortalezas 
                            procurando siempre hacer la mejor labor posible y así lograr los objetivos de la empresa.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <h5>1. Comercializadora FAMARG en las compras de productos: </h5>
                <div class="unordered-list">
                    <ul >
                        <li>Se asocia con productores para asegurar la solvencia de los productos que ofrecemos y garantizar calidad en productos seleccionados.</li>
                        <li>Atestigua que los productos sean totalmente frescos.</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <h5>2. Comercializadora FAMARG en los filtros de calidad: </h5>
                <div class="unordered-list">
                    <ul class="unordered-list">
                        <li>Comercializadora FAMARG en la distribución de nuestros productos.</li>
                        <li>Somete los productos a una báscula para proveer la cantidad exacta de producto que se solicita.</li>
                        <li>Empaca estéticamente los productos para su distribución en las sucursales correspondientes.</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <h5>3. Comercializadora FAMARG en la distribución de nuestros productos: </h5>
                <div class="unordered-list">
                    <ul class="unordered-list">
                        <li>Elabora estrategias de recorridos a los diferentes destinos para cumplir en tiempo y forma con las entregas de nuestro servicio.</li>
                        <li>Cuenta con un filtro de revisión mientras se carga al vehículo para verificar que el producto solicitado llegue a su destino en su totalidad.</li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
</section>


<section class="ftco-gallery">
        <div class="container-wrap">
            <div class="row no-gutters">
            <?php echo do_shortcode( '[modula id="59"]' ); ?>
        </div>
    </div>
</section>

    
<?php get_footer();
?>