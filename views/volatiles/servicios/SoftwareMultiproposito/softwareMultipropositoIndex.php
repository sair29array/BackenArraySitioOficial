<?php  ?>


    <!-- servicios -->
    <section class="diseño-web " >
        <div class="container">

            <?php if (!isset($_GET['solicitud'])) { // si no se ha solicitado  ningun plan .. entonces se muestran los planes y el titulo principal del servicio
                include("TituloPrincipal.php");
                include("Planes.php");
            }else if ($_GET['solicitud']=="plan-escritorio") {
                include("TituloPlanEscritorio.php");
            }else if ($_GET['solicitud']=="plan-web") {
                include("TituloPlanMedium.php");
            }else if ($_GET['solicitud']=="plan-moviles") {
                include("TituloPlanPremium.php");
            }

             ?>
            
        </div>
    </section>
