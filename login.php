<?php 
	error_reporting(E_ALL);
	ini_set("display_errors", true);

	$titulo="Login";
	$subtit="";
	$active="login";
	$mensaje = "";

	$enlace = mysqli_connect("localhost", "root", "", "db_cyseth");
	if( isset($_POST[("txtusuario")], $_POST["txtpassword"]) ){ //verifico si las variables existen por el metodo post
		$usuario = trim($_POST["txtusuario"]);
		$password = md5(trim($_POST["txtpassword"]));
		$consulta="select t02id, t02usuario, t02nombre from t02usuarios where t02usuario='$usuario' and t02password='$password'";

		$resultado = mysqli_query($enlace, $consulta);
		$datos = mysqli_fetch_array($resultado);
			
		if(!empty($datos["t02id"]) ){
			session_start();
			$_SESSION["idusuario"]=$datos["t02id"];
			$_SESSION["usuario"]=$datos["t02usuario"];
			$_SESSION["propietario"]=$datos["t02nombre"];
			$mensaje="conexión exitosa";
			header("location: admin.php");
		}else{
			$mensaje="Datos Erroneos";
		}
	}

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
				<div class="jumbotron">
				  	<div class="panel-heading">
				    	<h1 class="panel-title">Ingreso a panel administrativo</h1>
				  	</div>
				  	<div class="panel-body">
				    	<form name="frmInicio" id="frmInicio" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
							  <div class="form-group">
							    <label for="txtusuario">Usuario: </label>
							    <input type="text" name="txtusuario" class="form-control" id="txtusuario" placeholder="Usuario" required>
							  </div>
							  <div class="form-group">
							    <label for="txtpassword">Contraseña: </label>
							    <input type="password" name="txtpassword" class="form-control" id="txtpassword" placeholder="Contraseña" required>
							  </div>
							  <button type="submit" class="btn btn-warning">Ingresar</button>
						</form>
						<h4><?php echo $mensaje ?></h4>
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
