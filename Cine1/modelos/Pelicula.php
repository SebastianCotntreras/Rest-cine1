<?php  
require "../config/Conexion.php";

Class Pelicula{
	public function __construct(){

	}

	public function listar(){
		$sql = "SELECT p.idpelicula, s.nombre as local, p.nombre, p.horarios FROM pelicula p INNER JOIN sede s ON p.idsede=s.idsede";
		return ejecutarConsulta($sql);
	}
}

?>