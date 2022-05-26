<?php
$titulo="Contactanos";
$subtit="";
$active="Contactanos";


include 'head.php';
?>

<body>
    <!-- Container -->
    <div id="container">
        <?php
        include 'hidden_header.php';

        include 'banner.php';


        ?>

        <!-- Start Map -->
		<div id="map"></div>
    <script>
      var map;
      function initMap() {
  var myLatLng = {lat: 4.0723717, lng: -73.5836854};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 14,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!'
  });
}
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDx4-PRfSt0lCbO6Ey8ZKRq-gj89LZeHHU&callback=initMap"
    async defer></script>
		<!-- End Map -->

		<!-- Start Content -->
		<div id="content">
			<div class="container">
            	<div class="row">
                
                	<div class="col-md-8">
                        <div class ="container">
                            <div class= "jumbotron">
                                <img src="images/Gitecx.jpeg">
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        
                        <!-- Classic Heading -->
                    	<h4 class="classic-title"><span>Información</span></h4>

                        <!-- Some Info -->
                        <p>Sí desea puede enviar un correo o puede ir directamente a las oficinas, la cual se describe a continuación.</p>

                        <!-- Divider -->
                        <div class="hr1" style="margin-bottom:10px;"></div>

                        <!-- Info - Icons List -->
                        <ul class="icons-list">
                            <li><i class="icon-location-1"></i> <strong>Dirección:</strong> Villaviencio - Meta: Vereda Barcelona Km. 12 Vía Puerto López.</li>
                            <li><i class="icon-mail-1"></i> <strong>Email:</strong> cyseth@unillanos.edu.co</li>
                            <li><i class="icon-mobile-1"></i> <strong>Teléfono:</strong> +57 --</li>
                        </ul>

                        <!-- Divider -->
                        <div class="hr1" style="margin-bottom:15px;"></div>

                        <!-- Classic Heading -->
                        <h4 class="classic-title"><span>Horas de Trabajo</span></h4>

                        <!-- Info - List -->
                        <ul class="list-unstyled">
                            <li><i class="icon icon-time"></i> <strong>Lunes - Viernes</strong> - 8:00 am - 5:000 pm</li>
                            <li><i class="icon icon-time"></i> <strong>Sabados, Domingos y Festivos</strong> - Cerrado</li>
                        </ul>
                      
                    </div>
                  
                </div>
         
			</div>
		</div>
		<!-- End content -->



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
