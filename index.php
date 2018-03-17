<?php 
///PROCESOS DE INICIALZACIÓN DEL USER
session_start();
include("config/process.php");
$sair = new process();

if (isset($_SESSION['user_log'])) {

    $user = $_SESSION['user_log']; // email del user
    // consulta de datos del user:
   $consult_duser =  $sair->consulta_datos_user_log($user);
   foreach ($consult_duser as $user_ ) 
   {
        $id_user = $user_["id"];
        
       $name_user = $user_['nombres'];
       $apellidos_user = $user_['apellidos'];
       
   }
}
 
//////////////////////////////////////
/////////////////////////////////////
/////////////////////////////////////
// TITULO  Y DESCRIPCIÓN POR PÁGINA////
$title ="Array | Expertos en TIC";

$description = "Array - Expertos en TIC | Somos una empresa colombiana cuyo objetivo principal es trabajar con TIC's (Tecnologias de la Información y las Comunicaciones) desarrollando mejores herramientas que facilitan el trabajo diario de cualquier empresa. | CEO - Sair Sánchez - Array";

$keywords = "array colombia, array empresa, array diseño de paginas web, Sair Sánchez - array, ¿cómo diseñar una página web?";
switch (@$_GET[":"]) 
{
    case "iniciar-sesion":
       $title ="Array - Iniciar sesión";
        break;
    case "crear-cuenta":
       $title ="Array - Crear cuenta";
        break;
    case "usuarios":
       $title ="Array - iniciar sesión o crear cuenta ";
        break;
    case "servicios-array":
       $title ="Array - Servicios ";
        break;
    case "quienes-somos":
       $title ="Array - Quienes somos ";
        break;
    case "productos-array":
       $title ="Array - Productos ";
        break;
    case "Portafolio-array":
       $title ="Array - Portafolio ";
        break;
    case "contactos":
       $title ="Array - Contactos";
        break;
    case "MiCuenta":
       $title = $name_user." ".$apellidos_user." - Array";
        break;
 
}




/////////////////////////////////////////
//////////////////////////////////////////
/////////////////////////////////////////



 ?>
<!DOCTYPE html>
<html lang="es" class="full-height">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
     <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords;  ?>">
    <meta name="author" content="Sair Sánchez - Array - array.com.co">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="theme-color" content="#37474F">
    <!-- titulo de la pagina-->
    <title><?php echo $title; ?></title>
    <!-- icono de la pagina -->
    <link rel="shortcut icon" href="img/ISOTIPOv2.png">
    <!-- Font Awesome -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- fuentes -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- estilos propios -->
    <link rel="stylesheet" href="css/estilos.css">
    <!-- Estilos de slider vertical de texto -->
    <link rel='stylesheet' href='css/slick.min.css'>
    <link rel='stylesheet' href='css/slick-theme.min.css'>


     <!-- alertify JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/alertify.min.js"></script>
<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/bootstrap.min.css"/>

</head>

<body>
   
    <!--loader page -->
    <div id="contenedor">
        <div id="cargar"></div>
    </div>
    <!-- fin loader page -->
    <!--Boton de ir arriba-->
    <i class="ir-arriba fa fa-arrow-up fa-2x"></i>
    <!--Fin Boton ir arriba-->
    <header>
        <?php 
        	// vistas fijas - navbar
        	include("views/fijas/navbar.php");


            if (!isset($_GET[':'])  && !isset($_GET["servicios"])) 
            {
        	 /// vistas volatil - slider
            include("views/volatiles/principal/slider.php");
            }
         ?>
        
   
    <main>
       <?php 

        if (!isset($_GET[':']) && !isset($_GET["servicios"])) 
        {

            //vistas pagina principal - volatiles
            include("views/volatiles/principal/SomosTic.php");
            include("views/volatiles/principal/herramientas.php");
            include("views/volatiles/principal/metodologia.php");
            include("views/volatiles/principal/RedesSociales.php");
        }else if ($_GET[":"]=="servicios-array") {
            include("views/volatiles/servicios.php");
        }else if ($_GET[":"]=="productos-array") {
            include("views/volatiles/productos.php");
        }else if ($_GET[":"]=="Portafolio-array") {
            include("views/volatiles/nosotros/portafolio/portafolio.php");
        }else if ($_GET[":"]=="iniciar-sesion") {
            include("views/volatiles/usuarios/iniciar-sesion.php");
        }else if ($_GET[":"]=="crear-cuenta") {
            include("views/volatiles/usuarios/crear-cuenta.php");
        }else if ($_GET[":"]=="quienes-somos") {
            include("views/volatiles/nosotros/quienes-somos.php");
        }else if ($_GET[":"]=="MiCuenta") {
            include("views/volatiles/usuarios/miCuenta.php");
        }else if ($_GET[":"]=="Politicas-de-Privacidad") {
            include("views/volatiles/nosotros/politicas.php");
        }


        // para las vistas de los servicios
        if (!isset($_GET["servicios"])) {
    # code...
        }else if ($_GET['servicios']=="Diseño_De_Paginas_web") {
        include("views/volatiles/servicios/DisenoPaginasWeb/dipg.php");
        }else if ($_GET['servicios']=="radio_online_streaming_hd") {
        include("views/volatiles/servicios/RadioOnlineStreamingHd/RadioOnlineIndex.php");
        }else if ($_GET['servicios']=="Sofware-Multipropósito") {
        include("views/volatiles/servicios/SoftwareMultiproposito/softwareMultipropositoIndex.php");
        }else if ($_GET['servicios']=="DiseñoGráficoCorporativo") {
        include("views/volatiles/servicios/DisenoGraficoCorporativo/DisenoGraficocIndex.php");
        }
        ?>    
    </main>
    <?php 
            // vistas fija - pagina fija
    include("views/fijas/footer.php");

     ?>
    <!-- JQuery-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap  JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB  JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script>new WOW().init();</script>
    <!--Script Loader Page -->
    <script type="text/javascript">
        window.onload = function () {
            var contenedor = document.getElementById('contenedor');
        }
        contenedor.style.visibility = 'hidden';
        contenedor.style.opacity = '0';
    </script>
    <!-- FIN Script Loader Page -->
    <!-- ir arriba -->
    <script>
        $(document).ready(function () {
            $('.ir-arriba').click(function () {
                $('body, html').animate({
                    scrollTop: '0px'
                }, 800);
            });

            $(window).scroll(function () {
                if ($(this).scrollTop() > 0) {
                    $('.ir-arriba').slideDown(600);
                } else {
                    $('.ir-arriba').slideUp(600);
                }
            });

            /*hacia abajo*/
            $('.ir-abajo').click(function () {
                $('body, html').animate({
                    scrollTop: '1000px'
                }, 1000);
            });

        });
    </script>
    <!-- script slider de texto vertical -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js'></script>
    <script type="text/javascript">
        $('.slider').slick({ 
            vertical: true,
            autoplay: true,
            autoplaySpeed: 3500,
            speed: 500
        });
    </script>


       
</body>

</html>


<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?52ZYxuok8S0EUsOzrLi0nsDGoSHvJ1HP";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->