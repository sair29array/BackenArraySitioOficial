<?php  ?>

<section class="diseño-web">
        <div class="container">

            <?php if (!isset($_GET['solicitud'])) { // si no se ha solicitado  ningun plan .. entonces se muestran los planes y el titulo principal del servicio
                include("TituloPrincipal.php");
                include("Planes.php");
            }else if ($_GET['solicitud']=="plan-básico") {
                include("TituloPlanBasico.php");
            }else if ($_GET['solicitud']=="plan-medium") {
                include("TituloPlanMedium.php");
            }else if ($_GET['solicitud']=="plan-premium") {
                include("TituloPlanPremium.php");
            }

             ?>
            
        </div>
    </section>