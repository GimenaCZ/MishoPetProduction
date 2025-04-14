<!-- Traer Botones menú -->
<?php ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - MishoPet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../Assets/css/Contact.css">
    <link rel="stylesheet" href="../Assets/css/Index.css">
</head>
<body>
<header class="header">
    <div class="logo">
        <a href="../index.php">
            <img src="../Views/Images/logo.png" alt="MishoPet Logo">
        </a>
    </div>
    <nav class="navbar">
        <ul class="nav-links">
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="Services.php">Servicios</a></li> 
            <li><a href="Contact.php">Contactanos</a></li>
            <li><a href="Reserva.php">Reservar Cita</a></li>
        </ul>
    </nav>
</header>
    <div class="container mt-5">
    <div class="row">
        <!-- Primera columna: Información de la clínica -->
        <div class="col-md-6">
            <!-- Título de la clínica -->
            <h3 class="text-center" style="color: #004541; font-weight: 900;">CLINICA VETERINARIA<br>MISHOPET</h3>
            
            <!-- Teléfono de contacto -->
            <div class="mt-5 info-box p-3 rounded text-center mb-4" style="background-color: #004541;">
                <img src="../Views/Images/imgContact/dog.png" alt="dog" class="img-dog">
                <p class="mt-3 phone-number">+51 934 790 612</p>
                <img src="../Views/Images/imgContact/cat.png" alt="cat" class="img-cat">
            </div>
            
            <!-- Fila con horarios y urgencias -->
            <div class="mt-4 row">
                <div class="col-md-6">
                    <div class="info-box p-3 rounded" style="background-color: #00857c;">
                        <h4>HORARIOS</h4>
                        <p>Lunes a Viernes 08h a 22h<br>Sábados y Domingos 08h a 12h</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box p-3 rounded" style="background-color: #00857c;">
                        <h4>URGENCIAS</h4>
                        <p>Abierto las 24h</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Segunda columna: Formulario de contacto -->
        <div class="col-md-6">
            <div class="contact-box p-4 rounded" style="background-color: #00857c;">
            <h3 class="text-center" style="color: #004541; font-weight: 900;">CONTACTO</h3>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nombre" required>
                    </div>
                    <div class="mt-2 form-group">
                        <input type="text" class="form-control" placeholder="Teléfono" required>
                    </div>
                    <div class="mt-2 form-group">
                        <input type="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="mt-2 form-group">
                        <textarea class="form-control" rows="3" placeholder="Mensaje" required></textarea>
                    </div>
                    <button type="submit" class="mt-2 btn btn-warning btn-block font-weight-bold" style="color: #ffffff">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>
    <!-- Ubicación con mapa -->
    <div class="row text-center mt-5 mb-5">
        <div class="col-md-12">
        <h3 class="mb-4 text-center" style="color: #004541; font-weight: 900;">UBÍCANOS</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7806.996335895055!2d-77.07163206315565!3d-11.939971617044511!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105d19a13fa473d%3A0xf854f91375b6055c!2sMallplaza%20Comas!5e0!3m2!1ses-419!2spe!4v1730790765359!5m2!1ses-419!2spe" 
            width="95%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </div>
</body>
<footer class="footer">
    <div class="footer-content">
        <div class="footer-logo">
            <img src="../Views/images/logo.png" alt="MishoPet Logo">
        </div>
        <div class="footer-links">
            <h4>Acerca de MishoPet</h4>
            <a href="#">¿Quiénes somos?</a>
            <a href="#">Ofrecemos</a>
            <a href="#">Ubicación y Horarios</a>
        </div>
        <div class="footer-links">
            <h4>Productos y servicios</h4>
            <a href="#">PetShop</a>
            <a href="#">Servicios</a>
        </div>
        <div class="footer-links">
            <h4>Atención al cliente</h4>
            <a href="#">Contáctanos</a>
            <a href="#">Reserva de citas</a>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; MishoPet 2024</p>
        <div class="social-icons">
            <span>Síguenos en:</span>
            <a href="#"><img src="../Views/images/icono_ig.png" alt="Instagram"></a>
            <a href="#"><img src="../Views/images/icono_fc.png" alt="Facebook"></a>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
