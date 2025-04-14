<?php
class Database {
    private $host = "dpg-cvu4aube5dus73cfuk40-a.oregon-postgres.render.com";
    private $port = "5432";
    private $dbname = "reservas_mascotas";
    private $user = "user";
    private $password = "5S0O2Akmp3xX7yDdprKMWgp1EeJgv2Cj";
    public $conn;

    public function connect() {
        try {
            $this->conn = new PDO("pgsql:host=$this->host;port=$this->port;dbname=$this->dbname;sslmode=require", $this->user, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexión exitosa";  // Esto debería mostrar un mensaje si la conexión es exitosa
            return $this->conn;
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
            return null;
        }
    }
    
}
?>
