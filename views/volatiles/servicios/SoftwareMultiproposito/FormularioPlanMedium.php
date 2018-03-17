<?php  ?>
<?php 
	// esto viene del index y de la DB
 	$nombres  = strtoupper($user_['nombres']);
 	$Apellids = strtoupper($user_['apellidos']);
 	$cedula = $user_['cedula'];
 	$email = $user_['email'];
 	$pass = $user_['pass'];
 	$celular = $user_['celular'];
 	$servicio = "Plan Medium -  Apps web - Software-Multipropósito";
 	$nombre_empresa = strtoupper($user_['empresa']);
 	$nit_empresa = $user_['nit_empresa'];
 	$depar_ciudad = strtoupper($user_['departamento_ciudad']);

 	
 if (!isset($_GET["Reg-empresa"])) {
  ?>
 
   <div class="container">
    	<div class="row">
    		
    		<div class="col-12 col-md-6 mt-3 mb-5 wow fadeInLeft" data-wow-delay="0.4s">
	    		<!-- tarjeta-->
            <div class="card" >
                
                <!-- Card body -->
                <div class="card-body">
                    <!-- Material form register -->
                        <!-- Material input text -->
                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input required="required" name="nombres" type="text" id="materialFormCardNameEx" class="form-control" value="<?php echo $nombres; ?>">
                            <label for="materialFormCardNameEx" class="font-weight-light">Nombres</label>
                        </div>

                         <!-- Material input text -->
                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input required="required" name="apellidos" type="text" id="materialFormCardNameEx" class="form-control" value="<?php echo $Apellids; ?>" >
                            <label for="materialFormCardNameEx" class="font-weight-light">Apellidos</label>
                        </div>

                        <!-- Material input email -->
                        <div class="md-form">
                            <i class="fa fa-envelope prefix grey-text disabled"></i>
                            <input disabled="true"  required="required" name="correo"  value="<?php echo $email; ?>" type="email" id="materialFormCardEmailEx" class="form-control">
                            <label for="materialFormCardEmailEx" class="font-weight-light">Correo</label>
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
                
                <!-- Card body -->
                <div class="card-body">
                    <!-- Material form register -->
                    
                        <!-- Material input text -->
                        <!-- Material input text -->
                        <!--div class="md-form">
                            <i class="fa fa-address-card prefix grey-text"></i>
                            <input <?php //if ($cedula !== "" ) {
                                ?> disabled = "true"<?php // $ActualizarCedula = 0; // No se actualiza cc
                           // }else{$ActualizarCedula = 1;} ?> required="required" name="cedula" value="<?php // echo $cedula; ?>"   type="number" id="materialFormCardNameEx"  class="form-control">
                            <label for="materialFormCardNameEx" class="font-weight-light">Número de cédula</label>
                        </div-->

                         <!-- Material input text -->
                        <div class="md-form">
                            <i class="fa fa-phone prefix grey-text"></i>
                            <input name="celular" value="<?php echo $celular; ?>" required="required"  type="number" id="materialFormCardNameEx" class="form-control">
                            <label  for="materialFormCardNameEx" class="font-weight-light">Número de contacto</label>
                        </div>

                        <!-- Material input email -->
                        <div class="md-form">
                            <i class="fa fa-map-marker prefix grey-text"></i>
                            <input required="required"  name="ubicacion" value="<?php echo $depar_ciudad; ?>"  type="text" placeholder="Ej: Montería - Córdoba" id="materialFormCardEmailEx" class="form-control"  >
                            <label for="materialFormCardEmailEx" class="font-weight-light">Departamento y ciudad</label>
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
 	if (isset($_POST["continuar_contrato"])) 
 	{

 		$nombres = $_POST["nombres"];
 		$apellidos = $_POST["apellidos"];
 		//$email = $_POST["email"];
 		$cedula = "";
 		$celular = $_POST["celular"];
 		$ubicacion = $_POST["ubicacion"];
 		$id_user = $user_["id"];

 		$sair->ActualizarDatosParaSolicitudDelServiciorSoftwareMultPlanWeb($id_user,$nombres,$apellidos,$cedula,$celular,$ubicacion,"software_multiproposito","plan-medium");
 	}
  }else{
  	include("FormularioRegEmprpesaPlanMedium.php");
  }
  ?>