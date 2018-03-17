<?php  ?>

    <section class="portafolio mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4 wow zoomIn" data-wow-delay="0.4s">
                    <h1 class="h1-responsive text-center m-0 text-uppercase title-portafolio divider-new mt-3">Nuestros proyectos exitosos</h1>
                    <p style="text-align: center;">En array nos da gusto poder presentarte nuestro portafolio de proyectos exitosos, mediante el cual ponemos a tu disposición nuestra experiencia orientada a la satisfacción de las necesidades razonables de nuestros clientes.</p>
                </div>
            </div>
            <!--  -->
            <div class="row justify-content-between wow fadeInUp" data-wow-delay="0.4s">
                <div class="col-12 col-md-4">
                            <center>
                                <a href="../[array]/?:=Portafolio-array&categoria=DesarrolloWeb"><span><strong style="color: #2196f3;" >Desarrollo de recursos (Apps Web)</strong></span></a>
                            <?php if ($_GET["categoria"]=="DesarrolloWeb") {
                                ?><hr class="blue col-10 mt-2"><?php 
                            } ?>
                            </center>
                </div>
                 <div class="col-12 col-md-4">
                            <center>
                                <a href="../[array]/?:=Portafolio-array&categoria=MedAudVisuales"><span><strong style="color: #2196f3;" >Medios audiovisuales</strong></span></a>
                            <?php if ($_GET["categoria"]=="MedAudVisuales") {
                                ?><hr class="blue col-10 mt-2"><?php 
                            } ?>
                            </center>
                </div>
                 <div class="col-12 col-md-4">
                            <center>
                                <a href="../[array]/?:=Portafolio-array&categoria=MantSoporteTecRyC"><span><strong style="color: #2196f3;" >Soporte técnico en redes y computadoras</strong></span></a>
                            <?php if ($_GET["categoria"]=="MantSoporteTecRyC") {
                                ?><hr class="blue col-10 mt-2"><?php 
                            } ?>
                            </center>
                </div>
                

                <?php 
                    if ($_GET["categoria"]=="DesarrolloWeb") {
                        include("DesarrolloWeb.php");
                    }else if ($_GET["categoria"]=="MedAudVisuales") {
                        include("MedAudVisuales.php");
                    }else if ($_GET["categoria"]=="MantSoporteTecRyC") {
                        include("MantSoporteTecRyC.php");
                    }
                 ?>
               
            </div>
        </div>
        </div>
        </div>
    </section>

