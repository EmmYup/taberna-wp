<?php get_header(); ?>

    <div id="preloader">
        <div id="beer2">
        <div class="cup">
            <div></div>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>
            <i class="bolha"></i>

        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/images/src/load-logo.png" class="logo-pre" alt="Logo de la taberna">
    </div>

</div>



    <!-- SOCIAL LINKS -->
    <div class="social-link">
        <a href="https://www.tripadvisor.com.mx/Restaurant_Review-g150807-d3750726-Reviews-La_Taberna_de_Los_Amigos-Cancun_Yucatan_Peninsula.html" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/src/tripadvisor.png" alt="La taberna Trip Advisor"></a> <!-- Trip Advisor -->
        <a href="https://www.facebook.com/latabernacancun/?fref=ts" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/src/facebook.png" alt="@Lataberna Facebook"></a> <!-- Facebook -->
        <a href="https://twitter.com/LaTaberna_Cun" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/src/twitter.png" alt="@lataberna twitter"></a> <!-- Twiter -->
        <a href="https://www.instagram.com/lataberna_cun/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/src/instagram.png" alt="@lataberna instagram"></a> <!-- Instagram -->
    </div>
    <!-- SOCIAL LINKS -->

    <!-- SLIDERS-->
<div class="ms-tabs-template ms-tabs-vertical-template" style="overflow: hidden;">
                <div class="transmisiones">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/src/youtube.png" alt="transmisiones en vivo">
                    <div class="text-transmisiones">
                        eventos con <br>
                        transmisión en vivo
                    </div>
                </div>
                <!-- masterslider -->
                <?php $fechasInhabiles = array(); ?>
                <div class="master-slider ms-skin-default" id="masterslider">
                    <?php query_posts(array('category_name'  => 'eventos',));
                        while (have_posts()): the_post(); ?>


                        <?php
                        $custom_fields = get_post_custom(get_the_ID());

                        $fecha = $custom_fields['fecha'][0];
                        $hora = $custom_fields['hora'][0];
                        array_push($fechasInhabiles, $custom_fields['Fecha'][0]);

                        $tipoFecha = $custom_fields['Fecha'][0];
                        $costo = $custom_fields['Costo'][0];
                        $tipoEvento = strtolower($custom_fields['tipo'][0]);
                        // Ruta de la imagen destacada (tamaño completo)
                        global $post;
                        $thumbID = get_post_thumbnail_id(get_the_ID());
                        $imgDestacada = wp_get_attachment_url( $thumbID );


                         ?>
                    <!-- Slider -->

                    <div class="ms-slide">

                        <?php
                            switch ($tipoEvento) {
                                case 'box':
                                    ?>
                                     <img src="../masterslider/style/blank.gif" data-src="<?php echo get_template_directory_uri(); ?>/images/src/sliders/box.png" alt="box en la taberna"/>
                                    <?php break;
                                case 'wwe-33':
                                    ?>
                                     <img src="../masterslider/style/blank.gif" data-src="<?php echo get_template_directory_uri(); ?>/images/src/sliders/wwe-33.png" alt="wrestlemania 33 en la taberna"/>
                                    <?php break;
                                case 'champions':
                                     ?>
                                    <img src="../masterslider/style/blank.gif" data-src="<?php echo get_template_directory_uri(); ?>/images/src/sliders/champions.png" alt="Champions en la taberna"/>
                                    <?php  break;

                                case 'copa-del-rey':
                                ?>
                                    <img src="../masterslider/style/blank.gif" data-src="<?php echo get_template_directory_uri(); ?>/images/src/sliders/copa-del-rey.png" alt="Champions en la taberna"/>

                                    <?php break;
                                case 'futbol':
                                    ?>
                                    <img src="../masterslider/style/blank.gif" data-src="<?php echo get_template_directory_uri(); ?>/images/src/sliders/futbol.png" alt="Champions en la taberna"/>
                                    <?php break;

                                case 'mlb':
                                    ?>
                                    <img src="../masterslider/style/blank.gif" data-src="<?php echo get_template_directory_uri(); ?>/images/src/sliders/mlb.png" alt="Champions en la taberna"/>
                                   <?php break;
                                case 'nfl':
                                    ?>
                                    <img src="../masterslider/style/blank.gif" data-src="<?php echo get_template_directory_uri(); ?>/images/src/sliders/nfl.png" alt="Champions en la taberna"/>

                                    <?php  break;
                                case  'ufc':
                                    ?>
                                    <img src="../masterslider/style/blank.gif" data-src="<?php echo get_template_directory_uri(); ?>/images/src/sliders/ufc.png" alt="Champions en la taberna"/>
                                   <?php   break;


                                default:
                                    ?>
                                    <img src="../masterslider/style/blank.gif" data-src="<?php echo get_template_directory_uri(); ?>/images/src/sliders/futbol.png" alt="Champions en la taberna"/>
                                    <?php  break;
                            }
                         ?>

                        <div class="ms-thumb">
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo $fecha; ?> | <?php echo $hora; ?></p>
                        </div>



                        <img class="ms-layer" alt="lorem ipsum dolor sit"

                             data-type          = "image"
                             data-effect        = "right(90)"
                             data-duration      = "200"
                             data-ease          = "easeOutQuart"
                             style              = "top: 120px; left: 150px;"



                             src="<?php echo get_template_directory_uri(); ?>/masterslider/blank.gif"
                             data-src="<?php echo $imgDestacada; ?>"
                        />

                        <div class="ms-layer ms-caption"
                            style="top: 300px">
                            <?php the_content(); ?>

                        </div>
                        <div class="ms-layer" style="top:415px; left: 150px;">
                            <a href="#" data-tipo-evento="<?php echo $tipoEvento ?>" data-img="<?php echo $imgDestacada; ?>" data-tipo-fecha="<?php echo $tipoFecha; ?>" data-fecha="<?php echo $fecha; ?>" data-horario="<?php echo $hora; ?>" data-evento="<?php the_title(); ?>"  data-costo="<?php echo $costo; ?>" class="link-reserva">
                            Reserva Ahora
                        </a>
                        </div>
                    </div>
                    <!-- Slider -->
                     <?php endwhile; wp_reset_query(); ?>

                </div>
                <!-- end of masterslider -->
    </div>

    <script>
        var diasInhabiles = <?php  echo json_encode($fechasInhabiles); ?>
    </script>
    <!-- SLIDERS-->




    <!-- Promoción del dia -->

    <div class="promocion-dia" id="promocion-dia">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="promocion-text">
                        <span data-aos="fade-up" data-aos-delay="400">Cada Dia una</span> <br>
                        <span data-aos="fade-up" data-aos-delay="500" class="text-1">promocion</span> <br>
                        <span data-aos="fade-up" data-aos-delay="600" class="text-2">diferente</span>
                    </div>
                </div>

                <?php
                    $dia = date("l");

                 ?>
                <div class="col-md-7">
                    <div class="carousel-promo owl-carousel">
                        <div class="item-promo item <?php if($dia == 'Monday'){ ?> active dia-select <?php  }?>">
                            <a href="#" data-toggle="modal" data-target="#lunes"><img src="<?php echo get_template_directory_uri(); ?>/images/src/lunes-c.png" alt="Martes promocion la taberna"></a>
                        </div>
                        <div class="item-promo item <?php if($dia == 'Tuesday'){ ?> active dia-select <?php  }?>">
                            <a href="#" data-toggle="modal" data-target="#martes"><img src="<?php echo get_template_directory_uri(); ?>/images/src/martes.png" alt="Martes promocion la taberna"></a>
                        </div>
                        <div class="item-promo item <?php if($dia == 'Wednesday'){ ?> active dia-select <?php  }?>">
                            <a href="#" data-toggle="modal" data-target="#miercoles"><img src="<?php echo get_template_directory_uri(); ?>/images/src/miercoles-c.png" alt="Martes promocion la taberna"></a>
                        </div>
                        <div class="item-promo item <?php if($dia == 'Thursday'){ ?> active dia-select <?php  }?>">
                            <a href="#" data-toggle="modal" data-target="#jueves"><img  src="<?php echo get_template_directory_uri(); ?>/images/src/jueves-c.png" alt="Martes promocion la taberna"></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODALS DEL DIA -->

    <div class="modal modal-dia fade" id="domingo">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">X</a>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/src/t-domingo.png" alt="promocion de domingo de compadres">
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-dia fade" id="lunes">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">X</a>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/src/t-lunes.png" alt="promocion de lunes de pasta">
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-dia fade" id="martes">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">X</a>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/src/t-martes.png" alt="promocion de martes de hamburguesas">
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-dia fade" id="miercoles">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">X</a>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/src/t-miercoles.png" alt="promocion de miercolitros">
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-dia fade" id="jueves">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">X</a>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/src/t-jueves.png" alt="promocion de juevebes">
                </div>
            </div>
        </div>
    </div>

    <!-- MODALS DEL DIA -->




    <!-- Promoción del dia -->

    <div class="historia" id="historia">
        <img data-aos="zoom-in-right" src="<?php echo get_template_directory_uri(); ?>/images/src/pele.png" class="decoration pele" alt="pele la taberna">
        <img data-aos="zoom-in-right" src="<?php echo get_template_directory_uri(); ?>/images/src/bat.png" class="decoration bat" alt="beisbol la taberna">
        <div class="container">
            <div class="row">
                <img src="<?php echo get_template_directory_uri(); ?>/images/src/tabertubo.png" class="chica" alt="Chica La taberna ">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">
                    <div class="clear-30"></div>
                    <div class="text-32">
                        MÁS DE 18 AÑOS ENTRE <strong>AMIGOS</strong>
                    </div>
                    <div class="video">
                        <iframe width="546" height="305" src="https://www.youtube.com/embed/OCqSTRKGIPc" frameborder="0" allowfullscreen></iframe>
                    </div>

                    <div class="text-16">
                        Si de ver deporte en vivo se trata, la
                        taberna es el mejor lugar para disfrutar en  grupo, una variedad de eventos deportivos
                        relevantes.
                    </div>
                    <div class="link-historia">
                        <a href="#" data-toggle="modal" data-target="#modal-historia">NUESTRA HISTORIA</a>
                    </div>
                    <div class="transmisiones text-center hidden-sm hidden-xs">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/src/9TB.png" width="45" alt="La taberna Transmision 9">
                            </div>
                            <div class="col-md-3">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/src/8TB.png" width="82" alt="La taberna Transmision 8">
                            </div>
                            <div class="col-md-3">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/src/7TB.png" width="52" alt="La taberna Transmision 7">
                            </div>
                            <div class="col-md-3">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/src/6TB.png" width="75" alt="La taberna Transmision 6">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2 col-md-offset-1">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/src/5TB.png" width="52" alt="La taberna Transmision 5">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/src/4TB.png" width="70" alt="La taberna Transmision 4">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/src/3TB.png" width="81" alt="La taberna Transmision 3">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/src/2TB.png" width="91" alt="La taberna Transmision 2">
                            </div>
                            <div class="col-md-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/src/1TB.png" width="70" alt="La taberna Transmision 1">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

