<?php 

function usuarioOK(){
    $user = $_REQUEST['nombre'];
    $passwd = $_REQUEST['contraseña'];
    $caracteres = strlen($user);
    
    if($caracteres >= 8){
        if ($passwd == strrev($user)){
            return true;
        }else {
            return false;
        }  
    }else {
        return false;
    } 
}

?>