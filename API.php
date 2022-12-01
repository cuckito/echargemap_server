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
foreach ($json as $key => $value) {
        //echo $value;
        //$value = array('first' => 1, 'second' => 4);
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
echo "Actualización finalizada";

/*INSERT INTO  Stations ( station_id , promotor_gestor ,  acces ,  tipus_velocitat ,  tipus_connexi ,  designaci_descriptiva ,  ac_dc ,  adre_a ,  provincia ,  codiprov ,  municipi ,  nplaces_estaci ,  tipus_vehicle ,  ide_pdr ,  codi_mun ,  longitud ,  latitud ,  kw ) 
VALUES (null,'$promotor_gestor',' $acces','$tipus_velocitat','$tipus_connexi','$designaci_descriptiva','$ac_dc','$adre_a','$provincia','$codiprov','$municipi','$nplaces_estaci','$tipus_vehicle','$ide_pdr','$codi_mun','$longitud','$latitud','$kw')

/*INSERT INTO Stations(id, municipi, provincia, codiprov, adre_a, promotor_gestor, acces, tipus_velocitat, tipus_connexi, latitud, longitud, designaci_descriptiva, ac_dc, nplaces_estaci, tipus_vehicle, prices, kw) VALUES('0','granollers', 'barcelona', '08', 'carrer del mig, 22', '', '', 'SEMIRAPID', 'MENNEKES', '41.59329', '2.28172', 'EdRsR Can Muntanyola (7.5kW)', 'AC', '$tipus_vehicle', '', '7.5');

*/


/*
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

        $result = mysqli_query($con, "INSERT INTO  Stations (station_id, id, promotor_gestor ,  acces ,  tipus_velocitat ,  tipus_connexi ,  designaci_descriptiva ,  ac_dc ,  adre_a ,  provincia ,  codiprov ,  municipi ,  nplaces_estaci ,  tipus_vehicle ,  ide_pdr ,  codi_mun ,  longitud ,  latitud ,  kw, prices ) 
    VALUES ('$station_id','$id','$promotor_gestor',' $acces','$tipus_velocitat','$tipus_connexi','$designaci_descriptiva','$ac_dc','$adre_a','$provincia','$codiprov','$municipi','$nplaces_estaci','$tipus_vehicle','$ide_pdr','$codi_mun','$longitud','$latitud','$kw','$prices')")
    or die("insert_API_fail");

*/

/*if (array_key_exists('first', $value)) {
        }else{
        }*/
        /*$result = mysqli_query($con, "INSERT INTO  Stations (station_id, id, promotor_gestor ,  acces ,  tipus_velocitat ,  tipus_connexi ,  designaci_descriptiva ,  ac_dc ,  adre_a ,  provincia ,  codiprov ,  municipi ,  nplaces_estaci ,  tipus_vehicle ,  ide_pdr ,  codi_mun ,  longitud ,  latitud ,  kw, prices ) 
    VALUES ('$station_id','$id','$promotor_gestor',' $acces','$tipus_velocitat','$tipus_connexi','$designaci_descriptiva','$ac_dc','$adre_a','$provincia','$codiprov','$municipi','$nplaces_estaci','$tipus_vehicle','$ide_pdr','$codi_mun','$longitud','$latitud','$kw','$prices')")
    or die("insert_API_fail");*/

    //echo $id,$municipi, $provincia, $codiprov,$adre_a,$promotor_gestor,  $acces ,  $tipus_velocitat ,  $tipus_connexi ,  $latitud ,  $longitud ,  $designaci_descriptiva ,  $ac_dc ,  $nplaces_estaci ,  $tipus_vehicle ,  $prices ,  $kw ;
    //FALLA EN: promotor_gestor, acces, nplaces_estaci, tipus_vehicle, prices
    /*$result = mysqli_query($con, "INSERT INTO Stations(id, municipi, provincia, codiprov, adre_a, promotor_gestor, acces, tipus_velocitat, tipus_connexi, latitud, longitud, designaci_descriptiva, ac_dc, nplaces_estaci, tipus_vehicle, prices, kw, codi_mun, ide_prd) VALUES('$id','$municipi', '$provincia', '$codiprov', '$adre_a', '$promotor_gestor', '$acces', '$tipus_velocitat', '$tipus_connexi', '$latitud', '$longitud', '$designaci_descriptiva', '$ac_dc', '$nplaces_estaci', '$tipus_vehicle', '$prices', '$kw','$ide_prd','$codi_mun')")
    or die("insert_API_fail");
    */
   //--------------------------PRUEBA 1---------------------------------
    /*$result = mysqli_query($con, "INSERT INTO  Stations (station_id, id, promotor_gestor ,  acces ,  tipus_velocitat ,  tipus_connexi ,  designaci_descriptiva ,  ac_dc ,  adre_a ,  provincia ,  codiprov ,  municipi ,  nplaces_estaci ,  tipus_vehicle ,  ide_pdr ,  codi_mun ,  longitud ,  latitud ,  kw, prices )VALUES (null,'$id','$promotor_gestor',' $acces','$tipus_velocitat','$tipus_connexi','$designaci_descriptiva','$ac_dc','$adre_a','$provincia','$codiprov','$municipi','$nplaces_estaci','$tipus_vehicle','$ide_pdr','$codi_mun','$longitud','$latitud','$kw','$prices')")
    or die("insert_API_fail");*/

     //echo $result;
/*$result = mysqli_query($con,"INSERT INTO Stations (municipi) VALUES ($municipi)")
    or die("insert_API_fail");*/
?>

