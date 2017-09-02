<!-- <a href="#" data-reserva="general"  class="floatante link-reserva"> <i class="fa fa-calendar" aria-hidden="true"></i> </a> -->
    <!-- Reserva Modal -->

        <div class="modal fade" id="Reservaciones">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">X</a>
                        <div class="header-reservacion">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/src/America.png" alt="America" width="395">
                                </div>
                                <div class="title-reserva-general">
                                        RESERVACIÓN
                                    </div>
                                <div class="col-md-6">
                                    
                                    <div class="title-reserva-modal">Chivas vs América </div>
                                    <div class="hora-fecha-modal">Domingo 18 Febrero  | 10:00 PM
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="texto-step">
                            DATOS <span>GENERALES</span>
                        </div>

                        <div class="contenido">
                            <!-- evento inicio -->
                                <div class="evento-iniciado hidden">
                                    <h1 class="text-center">Este evento ya no esta disponible para reserva</h1>
                                    <p class="text-center">Le invitamos a pasar a cualquiera de nuestras sucursales, para disfrutar del evento*. Muchas gracias por su preferencia.</p>
                                    <p class="pull-right">*sujeto a disponibilidad</p>
                                </div>
                            <!-- evento inicio -->
                            
                            <!-- Loader -->

                            <div class="loader-reserva hidden">
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
                                    
                                </div>
                            </div>
                            <!-- Loader -->

                            <!-- Paso #1 -->
                            <div class="reserva-step step1">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="dos-input ">
                                            <div class="lt-input mr-input">
                                                <label for="sucursal">Sucursal</label>
                                                <select name="sucursal" id="sucursal">
                                                    <option value="Yaxchilan">YAXCHILÁN</option>
                                                    <option value="Sol">SOL</option>
                                                </select>
                                            </div>
                                            <div class="lt-input">
                                                <label for="fecha">Fecha</label>
                                                <input onkeydown="return false;" type="text" style="color:#bebebe !important;" disabled value="18/02/2017" name="fecha">
                                            </div>
                                        </div>
                                        
                                        <div class="lt-input">
                                            <label for="nombre">Nombre Completo</label>
                                            <input type="text" name="nombre" required>
                                        </div>
                                        <div class="lt-input">
                                            <label for="correo">Correo Electronico</label>
                                            <input type="email"  name="correo" required placeholder="Ej. usuario@example.com">
                                        </div>
                                        <div class="lt-input">
                                            <label for="comentarios">Comentarios</label>
                                            <textarea name="comentarios" id="comentarios"></textarea>
                                        </div>
                                        <div class="bread-desktop">
                                            <div class="actions-reserva">
                                                <a href="#" data-step="1" class="next-reserva">CONTINUAR</a>
                                            </div>
                                            <div class="steps-formulario">
                                                <span class="step-formulario active" data-step="1">
                                                </span>
                                                <span class="step-formulario" data-step="2"></span>
                                                <span class="step-formulario" data-step="3"></span>
                                                <span class="step-formulario" data-step="4"></span>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-3 col-sm-12 ml-mobile" style="margin-left: 30px;">
                                        <div class="lt-input">
                                            <label for="hora">Hora</label>
                                            <select name="hora" id="hora" style="color:#bebebe !important;" disabled>
                                                <option value="01:00 P.M">01:00 PM</option>
                                                <option value="01:30 P.M">01:30 PM</option>
                                                <option value="02:00 P.M">02:00 PM</option>
                                                <option value="02:30 P.M">02:30 PM</option>
                                                <option value="02:45 P.M">02:45 PM</option>
                                                <option value="03:00 P.M">03:00 PM</option>
                                                <option value="03:30 P.M">03:30 PM</option>
                                                <option value="04:00 P.M">04:00 PM</option>
                                                <option value="04:30 P.M">04:30 PM</option>
                                                <option value="05:00 P.M">05:00 PM</option>
                                                <option value="05:30 P.M">05:30 PM</option>
                                                <option value="06:00 P.M">06:00 PM</option>
                                                <option value="06:30 P.M">06:30 PM</option>
                                                <option value="07:00 P.M">07:00 PM</option>
                                                <option value="07:30 P.M">07:30 PM</option>
                                                <option value="08:00 P.M">08:00 PM</option>
                                                <option value="08:30 P.M">08:30 PM</option>
                                                <option value="09:00 P.M">09:00 PM</option>
                                                <option value="09:30 P.M">09:30 PM</option>
                                                <option value="10:00 P.M">10:00 PM</option>
                                            </select>
                                            
                                        </div>
                                        <div class="lt-input">
                                            <label for="telefono">Telefono</label>
                                            <input value="+52" type="text" name="telefono">
                                        </div>
                                        <div class="dos-input">
                                            <div class="lt-input mr-input">
                                                <label for="adultos">Adultos</label>
                                                <select name="adultos" id="adultos">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>
                                            </div>
                                            <div class="lt-input">
                                                <label for="ninos">Niños</label>
                                                <select name="ninos" id="ninos">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="+9">+9</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="costo-reserva">
                                            $<span>150</span>.00
                                        </div>
                                        <p class="terminos-reserva-modal">
                                            EL MONTO PAGADO POR LA RESERVA ES CANJEABLE AL 100% EN CONSUMO EN LA SUCURSAL ESPECIFICADA EN ESTA RESERVACIÓN,  APLICA UNICA Y EXCLUSIVAMENTE EN LA FECHA SELECCIONADA. EN CASO DE CANCELACION APLICAN NUESTRAS POLITICAS DE CANCELACION.
                                        </p>
                                        <div class="bread-mobile">
                                            <div class="actions-reserva">
                                                <a href="#" data-step="1" class="next-reserva">CONTINUAR</a>
                                            </div>
                                            <div class="steps-formulario">
                                                <span class="step-formulario active" data-step="1">
                                                </span>
                                                <span class="step-formulario" data-step="2"></span>
                                                <span class="step-formulario" data-step="3"></span>
                                                <span class="step-formulario" data-step="4"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Paso #1 -->

                            <!-- Paso #2 -->
                            <div class="reserva-step step2 hidden">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="tarjeta">
                                            <div class="opcion">
                                                <div class="checkbox-input">
                                                    <input type="checkbox" id="tarjeta">
                                                    <label for="tarjeta"></label>
                                                </div>
                                                <div class="title-option">
                                                    TARJETA DE CRÉDITO
                                                </div>
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/src/visa-mastercad.png" alt="Visa mastercad Reservacion">
                                            </div>
                                            <div class="formulario-tarjeta hidden">
                                                <div class="lt-input" style="width: 491px;">
                                                    <label for="titular">Nombre del titular</label>
                                                    <input type="text" name="titular">
                                                </div>
                                                <div class="tres-input">
                                                    <div class="lt-input">
                                                        <label for="numeroTarjeta">
                                                            No. Tarjeta
                                                        </label>
                                                        <input type="text" name="numeroTarjeta">
                                                    </div>
                                                    <div class="lt-input">
                                                        <label for="expiracion">Fecha de Expiración</label>
                                                        <input placeholder="MM/YY"  type="text"
                                                        name="expiracion">
                                                    </div>
                                                    <div class="lt-input">
                                                        <label for="codigo">
                                                            Codigo de Seguridad <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/src/question.png" alt="CCV"></a>
                                                        </label>
                                                        <input type="password" name="seguridad">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="oxxo">
                                            <div class="opcion">
                                                <div class="checkbox-input">
                                                    <input type="checkbox" id="oxxo">
                                                    <label for="oxxo"></label>
                                                </div>
                                                <div class="title-option">
                                                    OXXO (Pagar en 12 hrs siguientes)
                                                </div>
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/src/oxxo.png" alt="Visa mastercad Reservacion">
                                            </div>
                                        </div>
                                        <div class="actions-reserva">
                                            <a href="#" data-step="0" class="back-reserva">REGRESAR</a>
                                            <a href="#" data-step="2" class="next-reserva">CONTINUAR</a>
                                        </div>
                                        <div class="steps-formulario">
                                            <span class="step-formulario" data-step="1">
                                            </span>
                                            <span class="active step-formulario" data-step="2"></span>
                                            <span class="step-formulario" data-step="3"></span>
                                            <span class="step-formulario" data-step="4"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Paso #2 -->
                            <!-- Paso #3 -->
                            <div class="reserva-step step3 hidden">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="title-confirmation">EVENTO</div>
                                        <div class="tres-confirm">
                                            <div class="confirm-text" style="margin-right: 88px">
                                                <span class="header-text">Sucursal</span>
                                                <span class="body-text" data-reserva="sucursal"></span>
                                            </div>
                                            <div class="confirm-text" style="margin-right: 62px;">
                                                <span class="header-text">Fecha</span>
                                                <span class="body-text" data-reserva="fecha"></span>
                                            </div>
                                            <div class="confirm-text">
                                                <span class="header-text">Hora</span>
                                                <span class="body-text" data-reserva="hora"></span>
                                            </div>
                                        </div>
                                        <div class="dos-confirm">
                                            <div class="confirm-text" style="margin-right:56px; ">
                                                <span class="header-text">Nombre Completo</span>
                                                <span class="body-text" data-reserva="nombre"></span>
                                            </div>
                                            <div class="confirm-text">
                                                <span class="header-text">Teléfono</span>
                                                <span class="body-text" data-reserva="telefono"></span>
                                            </div>
                                        </div>

                                        <div class="confirm-text" style="margin-right:56px; ">
                                                <span class="header-text">Correo Electrónico</span>
                                                <span class="body-text" data-reserva="correo"></span>
                                        </div>
                                        <div class="resumen-reserva">
                                            <div class="cuatro-confirm">
                                                <div class="confirm-text" style="margin-right:57px; ">
                                                    <span class="header-text">Adultos</span>
                                                    <span class="body-text" data-reserva="adultos"></span>
                                                </div>
                                                <div class="confirm-text" style="margin-right:53px; ">
                                                    <span class="header-text">Niños</span>
                                                    <span class="body-text" data-reserva="ninos"></span>
                                                </div>
                                                
                                                <div class="confirm-text">
                                                    <span class="header-text">Monto a Pagar</span>
                                                    <span class="body-text" data-reserva="monto"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="title-confirmation">METODO DE PAGO</div>
                                        <div class="confirm-text" >
                                            <span class="header-text">Tipo de Pago</span>
                                            <span class="body-text" data-reserva="metodo"></span>
                                        </div>

                                        <div class="tarjeta-metodo">
                                            <div class="confirm-text" >
                                                <span class="header-text">Nombre de titular</span>
                                                <span class="body-text" data-reserva="titular"></span>
                                            </div>
                                            <div class="confirm-text">
                                                <span class="header-text">No. Tarjeta</span>
                                                <span class="body-text" data-reserva="numeroTarjeta"></span>
                                            </div>
                                            <div class="confirm-text">
                                                <span class="header-text">Fecha de expiración</span>
                                                <span class="body-text" data-reserva="expiracion">
                                                    
                                                </span>
                                            </div>
                                            <div class="img-metodo">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/src/visa-mastercad.png" alt="Visa y mastercard reserva">
                                            </div>
                                        </div>
                                        <div class="oxxo-metodo hidden">
                                            <div class="clear-20"></div>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/src/oxxo.png" alt="Visa y mastercard reserva">
                                        </div>
                                    </div>
                                </div>

                                <div class="terminos-reserva">
                                        <input type="checkbox" name="termino" id="termino">
                                        <label for="termino"></label>
                                        <div class="text-termino">He leído y acepto las <a href="<?php echo esc_url( home_url( '/' ) ); ?>politicas-de-privacidad/" target="_blank">Políticas de Privacidad</a> y las <a  href="<?php echo esc_url( home_url( '/' ) ); ?>politicas-de-cancelacion/" target="_blank">Politicas de Cancelaciones</a>.
                                        </div>
                                    </div>
                                    <div class="actions-reserva">
                                            <a href="#" class="back-reserva" data-step="1">REGRESAR</a>
                                            <a href="#" data-step="3" class="next-reserva">CONTINUAR</a>
                                    </div>
                                    <div class="steps-formulario">
                                        <span class="step-formulario" data-step="1">
                                        </span>
                                        <span class="step-formulario" data-step="2"></span>
                                        <span class="active step-formulario" data-step="3"></span>
                                        <span class="step-formulario" data-step="4"></span>
                                    </div>
                            </div>
                            <!-- Paso #3 -->
                            <!-- Paso #4 -->
                            <div class="reserva-step step4 hidden">
                                <div class="exitosa-reserva">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/src/checked.png" alt="Reserva Exitosa">
                                    ¡RESERVA <strong>EXITOSA</strong>!
                                </div>
                                <div class="preserva hidden">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/src/alert.png" alt="Reserva Exitosa">
                                    ¡Proceso de <strong>Pago</strong>!
                                </div>
                                <div class="falla-reserva">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/src/alert.png" alt="Reserva Exitosa">
                                    ¡RESERVA <strong>FALLIDA</strong>!
                                </div>
                                <div class="clear-20"></div>
                                <div class="texto-reserva-confirmation">
                                    <span class="nombre-reserva"></span>, gracias por tu preferencia tu reserva ha sido exitosa; es para el día <span class="fecha-reserva"></span>, se hizo para <span class="datos-reserva"></span>,  te recordamos llegar puntual ya que después de la hora de reserva solo la mantenemos por 20 minutos más.
                                    <br>
                                    <div class="clear-15"></div>
                                    En caso de inasistencias o cancelaciones se rigen bajo las <a href="<?php echo esc_url( home_url( '/' ) ); ?>politicas-de-cancelacion/" target="_blank">Políticas de Cancelaciones</a> y todos tus datos quedan protegidos bajo nuestras <a href="<?php echo esc_url( home_url( '/' ) ); ?>politicas-de-privacidad/" target="_blank">Políticas de Privacidad</a>.
                                </div>
                                <div class="texto-reserva-fallida hidden">
                                    
                                </div>
                                <div class="texto-prereserva-oxxo hidden">
                                    <p>Gracias por pre-reservar con nosotros, te recordamos que la reserva no se activa hasta no haber realizado el pago en cualquier sucursal OXXO, el monto pagado es canjeable al 100%* en consumo dentro de la sucursal de tu reservación única y exclusivamente en la fecha y hora seleccionadas en la reserva.</p>
                                    <p>Acude a cualquier sucursal y dicta la referencia de pago (14 digitos) en caja:</p>
                                    <div class="referencia">XXXX - XXX - XXXX - XXX</div>
                                    <p>De igual manera tu número de referencia ha sido enviado al correo <strong>community@lataberna.com.mx</strong></p>
                                </div>
                                <div class="actions-reserva">
                                    <a href="#" data-dismiss="modal" class="fin-reserva">TERMINAR</a>
                                    <a href="#" class="back-reserva" data-step="1">REGRESAR</a>
                                </div>
                                <div class="steps-formulario">
                                    <span class="step-formulario">
                                    </span>
                                    <span class="step-formulario" ></span>
                                    <span class="step-formulario"></span>
                                    <span class="active step-formulario"></span>
                                </div>
                            </div>
                            <!-- Paso #4 -->

                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Reserva Modal-->

