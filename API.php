<?php 
include_once 'connection.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//$json=file_get_contents('https://analisi.transparenciacatalunya.cat/resource/tb2m-m33b.json');

header('Access-Control-Allow-Origin: *');
$url = "https://analisi.transparenciacatalunya.cat/resource/tb2m-m33b.json";
$response = file_get_contents($url);
//echo $response;
$json = json_decode($response, true);
//echo $response;
//print_r($json);
//echo $response[0];
foreach ($json as $key => $value) {
        if (array_key_exists('municipi', $value)) {
            $municipi = $value['municipi'];
        }else{
            $municipi= "null";
        }
        if (array_key_exists('provincia', $value)) {
            $provincia = $value['provincia'];
        }else{
            $provincia = "null";
        }
        if (array_key_exists('codiprov', $value)) {
            $codiprov = $value['codiprov'];
        }else{
            $codiprov = "null";
        }
        if (array_key_exists('promotor_gestor', $value)) {
            $promotor_gestor = $value['promotor_gestor'];
        }else{
            $promotor_gestor= "null";
        }
        if (array_key_exists('acces', $value)) {
            $acces = $value['acces'];
        }else{
            $acces= "null";
        }
        if (array_key_exists('tipus_velocitat', $value)) {
            $tipus_velocitat = $value['tipus_velocitat'];
        }else{
            $tipus_velocitat= "null";
        }
        if (array_key_exists('tipus_connexi', $value)) {
            $tipus_connexi = $value['tipus_connexi'];
        }else{
            $tipus_connexi= "null";
        }
        if (array_key_exists('latitud', $value)) {
            $latitud = $value['latitud'];
        }else{
            $latitud= "null";
        }
        if (array_key_exists('longitud', $value)) {
            $longitud = $value['longitud'];
        }else{
            $longitud= "null";
        }
        if (array_key_exists('designaci_descriptiva', $value)) {
            $designaci_descriptiva = $value['designaci_descriptiva'];
        }else{
            $designaci_descriptiva= "null";
        }
        if (array_key_exists('adre_a', $value)) {
            $adre_a = $value['adre_a'];
        }else{
            $adre_a= "null";
        }
        if (array_key_exists('ac_dc', $value)) {
            $ac_dc = $value['ac_dc'];
        }else{
            $ac_dc= "null";
        }
        if (array_key_exists('nplaces_estaci', $value)) {
            $nplaces_estaci = $value['nplaces_estaci'];
        }else{
            $nplaces_estaci= "null";
        }
        if (array_key_exists('tipus_vehicle', $value)) {
            $tipus_vehicle = $value['tipus_vehicle'];
        }else{
            $tipus_vehicle= "null";
        }
        if (array_key_exists('prices', $value)) {
            $prices = $value['prices'];
        }else{
            $prices= "null";
        }
        if (array_key_exists('kw', $value)) {
            $kw = $value['kw'];
        }else{
            $kw= "null";
        }
        if (array_key_exists('ide_pdr', $value)) {
            $ide_pdr = $value['ide_pdr'];
        }else{
            $ide_pdr= "null";
        }
        if (array_key_exists('codi_mun', $value)) {
            $codi_mun = $value['codi_mun'];
        }else{
            $codi_mun= "null";
        }
        /*if (array_key_exists('station_id', $value)) {
            $station_id = $value['station_id'];
        }else{
            $station_id= "null";
        }*/
        if (array_key_exists('id', $value)) {
            $id=$value['id'];
        }else{
            $id= "null";
        }
        
        
   //--------------------------PRUEBA 2---------------------------------
   $sql="INSERT INTO  Stations (station_id, id, promotor_gestor ,  acces ,  tipus_velocitat ,  tipus_connexi ,  designaci_descriptiva ,  ac_dc ,  adre_a ,  provincia ,  codiprov ,  municipi ,  nplaces_estaci ,  tipus_vehicle ,  ide_pdr ,  codi_mun ,  longitud ,  latitud ,  kw, prices)VALUES(null,'$id','$promotor_gestor','$acces','$tipus_velocitat','$tipus_connexi','$designaci_descriptiva','$ac_dc','$adre_a','$provincia','$codiprov','$municipi','$nplaces_estaci','$tipus_vehicle','$ide_pdr','$codi_mun','$longitud','$latitud','$kw','$prices')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Datos insertados correctamente";
    }else{
        echo "Error al insertar datos";
    }
}
//echo "Actualización finalizada";
?>