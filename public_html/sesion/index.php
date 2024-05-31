<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Login Pawfect Pets</title>
</head>
<body>
    <div class="container-form register">
        <div class="information">
            <div class="info-childs">
                <h2>Bienvenido</h2>
                <p>Para unirte a la comunidad de Pawfect Pets por favor inicia sesión con tus datos</p>
                <input type="button" value="Iniciar Sesión" id="sign-in">
            </div> 
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Crea una Cuenta</h2>
                <div class="icons">
                    <i class='bx bxl-google'></i>
                    <i class='bx bxl-github' ></i>
                    <i class='bx bxl-linkedin-square' ></i>
                </div>
                <p>O puedes ingresar con tu cuenta de Email para registrarte</p>
                <form class="form" action="registro.php" method="POST" id="registroForm">
                    <label>
                        <i class='bx bx-user'></i>
                        <input type="text" name="nombre" placeholder="Nombre Completo">
                    </label>
                    <label>
                        <i class='bx bx-envelope'></i>
                        <input type="email" name="correo" placeholder="Correo Electrónico">
                    </label>
                    <label>
                        <i class='bx bx-lock-alt'></i>
                        <input type="password" name="contrasena" placeholder="Contraseña">
                    </label>
                    <button type="submit">Registrarse</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container-form login hide">
        <div class="information">
            <div class="info-childs">
                <h2>Bienvenido de nuevo Pawfriend</h2>
                <p>Para unirte a la comunidad de Pawfect Pets por favor inicia sesión con tus datos</p>
                <input type="button" value="Registrarse" id="sign-up">
            </div> 
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Inicia Sesión</h2>
                <div class="icons">
                    <i class='bx bxl-google'></i>
                    <i class='bx bxl-github' ></i>
                    <i class='bx bxl-linkedin-square' ></i>
                </div>
                <p>O Inicia Sesión con tu cuenta</p>
                <form class="form" action="inicio_sesion.php" method="POST" id="inicioSesionForm">
                    <label>
                        <i class='bx bx-envelope' ></i>
                        <input type="email" name="correo" placeholder="Correo Electrónico">
                    </label>
                    <label>
                        <i class='bx bx-lock-alt' ></i>
                        <input type="password" name="contrasena" placeholder="Contraseña">
                    </label>
                    <input type="submit" value="Iniciar Sesión">
                </form>
            </div>
        </div>
    </div>
    <script src="scripts.js"></script>
</body>
</html>
