<?php
//Angel Tarensi
//trucar a les funcions següents

//Si le da al botono de cerrar sesion, se destruye la sesion y se le redirige a la pagina de los articulos
function tancarSessio(){
    if(isset($_GET['tancarSessio'])){
        session_start();
        session_destroy();
        header('Location: ../Pt04_Angel_Tarensi');
        exit();
    }
}
?>