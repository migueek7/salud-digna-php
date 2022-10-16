<?=$this->layout('layouts/layout');?>

<h1 style="position: absolute;left: -120%;">Salud Digna - Portada de inicio</h1>

<section>
    
    <h2 style="position: absolute;left: -120%;">Paquetes y promociones</h2>

    <div class="contenedor">
        <div class="banner-grid mt-2">
    
            <!-- Swiper -->
            <div id="banner-home" class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="w-100">
                            <img src="<?=images()?>slider/cacu.webp" width="855" height="500" class="d-sm-none" alt="Papanicola en prueba de virus del papiloma humano v-desktop">
                            <img src="<?=images()?>slider/cacuM.webp" width="414" height="394" class="d-none d-sm-block" alt="Papanicola en prueba de virus del papiloma humano v-mobile">
                            <p>
                                Responsable sanitario: Q.C. Juan Ignacio Vázquez Cervantes. La Universidad Veracruzana. Cédula: 8857908. *Antes de realizarse cualquier prueba diagnóstica, consulte las indicaciones de su médico, él es el único facultado para solicitar dichos estudios e interpretar los resultados.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="w-100">
                            <img loading="lazy" src="<?=images()?>slider/filtro-azul-web.webp" width="855" height="500" class="d-sm-none" alt="banner lenters con filtro azul">
                            <img loading="lazy" src="<?=images()?>slider/filtro-azul-movil.webp" width="414" height="394" class="d-none d-sm-block"
                            alt="anner lenters con filtro azul v-mobile">
                            <p>
                            *Antes de realizarse cualquier prueba diagnóstica, consulte las indicaciones de su Médico, él es el único facultado para solicitar dichos estudios e interpretar los resultados.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="w-100">
                            <img loading="lazy" src="<?=images()?>slider/paqueteSeguimiento.webp" width="855" height="500" class="d-sm-none" alt="banner paquete seguimiento integral">
                            <img loading="lazy" src="<?=images()?>slider/paqueteSeguimientoM.webp" width="414" height="394" class="d-none d-sm-block" alt="banner paquete seguimiento integral v-mobile">
                            <p>
                            Responsable sanitario: Dr. Guillermo Benjamín Ramírez Cruz. La Universidad Nacional Autónoma de México. Cédula de Médico Cirujano: 5973226. Cédula de Especialidad: 8536483. <br> *Antes de realizarse cualquier prueba diagnóstica, consulte las indicaciones de su médico, él es el único facultado para solicitar dichos estudios e interpretar los resultados.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="w-100">
                            <img loading="lazy" src="<?=images()?>slider/ultra4dUsbsina.webp" width="855" height="500" class="d-sm-none" alt="banner ultrasonido 4d">
                            <img loading="lazy" src="<?=images()?>slider/ultra4dUsbsinaM.webp" width="414" height="394" class="d-none d-sm-block" alt="banner ultrasonido 4d v-mobile">
                            <p>Responsable sanitario: Dr. Guillermo Benjamín Ramírez Cruz. La Universidad Nacional Autónoma de México. Cédula de Médico Cirujano: 5973226. Cédula de Especialidad: 8536483. <br> *Antes de realizarse cualquier prueba diagnóstica, consulte las indicaciones de su médico, él es el único facultado para solicitar dichos estudios e interpretar los resultados.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="w-100">
                            <img loading="lazy" src="<?=images()?>slider/WebLentesIdeales.webp" width="855" height="500" class="d-sm-none" alt="banner promo lentes ideales">
                            <img loading="lazy" src="<?=images()?>slider/paqueteSeguimientoM.webp" width="414" height="394" class="d-none d-sm-block" alt="banner promo lentes ideales v-mobile">
                            <p>
                            Responsable sanitario: Q.C. Juan Ignacio Vazquez Cervantes. Universidad Veracruzana. Cédula: 8857908.<br>*Antes de realizarse cualquier prueba diagnóstica, consulte las indicaciones de su médico, él es el único facultado para solicitar dichos estudios e interpretar los resultados.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        
    
    
            <div id="banner-info" class="columna">
                <div class="card card__size-md p-3">

                    <h3 class="font-size-md mt-0 mb-1">
                        ¡Conoce las pruebas relacionadas de la COVID-19, que tenemos para ti! 
                        <a href="<?=base_url()?>/blank-page" style="text-decoration:none">Ver diferencias.</a> 
                    </h3>
    
                    <div class="promos">
                        <img loading="lazy" src="<?=images()?>/btnPcrW.png" class="d-sm-none mr-lg-1" alt="Prueba diagnostica pcr en tiempo normal">
                        <img loading="lazy" src="<?=images()?>/btnPcrM.png" class="d-none d-sm-block mr-lg-1" alt="Prueba diagnostica pcr en tiempo normal">
    
                        <img loading="lazy" src="<?=images()?>/btnAntigenosW.png" class="d-sm-none" alt="Prueba de antigenos covid-19">
                        <img loading="lazy" src="<?=images()?>/btnAntigenosM.png" class="d-none d-sm-block" alt="Prueba de antigenos covid-19">
                    </div>
    

                    <hr class="hr my-1">
                    <h4 class="font-size-md mt-0 mb-1">Estudios complementarios de la COVID-19: </h4>
    
                    
                    <div class="paquetes ">

                        
                        <a href="<?=base_url()?>/blank-page" class="item mr-lg-1 mb-1 mb">
                            <img loading="lazy" src="<?=images()?>/icono-covid.svg" class="pr-1" width="30" height="30" alt="Paquete seguimiento integral COVID-19">
                            <h4 class="m-0">Paquete seguimiento<br>integral COVID-19</h4>
                        </a>

                        <a href="<?=base_url()?>/blank-page" class="item mb-1">
                            <img loading="lazy" src="<?=images()?>/icono-tomografia.svg" class="pr-1" width="30" height="30" alt="Tomografía de tórax">
                            <h4 class="m-0">Tomografía de tórax</h4>
                        </a>
                       

                    </div>
                    
                </div>
            </div>
    

        </div>
    </div>
