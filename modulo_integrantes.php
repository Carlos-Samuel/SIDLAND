<?php
error_reporting(E_ALL);
ini_set("display_errors", true);

$titulo="Admin";
$subtit="";
$active="integra";

session_start();

if(isset($_SESSION["idusuario"], $_SESSION["usuario"], $_SESSION["propietario"])){
    $enlace = mysqli_connect("localhost", "root", "", "db_cyseth");
    $consulta = "select count(*) as total from t02usuarios where t02id = '{$_SESSION["idusuario"]}'";
    $resultado = mysqli_query($enlace, $consulta);
    $datos = mysqli_fetch_array($resultado);

    if( $datos["total"] > 0 ){
        if(isset($_POST["t01nombres"], $_POST["t01apellidos"], $_POST["t01descripcion"], $_POST["t01correo"], $_POST["t01celular"], $_POST["t01foto"], $_POST["t01estado"])){

            $id = $_POST["t01id"];
            $nombre = $_POST["t01nombres"];
            $apellidos = $_POST["t01apellidos"];
            $descripcion = $_POST["t01descripcion"];
            $correo = $_POST["t01correo"];
            $celular = $_POST["t01celular"];
            $foto = $_POST["t01foto"];
            $estado = $_POST["t01estado"];


            if(empty($id)){
                //crear integrante
                $consulta = "INSERT INTO `t01miembros` ( `t01nombres`, `t01apellidos`, `t01descripcion`, `t01correo`, `t01celular`, `t01foto`, `t01estado`) VALUES ('$nombre', '$apellidos', '$descripcion', '$correo', '$celular', '$foto', '$estado')";
                $resultado = mysqli_query($enlace, $consulta);
                header("location: ver_integrantes.php?$consulta");
                exit();
            }
            else{
                $consulta = "update t01miembros set t01id = '$id', t01nombres = '$nombre', t01apellidos = '$apellidos', t01descripcion = '$descripcion', t01correo = '$correo', t01celular = '$celular', t01foto = '$foto', t01estado = '$estado'
                             where t01id =  $id";
                $resultado = mysqli_query($enlace, $consulta);
                header("location: ver_integrantes.php");
                exit();          

            }
        }
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
                        <br>
                        <div class="well">
                            <h1 align="center">
                                 Modulo de Integrantes
                            </h1>
                        </div>
                        <br>
                        <div class="row">
                            <?php 
                            if(isset($_GET["id"])){
                                //voy a editar
                                $consulta = "select * from t01miembros where t01id = '{$_GET["id"]}' ";
                                $resultado = mysqli_query($enlace, $consulta);
                                $datos = mysqli_fetch_array($resultado);        
                            }
                            else{
                                //nuevo registro
                                $datos["t01id"] = null;
                                $datos["t01nombres"] = null;
                                $datos["t01apellidos"] = null;
                                $datos["t01descripcion"] = null;
                                $datos["t01correo"] = null;
                                $datos["t01celular"] = null;
                                $datos["t01foto"] = null;
                                $datos["t01estado"] = null;
                            }
                            ?>
                            <div class="col-md-12">
                                <div class="jumbotron">
                                    <div class="panel-body">
                                        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" name="frmDatos" id="frmDatos">
                                            <div class="form-group">
                                                <label for="t01nombres">Nombres:</label>
                                                <input type="text" class="form-control" id="t01nombres" name="t01nombres" placeholder="Nombres del integrante" value="<?php echo $datos["t01nombres"]; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="t01apellidos">Apellidos:</label>
                                                <input type="text" class="form-control" id="t01apellidos" name="t01apellidos" placeholder="Apellidos del integrante" value="<?php echo $datos["t01apellidos"]; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="t01descripcion">Descripción:</label>
                                                <input type="text" class="form-control" id="t01descripcion" name="t01descripcion" placeholder="Descripción del integrante" value="<?php echo $datos["t01descripcion"]; ?>" required>
                                            </div>        
                                            <div class="form-group">
                                                <label for="t01correo">Correo:</label>
                                                <input type="mail" class="form-control" id="t01correo" name="t01correo" placeholder="Correo del integrante" value="<?php echo $datos["t01correo"]; ?>" required>
                                            </div>     
                                            <div class="form-group">
                                                <label for="t01celular">Celular:</label>
                                                <input type="number" class="form-control" id="t01celular" name="t01celular" placeholder="Celular del integrante" value="<?php echo $datos["t01celular"]; ?>" required>
                                            </div>          
                                            <div class="form-group">
                                                <label for="t01foto">Foto:</label>
                                                <input type="text" class="form-control" id="t01foto" name="t01foto" placeholder="Foto del integrante" value="<?php echo $datos["t01foto"]; ?>" required>
                                            </div>  
                                            <div class="form-group">
                                                <label for="t01estado">Estado:</label>
                                                <input type="number" class="form-control" id="t01estado" name="t01estado" placeholder="Estado del integrante" value="<?php echo $datos["t01estado"]; ?>" required>
                                            </div>  
                                            <input type="hidden" name="t01id" value="<?php echo $datos["t01id"]; ?>">
                                            <button type="submit" class="btn btn-success">Guardar</button>
                                            <a class="btn btn-danger" role="button" href="ver_integrantes.php">Cancelar</a>
                                        </form>
                                                                        
                                    </div>
                                </div>
                            </div>
                        </div>
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