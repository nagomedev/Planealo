<?php

class Controlador {

    public function __construct($var = null){
        $this -> $var;
    }

    public function main() {
        $controlador = "";
        $accion = "";

        if(isset($_GET['controlador']) && !empty($_GET['controlador'])) {
            $controlador = $_GET['controlador'];
        }
        else {
            $controlador = "inicio";
        }

        if(isset($_GET['accion']) && !empty($_GET['accion'])) {
            $controlador = $_GET['accion'];
        }
        else {
            $controlador = "";
        }
    }
}