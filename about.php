<?php
/*
Template Name: Nosotros
Template Post Type: page
*/
get_header();
?>
<section class="ftco-counter ftco-bg-dark img" id="section-about" style="background-image: url(<?php echo bloginfo('template_url');?>/images/instalaciones.jpg);
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
<section class="ftco-counter ftco-bg-dark img" id="section-counter">
        <div class="overlay"></div>
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
                            <h3>Nosotros <img src="<?php echo bloginfo('template_url');?>/images/huerto2.png" alt="icon"></h3> 
                            <div class="images">
                                
                            </div>
                            <span>Empaque y selección de alta Calidad</span>
                        </div>
                        <div class="align-center border-choose">
                        </div>
                        <div style="text-align: justify;">
                        <p >En Famarg nos dedicamos la compra y venta de frutas y vegetales originarias del sur del estado de Yucatán. 
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
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer();
?>