
<?php 
    //////// DISEÑO DE PAGINAS WEB - PLANES ///////////
$PlanBasico = $sair->GetInfoPlan("radio_online_streaming_hd", 1);
foreach ($PlanBasico as $planbasico) {
   $precio_plan_basico = number_format($planbasico["precio"] );
}

$PlanMedium = $sair->GetInfoPlan("radio_online_streaming_hd", 2);
foreach ($PlanMedium as $pm) {
   $precio_plan_medium = number_format($pm["precio"] );
}

$PlanPremium = $sair->GetInfoPlan("radio_online_streaming_hd", 3);
foreach ($PlanPremium as $pp) {
   $precio_plan_Premium = number_format($pp["precio"] );
}
 ?>
<div class="row planes justify-content-between " id="planes" >
                <div class="container mb-5">
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-6 col-md-4 mt-5 mb-2">
                            <div align="center">
                                <div class="card" >
                                    <a href="../[array]/?servicios=radio_online_streaming_hd&solicitud=plan-básico">
                                        
                                        <div class="card-header stylish-color white-text">
                                        <!--h4>PLAN BASICO</h4-->
                                        <hr>
                                        <p>
                                            <span class="h2-responsive mb-0" >PLAN BÁSICO</span>
                                            <!--span class="h1-responsive mb-0"><?php// echo "$".$precio_plan_basico; ?></span-->
                                            <h6 class="mt-0">Escoje este plan y pagas según tus necesidades.</h6>
                                        </p>
                                    </div>
                                    </a>
                                    
                                    <div class="card-body">
                                        
                                       
                                        <div class="items-plan text-left" >
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Alojamiento web (hosting)</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Dominio (Nombre del sitio)</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-times red-text"></i> Aplicación para android</h5>
                                            <hr>
                                            
                                            <h5 class="p-0">
                                                <i class="fa fa-times red-text"></i> Google Analitycs - Auto gestión</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-times red-text"></i> Diseño Responsive Desing</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Audio en HD</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-times red-text"></i> Secciones adicionales (Noticias, videos, imagenes)</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Asesoria</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fas fa-times red-text"></i> Financiamiento (Pago por cuotas)</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-dollar-sign blue-text"></i> <?php echo "Precio estandar ".$precio_plan_basico . " COP"; ?></h5>
                                            <hr>
                                            <p class="text-center">
                                                <strong>Costos adicionales</strong> Hosting + dominio (Estabilidad en la web) cada
                                                3 meses</p>

                                            <div class="card-footer text-center">
                                                <a href="../[array]/?servicios=radio_online_streaming_hd&solicitud=plan-básico"><button class="btn boton-c btn-lg">Solicitar</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mt-5 mb-5">
                            <div align="center">
                                <div class="card">
                                    <a href="../[array]/?servicios=radio_online_streaming_hd&solicitud=plan-medium">
                                        <div class="card-header primary-color white-text">
                                        <!--h4>PLAN MEDIUM</h4-->
                                        <hr>
                                        <p>
                                            <span class="h2-responsive mb-0">PLAN MEDIUM</span>
                                            
                                            <!--span class="h1-responsive mb-0"><?php // echo "$".$precio_plan_medium; ?></span-->
                                            <h6 class="mt-0">Escoje este plan y pagas según tus necesidades. </h6>
                                        </p>
                                    </div>
                                    </a>
                                    
                                    <div class="card-body">
                                        
                                        <div class="items-plan text-left">
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Alojamiento web (hosting)</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Dominio (Nombre del sitio)</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-times red-text"></i> Aplicación para android</h5>
                                            <hr>
                                            
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Google Analitycs - Auto gestión</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Diseño Responsive Desing</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Audio en HD</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Secciones adicionales (Noticias, videos, imagenes)</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Asesoria</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fas fa-times red-text"></i> Financiamiento (Pago por cuotas)</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-dollar-sign blue-text"></i> <?php echo "Precio estandar ".$precio_plan_medium . " COP"; ?></h5>
                                            <hr>
                                            <p class="text-center">
                                                <strong>Costos adicionales</strong> Hosting + dominio (Estabilidad en la web) cada
                                                6 meses</p>
                                        </div>

                                    </div>
                                     <div class="card-footer text-center">
                                                <a href="../[array]/?servicios=radio_online_streaming_hd&solicitud=plan-medium"><button class="btn boton-c btn-lg">Solicitar</button></a>
                                     </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mt-5 mb-5">
                            <div align="center">
                                <div class="card">
                                    <a href="../[array]/?servicios=radio_online_streaming_hd&solicitud=plan-premium">
                                        <div class="card-header stylish-color white-text">
                                        <!--h4>PLAN PREMIUM</h4-->
                                        <hr>
                                        <p>
                                            <span class="h2-responsive mb-0">PLAN PREMIUM</span>
                                            <!--span class="h1-responsive mb-0"><?php// echo "$".$precio_plan_Premium; ?></span-->
                                            <h6 class="mt-0">Escoje este plan y pagas según tus necesidades.</h6>
                                        </p>
                                    </div>
                                    </a>
                                    <div class="card-body">
                                        
                                        
                                        <div class="items-plan text-left">
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Alojamiento web (hosting)</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Dominio (Nombre del sitio)</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Aplicación para android</h5>
                                            <hr>
                                            
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Google Analitycs - Auto gestión</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Diseño Responsive Desing</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Audio en HD</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Secciones adicionales (Noticias, videos, imagenes)</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Asesoria</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fas fa-check blue-text"></i> Financiamiento (Pago por cuotas)</h5>
                                            
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-dollar-sign blue-text"></i> <?php 
                                                echo "Precio estandar ". $precio_plan_Premium . " COP"; ?></h5>
                                            <hr>
                                            <p class="text-center">
                                                <strong>Costos adicionales</strong> Hosting + dominio (Estabilidad en la web) cada
                                                12 meses</p>
                                        </div>

                                    </div>
                                    <div class="card-footer text-center" >
                                                <a href="../[array]/?servicios=radio_online_streaming_hd&solicitud=plan-premium"><button class="btn boton-c btn-lg">Solicitar</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>