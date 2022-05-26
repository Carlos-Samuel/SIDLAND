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
      <th class="conf">Nombre Ponencia</th>
      <th class="conf2">Evento</th>
      <th class="conf2">Lugar</th>
      <th class="conf2">Fecha</th>
      <th class="conf2">Tipo</th>
      <th class="conf2">Autor</th>
    </tr> 
    <?php
      $enlace = mysqli_connect("localhost", "root", "", "db_cyseth");
      $consulta = "SELECT t4.t04id, t4.t04nombre, t4.t04evento, t4.t04lugar, t4.t04tipo, t4.t04descripcion, t4.t04fecha, t1.t01nombres, t1.t01apellidos FROM t04ponencias as t4, t01miembros as t1 where t1.t01id = t4.t04autor";
      $resultado = mysqli_query($enlace, $consulta);
      while($datos = mysqli_fetch_array($resultado)){
    ?>
       <style type="text/css">  
        .let p {
            text-transform: lowercase;
        }

        .let p:first-letter {
            text-transform: uppercase;
        }
      </style>

    <tr>
      <td class="conf"><div class ="let"><p><?php echo $datos["t04nombre"]; ?></p></div></td>
      <td class="conf2"><div class ="let"><p><?php echo $datos["t04evento"]; ?></p></div></td>
      <td class="conf2"><div class ="let"><p><?php echo $datos["t04lugar"]; ?></p></div></td>
      <td class="conf2"><div class ="let"><p><?php echo $datos["t04fecha"]; ?></p></div></td>
      <td class="conf2"><div class ="let"><p><?php echo $datos["t04tipo"]; ?></p></div></td>
      <td class="conf2">
      <?php 
        $int = $datos["t04id"];
        $consulta2 = "select m.t01nombres, m.t01apellidos from t01miembros as m, t04_t01 as t where t.t01id = m.t01id and t.t04id = '$int'";
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
