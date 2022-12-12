<?php
session_start();

require_once 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/styles.css"/>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div class="sidebar">
<a class="active" href="adpanel.php"><b>Admin panel</b></a>
  <a href="users.php" id="users">Visualizar usuarios</a>
  <a href="stations.php" id="stations">Visualizar estacions</a>
  <a href="updateapi.php" id="updateapi">Actualizar API</a>
  <a href="logout.php" id="logout">Cerrar sesion</a>
</div>

<div class="content">
    <h2>Actualizar API</h2>
    <p>En esta pagina podras actualizar la API</p>
    <form name='form' method="post">
    <input type='submit' name='updateapi' id='' value='Actualizar API'><br>
<!--<script>
    setTimeout(function(){ document.getElementById('apibutton').style.display = "block"; }, 60);
    </script>-->
    </form>
    <?php
    if(isset($_POST['updateapi']))
    {
        include_once 'connection.php';
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        header("Allow: GET, POST, OPTIONS, PUT, DELETE");
        $url = "https://analisi.transparenciacatalunya.cat/resource/tb2m-m33b.json";
        $response = file_get_contents($url);
;
        $json = json_decode($response, true);


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
                    $codiprov = "0";
                }
                if (array_key_exists('promotor_gestor', $value)) {
                    $promotor_gestor = $value['promotor_gestor'];
                }else{
                    $promotor_gestor= "null";
                }
                /*
                if (array_key_exists('promotor_gestor', $value)) {
                    $promotor_gestor = $con->real_escape_string($value['promotor_gestor']);
                }else{
                    $promotor_gestor= "null";
                }
                */
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
                    $latitud= "0";
                }
                if (array_key_exists('longitud', $value)) {
                    $longitud = $value['longitud'];
                }else{
                    $longitud= "0";
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
                if(array_key_exists('kw', $value)) {
                    $kw = $value['kw'];
                }else{
                    $kw= "0";
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
                if (array_key_exists('id', $value)) {
                    $id=$value['id'];
                }else{
                    $id= "null";
                }
                //PERMITIR COMILLAS '
                $promotor_gestor = $con->real_escape_string($promotor_gestor);
                $acces = $con->real_escape_string($acces);
                $tipus_velocitat = $con->real_escape_string($tipus_velocitat);
                $tipus_connexi = $con->real_escape_string($tipus_connexi);
                $designaci_descriptiva = $con->real_escape_string($designaci_descriptiva);
                $adre_a = $con->real_escape_string($adre_a);
                $ac_dc = $con->real_escape_string($ac_dc);
                $nplaces_estaci = $con->real_escape_string($nplaces_estaci);
                $tipus_vehicle = $con->real_escape_string($tipus_vehicle);
                $prices = $con->real_escape_string($prices);
                $ide_pdr = $con->real_escape_string($ide_pdr);
                $codi_mun = $con->real_escape_string($codi_mun);
                $provincia = $con->real_escape_string($provincia);
                $municipi = $con ->real_escape_string($municipi);
                $codiprov = $con->real_escape_string($codiprov);
                $prices = $con->real_escape_string($prices);
            
            $var="SELECT * FROM Stations WHERE latitud='$latitud' AND longitud = '$longitud'";
            $comp=mysqli_fetch_assoc(mysqli_query($con,$var));
            if(isset($comp)){
                $sql="UPDATE Stations SET promotor_gestor='$promotor_gestor', acces='$acces', tipus_velocitat='$tipus_velocitat', tipus_connexi='$tipus_connexi', designaci_descriptiva='$designaci_descriptiva', ac_dc='$ac_dc', adre_a='$adre_a', provincia='$provincia', codiprov='$codiprov', municipi='$municipi', nplaces_estaci='$nplaces_estaci', tipus_vehicle='$tipus_vehicle', ide_pdr='$ide_pdr', codi_mun='$codi_mun', longitud='$longitud', latitud='$latitud', kw='$kw', prices='$prices' WHERE latitud=$latitud AND longitud = $longitud";
                $result=mysqli_query($con,$sql);
                echo "update realizado";
            }else{
                $sql="INSERT INTO  Stations (id, promotor_gestor ,  acces ,  tipus_velocitat ,  tipus_connexi ,  designaci_descriptiva ,  ac_dc ,  adre_a ,  provincia ,  codiprov ,  municipi ,  nplaces_estaci ,  tipus_vehicle ,  ide_pdr ,  codi_mun ,  longitud ,  latitud, kw, prices)VALUES(null, '$promotor_gestor','$acces','$tipus_velocitat','$tipus_connexi','$designaci_descriptiva','$ac_dc','$adre_a','$provincia','$codiprov','$municipi','$nplaces_estaci','$tipus_vehicle','$ide_pdr','$codi_mun','$longitud','$latitud','$kw','$prices')";
                $result=mysqli_query($con,$sql);
                echo "insertado correctamente";
            }
        }
    }
    ?>
</div>
</body>

</html>