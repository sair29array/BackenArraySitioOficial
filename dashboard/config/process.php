<?php 
	
	class process 
	{
		
		public function peticion_de_acceso_admin($user,$pass)
		{
			include("conexion.php");
        $consult = mysqli_query($conn, "SELECT * FROM admin_user  ");
        	foreach ($consult as $adm_us) 
        	{
        		$acceso =  0;
        		if ($adm_us["email"]==$user && $adm_us["pass"]==$pass) 
        		{
        			$acceso = 1;
        		}
        	}

        	return $acceso;
		}

		public function logout()
		{
			session_destroy();
			header('Location: ../dashboard ');
		}

		public function mostrar_usuarios_array()
		{
		include("conexion.php");
        $consult = mysqli_query($conn, "SELECT * FROM usuarios  ");
        return mysqli_fetch_all($consult, MYSQLI_ASSOC);
		}


		// revisar base de datos cada 5 segundos - para saber los cambios
		// primero vamos a empezar con los cambios en la base de dtos de usuarios
		// cuando se registre un nuevo user lo sabremos de inmediato

		public  function NotificadorDeNuevosUsuarios()
		{
			
		}



	}

 ?>