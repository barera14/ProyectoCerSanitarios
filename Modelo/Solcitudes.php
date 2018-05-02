<?php

require_once('db_abstract_class.php'); //importando clase conexion
class Solcitudes  extends db_abstract_class//hereda metodos de conexion
{

    private $Id;
    private $CedulaPdf;
    private $CamComerPdf;
    private $FormSuelo;
    private $RutPdf;
    private $Idcliente;


    public function __construct($Solicitudes_data=array())
    {
        parent::__construct(); //
        if (count($Solicitudes_data)>1) { //
            foreach ($Solicitudes_data as $campo => $valor) {
                $this->$campo = $valor;
            }
        } else {
            $this->Id ="";
            $this->CedulaPdf="";
            $this->CamComerPdf ="";
            $this->FormSuelo ="";
            $this->RutPdf ="";
            $this->Idcliente ="";

        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param mixed $Id
     */
    public function setId($Id)
    {
        $this->Id = $Id;
    }

    /**
     * @return mixed
     */
    public function getCedulaPdf()
    {
        return $this->CedulaPdf;
    }

    /**
     * @param mixed $Cedulapdf
     */
    public function setCedulaPdf($CedulaPdf)
    {
        $this->CedulaPdf = $CedulaPdf;
    }

    /**
     * @return string
     */
    public function getCamComerPdf()
    {
        return $this->CamComerPdf;
    }

    /**
     * @param string $CamComerPdf
     */
    public function setCamComerPdf(string $CamComerPdf)
    {
        $this->CamComerPdf = $CamComerPdf;
    }

    /**
     * @return mixed
     */


    /**
     * @return mixed
     */
    public function getFormSuelo()
    {
        return $this->FormSuelo;
    }

    /**
     * @param mixed $FormSuelo
     */
    public function setFormSuelo($FormSuelo)
    {
        $this->FormSuelo = $FormSuelo;
    }

    /**
     * @return mixed
     */
    public function getRutPdf()
    {
        return $this->RutPdf;
    }

    /**
     * @param mixed $RutPdf
     */
    public function setRutPdf($RutPdf)
    {
        $this->RutPdf = $RutPdf;
    }

    /**
     * @return string
     */
    public function getIdcliente()
    {
        return $this->Idcliente;
    }

    /**
     * @param string $Idcliente
     */
    public function setIdcliente($Idcliente)
    {
        $this->Idcliente = $Idcliente;
    }

    public function insertar()
    {
        $this->insertRow("INSERT INTO solicitud VALUES(NULL,?,?,?,?,?)",array(

            $this->CedulaPdf,
            $this->CamComerPdf,
            $this->FormSuelo,
            $this->RutPdf,
            $this->Idcliente
        ));

        $this->Disconnect();
   }
    public function insertar2()
    {
        $this->insertRow("INSERT INTO solicitud VALUES(NULL,?,?,?,?,?)",array(

            $this->CedulaPdf,
            $this->CamComerPdf,
            $this->FormSuelo,
            $this->RutPdf,
            $this->Idcliente
        ));

        $this->Disconnect();
    }
    public static function buscar($query)
    {
        $arrPacientes = array();
        $tmp = new Solcitudes();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $persona = new Solcitudes();
            $persona->Id = $valor['Id'];
            $persona->CedulaPdf = $valor['CedulaPdf'];
            $persona->CamComerPdf = $valor['CamComerPdf'];
            $persona->FormSuelo = $valor['FormSuelo'];
            $persona->RutPdf = $valor['RutPdf'];
            $persona->Idcliente = $valor['Idcliente'];
            array_push($arrPacientes, $persona);
        }
        $tmp->Disconnect();
        return $arrPacientes;
    }
    public static function buscarForId($id)
    {
        $tmp = new Solcitudes();
        if ($id > 0) {
            $getrow = $tmp->getRow("SELECT * FROM solicitud WHERE Idcliente =?", array($id));
            $tmp = new Solcitudes();
            $tmp->Id = $getrow['Id'];
            $tmp->CedulaPdf = $getrow['CedulaPdf'];
            $tmp->CamComerPdf = $getrow['CamComerPdf'];
            $tmp->FormSuelo = $getrow['FormSuelo'];
            $tmp->RutPdf = $getrow['RutPdf'];
            $tmp->Idcliente = $getrow['Idcliente'];
            $tmp->Disconnect();
            return $tmp;
        }else{
            return NULL;
        }

    }
    public function editar()
    {
        $this->updateRow("UPDATE Solicitudes SET Cedulapdf = ?, CamComerpdf = ?, FormSuelo = ?, Rutpdf = ?, Idcliente = ? WHERE id = ?",array(

            $this->Cedulapdf,
            $this->CamComerpdf,
            $this->FormSuelo,
            $this->RutPdf,
            $this->Idcliente,
        ));
        $this->Disconnect();
    }
    public static function getAll()
    {
        return Solcitudes::buscar("SELECT * FROM bdsanitario.solicitud");
    }
    public static function getAllDocumento($id)
    {
        return Solcitudes::buscar("SELECT * FROM solicitud WHERE Idcliente =".$id."");
    }

    public function eliminar($id)
    {
   //     $this->deleteRow("DELETE FROM bdsanitario.funcionario WHERE funcionario.idfuncionario = '$id'");
 //       $this->Disconnect();
    }
}

?>