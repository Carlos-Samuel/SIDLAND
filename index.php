
<?php

$titulo="Inicio";
$subtit="";
$active="inicio";

include 'head.php';
?>

<body>

	<!-- Container -->
	<div id="container">
		
        <?php
        include 'hidden_header.php';


        include 'slide.php';

        ?>
        <!-- Start Content -->
        <div id="content">
            <div class="container">
            
                <!-- Start Services Icons -->
                <div class="row">
                
                    <!-- Start Service Icon 1 -->
                    <div class="col-md-4 service-box service-icon-left-more">
                        <div class="service-icon">
                            <img style="margin-right: 5px; margin-top: 50%" width=68 height=68 src="images/icons/home.png">
                        </div> 
                        <div class="service-content">
                            <h4>Cyseth</h4>
                            <p style="color:#002366">(CyberSecurity & Ethical Hacking) - Es un Semillero de Investigación en Computación y Teleinformática aplicadas a la Ciberseguridad, Que trabaja sobre la problemática de tratamiento seguro y protección de la información desde la perspectiva de Ingeniería; para proponer y desarrollar actividades de ciencia y tecnología a través de proyectos de investigación e innovación y actividades de proyección social.</p>
                        </div>
                    </div>
                    <!-- End Service Icon 1 -->
                    
                    <!-- Start Service Icon 2 -->
                    <div class="col-md-4 service-box service-icon-left-more">
                        <div class="service-icon">
                            <img style="margin-right: 5px; margin-top: 50%" width=68 height=68 src="images/icons/proyectos.png">
                        </div> 
                        <div class="service-content">
                            <h4>Proyectos</h4>
                            <p style="color:#002366">Cyseth se ha enfocado en la ejecución de proyectos de investigación enfocados en las áreas de telemática.</p>
                        </div>
                    </div>
                    <!-- End Service Icon 2 -->
                    
                    <!-- Start Service Icon 3 -->
                    <div class="col-md-4 service-box service-icon-left-more">
                        <div class="service-icon">
                            <img style="margin-right: 5px; margin-top: 50%;" width=68 height=68 src="images/icons/taller.png">
                        </div> 
                        <div class="service-content">
                            <h4>Productividad</h4>
                            <p style="color:#002366">Desde el semillero se han realizado diversas actividades, en las cuales se ha logrado tener a la fecha, 17 Artículos en revistas especializadas, 11 ponencias nacionales, 12 ponencias internacionales, 10 productos de software, 17 proyectos de investigación, 13 eventos realizados de los cuales 11 son propios y más de 30 trabajos de grado realizados. </p>
                        </div>
                    </div>
                    <!-- End Service Icon 3 -->
                    
                </div>
                <!-- End Services Icons -->
                
                <!-- Divider -->
                <div class="hr1" style="margin-top:15px; margin-bottom:15px;"></div>
                
                <!-- Divider -->
                <div class="hr1" style="margin-top:25px; margin-bottom:25px;"></div>
                
                <!-- Divider -->
                <div class="hr1" style="margin-top:25px; margin-bottom:30px;"></div>
                
                <!-- Start Clients Carousel -->
                <div class="our-clients">
                    
                    <!-- Classic Heading -->
                    <h4 class="classic-title"><span>Bajo el acompañamiento de</span></h4>
                    
                    <div class="clients-carousel custom-carousel touch-carousel" data-appeared-items="4">
                        <!-- Client 1 -->
                        <div class="item">
                            <a href="https://www.unillanos.edu.co/" target="_blank"><img src="images/pat/5.png" alt="Unillanos-page" width = "80%"/></a>
                        </div>
                        <!-- Client 2 -->
                        <div class="item">
                            <a href="http://fcbi.unillanos.edu.co/fcbi/" target="_blank"><img src="images/pat/1.png" alt="FCBI unillanos" width = "80%"/></a>
                        </div>
                        <!-- Client 3 -->
                        <div class="item">
                            <a href="https://www.unillanos.edu.co/microcurriculos/index.php?programa=39" target="_blank"><img src="images/pat/7.png" alt="Programa Ingenieria de sisteamas unillanos" width = "80%"/></a>
                        </div>
                        <!-- Client 4 -->
                        <div class="item">
                            <a href="http://gitecx.unillanos.edu.co/" target="_blank"><img src="images/pat/uni.jpg" alt="Grupo de investigacion GITECX" width = "80%"/></a>
                        </div>
                        <!-- Client 5 -->
                        <div class="item">
                            <a href="#" target="_blank"><img src="images/pat/4.png" alt="Semillero GLULL" width = "80%"/></a>
                        </div>
                        
                    </div>
                </div>
                <!-- End Clients Carousel -->
                                            
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
