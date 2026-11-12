<?php 

include "conexion.php";


if(isset($_POST['btn_insertar'])){
    $nom = $_POST['nombre'];
    $ape = $_POST['apellido'];
    $edad = $_POST['edad'];
    $correo = $_POST['correo'];
    $docu = $_POST['documento'];
    $tele = $_POST['telefono'];

    $sql = "insert into usuarios(nombre, apellido, edad, correo, documento, telefono)
            values(:nombre, :apellido, :edad, :correo, :documento, :telefono)";


        $sql = $connect->prepare($sql);

        $sql->bindParam(':nombre', $nom, PDO::PARAM_STR,45);
        $sql->bindParam(':apellido', $ape, PDO::PARAM_STR,45);
        $sql->bindParam(':edad', $edad, PDO::PARAM_INT,3);
        $sql->bindParam(':correo', $correo, pdo::PARAM_STR,150);
        $sql->bindParam(':documento', $docu, PDO::PARAM_INT,15);
        $sql->bindParam(':telefono', $tele, PDO::PARAM_INT,15);



$sql ->execute();
$lastInsertId = $connect->lastInsertId();
if($lastInsertId >0){
    echo "<script>window.location = 'consultar.php'</script>";
    }else{
        print_r($sql->errorInfo());
    }
}
?>
