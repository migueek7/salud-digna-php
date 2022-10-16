<?=$this->layout('layouts/layout'); ?>

<section>

    <div class="contenedor mt-2">
        <div class="grid-2 grid-2__reverse">

            <div class="columna">
                <!-- <img src="https://salud-digna.com/consulta-resultados/banner-registro-nicaragua.webp" class="imagen shadow" alt="banner de registro" loading="lazy"> -->
                <img src="<?=images()?>/banner-registro-nicaragua.webp" class="imagen shadow" alt="banner de registro" loading="lazy">
            </div>

            <div class="columna">

                <form id="form-registro" class="card card__size-lg">

                    <div class="mb-2">
                        <h2 class="title font-size-lg mt-0">¡Obtén más beneficios con tu cuenta!</h2>
                        <p class="font-size-md">
                            Registra tus datos y disfruta de las ventajas de ser un Paciente Salud Digna.
                        </p>
                    </div>

                    <div class="grid-2 grid-2__form">

                        <!-- Nombre -->
                        <div class="columna mb-1"> 
                            <div class="form">
                                <div class="form__div">
                                    <input type="text" id="Nombre" name="Nombre" class="form__input" placeholder=" ">
                                    <label for="Nombre" class="form__label">Nombre(s)</label>
                                </div>
                                <div class="form__error"></div>
                            </div>
                        </div>

                        <!-- Apellido Paterno -->
                        <div class="columna mb-1">
                            <div class="form">
                                <div class="form__div">
                                    <input type="text" id="ApellidoP" name="ApellidoP" class="form__input" placeholder=" ">
                                    <label for="ApellidoP" class="form__label">Apellido paterno</label>
                                </div>
                                <div class="form__error"></div>
                            </div>
                        </div>


                    </div>
                    
                    <div class="grid-2 grid-2__form mt-2 mt-sm-1">

                        <!-- Apellido Materno -->
                        <div class="columna mb-1">
                            <div class="form">
                                <div class="form__div">
                                    <input type="text" id="ApellidoM" name="ApellidoM" class="form__input" placeholder=" ">
                                    <label for="ApellidoM" class="form__label">Apellido materno</label>
                                </div>
                                <div class="form__error"></div>
                            </div>
                        </div>

                        <!-- Input Radio -->
                        <div class="columna mb-1 mt-sm-2">
                            <div class="w-100" style="position: relative;">
                                <label for="Genero" style="position: absolute;top: -20px;">Género</label>
                                <div class="radio-toolbar">
                                    <input type="radio" id="option-1" name="Genero" value="1">
                                    <label for="option-1">
                                        <i class="icon-woman"></i>
                                        <span>Mujer</span>
                                    </label>
                            
                                    <input type="radio" id="option-2" name="Genero" value="2">
                                    <label for="option-2">
                                        <i class="icon-man"></i>
                                        <span>Hombre</span>
                                    </label>
                                </div>
                                
                            </div>
                            <div class="form__error"></div>
                        </div>

                    </div>
                    
                    <div class="grid-2 grid-2__form">

                        <!-- Fecha de Nacimiento -->
                        <div class="columna mb-1">
                            <div class="form ">
                                <div class="form__div">                                            
                                    <input type="date" id="FechaN" name="FechaN" class="form__input" 
                                    max="<?=date("Y-m-d"); ?>">
                                    <label for="FechaN" class="form__label">Fecha de nacimiento</label>
                                </div>
                                <div class="form__error"></div>
                            </div>
                        </div>


                        <!-- Telefono -->
                        <div class="columna mb-1">
                            <div class="form">
                                <div class="form__div">
                                    <input type="tel" id="Telefono" name="Telefono" class="form__input" 
                                    maxlength="14"
                                    onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" 
                                    placeholder=" ">
                                    <label for="Telefono" class="form__label">Teléfono</label>
                                </div>
                                <div class="form__error"></div>
                            </div>
                        </div>

                    </div>


                    <div class="grid-1 grid-2__form ">

                        <!-- Correo Electronico -->
                        <div class="columna mb-1">
                            <div class="form">
                                <div class="form__div">
                                    <input type="text" id="Correo" name="Correo" class="form__input" placeholder=" ">
                                    <label for="Correo" class="form__label">Ingresa tu correo electrónico</label>
                                </div>
                                <div class="form__error"></div>
                            </div>
                        </div>
                    </div>

                

                    <div class="grid-2 grid-2__form mt-1">

                        <!-- Contraseña -->
                        <div class="columna mb-xl-1">
                            <div class="form">
                                <div class="form__div">
                                    <input type="password" id="Contrasena" name="Contrasena" class="form__input" placeholder=" ">
                                    <label for="Contrasena"  class="form__label">Contraseña</label>
                                    <div class="form__btn-eye"></div>
                                </div>
                                <div class="form__error"></div>
                            </div>
                        </div>

                        <!-- Confirmar Contraseña -->
                        <div class="columna">
                            <div class="form">
                                <div class="form__div">
                                    <input type="password" id="Contrasena2" name="Contrasena2" class="form__input" placeholder=" ">
                                    <label for="Contrasena2" class="form__label">Confirmar contraseña</label>
                                    <div class="form__btn-eye"></div>
                                </div>
                                <div class="form__error"></div>
                            </div>
                        </div>
                        
                    </div>


                    <div class="form__mensaje mt-2"></div>

                
                    <div class="text-center mt-2">
                        <button type="submit" id="btn-registro" class="btn btn-one btn__disabled mx-auto">
                            Registrar <span class="loader loader__btn"></span>
                        </button>
                    </div>
                
                    
                    <hr class="hr my-2">
                    
                    <div class="text-center">
                        ¿Ya has visitado nuestras clínicas?<br>
                        Puede ingresar con el usuario y contraseña de tu ticket

                        <div class="mt-1">
                            <a href="<?=$_ENV['BASE_URL']?>/iniciar-sesion" class="btn btn-one-outline mx-auto">
                                Iniciar sesión
                            </a>
                        </div>
                    </div>


                </form>

            </div>
        </div>
    </div>

    <!-- <div style="height: 1000px; width:100%"></div> -->

</section>