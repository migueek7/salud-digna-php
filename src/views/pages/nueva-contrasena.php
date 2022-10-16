<?=$this->layout('layouts/layout'); ?>

<section>

    <div class="contenedor contenedor_sm mt-2">
        <div class="grid-2">


            <div class="columna">
                <form id="form-enviar" class="card card__size-lg">

                    <div class="mb-2">
                        <h2 class="title font-size-lg mt-0">
                            Cambiar contraseña
                        </h2>
                        <p class="font-size-md">
                            Ingresa la contraseña deseada.
                        </p>

                        <div class="text-center">
                            <img src="<?=images()?>/restablecer-contrasena.svg" class="img-icon" width="153" alt="" srcset="">
                        </div>
                    </div>


                    <div class="d-block d-lg-flex d-md-block">

                        <!-- Contraseña -->
                        <div class="columna pb-2 mr-lg-1 mx-md-0">
                            <div class="form">
                                <div class="form__div">
                                    <input type="password" id="Contrasena" name="Contrasena" class="form__input" placeholder=" ">
                                    <label for="Contrasena"  class="form__label">Mínimo 8 caracteres máximo 9</label>
                                    <div class="form__btn-eye"></div>
                                </div>
                                <div class="form__error"></div>
                            </div>
                        </div>

                        <!-- Confirmar Contraseña -->
                        <div class="columna pb-2 mr-lg-1 mx-md-0">
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


                    <div class="form__mensaje"></div>

                
                    <div class="text-center">
                        <button type="submit" id="btn-enviar" class="btn btn-one btn__disabled mx-auto">
                            Enviar correo <span class="loader loader__btn"></span>
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>


</section>