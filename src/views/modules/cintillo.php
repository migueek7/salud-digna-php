<div class="cintillo">
    <input type="hidden" id="Nombre-Sesion" name="Nombre-Sesion" value="">
    <div class="contenedor py-0 h-100">
        <div class="" style="display:flex; justify-content: space-between; color: #fff; height: 100%;">
            <div style="display: flex; align-items: center;">
                Tu Clínica Salud Digna
            </div>
            <!-- <div>
                <input type="search" name="" id="buscar">
            </div> -->
            <div class="cintillo__enlaces">
                <?php if (empty($_SESSION['login'])) { ?>

                    
                    <a href="<?=$_ENV['BASE_URL']?>/iniciar-sesion" class="load">
                        <i class="icon-user icon-lg pr-1 pr-md-0"></i> 
                        <span class="d-md-none">Iniciar sesión</span> 
                    </a>
                    <span class="mx-1 element"></span> 
                    <a href="<?=$_ENV['BASE_URL']?>/registro" class="load">Regístrate</a>

                <?php }else{ ?> 
                
                    
                    <div class="action">
                        <div class="profile" onclick="menuToggle();">
                            <!-- <img src="https://salud-digna.org/wp-content/themes/SaludDigna/Consulta-Resultados/images/avatar12.png" alt=""> -->
                            <i class="icon-user icon-lg pr-1"></i> 
                            <span><?=$_SESSION['useData']['Nombre'].' '.$_SESSION['useData']['ApellidoP'].' '?></span>
                        </div>

                        <div class="menu__action">
                            <h3 class="text-center">
                                <img src="https://salud-digna.org/wp-content/themes/SaludDigna/Consulta-Resultados/images/avatar12.png" width="50" alt="">
                                <div>
                                    <?=$_SESSION['useData']['Nombre'].' '.$_SESSION['useData']['ApellidoP'].' '.$_SESSION['useData']['ApellidoM']?>
                                </div>
                            </h3>
                            <ul style="margin: 0;padding: 0;">
                                <li>
                                    <a href="<?=$_ENV['BASE_URL']?>/perfil" class="load">Mi perfil</a>
                                </li>
                                <li>
                                    <a href="<?=$_ENV['BASE_URL']?>/salir" class="load">Cerrar sesión</a>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <script>
                        function menuToggle(){
                            const toggleMenu = document.querySelector('.menu__action');
                            toggleMenu.classList.toggle('active');

                            if (toggleMenu.classList.contains('active')) {
                                document.querySelector('.fondo-oscuro').classList.add('fondo-oscuro__activo');
                            }else{
                                document.querySelector('.fondo-oscuro').classList.remove('fondo-oscuro__activo');
                            }
                        }
                    </script>
                    

                <?php } ?>
            </div>
        </div>
    </div>    
</div>