<?php
include_once("connection.php");

if(!empty($data['municipi'])){
	$municipi = $data['municipi'];
}
if(!empty($data['provincia'])){
	$provincia = $data['provincia'];
}
if(!empty($data['station_id'])){
	$station_id = $data['station_id'];
}
if(!empty($data['id'])){
	$id = $data['id'];
}
if(!empty($data['codiprov'])){
	$codiprov = $data['codiprov'];
}
if(!empty($data['promotor_gestor'])){
	$promotor_gestor = $data['promotor_gestor'];
}
if(!empty($data['acces'])){
	$acces = $data['acces'];
}
if(!empty($data['tipus'])){
	$tipus = $data['tipus'];
}
if(!empty($data['tipus_velocitat'])){
	$tipus_velocitat = $data['tipus_velocitat'];
}
if(!empty($data['tipus_connex'])){
	$tipus_connex = $data['tipus_connex'];
}
if(!empty($data['latitud'])){
	$latitud = $data['latitud'];
}
if(!empty($data['longitud'])){
	$longitud = $data['longitud'];
}
if(!empty($data['adre_a'])){
	$adre_a = $data['adre_a'];
}
if(!empty($data['designaci_descriptiva'])){
	$designaci_descriptiva = $data['designaci_descriptiva'];
}
if(!empty($data['ac_dc'])){
	$ac_dc = $data['ac_dc'];
}
if(!empty($data['nplaces_estaci'])){
	$nplaces_estaci = $data['nplaces_estaci'];
}
if(!empty($data['tipus_vehicle'])){
	$tipus_vehicle = $data['tipus_vehicle'];
}
if(!empty($data['geocoded_column'])){
	$geocoded_column = $data['geocoded_column'];
}
if(!empty($data['prices'])){
	$prices = $data['prices'];
}
if(!empty($data['kw'])){
	$kw = $data['kw'];
}
		try{
			$result = mysqli_query($con, "UPDATE Stations SET station_id='$station_id', municipi='$municipi', provincia='$provincia', id='$id', codiprov='$codi',adre_a='$adre_a',promotor_gestor='$promotor_gestor',acces='$acces',tipus_velocitat='$tipus_velocitat',tipus_connexi='$tipus_connexi',latitud='$latitud',longitud='$longitud',designaci_descriptiva='$designaci_descriptiva',ac_dc='$ac_dc',nplaces_estaci='$nplaces_estaci',tipus_vehicle='$tipus_vehicle',geocoded_column='$geocoded_column',prices='$prices',kw='$kw',
			 WHERE station_id='$station_id'");
			//Stations(municipi, provincia, station_id, id, codiprov, adre_a, promotor_gestor, acces, tipus_velocitat, tipus_connexi, latitud, longitud, designaci_descriptiva, ac_dc, nplaces_estaci, tipus_vehicle, geocoded_column, prices, kw) VALUES('$municipi', '$provincia', '$station_id', '$id', '$codiprov', '$adre_a', '$promotor_gestor', '$acces', '$tipus_velocitat', '$tipus_connexi', '$latitud', '$longitud', '$designaci_descriptiva', '$ac_dc', '$nplaces_estaci', '$tipus_vehicle', '$geocoded_column', '$prices', '$kw')")
			$conn->exec($result);
			//echo "updateuser_ok";
			echo json_encode(["updatestations" => true, "message" => "updatestations_ok"]);
		}catch (Exception $e){
			die("updatestations_fail: $result. ". $e->getMessage());
		}
		unset($conn);
?>

