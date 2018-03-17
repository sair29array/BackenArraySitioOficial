<?php  ?>
<!-- Intro Section -->
        <div class="view">
            <div class="full-bg-img">
                <div class="container flex-center">
                    <div class="col-md-12 white-text text-center welcome">
                        <div class="wow wow fadeInDown" data-wow-delay="0.2s">
                            <h1 class="h1-responsive title-view-mobile d-block d-sm-block d-md-none ">
                                <strong>BIENVENIDO A ARRAY</strong>
                            </h1>
                            <h1 class="h1-responsive title-view-desktop d-none d-md-block mt-5">
                                <strong>BIENVENIDO A ARRAY</strong>
                            </h1>
                            <?php if (!isset($_SESSION['user_log'])) {
                                ?>
                                <div class="d-block d-sm-block d-md-none">
                                <a href="../[array]/?:=iniciar-sesion"   role="button" class="btn boton-c btn-md">Iniciar sesión
                                    <i class="fas fa-angle-right"></i>
                                </a>
                                <a href="../[array]/?:=crear-cuenta"   role="button" class="btn boton-c btn-md">Crear cuenta
                                    <i class="fas fa-angle-right"></i>
                                </a>
                            </div>
                                <?php 
                            } ?>
                            
                            <div class="d-none d-md-block">
                                <?php if (!isset($_SESSION['user_log'])) {
                                ?>
                                <div class="mt-auto mb-0 slider">
                                    <h3 class="t-s">EN
                                        <strong>ARRAY</strong> SOMOS EXPERTOS EN TIC</h3>
                                    <h3>Tecnologías de la Información y las Comunicaciones</h3>
                                   
                                </div>
                                <?php 
                                }else{
                                    ?>
                                    <div class="mt-auto mb-0 slider">
                                    <h3 class="t-s">Es estupendo
                                        <strong>que </strong> estes con nosotros.</h3>
                                    <h3>Te ayudamos a ir más allá</h3>
                                    
                                    <h3>Te ayudamos a crecer como empresa.</h3>
                                </div>
                                    <?php 
                                } ?>

                                <?php if (!isset($_SESSION['user_log'])) {
                                ?>
                                <div class="mt-0">
                                    <a href="../[array]/?:=iniciar-sesion"  role="button" class="btn boton-c btn-lg">Iniciar sesión
                                        <i class="fas fa-angle-right"></i>
                                    </a>
                                    <a href="../[array]/?:=crear-cuenta"  role="button" class="btn boton-c btn-lg">Crear cuenta
                                        <i class="fas fa-angle-right"></i>
                                    </a>
                                </div>
                                   <?php 
                                  } ?>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>