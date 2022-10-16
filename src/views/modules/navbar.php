<?php
$imgExt = ".webp"; 
$menu = [
    "covid" => [
        0 => [
            "id" => "pcrCovid",
            "titulo" => "Agendar Prueba PCR COVID-19",
            "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
            "imagen" => images()."menu/covid/pcr".$imgExt,
            "submenu" => [
                "subTitulo" => "Prueba Diagnostica PCR En Tiempo Real",
                "subDescripcion" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "subImagen" => images()."menu/covid/pcr-web".$imgExt
            ]
        ],
        1 => [
            "id" => "prueAntigeno",
            "titulo" => "Agendar Prueba Antígenos COVID",
            "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
            "imagen" => images()."/menu/covid/antigenos".$imgExt,
            "submenu" => [
                "subTitulo" => "Prueba Antígenos",
                "subDescripcion" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "subImagen" => images()."menu/covid/antigenos-web".$imgExt
            ]
        ],
        2 => [
            "id" => "diferPruebas",
            "titulo" => "Diferencia entre pruebas",
            "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
            "imagen" => images()."menu/covid/diferencias".$imgExt,
            "submenu" => [
                "subTitulo" => "Diferencia entre pruebas",
                "subDescripcion" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "subImagen" => images()."menu/covid/diferencias-web".$imgExt
            ]
        ],
        3 => [
            "id" => "infDeLaEnfermedad",
            "titulo" => "Información de la enfermedad",
            "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
            "imagen" => images()."menu/covid/ubica".$imgExt,
            "submenu" => [
                "subTitulo" => "",
                "subDescripcion" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "subImagen" => images()."menu/covid/ubica-web".$imgExt
            ]
        ],
        4 => [
            "id" => "estaEnTiempoReal",
            "titulo" => "Estadísticas en tiempo real",
            "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
            "imagen" => images()."menu/covid/estadisticas".$imgExt,
            "submenu" => [
                "subTitulo" => "Estadísticas en tiempo real",
                "subDescripcion" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "subImagen" => images()."menu/covid/estadisticas-web".$imgExt
            ]
        ],
        5 => [
            "id" => "tomaMuestra",
            "titulo" => "Ubica tu toma de muestra",
            "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
            "imagen" => images()."menu/covid/ubica".$imgExt,
            "submenu" => [
                "subTitulo" => "Ubica la toma de muestra más cercana para las pruebas de COVID-19.",
                "subDescripcion" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "subImagen" => images()."menu/covid/ubica-web".$imgExt
            ]
        ]
    ],
    "servicios" => [
        0 => [
            "id" => "Laboratorio",
            "titulo" => "Laboratorio",
            "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
            "imagen" => images()."/menu/servicios/laboratorio".$imgExt,
            "submenu" => [
                "subTitulo" => "",
                "subDescripcion" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "subImagen" => images()."menu/servicios/laboratorio-web".$imgExt
            ]
        ],
        1 => [
            "id" => "Ultrasonido",
            "titulo" => "Ultrasonido",
            "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
            "imagen" => images()."menu/servicios/ultrasonido".$imgExt,
            "submenu" => [
                "subTitulo" => "",
                "subDescripcion" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "subImagen" => images()."menu/servicios/ultrasonido-web".$imgExt
            ]
        ],
        2 => [
            "id" => "Lentes",
            "titulo" => "Lentes",
            "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
            "imagen" => images()."menu/servicios/lentes".$imgExt,
            "submenu" => [
                "subTitulo" => "",
                "subDescripcion" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "subImagen" => images()."menu/servicios/lentes-web".$imgExt
            ]
        ],
        3 => [
            "id" => "Electrocardiograma",
            "titulo" => "Electrocardiograma",
            "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
            "imagen" => images()."menu/servicios/electrocardiograma".$imgExt,
            "submenu" => [
                "subTitulo" => "",
                "subDescripcion" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "subImagen" => images()."menu/servicios/electrocardiograma-web".$imgExt
            ]
        ],
        4 => [
            "id" => "Tomografia",
            "titulo" => "Tomografía",
            "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
            "imagen" => images()."menu/servicios/tomografia".$imgExt,
            "submenu" => [
                "subTitulo" => "",
                "subDescripcion" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "subImagen" => images()."menu/servicios/tomografia-web".$imgExt
            ]
        ],
        5 => [
            "id" => "RayosX",
            "titulo" => "Rayos X",
            "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
            "imagen" => images()."menu/servicios/rayos-x".$imgExt,
            "submenu" => [
                "subTitulo" => "",
                "subDescripcion" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "subImagen" => images()."menu/servicios/rayos-x-web".$imgExt
            ]
        ],
        6 => [
            "id" => "Desintrometria",
            "titulo" => "Densitometría",
            "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
            "imagen" => images()."menu/servicios/densitometria".$imgExt,
            "submenu" => [
                "subTitulo" => "Desintrometria",
                "subDescripcion" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "subImagen" => images()."menu/servicios/densitometria-web".$imgExt
            ]
        ],
        7 => [
            "id" => "Resonancia",
            "titulo" => "Resonancia Magnética",
            "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
            "imagen" => images()."menu/servicios/resonancia".$imgExt,
            "submenu" => [
                "subTitulo" => "",
                "subDescripcion" => "",
                "subImagen" => images()."menu/servicios/resonancia-web".$imgExt
            ]
        ],
        8 => [
            "id" => "Papanicolaou",
            "titulo" => "Papanicolaou",
            "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
            "imagen" => images()."menu/servicios/papanicolaou".$imgExt,
            "submenu" => [
                "subTitulo" => "Papanicolaou",
                "subDescripcion" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "subImagen" => images()."menu/servicios/papanicolaou-web".$imgExt
            ]
        ],
        9 => [
            "id" => "Nutricion",
            "titulo" => "Nutrición",
            "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
            "imagen" => images()."menu/servicios/nutricion".$imgExt,
            "submenu" => [
                "subTitulo" => "Nutricion",
                "subDescripcion" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "subImagen" => images()."menu/servicios/nutricion-web".$imgExt
            ]
        ],
    ],
    "pacientes" => [
        0 => [
            "id" => "Resultados",
            "titulo" => "Consulta de resultados",
            "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
            "imagen" => images()."/menu/pacientes/resultados".$imgExt,
            "submenu" => [
                "subTitulo" => "",
                "subDescripcion" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "subImagen" => images()."menu/pacientes/resultados-web".$imgExt
            ]
        ],
        1 => [
            "id" => "Citas",
            "titulo" => "Haz una cita",
            "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
            "imagen" => images()."/menu/pacientes/citas".$imgExt,
            "submenu" => [
                "subTitulo" => "",
                "subDescripcion" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "subImagen" => images()."menu/pacientes/citas-web".$imgExt
            ]
        ],
        2 => [
            "id" => "Preparaciones",
            "titulo" => "Precios y preparaciones",
            "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
            "imagen" => images()."/menu/pacientes/preparaciones".$imgExt,
            "submenu" => [
                "subTitulo" => "",
                "subDescripcion" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "subImagen" => images()."menu/pacientes/preparaciones-web".$imgExt
            ]
        ],
        3 => [
            "id" => "Devoluciones",
            "titulo" => "Cambios en mi cita y devoluciones",
            "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
            "imagen" => images()."/menu/pacientes/citas".$imgExt,
            "submenu" => [
                "subTitulo" => "",
                "subDescripcion" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "subImagen" => images()."menu/pacientes/citas-web".$imgExt
            ]
        ],
        4 => [
            "id" => "Facturas",
            "titulo" => "¿Necesitas Factura?",
            "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
            "imagen" => images()."/menu/pacientes/factura".$imgExt,
            "submenu" => [
                "subTitulo" => "",
                "subDescripcion" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "subImagen" => images()."menu/pacientes/factura-web".$imgExt
            ]
        ]
    ]
];

