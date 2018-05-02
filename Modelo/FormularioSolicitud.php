<?php

/**
 * Created by PhpStorm.
 * User: tatiana torres
 * Date: 31/03/2018
 * Time: 7:39 PM
 */
require_once('db_abstract_class.php');
class FormularioSolicitud extends db_abstract_class
{

    private $idFormulario;
    private $FechaRecibido;
    private $SolicitudNo;
    private $Nombres;
    private $Cedula;
    private $CiudadExpedicion;
    private $RazonSocial;
    private $Nit;
    private $Direccion;
    private $Barrio;
    private $Comuna;
    private $Vereda;
    private $Corregimiento;
    private $Telefono;
    private $Regimen;
    private $Actividad_Economica;
    private $Estaado;
    private $Cliente;



    public function __construct($FormularioSo_data=array())
    {
        parent::__construct(); //
        if (count($FormularioSo_data)>1) { //
            foreach ($FormularioSo_data as $campo => $valor) {
                $this->$campo = $valor;
            }
        } else {
            $this->idFormulario="";
            $this->FechaRecibido="";
            $this->SolicitudNo="";
            $this->Nombres="";
            $this->Cedula="";
            $this->CiudadExpedicion="";
            $this->RazonSocial="";
            $this->Nit="";
            $this->Direccion="";
            $this->Barrio="";
            $this->Comuna="";
            $this->Vereda="";
            $this->Corregimiento="";
            $this->Telefono="";
            $this->Regimen="";
            $this->Actividad_Economica="";
            $this->Estaado="";
            $this->Cliente="";

        }
    }


    public static function buscarForId($id)
    {
        $tmp = new FormularioSolicitud();
        if ($id > 0) {
            $getrow = $tmp->getRow("SELECT * FROM datosformulario WHERE Cliente =?", array($id));
            $tmp = new FormularioSolicitud();
            $tmp->idFormulario = $getrow['idFormulario'];
            $tmp->FechaRecibido = $getrow['FechaRecibido'];
            $tmp->SolicitudNo = $getrow['SolicitudNo'];
            $tmp->Nombres = $getrow['Nombres'];
            $tmp->Cedula = $getrow['Cedula'];
            $tmp->CiudadExpedicion = $getrow['CiudadExpedicion'];
            $tmp->RazonSocial = $getrow['RazonSocial'];
            $tmp->Nit = $getrow['Nit'];
            $tmp->Direccion = $getrow['Direccion'];
            $tmp->Barrio = $getrow['Barrio'];
            $tmp->Comuna = $getrow['Comuna'];
            $tmp->Vereda = $getrow['Vereda'];
            $tmp->Corregimiento = $getrow['Corregimiento'];
            $tmp->Telefono = $getrow['Telefono'];
            $tmp->Regimen = $getrow['Regimen'];
            $tmp->Actividad_Economica = $getrow['Actividad_Economica'];
            $tmp->Estaado = $getrow['Estaado'];
            $tmp->Cliente  = $getrow['Cliente'];
            $tmp->Disconnect();
            return $tmp;
        }else{
            return NULL;
        }
    }
    /**
     * @return mixed
     */
    public function getIdFormulario()
    {
        return $this->idFormulario;
    }

    /**
     * @param mixed $idFormulario
     */
    public function setIdFormulario($idFormulario)
    {
        $this->idFormulario = $idFormulario;
    }

    /**
     * @return mixed
     */
    public function getFechaRecibido()
    {
        return $this->FechaRecibido;
    }

    /**
     * @param mixed $FechaRecibido
     */
    public function setFechaRecibido($FechaRecibido)
    {
        $this->FechaRecibido = $FechaRecibido;
    }

    /**
     * @return mixed
     */
    public function getSolicitudNo()
    {
        return $this->SolicitudNo;
    }

    /**
     * @param mixed $SolicitudNo
     */
    public function setSolicitudNo($SolicitudNo)
    {
        $this->SolicitudNo = $SolicitudNo;
    }

    /**
     * @return mixed
     */
    public function getNombres()
    {
        return $this->Nombres;
    }

    /**
     * @param mixed $Nombres
     */
    public function setNombres($Nombres)
    {
        $this->Nombres = $Nombres;
    }

    /**
     * @return mixed
     */
    public function getCedula()
    {
        return $this->Cedula;
    }

    /**
     * @param mixed $Cedula
     */
    public function setCedula($Cedula)
    {
        $this->Cedula = $Cedula;
    }

    /**
     * @return mixed
     */
    public function getCiudadExpedicion()
    {
        return $this->CiudadExpedicion;
    }

    /**
     * @param mixed $CiudadExpedicion
     */
    public function setCiudadExpedicion($CiudadExpedicion)
    {
        $this->CiudadExpedicion = $CiudadExpedicion;
    }

    /**
     * @return mixed
     */
    public function getRazonSocial()
    {
        return $this->RazonSocial;
    }

    /**
     * @param mixed $RazonSocial
     */
    public function setRazonSocial($RazonSocial)
    {
        $this->RazonSocial = $RazonSocial;
    }

    /**
     * @return mixed
     */
    public function getNit()
    {
        return $this->Nit;
    }

