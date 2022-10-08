<?php
    session_start();
    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo ='$correo'
    and contrasena =  '$contrasena'");

            if(mysqli_num_rows($validar_login) > 0 && $correo == "david@gmail.com"){
                $_SESSION['usuario'] = $correo;
                header("location: ../perfiles/perfil_david.php");
                exit;
            }
            else if(mysqli_num_rows($validar_login) > 0 && $correo == "kevin@gmail.com"){
                $_SESSION['usuario'] = $correo;
                header("location: ../perfiles/perfil_kevin.php");
                exit;
            }
            else if(mysqli_num_rows($validar_login) > 0 && $correo == "laura@gmail.com"){
                $_SESSION['usuario'] = $correo;
                header("location: ../perfiles/perfil_laura.php");
                exit;
            }else{
                echo '
                    <script>
                        alert("Cerradura deshabilitada por 1 minuto para el usuario con $correo");
                        window.location = "../index.php";
                        
                    </script>
                ';
                exit;
            }
?>