<!-- MODAL HISTORIA -->
<div class="modal fade" id="modal-historia">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-body">
            <a href="#" class="close" data-dismiss="modal" aria-label="Close">X</a>
                <div class="row">
                    <div class="col-md-5">
                        <div class="historia-imagen">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/src/transparente.png" alt="La historia de la taberna">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="contenedor-historia">
                            <div class="title-modal-historia">nuestra <strong>historia</strong>
                            </div>
                            <p>Un par de instructores de buceo tenían la idea de abrir una tienda de buceo, después de regresar del viaje en el que buscaban concretar esa idea se dieron cuenta que lo que Cancún necesitaba era un lugar en donde se pueda convivir entre amigos y disfrutar del deporte, fue así como en 1998 surgió La Taberna de los amigos, el primer Sport Bar en la ciudad de Cancún, Quintana Roo ubicado en la Av. Yaxchilán. </p>

                            <p>Con el auge del internet en 1999 se incluye en sus servicios un Cyber Bar al cual llego a tener gran éxito.</p>

                            <p>En 2003 nos renovamos, presentamos una nueva imagen con el objetivo de posicionarnos como la marca líder en el concepto de sport bar and grill.</p>

                            <p>Después de 10 años de fundación, gracias al trabajo duro de nuestros colaboradores y preferencia de nuestros clientes, en 2008 abrimos las puertas de nuestra primera sucursal, misma que en el 2010 se reubico a la Av. Del Sol.</p>

                            <p>Nos seguimos fortaleciendo, en 2013 se crean las oficinas corporativas, su principal propósito es alinear  y estandarizar procesos para mejorar el servicio y atención al cliente en nuestras dos sucursales Av. Yaxchilán y Av. Del sol</p>

                            <p>2016, cumplimos nuestra mayoría de edad ya son 18 años en la preferencia de nuestros clientes, esto nos impulsa a ver mas allá. Siguiendo nuestra visión iniciamos el proyecto de franquicias en busca de nuestro crecimiento y expansión en el mercado restaurantero.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MODAL HISTORIA -->

    <!-- Menu -->
