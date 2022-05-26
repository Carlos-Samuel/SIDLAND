<?php
error_reporting(E_ALL);
ini_set("display_errors", true);

$titulo="admin";
$subtit="";
$active="admin";

session_start();

if(isset($_SESSION["idusuario"], $_SESSION["usuario"], $_SESSION["propietario"])){
    $enlace = mysqli_connect("localhost", "root", "", "db_cyseth");
    $consulta = "select count(*) as total from t02usuarios where t02id = '{$_SESSION["idusuario"]}'";
    $resultado = mysqli_query($enlace, $consulta);
    $datos = mysqli_fetch_array($resultado);

    if( $datos["total"] > 0 ){
          
        include 'head.php';
        ?>

        <body>

            <!-- Container -->
            <div id="container">
                
                <?php
                include 'hidden_header2.php';

                ?>
                <!-- Start Content -->
                <div id="content">
                    
                    <div class="container">
                        <h1>Bienvenido al modulo administrativo de la pagina de Cyseth</h1>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
                <!-- End Content -->
                <?php
                include 'footer2.php'
                ?>
            </div>
            <!-- End Container -->
            
        </body>
        </html>
<?php
    }else{
        header("location: logout.php");
    }
}else{
    header("location: logout.php");
}
?>