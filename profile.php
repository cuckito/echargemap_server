<?php
session_start();

require_once 'db.php';

//SELECCIONAR DE LA BASE $SQL_QUERY(SELECT WHERE ID)
//IF(IMATGE != EMPTY)
//PONER IMAGEN EN HTML
if (isset($_POST)){
echo "esto es files <br>";
print_r($_FILES);
echo "<br> esto es post <br>";
print_r($_POST);
}
if(isset($_FILES['image']))
{
    //print_r($_FILES);
    //print_r($_POST);
    if ($_FILES["image"]["error"] > 0)
    {
       echo "<font size = '5'>Error: NO CHOSEN FILE <br />";
       echo "<p><font size = '5'>INSERT TO DATABASE FAILED";
     }
     else
     {
       move_uploaded_file($_FILES["image"]["tmp_name"],"images/" . $_FILES["image"]["name"]);
       echo "<font size = '5'>SAVED<br>";
  
       $file="images/".$_FILES["image"]["name"];
       $id=$_SESSION['id'];
       $sql = "UPDATE usuaris SET imatge = '$file' WHERE id = $id";
       echo $sql; 
       if (!mysqli_query($con,$sql))
       {
          die('Error: ' . mysqli_error($con));
       }
       echo "<font size = '5'>SAVED TO DATABASE";
  
     }
}   
/*if(isset($_POST['Completar']))
{
    
}*/
?>

<form enctype="multipart/form-data" action="profile.php" method="post" name="pujar">
    Insereix la imatge del teu perfil<br>
    <input name="image" accept="image/jpeg" type="file"><br>
    <input value="Upload" type="submit">
</form>

<form enctype="multipart/form-data" action="profile.php" method="post" name="completar">
    Introdueix la teva descripció, máxim 300 paraules<br>
    <input type='text' name='descripcio' /><br>
    <input value="Complete" type="submit">
</form>