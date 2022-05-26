<?php
	$contador=0;
	$db = pg_connect("host=localhost port=5432 dbname=bdcargasprueba user=CTA password=linux.gitecx");
	$query = "INSERT INTO cta_institucion (nombre_institucion,sector) VALUES ('$_POST[entidad]','$_POST[sector]')";
	$result = pg_query($query);
	$query = "SELECT currval('cta_id_institucion')";
	$resultados = pg_query($query);
	while ($line = pg_fetch_array($resultados, null, PGSQL_ASSOC)) {
    foreach ($line as $col_value) {
        echo $col_value;
        $contador=$col_value;
    	}
	}
	$fecha=date("Y-m-d H:i:s");
	$query = "INSERT INTO cta_personas (numero_identificacion,nombres,apellido1,apellido2,correo,telefono,fecha,sexo,perfil,id_institucion,id_identificacion) VALUES ('$_POST[ident]','$_POST[name]','$_POST[last1]','$_POST[last2]','$_POST[email]','$_POST[phone]','".$fecha."','$_POST[sexo]','','".$contador."','$_POST[identificacion]')";
	$result = pg_query($query);
	$query = "INSERT INTO cta_participantes(id_version,numero_identificacion,id_participacion,pago,inscripcion) VALUES (1,'$_POST[ident]','$_POST[participacion]',0,'$_POST[Tipo_Inscrip]')";
	$result = pg_query($query);
	header("Location:inversion.php")
?>
