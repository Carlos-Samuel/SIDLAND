<?php

$titulo="Seminarios";
$subtit="";
$active="seminarios";

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
			            <br>
                        <h1 class="classic-title"><span>Seminarios</span></h1>
                        <iframe src="tablas/seminarios.html" frameborder="0" style="overflow:hidden;height:2000px;width:100%" height="2000px" width="100%"></iframe>   
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
