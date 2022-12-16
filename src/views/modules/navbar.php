<?php
$imgExt = ".webp"; 
$navMain = [
    [
        "id" => "Conocenos", 
        "titulo" => "Conócenos",
        "megamenu" => false,
        "items" => [
            [
                "titulo" => "¿Quiénes somos?",
                "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "imagen" => images()."/menu/pacientes/resultados".$imgExt,
                "ruta" => base_url()."/conocenos"
            ],
            [
                "titulo" => "Historia",
                "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "imagen" => images()."/menu/pacientes/resultados".$imgExt,
                "ruta" => base_url()."/blank-page"
            ],
            [
                "titulo" => "Centro Nacional de Referencia",
                "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "imagen" => images()."/menu/pacientes/resultados".$imgExt,
                "ruta" => base_url()."/blank-page"
            ],
            [
                "titulo" => "Misión, visión y valores",
                "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "imagen" => images()."/menu/pacientes/resultados".$imgExt,
                "ruta" => base_url()."/blank-page"
            ],
            [
                "titulo" => "Bolsa de Trabajo",
                "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "imagen" => images()."/menu/pacientes/resultados".$imgExt,
                "ruta" => base_url()."/blank-page"
            ],
            [
                "titulo" => "Contáctanos",
                "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "imagen" => images()."/menu/pacientes/resultados".$imgExt,
                "ruta" => "contactanos"
            ]
        ],
    ],
    [
        "id" => "Servicios", 
        "titulo" => "Servicios",
        "megamenu" => true,
        "items" => [
            [
                "id" => "Laboratorio",
                "titulo" => "Laboratorio",
                "extracto" => "
                    Contamos con más de 1000 pruebas, de las cuales, la mayoría se procesan en cada uno de nuestros laboratorios.
                ",
                "imagen" => images()."/menu/servicios/laboratorio".$imgExt,
                "ruta" => base_url()."/blank-page",
                "submenu" => [
                    "titulo" => "Laboratorio",
                    "extracto" => "
                        <p>
                            Contamos con más de 1000 pruebas, de las cuales, la mayoría se procesan en cada uno de nuestros laboratorios.
                        </p>
                        <p>
                         Gracias al Centro Nacional de Referencia de Salud Digna es posible analizar una gran cantidad de muestras biológicas y cultivos diariamente, ya que todo se realiza con equipos automatizados que permiten la reducción en los tiempos de espera.
                        </p>
                        <br>
                        <p class='small'>
                         Consulte a su médico ya que es el único facultado para indicar el tipo de estudio a realizar en cada paciente de acuerdo a su historia clínica e interpretar los resultados.
                        </p>
                    ",
                    "subImagen" => images()."menu/servicios/laboratorio-web".$imgExt
                ]
            ],
            [
                "id" => "CovidPCR",
                "titulo" => "COVID PCR",
                "extracto" => "Se realiza en pacientes con síntomas o sospechas de contagio, Se realiza por técnica PCR.",
                "imagen" => images()."/menu/servicios/pcr".$imgExt,
                "ruta" => base_url()."/blank-page",
                "submenu" => [
                    "titulo" => "COVID PCR",
                    "extracto" => "
                        <p>
                        Se realiza en pacientes con síntomas o sospechas de contagio. <br>
                        Se realiza por técnica PCR. <br>
                        Se otorga un diagnóstico preciso de la enfermedad. <br>
                        El tiempo de entrega es de 24 a 72 hrs. <br>
                        </p>
                        <br>
                        <p class='small'>
                            Consulte a su médico ya que es el único facultado para indicar el tipo de estudio a realizar en cada paciente de acuerdo a su historia clínica e interpretar los resultados.
                        </p>
                    ",
                    "subImagen" => images()."menu/servicios/pcr-web".$imgExt
                ]
            ],
            [
                "id" => "CovidAntigeno",
                "titulo" => "COVID Antígeno",
                "extracto" => "Se realiza en pacientes que buscan confirmar si sus síntomas son sinónimo de contagio.",
                "imagen" => images()."/menu/servicios/antigenos".$imgExt,
                "ruta" => base_url()."/blank-page",
                "submenu" => [
                    "titulo" => "COVID Antígeno",
                    "extracto" => "
                        <p>
                            Se realiza en pacientes que buscan confirmar si sus síntomas son sinónimo de contagio. <br>
                            Se realiza una detección de antígenos del virus. <br>
                            Se recomienda realizarla dentro de los primeros 7 días iniciando los síntomas. <br>
                            El tiempo de entrega es de 2 hrs y los resultados se envían automáticamente por WhatsApp. 
                        </p>
                        <br>
                        <p class='small'>
                            Consulte a su médico ya que es el único facultado para indicar el tipo de estudio a realizar en cada paciente de acuerdo a su historia clínica e interpretar los resultados.
                        </p>
                    ",
                    "subImagen" => images()."menu/servicios/antigenos-web".$imgExt
                ]
            ],
            [
                "id" => "Ultrasonido",
                "titulo" => "Ultrasonido",
                "extracto" => "Utilizando un dispositivo llamado sonda se envían ondas de sonido que son recogidas por ella misma.",
                "imagen" => images()."menu/servicios/ultrasonido".$imgExt,
                "ruta" => base_url()."/blank-page",
                "submenu" => [
                    "titulo" => "Ultrasonido",
                    "extracto" => "
                        <p>
                            Utilizando un dispositivo llamado sonda se envían ondas de sonido que son recogidas por ella misma y son interpretadas por una computadora para generar una imagen en tiempo real del interior de tu cuerpo. 
                            <br>
                            Las imágenes son utilizadas por los médicos para diagnosticar condiciones en las diferentes partes del cuerpo. 
                        </p>
                        <strong>Ultrasonido obstétrico </strong>
                        <p>
                            Este tipo de estudio sirve a las futuras mamás para observar el estado de salud de su bebé. Si además optan por la opción en 4D, ¡podrán apreciar a mayor detalle sus rasgos!
                        </p>
                        <br>
                        <p class='small'>
                            Consulte a su médico ya que es el único facultado para indicar el tipo de estudio a realizar en cada paciente de acuerdo a su historia clínica e interpretar los resultados.
                        </p>
                    ",
                    "subImagen" => images()."menu/servicios/ultrasonido-web".$imgExt
                ]
            ],
            [
                "id" => "Lentes",
                "titulo" => "Lentes",
                "extracto" => "Los errores de refracción son la condición más común en la visión de las personas.",
                "imagen" => images()."menu/servicios/lentes".$imgExt,
                "ruta" => base_url()."/blank-page",
                "submenu" => [
                    "titulo" => "Lentes",
                    "extracto" => "
                        <p>
                        Los errores de refracción son la condición más común en la visión de las personas. Pueden causar dificultad para ver de lejos, de cerca o para enfocar objetos.
                        <p>
                        <br>
                        <p class='small'>
                            Consulte a su médico ya que es el único facultado para indicar el tipo de estudio a realizar en cada paciente de acuerdo a su historia clínica e interpretar los resultados.
                        </p>
                    ",
                    "subImagen" => images()."menu/servicios/lentes-web".$imgExt
                ]
            ],
            [
                "id" => "Electrocardiograma",
                "titulo" => "Electrocardiograma",
                "extracto" => "El electrocardiograma es un proceso seguro, sin representar riesgo para el paciente.",
                "imagen" => images()."menu/servicios/electrocardiograma".$imgExt,
                "ruta" => base_url()."/blank-page",
                "submenu" => [
                    "titulo" => "Electrocardiograma",
                    "extracto" => "
                        <p>
                        El electrocardiograma es un proceso seguro, sin representar riesgo para el paciente. Para más información comunícate con nosotros a través del chat.
                        </p>
                    ",
                    "subImagen" => images()."menu/servicios/electrocardiograma-web".$imgExt
                ]
            ],
            [
                "id" => "Tomografia",
                "titulo" => "Tomografía",
                "extracto" => "La tomografía computarizada es un procedimiento para diagnóstico con imágenes, el cual es indoloro.",
                "imagen" => images()."menu/servicios/tomografia".$imgExt,
                "ruta" => base_url()."/blank-page",
                "submenu" => [
                    "titulo" => "Tomografía",
                    "extracto" => "
                        <p>
                            La tomografía computarizada es un procedimiento para diagnóstico con imágenes, el cual es indoloro, representan reconstrucciones computarizadas de los tejidos y los órganos del cuerpo. 
                        </p>
                        <p>
                            <strong>Algunos estudios con los que contamos son: </strong><br>
                            Tomografía de abdomen <br>
                            Tomografía de cabeza <br>
                            Tomografía de extremidades 
                        </p>
                        <br>
                        <p class='small'>
                            Consulte a su médico ya que es el único facultado para indicar el tipo de estudio a realizar en cada paciente de acuerdo a su historia clínica e interpretar los resultados.
                        </p>
                    ",
                    "subImagen" => images()."menu/servicios/tomografia-web".$imgExt
                ]
            ],
            [
                "id" => "RayosX",
                "titulo" => "Rayos X",
                "extracto" => "Contamos con equipos de rayos x de alta resolución, con el objeto de auxiliar a los médicos en la integración.",
                "imagen" => images()."menu/servicios/rayos-x".$imgExt,
                "ruta" => base_url()."/blank-page",
                "submenu" => [
                    "titulo" => "Rayos X",
                    "extracto" => "
                        <p>
                            Contamos con equipos de rayos x de alta resolución, con el objeto de auxiliar a los médicos en la integración de un diagnóstico, mediante imágenes de calidad.<br> 
                            Nuestros estudios especializados son interpretados por profesionales de la salud especialistas en la materia, quienes cuentan con certificación expedida por una institución de enseñanza superior o de salud reconocida oficialmente. 
                        </p>
                        <p>
                            <strong>Algunos estudios con los que contamos son: </strong><br>
                            Rayos X de extremidades <br>
                            Rayos X de abdomen <br>
                            Rayos X de cabeza 
                        </p>
                        <br>
                        <p class='small'>
                            Consulte a su médico ya que es el único facultado para indicar el tipo de estudio a realizar en cada paciente de acuerdo a su historia clínica e interpretar los resultados.
                        </p>
                    ",
                    "subImagen" => images()."menu/servicios/rayos-x-web".$imgExt
                ]
            ],
            [
                "id" => "Desintrometria",
                "titulo" => "Densitometría",
                "extracto" => "Se trata de una prueba común, rápida, sencilla e indolora, por lo que puede ser realizado sin comprometer la.",
                "imagen" => images()."menu/servicios/densitometria".$imgExt,
                "ruta" => base_url()."/blank-page",
                "submenu" => [
                    "titulo" => "Densitometría",
                    "extracto" => "
                        <p>
                        Se trata de una prueba común, rápida, sencilla e indolora, por lo que puede ser realizado sin comprometer la comodidad del paciente. 
                        </p>
                        <br>
                        <p class='small'>
                            Consulte a su médico ya que es el único facultado para indicar el tipo de estudio a realizar en cada paciente de acuerdo a su historia clínica e interpretar los resultados.
                        </p>
                    ",
                    "subImagen" => images()."menu/servicios/densitometria-web".$imgExt
                ]
            ],
            [
                "id" => "Resonancia",
                "titulo" => "Resonancia Magnética",
                "extracto" => "Es un procedimiento no invasivo e indoloro que se realiza en Salud Digna. Algunos estudios con los que.",
                "imagen" => images()."menu/servicios/resonancia".$imgExt,
                "ruta" => base_url()."/blank-page",
                "submenu" => [
                    "titulo" => "Resonancia Magnética",
                    "extracto" => "
                        <p>
                        Es un procedimiento no invasivo e indoloro que se realiza en Salud Digna. 
                        </p>
                        <p>
                            <strong>Algunos estudios con los que contamos son:</strong> 
                            Resonancia Magnética de cabeza <br> 
                            Resonancia Magnética de tórax <br>
                            Resonancia Magnética de columna
                        </p>
                        <br>
                        <p class='small'>
                            Consulte a su médico ya que es el único facultado para indicar el tipo de estudio a realizar en cada paciente de acuerdo a su historia clínica e interpretar los resultados.
                        </p>
                    ",
                    "subImagen" => images()."menu/servicios/resonancia-web".$imgExt
                ]
            ],
            [
                "id" => "Papanicolaou",
                "titulo" => "Papanicolaou",
                "extracto" => "Como medida para la pronta detección de infecciones por el virus del papiloma humano (VPH) que es la principal.",
                "imagen" => images()."menu/servicios/papanicolaou".$imgExt,
                "ruta" => base_url()."/blank-page",
                "submenu" => [
                    "titulo" => "Papanicolaou",
                    "extracto" => "
                        <p>
                            Como medida para la pronta detección de infecciones por el virus del papiloma humano (VPH) que es la principal causa de todos los cánceres de cuello uterino, es recomendado realizarse la prueba del Papanicolaou. 
                        </p>
                        <p>
                            Consiste en realizar una recolección de células en el cérvix. La muestra es enviada a nuestro laboratorio donde es examinada por un médico patólogo, con el propósito de detectar alguna anormalidad en su composición. Consulte a su médico ya que es el único facultado para indicar el tipo de estudio a realizar en cada paciente de acuerdo a su historia clínica e interpretar los resultados.
                        </p>
                        <br>
                        <p class='small'>
                            Consulte a su médico ya que es el único facultado para indicar el tipo de estudio a realizar en cada paciente de acuerdo a su historia clínica e interpretar los resultados.
                        </p>
                    ",
                    "subImagen" => images()."menu/servicios/papanicolaou-web".$imgExt
                ]
            ],
            [
                "id" => "Mastografia",
                "titulo" => "Mastografía",
                "extracto" => "Los estudios de gabinete, utilizados para la detección y control de los padecimientos mamarios, tienen indicaciones y.",
                "imagen" => images()."menu/servicios/mastografia".$imgExt,
                "ruta" => base_url()."/blank-page",
                "submenu" => [
                    "titulo" => "Mastografía",
                    "extracto" => "
                        <p>
                            Los estudios de gabinete, utilizados para la detección y control de los padecimientos mamarios, tienen indicaciones y características especifícas, es por ello que deben ser solicitados por el médico de acuerdo con una valoración y previo consentimiento de la paciente. 
                        </p> 
                        <p>
                            Para más información comunícate con nosotros a tráves del chat. Consulte a su médico ya que es el único facultado para indicar el tipo de estudio a realizar en cada paciente de acuerdo a su historia clínica e interpretar los resultados.
                        </p>
                        <br>
                        <p class='small'>
                            Consulte a su médico ya que es el único facultado para indicar el tipo de estudio a realizar en cada paciente de acuerdo a su historia clínica e interpretar los resultados.
                        </p>
                    ",
                    "subImagen" => images()."menu/servicios/mastografia-web".$imgExt
                ]
            ],
            [
                "id" => "Nutricion",
                "titulo" => "Nutrición",
                "extracto" => "Los excesos pueden traer riesgos a nuestro estilo de vida y con ello, caer en enfermedades cardiovasculares.",
                "imagen" => images()."menu/servicios/nutricion".$imgExt,
                "ruta" => base_url()."/blank-page",
                "submenu" => [
                    "titulo" => "Nutrición",
                    "extracto" => "
                        <p>
                            Los excesos pueden traer riesgos a nuestro estilo de vida y con ello, caer en enfermedades cardiovasculares y diabetes. Para ello, Salud Digna ofrece servicios de nutrición, mediante nuestro programa PreveAcción, donde recibirás asesoría nutricional, para mejorar tus hábitos alimenticios; además recibirás estudios de laboratorio para verificar los contenidos de glucosa, triglicéridos y colesterol. 
                        </p>
                        <p>
                            Con estos resultados te daremos seguimiento para prevenir enfermedades crónico-degenerativas como diabetes, hipertensión, obesidad y dislipidemias. 
                        </p>
                        <br>
                        <p class='small'>
                            Consulte a su médico ya que es el único facultado para indicar el tipo de estudio a realizar en cada paciente de acuerdo a su historia clínica e interpretar los resultados.
                        </p>
                    ",
                    "subImagen" => images()."menu/servicios/nutricion-web".$imgExt
                ]
            ],
        ]
    ],
    [
        "id" => "Pacientes", 
        "titulo" => "Pacientes",
        "megamenu" => true,
        "items" => [
            [
                "id" => "Resultados",
                "titulo" => "Consulta de resultados",
                "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "imagen" => images()."/menu/pacientes/resultados".$imgExt,
                "ruta" => base_url()."/blank-page",
                "submenu" => [
                    "titulo" => "Consulta de resultados",
                    "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                    "subImagen" => images()."menu/pacientes/resultados-web".$imgExt
                ]
            ],
            [
                "id" => "Citas",
                "titulo" => "Haz una cita",
                "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "imagen" => images()."/menu/pacientes/citas".$imgExt,
                "ruta" => base_url()."/blank-page",
                "submenu" => [
                    "titulo" => "Haz una cita",
                    "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                    "subImagen" => images()."menu/pacientes/citas-web".$imgExt
                ]
            ],
            [
                "id" => "Preparaciones",
                "titulo" => "Precios y preparaciones",
                "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "imagen" => images()."/menu/pacientes/preparaciones".$imgExt,
                "ruta" => base_url()."/blank-page",
                "submenu" => [
                    "titulo" => "Precios y preparaciones",
                    "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                    "subImagen" => images()."menu/pacientes/preparaciones-web".$imgExt
                ]
            ],
            [
                "id" => "Devoluciones",
                "titulo" => "Cambios en mi cita y devoluciones",
                "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "imagen" => images()."/menu/pacientes/citas".$imgExt,
                "ruta" => base_url()."/blank-page",
                "submenu" => [
                    "titulo" => "Cambios en mi cita y devoluciones",
                    "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                    "subImagen" => images()."menu/pacientes/citas-web".$imgExt
                ]
            ],
            [
                "id" => "Facturas",
                "titulo" => "¿Necesitas Factura?",
                "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "imagen" => images()."/menu/pacientes/factura".$imgExt,
                "ruta" => base_url()."/blank-page",
                "submenu" => [
                    "titulo" => "¿Necesitas Factura?",
                    "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                    "subImagen" => images()."menu/pacientes/factura-web".$imgExt
                ]
            ]
        ]
    ],
    [
        "id" => "Atencion", 
        "titulo" => "Atención a empresas",
        "megamenu" => false,
        "items" => [
            [
                "titulo" => "Ver paquetes",
                "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "imagen" => images()."/menu/pacientes/resultados".$imgExt,
                "ruta" => base_url()."/blank-page",
            ],
            [
                "titulo" => "Check ups",
                "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "imagen" => images()."/menu/pacientes/resultados".$imgExt,
                "ruta" => base_url()."/blank-page",
            ],
            [
                "titulo" => "Perfiles de admisión",
                "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "imagen" => images()."/menu/pacientes/resultados".$imgExt,
                "ruta" => base_url()."/blank-page",
            ],
            [
                "titulo" => "Contactar con un agente",
                "extracto" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, deserunt doloribus.",
                "imagen" => images()."/menu/pacientes/resultados".$imgExt,
                "ruta" => base_url()."/blank-page",
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


                    <?php
                        foreach ($navMain as $key => $navLink) :
                    ?>
                            <li class="menu__item <?=$navLink["megamenu"] ? 'mega megamenu' : 'menu__item-show'?>" style="position: inherit">

                                <!-- NAVLINK -->
                                <button class="menu__link" id="menu<?=$navLink["id"]?>">
                                    <?=$navLink["titulo"]?> 
                                    <img loading="lazy" src="<?=images()?>iconos/arrow-down.svg" class="menu__arrow" alt="">    
                                </button>

                                <!-- MEGAMENU -->
                                <div class="menu__sombra ">
                                    <div class="menu__nesting"> 

                                        <div>
                                            <div class="<?=$navLink["megamenu"] ? 'scroll' : null?>">
                                                <ul class="p-0">
                                                    <?php
                                                        foreach ($navLink["items"] as $key => $item) :
                                                    ?>
                                                        <li class="menu__inside">
                                                            <a href="<?=$item['ruta']?>" 
                                                            class="menu__link menu__link-inside" 
                                                            id="<?=isset($item['id']) ? $item['id'] : null?>">

                                                                <div class="desktop">
                                                                    <?=$item['titulo']?>
                                                                </div>

                                                                <div class="movil">
                                                                    <div class="boxnav">
                                                                        <div class="text">
                                                                            <strong><?=$item['titulo']?></strong>
                                                                            <p><?=$item['extracto']?></p>
                                                                        </div>
                                                                        <img src="<?=$item['imagen']?>" alt="">
                                                                    </div>
                                                                </div>          
                                                                
                                                                
                                                            </a>
                                                        </li>
                                                    <?php
                                                        endforeach
                                                    ?>
                                                </ul>

                                                <div class="botonScroll" style="display: none;">
                                                    <div>
                                                        <button class="btnDownMega">
                                                            <i class="icon-arrow-down"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                            
    
                                            <!-- SUBMENU -->
                                            <div class="submenu">
                                                <div class="content">
                                                    <?php
                                                        foreach ($navLink["items"] as $key => $item) :
                                                    ?>     
                                                        <div class="d-none" name="<?=isset($item['id']) ? $item['id'] : null?>">
                                                            <div class="box">
                                                                <div class="columna" style="width: 150%;">
                                                                    <div>
                                                                        <div>
                                                                            <h2 class="title">
                                                                                <?=isset($item['submenu']['titulo']) ? $item['submenu']['titulo'] : null?>
                                                                            </h2>
                                                                            <p>
                                                                                <?=isset($item['submenu']['extracto']) ? $item['submenu']['extracto'] : null?>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                
                                                                <div class="columna">
                                                                    <img src="<?=isset($item['submenu']['subImagen']) ? $item['submenu']['subImagen'] : null?>" 
                                                                    class="img-fluid banner" alt="Prueba PCR">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
                                                        endforeach
                                                    ?>
                                                </div>
                                            </div>
                                        </div>

                                       

                                    </div>
                                </div>

                            </li>
                    <?php
                        endforeach;
                    ?>


                    
                     <li class="menu__item">
                        <a href="<?=base_url()?>/blank-page" class="menu__link">
                            Ubica tu clínica
                        </a>
                    </li>
        

                  
                    <!-- <li class="menu__item menu__item-show">
                        <button class="menu__link main">
                            Conócenos <img src="<images()?>/iconos/arrow-down.svg" class="menu__arrow" alt="">
                        </button>
        
                        <div class="menu__sombra">
                            <ul class="menu__nesting">
                                <li class="menu__inside">
                                    <a href="<base_url()?>/blank-page" class="menu__link menu__link-inside">¿Quiénes somos?</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="<base_url()?>/blank-page" class="menu__link menu__link-inside">Historia</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="<base_url()?>/blank-page" class="menu__link menu__link-inside">Centro Nacional de Referencia</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="<base_url()?>/blank-page" class="menu__link menu__link-inside">Misión, visión y valores</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="<base_url()?>/blank-page" class="menu__link menu__link-inside">Bolsa de Trabajo</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="<base_url()?>/contactanos" class="menu__link menu__link-inside">Contáctanos</a>
                                </li>
                            </ul>
                        </div>
                    </li> -->

        
                    <!-- <li class="menu__item menu__item-show">
                        <button href="javascript:void(0)" class="menu__link main">
                            Atención a empresas <img src="<images()?>/iconos/arrow-down.svg" class="menu__arrow" alt="">
                        </button>
        
                        <div class="menu__sombra">
                            <ul class="menu__nesting">
                                <li class="menu__inside">
                                    <a href="<base_url()?>/blank-page" class="menu__link menu__link-inside">Ver paquetes</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="<base_url()?>/blank-page" class="menu__link menu__link-inside">Check ups</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="<base_url()?>/blank-page" class="menu__link menu__link-inside">Perfiles de admisión</a>
                                </li>
                                <li class="menu__inside">
                                    <a href="<base_url()?>/blank-page" class="menu__link menu__link-inside">Contactar con un agente</a>
                                </li>
                            </ul>
                        </div>
                    </li> -->
                    

                    <!-- <li class="menu__item">
                        <a href="<base_url()?>/blank-page" class="menu__link">
                            Ubica tu clínica
                        </a>
                    </li> -->


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
        
        
                    <!-- <div style="display:flex; align-items: center;font-size: 2rem;margin-left: 1.2rem;">
                        <button id="btn-buscar">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <img src="<images()?>/iconos/search.svg" alt="icono buscar" style="width: 35px;height: 35px;">
                        </button>
                    </div> -->
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