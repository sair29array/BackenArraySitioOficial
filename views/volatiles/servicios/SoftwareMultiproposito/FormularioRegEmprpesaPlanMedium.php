<?php  ?>
<?php if (!isset($_GET['solicitud-enviada'])) {
	?> 
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
 	if (isset($_POST["continuar_contrato2"])) {
 		$id_user = $user_["id"];
 		$ne = $_POST["nombre_empresa"];
 		$nie = $_POST["nit_empresa"];

 		// añanir emppresa a user desde la pagina de plan medium del servicio de Diseño  De Pagina web
 		$sair->add_empresa_to_user_pm_dw($ne,$nie,$id_user);
 		
 		// Esta funcion envia la solicitud a la base de datos... mandando los datos personales del user y el servicio que desea contratar que en esre caso es el de diseño web en su  plan basico
 		$id_plan = 2 ; // quiere decir que es el plan numero 2 dentro de la db osea el medium 
 		if ($ne == "" && $nie == "") {
 			$facturacion_empresa = 0; // no se va a facturar a nombre de ninguna emprpesa sino al user
 		}else{ 
 		$facturacion_empresa = 1; // quiere decir que si se va a afacturar a nombre de la empresa
 		}
 		 // ENVIAR SOLICITUD AL CORREO contacto@array.com.co
        $servicio = "software_multiproposito";
       // $fecha = date("d")." de ". date("m"). " de ". date("y"); 
        $id_user = $user_["id"];
        $nombres_completos = $user_["nombres"] . " " .$user_["apellidos"];
        $cedula = $user_["cedula"];
        $empresa = $user_["nit_empresa"]." - ". $user_["empresa"];
        $sair->SendEmailSolicitudServicios($id_user,$servicio,$nombres_completos,$cedula,$empresa);

        ///////////////////////
 		$sair->registrar_solicitud_contrato($id_user,"software_multiproposito",$id_plan,$facturacion_empresa);

 		?> <script type="text/javascript">window.location="../[array]/?servicios=Sofware-Multipropósito&solicitud=plan-web&Reg-empresa&solicitud-enviada"</script> <?php 
 	}


// si esto pasa es por que ya el user tiene una empresa registrada :
 	///////////////////////////////////////////
 	if (isset($_POST["continuar_contrato2no"])) 
 	{


         // ENVIAR SOLICITUD AL CORREO contacto@array.com.co
        $servicio = "software_multiproposito";
       // $fecha = date("d")." de ". date("m"). " de ". date("y"); 
        $id_user = $user_["id"];
        $nombres_completos = $user_["nombres"] . " " .$user_["apellidos"];
        $cedula = $user_["cedula"];
        $empresa = $user_["nit_empresa"]." - ". $user_["empresa"];
        $sair->SendEmailSolicitudServicios($id_user,$servicio,$nombres_completos,$cedula,$empresa);

        ///////////////////////


 		$id_plan = 2 ; // quiere decir que es el plan numero 2 dentro de la db osea el medium 	
 		$facturacion_empresa = 0; 
 		$sair->registrar_solicitud_contrato($id_user,"software_multiproposito",$id_plan,$facturacion_empresa);
 		?> <script type="text/javascript">window.location="../[array]/?servicios=Sofware-Multipropósito&solicitud=plan-web&Reg-empresa&solicitud-enviada"</script> <?php 
 	}

 	if (isset($_POST["continuar_contrato2si"])) 
 	{

         // ENVIAR SOLICITUD AL CORREO contacto@array.com.co
        $servicio = "software_multiproposito";
       // $fecha = date("d")." de ". date("m"). " de ". date("y"); 
        $id_user = $user_["id"];
        $nombres_completos = $user_["nombres"] . " " .$user_["apellidos"];
        $cedula = $user_["cedula"];
        $empresa = $user_["nit_empresa"]." - ". $user_["empresa"];
        $sair->SendEmailSolicitudServicios($id_user,$servicio,$nombres_completos,$cedula,$empresa);

        ///////////////////////


        
$id_plan = 2 ; // quiere decir que es el plan numero 2 dentro de la db osea el medium 
 		$facturacion_empresa = 1;
 		$sair->registrar_solicitud_contrato($id_user,"software_multiproposito",$id_plan,$facturacion_empresa);
 		?> <script type="text/javascript">window.location="../[array]/?servicios=Sofware-Multipropósito&solicitud=plan-web&Reg-empresa&solicitud-enviada"</script> <?php 
 	}




} else 
	{
		include("solicitud-enviada.php");
	}

  ?>