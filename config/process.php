<?php 
	
	class process
	{

        

		public function ConfirmPassword($pass,$passConfirm)
		{
			// esta funcion sirve para saber si las dos contraseñas que ingreso el 
			//nuevo user concuerdan
			$error = 0; // Esta variable cuenta el numero de errores al momento de registrar un nuevo usuario


			// SABER SI LAS CONTRASEÑAS COINCIDEN:
			if ($pass != $passConfirm) 
			{
				$error = $error + 1;
			}
			

			return $error;
		}
		public function ConfirmEmail($email) // con esta funcion veridfico si el email de un posible nuevo user está o no en uso
		{
			//VERIFICAR SI EL CORREO QUE SE INGRESÓ ESTÁ O NO ESTÁ EN LA DB:
			$error = 0;
			$datos = $this->GetDatosUsuariosRegistrados();
			foreach ($datos as $datos_users) 
			{
				$e = $datos_users['email'];
				if ($e == $email) 
				{
					$error = $error + 1;
				}
			}
			return $error;
		}

		public function CrearCuentaParaNuevoUsuario($nombres,$apellidos,$email,$pass)
		{
			include("conexion.php");
		$consulta = mysqli_query($conn, "INSERT INTO usuarios (nombres,apellidos,email,pass)  VALUES ('$nombres', '$apellidos','$email','$pass')");
		
		 
		return $consulta;
		}

		public function GetDatosUsuariosRegistrados() // sacamos todos los datos que se encuentran registrados y asociados a nuestros usuarios
     	{
        include("conexion.php");
        $consult = mysqli_query($conn, "SELECT * FROM usuarios ");
        return mysqli_fetch_all($consult, MYSQLI_ASSOC);
     	}
     	
     	
     	public function consulta_datos_user_log($user) // es para saber los datos del usuario 
     	// que acaba de iniciar session en la plataforma
     	{
     		include("conexion.php");
        $consult = mysqli_query($conn, "SELECT * FROM usuarios Where email = '$user' ");
        return mysqli_fetch_all($consult, MYSQLI_ASSOC);
     	}

     	public function CerrarSesion()
     	{
     		session_destroy();
     		?><script>window.location="../[array]/"</script><?php 
     		
     	}

     	public function verificarSiLosDatosEstanCompletos($email) //verifica si los datos del user se encuentran completos
     	{
     		include("conexion.php");
        	$consult = mysqli_query($conn, "SELECT * FROM usuarios Where email = '$email' ");
        	foreach ($consult as $user_) 
        	{
        		$nombres  = $user_['nombres'];
 				$Apellids = $user_['apellidos'];
 				$cedula = $user_['cedula'];
 				$email = $user_['email'];
 				$pass = $user_['pass'];
 				$celular = $user_['celular'];
 				$nombre_empresa = $user_['empresa'];
 				$nit_empresa = $user_['nit_empresa'];
 				$depar_ciudad = $user_['departamento_ciudad'];
        	}
        	if ($nombres !== "" && $Apellids !== "" && $cedula !=="" && $celular !== ""  && $depar_ciudad !== "" ) 
        		{
        		 return 1;
        		}else{
        			return 0;
        		}
     	}

        // ESTA funxion es ppara poder contratar servicio de diseño web PlanBASICO -- despues viene otro proceso 
     	public function ActualizarDatosParaSolicitudDelServicioDiseñoWebPlanBasico($id_user,$nombres,$apellidos,$cedula,$celular,$ubicacion,$servicio,$plan,$ActualizarCedula)
     	{
     		include("conexion.php");
          
                $consult = mysqli_query($conn, "UPDATE usuarios SET nombres = '$nombres', apellidos = '$apellidos' ,  celular = '$celular', departamento_ciudad = '$ubicacion'  WHERE id = '$id_user' ");
            
     		
     		
            ?>
            <script type="text/javascript">
                window.location="../[array]/?servicios=Diseño_De_Paginas_web&solicitud=plan-básico&Reg-empresa";
            </script>
            <?php 

            // el servicio es el que viene popr arametro desde la agina del servicio que el user haya escogido ... al igual que el tipo de solicitud que viene siendo el plan
     		return $consult;
     		
     	}
        // registrar empresa desde el plan basico del servicio de DISEÑO WEB 
        public function add_empresa_to_user_pb_dw($ne,$nie,$id_user)
        {
            include("conexion.php");
            $consult = mysqli_query($conn, "UPDATE usuarios SET empresa = '$ne', nit_empresa = '$nie'  WHERE id = '$id_user' ");
            return $consult;
        }


        public function registrar_solicitud_contrato($id_user,$servicio,$id_plan,$facturacion_empresa)
        {
            include("conexion.php");
            $consulta = mysqli_query($conn, "INSERT INTO contratos_servicios_users (id_usuario,servicio,id_plan_escojido,facturacion_a_empresa)  VALUES ('$id_user', '$servicio','$id_plan','$facturacion_empresa')");
            return $consulta;
        }

        public function SendEmailSolicitudServicios($id_user,$servicio,$nombres_completos,$cedula,$empresa)
        {
            $destino = "contacto@array.com.co , arraycolombia@gmail.com";

            $titulo = "Nueva Solicitud De Servicio";
            $contenido = $titulo. " - Usuario: [id:". $id_user."] ".$nombres_completos. " / CC ".$cedula." / Empresa: ". $empresa. " / Servicio Solicidato: ". $servicio;

            mail($destino,$titulo,$contenido);

        }
      
     

        // ESTA funxion es ppara poder contratar servicio de diseño web PlanMedium-- despues viene otro proceso 

        public function ActualizarDatosParaSolicitudDelServicioDiseñoWebPlanMedium($id_user,$nombres,$apellidos,$cedula,$celular,$ubicacion,$servicio,$plan,$ActualizarCedula)
        {
            include("conexion.php");
           
                $consult = mysqli_query($conn, "UPDATE usuarios SET nombres = '$nombres', apellidos = '$apellidos' ,  celular = '$celular', departamento_ciudad = '$ubicacion'  WHERE id = '$id_user' ");
            
            
            
            ?>
            <script type="text/javascript">
                window.location="../[array]/?servicios=Diseño_De_Paginas_web&solicitud=plan-medium&Reg-empresa";
            </script>
            <?php 

            // el servicio es el que viene popr arametro desde la agina del servicio que el user haya escogido ... al igual que el tipo de solicitud que viene siendo el plan
            return $consult;
            
        }


        // registrar empresa desde el plan medium del servicio de DISEÑO WEB 
        public function add_empresa_to_user_pm_dw($ne,$nie,$id_user)
        {
            include("conexion.php");
            $consult = mysqli_query($conn, "UPDATE usuarios SET empresa = '$ne', nit_empresa = '$nie'  WHERE id = '$id_user' ");
            return $consult;
        }

        public function ActualizarDatosParaSolicitudDelServicioDiseñoWebPlanPremium($id_user,$nombres,$apellidos,$cedula,$celular,$ubicacion,$servicio,$plan,$ActualizarCedula)
        {
            include("conexion.php");
            
                $consult = mysqli_query($conn, "UPDATE usuarios SET nombres = '$nombres', apellidos = '$apellidos' ,  celular = '$celular', departamento_ciudad = '$ubicacion'  WHERE id = '$id_user' ");
            
            
            
            ?>
            <script type="text/javascript">
                window.location="../[array]/?servicios=Diseño_De_Paginas_web&solicitud=plan-premium&Reg-empresa";
            </script>
            <?php 

            // el servicio es el que viene popr arametro desde la agina del servicio que el user haya escogido ... al igual que el tipo de solicitud que viene siendo el plan
            return $consult;
            
        }

         // registrar empresa desde el plan premiumm del servicio de DISEÑO WEB 
        public function add_empresa_to_user_pp_dw($ne,$nie,$id_user)
        {
            include("conexion.php");
            $consult = mysqli_query($conn, "UPDATE usuarios SET empresa = '$ne', nit_empresa = '$nie'  WHERE id = '$id_user' ");
            return $consult;
        }


        ///// conocer las caracteriristicas de los planes de los servicios
        public function GetInfoPlanes($servicio)
        {
            include("conexion.php");
            $consult = mysqli_query($conn, "SELECT * FROM $servicio ");
            return $consult;
        }

        ///// conocer las caracteristicas de un plan en particular de un servicio 
        public function GetInfoPlan($servicio,$plan)
        {
            include("conexion.php");
            $consult = mysqli_query($conn, "SELECT * FROM $servicio WHERE id_planes = $plan ");
            return $consult;
        }



// Actualiza los datos desde el servicio radio streaming hd - plan basico 
        public function ActualizarDatosParaSolicitudDelServicioradio_online_streaming_hd($id_user,$nombres,$apellidos,$cedula,$celular,$ubicacion,$servicio,$plan)
        {
            include("conexion.php");
            
                $consult = mysqli_query($conn, "UPDATE usuarios SET nombres = '$nombres', apellidos = '$apellidos' ,  celular = '$celular', departamento_ciudad = '$ubicacion'  WHERE id = '$id_user' ");
        
            
            ?>
            <script type="text/javascript">
                window.location="../[array]/?servicios=radio_online_streaming_hd&solicitud=plan-básico&Reg-empresa";
            </script>
            <?php 

            // el servicio es el que viene popr arametro desde la agina del servicio que el user haya escogido ... al igual que el tipo de solicitud que viene siendo el plan
            return $consult;
            
        }

// Actualiza los datos desde el servicio radio streaming hd - plan medium
        public function ActualizarDatosParaSolicitudDelServicioradio_online_streaming_hd_plan_medium($id_user,$nombres,$apellidos,$cedula,$celular,$ubicacion,$servicio,$plan)
        {
            include("conexion.php");
            
                $consult = mysqli_query($conn, "UPDATE usuarios SET nombres = '$nombres', apellidos = '$apellidos' ,  celular = '$celular', departamento_ciudad = '$ubicacion'  WHERE id = '$id_user' ");
        
            
            ?>
            <script type="text/javascript">
                window.location="../[array]/?servicios=radio_online_streaming_hd&solicitud=plan-medium&Reg-empresa";
            </script>
            <?php 

            // el servicio es el que viene popr arametro desde la agina del servicio que el user haya escogido ... al igual que el tipo de solicitud que viene siendo el plan
            return $consult;
            
        }




// Actualiza los datos desde el servicio radio streaming hd - plan Premium
        public function ActualizarDatosParaSolicitudDelServicioradio_online_streaming_hd_plan_premium($id_user,$nombres,$apellidos,$cedula,$celular,$ubicacion,$servicio,$plan)
        {
            include("conexion.php");
            
                $consult = mysqli_query($conn, "UPDATE usuarios SET nombres = '$nombres', apellidos = '$apellidos' ,  celular = '$celular', departamento_ciudad = '$ubicacion'  WHERE id = '$id_user' ");
        
            
            ?>
            <script type="text/javascript">
                window.location="../[array]/?servicios=radio_online_streaming_hd&solicitud=plan-premium&Reg-empresa";
            </script>
            <?php 

            // el servicio es el que viene popr arametro desde la agina del servicio que el user haya escogido ... al igual que el tipo de solicitud que viene siendo el plan
            return $consult;
            
        }


    // Actualiza los datos desde el servicio Software Multipropósito - plan Escritorio 
        public function ActualizarDatosParaSolicitudDelServiciorSoftwareMultPlanEscritorio($id_user,$nombres,$apellidos,$cedula,$celular,$ubicacion,$servicio,$plan)
        {
            include("conexion.php");
            
                $consult = mysqli_query($conn, "UPDATE usuarios SET nombres = '$nombres', apellidos = '$apellidos' ,  celular = '$celular', departamento_ciudad = '$ubicacion'  WHERE id = '$id_user' ");
        
            
            ?>
            <script type="text/javascript">
                window.location="../[array]/?servicios=Sofware-Multipropósito&solicitud=plan-escritorio&Reg-empresa";
            </script>
            <?php 

            // el servicio es el que viene popr arametro desde la agina del servicio que el user haya escogido ... al igual que el tipo de solicitud que viene siendo el plan
            return $consult;
            
        }

    // Actualiza los datos desde el servicio Software Multipropósito - plan Web - Medium
        public function ActualizarDatosParaSolicitudDelServiciorSoftwareMultPlanWeb($id_user,$nombres,$apellidos,$cedula,$celular,$ubicacion,$servicio,$plan)
        {
            include("conexion.php");
            
                $consult = mysqli_query($conn, "UPDATE usuarios SET nombres = '$nombres', apellidos = '$apellidos' ,  celular = '$celular', departamento_ciudad = '$ubicacion'  WHERE id = '$id_user' ");
        
            
            ?>
            <script type="text/javascript">
                window.location="../[array]/?servicios=Sofware-Multipropósito&solicitud=plan-web&Reg-empresa";
            </script>
            <?php 

            // el servicio es el que viene popr arametro desde la agina del servicio que el user haya escogido ... al igual que el tipo de solicitud que viene siendo el plan
            return $consult;
            
        }



        // Actualiza los datos desde el servicio Software Multipropósito - plan movlies - premium
        public function ActualizarDatosParaSolicitudDelServiciorSoftwareMultPlanMoviles($id_user,$nombres,$apellidos,$cedula,$celular,$ubicacion,$servicio,$plan)
        {
            include("conexion.php");
            
                $consult = mysqli_query($conn, "UPDATE usuarios SET nombres = '$nombres', apellidos = '$apellidos' ,  celular = '$celular', departamento_ciudad = '$ubicacion'  WHERE id = '$id_user' ");
        
            
            ?>
            <script type="text/javascript">
                window.location="../[array]/?servicios=Sofware-Multipropósito&solicitud=plan-moviles&Reg-empresa";
            </script>
            <?php 

            // el servicio es el que viene popr arametro desde la agina del servicio que el user haya escogido ... al igual que el tipo de solicitud que viene siendo el plan
            return $consult;
            
        }








	}


 ?>