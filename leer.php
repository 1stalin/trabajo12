

	<?php

	

	$arrayEstudiantes = array ( 'Javier' , 'Jean' , 'Ricardo' , 'Juan' , 'Edy' , 'Cecilia' , 'Brigith' );
	print( "<h1 align='center'style='background-color:#85C1E9'>Lista de Estudiantes del 5B UNL     </h1> " );
	echo ( '<table align="center" border=1 style="background:#F2F5A9">' );
	echo  '<tr align="center" border=1 style="background: #A9BCF5; ">';
	echo  '<th>Cedula</th>' ; 
	echo  '<th>Apellido</th>' ;  
	echo  '<th>Nombre</th>' ;
	echo  '<th>Celular</th>' ;
	echo  '<th>Area</th>' ;
	echo  '</tr>' ;

	if (file_exists('Estudiantes.xml')) {
		$xml = simplexml_load_file('Estudiantes.xml');
		foreach ($xml->estudiante as $key0 => $estu) {
			echo '<tr>';
			echo '<td>' .$estu->cedula.'</td>';
			echo '<td>' .$estu->apellido.'</td>';
			echo '<td>' .$estu->nombre.'</td>';
			echo '<td>' .$estu->celular.'</td>';
			echo '<td>' .$estu->area.'</td>';
			echo '</tr>';
			// code...
		}
	}else{
		exit('No se puede abrir xml');
	}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <LINK REL="stylesheet" TYPE="text/css" HREF="video.css">
</head>



<body style="background-color:#D0F5A9">

	<center>
  <video src="video2.mp4" autoplay loop muted width="1000" height="1000" >
   
 </video>
 </center>
   
</body>
</html>
