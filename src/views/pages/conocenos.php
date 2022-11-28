<?=$this->layout('layouts/layout');?>

<h1 style="position: absolute;left: -120%;">Conocenos</h1>

<section>

    <div class="banner img-banner">

        <div class="contendor-fluid movil">
            <picture>
                <img loading="lazy" src="<?=images()?>conocenos/banner-conocenos-movil.jpg" class="imagen" alt="banner contactanos">
            </picture>
        </div>

        <div class="contenedor">
            <div class="columna">
                <div class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                    <h2 class="m-0">Salud Digna</h2>
                    <p>
                        Fuimos fundados con el propósito de llevar <strong>servicios de prevención y diagnóstico a la población mexicana, a precios     accesibles y ofreciéndoles una atención y equipo de calidad. </strong>
                    </p>
                    <p>
                        Ya sea que necesiten un estudio de laboratorio, de imagenología o un nuevo par de lentes, en <strong>Salud Digna</strong> podrán encontrar una opción que se ajuste a sus necesidades de diagnóstico, con equipo tecnológico y atención que son sometidos constantemente a un proceso de mejora continua, que permitan a los pacientes y al personal médico tomar decisiones adecuadas y oportunas para el cuidado de la salud. 
                    </p>
                    <p>
                        A lo largo de <strong>15 años</strong> de formar parte del cuidado de la salud de las personas, hemos logrado alcanzar a <strong>30 estados de la república con más de 90 clínicas</strong>, acercándonos cada vez más al sueño de alcanzar un mundo donde la prevención es el principal método para combatir enfermedades.
                    </p>
                </div>
            </div>

        </div>
    </div>

</section>