<div class="bolsa-trabajo <?php if(is_front_page()){ ?> hidden <?php } ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="clear-60"></div>
                    <div class="title-bolsa" data-aos="fade-down">
                        ¡ven y trabaja entre <strong>amigos</strong>!
                    </div>
                </div>
                <div class="col-md-6">
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
                    
                </div>
                  
            </div>
            <a data-toggle="modal" data-target="#modal-bolsa" class="btn-bolsa">¡TRABAJA CON NOSOTROS!</a>
        </div>
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

      <div class="modal fade" id="modal-bolsa">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">X</a>
                    <div class="head-bolsa">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/src/modal-bolsa.png" alt="bolsa de trabajo">
                    </div>
                    <div class="line-bolsa">
                        <strong>Trabaja Con</strong> Nosotros
                    </div>
                    <div class="contenido-bolsa">
                        <p>Hola, gracias por el interés, nuestras entrevistas son con el área de recursos humanos, tendrías que llevar tu solicitud elaborada a cualquiera de nuestras dos sucursales en el horario que aparece abajo.</p>

                        <p>Adicionalmente puedes enviar tu c.v. por correo electrónico y/o solicitar una cita, via whatsapp únicamente, en la sucursal que prefieras.</p>

                        <p>
                            De 2 A 6 pm LUNES A VIERNES <br>
                            SUC. YAXCH - <strong>ANDREA SOSA</strong> - (998) 887 5433 <br>
                            <strong>reclutamiento@lataberna.com.mx</strong> <br>
                            Whatsapp: 9982 42 26 53
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

  	<?php wp_footer(); ?>

    <script type="text/javascript" src="https://conektaapi.s3.amazonaws.com/v0.3.2/js/conekta.js"></script>
  <script>
    Conekta.setPublishableKey("key_T3zY4zbwTuM8q1GmC5aegcw");
  </script>
    <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1808895456027587', {
