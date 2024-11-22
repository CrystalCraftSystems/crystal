<?php

class Moradores{

    public string $idMorador;
    public string $nomeMorador;
    public string $cpfMorador;
    public Residencias $idResidencia;
    
 
    public function getidMorador():string
    {
        return $this->idMorador;
    }

    public function setidMorador(string $idMorador)
    {
        $this->idMorador = $idMorador;
    }

    public function getCpfMorador():string
    {
        return $this->cpfMorador;
    }

    public function setCpfMorador(string $cpfMorador)
    {
        $this->cpfMorador = $cpfMorador;
    }

    public function getNomeMorador():string
    {
        return $this->nomeMorador;
    }

    public function setNomeMorador(string $nomeMorador)
    {
        $this->nomeMorador = $nomeMorador;
    }
}

?>