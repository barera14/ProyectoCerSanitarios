<?php
require "../Controlador/UsuarioController.php";
?>
<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title> sanitario</title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/inicio.css" />

    <link rel="stylesheet" href="css/style.css">


</head>

<body>
<style>
        .dropbtn {
            background-color: #179b77;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropbtn:hover, .dropbtn:focus {
           /*background-color: #2980B9;
       */ }

        .dropdown {
            position: relative;
            display: inline-block;
            margin-left: -250px;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            overflow: auto;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown a:hover {background-color: #ddd}

        .show {display:block;}
    </style>
    <style>
                body{
                    background-size: 100%;
                    background-image: url("css/funcionario.jpg");
                    position: absolute;
                }
                #customers {
                    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                }

                #customers td, #customers th {
                    border: 1px solid #ddd;
                    padding: 8px;
                }

                #customers tr{background-color: #f2f2f2;}


                #customers th {
                    padding-top: 12px;
                    padding-bottom: 12px;
                    text-align: left;
                    background-color: #1ab188;
                    color: white;
                }

            </style>
<br>
<div style="margin-left: 450px;">
<div class="dropdown">
<button onclick='myFunctions()' class='dropbtn'><?php echo ($_SESSION['DataPersona']['Nombre'])." ".($_SESSION['DataPersona']['Apellido']); ?></button>
    <div id='myDropdown' class='dropdown-content'>
     <a href='#home'>Actualizar datos</a>
    <a href='../Controlador/UsuarioController.php?action=CerrarSession'>Cerrar Sesion</a>
    </div>
</div>
    <div id="cabeza">
        <font color="Olive" face=",arialComic Sans MS">
            <h1><center><font color="white">Certificado Sanitario Yopal</font></center></h1>
        </font>
     </div>
    <?php if(!empty($_GET['respuesta'])){ ?>
        <?php if ($_GET['respuesta'] == "correcto"){ ?>
            <script>
                alert("Registro Exitoso");
            </script>
        <?php }else if($_GET['respuesta'] == "error"){ ?>
            <script>
                alert("Registro fallido");
            </script>
        <?php }  ?>
    <?php } ?>

    <div class="form">
      
        <div>
           
            <div id="login">
                <h1>Lista de Solicitudes</h1>
                <table id="customers">
                    <thead>
                    <tr>
                        <th hidden>id</th>
                        <th>Nombres</th>
                        <th>Cedula</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php echo UsuarioController::tablaPersona2(); ?>
                    </tbody>
                </table>
            </div>
        </div><!-- tab-content -->
    </div>
</div> <!-- /form -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    /* When the user clicks on the button,
     toggle between hiding and showing the dropdown content */
    function myFunctions() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {

            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>

<script  src="js/index.js"></script>


</body>

</html>


