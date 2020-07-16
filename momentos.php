<?php
/*
Template Name: Momentos
Template Post Type: page
*/
get_header();
?>
<section class="ftco-counter img" id="section-about" style="background-image: url(<?php echo bloginfo('template_url');?>/images/vegetalesLocal.jpg);
padding-top: 150px !important; padding-bot: 150px !important; ">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Comunidad</span>
                <h2 class="mb-4" style="font-family: 'Josefin Sans', Arial, sans-serif;">Momentos Famarg</h2>
            </div>
        </div>
    </div>
</section>
<section class="ftco-counter img" id="1">
    <div class="container">
        
    <div class="row align-items-center">


    <div class="col-md-12">
                <div class="about_info">
                    <div class="section_title text-center">
                        <h3>Momentos Famarg</h3> 
                        <span>Comparte y descubre en nuestra comunidad</span>
                    </div>
                    <div class="align-center border-choose">
                        <div class="images">
                            <img style="width: 70%" src="<?php echo bloginfo('template_url');?>/images/huerto2.png" alt="icon">
                        </div>
                    </div>
                    <div style="text-align: center;">
                        <p>Bienvenido a nuestra comunidad, en Famarg queremos estar cerca de ti y compartir #MomentosFamarg, 
                            ¿Quieres saber más acerca de nosotros y lo que puedes lograr con nuestros productos? Hemos creado secciones donde
                            puedes informarte hacerca de nuestros productos y algunas recetas para compartir deliciosas comidas con los tuyos.</p>
                        <p><a href="#" class="btn btn-primary p-3 mr-2 px-xl-4 py-xl-3">Recetas</a><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Productos</a></p>
                        <p>¿Te interesa saber mas acerca de los procesos de producción?</p>
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
            <div class="col-md-2">
            </div>
            <div class=" col-md-8">
                <div class="about_thumb2">
                    <div class="img_1">
                        <img width="100%" class="hidden-table" src="<?php echo bloginfo('template_url');?>/images/pimientos5.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            </div>

        </div>
    </div>
</section>

<section class="ftco-gallery">
        <div class="container-wrap">
            <div class="row no-gutters">
            <?php echo do_shortcode( '[instagram-feed num=9 cols=3]' ); ?>
        </div>
    </div>
</section>

    
<?php get_footer();
?>