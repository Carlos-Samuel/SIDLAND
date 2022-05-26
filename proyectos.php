<?php

$titulo="Proyectos";
$subtit="";
$active="proyectos";

include 'head.php';
?>

<body>
    <!-- Container -->
    <div id="container">
        <?php
            include 'hidden_header.php';
            include 'banner.php';
        ?>
		<!-- Start Content -->   
        <!-- Start Content -->
        <div id="content3">
            <div id="content">
                <div class="container">
                    <div class="row sidebar-page">              
                        <!-- Page Content -->
                        <div class="col-md-12 page-content">
                            <!-- Classic Heading -->
				            <br>
                            <h1 class="classic-title"><span><?php echo $titulo; ?></span></h1>
                                <?php
                                  $enlace = mysqli_connect("localhost", "root", "", "db_cyseth");
                                  $consulta = "select * from t03proyectos order by t03anio";
                                  $resultado = mysqli_query($enlace, $consulta);
                                  while($datos = mysqli_fetch_array($resultado)){
                                    $opc = $datos["t03estado"];
                                    $esta = "Activo";

                                    if($opc == 2){
                                        $esta = "Terminado";
                                    }
                                ?>
                                       <style type="text/css">  
                                        .let p {
                                            text-transform: lowercase;
                                        }

                                        .let p:first-letter {
                                            text-transform: uppercase;
                                        }
                                      </style>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $datos["t03id"]; ?>" class="collapsed">
                                                <i class="icon-down-open-1 control-icon"></i>
                                                <div class ="let"><p style="color:#000000"><?php echo $datos["t03nombre"]; ?></p></div>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-<?php echo $datos["t03id"]; ?>" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <img class="img-thumbnail image-text" style="float:left; width:180px;" alt="" src="images/proyectos/<?php echo $datos["t03imagen"]; ?>" /> 
                                            <p><strong>Línea de investigación: </strong><?php echo $datos["t03linea"]; ?></p>
                                            <p><strong>Area de enfoque: </strong><?php echo $datos["t03areadeenfoque"]; ?></p>
                                            <p><strong>Estado: </strong><?php echo $esta; ?></p>
                                            <p><strong>Año: </strong><?php echo $datos["t03anio"]; ?></p>
                                            <p><strong>Investigadores: </strong></p>
                                            <?php 
                                                $int = $datos["t03id"];
                                                $consulta2 = "select m.t01nombres, m.t01apellidos from t01miembros as m, t03_t01 as t where t.t01id = m.t01id and t.t03id = '$int'";
                                                $resultado2 = mysqli_query($enlace, $consulta2);
                                                $t = 1;
                                                while($datos2 = mysqli_fetch_array($resultado2)){
                                                    if($t==1){
                                                        $t = 2;
                                                    }else{
                                                        echo " --- ";
                                                    }
                                                    echo $datos2["t01nombres"];
                                                    echo " ";
                                                    echo $datos2["t01apellidos"];
                                            ?>
                                            <?php
                                                }
                                            ?>
                                            <br><br>
                                            <p><strong>Descripción: </strong><?php echo $datos["t03descripcion"]; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                    }
                                ?>
                            </div>  
                            <?php 
                                #include 'sidebar.php'
                            ?>                       
                        </div>
                        <!-- End Page Content-->

                    </div>
                </div>
            </div>
        </div>

            <!-- End Content -->
        <?php
            include 'footer.php'
        ?>
    </div>
    <!-- End Container -->
    <!-- Go To Top Link -->
    <a href="#" class="back-to-top"><i class="icon-up-open-1"></i></a>
    <div id="loader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</body>
</html>
