<?php
// MVC/Modelo/Categoria.php

class Categoria {
    private $conn;

    public function __construct($dbConnection) {
        $this->conn = $dbConnection;
    }

    // Obtener todas las categorías
    public function obtenerTodas() {
        $query = "SELECT * FROM categorias";
        $result = $this->conn->query($query);
        return $result;
    }

    // Obtener una categoría por su ID
    public function obtenerPorId($id_categoria) {
        $query = "SELECT nombre FROM categorias WHERE id_categoria = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id_categoria);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}
?>
