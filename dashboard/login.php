<?php 
	require_once("config/process.php");
	if (isset($_POST["Acceder"])) {
		$user = $_POST["email"];
		$pass = $_POST["pass"];

		$sair = new process();
		$peticion = $sair->peticion_de_acceso_admin($user,$pass);
		$error = 0;
		if ($peticion == 1) 
		{
			//session_start(); está en el index 
			$_SESSION["admin"] = $user;
			header('Location: ../dashboard/?admin='.$user.' ');
		}else{
			$error = 1;
		}

	}
  ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin-array-Acceso</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <center><h2 class="panel-title">Acceder a la plataforma <br>de administración - Array</h2></center>
                    </div>

                    <div class="panel-body">
                    	<?php 
                    		if ($error == 1) {
                    			?>
                    			<center><p style="color: red;">Accesdo denegado!</p></center>
                    			<meta http-equiv="Refresh" content="1;url=../dashboard">
                    			<?php 
                    		}
                    	 ?>
                        <form role="form" method="POST" action="">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                
                                <button class="btn btn-lg btn-success btn-block" type="submit" name="Acceder">Acceder</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

</body>

</html>
