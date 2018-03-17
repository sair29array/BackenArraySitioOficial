<?php  ?>
<form method="POST" action=""> 
<div class="row justify-content-center text-center mb-2">
                <div class="col-12 col-md-9">
                    <h2 class="mt-5 mb-0 ">
                        <span class="banner-title">Diseño Gráfico Corporativo</span>
                    </h2>
                    
                    
                </div>

             
<?php if (!isset($_POST['continuar_'])  && !isset($_GET["solicitud"])){  ?>
                <div class="col-12 col-md-3 " >
                    <h3 class="mt-5 mb-0"></h3>
                     <button  type="submit" name="continuar_" class="btn boton-c btn-lg mb-5">Continuar <i class="fa fa-caret-right"></i></button>
                </div>
 <?php }else{
 	      if (isset($_SESSION["user_log"])){ 
 	      	if ($user_["empresa"] != "") {

 	?>
 				<div class="col-12 col-md-3 " >
                    <h3 class="mt-5 mb-0"></h3>
                     <button  type="submit" name="continuarsi" class="btn boton-c btn-lg mb-5">Si <i class="fa fa-caret-right"></i></button>
                      <button  type="submit" name="continuarno" class="btn boton-c btn-lg mb-5">No <i class="fa fa-caret-right"></i></button>
                </div>
 	<?php 
 			}else
 			{
 				?>
 				<div class="col-12 col-md-3 " >
                    <h3 class="mt-5 mb-0"></h3>
                     <button  type="submit" name="continuar_2" class="btn boton-c btn-lg mb-5">Continuar <i class="fa fa-caret-right"></i></button>

                </div>
 				<?php 
 			}
 		}
 }


  ?>
</div>

<div class="row py-3 align-items-center wow zoomIn" data-wow-delay="0.4s">
				<?php if (!isset($_POST['continuar_']) && !isset($_GET["solicitud"])){  ?>
                    <!--Grid column-->
                    <div class="col-md-12 col-lg-12 text-center  mt-3 mb-2">
                        <p class="mb-0 ">
                            <span class="title-rds">Nos gusta trabajar contigo para que tu empresa sea más productiva. Vamos a crear la imagen de tu empresa ya mismo.</span> <p class="blue-text">Selecciona lo que necesitas y luego da un clic en continuar.</p>
                            </>
                    </div>
                 <?php } ?>
                </div>