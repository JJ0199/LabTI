<?php
	class BaseDeDatos extends mysqli
	{
		/*private $servidor = '127.0.0.1';
		private $usuario = "sobrepeso";
		private $password = "sobrepeso";*/

		private $servidor = 'localhost';
		private $usuario = "root";
		private $password = "";

		
		private $basedatos = "monedas";


		public function conexion()
		{
			$conexion = mysqli_connect($this->servidor, $this->usuario, $this->password, $this->basedatos);

			return $conexion;
		}
	}
?>