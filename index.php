<html>
<head>
	<title> Clase 2 programacion 3	</title>
</head>
<body>
		Jonathan Aguirre
	
	<?php

	require_once "Alumno.php";
	include_once "Mascota.php";

/*
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
*/
		$arraynuevo = array(1,2,3,5);

		$arraynuevo[] = 66;
		$arraynuevo[2] = 666;
		 // USO DE FOREACH
		foreach ($arraynuevo as $num) 

		{
			echo "<br>" .$num ;
		}

		$producto = array("Coca cola"=> 20,"tostado" => 30,"pizza" => 40);

		echo "<br>".$producto["tostado"]."<br>";
		$arraynuevo["apellido"] = "Aguirre";
		$producto[2]= "NUMERO 2";
		var_dump($producto);
		echo "<br>";
		var_dump($arraynuevo);

											// USO OBJETOS Y ATRIBUTOS

		$miObjeto = new stdclass();
		$miObjeto->nombre = "Jonathan A";
		ECHO "<br>";
		var_dump($miObjeto);
		$miObjeto->producto = $producto;
		
		$arrayObjeto = array();
		$arrayObjeto["nombre"] = "Jonathan";
		$arrayObjeto["apellido"] = "Aguirre";
		$arrayObjeto["producto"] = $producto;
		var_dump($arrayObjeto);
		echo "<br>";
		var_dump($miObjeto);

//CREACION DE CLAE
		/*
 class Alumno{
// ATRIVUTOS DE LA CLASE
public $nombre;
public $apellido;



// NUEVO OBJETO DE LA CLASE

// METODO CONSTURCTOR
	function __construct(){


	}

	//NUEVO METODO
	public function Mostrar()
	 {
	 	echo "<br>";

	 	echo $this->nombre; 
	 	echo "<br>";
	 	echo $this->apellido;
	 }

	 public static function MostrarAlumno($unalumno){

	 	echo $unalumno->Mostrar();
	 }



}
*/
//CREACION DE OBJETO DE CLASE Y USO DE SUS ATRIVUTOS Y METODOS

$nuevoAlumno = new Alumno();
$nuevoAlumno->nombre = "Jonathan";
$nuevoAlumno->apellido = "Aguirre";
//$nuevoAlumno->Mostrar(); COMENTO PARA USAR EL ESTATICO DE ABAJO

// USO DE METODO ESTATICO
$nuevoAlumno::MostrarAlumno($nuevoAlumno);
	?>


</body>
</html>
