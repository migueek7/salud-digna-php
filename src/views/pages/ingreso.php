<?=$this->layout('layouts/layout'); ?>


<section>

    <div class="contenedor mt-2">
        <div class="grid-2 grid-2__reverse">

            <div class="columna">
                <img src="<?=images()?>/ingreso.webp" class="imagen shadow" alt="banner de registro" loading="lazy">
            </div>

            <div class="columna">

                <form id="form-ingreso" class="card card__size-lg">

                    <div class="mb-2">
                        <h2 class="title title__size-medium mt-0">
                            Cuento con mi perfil de prevención* 
                        </h2>
                        <p class="text__size-medium">
                            ¿Ya has visitado alguna de nuestras clínicas?<br>
                            Puedes acceder con el usuario y contraseña de tu ticket.
                            <a href="javascript:void(0)" class="link-localizalo text-primary">
                                ¡Localizalo!
                            </a>
                        </p>
                    </div>


                    <div class="d-block d-lg-flex d-md-block">

                        
                        <div class="columna pb-2 mr-lg-1 mx-md-0">
                            <div class="form">
                                <div class="form__div">
                                    <span class="icon-user form__icon-left"></span>
                                    <input type="text" id="Usuario" name="Usuario" class="form__input form__input-icon" placeholder=" ">
                                    <label for="Usuario" class="form__label form__label-icon">Usuario de ticket o correo electrónico</label>
                                </div>
                                <div class="form__error"></div>
                            </div>
                        </div>

                       
                        <div class="columna ml-lg-1 mx-md-0">
                            <div class="form">
                                <div class="form__div">
                                    <span class="icon-lock form__icon-left"></span>
                                    <input type="password" id="Password" name="Password" class="form__input form__input-icon" placeholder=" ">
                                    <label for="Password" class="form__label form__label-icon">Contraseña</label>
                                    <div class="form__btn-eye"></div>
                                </div>
                                <div class="form__error"></div>
                            </div>
                        </div>
                        
                    </div>

                    <!-- INPUT FECHA OCULTO -->
                    <div class="inputFecha-oculto">
                        <h4 class="m-0 mt-2 font-size-md">¡Estás a un solo paso! Confirma tu identidad con tu fecha de nacimiento </h4>
                        <div class="columna ml-lg-1 mx-md-0 mt-2 ">
                            <div class="form ">
                                <div class="form__div">                                            
                                    <input type="date" id="FechaN" name="FechaN" class="form__input" 
                                    max="<?=date("Y-m-d"); ?>">
                                    <label for="FechaN" class="form__label">Fecha de nacimiento</label>
                                </div>
                                <div class="form__error"></div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="columna pt-1">
                        <div>
                            <div>
                                <a href="<?=$_ENV["BASE_URL"]?>/restablecer-contrasena" class="text-primary">Recuperar contraseña</a>
                            </div>

                            <div class="mt-1">
                                <input type="checkbox" name="my-checkbox" id="opt-in" data-parsley-multiple="my-checkbox" data-parsley-id="19">
                                <label for="opt-in" style="margin: 0px 7px;text-decoration: none;font-weight: 600;">Recuérdame</label>
                            </div>
                        </div>
                    </div>


                    <div class="form__mensaje mt-1"></div>

                
                    <div class="text-center mt-2">
                        <button type="submit" id="btn-ingreso" class="btn btn-one btn__disabled mx-auto">
                            Iniciar sesión <span class="loader loader__btn"></span>
                        </button>
                    </div>
                
                    
                    <hr class="hr my-2">
                    
                    <div class="text-center text__size-medium">
                        <strong>¿Aún no tienes una cuenta?</strong><br>
                        Registra tus datos. 

                        <div class="mt-1">
                            <a href="<?=$_ENV['BASE_URL']?>/registro" class="btn btn-one-outline mx-auto">
                                Registrar
                            </a>
                        </div>
                    </div>


                </form>

            </div>
        </div>
    </div>

    <!-- <div style="height: 1000px; width:100%"></div> -->

</section>