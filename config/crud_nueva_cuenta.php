<?php
//error_reporting(0);
require_once("conexion.php");
require_once("process.php");
$sair = new process();
$action = 'read';

if (isset($_POST['action']))
{

	$action = $_POST['action'];
}


if ($action == 'read')
{

     $nombres = $_POST["nombres"];
	 $apellidos = $_POST["apellidos"];
	 $email = $_POST["email"];
	 $password = $_POST["password"];
	 $confirm_pass = $_POST["confirm_pass"];

	 //$sair = new funcione

	 //$sair->validar_usuario($l,$p);
	// $sair->prueba();
$camposVacios  = 0;
  if ($nombres !== "" && $apellidos !== "" && $email !== "" && $password !== "" && $confirm_pass !== "" ) 
  {
       $Confirmacion_de_pass = $sair->ConfirmPassword($password,$confirm_pass);

       ////////////////////////////////
       $confirmacion_de_email = $sair->ConfirmEmail($email);
       if ($confirmacion_de_email == 0 && $Confirmacion_de_pass == 0 ) 
		{
			$res['resul'] = 1; // esto quiere decir que todos los datos estan correctos y que se rehistrará al user
		}else if ($confirmacion_de_email !== 0 && $Confirmacion_de_pass == 0) {
			$res['resul'] = 3; // el email ya existe
		}else if ($confirmacion_de_email == 0 && $Confirmacion_de_pass !== 0) {
			$res['resul'] = 4;// las contraseñas no coinciden
		}else if ($confirmacion_de_email !== 0 && $Confirmacion_de_pass !== 0) {
			$res['resul'] = 5; // las contraseñas no coinciden y el email ya existe
		}
	 	

  }elseif ($nombres == "" || $apellidos == "" || $email == "" || $password == "" || $confirm_pass == "") 
  {
  	$res['resul'] = 2; // 2 quiere decir que existen campos vacios ////
  }     
        

  	  $r = $res['resul'];
	  if ($r == 1) 
	  {	
	  	$sair->CrearCuentaParaNuevoUsuario($nombres,$apellidos,$email,$password); 
	  	$res['resultt']=$email;
	  }

	
}
 





header('Content-Type: application/json');
echo json_encode($res);
die();


?>