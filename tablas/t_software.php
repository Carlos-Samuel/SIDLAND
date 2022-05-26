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
      <th class="conf3">Año</th>
      <th class="conf">Descripcion</th>
      <th class="conf">Equipo</th>
    </tr> 
    <?php
      $enlace = mysqli_connect("localhost", "root", "", "db_cyseth");
      $consulta = "select * from t06software";
      $resultado = mysqli_query($enlace, $consulta);
      while($datos = mysqli_fetch_array($resultado)){
    ?>
    <tr>
      <td class="conf2"><?php echo $datos["t06nombre"]; ?></td>
      <td class="conf3"><?php echo $datos["t06anio"]; ?></td>
      <td class="conf"><?php echo $datos["t06descripcion"]; ?></td>
      <td class="conf">
      <?php 
        $int = $datos["t06id"];
        $consulta2 = "select m.t01nombres, m.t01apellidos from t01miembros as m, t06_t01 as t where t.t01id = m.t01id and t.t06id = '$int'";
        $resultado2 = mysqli_query($enlace, $consulta2);
        while($datos2 = mysqli_fetch_array($resultado2)){
          echo $datos2["t01nombres"];
          echo " ";
          echo $datos2["t01apellidos"];
      ?>
          <br>
      <?php
        }
      ?>
      </td>
    </tr>
    <?php 
      }
    ?>
  </table>
</div>



  <script src='http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js'></script>

  
</body>
</html>