em: 'insert_email_variable,'
});
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1808895456027587&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
  



  	<script>

var map;
function initMap() {

    var styles = [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dadada"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#c9c9c9"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  }
];

    var styledMap = new google.maps.StyledMapType(styles,
    {name: "Styled Map"});
    var zoom = 14;
    ancho = $("html").width();
    var lat, lng;
    if(ancho > 768){
        lat = 21.1573493;
        lng = -86.84746259999997;
    }else{
        zoom = 14;
        
        lat = 21.168965081635776;
        lng = -86.83889865875244;
        
    }
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: lat, lng: lng},
    zoom: zoom,
    scrollwheel: false
  });

  map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');

  var sucursales = [{'lat': 21.15055001091493, 'lng': -86.84671863913536},{'lat': 21.163768721791538, 'lng': -86.82958636432886}];
     
     for(var i=0; i < sucursales.length ; i++){
       
        var image="<?php echo get_template_directory_uri(); ?>/images/src/map-marker.png";
        var marker = new google.maps.Marker({
            position: sucursales[i],
            title:"La taberna",
            icon: image
        });

        // To add the marker to the map, call setMap();
        marker.setMap(map);
     }
}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaAm2b9QaMSeMthuIPRbqq_ZPGIZa_nqs&callback=initMap"
        async defer></script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/58a12760a9e5680aa3afcbe8/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <script>
        console.log();
    </script>
