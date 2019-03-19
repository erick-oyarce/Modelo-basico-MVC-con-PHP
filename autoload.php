<?php

//carga automaticamente todos los controladores
function autocargar($clasename){
    include 'controllers/'.$clasename . '.php';
}

spl_autoload_register('autocargar');