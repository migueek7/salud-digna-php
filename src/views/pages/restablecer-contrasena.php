<?=$this->layout('layouts/layout'); ?>

<section>

    <div class="contenedor contenedor_sm mt-2">
        <div class="grid-2">

            <div class="columna">
                <form id="form-enviar" class="card card__size-lg">

                    <div class="mb-2">
                        <h2 class="title font-size-lg mt-0">
                            Cambia tu contraseña
                        </h2>
                        <p class="font-size-md">
                            Ingrese su dirección de correo electrónico y enviaremos las instrucciones para restablecer su contraseña.
                        </p>

                        <div class="text-center">
                            <img src="<?=images()?>/cambia-tu-contrasena.svg" class="img-icon" width="153" alt="" srcset="">
                        </div>
                    </div>


                    <div class="d-block d-lg-flex d-md-block">

                        <div class="columna pb-2 mr-lg-1 mx-md-0">
                            <div class="form">
                                <div class="form__div">
                                    <span class="icon-user form__icon-left"></span>
                                    <input type="email" id="Correo" name="Correo" class="form__input form__input-icon" placeholder=" ">
                                    <label for="Correo" class="form__label form__label-icon">Ingresa tu correo electrónico</label>
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
                
                    
                    <div class="d-flex align-items-center mt-2">
                        <i class="icon-info-outline"></i>
                        <p class="pl-2 my-0 font-size-sm">
                            Si no recibes el correo en la bandeja de entrada en los próximos minutos, revisa la bandeja de no deseados. Cualquier duda o aclaración, contáctanos a través de nuestro chat. 
                        </p>
                    </div>

                </form>
            </div>
        </div>
    </div>


</section>