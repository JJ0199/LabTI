<?php 
	class metodos
	{
		
		public function VerDatos($sql)
		{
			$conex = new BaseDeDatos();
			$Conexion=$conex->Conexion();

			$otro = mysqli_query($Conexion, $sql);

			return mysqli_fetch_all($otro, MYSQLI_ASSOC);
		}

	}
 ?>