<?php  
require_once "../modelos/Pelicula.php";


$pelicula=new Pelicula();

$idpelicula=isset($_POST["idpelicula"])? limpiarCadena($_POST["idpelicula"]):"";
$idlocal=isset($_POST["local"])? limpiarCadena($_POST["local"]):"";
$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
$horarios=isset($_POST["horarios"])? limpiarCadena($_POST["horarios"]):"";

switch ($_GET["op"]){
	case 'listar':
		$rspta=$pelicula->listar();
		$data = Array();

		while($reg=$rspta->fetch_object()){
			$data []=array(
				"idpelicula"=>$reg->idpelicula,
				"local"=>$reg->local,
				"nombre"=>$reg->nombre,
				"horarios"=>$reg->horarios,
			);
		}
		echo json_encode($data);
	break;
}

?>