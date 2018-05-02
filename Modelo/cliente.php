<?php

require_once('db_abstract_class.php');
class cliente extends db_abstract_class
{
    private $Id;
    private $Nombre;
    private $Apellido;
    private $Cedula;
    private $Correo;
    private $Direccion;
    private $Celular;
    private $Contrasena;

    public function __construct($cliente_data=array())
    {
        parent::__construct(); //
        if (count($cliente_data)>1) { //
            foreach ($cliente_data as $campo => $valor) {
                $this->$campo = $valor;
            }
        } else {
            $this->Id ="";
            $this->Nombre = "";
            $this->Apellido = "";
            $this->Cedula = "";
            $this->Correo = "";
            $this->Direccion = "";
            $this->Celular = "";
            $this->Contrasena="";

        }
    }

    /**
     * @return string
     */
    public function getId() 
    {
        return $this->Id;
    }

    /**
     * @param string $Id
     */
    public function setId(string $Id)
    {
        $this->Id = $Id;
    }

public function getNombre()
{
    return $this->Nombre;
}
/**
 * @param string $Nombre
 */
public function setNombre(string $Nombre)
{
    $this->Nombre = $Nombre;
}/**
 * @return string
 */
public function getApellido()
{
    return $this->Apellido;
}/**
 * @param string $Apellido
 */
public function setApellido(string $Apellido)
{
    $this->Apellido = $Apellido;
}/**
 * @return string
 */
public function getCedula()
{
    return $this->Cedula;
}/**
 * @param string $Cedula
 */
public function setCedula(string $Cedula)
{
    $this->Cedula = $Cedula;
}/**
 * @return string
 */
public function getCorreo()
{
    return $this->Correo;
}/**
 * @param string $Correo
 */
public function setCorreo(string $Correo)
{
    $this->Correo = $Correo;
}/**
 * @return string
 */
public function getDireccion()
{
    return $this->Direccion;
}/**
 * @param string $Direccion
 */
public function setDireccion(string $Direccion)
{
    $this->Direccion = $Direccion;
}/**
 * @return string
 */
public function getCelular()
{
    return $this->Celular;
}/**
 * @param string $Celular
 */
public function setCelular(string $Celular)
{
    $this->Celular = $Celular;
}/**
 * @return string
 */
public function getContrasena()
{
    return $this->Contrasena;
}/**
 * @param string $Contraseña
 */
public function setContrasena(string $Contrasena)
{
    $this->Contrasena = $Contrasena;
}
    public  function insertar()
    {
        $this->insertRow("INSERT INTO cliente VALUES(NULL,?,?,?,?,?,?,?)",array(

            $this->Nombre,
            $this->Apellido,
            $this->Cedula,
            $this->Correo,
            $this->Direccion,
            $this->Celular,
            $this->Contrasena,

        ));
        $this->Disconnect();
    }
public function editar ()
{
    $this->updateRow("UPDATE cliente SET Nombre = ?, Cedula = ? Where Id = ?",array(

        $this->Nombre,
        $this->Cedula,

    ));
    $this->Disconnect();

}

public function eliminar($id)
{
    $this->deleteRow("DELETE FROM bdsanitario.cliente WHERE cliente.Id = '$id'");
   $this->Disconnect();

}

public static  function  buscarForId($id)
{
    $tmp = new cliente();
    if($id > 0){
     $getrow = $tmp->getRow("SELECT * FROM cliente WHERE  Id=?", array($id));
     $tmp = new cliente();
     $tmp->Id = $getrow['Id'];
     $tmp->Nombre = $getrow['Nombre'];
     $tmp->Apellido = $getrow['Apellido'];
     $tmp->Cedula =$getrow['Cedula'];
     $tmp->Correo = $getrow['Correo'];
     $tmp->Direccion = $getrow['Direccion'];
     $tmp->Celular = $getrow['Celular'];
     $tmp->Contrasena = $getrow['Contrasena'];
     $tmp->Disconnect();
     return $tmp;

    }else{
        return NULL;
    }
}
public static function buscar($query)
{
    $arrPacientes = array();
    $tmp = new cliente();
    $getrows = $tmp->getRows($query);

    foreach ($getrows as $valor) {
        $persona = new cliente();
        $persona->Id = $valor['Id'];
        $persona->Nombre = $valor['Nombre'];
        $persona->Apellido = $valor['Apellido'];
        $persona->Cedula = $valor['Cedula'];
        $persona->Correo = $valor['Correo'];
        $persona->Direccion = $valor['Direccion'];
        $persona->Celular = $valor['Celular'];
        $tmp->Contrasena = $valor['Contrasena'];
        array_push($arrPacientes, $persona);
    }
    $tmp->Disconnect();
    return $arrPacientes;
}

    public static function getAll()
    {
        return cliente::buscar("SELECT * FROM bdsanitario.cliente");
    }
    public static function getAllLogin()
    {
        return cliente::buscar("SELECT * FROM bdsanitario.cliente");
    }
    public static function  buscarforidUsuario($id)
    {
        return cliente::buscar("SELECT * FROM bdsanitario.cliente WHERE Id ='$id'");
    }


}
?>


}