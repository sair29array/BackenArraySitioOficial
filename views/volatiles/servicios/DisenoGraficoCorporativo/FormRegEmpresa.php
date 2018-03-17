

<?php if (!isset($_GET['solicitud-enviada'])) 

{
	$nombre_empresa = $user_["empresa"];
	$nit_empresa = $user_["nit_empresa"];

		
	?> 
<div class="row py-3 align-items-center wow zoomIn" data-wow-delay="0.4s">
				
              <?php if ($nombre_empresa !=""  ) {  ?>
                    <div class="col-md-12 col-lg-12 text-center  mt-3 ">
                        <p class="mb-0 ">
                            <span class="title-rds"><h3>¿El servicio que estás a punto de solicitar es para tu empresa?</h3></span> </p>
                    </div>
             <?php  }else{
             	?>
             	 <div class="col-md-12 col-lg-12 text-center  mt-3 ">
                        <p class="mb-0 ">
                            <span class="title-rds"><h3>¿El servicio que estás a punto de solicitar es para tu empresa? ¡Es el momento de registrarla!</h3></span> </p>
                    </div>
             	<?php 
             }

              ?> 
</div>
 <div class="container">
    	<div class="row">
    		
    		<div class="col-12 col-md-6 mt-3 mb-5 wow fadeInLeft" data-wow-delay="0.4s">
	    		<!-- tarjeta-->
            <div class="card" >
                <div class="card-header">
                    <p class="h4 text-center">Nombre de tu empresa</p>
                  
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <!-- Material form register -->
                        <!-- Material input text -->
                        <div class="md-form">
                            <i class="fa fa-users prefix grey-text"></i>
                            <input  name="nombre_empresa" type="text" id="materialFormCardNameEx" class="form-control" value="<?php echo $nombre_empresa; ?>">
                           
                        </div>

                    <!-- Material form register -->

                </div>
                <!-- Card body -->
            </div>
            <!-- Card -->
    		</div>
    		






    		<div class="col-12 col-md-6 mt-3 mb-5 wow fadeInRight" data-wow-delay="0.4s">
			<!-- tarjeta-->
            <div class="card" >
                <div class="card-header">
                    <p class="h4 text-center">Nit de la empresa</p>
                   
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <!-- Material form register -->
                    
                        <!-- Material input text -->
                        <div class="md-form">
                            <i class="fa fa-ellipsis-h prefix grey-text"></i>
                            <input  name="nit_empresa" value="<?php echo $nit_empresa; ?>"   type="number" id="materialFormCardNameEx"  class="form-control">
                            </label>
                        </div>
                    <!-- Material form register -->
                </div>  
                <!-- Card body -->
            </div>
            <!-- Card -->                        
    		</div>
    	</div>
    	</div>



   
    	
 </div>
   
 </form> <!-- El formulario termina aqui y empieza en tituloplanbasico.php -->

 <?php 
 	if (isset($_POST["continuarsi"])) {
 		$id_user = $user_["id"];
 		$ne = $_POST["nombre_empresa"];
 		$nie = $_POST["nit_empresa"];
 		
 		

		$id_planes = $escarapelas. " - ". $botones. " - ".$pendones. " - ".$tarjetas_visitas;



 		 // ENVIAR SOLICITUD AL CORREO contacto@array.com.co
 		$facturacion_empresa = 1;
        $servicio = "diseño_grafico_corporativo";
        //$fecha = date("d")." de ". date("m"). " de 20". date("y"); 
        $id_user = $user_["id"];
        $nombres_completos = $user_["nombres"] . " " .$user_["apellidos"];
        $cedula = $user_["cedula"];
        $empresa = $user_["nit_empresa"]." - ". $user_["empresa"];
        $sair->SendEmailSolicitudServicios($id_user,$servicio,$nombres_completos,$cedula,$empresa);

        ///////////////////////

 		$sair->registrar_solicitud_contrato($id_user,$servicio,$id_planes,$facturacion_empresa);

 		?> <script type="text/javascript">window.location="../[array]/?servicios=DiseñoGráficoCorporativo&solicitud-enviada"</script> <?php 


 	}


// si esto pasa es por que ya el user tiene una empresa registrada :
 	///////////////////////////////////////////
 	if (isset($_POST["continuarno"])) 
 	{
         // ENVIAR SOLICITUD AL CORREO contacto@array.com.co
        $servicio = "diseño_paginas_web";
   //$fecha = date("d")." de ". date("m"). " de ". date("y"); 
        $id_user = $user_["id"];
        $nombres_completos = $user_["nombres"] . " " .$user_["apellidos"];
        $cedula = $user_["cedula"];
        $empresa = $user_["nit_empresa"]." - ". $user_["empresa"];
        $sair->SendEmailSolicitudServicios($id_user,$servicio,$nombres_completos,$cedula,$empresa);

        ///////////////////////

 		$id_plan = 1 ; // quiere decir que es el plan numero 1 dentro de la db osea el basico 	
 		$facturacion_empresa = 0; 
 		$sair->registrar_solicitud_contrato($id_user,"diseño_paginas_web",$id_plan,$facturacion_empresa);
 		?> <script type="text/javascript">window.location="../[array]/?servicios=Diseño_De_Paginas_web&solicitud=plan-básico&Reg-empresa&solicitud-enviada"</script> <?php 
 	}

 	if (isset($_POST["continuar_contrato2si"])) 
 	{
         // ENVIAR SOLICITUD AL CORREO contacto@array.com.co
        $servicio = "diseño_paginas_web";
       // $fecha = date("d")." de ". date("m"). " de ". date("y"); 
        $id_user = $user_["id"];
        $nombres_completos = $user_["nombres"] . " " .$user_["apellidos"];
        $cedula = $user_["cedula"];
        $empresa = $user_["nit_empresa"]." - ". $user_["empresa"];
        $sair->SendEmailSolicitudServicios($id_user,$servicio,$nombres_completos,$cedula,$empresa);

        ///////////////////////

$id_plan = 1 ; // quiere decir que es el plan numero 1 dentro de la db osea el basico 
 		$facturacion_empresa = 1;
 		$sair->registrar_solicitud_contrato($id_user,"diseño_paginas_web",$id_plan,$facturacion_empresa);
 		?> <script type="text/javascript">window.location="../[array]/?servicios=Diseño_De_Paginas_web&solicitud=plan-básico&Reg-empresa&solicitud-enviada"</script> <?php 
 	}


 	if (isset($_POST["continuar_2"])) 
 	{
 		# code...
 	}

} else 
	{
		include("solicitud-enviada.php");
	}

  ?>