<?php
session_start();
require_once (__DIR__.'/../Modelo/Usuario.php');
require_once (__DIR__.'/../Modelo/Solcitudes.php');
require_once (__DIR__.'/../Modelo/cliente.php');
require_once (__DIR__.'/../Modelo/FormularioSolicitud.php');
if(!empty($_GET['action'])){
    UsuarioController::main($_GET['action']);
}else{

}
class UsuarioController
{
    static function main($action){
        if ($action == "crear"){
            UsuarioController::crear();
        }else if($action == "Login"){
            UsuarioController::Login();
        }else if($action =="crear2"){
            UsuarioController::crear2();
        }else if($action =="editar"){
            UsuarioController::editar();
        }else if($action=="Delete"){
            UsuarioController::eliminar();
        }else if($action == "CerrarSession"){
            UsuarioController::CerrarSession();
        }
    }

    public function CerrarSession (){
        header("Location: ../Vistas/index.php");
        session_destroy();
        $_SESSION['validacion'] = false;

    }

    static public function crear(){
        try{
            $arrayusuario = array();
            $arrayusuario['Nombre'] = $_POST['nom_user'];
            $arrayusuario['Apellido'] = $_POST['ape_user'];
            $arrayusuario['Cedula'] = $_POST['cc_user'];
            $arrayusuario['Correo'] = $_POST['correo_user'];
            $arrayusuario['Direccion'] = $_POST['direc_user'];
            $arrayusuario['Celular']= $_POST['celu_user'];
            $Contrasenamd5 = $_POST['pass_user'];
            $md5 = md5($Contrasenamd5);
            $arrayusuario['Contrasena']=$md5;
            $Usuarios = new Usuario($arrayusuario);
            $Usuarios->insertar();
          
            $_SESSION['validacion'] = false;
            header("Location: ../Vistas/Formulario.php?respuesta=correcto");
        }catch (Exception $w){
            header("Location: ../Vistas/Formulario.php?respuesta=error");

        }
    }
    static public function crear2(){
        try{
            $arrayusuario = array();
            $arrayusuario['Nombre'] = $_POST['nom_user'];
            $arrayusuario['Apellido'] = $_POST['ape_user'];
            $arrayusuario['Cedula'] = $_POST['cc_user'];
            $arrayusuario['Correo'] = $_POST['correo_user'];
            $arrayusuario['Direccion'] = $_POST['direc_user'];
            $arrayusuario['Celular']= $_POST['celu_user'];
            $Contrasenamd5 = $_POST['pass_user'];
            $md5 = md5($Contrasenamd5);
            $arrayusuario['Contrasena']=$md5;
            $Usuarios = new cliente($arrayusuario);
            $Usuarios->insertar();
            header("Location: ../Vistas/RegistroFuncionario.php?respuesta=correcto");
        }catch (Exception $w){
            header("Location: ../Vistas/RegistroFuncionario.php?respuesta=error");

        }
    }


    public function tablaPersona (){
        $arrPerson = Usuario::getAll();

        $htmlSelect = "";
        foreach ($arrPerson as $Usuario) {
            $htmlSelect .= "<tr>";
            $htmlSelect .= "<td hidden  >".$Usuario->getIdfuncionario()."</td>";
            $htmlSelect .= "<td>" . $Usuario->getNombre() . " ".$Usuario->getApellido()."</td>";
            $htmlSelect .= "<td>".$Usuario->getCedula()."</td>";
            $htmlSelect .= "<td>";
            $htmlSelect .= "<a href='?id=".$Usuario->getId()." type='button' data-toggle='tooltip' title='Ver Persona' class='btn docs-tooltip btn-danger btn-xs' ><i class='fa fa-eye'></i></a>";
            $htmlSelect .= "<spam> </spam>";
            $htmlSelect .= "<a href='RegistroFuncionario.php?id=".$Usuario->getIdfuncionario()."' type='button' data-toggle='tooltip' title='Actualizar' class='btn docs-tooltip btn-primary btn-xs'><i class='fa fa-edit'></i></a>";
            $htmlSelect .= "<spam> </spam>";
            $htmlSelect .= "<a href='../Controlador/UsuarioController.php?action=Delete&id=".$Usuario->getIdfuncionario()."' type='button' data-toggle='tooltip' title='Eliminar' class='btn docs-tooltip btn-succes btn-xs'><i class='fa fa-minus-square'></i></a>";
            $htmlSelect .= "</td>";
            $htmlSelect .= "</tr>";
        }
         $htmlSelect .= "</tr>";
        return  $htmlSelect;
    }
    public function tablaPersona2 (){
        $arrPerson = cliente::getAll();
        $htmlSelect = "";
        foreach ($arrPerson as $Usuario) {
            echo var_dump($Usuario);
            $htmlSelect .= "<tr>";
            $htmlSelect .= "<td   >".$Usuario->getId()."</td>";
            $htmlSelect .= "<td>" . $Usuario->getNombre() . " ".$Usuario->getApellido()."</td>";
            $htmlSelect .= "<td>".$Usuario->getCedula()."</td>";
            $htmlSelect .= "<td>";
            $htmlSelect .= "<button type='button' id='myBtn' data-toggle='tooltip' title='Ver Persona' class='btn docs-tooltip btn-danger btn-xs'  onclick='mi_funcion()' ><i class='fa fa-eye'></i></button>";
            $htmlSelect .= "<spam> </spam>";
            $htmlSelect .= "<a href='../Controlador/SolicitudController.php?action=Solicitud&id=".$Usuario->getId()."' type='button' data-toggle='tooltip' title='Aceptar Solicitud' class='btn docs-tooltip btn-primary btn-xs'><i class='fa fa-check'></i></a>";
            $htmlSelect .= "<spam> </spam>";
            $htmlSelect .= "<a href='../Controlador/UsuarioController.php?action=Delete&id=".$Usuario->getId()."' type='button' data-toggle='tooltip' title='Eliminar' class='btn docs-tooltip btn-succes btn-xs'><i class='fa fa-minus-square'></i></a>";
            $htmlSelect .= "</td>";
            $htmlSelect .= "</tr>";
        }
        $htmlSelect .= "</tr>";
        return  $htmlSelect;
    }
    public function tablaPersona3 ($id){
        $arrPerson = cliente::buscarforidUsuario($id);

        $htmlSelect = "";
        foreach ($arrPerson as $Usuario) {
            $htmlSelect .= "<tr>";
            $htmlSelect .= "<td >".$Usuario->getId()."</td>";
            $htmlSelect .= "<td>" . $Usuario->getNombre() . " ".$Usuario->getApellido()."</td>";
            $htmlSelect .= "<td>".$Usuario->getCedula()."</td>";
             $htmlSelect .= "</tr>";
        }
        $htmlSelect .= "</tr>";
        return  $htmlSelect;
    }

