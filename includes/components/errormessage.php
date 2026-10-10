<?php 
$error = $_GET["error"];
if($error == 1){
    $error = "Usuario o contraseña incorrectos";
}   
?>

<h1>Ha ocurrido un error</h1>
<p>Error: <?php echo $error; ?></p>