<main>
    <div class="contenedor-fluid p-0">

        <div class="nav-secondary">  

            <div class="columna wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="item">
                    <button>
                        MISION
                        <i class="icon-arrow-down arrow"></i>
                        <!-- <img loading="lazy" src="http://192.168.0.11:4000/public/assets/images/iconos/arrow-down.svg" class="arrow" alt=""> -->
                    </button>   
                    <div class="parrafo">
                        <p>
                        Contribuir a que cada día más personas, en más lugares, tengan una mayor accesibilidad a servicios de prevención y diagnóstico confiables, contando con el mejor equipo humano y tecnológico.
                        </p>
                    </div>
                </div>
            </div>
            <div class="columna wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                <div class="item">
                    <button>
                        VISION
                        <i class="icon-arrow-down arrow"></i>
                        <!-- <img loading="lazy" src="http://192.168.0.11:4000/public/assets/images/iconos/arrow-down.svg" class="arrow" alt=""> -->
                    </button>
                    <div class="parrafo">
                        <p>
                            Ser la institución líder en prevención y diagnóstico oportuno en las áreas de influencia de nuestras clínicas, contribuyendo a conservar y mejorar la salud de las personas, y con ello, su calidad de vida.
                        </p>
                    </div>
                </div>
            </div>
            <div class="columna wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                <div class="item">
                    <button>
                        VALORES
                        <i class="icon-arrow-down arrow"></i>
                        <!-- <img loading="lazy" src="http://192.168.0.11:4000/public/assets/images/iconos/arrow-down.svg" class="arrow" alt=""> -->
                    </button>
                    <div class="parrafo">
                        <p>
                            Calidad, Honestidad, Calidez, Transparencia, Dignidad, Corresponsabilidad, Respeto, Humildad.
                        </p>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <section>
        <div class="contenedor detalles">
            
            <style>
                .swiper {
                    width: 100%;
                    height: 100%;
                }

                .swiper-slide {
                    background-position: center;
                    background-size: cover;
                }

                .swiper-slide img {
                    display: block;
                    width: 100%;
                }
            </style>

            <div class="box">


                <div class="columna wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1s">
                    <div>
                        
                        <div class="estilo1">
                            
                            <div class="parrafo">
                                <div class="box-titulo">
                                    <h3 class="titulo">Nuestra Tecnología</h3>
                                </div>
                                <p>
                                    Un estudio clínico debe realizarse en las condiciones óptimas para que el resultado sea preciso y con un grado alto de confiabilidad.
                                </p> 
                                <p>
                                    Por ello, los equipos que utilizamos en nuestras clínicas son provistos por nuestros aliados estratégicos, que cuentan con reconocimiento internacional por la calidad de su tecnología y con quienes mantenemos un contacto constante para garantizar que los equipos y quienes los operan, realicen cada estudio correctamente.
                                </p>
                            </div>
    

                            <div class="imagen">

                                <div class="swiper mySwiperNosotros">
                                    <div class="swiper-wrapper">

                                        <div class="swiper-slide">
                                            <img src="<?=images()?>conocenos/nuestra-tecnologia.webp" alt="...">
                                        </div>

                                        <div class="swiper-slide">
                                            <img src="<?=images()?>conocenos/centro-nacional.webp" alt="...">
                                        </div>
                                
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                                
                            </div>
    
                        </div>
                    </div>
                </div>



                <div class="columna wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="0s">
                    <div> 
                        <div class="estilo1 reverse">

                            <!-- <img src="<images()?>conocenos/nuestro-metodo.webp" alt=""> -->
                            <div class="imagen">

                                <div class="swiper mySwiperNosotros">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="<?=images()?>conocenos/nuestro-metodo.webp" alt="...">
                                        </div>
                                      
                                        <div class="swiper-slide">
                                            <img src="<?=images()?>conocenos/nuestra-tecnologia.webp" alt="...">
                                        </div>
                                
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>


                            <div class="parrafo">
                                <div class="box-titulo">
                                    <h3 class="titulo">Nuestro Modelo</h3>
                                </div>
                                <p>
                                    Nuestro propósito fundamental es que toda persona tenga acceso a servicios de prevención y detección oportuna dignos.
                                </p> 
                               <p>
                                    Estableciendo alianzas con empresas de salud a nivel mundial, podemos contar con equipo de última tecnología, sin que esto signifique un gasto considerable a nuestros beneficiarios.
                               </p>
                               <p>
                                    El mayor interés de nuestra labor es ayudar. Por eso, cada peso aportado por los pacientes es reinvertido en nuestras clínicas para mejorar el servicio y cubrir los gastos de operación. Esto nos ha permitido seguir creciendo y alcanzar cada día más hogares.
                               </p>
                            </div>

                        </div>
                    </div>
                </div>



                <div class="columna wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0s">
                    <div>
                        
                        <div class="estilo1">
                            
                            <div class="parrafo">
                                <div class="box-titulo">
                                    <h3 class="titulo">Centro Nacional de Referencia</h3>
                                </div>
                                <p>
                                    Nuestros tiempos de entrega tan cortos no serían posibles de no contar con uno de nuestros más grandes orgullos: el Centro Nacional de Referencia. Aquí, nuestros laboratorios de análisis y microbiología cuentan con equipos automatizados, que hacen posible analizar una gran cantidad de muestras biológicas y cultivos diariamente.
                                </p> 
                                <p>
                                    Es en este centro donde se fabrican los lentes con graduaciones y tratamientos especiales de nuestras clínicas, además de contar con un área de Telerradiología, donde se interpretan los estudios de rayos X de nuestros pacientes.
                                </p>
                            </div>
    
                            <div class="imagen">
                                <!-- <img src="<images()?>conocenos/centro-nacional.webp" alt=""> -->

                                <div class="swiper mySwiperNosotros">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="<?=images()?>conocenos/centro-nacional.webp" alt="...">
                                        </div>
                                      
                                        <div class="swiper-slide">
                                            <img src="<?=images()?>conocenos/nuestra-tecnologia.webp" alt="...">
                                        </div>
                                
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            

                                <!-- <div id="carousel-detalle3" class="carousel slide" data-ride="carousel">
                                    
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-detalle3" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-detalle3" data-slide-to="1"></li>
                                        <li data-target="#carousel-detalle3" data-slide-to="2"></li>
                                    </ol>

                                    
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img src="<images()?>conocenos/centro-nacional.webp" alt="...">
                                        
                                        </div>
                                        <div class="item">
                                            <img src="<images()?>conocenos/centro-nacional.webp" alt="...">
                                        </div>
                                    </div>

                                   
                                    <a class="left carousel-control" href="#carousel-detalle3" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-detalle3" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div> -->

                            </div>
    
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <div class="contenedor">
        <hr class="hr-first">
    </div>

    <section>

        <div class="contenedor cifras">
            <h3>Nuestras Cifras</h3>

            <div class="box wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">

                <div class="columna">
                    <div class="card">
                        <div>
                            <img src="<?=images()?>conocenos/cifras/corazon.png" alt="">
                        </div>
                        <div class="parrafo">
                            <strong>15 años</strong> ayudando
                        </div>
                    </div>
                </div>

                <div class="columna">
                    <div class="card">
                        <div>
                            <img src="<?=images()?>conocenos/cifras/clinicas.png" alt="">
                        </div>
                        <div class="parrafo">
                            <p>
                                <strong>+87 clínicas</strong> en México y EEUU.
                            </p>
                        </div>
                    </div>
                </div>

            </div>


            <div class="box wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">

                <div class="columna">
                    <div class="card">
                        <div>
                            <img src="<?=images()?>conocenos/cifras/beneficiados.png" alt="">
                        </div>
                        <div class="parrafo">
                            <p>
                                <strong>8 millones</strong> de beneficiados en 2017.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="columna">
                    <div class="card">
                        <div>
                            <img src="<?=images()?>conocenos/cifras/mastografia.png" alt="">
                        </div>
                        <div class="parrafo">
                            <p>
                            En 2021 sumamos <strong>más de 4 millones de estudios de mastografía</strong>, ayudando así al diagnóstico preventivo del cáncer de mama en México.
                            </p>
                        </div>
                    </div>
                </div>

            </div>


            <div class="box wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">

                <div class="columna">
                    <div class="card">
                        <div><img src="<?=images()?>conocenos/cifras/clinicas.png" alt=""></div>
                        <div class="parrafo">
                            <p>
                            <strong>160 clínicas</strong> en México y Nicaragua, operando en más de <strong>80 ciudades.</strong>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="columna">
                    <div class="card">
                        <div>
                            <img src="<?=images()?>conocenos/cifras/lentes.png" alt="">
                        </div>
                        <div class="parrafo">
                            <p>
                                Desde el 2015 <strong>Salud Digna es de los mayores proveedores de lentes para los mexicanos</strong>, otorgando en 2021 la cantidad de 2, 665, 821 pares de lentes.
                            </p>
                        </div>
                    </div>
                </div>

            </div>


            <div class="box wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">

                <div class="columna">
                    <div class="card">
                        <div><img src="<?=images()?>conocenos/cifras/covid.png" alt=""></div>
                        <div class="parrafo">
                            <p>
                                Hasta el 2021 se han realizado <strong>más de 8 millones de pruebas COVID</strong> en nuestros laboratorios.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="columna">
                    <div class="card">
                        <div>
                            <img src="<?=images()?>conocenos/cifras/redes-sociales.png" alt="">
                        </div>
                        <div class="parrafo">
                            <p>
                                En nuestras redes sociales, <strong>más de 2 millones de personas</strong> son testigos de cada aportación, estudio o logros en nuestra aportación a la salud.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

</main>

<script>
    window.addEventListener('load', () => {
        new WOW().init();
    });
</script>