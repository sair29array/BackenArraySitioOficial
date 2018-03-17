<?php 
if (isset($_SESSION['user_log'])) { ?> <script> window.location="../[array]/" ;</script> <?php  }// si ya el usuario inicio sesion -- ni tiene nada que hacer aqui !
if ( isset($_GET['user'])) {
    $u = $_GET["user"];
    $_SESSION['user_log']=$u;
    
    ?>
    <script type="text/javascript">
        alertify.alert('Ahora eres parte de ARRAY', '', function(){ window.location="../[array]/" ; }).set({transition:'flipy',message: '¡Comencemos a trabajar!'}).show();
    </script>
    <?php 
}
 ?>
    <section class="iniciar-sesion mt-5">
    	<div class="container">
    	<div class="row">
    		<div class="col-12 text-center mt-2 wow zoomIn" data-wow-delay="0.4s">
	    		<h6 class="h1-responsive"><strong>¿Aun no tienes una cuenta?</strong></h6>
	    		<p> Registrate y tendras  grandes privilegios, mejores servicios y una mejor atención. </p>
    		</div>
    		<div class="col-12 col-md-4 mt-3 mb-5 wow fadeInLeft" data-wow-delay="0.4s">
	    		<h1 class="h1-responsive text-center text-sm-left text-md-left">Registrate con:</h1>
	    		<div class="mt-4">
	    		<a href="#" role="button" class="btn btn-lg btn-primary waves-effect disabled"><i class="fab fa-facebook-f"></i> | registrate con Facebook</a>
	    		<a href="#" role="button" class="btn btn-lg btn-danger waves-effect disabled "><i class="fab fa-google"></i> | registrarse con Google</a>
	    		<a href="#" role="button" class="btn btn-lg btn-info waves-effect  disabled"><i class="fab fa-twitter"></i> | registrarse con Twitter</a>
	    		</div>
	    		<div class="w-100"></div>
	    		<p class="col-10 text-center">En array siempre pensamos en tu seguridad  y la de tus datos personales <i class="grey-text fas fa-lock"></i></p>
    		</div>
    		<div class="col-md-1 mr-5 d-none d-sm-none d-md-block d-lg-block">
    			<hr class="v wow zoomIn" data-wow-delay="0.4s">
    		</div>
    		<div class="col-12 col-md-5 mt-3 mb-5 wow fadeInRight" data-wow-delay="0.4s">
			<!-- tarjeta-->
            <div class="card" id="contenedor_">
                <div class="card-header">
                    <p class="h4 text-center">¡Registrate ahora!</p>
                    <span   style="color: red;" >{{alert}}</span class="mostrar_alerta_login">
                                    <span   style="color: green;" >{{cargando}}</span class="mostrar_alerta_login">
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <!-- Material form register -->
                    
                        <!-- Material input text -->
                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input v-model="nombres" type="text" id="materialFormCardNameEx" class="form-control">
                            <label for="materialFormCardNameEx" class="font-weight-light">Nombres</label>
                        </div>

                         <!-- Material input text -->
                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input v-model="apellidos" type="text" id="materialFormCardNameEx" class="form-control">
                            <label for="materialFormCardNameEx" class="font-weight-light">Apellidos</label>
                        </div>

                        <!-- Material input email -->
                        <div class="md-form">
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <input v-model="email" type="email" id="materialFormCardEmailEx" class="form-control">
                            <label for="materialFormCardEmailEx" class="font-weight-light">Correo</label>
                        </div>

                        <!-- Material input password -->
                        <div class="md-form">
                            <i class="fa fa-lock prefix grey-text"></i>
                            <input v-model="password" type="password" id="materialFormCardPasswordEx" class="form-control">
                            <label for="materialFormCardPasswordEx" class="font-weight-light">Contraseña</label>
                        </div>

                        <!-- Material input password -->
                        <div class="md-form">
                            <i class="fa fa-lock prefix grey-text"></i>
                            <input v-model="confirm_pass" type="password" id="materialFormCardPasswordEx" class="form-control">
                            <label for="materialFormCardPasswordEx" class="font-weight-light">Confirmar contraseña</label>
                        </div>

                        <div class="text-center">
                            <!--pre>{{$data}}</pre-->
                            <button v-on:click="enviar"  class="btn boton-c btn-lg" type="submit">Registrarse <i class="fas fa-sign-out-alt"></i></button>
                        </div>
                    
                    <!-- Material form register -->

                </div>
                 <div class="card-footer black-text text-center">
                    <h5 class="bloque ">¿Ya tienes una cuenta?</h5>
                        <a class="btn btn-sm btn-outline-info" href="../[array]/?:=iniciar-sesion">Inicia sesión</a>
                </div>
                <!-- Card body -->

            </div>
            <!-- Card -->
                         
    		</div>
    	</div>
    	</div>
     </section>
 <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue"></script>

<script src="config/vue_nueva_cuenta.js"></script>