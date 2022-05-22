<?php
    // para capturar la info que se ingresa en los inputos del form tengo que crear variables.

    $nombre = $_POST ['nombre'];
    $mail = $_POST ['email'];
    $mensaje = $_POST['textarea'];
    
    // a quien le mando esta info
    $para = 'alexiscabj74@gmail.com';
    $asunto = 'este mail fue enviado desde la web';

    // funcion que envia la info del form
    mail($para, $asunto, utf8_decode($mensaje));

    // funcion que redirreciona al usaria una vez que completo el form

    header('location:src/paginas/exito.html');

?>
