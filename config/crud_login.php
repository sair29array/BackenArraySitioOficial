<?php
//error_reporting(0);
require_once("conexion.php");
require_once("process.php");
$action = 'read';

if (isset($_POST['action']))
{

	$action = $_POST['action'];
}


if ($action == 'read')
{

     $l = $_POST["login"];
	 $p = $_POST["pass"];

	 //$sair = new funcione

	 //$sair->validar_usuario($l,$p);
	// $sair->prueba();
  if ($l !== "" && $p !== "") 
  {
        $respuesta = mysqli_query($conn, "SELECT count(*) FROM usuarios where email = '$l'  and pass = '$p' ");
	 if( $fila = mysqli_fetch_row($respuesta) )
	 {
	  $valor = $fila[0];

	 }

	 $res['resul']=$valor;

  }elseif ($l == "" || $p == "") 
  {
  	$res['resul']=2; // 2 quiere decir que existen campos vacios ////
  }     
        

  	  $r = $res['resul'];
	  if ($r == 1) 
	  {	
	  	$res['resultt']=$l;
	  }

	
}
 





header('Content-Type: application/json');
echo json_encode($res);
die();


?>