<div class="menu-section" id="menu-comida">
    <div class="menu-header">
        <img data-aos="zoom-in-left" src="<?php echo get_template_directory_uri(); ?>/images/src/patriots.png" alt="patriots la taberna" class="decoration patriots">
        <div class="menu-text" data-aos="fade-up">
            Conoce Nuestro <strong>Menú</strong>
        </div>
    </div>
    <div class="menu-body">
        <div class="container">
            <div class="row">
            <div class="clear-30"></div>
                <div class="col-md-6 primero">
                    <div class="platillo picante">
                        <div class="title-platillo">ALITAS</div>
                        <p>Las famosas, servidas con bastones de apio y zanahoria, acompañadas con aderezo blue cheese.</p>
                    </div>



                    <div class="platillo picante">
                        <div class="title-platillo">BONELESS WINGS</div>
                        <p>Pechuga de pollo al tempura, servidas con bastones de apio y zanahoria.</p>
                    </div>


                    <div class="platillo picante">
                        <div class="title-platillo">PASTA BUFFALO</div>
                        <p>Deliciosa combinacion de tu sazón preferido con pechuga de pollo parrillada y ejotes.</p>
                    </div>

                    <div class="platillo">
                        <div class="title-platillo">PASTA ALFREDO</div>
                        <p>Con pechuga de pollo al grill, champiñones, pimiento rojo y cebolla, bañada en nuestra deliciosa salsa Alfredo.</p>
                    </div>


                    <div class="platillo">
                        <div class="title-platillo">PIZZA MEXICANA</div>
                        <p>La nacionalizamos: combinación de frijoles, salsa4 chiles, jalapeño, chorizo, cebolla blanca, pimiento verde y rojo.</p>
                    </div>


                    <div class="platillo">
                        <div class="title-platillo">TABER PIZZA</div>
                        <p>Para los amantes de la carne, arrachera de cerdo, chorizo y tocino.</p>
                    </div>
                </div>
                <div class="col-md-6 segundo">
                    <div class="platillo picante">
                        <div class="title-platillo">BUFFALO CHICKEN PIZZA</div>
                        <p>La pizza con tu sazón favorito, pollo buffalo con aderezo blue cheese.</p>
                    </div>

                    <div class="platillo picante">
                        <div class="title-platillo">TABERNA BURGER</div>
                        <p>La hamburguesa mas popular con queso gouda y tocino.</p>
                    </div>

                    <div class="platillo">
                        <div class="title-platillo">MOLCAJETE AZTECA</div>
                        <p>Arrachera, cerdo, pollo y chorizo en una sabrosa salsa de cuatro chiles con nopal asado y cebollas cambray, guarnición de frijoles y guacamole, estupendo para compartir.</p>
                    </div>

                    <div class="platillo">
                        <div class="title-platillo">ENCHILADAS SUIZAS</div>
                        <p>Las tadicionales de México por que en Suiza  ¡no hay enchiladas!</p>
                    </div>

                    <div class="platillo">
                        <div class="title-platillo">CHULETAS AL GRILL</div>
                        <p>Cervidas con nopal y cebollas cambray asadas, acompañadas con guacamoles.</p>
                    </div>

                    <div class="platillo">
                        <div class="title-platillo">TABERNAZO</div>
                        <p>Alimentos + Bebidas, Elije entre  5 tipos de alimentos y  la opcion de una botella o 18 cervezas frias.</p>
                    </div>

                </div>

            </div>


            <div class="chilometro">

                <div class="chilometro-barra">
                    <div class="picante picante-nivel1">
                        <span class="barra"></span>
                        <span class="texto-barra">Naturales, Ajo, BBQ, Miel Mostaza</span>
                    </div>
                    <div class="picante picante-nivel2">
                        <span class="barra"></span>
                        <span class="texto-barra">Tamarindo</span>
                    </div>

                    <div class="picante picante-nivel3">
                        <span class="barra"></span>
                        <span class="texto-barra">Chipotle</span>
                    </div>
                    <div class="picante picante-nivel4">
                        <span class="barra"></span>
                        <span class="texto-barra">Buffalo Cayena</span>
                    </div>
                    <div class="picante picante-nivel5">
                        <span class="barra"></span>
                        <span class="texto-barra">Buffalo Cayena</span>
                    </div>
                    <div class="picante picante-nivel6">
                        <span class="barra"></span>
                        <span class="texto-barra">Mango Habanero</span>
                    </div>
                    <div class="picante picante-nivel7">
                        <span class="barra"></span>
                        <span class="texto-barra">A la Diabla</span>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div class="clear-20">

    </div>
