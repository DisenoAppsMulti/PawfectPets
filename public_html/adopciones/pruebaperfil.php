<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Adopciones</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/all.min.css">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">


    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/style.css">
    
    <div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-flex align-items-center">
						<p class="mb-0 phone pl-md-2">
							<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> (614) 432 20 00</a> 
							<a href="#"><span class="fa fa-paper-plane mr-1"></span> pawfectpets@gmail.com</a>
						</p>
					</div>
					<div class="col-md-6 d-flex justify-content-md-end">
						<div class="social-media">
			    		<p class="mb-0 d-flex">
			    			<a href="https://www.facebook.com/utchoficial" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
			    			<a href="https://www.instagram.com/utch_oficial/" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
			    		</p>
		        </div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="../index.html"> <img style="width: 70px" src="../images/logo-navbar.png"> Pawfect Pets</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="../index.html" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="../veterinaria/vet.html" class="nav-link">Veterinaria</a></li>
	        	<li class="nav-item"><a href="../estetica.html" class="nav-link">Estética</a></li>
	          <li class="nav-item active"><a href="adopciones/adoptar.php" class="nav-link">Adoptar</a></li>
	          <li class="nav-item"><a href="../contact.html" class="nav-link">Contacto</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
</head>
<?php

$idanimal = $_GET['idanimal'];
if ($idanimal == "") {
    echo "<div style='color: red; border: 2px solid red; border-radius: 10px; padding: 10px;'>animal no disponible</div>";
    header("Refresh:100; url=index.php");
    exit;
}

include "conexion.php";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("<div style='color: red; border: 2px solid red; border-radius: 10px; padding: 10px;'>Connection failed: " . $conn->connect_error . "</div>");
}

$sql = "SELECT imagen, nombre, tipoanimal, genero, tamano, descripcion FROM adopcion where idanimal=$idanimal";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $imagen = $row["imagen"];
        $nombre = $row["nombre"];
        $tipoanimal = $row["tipoanimal"];
        $genero = $row["genero"];
        $tamano = $row["tamano"];
        $descripcion = $row["descripcion"];
    }
} else {
    echo "<div style='color: red; border: 2px solid red; border-radius: 10px; padding: 10px;'>0 results</div>";
}
$conn->close();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Estilos anteriores... */

        /* Nuevos estilos para diseño responsivo */
        .container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px;
    font-family: 'Montserrat', sans-serif;
    text-align: center; /* Centra el contenido dentro del contenedor */
}
.container > * {
    margin: 10px 0; /* Espacio entre elementos, ajusta según sea necesario */
}

        .image-container {
            width: 100%;
            max-width: 400px; /* Tamaño máximo para la imagen */
            margin-bottom: 20px;
             align-items: center;
            justify-content: center;
        }

        .image-container img {
            width: 100%;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
             align-items: center;
            justify-content: center;
        }

        .text-container {
            width: 100%;
            max-width: 600px; /* Tamaño máximo para el texto */
            text-align: center;
        }

        .name-container {
            background-color: #f8f8d9;
            padding: 10px;
            border-radius: 10px;
            color: black;
            font-size: 30px;
            margin-bottom: 10px;
        }

        .paragraph-container {
            background-color: #f8f8d9;
            padding: 15px;
            border-radius: 10px;
            color: black;
            font-size: 18px;
            margin-bottom: 20px;
        }

        .button-container {
            display: flex;
            justify-content: space-around;
        }

        .adopt-btn,
        .return-btn {
            display: inline-block;
            text-decoration: none;
            color: white;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
            background-color: blue;
        }

        .adopt-btn:hover,
        .return-btn:hover {
            background-color: #0056b3;
        }

        @media screen and (min-width: 768px) {
            .container {
                flex-direction: row;
                justify-content: space-around;
                align-items: flex-start;
            }

            .image-container,
            .text-container {
                width: 45%;
                max-width: none;
            }

            .button-container {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="image-container">
            <img src="images/<?php echo $imagen; ?>" alt="Descripción de la imagen">
        </div>
        <div class="text-container">
            <div class="name-container">
                <?php echo $nombre; ?>
            </div>
            <div class="paragraph-container">
                <p>
                    <?php echo  $tipoanimal; ?><br>
                    Sexo: <?php echo  $genero; ?><br>
                    Tamaño: <?php echo  $tamano; ?><br>
                    Descripción: <?php echo  $descripcion; ?>
                </p>
            </div>
            <div class="button-container">
                <a href="../index.html#cita" class="adopt-btn">Adoptame</a>
                <a href="adoptar.php?tipoanimal=todos#adopciones" class="return-btn">Regresar al Inicio</a>
            </div>
        </div>
        </div>
    </body>
 <footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
						<h2 class="footer-heading">Pawfect Pets</h2>
						<p>For friends that are pawfectly perfect.</p>
						<ul class="ftco-footer-social p-0">
              <li class="ftco-animate"><a href="https://www.facebook.com/utchoficial" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
              <li class="ftco-animate"><a href="https://www.instagram.com/utch_oficial/" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
            </ul>
					</div>
					<div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0">
						<h2 class="footer-heading">Quick Links</h2>
						<ul class="list-unstyled">
              <li><a href="index.html" class="py-2 d-block">Home</a></li>
              <li><a href="vet.html" class="py-2 d-block">Veterinaria</a></li>
              <li><a href="services.html" class="py-2 d-block">Estética</a></li>
              <li><a href="pricing.html" class="py-2 d-block">Adoptar</a></li>
              <li><a href="contact.html" class="py-2 d-block">Contact</a></li>
            </ul>
					</div>
					<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
						<h2 class="footer-heading">Contáctanos</h2>
						<div class="block-23 mb-3">
              <ul>
                <li><span class="icon fa fa-map"></span><span class="text">Av. Montes Americanos #9501, Col. Sector 35, C.P. 31216, Chihuahua, Chih., México.</span></li>
                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">(614) 432 20 00</span></a></li>
                <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">pawfectpets@gmail.com</span></a></li>
              </ul>
            </div>
					</div>
				</div>
				<div class="row mt-5">
          <div class="col-md-12 text-center">

            <p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by CODICE
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
			</div>
		</footer>
    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/filtro.js"></script>

</body>

</html>



