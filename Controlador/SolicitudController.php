<?php
require_once (__DIR__.'/../Modelo/Solcitudes.php');
require_once (__DIR__.'/../Modelo/FormularioSolicitud.php');
require_once (__DIR__.'/../Modelo/cliente.php');
if(!empty($_GET['action'])){
    SolicitudController::main($_GET['action']);
}else{

}
class SolicitudController
{
    static function main($action){
        if ($action == "crear"){
            SolicitudController::crear();
        }else if($action =="editar"){
            SolicitudController::editar();
        }else if($action=="Delete"){
            SolicitudController::eliminar();
        }else if($action=="crearS"){
            SolicitudController::crearSolicitud();
        }else if($action=="Solicitud"){
            SolicitudController::cambiarEstado();
        }
    }
    static public function cambiarEstado(){
        try {
            $ObjEspecialidad = FormularioSolicitud::buscarForId($_GET['id']);
            echo var_dump($ObjEspecialidad);
//            $ObjEspecialidad->setEstaado("Aceptada");
//            $ObjEspecialidad->editarEstado();
//            header("Location: ../Vista/Solicitudes.php?respuesta=correcto");
        } catch (Exception $e) {
            header("Location: ../Vista/Solicitudes.php?respuesta=error");
        }
    }
    static public function crearSolicitud(){
        try{
            $tmp = new cliente();
            $arrayusuario = array();
            $arrayusuario['SolicitudNo'] = 12345;
            $arrayusuario['Nombres'] = $_POST['nombre'];
            $arrayusuario['Cedula'] = $_POST['cedula'];
            $arrayusuario['CiudadExpedicion'] = $_POST['ciudad_expe'];
            $arrayusuario['RazonSocial'] = $_POST['razon'];
            $arrayusuario['Nit']= $_POST['nit'];
            $arrayusuario['Direccion']= $_POST['direccion'];
            $arrayusuario['Barrio']= $_POST['barrio'];
            $arrayusuario['Comuna']= $_POST['comuna'];
            $arrayusuario['Vereda']= $_POST['vereda'];
            $arrayusuario['Corregimiento']= $_POST['Corregimiento'];
            $arrayusuario['Telefono']= $_POST['telefono'];
            $arrayusuario['Regimen']= $_POST['regimen'];
            $arrayusuario['Actividad_Economica']= $_POST['actividad'];
            $arrayusuario['Estaado']= 'Solicitada';
            $arrayusuario['Cliente']= $_POST['id'];
            var_dump($arrayusuario);
            $Solicitudes = new FormularioSolicitud($arrayusuario);
            $Solicitudes->insertar();
            var_dump($Solicitudes);
            
            $getrows = $tmp->getRows("SELECT * FROM datosformulario inner join solicitud WHERE Cliente='".$id."' and Idcliente='".$id."'");
            var_dump($getrows);
             if(count($getrows) >= 1){
                $_SESSION['validacion']=true;
                header("Location: ../Vistas/InformacionEstadoSolicitud.php");
             }else{
                $_SESSION['validacion']=false;
                header("Location: ../Vistas/Formulario.php?respuesta=correcto");
             }

        }catch (Exception $w){
            echo $w;
          // header("Location: ../Vistas/Formulario.php?respuesta=error");

        }
    }
    public function Estado ($id){
        $arrayF= FormularioSolicitud::buscar("SELECT * FROM datosformulario WHERE Cliente ='$id'");

        $htmlSelect = "";
        foreach ($arrayF as $valor) {

            $htmlSelect .= "<spam>".$valor->getEstaado()."</spam>";
        }
        return  $htmlSelect;
    }
    static public function crear(){
        try{
            $arraySolicitud = array();
            $tmp = new cliente();
            $cedula= $_POST['cedula'];
            $id=$_POST['id'];
            if (is_uploaded_file($_FILES['Archivo_recibo']['tmp_name'])&& is_uploaded_file($_FILES['Archivo_carnet']['tmp_name'])&& is_uploaded_file($_FILES['Archivo_poliza']['tmp_name'])&& is_uploaded_file($_FILES['Archivo_fotos']['tmp_name']))
            {
                $nombreDirectorio = "../Archivos/";
                $Archivo_recibo = $_FILES['Archivo_recibo']['name'];
                $Archivo_carnet = $_FILES['Archivo_carnet']['name'];
                $Archivo_poliza = $_FILES['Archivo_poliza']['name'];
                $Archivo_fotos = $_FILES['Archivo_fotos']['name'];

                $nuevo_path="../Archivos/".$cedula."-".$Archivo_recibo;
                $nuevo_path2="../Archivos/".$cedula."-".$Archivo_carnet;
                $nuevo_path3="../Archivos/".$cedula."-".$Archivo_poliza;
                $nuevo_path4="../Archivos/".$cedula."-".$Archivo_fotos;

                move_uploaded_file($_FILES['Archivo_recibo']['tmp_name'], $nombreDirectorio.$cedula."-".$Archivo_recibo);
                move_uploaded_file($_FILES['Archivo_carnet']['tmp_name'], $nombreDirectorio.$cedula."-".$Archivo_carnet);
                move_uploaded_file($_FILES['Archivo_poliza']['tmp_name'], $nombreDirectorio.$cedula."-".$Archivo_poliza);
                move_uploaded_file($_FILES['Archivo_fotos']['tmp_name'], $nombreDirectorio.$cedula."-".$Archivo_fotos);

            } else{
                echo ("No se ha podido subir el fichero");
                //header("Location: ../Vista/createPersona.php?respuesta=errorFoto");
            }
            $arraySolicitud['CedulaPdf'] =$nuevo_path;
            $arraySolicitud['CamComerPdf'] = $nuevo_path2;
            $arraySolicitud['FormSuelo'] = $nuevo_path3;
            $arraySolicitud['RutPdf'] = $nuevo_path4;
            $arraySolicitud['Idcliente']= $id;
            $Usuarios = new Solcitudes($arraySolicitud);
            $Usuarios->insertar();
         
           
             $getrows = $tmp->getRows("SELECT * FROM datosformulario inner join solicitud WHERE Cliente='".$id."' and Idcliente='".$id."'");
                var_dump($getrows);
                 if(count($getrows) >= 1){
                    $_SESSION['validacion']=true;
                    header("Location: ../Vistas/InformacionEstadoSolicitud.php");
                 }else{
                    $_SESSION['validacion']=false;
                    header("Location: ../Vistas/Formulario.php?respuesta=correcto");
                 }
        }catch (Exception $w){
            header("Location: ../Vistas/Formulario.php?respuesta=error");
        }
    }
    static public function buscarID($Id){
        try {
            return Solcitudes::buscarForId($Id);
        } catch (Exception $e) {
            echo "Error en Solicitud controller";
            header("Location: ../ShowSolicitud.php?respuesta=error");
        }
    }


    static public function editar (){
        try {
            $arraySolicitud = array();
            $arraySolicitud['Cedulapdf']=$_POST['Cedulapdf_user'];
            $arraySolicitud['CamComerpdf'] = $_POST['CamComer_user'];
            $arraySolicitud['FormSuelo'] = $_POST['FormuSuelo_user'];
            $arraySolicitud['Rutpdf'] = $_POST['rutpdf_user'];
            $arraySolicitud['Idcliente'] = $_POST['Idcliente'];
            $arraySolicitud['Id'] =$_POST['Id'];
            $Solicitud = new Actas($arraySolicitud);
            $Solicitud->editar();
            header("Location: ../Vista/UpdateSolicitud.php?respuesta=correcto");
        } catch (Exception $e) {
            header("Location: ../Vista/UpdateSolicitud.php?respuesta=error");
        }
    }



}

?>