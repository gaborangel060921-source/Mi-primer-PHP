<?php 

$servidor = "localhost";
$usuario = "root";
$password = "Gabo0609";


try {
    $connect = new PDO("mysql:host=$servidor;dbname=crud", $usuario, $password,
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));

    $connect ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "La conexión ha fallado" .$e->getMessage();
}

$conexion = null;

?>
