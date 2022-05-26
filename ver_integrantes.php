<?php
error_reporting(E_ALL);
ini_set("display_errors", true);

$titulo="Admin";
$subtit="";
$active="ver_integra";

session_start();

if(isset($_SESSION["idusuario"], $_SESSION["usuario"], $_SESSION["propietario"])){
    $enlace = mysqli_connect("localhost", "root", "", "db_cyseth");
    $consulta = "select count(*) as total from t02usuarios where t02id = '{$_SESSION["idusuario"]}'";
    $resultado = mysqli_query($enlace, $consulta);
    $datos = mysqli_fetch_array($resultado);

    if( $datos["total"] > 0 ){
            if( isset($_GET["id"], $_GET["oper"]) ){
                if($_GET["oper"]=="delete"){
                    $consulta = "delete from t01miembros where t01id = {$_GET["id"]} ";
                    $resultado = mysqli_query($enlace, $consulta);
                    if(!$resultado){
                        echo mysqli_error($enlace);
                    }
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
                                    <br>
                        <h1 align="center">
                            Modulo de estudiantes
                        </h1>
                        <br>
                        <div id="container">
                            <br>
                            <div class="jumbotron">
                                <table id="tablaDatos" class="table table-striped table-bordered" >
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Correo</th>
                                            <th>Celular</th>
                                            <th>Foto</th>
                                            <th>Estado</th>
                                            <th>Operaciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $consulta = "select * from t01miembros";
                                        $resultado = mysqli_query($enlace, $consulta);
                                        while($datos = mysqli_fetch_array($resultado)){

                                            ?>
                                            <tr>
                                                <td><?php echo $datos["t01id"]; ?></td>
                                                <td><?php echo $datos["t01nombres"]; ?></td>
                                                <td><?php echo $datos["t01apellidos"]; ?></td>
                                                <td><?php echo $datos["t01correo"]; ?></td>
                                                <td><?php echo $datos["t01celular"]; ?></td>
                                                <td><?php echo $datos["t01foto"]; ?></td>
                                                 <td><?php echo $datos["t01estado"]; ?></td>
                                                <td>
                                                    <a href="modulo_integrantes.php?id=<?php echo $datos["t01id"]; ?>"><span style="color:green" aria-hidden="true" title="Editar"></span>Edt </a>

                                                    <span aria-hidden="true" title="Borrar" style="color:red" onclick="Borrar(<?php echo $datos["t01id"]; ?>);" text-align="Right">Bor</span>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>                            
                            </div>
                        </div>
                <!-- End Content -->
                <?php
                include 'footer2.php'
                ?>
            </div>
            <!-- End Container -->
        <!-- jQuery -->
        <script src="js/jquery-2.2.4.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="bootstrap-4.1.3/dist/js/bootstrap.min.js" ></script>
        <!-- DataTable -->
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.bootstrap.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#tablaDatos').DataTable({
                    "language": {
                        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                    }
                });

            });

            function Borrar(codigo){
                if( confirm("Realmente desea borrar el registro con código " + codigo) ){
                    window.location="<?php echo $_SERVER["PHP_SELF"] ?>?id=" + codigo + "&oper=delete";
                }
            }
        </script>   
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