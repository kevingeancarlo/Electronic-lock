<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesión");
                window.location = "index.php";
            </script>
    ';
    session_destroy();
    die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido David</h1>
    <a href="../php/cerrar_sesion.php">Cerrar sesión</a>
    <img src="https://d28pk2nlhhgcne.cloudfront.net/assets/app/uploads/sites/3/2020/06/kitchen-made-by-mminterior-003-1220x686.jpg" alt="Texto Alternativo para la imágen" class="Cocina" id="Identificador para la imágen" width="433px" height="243px">
    <img src="https://p4.wallpaperbetter.com/wallpaper/64/822/338/design-interior-chair-bath-wallpaper-preview.jpg" alt="Texto Alternativo para la imágen" class="Cocina" id="Identificador para la imágen" width="433px" height="243px">
</body>
</html>