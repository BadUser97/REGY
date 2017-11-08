
<body>

<?php
   

   $link=mysql_connect("localhost","root","root");
   $database=mysql_select_db("cobach",$link);
   mysql_query("insert into alumnos(nombre,apellidos,semestre,grupo,asesor,fecha,horario,tema)"."values('$nombre','$apellidos','$semestre','$grupo','$asesor','$fecha','$horario','$tema')",$link);

   


?>
<center><h1>!!!REGISTROS GUARDADOS CON EXITO¡¡¡¡</h1></center>
<center><img src="imagenes/1.jpg" whith="180" height="180"></center>
<center><h1>    <a href="index.php">INGRESAR NUEVOS DATOS</a> </center></h1>

</body>


