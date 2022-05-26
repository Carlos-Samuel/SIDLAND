<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="container">
  <table class="table table-responsive table-bordered responstable">
    <tr>
      <th class="conf2">Nombre</th>
      <th class="conf2">Lugar</th>
      <th class="conf2">Fecha</th>
      <th class="conf2">Descripcion</th>
    </tr> 
    <?php
      $enlace = mysqli_connect("localhost", "root", "", "db_cyseth");
      $consulta = "select * from t07eventos";
      $resultado = mysqli_query($enlace, $consulta);
      while($datos = mysqli_fetch_array($resultado)){
    ?>
    <tr>
      <td class="conf2"><?php echo $datos["t07nombre"]; ?></td>
      <td class="conf2"><?php echo $datos["t07lugar"]; ?></td>
      <td class="conf2"><?php echo $datos["t07fecha"]; ?></td>
      <td class="conf2"><?php echo $datos["t07descripcion"]; ?></td>
    </tr>
    <?php 
      }
    ?>
  </table>
</div>



  <script src='http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js'></script>

  
</body>
</html>
