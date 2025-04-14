<?php
include_once '../Models/db.php';

class ReservaController {

    // Método de prueba de conexión
    public function testConnection() {
        // Conectar a la base de datos
        $db = new Database();
        $conn = $db->connect();

        if ($conn) {
            echo "Conexión exitosa a la base de datos.";
        } else {
            echo "Error de conexión.";
        }
    }

    // Método para realizar una reserva
    public function reservar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Recibir los datos del formulario
            $nombres_completos = $_POST['nombres'];
            $telefono = $_POST['telefono'];
            $correo = $_POST['correo'];
            $mascota = $_POST['mascota'];
            $tipo = $_POST['tipo'];
            $motivo = $_POST['motivo'];
            $fecha = $_POST['fecha'];

            // Conectar a la base de datos
            $db = new Database();
            $conn = $db->connect();

            if ($conn) {
                // Preparar la consulta SQL para insertar los datos
                $sql = "INSERT INTO reservas_mascotas (nombres_completos, telefono, correo_electronico, nombre_mascota, tipo_mascota, motivo, fecha_cita) 
                        VALUES (:nombres_completos, :telefono, :correo, :mascota, :tipo, :motivo, :fecha)";

                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':nombres_completos', $nombres_completos);
                $stmt->bindParam(':telefono', $telefono);
                $stmt->bindParam(':correo', $correo);
                $stmt->bindParam(':mascota', $mascota);
                $stmt->bindParam(':tipo', $tipo);
                $stmt->bindParam(':motivo', $motivo);
                $stmt->bindParam(':fecha', $fecha);

                // Ejecutar la consulta y verificar si la inserción fue exitosa
                if ($stmt->execute()) {
                    echo "¡Reserva realizada con éxito!";
                } else {
                    echo "Error al realizar la reserva.";
                }
            } else {
                echo "Error de conexión a la base de datos.";
            }
        }
    }
}

// Crear una instancia del controlador y llamar al método de reserva
$reservaController = new ReservaController();
$reservaController->reservar();  // Llamamos al método que guarda la reserva
?>