</section>


<section>
    <div class="contenedor">

        <h3 class="h3 mt-0">¡Hazlo en línea!</h3>
        
        <div class="secciones-grid">

            <a href="<?=base_url()?>/blank-page" class="item">
                <div class="p-1">
                    <img loading="lazy" src="<?=images()?>/expediente-medico.svg" class="d-block pb-1" width="56" height="56" 
                    alt="Consulta tus resultados ahora">
                    <h4 class="font-size-lg m-0">Consulta tus resultados ahora</h4> 
                </div>
            </a>
           
            <a href="<?=base_url()?>/blank-page" class="item">
                <div class="p-1">
                    <img loading="lazy" src="<?=images()?>/calendario.svg" class="d-block pb-1" width="56" height="56" 
                    alt="Realiza tu cita ahora">
                    <h4 class="font-size-lg m-0">Realiza tu cita ahora</h4> 
                </div>
            </a>

            <a href="<?=base_url()?>/blank-page" class="item">
                <div class="p-1">
                    <img loading="lazy" src="<?=images()?>/cotizacion.svg" class="d-block pb-1" width="56" height="56" 
                    alt="Cotiza tus estudios">
                    <h4 class="font-size-lg m-0">Cotiza tus estudios</h4> 
                </div>
            </a>
                
            <a href="<?=base_url()?>/blank-page" class="item">
                <div class="p-1">
                    <img loading="lazy" src="<?=images()?>/lentes.svg" class="d-block pb-1" width="56" height="56" 
                    alt="Lentes por solo $350">
                    <h4 class="font-size-lg m-0">Lentes por solo $350</h4> 
                </div>
            </a>    

        </div>
    </div>
</section>


<section>
    <div class="contenedor">

        <h3 class="h3">También puede interesarte</h3>

        <div class="servicios-grid">
            <div class="item1">
                <img loading="lazy" src="<?=images()?>servicios/izquierdo.webp" width="380" height="378" style="width:100%; height: auto;" alt="Tomografía de torax">
            </div>

            <div class="item2">
                <img loading="lazy" src="<?=images()?>/servicios/examen-vista-web.webp" width="370" height="180" style="width:100%; height: auto;" alt="Lentes con solo antirreflejante">
            </div>

            <div class="item3">
                <img loading="lazy" src="<?=images()?>/servicios/estilos-web.webp" width="370" height="180" style="width:100%; height: auto;" alt="Examen de la vista sin costo">
            </div>

            <div class="item4">
                <img loading="lazy" src="<?=images()?>servicios/derecho.webp" width="380" height="378" style="width:100%; height: auto;" alt="paquete infantil">
            </div>
        </div>
    </div>
</section>


