<?php
    $enlace = mysqli_connect("localhost", "root", "", "db_cyseth");
    $titulo="Integrantes";
    $subtit="";
    $active="integrantes";


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
    <div id="content">
        <div class="container">
            <div class="row portfolio-page">
                <!-- Start Portfolio Filter -->
                <div class="portfolio-filter col-md-12">
                    <ul>
                        <li><a href="#" class="selected" data-filter="*">Todos</a></li>
                        <li><a href="#" data-filter=".est">Estudiantes</a></li>
                        <li><a href="#" data-filter=".prof">Profesores</a></li>

                    </ul>
                </div>
                <!-- End Portfolio Filter -->           
                <div id="portfolio" class="portfolio-2">
                    <!-- Start Portfolio Items -->
                        
                    <!-- Start Portfolio Item -->
                    <?php 
                            $consulta = "select * from t01miembros ORDER BY RAND()";
                            $resultado = mysqli_query($enlace, $consulta);
                            while($datos = mysqli_fetch_array($resultado)){
                                $opc = $datos["t01estado"];
                                $esta = "Profesor activo";

                                if($opc == 2){
                                    $esta = "Profesor inactivo";
                                }else if($opc == 3){
                                    $esta = "Estudiante activo";
                                }else if($opc == 4){
                                    $esta = "Estudiante inactivo";
                                }

                                if($opc==1 or $opc==2){
                    ?> 
                            <div class="portfolio-item prof animation col-md-6">
                                
                                <div class="portfolio-border">
                                    <!-- Start Portfolio Item Thumb -->
                                    
                                    <div class="portfolio-thumb">
                                        <div class="circulo">    
                                            <a class="lightbox" title="Este es la persona en seleccion" href="images\members\<?php echo $datos["t01foto"]; ?>">
                                            <br>
                                            <img alt="" src="images\members\<?php echo $datos["t01foto"]; ?>" width="200px" height="200px" />
                                            </a>
                                        </div>
                                    </div>

                                    <!-- End Portfolio Item Thumb -->

                                    <!-- Start Portfolio Item Details -->
                                    <style type="text/css">
                                        img{
                                            border: 10px solid #FFFFFF;
                                        }
                                    </style>
                                    <div class="portfolio-details">
                                            <table id="tablaDatos" class="table">
                                                <td class="textConfer">
                                                    <img src="images/icons/activo.png" alt="estado activo" width=68 height=68>
                                                </td>
                                                <td class="banderaimg"> 
                                                    <h4 style="color:#00BFFF"><?php echo $datos["t01nombres"]; ?> <?php echo $datos["t01apellidos"]; ?></h4>
                                                    <p style="color:#000000">Estado: <strong><?php echo $esta; ?></strong></p>
                                                    <p style="color:#000000">Correo: <strong><?php echo $datos["t01correo"]; ?></strong></p>
                                                    <a href="<?php echo $datos["t01CvLAC"]; ?>" target = "_blank" style="color:#DC143C"><strong>CvLAC</strong></a>
                                                    <a href="<?php echo $datos["t01GrupLAC"]; ?>" target = "_blank">  --  GrupLAC</a>
                                                </td>
                                            </table> 
                                            <p><strong><?php echo $datos["t01descripcion"] ?></strong></p> 
                                    </div>
                                    <!-- End Portfolio Item Details -->
                                </div>
                                    
                            </div>
                            <!-- End Portfolio Item -->
                        <?php 
                                }
                            }
                        ?>
                        <br>
                        <br>
                        <br>
                        <br>
                        <?php 
                            $consulta = "select * from t01miembros ORDER BY RAND()";
                            $resultado = mysqli_query($enlace, $consulta);
                            while($datos = mysqli_fetch_array($resultado)){
                                $opc = $datos["t01estado"];
                                $esta = "Profesor activo";
                                if($opc == 2){
                                    $esta = "Profesor inactivo";
                                }else if($opc == 3){
                                    $esta = "Estudiante activo";
                                }else if($opc == 4){
                                    $esta = "Estudiante inactivo";
                                }else if($opc == 5){
                                    $esta = "Profesional egresado";
                                }
                                if($opc==3||$opc==5){
                        ?>
                            <!-- Start Portfolio Item -->
                            <div class="portfolio-item est animation col-md-6">
                                        <div class="portfolio-border">
                                            <!-- Start Portfolio Item Thumb -->
                                            <div class="circulo">
                                                <div class="portfolio-thumb">
                                                    <a class="lightbox" title="Este es la persona en seleccion" href="images\members\<?php echo $datos["t01foto"]; ?>">
                                                        <div class="thumb-overlay"><i class=""></i></div>
                                                        <br>
                                                        <img alt="" src="images\members\<?php echo $datos["t01foto"]; ?>" width="200px" height="200px" />
                                                    </a>
                                                    </div>
                                                </div>
                                                <!-- End Portfolio Item Thumb -->
                                                <!-- Start Portfolio Item Details -->
                                                <div class="portfolio-details">
                                                    <table id="tablaDatos2" class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td class="textConfer">
                                                                    <?php 
                                                                        if($opc==3||$opc==5){
                                                                    ?>
                                                                        <img src="images/icons/activo.png" alt="estado activo" width=68 height=68>
                                                                    <?php
                                                                        }else{                                                               
                                                                    ?>
                                                                        <img src="images/icons/inactivo.png" alt="estado activo" width=68 height=68>
                                                                    <?php
                                                                        }
                                                                    ?>
                                                                </td>
                                                                <td class="banderaimg"> 
                                                                    <h4 style="color:#00BFFF"><?php echo $datos["t01nombres"]; ?> <?php echo $datos["t01apellidos"]; ?></h4>
                                                                    <p style="color:#000000">Estado: <strong><?php echo $esta; ?></strong></p>
                                                                    <p style="color:#000000">Correo: <strong><?php echo $datos["t01correo"]; ?></strong></p>
                                                                    <a href="<?php echo $datos["t01CvLAC"]; ?>" style="color:#DC143C"><strong>CvLAC</strong></a>
                                                                    <a href="<?php echo $datos["t01GrupLAC"]; ?>">  --  GrupLAC</a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table> 
                                                    <p><strong><?php echo $datos["t01descripcion"] ?></strong></p> 
                                            </div>
                                            <!-- End Portfolio Item Details -->
                                        </div>
                                    </div>
                                    <!-- End Portfolio Item -->
                        <?php 
                                }
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
