<?php

$titulo="Eventos";
$subtit="";
$active="eventos_realizados";

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
                        <!-- Classic Heading -->
			            <br>
                        <div class="page-content">
                            <!-- Classic Heading -->
                            <br>
                            <h1 class="classic-title"><span><?php echo $titulo; ?></span></h1>
                                <?php
                                  $enlace = mysqli_connect("localhost", "root", "", "db_cyseth");
                                  $consulta = "select * from t07eventos";
                                  $resultado = mysqli_query($enlace, $consulta);
                                  while($datos = mysqli_fetch_array($resultado)){
                                ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $datos["t07id"]; ?>" class="collapsed">
                                                <i class="icon-down-open-1 control-icon"></i>
                                                <?php echo $datos["t07nombre"]; ?>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-<?php echo $datos["t07id"]; ?>" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <img class="img-thumbnail image-text" style="float:left; width:180px;" alt="" src="images/eventos/<?php echo $datos["t07imagen"]; ?>" /> 
                                            <p><strong>Lugar: </strong><?php echo $datos["t07lugar"]; ?></p>
                                            <p><strong>Fecha: </strong><?php echo $datos["t07fecha"]; ?></p>
                                            <p><strong>Descripción: </strong><?php echo $datos["t07descripcion"]; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                    }
                                ?>
                            </div>   
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
