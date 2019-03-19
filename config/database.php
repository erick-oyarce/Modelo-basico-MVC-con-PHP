<?php

class database{
    public static function conectar(){
        $conexion = new mysqli("localhost", "root", "", "notas_master");
        
        $conexion->query("SET NAME 'utf8'");
        
        return $conexion;
    }
}