<section class="servicios">
    <div class="contenedor">
        <h3 class="h3 pb-0 mb-0">No lo dudes, ¡prevén!</h3>
    </div>

    <div class="contenedor p-0">

        <div class="lunchbox">

            <!-- slider main container -->
            <div id="swiperServicios" class="swiper-container"> 

                <!-- additional required wrapper -->
                <div class="swiper-wrapper">

                    <!-- slides -->
                    <div class="swiper-slide">
                        <div class="product card">
                            <img loading="lazy" width="270" height="200" class="photograph" src="<?=images()?>/servicios/laboratorio.webp" alt="Laboratorio">
                            <div class="info">
                                <div>
                                    <h2 class="product__name">Laboratorio</h2>
                                    <p class="product__description">
                                        De manera preventiva o de diagnóstico, una prueba de Laboratorio ofrece información valiosa.
                                    </p>
                                </div>
                                <a href="<?=base_url()?>/blank-page" class="btn btn-one mx-auto">
                                    Conoce más
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="product card">
                            <img loading="lazy" width="270" height="200" class="photograph" src="<?=images()?>/servicios/ultrasonido.webp" alt="Ultrasonido">
                            <div class="info">
                                <div>
                                    <h2 class="product__name">Ultrasonido</h2>
                                    <p class="product__description">
                                        Obtén imágenes del interior de tu cuerpo de forma segura, ¡incluso aprecia a detalle a tu bebé! 
                                    </p>
                                </div>
                                <a href="<?=base_url()?>/blank-page" class="btn btn-one mx-auto">
                                    Conoce más
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide ">
                        <div class="product card">
                            <img loading="lazy" width="270" height="200" class="photograph" src="<?=images()?>/servicios/lentes.webp" alt="Lentes">
                            <div class="info">
                                <div>
                                    <h2 class="product__name">Lentes</h2>
                                    <p class="product__description">
                                        La mayoría de los defectos de la vista pueden ser corregidos con un par de Lentes.
                                    </p>
                                </div>
                                <a href="<?=base_url()?>/blank-page" class="btn btn-one mx-auto">
                                    Conoce más
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide ">
                        <div class="product card">
                            <img loading="lazy" width="270" height="200" class="photograph" src="<?=images()?>/servicios/rayos.webp" alt="Rayos X">
                            <div class="info">
                                <div>
                                    <h2 class="product__name">Rayos X</h2>
                                    <p class="product__description">
                                        Aprecia tus órganos, huesos y otros tejidos a simple vista, con la mínima dosis de radiación.
                                    </p>
                                </div>
                                <a href="<?=base_url()?>/blank-page" class="btn btn-one mx-auto">
                                    Conoce más
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="product card">
                            <img loading="lazy" width="270" height="200" class="photograph" src="<?=images()?>/servicios/mastografia.webp" alt="Mastografía">
                            <div class="info">
                                <div>
                                    <h2 class="product__name">Mastografía</h2>
                                    <p class="product__description">
                                        Detecta anormalidades en tu pecho antes de que se presenten enfermedades como el cáncer de mama.
                                    </p>
                                </div>
                                <a href="<?=base_url()?>/blank-page" class="btn btn-one mx-auto">
                                    Conoce más
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide ">
                        <div class="product card">
                            <img loading="lazy" width="270" height="200" class="photograph" src="<?=images()?>/servicios/papanicolau.webp" alt="Papanicolau">
                            <div class="info">
                                <div>
                                    <h2 class="product__name">Papanicolau</h2>
                                    <p class="product__description">
                                        Encuentra tiempo infecciones que puedan causar cáncer de cuello uterino con un estudio de Papanicolaou.
                                    </p>
                                </div>
                                <a href="<?=base_url()?>/blank-page" class="btn btn-one mx-auto">
                                    Conoce más
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide ">
                        <div class="product card">
                            <img loading="lazy" width="270" height="200" class="photograph" src="<?=images()?>/servicios/densitometria.webp" alt="Densitometría">
                            <div class="info">
                                <div>
                                    <h2 class="product__name">Densitometría</h2>
                                    <p class="product__description">
                                        Mide la densidad mineral de tus huesos y valora tu riesgo de padecer fracturas u osteoporosis.
                                    </p>
                                </div>
                                <a href="<?=base_url()?>/blank-page" class="btn btn-one mx-auto">
                                    Conoce más
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- pagination -->
                <div class="swiper-pagination"></div>

            </div>

            <!-- navigation buttons -->
            <div id="js-prev1" class="swiper-button-prev"></div>
            <div id="js-next1" class="swiper-button-next"></div>
  
        </div>

    </div>
</section>