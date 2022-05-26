
<?php
$titulo="Inversión";
$subtit="";
$active="Inscripción";


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
                <div class="row sidebar-page">
                    <!-- Page Content -->
                    <div class="col-md-9 page-content">
                        <!-- Start Single Post Area -->
                        <div class="blog-post gallery-post">
                            <!-- Start Single Post Content -->
                            <div class="post-content">
                                <div class="post-type"><i class="icon-lightbulb"></i></div>
                                <h2>Inscripciones</h2>
                            </div> 
                            <!-- End Single Post Content -->
                        </div>
                        <!-- End Single Post Area -->

                        <!-- Classic Heading -->
                        <h4 class="classic-title"><span>Costos Congreso Asistente Ponencias</span></h4>
                        <!-- Start Post -->
                        <div class="blog-post image-post">
                            <!-- Post Content -->
                            <div class="post-content">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-condensed">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Tipo</th>
                                                <th>Costo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Estudiante Unillanos</td>
                                                <td>5.000</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Profesor Unillanos</td>
                                                <td>10.000</td>
                                            </tr>
					    <tr>
                                                <td>3</td>
                                                <td>Estudiante Otra Institución</td>
                                                <td>15.000</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Egresados Unillanos</td>
                                                <td>15.000</td>
                                            </tr>
						
					     <tr>
                                                <td>5</td>
                                                <td>Taller y conferencias</td>
                                                <td>20.000</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Persona Externa</td>
                                                <td>30.000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- End Post -->
                        <br>
                        <!--h4 class="classic-title"><span>Costo Congreso Asistente a Taller</span></h4>
                        <!-- Start Post -->
                        <!--div class="blog-post image-post">
                            <!-- Post Content -->
                            <!--div class="post-content">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-condensed">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Tipo</th>
                                                <th>Costo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Estudiante Unillanos</td>
                                                <td>20.000</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Estudiante Otra Institución</td>
                                                <td>20.000</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Profesor Unillanos</td>
                                                <td>20.000</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Egresados Unillanos</td>
                                                <td>20.000</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Persona Externa</td>
                                                <td>20.000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- End Post -->
                        <h4 class="classic-title"><span>Forma de Pago</span></h4>
                        <!-- Start Post -->
                        <div class="blog-post image-post">
                            <!-- Post Content -->
                            <div class="post-content">
                                <ul class="icons-list">
                                    <li><i class="fa fa-money"></i><strong>- Unidad de Tesorería</strong>, Sede Barcelona, Universidad de los Llanos.</li>
                                    <li><i class="fa fa-money"></i><strong>- Banco de Bogotá</strong>, formato de consignación <u>“Sistema Nacional de Recaudos Comprobante de Pago Universal Individual”</u>, cuenta de ahorros <strong>No. 36410663 - 3</strong>, a nombre de la Universidad de los Llanos. <strong>Referencia 1:</strong> <u>Centro de Costos No. 5760101.</u> <strong>Referencia 2:</strong> <u>Número de documento de identificación del participante.</u></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Post -->
                        <!-- Start Post -->
                        <div class="blog-post image-post">
                            <!-- Post Content -->
                            <div class="post-content">
                                <p><h2>Una vez realizado el pago por medio de la consignación, debe dirigirse al segundo piso de la Facultad de Ciencias Básicas e Ingeniería en la Universidad de los Llanos Sede Barcelona y comunicarse con la secretaría de Escuela, con recibo de pago <u>(Copia y Original)</u> para formalizar la inscripción o puede enviar un correo con el pago a  (gitecx@unillanos.edu.co), (Si es estudiante, egresado o profesor unillanos enviar fotocopia del carnet).</h2></p><br><br>
                                <p><h2> Recordar que para entrar a un taller tiene un costo de 20.000 y debe enviar un correo con el nombre del taller al cual desea participar (cupos limitados), además se otorga el ingreso directo a las conferencias. </h2></p>
                            </div>
                            <div class="post-head">
                                <a class="lightbox" title="como llenar el recaudo" href="images/recaudo2.jpg">
                                    <div class="thumb-overlay"><i class="icon-resize-full"></i></div>
                                    <img alt="" src="images/recaudo2.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Page Content-->

                    <!--Sidebar-->
                    	<?php 

                            include 'sidebar.php'

                         ?>
                    <!--End sidebar-->
                </div>
            </div>
        </div>
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
