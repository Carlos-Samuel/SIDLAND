
<?php
$titulo="Registro";
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
                        <!-- Classic Heading -->
                        <h4 class="classic-title"><span> Registro </span></h4>
                        <!-- Start Pre-registro Form -->
                        <div id="contact-form" class="contatct-form">
                            <div class="loader"></div>
                            <form action="ingresar.php" class="contactForm" name="cform" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="identificacion">Tipo Identificación<span class="required">*</span></label>
                                        <select class="form-control" name="identificacion">
                                            <option value="1">Cédula Ciudadania</option>
                                            <option value="2">Cédula Extranjera</option>
                                            <option value="3">Tarjeta de Identidad</option>
                                        </select>
                                        <br>
                                        <label for="ident">Número de Identificación<span class="required">*</span></label><br>
                                        <input id="ident" name="ident" type="number" value="" size="30" required/>
                                        <label for="name">Nombres<span class="required">*</span></label>
                                        <input id="name" name="name" type="text" value="" size="30" required>
                                        <label for="last1">Primer Apellido<span class="required">*</span></label>
                                        <input id="last" name="last1" type="text" value="" size="30" required>
                                        <label for="last2">Segundo Apellido<span class="required">*</span></label>
                                        <input id="last2" name="last2" type="text" value="" size="30" required>
                                        <label for="mail">Correo<span class="required">*</span></label>
                                        <input id="mail" name="email" type="text" value="" size="30" required/>
                                        <label for="phone">Teléfono<span class="required">*</span></label><br>
                                        <input id="phone" name="phone" type="number" value="" size="30" required/>
                                        <label for="sexo">Género<span class="required">*</span></label>
                                        <select class="form-control" name="sexo">
                                            <option value="Hombre">Hombre</option>
                                            <option value="Mujer">Mujer</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="sector">Tipo Inscripción<span class="required">*</span></label>
                                        <select class="form-control" name="Tipo_Inscrip">
                                            <option value="Estudiante Unillanos">Estudiante Universidad de los Llanos</option>
                                            <option value="Estudiante">Estudiante Otra Institución</option>
                                            <option value="Profesor Unillanos">Profesor Universidad de los Llanos</option>
                                            <option value="Egresado Unillanos">Egresado Universidad de los Llanos</option>
                                            <option value="Persona Externa">Persona Externa</option>
                                        </select>
                                        <br>
                                        <label for="entidad">Nombre Intitución<span class="required">*</span></label>
                                        <input id="entidad" name="entidad" type="text" value="" size="30" required>
                                        <label for="sector">Tipo Institución<span class="required">*</span></label>
                                        <select class="form-control" name="sector">
                                            <option value="Pública">Pública</option>
                                            <option value="Privada">Privada</option>
                                            <option value="Mixta">Mixta</option>
                                        </select>
                                        <br>
                                        <label for="Participacion">Tipo Participación<span class="required">*</span></label>
                                        <select class="form-control" name="participacion">
                                            <option value="1">Conferencista</option>
                                            <option value="2">Asistente Conferencias</option>
                                            <option value="3">Asistente Taller y Conferencias</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <!--label for="message">Perfil </label>
                                        <textarea id="message" name="message" cols="45" rows="10"></textarea-->
                                        <input type="submit" name="submit" class="button" id="submit_btn" value="Pre-Registro">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End Pre-registro Form -->
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
