<?php 
$users=$sair->mostrar_usuarios_array();
$nu = 0; // numeor total de users
foreach ($users as $n) {
    $nu = $nu +1;
}
 ?>

            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header">Usuarios Array / Datos personales</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Total usuarios registrados:  <?php echo $nu; ?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover table-responsive"  id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>CC</th>
                                            <th>Nombre completo</th>
                                            <th>Departamento/ciudad</th>
                                            <th>Empresa</th>
                                            <th>Nit</th>
                                            <th>Email</th>
                                            <th>Celular</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php 
                                        foreach ($users as $user) {
                                            if ($user['cedula']=="") {$mcedula = "No";}else{$mcedula = $user['cedula']; }
                                            $nombre_apellidos = $user['nombres']." ".$user['apellidos'];
                                            if ($user['departamento_ciudad']=="") {$mdeciudad="No";}else{$mdeciudad=$user['departamento_ciudad'];}
                                            if ($user['empresa']=="") {$mempresa = "No"; $mnit="No";}else{$mempresa=$user['empresa']; $mnit =$user['nit_empresa'];}
                                            if ($user['celular']=="") {$mcelu = "No";}else{$mcelu =$user['celular'];}
                                            ?>
                                            <tr class="odd gradeX">
                                            <td><?php echo strtoupper($mcedula); ?></td>
                                            <td><?php echo strtoupper($nombre_apellidos) ; ?></td>
                                            <td><?php echo strtoupper($mdeciudad) ; ?></td>
                                            <td class="center"><?php echo strtoupper($mempresa) ; ?></td>
                                            <td class="center"><?php echo strtoupper($mnit) ; ?></td>
                                            <td class="center"><?php echo strtoupper($user['email']) ; ?></td>
                                            <td class="center"><?php echo strtoupper($mcelu) ; ?></td>
                                            </tr>
                                            <?php 
                                        }
                                         ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            <!--div class="well">
                                <h4>DataTables Usage Information</h4>
                                <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                                <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                            </div-->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
    

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

  

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