    /**
     * @param mixed $Nit
     */
    public function setNit($Nit)
    {
        $this->Nit = $Nit;
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->Direccion;
    }

    /**
     * @param mixed $Direccion
     */
    public function setDireccion($Direccion)
    {
        $this->Direccion = $Direccion;
    }

    /**
     * @return mixed
     */
    public function getBarrio()
    {
        return $this->Barrio;
    }

    /**
     * @param mixed $Barrio
     */
    public function setBarrio($Barrio)
    {
        $this->Barrio = $Barrio;
    }

    /**
     * @return mixed
     */
    public function getComuna()
    {
        return $this->Comuna;
    }

    /**
     * @param mixed $Comuna
     */
    public function setComuna($Comuna)
    {
        $this->Comuna = $Comuna;
    }

    /**
     * @return mixed
     */
    public function getVereda()
    {
        return $this->Vereda;
    }

    /**
     * @param mixed $Vereda
     */
    public function setVereda($Vereda)
    {
        $this->Vereda = $Vereda;
    }

    /**
     * @return mixed
     */
    public function getCorregimiento()
    {
        return $this->Corregimiento;
    }

    /**
     * @param mixed $Corregimiento
     */
    public function setCorregimiento($Corregimiento)
    {
        $this->Corregimiento = $Corregimiento;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->Telefono;
    }

    /**
     * @param mixed $Telefono
     */
    public function setTelefono($Telefono)
    {
        $this->Telefono = $Telefono;
    }

    /**
     * @return mixed
     */
    public function getRegimen()
    {
        return $this->Regimen;
    }

    /**
     * @param mixed $Regimen
     */
    public function setRegimen($Regimen)
    {
        $this->Regimen = $Regimen;
    }

    /**
     * @return mixed
     */
    public function getActividadEconomica()
    {
        return $this->Actividad_Economica;
    }

    /**
     * @param mixed $Actividad_Economica
     */
    public function setActividadEconomica($Actividad_Economica)
    {
        $this->Actividad_Economica = $Actividad_Economica;
    }

    /**
     * @return mixed
     */
    public function getEstaado()
    {
        return $this->Estaado;
    }

    /**
     * @param mixed $Estaado
     */
    public function setEstaado($Estaado)
    {
        $this->Estaado = $Estaado;
    }

    /**
     * @return mixed
     */
    public function getCliente()
    {
        return $this->Cliente;
    }

    /**
     * @param mixed $Cliente
     */
    public function setCliente($Cliente)
    {
        $this->Cliente = $Cliente;
    }



    public static function buscar($query)
    {
        $arrPacientes = array();
        $tmp = new FormularioSolicitud();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $persona = new FormularioSolicitud();
            $persona->idFormulario = $valor['idFormulario'];
            $persona->FechaRecibido = $valor['FechaRecibido'];
            $persona->SolicitudNo = $valor['SolicitudNo'];
            $persona->Nombres = $valor['Nombres'];
            $persona->Cedula = $valor['Cedula'];
            $persona->CiudadExpedicion = $valor['CiudadExpedicion'];
            $persona->RazonSocial = $valor['RazonSocial'];
            $persona->Nit = $valor['Nit'];
            $persona->Direccion = $valor['Direccion'];
            $persona->Barrio = $valor['Barrio'];
            $persona->Comuna = $valor['Comuna'];
            $persona->Vereda = $valor['Vereda'];
            $persona->Corregimiento = $valor['Corregimiento'];
            $persona->Telefono = $valor['Telefono'];
            $persona->Regimen = $valor['Regimen'];
            $persona->Actividad_Economica = $valor['Actividad_Economica'];
            $persona->Estaado = $valor['Estaado'];
            $persona->Cliente = $valor['Cliente'];



            array_push($arrPacientes, $persona);
        }
        $tmp->Disconnect();
        return $arrPacientes;
    }

    public static function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function insertar()
    {
        $this->insertRow("INSERT INTO datosformulario (SolicitudNo, Nombres, Cedula, CiudadExpedicion, RazonSocial, Nit, Direccion, Barrio, Comuna, Vereda, Corregimiento, Telefono, Regimen, Actividad_Economica, Estaado, Cliente) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",array(
            $this->SolicitudNo,
            $this->Nombres,
            $this->Cedula,
            $this->CiudadExpedicion,
            $this->RazonSocial,
            $this->Nit,
            $this->Direccion,
            $this->Barrio,
            $this->Comuna,
            $this->Vereda,
            $this->Corregimiento,
            $this->Telefono,
            $this->Regimen,
            $this->Actividad_Economica,
            $this->Estaado,
            $this->Cliente

        ));

        $this->Disconnect();
    }

    public function editarEstado()
    {
        $this->updateRow("UPDATE datosformulario SET Estaado = ? WHERE Cliente = ?", array(

            $this->Estaado,
            $this->Cliente
        ));
        $this->Disconnect();
    }
    public function editar()
    {
 $this->updateRow("UPDATE datosformulario SET Estaado = ? WHERE idFormulario = ?", array(

            $this->Estaado
        ));
        $this->Disconnect();
    }

    public function eliminar($id)
    {
        // TODO: Implement eliminar() method.
    }
}