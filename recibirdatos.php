<?php

$nom = $_POST['nombre'];
$ape = $_POST['apellido'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];
$docu = $_POST['documento'];
$tele = $_POST['telefono'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/dist.css">
    <title>Document</title>
</head>

<body class="bg-slate-950 min-h-screen flex items-center justify-center p-8">

<div class="bg-slate-700 w-full max-w-md p-10 rounded-2xl shadow-2xl border border-slate-800">

<h2 class="text-3xl font-bold text-center text-white mb-8 ">Datos recibidos</h2>

    <div  class="space-y-5 bg-slate-800 text-xl rounded-2xl text-center p-4 mb-4 text-white">

        <p><strong class="text-blue-500">Nombre:</strong> <?php echo ($nom); ?></p>

        <p><strong class="text-blue-500">Apellido:</strong> <?php echo ($ape); ?></p>

        <p><strong class="text-blue-500">Edad:</strong> <?php echo ($edad); ?> años</p>

        <p><strong class="text-blue-500">Documento:</strong> <?php echo ($docu); ?></p>

        <p><strong class="text-blue-500">Correo:</strong><?php echo ($correo); ?></p>

        <p><strong class="text-blue-500">Teléfono:</strong> <?php echo ($tele); ?></p>
    </div>
</div>

</body>
</html>