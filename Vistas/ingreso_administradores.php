
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Certificado sanitario</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
<style>
    body {
        background-size: 100%;
        background-image: url("css/alcaldia2.jpg");
        position: absolute;
        margin-left: 450px;
    }
</style>
  <br>
  <div id="cabeza">
  <font color="Olive" face=",arialComic Sans MS">
  <h1><center><font color="white">Certicado Sanitario Yopal</font></center></h1>
  </font></div>  

  <div class="form">
        <div id="login">   
          <h1>Acceso de Funcionarios</h1>
          <form  method="post" id="frmLogin">
          <div class="field-wrap">
            <label>
              Cedula de Cidadania<span class="req">*</span>
            </label>
            <input type="text" name="Cc_admin" required autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label>
              Contraseña<span class="req">*</span>
            </label>
            <input type="password" name="pass_admin" required autocomplete="off"/>
          </div>
          <input type="submit" value="Ingresar" class="button button-block"/>
          </form>
      </div><!-- tab-content -->
</div> <!-- /form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script  src="js/index.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#frmLogin').on('submit', function (e) {
            if (!e.isDefaultPrevented()) {
             
                var formData = $(this).serialize(); //Serializamos los campos del formulario
                $.ajax({
                    type        : 'POST', // Metodo de Envio
                    url         : '../Controlador/UsuarioController.php?action=LoginAdmin', // Ruta del envio
                    data        : formData, // our data object
                    encode      : true
                })
                    .done(function(data) {
                        if (data.indexOf('1') != -1){
                            window.location.href = "RegistroFuncionario.php";
                           
                              }else if(data.indexOf('errorPass') != -1){
                            alert("Contraseña Incorrecta");
                         }else if(data.indexOf('UserNoEx') != -1){
                            alert("Usuario no Existe");
                          }
                    });
                event.preventDefault();
            }
        });
    });
</script>



</body>

</html>