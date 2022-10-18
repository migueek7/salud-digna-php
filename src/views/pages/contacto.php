<?=$this->layout('layouts/layout');?>

<section>

    <div class="banner">
        <div class="contendor-fluid">
            <picture>
                <source loading="lazy" media="(max-width: 576px)" srcset="<?=images()?>contacto/banner-contactanos-movil.webp" class="imagen">
                <source loading="lazy" media="(max-width: 992px)" srcset="<?=images()?>contacto/banner-contactanos-tablet.webp" class="imagen">
                <img loading="lazy" src="<?=images()?>contacto/banner-contactanos.webp" class="imagen" alt="banner contactanos">
            </picture>
        </div>
    </div>

    <section class="contenedor">
        <h1>¡Queremos ayudarte!</h1>
        <h3 class="mt-0 pb-3">
            Conoce los canales principales en los cuales puedes contactarte con nosotros para resolver tus dudas.
        </h3>

        <div class="form" id="buscar">
            <div class="form__div">
                <input type="text" id="inputBuscar" name="buscar" class="form__input" placeholder="Búsqueda rápida...">
                <button type="button" class="buscar__btn" aria-label="boton buscar">
                    <span class="icon-search" style="font-size: 3rem;color: gray;"></span>
                </button>
            </div>
        </div>

        <div class="buscando">

            

            <div id="load" class="d-none">
               <!-- <h4 class="font-size-xl">Buscando<span class="dotting"></span></h4> -->
               <img src="<?=images()?>buscar-animate.gif" alt="">
            </div>

            <div id="nofound" class="text-center nofound d-none">
                <h4>Lo sentimos, no encontramos resultados</h4>
                <p>- Asegúrate de que las palabras estén escritas correctamente.<br>- Intenta con una palabra similar.</p>
            </div>
        </div>
        

        <div id="info-contacto">
            <div class="grid-2 grid-2__contacto pb-3">

                <div class="columna">
                    <div class="w-100">
                        

                        <picture>
                            <source loading="lazy" media="(max-width: 576px)" srcset="<?=images()?>contacto/banner-whatsapp-movil.webp" class="imagen">
                            <source loading="lazy" media="(max-width: 768px)" srcset="<?=images()?>contacto/banner-whatsapp-tablet.webp" class="imagen">
                            <img loading="lazy" src="<?=images()?>/contacto/banner-whatsapp.webp" class="imagen" alt="banner whatsaap">
                        </picture>

                        <h3>Consulta por nuestro WhatsApp los siguientes temas:</h3>
                        <ol>
                            <li>Resultados.</li>
                            <li>Cotizaciones.</li>
                            <li>Horarios e información de citas COVID-19.</li>
                            <li>Ticket Perdido.</li>
                            <li>Citas.</li>
                            <li>Información de servicios.</li>
                            <li>Ubicación de clínica.</li>
                            <li>Quejas y/o sugerencias.</li>
                        </ol>
                    
                        <h3>*Horario de atención:</h3>
                        <ul class="list">
                            <li>Lunes a Viernes de 04:00 a 20:00 hrs. </li>
                            <li>Sábados y Domingos de 04:00 a 18:00 hrs (hora del centro de México). </li>
                            <li><strong>Chatbot:</strong> Atención inmediata.</li>
                            <li><strong>Agente humano:</strong>  El tiempo estimado de respuesta es de 2 hrs*.</li>
                        </ul>
                    </div>
                </div>

                <div class="columna">
                    <div class="w-100">

                        <picture>
                            <source loading="lazy" media="(max-width: 576px)" srcset="<?=images()?>contacto/banner-messenger-movil.webp" class="imagen">
                            <source loading="lazy" media="(max-width: 768px)" srcset="<?=images()?>contacto/banner-messenger-tablet.webp" class="imagen">
                            <img loading="lazy" src="<?=images()?>contacto/banner-messenger.webp" class="imagen" alt="banner messenger">
                        </picture>

                        <div class="caja-info-alto">
                            <h3>Contáctanos por privado para apoyarte en los siguientes temas:</h3>
                            <ol>
                                <li>Resultados.</li>
                                <li>Ticket perdido.</li>
                                <li>Información de servicios.</li>
                                <li>Ubicación de clínica.</li>
                                <li>Agendar cita.</li>
                                <li>Quejas y/o sugerencias.</li>
                            </ol>
                        </div>
            
                        <h3>*Horario de atención:</h3>
                        <ul class="list">
                            <li>Lunes a Viernes de 06:00 a 17:00 hrs.</li>
                            <li>Sábados de 08:00 a 16:00 hrs. (hora del centro de México).</li>
                            <li><strong>Chatbot:</strong> Atención inmediata.</li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="grid-2 grid-2__contacto pb-3">

                <div class="columna">
                    <div class="w-100">

                        <picture>
                            <source loading="lazy" media="(max-width: 576px)" srcset="<?=images()?>contacto/banner-instagram-movil.webp" class="imagen">
                            <source loading="lazy" media="(max-width: 768px)" srcset="<?=images()?>contacto/banner-instagram-tablet.webp" class="imagen">
                            <img loading="lazy" src="<?=images()?>contacto/banner-instagram.webp" class="imagen" alt="banner instagram">
                        </picture>

                        
                        <h3>Envíanos un mensaje directo, para resolver tus dudas.</h3>
                        <h3>*Horario de atención:</h3>
                        <p>
                            Lunes a Viernes de 08:00 a 16:00 hrs.<br> 
                            Sábados de 08:00 a 15:00 hrs.<br> 
                            (hora del centro de México).
                        </p>
                    </div>
                </div>

                <div class="columna">
                    <div class="w-100">

                        <picture>
                            <source loading="lazy" media="(max-width: 576px)" srcset="<?=images()?>contacto/banner-twitter-movil.webp" class="imagen">
                            <source loading="lazy" media="(max-width: 768px)" srcset="<?=images()?>contacto/banner-twitter-tablet.webp" class="imagen">
                            <img loading="lazy" src="<?=images()?>contacto/banner-twitter.webp" class="imagen" alt="banner twitter">
                        </picture>

                       
                        <h3>Arróbanos para resolver tus dudas.</h3>
                        <h3>*Horario de atención:</h3>
                        <p>
                            Lunes a Viernes de 08:00 a 17:00 hrs.<br> 
                            Sábados de 07:00 a 15:00 hrs.<br>
                            (hora del centro de México).
                        </p>
                    </div>
                </div>

            </div>


            <hr class="hr">


            <div class="grid-2 grid-2__contacto pt-3">

                <div class="columna align-items-center h-100">
                    <div class="w-100">
                        <h3>Realiza una consulta por nuestros medios digitales,<br> ¡Es muy sencillo! </h3>
                        <p>
                            Te compartimos el siguiente tutorial, para que identifiques de manera sencilla cómo puedes consultar tus resultados, cotizar estudios, agendar una cita, información sobre pruebas de la covid-19, horario, teléfono y ubicación de mi clínica.
                        </p>
                    </div>
                </div>

                <div class="columna">
                    <div class="w-100">
                        <div class="video-responsive">
                            <!-- <iframe loading="lazy" src="https://www.youtube.com/embed/6PES4AJgnRQ" title="Salud Digna" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                            <video src="https://salud-digna.com/citasCovid19/SD-Video-Covid19-032020.mp4" controls="" style="width: 100%;outline: none;"></video>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="servicios">

        <div class="contenedor">
            <h3 class="pb-0 mb-0">Selecciona la categoría de tu interés</h3>
        </div>

        <div class="contenedor">    

            <div class="lunchbox">

                <!-- slider main container -->
                <div id="swiper2" class="swiper-container"> 

                    <!-- additional required wrapper -->
                    <div class="swiper-wrapper">

                        <!-- slides -->
                        <div class="swiper-slide">
                            <div class="item card category_1 active">
                                <div class="icono">
                                    <div>
                                        <span class="icon-pcr-en-tiempo-real"></span>
                                    </div>
                                </div>
                                <div id="category_1" class="accion" category="PCREnTiempoRealInf"></div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item card category_2">
                                <div class="icono">
                                    <div>
                                        <span class="icon-prueba-antigenos"></span>
                                    </div>
                                </div>
                                <div id="category_2" class="accion" category="PruebaDeAntigenosInf"></div>                            
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item card category_3">
                                <div class="icono">
                                    <div>
                                        <span class="icon-prueba-anticuerpos"></span>
                                    </div>
                                </div>
                                <div id="category_3" class="accion" category="AnticuerposTotalesInf"></div>                               
                            </div>
                        </div>

                        <div class="swiper-slide ">
                            <div class="item card category_4">
                                <div class="icono">
                                    <div>
                                        <span class="icon-pagos-en-linea"></span>
                                        <h4 class="title">Pagos en línea</h4>
                                    </div>
                                </div>
                                <div id="category_4" class="accion" category="PagosEnLineaInf"></div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item card category_5">
                                <div class="icono">
                                    <div>
                                        <span class="icon-resultados"></span>
                                        <h4 class="title">Resultados</h4>
                                    </div>
                                </div>
                                <div id="category_5" class="accion" category="ResultadosInf"></div>
                            </div>
                        </div>

                        <div class="swiper-slide ">
                            <div class="item card category_6">
                                <div class="icono">
                                    <div>
                                        <span class="icon-laboratorio"></span>
                                        <h4 class="title">Laboratorio</h4>
                                    </div>
                                </div>
                                <div id="category_6" class="accion" category="LaboratorioInf"></div>                                
                            </div>
                        </div>

                        <div class="swiper-slide ">
                            <div class="item card category_7">
                                <div class="icono">
                                    <div>
                                        <span class="icon-lentes"></span>
                                        <h4 class="title">Lentes</h4>
                                    </div>
                                </div>
                                <div id="category_7" class="accion" category="LentesInf"></div>                              
                            </div>
                        </div>

                    </div>

                  

                </div>

                <!-- navigation buttons -->
                <div id="js-prev1" class="swiper-button-prev"></div>
                <div id="js-next1" class="swiper-button-next"></div>
    
            </div>
        </div>


        <div id="categorias" class="categorias">

            <div id="PCREnTiempoRealInf" class="contenedor">
                <div class="categorias__card">

                    <div class="categorias__header">
                        <h3>¿Cuál es el porcentaje de efectividad de la prueba?</h3>
                    </div>

                    <div class="categorias__body">
                        <p>La prueba cuenta con un 96.52% de sensibilidad y 99.68% de especificad.</p>
                    </div>
                </div>

                <div class="categorias__card">

                    <div class="categorias__header">
                        <h3>¿Cuáles son las diferencias entre las 3 pruebas Covid, con las que cuentan?</h3>
                    </div>

                    <div class="categorias__body">
                        <p>
                        <strong>- Prueba Diagnóstica PCR:</strong> Confirma la presencia actual de la COVID-19 en el paciente. 
                        <br>
                        <strong>- Prueba de Antígenos Covid-19:</strong> Se realiza en pacientes que buscan validar si sus síntomas son sinónimo de contagio. 
                        <br>
                        <strong>- Anticuerpos Totales Cuantitativos:</strong> Detecta la proteína S, que permite evaluar los anticuerpos en pacientes vacunados o desarrollados por la enfermedad.
                        </p>
                    </div>
                </div>


                <div class="categorias__card">

                    <div class="categorias__header">
                        <h3>¿En cuanto tiempo me entregan mis resultados?</h3>
                    </div>

                    <div class="categorias__body">
                        <p>
                            El tiempo de entrega para la prueba de la COVID-19 es desde 72 horas. En algunos casos puede variar ya que es necesario la validación del InDRE. Consulta <a class="botonTiemposEntrega" style="cursor: pointer;color: #0F7CDB;" data-toggle="modal" data-target="#modalTiemposEntregaResultados">aquí</a> los tiempos de entrega por clínica.
                        </p>
                    </div>
                </div>


                <div class="categorias__card">

                    <div class="categorias__header">
                        <h3>¿Dónde puedo consultar mis resultados?</h3>
                    </div>

                    <div class="categorias__body">
                        <p>
                            Los resultados se enviarán de manera automática a tu número de WhatsApp, o bien puedes ingresar a nuestro sitio web <a href=" https://goo.gl/csdWE" target="_blank">https://goo.gl/csdWE</a> Con el usuario y contraseña de tu ticket.
                        </p>
                    </div>
                </div>

                <div class="categorias__card">

                    <div class="categorias__header">
                        <h3>¿Cuáles son los síntomas de la COVID-19?</h3>
                    </div>

                    <div class="categorias__body">
                        <p>
                            Los más comunes son fiebre, cansancio, tos seca y/o dificultad respiratoria. Algunos pacientes pueden presentar dolores, congestión nasal, rinorrea, dolor de garganta o diarrea. Estos síntomas suelen ser leves y aparecen de forma gradual. Fuente: Organización Mundial de la Salud. (<a href="" target="_blank">https://www.who.int/es/news-room/questions-and-answers/item/coronavirus-disease-covid-19-how-is-it-transmitted</a>)
                        </p>
                    </div>
                </div>


                <div class="categorias__card">

                    <div class="categorias__header">
                        <h3>¿Necesito orden médica para realizarme el estudio?</h3>
                    </div>

                    <div class="categorias__body">
                        <p>
                            No se requiere presentar orden médica.
                        </p>
                    </div>
                </div>


                <div class="categorias__card">

                    <div class="categorias__header">
                        <h3>¿Qué preparaciones necesito llevar?</h3>
                    </div>

                    <div class="categorias__body">
                        <p>
                            Es necesario presentarse sin aseo nasal, no aplicar medicamentos o soluciones nasales 2 horas antes del estudio.
                        </p>
                    </div>
                </div>


            </div>

            <div id="PruebaDeAntigenosInf" class="contenedor d-none">

                <div class="categorias__card">
                    <div class="categorias__header">
                        <h3>¿Cuál es el porcentaje de efectividad de la prueba?</h3>
                    </div>

                    <div class="categorias__body">
                        <p>
                            La prueba cuenta con un 96.52% de sensibilidad y 99.68% de especificad. En caso de padecer síntomas y presentar un resultado negativo, es importante realizarse una prueba PCR en Tiempo Real.
                        </p>
                    </div>
                </div>

                <div class="categorias__card">
                    <div class="categorias__header">
                        <h3>¿Cuáles son las diferencias entre las 3 pruebas Covid, con las que cuentan?</h3>
                    </div>

                    <div class="categorias__body">
                        <p>
                            <strong>- Prueba Diagnóstica PCR:</strong> Confirma la presencia actual de la COVID-19 en el paciente. 
                            <br>
                            <strong>- Prueba de Antígenos Covid-19:</strong> Se realiza en pacientes que buscan validar si sus síntomas son sinónimo de contagio. 
                            <br>
                            <strong>- Anticuerpos Totales Cuantitativos:</strong> Detecta la proteína S, que permite evaluar los anticuerpos en pacientes vacunados o desarrollados por la enfermedad.
                        </p>
                    </div>
                </div>

                <div class="categorias__card">
                    <div class="categorias__header">
                        <h3>¿En cuanto tiempo me entregan mis resultados?</h3>
                    </div>

                    <div class="categorias__body">
                        <p>
                            El tiempo promedio de entrega para la prueba de la COVID-19 es desde 2 horas.
                        </p>
                    </div>
                </div>

                <div class="categorias__card">
                    <div class="categorias__header">
                        <h3>¿Dónde puedo consultar mis resultados?</h3>
                    </div>

                    <div class="categorias__body">
                        <p>
                            Los resultados se enviarán de manera automática a tu número de WhatsApp, o bien puedes ingresar a nuestro sitio web https://goo.gl/csdWE Con el usuario y contraseña de tu ticket.
                        </p>
                    </div>
                </div>


                <div class="categorias__card">
                    <div class="categorias__header">
                        <h3>¿Cuánto cuesta la prueba de Antígenos COVID-19?</h3>
                    </div>

                    <div class="categorias__body">
                        <p>
                            Tiene un costo de $260 MXN, para agendar tu cita, puedes ingresar al siguiente enlace 
                            <a href="https://salud-digna.org/antigeno-covid-19/" target="_blank">https://salud-digna.org/antigeno-covid-19/</a> 
                        </p>
                    </div>
                </div>

                <div class="categorias__card">
                    <div class="categorias__header">
                        <h3>¿La prueba de Antígenos me sirve para viajar?</h3>
                    </div>

                    <div class="categorias__body">
                        <p>
                            Si. Algunas ciudades te permiten presentar una prueba de Antígenos para visitarlas. Consulta con tu aerolínea.
                        </p>
                    </div>
                </div>

            </div>

            <div id="AnticuerposTotalesInf" class="contenedor d-none">

                <div class="categorias__card">
                    <div class="categorias__header">
                        <h3>¿Qué función tiene esta prueba?</h3>
                    </div>

                    <div class="categorias__body">
                        <p>
                            Detecta la proteína S, que permite evaluar los anticuerpos en pacientes que ya fueron vacunados o desarrollados por la enfermedad.
                        </p>
                    </div>
                </div>

                <div class="categorias__card">
                    <div class="categorias__header">
                        <h3>¿Cómo se toma esta prueba?</h3>
                    </div>

                    <div class="categorias__body">
                        <p>
                            Se realiza a través de una muestra de sangre. El paciente no necesita ninguna preparación.
                        </p>
                    </div>
                </div>

                <div class="categorias__card">
                    <div class="categorias__header">
                        <h3>¿En cuanto tiempo tienes los resultados?</h3>
                    </div>

                    <div class="categorias__body">
                        <p>
                            El tiempo estimado de entrega de resultados es de 48 horas, este puede llegar a variar dependiendo tu zona geográfica. 
                            <a href="#" data-toggle="modal" data-target="#modalTablaHorarios">Consulta aquí los tiempos de entrega por ciudad.</a> Tus resultados los podrás consultar por WhatsApp o desde tu perfil de prevención.
                        </p>
                    </div>
                </div>

                <div class="categorias__card">
                    <div class="categorias__header">
                        <h3>¿Cuál es el precio de la prueba y es necesario el agendar cita?</h3>
                    </div>

                    <div class="categorias__body">
                        <p>
                            El precio es de $245 MXN. No es necesario agendar cita, puedes acudir directamente a la clínica en un horario de 07:00 a 11:00 a.m. Disponible en todas las clínicas.
                        </p>
                    </div>
                </div>

            </div>

            <div id="PagosEnLineaInf" class="contenedor d-none">

                <div class="categorias__card">
                    <div class="categorias__header">
                        <h3>¿Qué beneficio obtengo si pago en línea mis estudios?</h3>
                    </div>

                    <div class="categorias__body">
                        <p>
                            Al realizar el pago de tus estudios en línea, obtienes el 10% de descuento. Este beneficio aplica para estudios mayores a $50. *No aplica para paquetes, estudios especiales, ni pruebas de la COVID-19 (No garantiza una atención más rápida).
                        </p>
                    </div>
                </div>

                <div class="categorias__card">
                    <div class="categorias__header">
                        <h3>Realice el pago en línea de mis estudios, pero no voy acudir a mi cita ¿Qué puedo hacer?</h3>
                    </div>

                    <div class="categorias__body">
                        <p>
                            Reagenda o solicita una devolución en el siguiente enlace <a href="https://salud-digna.org/cambiosenmicita/" target="_blank">https://salud-digna.org/cambiosenmicita/</a>
                        </p>
                    </div>
                </div>

                <div class="categorias__card">
                    <div class="categorias__header">
                        <h3>¿Con qué métodos de pago cuentan?</h3>
                    </div>

                    <div class="categorias__body">
                        <p>
                            Realiza el pago de tus estudios en línea, aceptamos tarjetas de crédito y débito (Visa y Mastercard), además puedes realizar el pago de tus estudios con OXXO Pay, Coppel Pay o pago en clínica.
                        </p>
                    </div>
                </div>

                <div class="categorias__card">
                    <div class="categorias__header">
                        <h3>¿Cómo puedo solicitar una factura?</h3>
                    </div>

                    <div class="categorias__body">
                        <p>
                            Después de acudir a clínica y obtener un ticket, puedes solicitar tu factura en nuestro siguiente enlace: 
                            <a href="http://comprobantefiscal.salud-digna.org/" target="_blank">http://comprobantefiscal.salud-digna.org/</a> 
                        </p>
                    </div>
                </div>

            </div>

            <div id="ResultadosInf" class="contenedor d-none">

                <div class="categorias__card">
                    <div class="categorias__header">
                        <h3>¿Por que medio puedo consultar mis resultados?</h3>
                    </div>

                    <div class="categorias__body">
                        <p>
                            Consúltalos por medio de nuestras plataformas digitales: 
                        </p>
                        <ol>
                            <li>Sitio web</li> 
                            <li>WhatsApp</li> 
                            <li>Facebook Messenger</li>
                        </ol>
                    </div>
                </div>

                <div class="categorias__card">
                    <div class="categorias__header">
                        <h3>Mis resultados aun no están listos, ¿Qué puedo hacer?</h3>
                    </div>

                    <div class="categorias__body">
                        <p>
                            Consulta el estatus de tus resultados, enviándonos un WhatsApp  
                            <a href="tel:+525539566729">+52 55 3956 6729</a>
                        </p>
                    </div>
                </div>

                <div class="categorias__card">
                    <div class="categorias__header">
                        <h3>¿En dónde encuentro mi Usuario y Contraseña?</h3>
                    </div>

                    <div class="categorias__body">
                        <p>
                            Es muy sencillo, al acudir a clínica y realizarte el estudio, te entregarán un ticket, el cual contará con un número de Usuario y Contraseña, este lo podrás identificar debajo del código de barras de tu ticket.
                        </p>
                    </div>
                </div>

            </div>

            <div id="LaboratorioInf" class="contenedor d-none">

                <div class="categorias__card">
                    <div class="categorias__header">
                        <h3>¿Se necesita cita para estudios de Laboratorio?</h3>
                    </div>

                    <div class="categorias__body">
                        <p>
                            Para estudios de Laboratorio no requieres agendar cita, ya que se atiende conforme uno llega. Puedes acudir en un horario de 7:00 a.m a 12:00 p.m. (Realizar un pre-registro en línea no garantiza una atención más rápida en clínica).
                        </p>
                    </div>
                </div>

                <div class="categorias__card">
                    <div class="categorias__header">
                        <h3>¿Se necesita llevar alguna preparación, para mis estudios?</h3>
                    </div>

                    <div class="categorias__body">
                        <p>
                            Sí. Consulta los precios y preparaciones en el siguiente enlace <a href="https://salud-digna.org/precios-preparaciones/seleccionar/" target="_blank">https://salud-digna.org/precios-preparaciones/seleccionar/</a> 
                        </p>
                    </div>
                </div>

                <div class="categorias__card">
                    <div class="categorias__header">
                        <h3>¿Cómo obtengo el beneficio del 10% si no puedo realizar el pago de mis estudios de Laboratorio?</h3>
                    </div>

                    <div class="categorias__body">
                        <p>
                            Los estudios de laboratorio son los únicos que no se realiza el pago en línea, pero es necesario realizar un Pre-registro en la página para poder obtener el beneficio del 10%. De no contar con un número de folio, no puedes hacer válido este beneficio. *No aplica para paquetes, estudios especiales y ni pruebas de la COVID-19.
                        </p>
                    </div>
                </div>

            </div>

            <div id="LentesInf" class="contenedor d-none">

                <div class="categorias__card">
                    <div class="categorias__header">
                        <h3>¿Dónde puedo agendar una cita para mi examen de la vista?</h3>
                    </div>

                    <div class="categorias__body">
                        <p>
                            Acude directamente a tu clínica, si aún no conoces cuál es la más cercana, ingresá al siguiente enlace 
                            <a href="https://lentes.salud-digna.org/ubica-tu-clinica/" target="_blank">https://lentes.salud-digna.org/ubica-tu-clinica/</a> 
                        </p>
                    </div>
                </div>

                <div class="categorias__card">
                    <div class="categorias__header">
                        <h3>¿Cómo puedo realizar una cotización de unos lentes?</h3>
                    </div>

                    <div class="categorias__body">
                        <p>
                            Ingresa a <a href="https://lentes.salud-digna.org" target="_blank">https://lentes.salud-digna.org</a>, selecciona el armazón de tu interés y compártenos tu receta.
                        </p>
                    </div>
                </div>

                <div class="categorias__card">
                    <div class="categorias__header">
                        <h3>¿Puedo comprar mi vale de Lentes canjeables en clínica?</h3>
                    </div>

                    <div class="categorias__body">
                        <p>
                            Para hacer válido el beneficio, es necesario realizar el pago en línea, ya que si acudes a clínica sin la compra del mismo, no aplicará el beneficio.
                        </p>
                    </div>
                </div>

            </div>

        </div>
        
    </section>

    
    <?php getModule('consultaTiempoEntrega'); ?>
    <?php getModule('consultaTiempoEntregaAnticuerpos'); ?>


</section>