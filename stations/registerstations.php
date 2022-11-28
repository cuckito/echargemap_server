<?php session_start(); ?>

<?php 
 
 /*if(!isset($_SESSION['valid'])) {
	header('adre_a: login.php');
	}*/

?> 
<?php
("connection.php");

$municipi = $data['municipi'];
$provincia = $data['provincia'];
$station_id = $data['station_id'];
$id = $data['id'];
$codiprov = $data['codiprov'];
$promotor_gestor = $data['promotor_gestor'];
$acces = $data['acces'];
$tipus_velocitat = $data['tipus_velocitat'];
$tipus_connexi = $data['tipus_connexi'];
$latitud = $data['latitud'];
$longitud = $data['longitud'];
$designaci_descriptiva = $data['designaci_descriptiva'];
$adre_a = $data['adre_a'];
$ac_dc = $data['ac_dc'];
$nplaces_estaci = $data['nplaces_estaci'];
$tipus_vehicle = $data['tipus_vehicle'];
$geocoded_column = $data['geocoded_column'];
$prices = $data['prices'];
$kw = $data['kw'];

$error = "";

if(!empty($data['municipi'])){

	$municipi = $data['municipi'];

}else{
	
	$error = $error . "municipi";
}

if(!empty($data['provincia'])){

	$provincia = $data['provincia'];

}else{
	
	$error = $error . "provincia";
}

if(!empty($data['station_id'])){

	$station_id = $data['station_id'];

}else{
	
	$error = $error . "station_id";
}

if(!empty($data['id'])){

	$id = $data['id'];

}else{
	
	$error = $error . "id";
}

if(!empty($data['codiprov'])){

	$codiprov = $data['codiprov'];

}else{
	
	$error = $error . "codiprov";
}

if(!empty($data['promotor_gestor'])){

	$promotor_gestor = $data['promotor_gestor'];

}else{
	
	$error = $error . "promotor_gestor";
}

if(!empty($data['acces'])){

	$acces = $data['acces'];

}else{
	
	$error = $error . "acces";
}

if(!empty($data['tipus_velocitat'])){

	$tipus_velocitat = $data['tipus_velocitat'];

}else{
	
	$error = $error . "tipus_velocitat";
}

if(!empty($data['tipus_connexi'])){

	$tipus_connexi = $data['tipus_connexi'];

}else{
	
	$error = $error . "tipus_connexi";
}

if(!empty($data['latitud'])){

	$latitud = $data['latitud'];

}else{
	
	$error = $error . "latitud";
}

if(!empty($data['longitud'])){

	$longitud = $data['longitud'];

}else{
	
	$error = $error . "longitud";
}

if(!empty($data['designaci_descriptiva'])){

	$designaci_descriptiva = $data['designaci_descriptiva'];

}else{
	
	$error = $error . "designaci_descriptiva";
}

if(!empty($data['ac_dc'])){

	$ac_dc = $data['ac_dc'];

}else{
	
	$error = $error . "ac_dc";
}

if(!empty($data['nplaces_estaci'])){

	$nplaces_estaci = $data['nplaces_estaci'];

}else{
	
	$error = $error . "nplaces_estaci";
}

if(!empty($data['tipus_vehicle'])){

	$tipus_vehicle = $data['tipus_vehicle'];

}else{
	
	$error = $error . "tipus_vehicle";
}

if(!empty($data['geocoded_column'])){

	$geocoded_column = $data['geocoded_column'];

}else{
	
	$error = $error . "geocoded_column";
}

if(!empty($data['prices'])){

	$prices = $data['prices'];

}else{
	
	$error = $error . "prices";
}

if(!empty($data['kw'])){

	$id = $data['kw'];

}else{
	
	$error = $error . "kw";
}

//location
if(!empty($data['adre_a'])){

	$adre_a = $data['adre_a'];

}else{
	
	$error = $error . "adre_a";
}
		if(!empty($error)) {
			$errorcheck = "Los siguientes campos están vacios";
			$error = $errorcheck . $error;
		} else { 
				
			$result = mysqli_query($con, "INSERT INTO Stations(municipi, provincia, station_id, id, codiprov, adre_a, promotor_gestor, acces, tipus_velocitat, tipus_connexi, latitud, longitud, designaci_descriptiva, ac_dc, nplaces_estaci, tipus_vehicle, geocoded_column, prices, kw) VALUES('$municipi', '$provincia', '$station_id', '$id', '$codiprov', '$adre_a', '$promotor_gestor', '$acces', '$tipus_velocitat', '$tipus_connexi', '$latitud', '$longitud', '$designaci_descriptiva', '$ac_dc', '$nplaces_estaci', '$tipus_vehicle', '$geocoded_column', '$prices', '$kw')")
			or die("registerstations_fail");
			
		}
	//echo "registeruser_ok";
	echo json_encode(["registerstations" => true, "message" => "registerstations_ok","municipi"=>$municipi,"provincia"=>$provincia,"station_id"=>$station_id,"id"=>$id,"codiprov"=>$codiprov,"adre_a"=>$adre_a]);

?>
