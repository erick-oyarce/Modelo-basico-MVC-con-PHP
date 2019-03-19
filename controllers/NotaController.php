<?php

class NotaController{
    
    public function listar(){
        //modelo
        require_once 'models/nota.php';
        
        
        //accion del controlador
        $nota = new Nota();
        
              
        $notas = $nota->conseguirTodos('notas');
        
        require_once 'views/nota/listar.php';
        
    }
    
    public function crear(){
        //modelo
        require_once 'models/nota.php';
        
        $nota = new Nota();
        $nota->setUsuario_id(1);
        $nota->setTitulo("Nota desde PHP MVC");
        $nota->setDescripcion("Descripcion de prueba en la nota");
        $nota->guardar();
        
        header("Location: index.php?controller=Nota&action=listar");
        
    }
    
    public function borrar(){
        
    }
}