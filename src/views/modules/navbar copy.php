<nav class="menu">
    <section class="">

        <div class="menu__container contenedor py-0">

            <h1 class="menu__logo">
                <a href="<?=$_ENV['BASE_URL']?>" class="load">
                    <img src="<?=images()?>/logo.svg" alt="Salud Digna">
                </a>
            </h1>

            <div class="menu__caja">
                <ul class="menu__links">

                    <li class="menu__item megamenu" style="position: inherit">
                        <a href="#" class="menu__link">
                            COVID-19 <img src="<?=images()?>/iconos/arrow-down.svg" class="menu__arrow" alt="">    
                        </a>

                        <div class="menu__sombra mega">
                            <div class="menu__nesting">
                                <ul>
                                    <li class="menu__inside">
                                        <a href="#" class="menu__link menu__link-inside" id="pcrCovid">
                                            <div>Agendar Prueba PCR COVID-19</div> 
                                            <img src="<?=images()?>/menu/covid/agendar-prueba-pcr-covid.jpg" alt="">
                                        </a>
                                    </li>
                                    <li class="menu__inside">
                                        <a href="#" class="menu__link menu__link-inside" id="prueAntigeno">Agendar Prueba Antígenos COVID</a>
                                    </li>
                                    <li class="menu__inside">
                                        <a href="#" class="menu__link menu__link-inside" id="diferPruebas">Diferencia entre pruebas</a>
                                    </li>
                                    <li class="menu__inside">
                                        <a href="#" class="menu__link menu__link-inside" id="infDeLaEnfermedad">Información de la enfermedad</a>
                                    </li>
                                    <li class="menu__inside">
                                        <a href="#" class="menu__link menu__link-inside" id="estaEnTiempoReal">Estadísticas en tiempo real</a>
                                    </li>
                                    <li class="menu__inside">
                                        <a href="#" class="menu__link menu__link-inside" id="tomaMuestra">Ubica tu toma de muestra</a>
                                    </li>
                                </ul>
                                <div class="submenu">
                                    <div class="contenedor">

                                        <!-- PCR COVID -->
                                        <div class="grid-2 d-none" name="pcrCovid">
                                            <div class="columna">
                                                <div>
                                                    <h2>Prueba Diagnostica PCR En Tiempo Real</h2>
                                                    <p>
                                                    La prueba cuenta con un 96.52% de sensibilidad y 99.68% de especificad.
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="columna">
                                                <img src="<?=images()?>megamenu/prueba-pcr.jpg" 
                                                class="img-fluid w-100" alt="Prueba PCR">
                                            </div>
                                        </div>

                                        <!-- PRUEBA DE ANTIGENO -->
                                        <div class="grid-2 d-none" name="prueAntigeno">
                                            <div class="columna">
                                                <div>
                                                    <h2>Prueba de Antigeno</h2>
                                                    <p>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="columna">
                                                <img src="<?=images()?>megamenu/default.jpg" 
                                                class="img-fluid w-100" alt="Prueba Antigeno">
                                            </div>
                                        </div>

                                        <!-- DIFERENCIA ENTRE PRUEBAS -->
                                        <div class="grid-2 d-none" name="diferPruebas">
                                            <div class="columna">
                                                <div>
                                                    <h2>Diferencias de prenas</h2>
                                                    <p>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="columna">
                                                <img src="<?=images()?>megamenu/default.jpg" 
                                                class="img-fluid w-100" alt="Diferencia de Pruebas">
                                            </div>
                                        </div>

                                        <!-- INFO DE LA ENFERMEDAD -->
                                        <div class="grid-2 d-none" name="infDeLaEnfermedad">
                                            <div class="columna">
                                                <div>
                                                    <h2>Información de la enfermadad</h2>
                                                    <p>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="columna">
                                                <img src="<?=images()?>megamenu/default.jpg" 
                                                class="img-fluid w-100" alt="infDeLaEnfermedad">
                                            </div>
                                        </div>

                                        <div class="grid-2 d-none" name="estaEnTiempoReal">
                                            <div class="columna">
                                                <div>
                                                    <h2>Estadisticas en tiempo real</h2>
                                                    <p>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="columna">
                                                <img src="<?=images()?>megamenu/default.jpg" 
                                                class="img-fluid w-100" alt="Estadisticas en tiempo real">
                                            </div>
                                        </div>

                                        <div class="grid-2 d-none" name="tomaMuestra">
                                            <div class="columna">
                                                <div>
                                                    <h2>
                                                        Ubica la toma de muestra más cercana
                                                        para las pruebas de COVID-19.
                                                    </h2>
                                                    <p>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="columna">
                                                <img src="<?=images()?>megamenu/default.jpg" 
                                                class="img-fluid w-100" alt="Estadisticas en tiempo real">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
        

                    <li class="menu__item menu__item-show d-lg-none">
                        <a href="javascript:void(0)" class="menu__link main">
                            COVID-19 <img src="<?=images()?>iconos/arrow-down.svg" class="menu__arrow" alt="">
                        </a>
        
                        <div class="menu__sombra">
                            <ul class="menu__nesting">
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">Agendar Prueba PCR COVID-19</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">Agendar Prueba Antígenos COVID</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">Diferencia entre pruebas</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">Información de la enfermedad</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">Estadísticas en tiempo real</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">Ubica tu toma de muestra</a>
                                </li>
                            </ul>
                        </div>
                    </li>

        
                    <li class="menu__item menu__item-show">
                        <a href="javascript:void(0)" class="menu__link main">
                            Conócenos <img src="<?=images()?>/iconos/arrow-down.svg" class="menu__arrow" alt="">
                        </a>
        
                        <div class="menu__sombra">
                            <ul class="menu__nesting">
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">¿Quiénes somos?</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">Historia</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">Centro Nacional de Referencia</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">Misión, visión y valores</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">Bolsa de Trabajo</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="<?=base_url()?>/contactanos" class="menu__link menu__link-inside">Contáctanos</a>
                                </li>
                            </ul>
                            <!-- <div class="submenu"></div> -->
                        </div>
                    </li>

                    
                    <li class="menu__item menu__item-show">
                        <a href="javascript:void(0)" class="menu__link main">
                            Servicios <img src="<?=images()?>/iconos/arrow-down.svg" class="menu__arrow" alt="">
                        </a>
        
                        <div class="menu__sombra">
                            <ul class="menu__nesting">
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">Laboratorio</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">Ultrasonido</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">Lentes</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">Tomografía</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">Resonancia magnética</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">Mastografía</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">Papanicolaou</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">Papanicolaou</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">Electrocardiograma</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">Nutrición</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">Densitometría</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">Rayos X</a>
                                </li>
                            </ul>
                            <!-- <div class="submenu"></div> -->
                        </div>
                    </li>
                    

                    <li class="menu__item menu__item-show">
                        <a href="javascript:void(0)" class="menu__link main">
                            Pacientes <img src="<?=images()?>/iconos/arrow-down.svg" class="menu__arrow" alt="">
                        </a>
        
                        <div class="menu__sombra">
                            <ul class="menu__nesting">
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">Consulta de resultados</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">Haz una cita</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">Precios y preparaciones</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">Cambios en mi cita y devoluciones</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">Ubica tu clínica</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">¿Necesitas factura?</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">Evalúa nuestros servicios</a>
                                </li>
                            </ul>
                            <!-- <div class="submenu"></div> -->
                        </div>
                    </li>
                    
        
                    <li class="menu__item menu__item-show">
                        <a href="javascript:void(0)" class="menu__link main">
                            Atención a empresas <img src="<?=images()?>/iconos/arrow-down.svg" class="menu__arrow" alt="">
                        </a>
        
                        <div class="menu__sombra">
                            <ul class="menu__nesting">
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">Ver paquetes</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">Check ups</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">Perfiles de admisión</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="#" class="menu__link menu__link-inside">Contactar con un agente</a>
                                </li>
                            </ul>
                            <!-- <div class="submenu"></div> -->
                        </div>
                    </li>
                    

                    <li class="menu__item">
                        <a href="#" class="menu__link">
                            Ubica tu clínica
                        </a>
                    </li>


                </ul>

                
                <footer>
                    <div class="grid-2">
                        <div class="columna">
                            <a href="<?=base_url()?>/iniciar-sesion" class="btn btn-one mx-auto">
                                Iniciar sesión <span class="loader loader__btn"></span>
                            </a>
                        </div>
                        <div class="columna">
                            <a href="<?=base_url()?>/registro" class="btn btn-one-outline mx-auto">
                                Registrar
                            </a>
                        </div>
                    </div>
                </footer>
            </div>


            <div class="menu__accion" style="display: flex;">

                <button class="hamburger hamburger--collapse" type="button" aria-label="Abrir menú" readonly="true">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
    
    
                <div style="display: flex;align-items: center;font-size: 2rem;margin-left: 1.2rem;">
                    <a href="javascript:void(0)" id="btn-buscar">
                        <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
                        <img src="<?=images()?>/iconos/search.svg" alt="icono buscar" style="width: 35px;height: 35px;">
                    </a>
                </div>
            </div>

        </div>

    </section>


    <div id="buscador">
        <div class="buscador__caja ">
            <div class="contenedor">
                
                <form id="form-buscador" class="pb-0">
                    <input class="w-100 buscador__input" type="text" name="buscar" placeholder="¿Qué deseas buscar?">
                </form>

                <div class="buscador__interno d-none">
                    <ul class="list">
                        <li>
                            <a href="#">
                                <i class="fa-solid fa-magnifying-glass"></i> HTML
                            </a>
                        </li>
                            
                        <li>
                            <a href="#">
                                <i class="fa-solid fa-magnifying-glass"></i> CSS
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa-solid fa-magnifying-glass"></i> Javascript
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa-solid fa-magnifying-glass"></i> Java
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa-solid fa-magnifying-glass"></i> PHP
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa-solid fa-magnifying-glass"></i> Bootstrap
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa-solid fa-magnifying-glass"></i> Jquery
                            </a>
                        </li>
                    </ul>

                    <!-- <div style="display: flex">
                        <div style="width: 100%; height: 100px; background: red;"></div>
                        <div style="width: 100%; height: 100px; background: blue;"></div>
                        <div style="width: 100%; height: 100px; background: yellow;"></div>
                    </div> -->
                </div>

            </div>
        </div>
    </div>

</nav>