<!--End of Tawk.to Script-->        
    <script>
        $(document).ready(function(){
        	<?php if (!is_home()): ?>
        		diasInhabiles = [];
        	<?php endif ?>
            $(".lt-input input[name=fecha]").datepicker({
                startDate: "today",
                language: "es",
                autoclose: true,
                datesDisabled: diasInhabiles
                
            });
            
            $("input[name=expiracion]").on("keyup",function(){
              var numero =  $(this).val();
              if(numero.length == 2){
                  $(this).val(numero + "/");
              }
            });
            var reserva = new Object();

            function llenado_final(){
              $(".texto-reserva-confirmation .nombre-reserva").text(reserva.nombre);
              $(".texto-reserva-confirmation .fecha-reserva").text(reserva.fecha);
              $(".texto-reserva-confirmation .nombre-reserva").text(reserva.nombre);
              datos = reserva.adultos + " Adultos" + " " + reserva.ninos + " Niños";
              $(".texto-reserva-confirmation .datos-reserva").text(datos);
            }

            function send_payment_oxxo(){ 

                
                var dataString = {
                    'amount': reserva.costo,
                    'name' : reserva.titular,
                    'nombre': reserva.nombre,
                    'email' : reserva.correo,
                    'telefono': reserva.telefono,
                    'cantidad': reserva.adultos,
                    'ninos': reserva.ninos,
                    'fecha': reserva.fecha,
                    'hora': reserva.hora,
                    'sucursal': reserva.sucursal,
                    'comentario': reserva.comentarios,
                    'evento': $('.title-reserva-modal').text()
                };
                $(".loader-reserva").removeClass("hidden");
                $.ajax({
                    type: "POST",
                    url: "<?php echo get_template_directory_uri(); ?>/reservaciones/conekta_oxxo.php",
                    data: dataString,
                    success: function(resp) {
                                         
                        if(typeof resp != 'undefined'){
                            $(".exitosa-reserva").addClass("hidden");
                            $(".falla-reserva").addClass("hidden");
                            $(".preserva").removeClass("hidden");
                            $(".texto-reserva-confirmation").addClass("hidden");
                            $(".texto-reserva-fallida").addClass("hidden");
                            $(".texto-prereserva-oxxo").removeClass("hidden");
                            $(".texto-prereserva-oxxo .referencia").text(resp);
                            $(".texto-prereserva-oxxo .referencia strong").text(reserva.correo);
                            $(".actions-reserva a[data-dismiss=modal]").removeClass("hidden");
                            $(".step4 .actions-reserva a.back-reserva").addClass("hidden");
                            $(".reserva-step").addClass("hidden");
                            $(".reserva-step.step4").toggleClass("hidden");
                            $(".loader-reserva").addClass("hidden");
                            fbq('track', 'Reserva Finalizada', {
                              nombre: reserva.nombre,
                              fecha: reserva.fecha,
                              monto: reserva.costo,
                              sucursal: reserva.sucursal,
                              hora: reserva.hora,
                              metodo: 'OXXO'
                              });
                        }else{
                          $(".loader-reserva").addClass("hidden");
                        }
                    }
                }); 
            }

            
 

            function send_payment_card(){           
                var fechas = reserva.fechaExpiracion.split("/");
                 var marca = Conekta.card.getBrand(reserva.noTarjeta);
                var dataString = {
                    'amount': reserva.costo,
                    'name' : reserva.titular,
                    'number' : reserva.noTarjeta,
                    'cvc' : reserva.cvcTarjeta,
                    'exp_month' : fechas[0],
                    'exp_year' : fechas[1],
                    'email' : reserva.correo,
                    'telefono': reserva.telefono,
                    'preciounitario': '100',
                    'cantidad': reserva.adultos,
                    'ninos': reserva.ninos,
                    'fecha': reserva.fecha,
                    'brand': marca,
                    'hora': reserva.hora,
                    'sucursal': reserva.sucursal,
                    'comentario': reserva.comentarios,
                    'token': reserva.token,
                    'nombre': reserva.nombre,
                    'evento': $('.title-reserva-modal').text()
                };
                $(".loader-reserva").removeClass("hidden");
                $.ajax({
                    type: "POST",
                    url: "<?php echo get_template_directory_uri(); ?>/reservaciones/conekta_card.php",
                    data: dataString,
                    success: function(resp) {
                         
                        try{
                          resp = JSON.parse(resp);
                          
                          if(typeof resp.failure_message != 'undefined'){
                            $(".loader-reserva").addClass("hidden");
                            $(".exitosa-reserva").addClass("hidden");
                            $(".falla-reserva").removeClass("hidden");
                            $(".preserva").addClass("hidden");
                            $(".texto-reserva-confirmation").addClass("hidden");
                            $(".texto-reserva-fallida").text(resp.failure_message).removeClass("hidden");
                            $(".texto-prereserva-oxxo").addClass("hidden");
                            $(".actions-reserva a[data-dismiss=modal]").addClass("hidden");
                            $(".step4 .actions-reserva a.back-reserva").removeClass("hidden");

                            $(".reserva-step").addClass("hidden");
                            $(".reserva-step.step4").toggleClass("hidden");

                            
                            
                          }else{
                            llenado_final();
                            $(".exitosa-reserva").removeClass("hidden");
                            $(".falla-reserva").addClass("hidden");
                            $(".texto-reserva-confirmation").removeClass("hidden");
                            $(".texto-reserva-fallida").addClass("hidden");
                            $(".actions-reserva a[data-dismiss=modal]").removeClass("hidden");
                            $(".step4 .actions-reserva a.back-reserva").addClass("hidden");
                            $(".reserva-step").addClass("hidden");
                            $(".reserva-step.step4").toggleClass("hidden");
                            $(".loader-reserva").addClass("hidden");
                            
                              fbq('track', 'Reserva Finalizada', {
                              nombre: reserva.nombre,
                              fecha: reserva.fecha,
                              monto: reserva.costo,
                              sucursal: reserva.sucursal,
                              hora: reserva.hora,
                              metodo: 'OXXO'
                              });

                          }
                          
                        
                        }catch(e){
                          $(".loader-reserva").addClass("hidden");
                          
                        }
                        
                    }
                });  
            }
 
            var llenado = function(){
              var sucursal = $(".body-text[data-reserva=sucursal]"),
                  fecha = $(".body-text[data-reserva=fecha]"),
                  hora = $(".body-text[data-reserva=hora]"),
                  nombre = $(".body-text[data-reserva=nombre]"),
                  telefono = $(".body-text[data-reserva=telefono]"),
                  correo = $(".body-text[data-reserva=correo]"),
                  adultos = $(".body-text[data-reserva=adultos]"),
                  ninos = $(".body-text[data-reserva=ninos]"),
                  monto = $(".body-text[data-reserva=monto]"),
                  metodo = $(".body-text[data-reserva=metodo]"),
                  titular = $(".body-text[data-reserva=titular]"),
                  noTarjeta = $(".body-text[data-reserva=numeroTarjeta]"),
                  fechaExpiracion = $(".body-text[data-reserva=expiracion]");

                  sucursal.text(reserva.sucursal); 
                  fecha.text(reserva.fecha);
                  nombre.text(reserva.nombre);
                  telefono.text(reserva.telefono);
                  correo.text(reserva.correo);
                  adultos.text(reserva.adultos);
                  ninos.text(reserva.ninos);
                  monto.text("$" + reserva.costo);
                  hora.text(reserva.hora);

                  metodo.text(reserva.metodo);
                  if(reserva.metodo == "oxxo"){
                    $(".oxxo-metodo").removeClass("hidden");
                    $(".tarjeta-metodo").addClass("hidden");
                  }else{
                    $(".oxxo-metodo").addClass("hidden");
                    $(".tarjeta-metodo").removeClass("hidden");
                    titular.text(reserva.titular);
                    noTarjeta.text(reserva.noTarjeta);
                    fechaExpiracion.text(reserva.fechaExpiracion);
                  }
                  
            };

            $('.next-reserva , .back-reserva').on("click",function(e){
                e.preventDefault();
                var _this = $(this);
                var paso = _this.attr("data-step");
                var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                var telefonoRegex = /^\+?\d{1,3}?[- .]?\(?(?:\d{2,3})\)?[- .]?\d\d\d[- .]?\d\d\d\d$/;
          

                switch(paso) {
                    case "0":
                        $(".reserva-step").addClass("hidden");
                        $(".reserva-step.step1").toggleClass("hidden");
                        break;
                    case "1":
                      var nombre = $("input[name=nombre]"),
                          correo = $("input[name=correo]"),
                          sucursal = $("select[name=sucursal]"),
                          fecha = $("input[name=fecha]"),
                          hora = $("select[name=hora]"),
                          comentarios = $("textarea[name=comentarios]"),
                          telefono = $("input[name=telefono]"),
                          adultos = $("select[name=adultos]"),
                          ninos = $("select[name=ninos]"),
                          costo = $(".costo-reserva span"),
                          errores = 0;
                          $(".lt-input input,.lt-input select,.lt-input textarea").parent().removeClass("danger");

                      //Validando Nombre
                      if(nombre.val() != ""){
                        reserva.nombre = nombre.val();
                      }else{
                        nombre.parent().addClass("danger");
                        errores++;
                      }
                      //Validando Correo
                    
                      if(correo.val() != "" && re.test(correo.val())){
                        reserva.correo = correo.val();
                      }else{
                        correo.parent().addClass("danger");
                         errores++;
                      }
                      //validando Sucursal
                      if(sucursal.val() != ""){
                        reserva.sucursal = sucursal.val();
                      }else{
                        sucursal.parent().addClass("danger");
                         errores++;
                      }
                      //validando Hora
                      if(hora.val() != ""){
                        reserva.hora = hora.val();
                      }else{
                        hora.parent().addClass("danger");
                         errores++;
                      }
                      //validando Fecha
                    	if(fecha.val() != ""){
                        reserva.fecha = fecha.val();
                      }else{
                        fecha.parent().addClass("danger");
                        errores++;
                      }
                      //validando comentarios
                      if(comentarios.val() != ""){
                        reserva.comentarios = comentarios.val();
                      }else{
                        comentarios.parent().addClass("danger");
                         errores++;
                      }
                      //Validando telefono
                      if(telefono.val() != "" && telefonoRegex.test(telefono.val())){
                        reserva.telefono = telefono.val();
                      }else{
                        telefono.parent().addClass("danger");
                         errores++;
                      }
                      //validando niños
                      if(ninos.val() != ""){
                        reserva.ninos = ninos.val();
                      }else{
                        telefono.parent().addClass("danger")
                         errores++;
                      }
                      //validando adultos
                      if(adultos.val() != ""){
                        reserva.adultos = adultos.val();

                      }else{
                        adultos.parent().addClass("danger");
                        errores++;
                      }
                      reserva.costo = costo.text();
                      if(errores == 0){
                        $(".reserva-step").addClass("hidden");
                        $(".reserva-step.step2").toggleClass("hidden");
                        $(".texto-step").html("FORMA DE <span>PAGO</span>")

                      }else{
                      }
                      
                        break;
                    case "2":
                        var oxxo = $("input[type=checkbox]#oxxo"),
                        tarjeta = $("input[type=checkbox]#tarjeta"),
                        errores = 0;
                        $(".lt-input input,.lt-input select,.lt-input textarea").removeClass("danger");
                        if(oxxo.is(":checked") || tarjeta.is(":checked")){
                          if(oxxo.is(":checked")){
                            reserva.metodo = "oxxo";
                            llenado();
                            $(".reserva-step").addClass("hidden");
                            $(".reserva-step.step3").toggleClass("hidden");

                          }else if(tarjeta.is(":checked")){
                            reserva.metodo = "tarjeta bancaria";
                            var titular = $("input[name=titular]"),
                                noTarjeta = $("input[name=numeroTarjeta]"),
                                fechaExpiracion = $("input[name=expiracion]"),
                                cvc = $("input[name=seguridad]");
                                //validando Titular
                                if(titular.val() != ""){
                                  reserva.titular = titular.val();
                                }else{
                                  errores++;
                                  titular.parent().addClass("danger");
                                }
                                //validando Numero de Tarjeta
                                if(noTarjeta.val() != ""){
                                  if(Conekta.card.validateNumber(noTarjeta.val())){
                                    reserva.noTarjeta = noTarjeta.val();
                                  }else{
                                    errores++;
                                  noTarjeta.parent().addClass("danger");
                                  }
                                }else{
                                  errores++;
                                  noTarjeta.parent().addClass("danger");
                                }
                                //validando fecha de expiracion
                                if(fechaExpiracion.val() != ""){
                                  var fechas = fechaExpiracion.val().split("/");
                                  if(Conekta.card.validateExpirationDate(fechas[0], fechas[1])){
                                    reserva.fechaExpiracion = fechaExpiracion.val();
                                  }else{
                                    fechaExpiracion.parent().addClass("danger");
                                    errores++
                                  }
                                }else{
                                  errores++;
                                  fechaExpiracion.parent().addClass("danger");
                                }
                                //validando cvc

                                if(cvc.val() != ""){
                                  if(Conekta.card.validateCVC(cvc.val())){
                                    reserva.cvcTarjeta = cvc.val();
                                  }else{
                                    errores++;
                                    cvc.parent().addClass("danger");
                                  }
                                  
                                }else{
                                  errores++;
                                  cvc.parent().addClass("danger");
                                }
                                //revisando los errores
                                if(errores == 0){
                                  llenado();
                                  $(".reserva-step").addClass("hidden");
                                  $(".reserva-step.step3").toggleClass("hidden");
                                  var agregandoToken = function(token){
                                    reserva.token = token.id; 
                                  }
                                  var errorToken = function(response){
                                    console.log(response);
                                  }
                                  fechas = reserva.fechaExpiracion.split("/");
                                  var tokenParams = {
                                    "card": {
                                      "number": reserva.noTarjeta,
                                      "name": reserva.titular,
                                      "exp_year": fechas[1],
                                      "exp_month": fechas[0],
                                      "cvc": reserva.cvcTarjeta,
                                    }
                                  };
                                  Conekta.token.create(tokenParams,agregandoToken,errorToken);
                                  $(".texto-step").html("DATOS DE <span>CONFIRMACIÓN</span>");
                                  console.log(reserva);
                                  
                                }else{
                                  
                                  
                                }

                          }
                        }else{
                           alert("elija un metodo de pago");
                        }

                        
                        
                        break;
                    case "3":
                        var terminos = $("input[name=termino]");
                        if(terminos.is(":checked")){
                          if(reserva.metodo == "oxxo"){
                              send_payment_oxxo();
                          }else{
                              send_payment_card();
                          }
                        }else{
                          alert("Acepte terminos y condiciones");
                        }
                        
                        break;
                    
                        
                }
            });

            $("select[name=adultos]").on("change",function(){
                var valor = $(this).val();
                var base = $(".costo-reserva span").attr("data-costo");
                if(valor != "+9"){
                  $(".costo-reserva span").text(valor * base);
                }else{

                }
            });

            $("input[type=checkbox]#tarjeta").on("click",function(){
              var _self = $(this);
              $(".formulario-tarjeta").toggleClass("hidden");
                $("input[type=checkbox]#oxxo").removeAttr("checked");
              
            });
            $("input[type=checkbox]#oxxo").on("click",function(){
              $(".formulario-tarjeta").addClass("hidden");
              $("input[type=checkbox]#tarjeta").removeAttr("checked");
              

            });
            $(".step4 a[data-dismiss]").on("click",function(){
                setTimeout(function(){
                  location.reload();
                },2000);
            });

            $('.contenedor-historia').slimScroll({
                height: '530px'
            });

            function formatoHora(hora){
              switch(hora){
                case "01:00 P.M":
                  return "13:00:00";
                  break;

                case "01:30 P.M":
                  return "13:30:00";
                  break;

                case "02:00 P.M":
                  return "14:00:00";
                  break;

                case "02:30 P.M":
                  return "14:30:00";
                  break;

                case "02:45 P.M":
                  return "14:45:00";
                  break;

                case "03:00 P.M":
                  return "15:00:00";
                  break;

                case "03:30 P.M":
                  return "15:30:00";
                  break;

                case "04:00 P.M":
                  return "16:00:00";
                  break;

                case "04:30 P.M":
                  return "16:30:00";
                  break;

                case "05:00 P.M":
                  return "17:30:00";
                  break;

                case "06:00 P.M":
                  return "18:00:00";
                  break;

                case "06:30 P.M":
                  return "18:30:00";
                  break;

                case "07:00 P.M":
                  return "19:00:00";
                  break;

                case "07:30 P.M":
                  return "19:30:00";
                  break;

                case "08:00 P.M":
                  return "20:00:00";
                  break;

                case "08:30 P.M":
                  return "20:30:00";
                  break;

                case "09:00 P.M":
                  return "21:00:00";
                  break;

                case "9:30 P.M":
                  return "21:30:00";
                  break;

                case "10:00 P.M":
                  return "22:00:00";
                  break;
              }
            };



            var openModalReservaciones =  function(link){
                $('#Reservaciones').modal('show');
                var numeroPax = $("select[name=adultos]").val();
                _self = $(link);
                tipoReserva = _self.attr('data-reserva');

                if(tipoReserva == 'general'){
                  $("input[name=fecha]").removeAttr('disabled').css("color","#155b73");
                  $("input[name=fecha]").datepicker('update', new Date());

                  $("select[name=hora]").removeAttr('disabled').css("color","#155b73");
                  $(".header-reservacion img").addClass("hidden");
                  $('.header-reservacion').attr("class","header-reservacion general");
                  $(".title-reserva-modal").addClass("hidden").text('Reserva general');
                  $(".hora-fecha-modal").addClass("hidden");
                  $(".title-reserva-general").removeClass("hidden");
                  $(".costo-reserva span").text(100 * numeroPax).attr("data-costo","100");
                  
                }else{
                  $(".title-reserva-general").addClass("hidden");
                  $("input[name=fecha]").attr('disabled','true').css("color","#bebebe");
                  
                  horario = _self.attr('data-horario');
                  evento = _self.attr('data-evento');
                  fecha = _self.attr('data-fecha');
                  costo = _self.attr('data-costo');
                  $(".costo-reserva span").text(costo * numeroPax).attr("data-costo",costo);
                  imagen = _self.attr('data-img');
                  tipoFecha = _self.attr('data-tipo-fecha');
                  tipoEvento = _self.attr('data-tipo-evento');
                  $('.header-reservacion').attr("class","header-reservacion " + tipoEvento);
                  formatoFecha = tipoFecha.split("/");
                  EventoDia = formatoFecha[1] +"/" + formatoFecha[0] + "/"+ formatoFecha[2] + " " + formatoHora(horario);
                  EventoDia = new Date(EventoDia);
                  Hoy = new Date();
                  diferencia = (EventoDia - Hoy) / 1000;
                  horas = diferencia / 3600;
            		console.log(horas);
                  
               

                  if(horas <= 48){
                    $(".evento-iniciado").removeClass("hidden");
                    $(".reserva-step.step1").addClass("hidden");
                  }else{
                      $(".reserva-step").addClass("hidden");
                      $(".reserva-step.step1").removeClass("hidden");
                      $(".evento-iniciado").addClass("hidden");
                  }
                
                  var aux = 0;
                  var contador = 0;

                  $("select[name=hora] option").each(function(){
                      valor = $(this);
                      
                      if(valor.attr("value") == horario){
                          console.log(contador);
                          //aux.attr("selected","selected")
                          $("select[name=hora]").prop('selectedIndex',contador -1);
                      }
                      aux = valor;
                      contador++;
                  });
                  $("select[name=hora]").attr('disabled','true').css("color","#bebebe");
                  $("input[name=fecha]").val(tipoFecha);
                  $(".title-reserva-modal").text(evento).removeClass("hidden");
                  fechaHora = fecha + " | " + horario;
                  $(".hora-fecha-modal").text(fechaHora).removeClass("hidden");
                  $(".header-reservacion img").attr("src",imagen).removeClass("hidden");
                  fbq('track', 'ReservaIniciada', {
                  Hora: horario,
                  fecha: fecha,
                  evento: evento
                  });
                }
                
            };

            $('.link-reserva').on('click',function(e){
                e.preventDefault();
                
                openModalReservaciones(this);
            })

            var activeMenuFood = function(){
                $('.menu-section').toggleClass('active');
            }
            $('.menu-text').on("click", function(e){
                e.preventDefault();
                activeMenuFood();   
            });

            var activeMenu = function(){
                $("body").toggleClass("sidenav-open");
                $("button.hamburger").toggleClass("is-active");
            };
            $("button.hamburger, div.overlay-sidenav").on("click", function(e){
                e.preventDefault();
                activeMenu();
            });

            $(".sidenav a").on("click",function(e){
              activeMenu();
            });



            $(window).load(function(){
                $('#preloader').fadeOut('slow',function(){$(this).remove();});
             });
            
             AOS.init({
                once: true,
                duration: 600,
             });
      $(".carousel-promo").owlCarousel({
        loop: true,
        nav: true,
        responsive:{
            0:{
            items:1
             },
            600:{
                items:1
            },
            1000:{
                items:3
            }
        },
      });
    });

      $(function() {
        $('a[href*="#"]:not([href="#"])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html, body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
    </script>
    <script type="text/javascript">     
    
        var slider = new MasterSlider();
        
        slider.control('bullets' , {hideUnder: 768,autohide:false  , dir:"v", align:"bottom"});
        slider.control('circletimer' , {color:"#FFFFFF" , stroke:9});
        slider.control('thumblist' , {autohide:false ,dir:'v',type:'tabs', align:'right', margin:200, space:0, width:350,inset:true, height:100, hideUnder:768});

        var ancho = $('body').width();
        if(ancho <= 768){
            var layout = 'fullscreen';
            var height = 700;
        }else{
            var layout = 'fullwidth';
            var height = 480;
        }

        slider.setup('masterslider' , {
            fullwidth:true,
            height: height,
            width: 1366,
            space:0,
            view:'mask',
            layout: layout,
            autoplay: true,
            delay: 0
        });

    </script>
    <!-- JS --> 

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60269714-3', 'auto');
  ga('send', 'pageview');

</script>


  
</body>
</html>