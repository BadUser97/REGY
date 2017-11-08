<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 <meta name="viewport" content="initial-scale=1.0">

  <title>GENERACION DE REPORTES</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">

</head>
<input type="submit" value="REGRESAR AL INICIO" onclick = "location='index.php'" style='width:170px; height:40px' align='right'>
<center><img src="imagenes/LOGO1.png" whith="180" height="180"></center>

<body background="imagenes/2.jpg" >
<h1 align="center">GENERACION DE REPORTES</h1>

<div class="busqueda">
<br>
<br>
<center>
<form>
  <h1>Busqueda por Fecha</h1>
    Fecha comienzo:
    <input type="date" id="start_date" name="start_date" value="" placeholder="mm/dd/yyyy"> 
    Fecha final:
    <input type="date" id="end_date" name="end_date" value="" placeholder="mm/dd/yyyy">
    Fecha:
    <input type="hidden" id="form_sent" name="form_sent" value="true">
    <input type="submit" id="btn_submit" value="Enviar">
    
</form>
<br>
<?php if (isset($_GET['form_sent']) && $_GET['form_sent'] == "true") {?>

<?php include_once('connect.php');?>
<?php
    $SDATE = $_GET['start_date'];
    $SSDATE = explode('/', $SDATE);
    $START_DATE = $SSDATE[2]."-".$SSDATE[0]."-".$SSDATE[1];
    echo('<h3>'.$START_DATE.'</h3>');
    
    $EDATE = $_GET['end_date'];
    $EEDATE = explode('/', $EDATE);
    $END_DATE = $EEDATE[2]."-".$EEDATE[0]."-".$EEDATE[1];
    echo('<h3>'.$END_DATE.'</h3>');
    
    
   
    
  $strsql = "SELECT * FROM alumnos WHERE fecha BETWEEN '$START_DATE' AND '$END_DATE'";
  $rs = mysql_query($strsql) or die(mysql_error());
  $row = mysql_fetch_assoc($rs);

  $total_rows = mysql_num_rows($rs);
  print_r($row);
?>


<table width="800" border="0" cellspacing="0" cellpadding="2">
    <tr>
        <td>Nombre</td>
        <td>Apellidos</td>
        <td>Semestre</td>
		<td>Grupo</td>
		<td>Asesor</td>
		<td>Fecha</td>
		<td>Horario</td>
	    <td>Tema</td>
		
		 
    </tr>


<?php if ($total_rows > 0) {
        do {
?>
    <tr>
        <td><?php echo($row['nombre']); ?></td>
        <td><?php echo($row['apellidos']); ?></td>
        <td><?php echo($row['semestre']); ?></td>
		<td><?php echo($row['grupo']); ?></td>
		<td><?php echo($row['asesor']); ?></td>
		<td><?php echo($row['fecha']); ?></td>
		<td><?php echo($row['horario']); ?></td>
		<td><?php echo($row['tema']); ?></td>
		
    </tr>




<?php


        } while ( $row = mysql_fetch_assoc($rs) );
        mysql_free_result($rs);
    } else {
?>
    <tr>
        <td colspan="3">No data found.</td>
    </tr>

<?php } ?>
</table>
<?php } ?>

</div>
</center>


</p>
<br>
<br>
<br>
<br>


</body>
</html>