// pre($menu['covid'][0]);
?>
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

                    <!-- INICIO MENU COVID -->
                    <li class="menu__item megamenu" style="position: inherit">
                        <button class="menu__link" id="menuCovid">
                            COVID-19 <img loading="lazy" src="<?=images()?>iconos/arrow-down.svg" class="menu__arrow" alt="">    
                        </button>

                        <div class="menu__sombra mega">
                            <div class="menu__nesting">
                                <ul>
                                    <?php foreach ($menu as $key => $servicio) {  
                                        if ($key == "covid") {
                                            foreach ($servicio as $value) {
                                    ?>
                                    <li class="menu__inside">
                                        <a href="<?=base_url()?>/blank-page" class="menu__link menu__link-inside" id="<?=$value['id']?>">
                                            <?=$value['titulo']?>
                                        </a>
                                    </li>
                                    <?php }}} ?>
                                </ul>

                                <div class="submenu">
                                    <div class="contenedor">

                                        <?php foreach ($menu as $key => $covid) {  
                                            if ($key == "covid") {
                                                foreach ($covid as $value) {
                                        ?>
                                            <!-- PCR COVID -->
                                            <div class="grid-2 d-none" name="<?=$value['id']?>">
                                                <div class="card">
                                                    <div class="columna">
                                                        <div>
                                                            <h2><?=$value['titulo']?></h2>
                                                            <p><?=$value['extracto']?></p>
                                                        </div>
                                                    </div>
    
                                                    <div class="columna">
                                                        <img src="<?=$value['submenu']['subImagen']?>" 
                                                        class="img-fluid banner" alt="Prueba PCR">
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }}} ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="menu__item menu__item-show d-lg-none">
                        <button class="menu__link main">
                            COVID-19 <img src="<?=images()?>iconos/arrow-down.svg" class="menu__arrow" alt="">
                        </button>
        
                        <div class="menu__sombra">
                            <ul class="menu__nesting">
                                <?php foreach ($menu as $key => $covid) {  
                                    if ($key == "covid") {
                                        foreach ($covid as $value) {
                                ?>
                                    <li class="menu__inside">
                                        <a href="<?=base_url()?>/blank-page" class="menu__link menu__link-inside">
                                            <div class="boxnav">
                                                <div class="text">
                                                    <strong><?=$value['titulo']?></strong>
                                                    <p>
                                                        <?=$value['extracto']?>
                                                    </p>
                                                </div>

                                                <img src="<?=$value['imagen']?>" alt="">
                                            </div>
                                        </a>
                                    </li>
                                <?php }}} ?>
                            </ul>
                        </div>
                    </li>
                    <!-- FIN MENU COVID -->
        

                    <!-- INICIO SERVICIOS -->
                    
                    <li class="menu__item megamenu" style="position: inherit">
                        <button class="menu__link" id="menuServicios">
                            Servicios <img src="<?=images()?>iconos/arrow-down.svg" class="menu__arrow" alt="">
                        </button>
        
                        <div class="menu__sombra mega">
                            <div class="menu__nesting"> 
                                <ul>
                                    <?php foreach ($menu as $key => $servicio) {  
                                        if ($key == "servicios") {
                                            foreach ($servicio as $value) {
                                    ?>
                                        <li class="menu__inside">
                                            <a href="<?=base_url()?>/blank-page" class="menu__link menu__link-inside" id="<?=$value['id']?>">
                                                <?=$value['titulo']?>
                                            </a>
                                        </li>
                                        
                                    <?php }}} ?>
                                </ul>
                                
                                <div class="submenu">
                                    <div class="contenedor">
                                        <?php foreach ($menu as $key => $servicios) {  
                                            if ($key == "servicios") {
                                                foreach ($servicios as $value) {
                                        ?>
                                            <!-- PCR COVID -->
                                            <div class="grid-2 d-none" name="<?=$value['id']?>">
                                                <div class="card">
                                                    <div class="columna">
                                                        <div>
                                                            <h2><?=$value['titulo']?></h2>
                                                            <p><?=$value['extracto']?></p>
                                                        </div>
                                                    </div>
    
                                                    <div class="columna">
                                                        <img src="<?=$value['submenu']['subImagen']?>" 
                                                        class="img-fluid banner" alt="Prueba PCR">
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }}} ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li class="menu__item menu__item-show d-lg-none">
                        <button class="menu__link main">
                            Servicios <img src="<?=images()?>iconos/arrow-down.svg" class="menu__arrow" alt="">
                        </button>
        
                        <div class="menu__sombra">
                            <ul class="menu__nesting">
                                
                                <?php foreach ($menu as $key => $covid) {  
                                    if ($key == "servicios") {
                                        foreach ($covid as $value) {
                                ?>
                                    <li class="menu__inside">
                                        <a href="<?=base_url()?>/blank-page" class="menu__link menu__link-inside">
                                            <div class="boxnav">
                                                <div class="text">
                                                    <strong><?=$value['titulo']?></strong>
                                                    <p>
                                                        <?=$value['extracto']?>
                                                    </p>
                                                </div> 
                                                <img src="<?=$value['imagen']?>" alt="">
                                            </div>
                                        </a>
                                    </li>
                                <?php }}} ?>

                                
                            </ul>
                            <!-- <div class="submenu"></div> -->
                        </div>
                    </li>

                    <!-- FIN DE SERVICIOS -->
                    

                    <li class="menu__item menu__item-show">
                        <button class="menu__link main">
                            Conócenos <img src="<?=images()?>/iconos/arrow-down.svg" class="menu__arrow" alt="">
                        </button>
        
                        <div class="menu__sombra">
                            <ul class="menu__nesting">
                                <li class="menu__inside">
                                    <a href="<?=base_url()?>/blank-page" class="menu__link menu__link-inside">¿Quiénes somos?</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="<?=base_url()?>/blank-page" class="menu__link menu__link-inside">Historia</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="<?=base_url()?>/blank-page" class="menu__link menu__link-inside">Centro Nacional de Referencia</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="<?=base_url()?>/blank-page" class="menu__link menu__link-inside">Misión, visión y valores</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="<?=base_url()?>/blank-page" class="menu__link menu__link-inside">Bolsa de Trabajo</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="<?=base_url()?>/contactanos" class="menu__link menu__link-inside">Contáctanos</a>
                                </li>
                            </ul>
                            <!-- <div class="submenu"></div> -->
                        </div>
                    </li>


                    <!-- PACIENTES -->

                    <li class="menu__item megamenu" style="position: inherit">
                        <button class="menu__link main">
                            Pacientes <img src="<?=images()?>/iconos/arrow-down.svg" class="menu__arrow" alt="">
                        </button>
        
                        <div class="menu__sombra mega">
                            <div class="menu__nesting">

                                <ul>
                                    <?php foreach ($menu as $key => $servicio) {  
                                        if ($key == "pacientes") {
                                            foreach ($servicio as $value) {
                                    ?>
                                        <li class="menu__inside">
                                            <a href="<?=base_url()?>/blank-page" class="menu__link menu__link-inside" id="<?=$value['id']?>">
                                                <?=$value['titulo']?>
                                            </a>
                                        </li>
                                        
                                    <?php }}} ?>
                                </ul>
                                
                                <div class="submenu">
                                    <div class="contenedor">
                                        <?php foreach ($menu as $key => $servicios) {  
                                            if ($key == "pacientes") {
                                                foreach ($servicios as $value) {
                                        ?>
                                            <!-- PCR COVID -->
                                            <div class="grid-2 d-none" name="<?=$value['id']?>">
                                                <div class="card">
                                                    <div class="columna">
                                                        <div>
                                                            <h2><?=$value['titulo']?></h2>
                                                            <p><?=$value['extracto']?></p>
                                                        </div>
                                                    </div>
    
                                                    <div class="columna">
                                                        <img src="<?=$value['submenu']['subImagen']?>" 
                                                        class="img-fluid banner" alt="Prueba PCR">
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }}} ?>
                                    </div>
                                </div>

                            </div>
                            
                        </div>
                    </li>

                    <li class="menu__item menu__item-show d-lg-none">
                        <button class="menu__link main">
                            Pacientes <img src="<?=images()?>iconos/arrow-down.svg" class="menu__arrow" alt="">
                        </button>
        
                        <div class="menu__sombra">
                            <ul class="menu__nesting">
                                
                                <?php foreach ($menu as $key => $covid) {  
                                    if ($key == "pacientes") {
                                        foreach ($covid as $value) {
                                ?>
                                    <li class="menu__inside">
                                        <a href="#" class="menu__link menu__link-inside">
                                            <div class="boxnav">
                                                <div class="text">
                                                    <strong><?=$value['titulo']?></strong>
                                                    <p>
                                                        <?=$value['extracto']?>
                                                    </p>
                                                </div> 
                                                <img src="<?=$value['imagen']?>" alt="">
                                            </div>
                                        </a>
                                    </li>
                                <?php }}} ?>
                                
                            </ul>
                            <!-- <div class="submenu"></div> -->
                        </div>
                    </li>

                    <!-- FIN PACIENTES -->
                    
        
                    <li class="menu__item menu__item-show">
                        <button href="javascript:void(0)" class="menu__link main">
                            Atención a empresas <img src="<?=images()?>/iconos/arrow-down.svg" class="menu__arrow" alt="">
                        </button>
        
                        <div class="menu__sombra">
                            <ul class="menu__nesting">
                                <li class="menu__inside">
                                    <a href="<?=base_url()?>/blank-page" class="menu__link menu__link-inside">Ver paquetes</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="<?=base_url()?>/blank-page" class="menu__link menu__link-inside">Check ups</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="<?=base_url()?>/blank-page" class="menu__link menu__link-inside">Perfiles de admisión</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="<?=base_url()?>/blank-page" class="menu__link menu__link-inside">Contactar con un agente</a>
                                </li>
                            </ul>
                            <!-- <div class="submenu"></div> -->
                        </div>
                    </li>
                    

                    <li class="menu__item">
                        <a href="<?=base_url()?>/blank-page" class="menu__link">
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
                    <button id="btn-buscar">
                        <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
                        <img src="<?=images()?>/iconos/search.svg" alt="icono buscar" style="width: 35px;height: 35px;">
                    </button>
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