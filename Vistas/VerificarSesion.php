<?php

if (basename($_SERVER['REQUEST_URI']) == "index.php"){
    if (!empty($_SESSION["DataPersona"])){

        var_dump($_SESSION["DataPersona"]);
        header("Location: Formulario.php");
    }
}else{
    if (empty($_SESSION["DataPersona"])){

        header("Location: index.php");
    }
}
?>

