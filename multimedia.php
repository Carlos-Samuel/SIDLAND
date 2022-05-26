<?php

$titulo="Multimedia";
$subtit="";
$active="multimedia";

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
        <div id="content2">
		<div id="content">
			<div class="container">
				<div class="page-content">
              
                	
                    <div class="row">
                  
                        <div class="col-md-9">
                          
                            <!-- Classic Heading -->
                            <h4 class="classic-title" style="color:#00BFFF"><span>Fotos Cyseth</span></h4>
                          
                            <!-- Some Text -->
                            <p style="color:#002366"><font size=4>En esta sección encontrarás una galería de imágenes de las actividades en general realizadas por el semillero Cyseth.</font></p>
                        </div>
                        <div class="col-md-3">
                            <!-- Start Touch Slider -->
                        	<div class="touch-slider" data-slider-navigation="true" data-slider-pagination="true" >
                                <div class="item">
                                    <img alt="" src="images\cyseth1.jpeg" data-bgposition="center center" width="300" height="180">
                                </div>
                                <div class="item">
                                    <img alt="" src="images\cyseth.jpeg" data-bgposition="center center" width="300" height="180">
                                </div>
                                <div class="item">
                                    <img alt="" src="images\cyseth2.jpeg" data-bgposition="center center" width="300" height="180">
                                </div>
                                <div class="item">
                                    <img alt="" src="images\cyseth3.jpeg" data-bgposition="center center" width="300" height="180">
                                </div>
                                <div class="item">
                                    <img alt="" src="images\cyseth4.jpeg" data-bgposition="center center" width="300" height="180">
                                </div>
                                <div class="item">
                                    <img alt="" src="images\cyseth5.jpeg" data-bgposition="center center" width="300" height="180">
                                </div>
                            </div>
                            <!-- End Touch Slider -->
                        </div>
                    </div>
                    <!-- End Clients Carousel -->
				</div>
			</div>
		</div>
        </div>
		<!-- End content -->







       <!-- Start Content -->
        <div id="content3">
            <div id="content">
                <div class="container">
                    <div class="row sidebar-page">
                        <!-- Page Content -->
                        <div class="col-md-9 page-content">
                            <div class ="jumbotron">
                                <h3>Galeria de fotos de Cyseth</h3>
                                <br>
                                    <a class="lightbox" href="images/media/cyseth1.jpeg">
                                    <img alt="" src="images/media/cyseth1.jpeg" data-bgposition="center center" width="170" height="90">
                                    <a class="lightbox" href="images/media/nosotros.jpeg">
                                    <img alt="" src="images/media/nosotros.jpeg" data-bgposition="center center" width="170" height="90">
                                    <a class="lightbox" href="images/media/miembros.jpeg">
                                    <img alt="" src="images/media/miembros.jpeg" data-bgposition="center center" width="170" height="90">
                                    <a class="lightbox" href="images/media/cyseth.jpeg">
                                    <img alt="" src="images/media/cyseth.jpeg" data-bgposition="center center" width="170" height="90">
                                    <br>
                                    <br>
                                    
                                    <a class="lightbox" href="images/media/cyseth2.jpeg">
                                    <img alt="" src="images/media/cyseth2.jpeg" data-bgposition="center center" width="170" height="90">
                                    <a class="lightbox" href="images/media/cyseth3.jpeg">
                                    <img alt="" src="images/media/cyseth3.jpeg" data-bgposition="center center" width="170" height="90">
                                    <a class="lightbox" href="images/media/cyseth4.jpeg">
                                    <img alt="" src="images/media/cyseth4.jpeg" data-bgposition="center center" width="170" height="90">
                                    <a class="lightbox" href="images/media/cyseth5.jpeg">
                                    <img alt="" src="images/media/cyseth5.jpeg" data-bgposition="center center" width="170" height="90">
                                    <br>
                                    <br>

                                    <a class="lightbox" href="images/media/Gitecx.jpeg">
                                    <img alt="" src="images/media/Gitecx.jpeg" data-bgposition="center center" width="170" height="90">                               
                            </div>
                        </div>
                        <!-- End Page Content-->
                        <?php 
                            include 'sidebar.php'
                        ?>
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
