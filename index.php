<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="viewport" content="initial-scale=1.0">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="shortcut icon" href="imagenes/LOGO1.png" type="image/x-icon">
  <meta charset="utf-8">


  <title>REGISTRO DE ALUMNOS</title>
  
  <link rel="stylesheet" type="text/css" href="estilo.css">


<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<input type="submit" value="GENERAR REPORTES" onclick = "location='reportes.php'" style='width:170px; height:40px' align='right'>
<input type="submit" value="CERRAR SESION" onclick = "location='index.html'" style='width:170px; height:40px' align='right'>
<center><img src="imagenes/LOGO1.png" whith="180" height="180"></center>

<body background="imagenes/2.jpg" >


<h1 align="center">FORMULARIO DE INGRESO A LA SALA DE COMPUTO </h1>
<div class="form">
<table id="table" width="964" height="791" border="0" align="center" bordercolor="#F0F0F0">
<form action="alta.php" method="post" >
 
  <tr>
  
    <td width="187" height="89">NOMBRE:</div></td>
    <td width="767"><input  name="nombre" type="text" id="nombre" size="50" placeholder="Nombre(s) Del alumno" required></td>
  </tr>
  <tr>
    <td> APELLIDOS : </p>    </td>
    <td><b>
      <input name="apellidos" type="text" id="apellidos" value="" size="50" placeholder="apellidos" required>
    </b></td>
  </tr>
  <tr>
    <td>SEMESTRE:</div></td>
    <td>
      <label>
        <input name="semestre" type="text" id="semestre" placeholder="semestre(grado)" required>
      </label>
   
    </td>
  </tr>
 
  <tr>
    <td>GRUPO:</div></td>
    <td>
      <label>
        <input name="grupo" type="text" id="grupo" placeholder="Grupo(a,b,c,d,e,f...)" required>
      </label>
    
    </td>
  </tr>
  <tr>
    <td>ASESOR:</div></td>
    <td>
      <label>
        <input name="asesor" type="text" id="asesor"  placeholder="maestro a cargo" required>
      </label>
   
    </td>
  </tr>
  <tr>
    <td>FECHA:</div></td>
    <td>
      <label>
        <input name="fecha" type="date" id="fecha"  placeholder="dia/mes/año" required>
      </label>
   
    </td>
  </tr>
  <tr>
    <td>HORARIO:</div></td>
    <td>
      <label>
        <input name="horario" type="time" id="horario"  placeholder="por ejemplo 08:00 am" required>
      </label>
    
    </td>
  </tr>
  <tr>
    <td>TEMA DE LA CLASE: </div></td>
    <td>
      <label>
        <input name="tema" type="text" id="tema" size="40"  placeholder="tema de la clase" required>
      </label>
    
    </td>
  </tr>
</table>
<br>
 <br>
<center><br>

   <center>
     <input type="submit" value="Guardar" style='width:170px; height:40px'>

</form>
</div>

</center>

<br>
<br>

<font size="2" face="cursive"><p align="center" style="bottom:"> Esta Pagina fue Desarrollada Por Solucion Informatica Express Tapachula, Unica y Exclusivamente Para su uso dentro del COBACH plantel 08 Tapachula <br>
Queda estrictamente prohibido su Uso o Reproduccion con fines de Lucro...
</p></font>

</body>

</html>


