<?php

$titulo="Call Of Papers";
$subtit="";
$active="Autores";

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
                        <div class="col-md-9 page-content">
                        
                            <!-- Classic Heading -->
				<br>
                            <h1 class="classic-title"><span>Conferencias</span></h1>
                            
				<div><img alt="" src="\cta\images\call.jpg"></div>


                            
                            
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
