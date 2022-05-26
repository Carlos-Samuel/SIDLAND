
                         <!-- Start Sidebar -->
                    <div class="col-md-3 sidebar right-sidebar">
                        
                            <!-- Search Widget -->
                            
                            <!-- Categories Widget -->
                            <div class="widget widget-categories">
                                <h4>Póster <span class="head-line"></span></h4>
                                <div class="portfolio-thumb">
                                    <a class="lightbox" href="images/poster-cyseth.jpeg">

                                    <img class="poster2" src="images/poster-cyseth.jpeg">
                                 </div>
                            </div>

                            <!-- Popular Posts widget -->
                            <div class="widget widget-popular-posts">
                                <h4>Integrantes<span class="head-line"></span></h4>
                                <ul>
                                <?php 
                                    $enlace = mysqli_connect("localhost", "root", "", "db_cyseth");

                                    $cont = 0;
                                    $consulta = "select * from t01miembros ORDER BY RAND()";
                                    $resultado = mysqli_query($enlace, $consulta);
                                    while($datos = mysqli_fetch_array($resultado)){
                                        $opc = $datos["t01estado"];
                                        $esta = "Profesor";

                                        if($opc == 2){
                                            $esta = "Profesor";
                                        }else if($opc == 3){
                                            $esta = "Estudiante";
                                        }
                                        if($opc<4){
                                            if($cont<5){
                                            $cont = $cont + 1;

                                ?>

                                    <li>
                                        <div class="widget-thumb">
                                            <a href="integrantes.php"><img src="images\members\<?php echo $datos["t01foto"]; ?>" alt="" /></a>
                                        </div>
                                        <div class="widget-content">
                                            <h5><a href="integrantes.php" style="color:black;"><?php echo $datos["t01nombres"]; ?> <?php echo $datos["t01apellidos"]; ?></a></h5>
                                            <span style="color:black;"><?php echo $esta; ?></span>
                                            <br>
                                            <!-- <span style="color:black;"><?php echo $datos["t01correo"]; ?></span> -->
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                <?php 
                                            }
                                        }
                                    }
                                ?>
                                </ul>

                            </div>              
                            
                            
                        </div>
                        <!-- End Sidebar -->
