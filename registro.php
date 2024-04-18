<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $basededatos = "formulario";
    
    $conexion = mysqli_connect ($servidor, $usuario, $clave, $basededatos);
    return $conexion;

    $nombre = $_POST['Nombre'] ?? '1';
    $correo = isset($_POST['Correo']) ? $_POST['Correo'] : '2';
    $usuario = isset($_POST['Usuario']) ? $_POST['Usuario'] : '3';
    $contraseña = isset($_POST['Contraseña']) ? $_POST['Contraseña'] : '4';



    $registro = "INSERT INTO registro (Nombre Completo, Correo Electronico, Usuario, Contraseña) VALUES ('$nombre','$correo','$usuario','$contraseña')";
   $sql= mysqli_query($conexion,$registro);

   
    ?>

</body>
</html>