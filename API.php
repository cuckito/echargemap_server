<?php 
include_once 'connection.php';

//$json=file_get_contents('https://analisi.transparenciacatalunya.cat/resource/tb2m-m33b.jsonhttps://analisi.transparenciacatalunya.cat/resource/tb2m-m33b.json');

header('Access-Control-Allow-Origin: *');
$url = "https://analisi.transparenciacatalunya.cat/resource/tb2m-m33b.json";
$response = file_get_contents($url);
//echo $response;
$json = json_decode($response, true);
//print_r($json);
foreach ($json as $key => $value) {
    $municipi = $value['municipi'];
    $provincia = $value['provincia'];
    $station_id = null;
    //$station_id = $value['station_id'];
    $id=null;
    $prices=null;
    // $id = $value['id'];
    $codiprov = $value['codiprov'];
    $promotor_gestor = $value['promotor_gestor'];
    $acces = $value['acces'];
    $tipus_velocitat = $value['tipus_velocitat'];
    $tipus_connexi = $value['tipus_connexi'];
    $latitud = $value['latitud'];
    $longitud = $value['longitud'];
    $designaci_descriptiva = $value['designaci_descriptiva'];
    $adre_a = $value['adre_a'];
    $ac_dc = $value['ac_dc'];
    $nplaces_estaci = $value['nplaces_estaci'];
    $tipus_vehicle = $value['tipus_vehicle'];
    $prices = $value['prices'];
    $kw = $value['kw'];
    $ide_pdr = $value['ide_pdr'];
    $codi_mun = $value['codi_mun'];
    //echo $id,$municipi, $provincia, $codiprov,$adre_a,$promotor_gestor,  $acces ,  $tipus_velocitat ,  $tipus_connexi ,  $latitud ,  $longitud ,  $designaci_descriptiva ,  $ac_dc ,  $nplaces_estaci ,  $tipus_vehicle ,  $prices ,  $kw ;
    //FALLA EN: promotor_gestor, acces, nplaces_estaci, tipus_vehicle, prices
    /*$result = mysqli_query($con, "INSERT INTO Stations(id, municipi, provincia, codiprov, adre_a, promotor_gestor, acces, tipus_velocitat, tipus_connexi, latitud, longitud, designaci_descriptiva, ac_dc, nplaces_estaci, tipus_vehicle, prices, kw, codi_mun, ide_prd) VALUES('$id','$municipi', '$provincia', '$codiprov', '$adre_a', '$promotor_gestor', '$acces', '$tipus_velocitat', '$tipus_connexi', '$latitud', '$longitud', '$designaci_descriptiva', '$ac_dc', '$nplaces_estaci', '$tipus_vehicle', '$prices', '$kw','$ide_prd','$codi_mun')")
    or die("insert_API_fail");
    */
    //echo $municipi, $kw, $adre_a;
    /*$result = mysqli_query($con, "INSERT INTO  Stations (station_id, id, promotor_gestor ,  acces ,  tipus_velocitat ,  tipus_connexi ,  designaci_descriptiva ,  ac_dc ,  adre_a ,  provincia ,  codiprov ,  municipi ,  nplaces_estaci ,  tipus_vehicle ,  ide_pdr ,  codi_mun ,  longitud ,  latitud ,  kw, prices ) VALUES (null,null,'$promotor_gestor',' $acces','$tipus_velocitat','$tipus_connexi','$designaci_descriptiva','$ac_dc','$adre_a','$provincia','$codiprov','$municipi','$nplaces_estaci','$tipus_vehicle','$ide_pdr','$codi_mun','$longitud','$latitud','$kw','$prices')")
    or die("insert_API_fail");*/
    
    //echo $result;
    $result = mysqli_query($con,"INSERT INTO Stations (municipi) VALUES ($municipi)")
    or die("insert_API_fail");

    //echo $result;
}

echo "Actualización finalizada";

/*INSERT INTO  Stations ( station_id , promotor_gestor ,  acces ,  tipus_velocitat ,  tipus_connexi ,  designaci_descriptiva ,  ac_dc ,  adre_a ,  provincia ,  codiprov ,  municipi ,  nplaces_estaci ,  tipus_vehicle ,  ide_pdr ,  codi_mun ,  longitud ,  latitud ,  kw ) 
VALUES (null,'$promotor_gestor',' $acces','$tipus_velocitat','$tipus_connexi','$designaci_descriptiva','$ac_dc','$adre_a','$provincia','$codiprov','$municipi','$nplaces_estaci','$tipus_vehicle','$ide_pdr','$codi_mun','$longitud','$latitud','$kw')

/*INSERT INTO Stations(id, municipi, provincia, codiprov, adre_a, promotor_gestor, acces, tipus_velocitat, tipus_connexi, latitud, longitud, designaci_descriptiva, ac_dc, nplaces_estaci, tipus_vehicle, prices, kw) VALUES('0','granollers', 'barcelona', '08', 'carrer del mig, 22', '', '', 'SEMIRAPID', 'MENNEKES', '41.59329', '2.28172', 'EdRsR Can Muntanyola (7.5kW)', 'AC', '$tipus_vehicle', '', '7.5');

*/



?>

