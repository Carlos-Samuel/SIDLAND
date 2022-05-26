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
      <th class="conf">Nombre Artículo</th>
      <th class="conf">Revista</th>
      <th class="conf2">País</th>
      <th class="conf2">Año de publicación</th>
    </tr> 
    <?php
      $enlace = mysqli_connect("localhost", "root", "", "db_cyseth");
      $consulta = "select * from t05revistas";
      $resultado = mysqli_query($enlace, $consulta);
      while($datos = mysqli_fetch_array($resultado)){
    ?>
    <tr>
      <td class="conf"><div class ="let"><p><?php echo $datos["t05nombre"]; ?></p></div></td>
      <td class="conf"><div class ="let"><p><?php echo $datos["t05revista"]; ?></p></div></td>
      <td class="conf2"><div class ="let"><p><?php echo $datos["t05lugar"]; ?></p></div></td>
      <td class="conf2"><div class ="let"><p><?php echo $datos["t05anio"]; ?></p></div></td>
      <?php 
      /*
        $int = $datos["t05id"];
        $consulta2 = "select m.t01nombres, m.t01apellidos from t01miembros as m, t05_t01 as t where t.t01id = m.t01id and t.t05id = '$int'";
        $resultado2 = mysqli_query($enlace, $consulta2);
        while($datos2 = mysqli_fetch_array($resultado2)){
          echo $datos2["t01nombres"];
          echo " ";
          echo $datos2["t01apellidos"];
          ?>
          <br>
          <?php
        }
        */
      ?>
    </tr>
    <?php 
      }
    ?>
  </table>
</div>



  <script src='http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js'></script>

  
</body>
</html>