    public function Solicitudes($id){
        $arrPerson = Solcitudes::getAllDocumento($id);

        $htmlSelect = "";
        foreach ($arrPerson as $Usuario) {
            if($Usuario->getIdcliente()==$id){
            $htmlSelect .= "<tr>";
            if($Usuario-getCedulaPdf()!=null){
            $htmlSelect .= "<td ><a href='".$Usuario->getCedulaPdf()."'  download='".$Usuario->getCedulaPdf()."' type='button' data-toggle='tooltip' title='Descargar Archivo' class='btn docs-tooltip btn-primary btn-xs'><i class='glyphicon glyphicon-save'></i></a></td>";
            }else {
                $htmlSelect .= "<td >No hay archivo</td>";
            }
            $htmlSelect .= "<td>" . $Usuario->getCamComerPdf() . "</td>";
            $htmlSelect .= "<td>".$Usuario->getFormSuelo()."</td>";
            $htmlSelect .= "<td>";
            $htmlSelect .= $Usuario->getRutPdf();
            $htmlSelect .= "</td>";
            $htmlSelect .= "</tr>";
            }else {
            $htmlSelect .= "<tr>";
            $htmlSelect .= "<td >No hay archivo</td>";
            $htmlSelect .= "<td>No hay archivo</td>";
            $htmlSelect .= "<td>No hay archivo</td>";
            $htmlSelect .= "<td>No hay archivos</td>";
            $htmlSelect .= "</tr>";
        }
        }
        $htmlSelect .= "</tr>";
        return  $htmlSelect;
    }

    static public function eliminar($id){
        try {
            $id = $_GET['id'];
            $funcionario = new Usuario();
            $funcionario->eliminar($id);
            header("Location: ../Vistas/RegistroFuncionario.php?respuesta=correctoE");
        }catch (Exception $e){
            header("Location: ../Vistas/RegistroFuncionario.php?respuesta=errorE");

        }
    }
    public function validarFormularios ($id){
        $getrows = $tmp->getRows("SELECT * FROM datosformulario inner join solicitud WHERE Cliente='". $id."' and Idcliente='". $id."'");
         if(count($getrows) >= 1){
            $_SESSION['validacion']=true;
      echo true;
         }else{
            $_SESSION['validacion']=false;
       echo true;
         }
    }

    static public function Login (){
        try {
            $tmp = new cliente();
            $Usuario = $_POST['cedula_user'];
            $Contrasena = $_POST['pass_admin'];
            $arrayPersona =array();
            if(!empty($Usuario) && !empty($Contrasena)){
                $respuesta = UsuarioController::validLogin($Usuario, $Contrasena);
                if (is_array($respuesta)) {
                 $_SESSION['verificar']=true;
                 $_SESSION['DataPersona'] = $respuesta;
                
                 $getrows = $tmp->getRows("SELECT * FROM datosformulario inner join solicitud WHERE Cliente='". $_SESSION['DataPersona']['Id']."' and Idcliente='". $_SESSION['DataPersona']['Id']."'");
               
                 if(count($getrows) >= 1){
                    $_SESSION['validacion']=true;
                    echo TRUE;
                 }else{
                    $_SESSION['validacion']=false;
                    echo TRUE;
                 }
                
                }else if($respuesta == "Password Incorrecto"){
                    echo '<script>
                        alert("Contraseña incorrecta");
                              </script>';
                }else if($respuesta == "No existe el usuario"){
                    echo '<script>            
                        alert("No exite ese usuario");
                              </script>';
                }
            }else{
                echo '<script>
                        alert("Campos vacios");
                              </script>';;
            }
        } catch (Exception $e) {
            echo '<script>
                        alert("Error!'.+$e->getMessage().'");
                              </script>';
        }
    }

    public function validLogin ($Usuario, $Contrasena) {

        $arraypersona = array();
        $tmp = new cliente();
        $md5 = md5($Contrasena);
        $getTempUser = $tmp->getRows("SELECT * FROM cliente WHERE Cedula = '".$Usuario."'");
        if(count($getTempUser) >= 1){
            $getrows = $tmp->getRows("SELECT * FROM cliente WHERE Cedula = '".$Usuario."' AND Contrasena = '".$md5."'");
            if(count($getrows) >= 1){
                foreach ($getrows as $valor) {
                    return $valor;
                }
            }else{
                return "Password Incorrecto";
            }
        }else{
            return "No existe el usuario";
        }
        $tmp->Disconnect();
        return $arraypersona;
    }

}
?>