<html>
<head>
	<title> Clase 2 programacion 3	</title>
</head>
<body>
		Jonathan Aguirre
	
	<?php


	echo "<h1> Jonathan  </h1>";    //DENTRO DE LOS COMENTARIOS PHP SE PUEDE ESCRIBIR HTML
			$nombre = "Jonathan";
	  
	   echo $nombre;          //LAS VARIABLES EN PHP NO SON DE NINGUN TIPO. TODAS LAS VARIABLES LLEVAN SIGNO PESOS 
		
		echo "<h1>" .$nombre. "</h1>"; // CONCATENO HTML CON PHP

		$numero = 33;


		if($numero < 18) // USO DE IF
		{

		print("Es menor de edad");

		}
		else
		{

			print("es mayor de edad");
		}

		$arraynuevo = array(1,2,3,5);

		$arraynuevo[] = 66;
		$arraynuevo[2] = 666;
		foreach ($arraynuevo as $num) 

		{
			echo "<br>" .$num ;
		}

	?>


</body>
</html>
