<?php

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

?>