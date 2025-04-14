<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MishoPet</title>
    <link rel="stylesheet" href="../Assets/css/Services.css">
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

<div style="max-width: 500px; margin: 50px auto; background-color: #00897B; padding: 30px; border-radius: 10px;">
    <h2 style="text-align: center; color: #fff; font-weight: bold; margin-bottom: 10px;">RESERVA TU CITA</h2>
    <form action="../Controllers/ReservaController.php" method="POST">
        <input type="text" name="nombres" placeholder="Nombres completos" required style="width: 100%; padding: 10px; margin: 8px 0; border-radius: 5px; border: none;">
        
        <input type="tel" name="telefono" placeholder="Teléfono" required style="width: 100%; padding: 10px; margin: 8px 0; border-radius: 5px; border: none;">
        
        <input type="email" name="correo" placeholder="Correo electrónico" required style="width: 100%; padding: 10px; margin: 8px 0; border-radius: 5px; border: none;">
        
        <input type="text" name="mascota" placeholder="Nombre de la mascota" required style="width: 100%; padding: 10px; margin: 8px 0; border-radius: 5px; border: none;">

        <div style="margin: 8px 0; color: #fff;">
            <label style="display: block; margin-bottom: 5px;">Tipo de mascota:</label>
            <label style="margin-right: 15px;">
                <input type="radio" name="tipo" value="Perro" required> Perro
            </label>
            <label>
                <input type="radio" name="tipo" value="Gato"> Gato
            </label>
        </div>

        <textarea name="motivo" placeholder="Motivo de la cita" required style="width: 100%; padding: 10px; margin: 8px 0; border-radius: 5px; border: none;"></textarea>

        <input type="date" name="fecha" required style="width: 100%; padding: 10px; margin: 8px 0; border-radius: 5px; border: none;">

        <button type="submit" style="background-color: #FFCA28; color: #000; border: none; padding: 10px 20px; border-radius: 5px; margin-top: 10px; cursor: pointer;">Enviar</button>
    </form>
</div>

<!-- Footer -->
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
</body>
</html>
