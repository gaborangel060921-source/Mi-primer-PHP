
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/dist.css">
    <title>Mi proyecto PHP</title>
</head>

<body class="bg-slate-950 min-h-screen flex items-center justify-center p-5">

    <section class="bg-slate-900 w-full max-w-md p-8 rounded-2xl shadow-2xl border border-slate-800">

        <h1 class="text-3xl font-bold text-center text-white font-mono mb-2">
            Formulario
        </h1>

        <form action="insertaru.php" method="post">

            <div class="mb-5">
                <label class="block text-slate-200 font-medium mb-2" for="">Nombre</label>

                <input class="w-full bg-slate-800 text-white p-3 rounded-lg border border-slate-700" type="text" name="nombre"
                    placeholder="Ingresa tu nombre">
            </div>

            <div class="mb-5">
                <label class="block text-slate-200 font-medium mb-2" for="">Apellido</label>

                <input class="w-full bg-slate-800 text-white p-3 rounded-lg border border-slate-700" type="text" name="apellido"
                    placeholder="Ingresa tu apellido">
            </div>

            <div class="mb-5">
                <label class="block text-slate-200 font-medium mb-2" for="">Edad</label>

                <input class="w-full bg-slate-800 text-white p-3 rounded-lg border border-slate-700" type="number" name="edad"
                    placeholder="Ingresa tu edad">
            </div>

            <div class="mb-5">
                <label class="block text-slate-200 font-medium mb-2" for="">Documento</label>

                <input class="w-full bg-slate-800 text-white p-3 rounded-lg border border-slate-700" type="number" name="documento"
                    placeholder="Ingresa tu documento">
            </div>

            <div class="mb-5">
                <label class="block text-slate-200 font-medium mb-2" for="">Correo</label>

                <input class="w-full bg-slate-800 text-white p-3 rounded-lg border border-slate-700" type="email" name="correo"
                    placeholder="Ingresa tu correo">
            </div>

            <div class="mb-7">
                <label class="block text-slate-200 font-medium mb-2" for="">Teléfono</label>

                <input
                    class="w-full bg-slate-800 text-white p-3 rounded-lg border border-slate-700" type="tel" name="telefono"
                    placeholder="Ingresa tu teléfono">
            </div>

            <input type="submit" name="btn_insertar" class="w-full bg-blue-600 text-white font-bold p-3 rounded-lg hover:bg-blue-700">

        </form>

    </section>
</body>
</html>
