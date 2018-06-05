<?php


require_once('db_abstract_class.php'); //importando clase conexion
class Usuario extends db_abstract_class //hereda metodos de conexion
{

    private $Id;
    private $idfuncionario;
    private $Nombre;
    private $Apellido;
    private $Cedula;
    private $Correo;
    private $Direccion;
    private $Celular;
    private $Contrasena;
    private $cargo;

    public function __construct($usuario_data=array())
    {
        parent::__construct(); //
        if(count($usuario_data)>1){ //
            foreach ($usuario_data as $campo => $valor){
                $this->$campo = $valor;
            }
        }else {
            $this->Id = "";
            $this->idfuncionario="";
            $this->Nombre = "";
            $this->Apellido = "";
            $this->Cedula = "";
            $this->Correo = "";
            $this->Direccion = "";
            $this->Celular = "";
            $this->Contrasena="";
            $this->cargo="";

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
    public function setId($Id)
    {
        $this->Id = $Id;
    }
 /**
     * @return string
     */
    public function getcargo()
    {
        return $this->cargo;
    }

    /**
     * @param string $Id
     */
    public function setcargo($cargo)
    {
        $this->cargo = $cargo;
    }
    /**
     * @return string
     */
    public function getIdfuncionario()
    {
        return $this->idfuncionario;
    }

    /**
     * @param string $idfuncionario
     */
    public function setIdfuncionario($idfuncionario)
    {
        $this->idfuncionario = $idfuncionario;
    }

    /**
     * @return string
     */
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * @param string $Nombre
     */
    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;
    }

    /**
     * @return string
     */
    public function getApellido()
    {
        return $this->Apellido;
    }

    /**
     * @param string $Apellido
     */
    public function setApellido($Apellido)
    {
        $this->Apellido = $Apellido;
    }

    /**
     * @return string
     */
    public function getCedula()
    {
        return $this->Cedula;
    }

    /**
     * @param string $Cedula
     */
    public function setCedula($Cedula)
    {
        $this->Cedula = $Cedula;
    }

    /**
     * @return string
     */
    public function getCorreo()
    {
        return $this->Correo;
    }

    /**
     * @param string $Correo
     */
    public function setCorreo($Correo)
    {
        $this->Correo = $Correo;
    }

    /**
     * @return string
     */
    public function getDireccion()
    {
        return $this->Direccion;
    }

    /**
     * @param string $Direccion
     */
    public function setDireccion($Direccion)
    {
        $this->Direccion = $Direccion;
    }

    /**
     * @return string
     */
    public function getCelular()
    {
        return $this->Celular;
    }

    /**
     * @param string $Celular
     */
    public function setCelular($Celular)
    {
        $this->Celular = $Celular;
    }

    /**
     * @return string
     */
    public function getContrasena()
    {
        return $this->Contrasena;
    }

    /**
     * @param string $Contrasena
     */
    public function setContrasena($Contrasena)
    {
        $this->Contrasena = $Contrasena;

    }

    public function insertar2()
    {
        $this->insertRow("INSERT INTO funcionario VALUES(NULL,?,?,?,?,?,?,?,?)",array(

            $this->Nombre,
            $this->Apellido,
            $this->Cedula,
            $this->Correo,
            $this->Direccion,
            $this->Celular,
            $this->Contrasena,
            $this->cargo

        ));
        $this->Disconnect();
    }

    public function insertar()
    {
        $this->insertRow("INSERT INTO cliente VALUES(NULL,?,?,?,?,?,?,?)",array(

            $this->Nombre,
            $this->Apellido,
            $this->Cedula,
            $this->Correo,
            $this->Direccion,
            $this->Celular,
            $this->Contrasena

        ));
        $this->Disconnect();
    }

    public function editar()
    {
        $this->updateRow("UPDATE funcionario SET Nombres = ?, Cedula = ? WHERE idfuncionario = ?",array(

            $this->Nombres,
            $this->Cedula
        ));
        $this->Disconnect();
    }

    public function eliminar($id)
    {
        $this->deleteRow("DELETE FROM bdsanitario.funcionario WHERE funcionario.idfuncionario = '$id'");
        $this->Disconnect();
    }
    public static function buscarForId($id)
    {
        $tmp = new Usuario();
        if ($id > 0) {
            $getrow = $tmp->getRow("SELECT * FROM funcionario WHERE idfuncionario =?", array($id));
            $tmp = new Usuario();
            $tmp->idfuncionario = $getrow['idfuncionario'];
            $tmp->Nombre = $getrow['Nombre'];
            $tmp->Apellido = $getrow['Apellido'];
            $tmp->Cedula = $getrow['Cedula'];
            $tmp->Correo = $getrow['Correo'];
            $tmp->Direccion = $getrow['Direccion'];
            $tmp->Celular = $getrow['Celular'];
            $tmp->Contrasena = $getrow['Contrasena'];
            $tmp->cargo=$getrow['cargo'];
            $tmp->Disconnect();
            return $tmp;
        }else{
            return NULL;
        }

    }
    public static function buscarForId2($id)
    {
        $tmp = new Usuario();
        if ($id > 0) {
            $getrow = $tmp->getRow("SELECT * FROM cliente WHERE Id =?", array($id));
            $tmp = new Usuario();
            $tmp->idfuncionario = $getrow['Id'];
            $tmp->Nombre = $getrow['Nombre'];
            $tmp->Apellido = $getrow['Apellido'];
            $tmp->Cedula = $getrow['Cedula'];
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
        $tmp = new Usuario();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $persona = new Usuario();
            $persona->idfuncionario = $valor['idfuncionario'];
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

    public static function buscar2($query)
    {
        $arrPacientes = array();
        $tmp = new Usuario();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $persona = new Usuario();
            $persona->idfuncionario = $valor['Id'];
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
        return Usuario::buscar("SELECT * FROM bdsanitario.funcionario");
    }
    public static function getAll2()
    {
        return cliente::buscar2("SELECT * FROM bdsanitario.cliente");
    }
    public static function  buscarforidUsuario($id){
        return cliente::buscar("SELECT * FROM bdsanitario.cliente WHERE Id ='$id'");
    }
}
?>