</div>
    <!-- Menu -->

    <div class="post-blog" id="blog">
    <img src="<?php echo get_template_directory_uri(); ?>/images/src/placa2.png" alt="placa la taberna" class="decoration placa2">
        <div class="container">
            <div class="section-post text-center" data-aos="fade-down">
                Para los <strong data-aos="fade-up">amigos</strong> y más
            </div>

            <div class="row">
        <?php query_posts('tag=noticias');
            $no_posts = 0;
         while (have_posts()): the_post(); ?>
            <div class="col-md-4">

                    <div class="post" data-aos="flip-down" data-aos-delay="400">
                        <div class="image-post">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                        </div>
                        <div class="title-post">
                           <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
                        </div>
                        <div class="description-post">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="social-links-post">

                            <a href="javascript:void(0)" onclick="window.open ('https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>', 'Facebook', 'toolbar=0, status=0, width=550, height=350');" ><i class="fa fa-facebook" aria-hidden="true"></i></a>

                            <!-- Twitter -->
                            <a href="javascript:void(0)" onclick="window.open ('https://twitter.com/home?status=%23VamosAlaTaberna%20<?php the_permalink(); ?> ', 'Twitter', 'toolbar=0, status=0, width=550, height=350');"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <!-- Twitter -->
                            <!-- Google Plus -->
                            <a href="javascript:void(0)" onclick="window.open ('https://plus.google.com/share?url=<?php the_permalink(); ?> ', 'Twitter', 'toolbar=0, status=0, width=550, height=350');"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <!-- Google Plus -->
                        </div>
                    </div>
                </div>

        <?php $no_post++; if($no_post == 3){break;} endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </div>


    <div class="bolsa-trabajo" id="bolsa-trabajo">
    <img src="<?php echo get_template_directory_uri(); ?>/images/src/champions.png" alt="Champions la taberna" class="decoration champions">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                    <!-- SnapWidget -->
                    <!-- SnapWidget -->
                    <script src="https://snapwidget.com/js/snapwidget.js"></script>
                    <iframe src="https://snapwidget.com/embed/337792" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>



                    <div class="rate-social">
                        <a href="https://www.facebook.com/pg/latabernacancun/reviews/" target="_blank" class="facebook">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            <span>4.3</span>

                            <i class="fa fa-star" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.tripadvisor.com.mx/UserReviewEdit-g150807-d3750726-ehttp:__2F____2F__www__2E__tripadvisor__2E__com__2E__mx__2F__Restaurant__5F__Review__2D__g150807__2D__d3750726__2D__Reviews__2D__La__5F__Taberna__5F__de__5F__Los__5F__Amigos__2D__Cancun__5F__Yucatan__5F__Peninsula__2E__html-La_Taberna_de_Los_Amigos-Cancun_Yucatan_Peninsula.html" target="_blank" class="tripadvisor">
                            <i class="fa fa-tripadvisor" aria-hidden="true"></i>
                            <span>4.0</span>

                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="title-bolsa" data-aos="fade-down">
                        ¡ven y trabaja entre <strong>amigos</strong>!
                    </div>
                    <div class="clear-20"></div>
                    <div class="row">
                        <div class="col-md-4" data-aos="fade-down" data-aos-delay="700">
                            <div class="step-bolsa text-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/src/llena.png" alt="Llena solicitud">
                            </div>
                            <div class="clear-15"></div>
                            <p class="text-center" >1.- llena nuestra solicitud.</p>
                        </div>
                        <div class="col-md-4" data-aos="fade-down" data-aos-delay="800">
                            <div class="step-bolsa text-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/src/espera.png" alt="Espera llamada">
                            </div>
                            <div class="clear-15"></div>
                            <p class="text-center">2.- espera nuestra llamada.</p>
                        </div>
                        <div class="col-md-4" data-aos="fade-down" data-aos-delay="900">
                            <div class="step-bolsa text-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/src/entrevista.png" alt="Acude a la entrevista">
                            </div>
                            <div class="clear-15"></div>
                            <p  class="text-center">3.- asiste a tu entrevista.</p>
                        </div>
                    </div>
                    <div class="clear-20"></div>
                    <a href="#" data-toggle="modal" data-target="#modal-bolsa" class="btn-bolsa">¡TRABAJA CON NOSOTROS!</a>
                </div>

            </div>
        </div>
        <div class="diagonal"></div>
    </div>





    <div class="mapa-contenedor" id="sucursales">

        <img src="<?php echo get_template_directory_uri(); ?>/images/src/placa.png" alt="placa la taberna" class="decoration placa">
        <div class="direcciones">
            <div class="clear-60"></div>
            <div class="sucursales">
                <div class="sucursal color-azul">
                    <span class="font-19 ">Sucursal Yaxchilán</span> <br>
                    <span class="font-15">Av. Yaxchilán #23 SM. 24 Col. Centro</span> <br>
                    <span class="font-19">Tel: (998) 887-5433</span>
                </div>
                <div class="clear-30"></div>
                <div class="sucursal color-azul">
                    <span class="font-19">Sucursal Sol</span> <br>
                    <span class="font-15">Av. del Sol Esq. Andres Q Roo SM. 44</span> <br>
                    <span class="font-19">Tel: (998) 206-2006</span>
                </div>
            </div>
            <div class="clear-20"></div>
            <div class="social-sucursales">

                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/src/tripadvisor-azul.png" alt="La taberna Trip Advisor"></a> <!-- Trip Advisor -->

                <a href="javascript:void(0)" onclick="window.open ('https://www.facebook.com/sharer/sharer.php?u=http%3A//www.lataberna.com.mx/', 'Facebook', 'toolbar=0, status=0, width=550, height=350');"><img src="<?php echo get_template_directory_uri(); ?>/images/src/facebook-azul.png" alt="@Lataberna Facebook"></a> <!-- Facebook -->

                <a href="javascript:void(0)" onclick="window.open ('https://twitter.com/home?status=%23VamosAlaTaberna%20http%3A//www.lataberna.com.mx/', 'Twitter', 'toolbar=0, status=0, width=550, height=350');" ><img src="<?php echo get_template_directory_uri(); ?>/images/src/twitter-azul.png" alt="@lataberna twitter"></a> <!-- Twiter -->

                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/src/instagram-azul.png" alt="@lataberna instagram"></a> <!-- Instagram -->

            </div>
            <div class="hashtag">
                #VamosAlaTaberna
            </div>
        </div>
        <div class="mapa" id="map" style="height: 630px"></div>

        <div class="footer">
            <footer>
                <img src="<?php echo get_template_directory_uri(); ?>/images/src/footer.png" alt="footer la taberna">
                <div class="text-footer">
                    <div class="copy">
                        &copy; 2017 | <h1> &nbsp; La taberna de los Amigos</h1>

                    </div>
                    <div class="links-footer">
                         <a href="<?php echo esc_url( home_url( '/' ) ); ?>politicas-de-privacidad/">Politica de Privacidad</a>
                        | &nbsp;<a href="<?php echo esc_url( home_url( '/' ) ); ?>politicas-de-cancelacion/">Politica de Cancelaciones</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>






    <!-- JS -->





<?php get_footer(); ?>
