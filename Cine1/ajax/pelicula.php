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
				"0"=>$reg->idpelicula,
				"1"=>$reg->local,
				"2"=>$reg->nombre,
				"3"=>$reg->horarios,
			);
		}
		echo json_encode($data);
	break;
}

?>