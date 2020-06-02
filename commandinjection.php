<?php
    //var_dump($_POST);
    $entrada = $_POST['texto'];

    /* Parte de código a implementar para mejorar la salida */

    


    //system($entrada); // entrada -> whoami
    //echo shell_exec($entrada); // entrada -> whoami
    //eval("echo ".$entrada.";"); // entrada -> exec('whoami')
    echo $entrada;
?>