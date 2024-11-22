<?php

class Visitantes{

    public string $idVisitante;
    public string $nomeVisitante;
    public string $descricaoVisitante;
    public Moradores $idMorador;

    public function getIdVisitante():string
    {
        return $this->idVisitante;
    }

    public function setIdVisitante(string $idVisitante)
    {
        $this->idVisitante = $idVisitante;
    }

    public function getNomeVisitante():string
    {
        return $this->nomeVisitante;
    }

    public function setNomeVisitante(string $nomeVisitante)
    {
        $this->nomeVisitante = $nomeVisitante;
    }
 
    public function getDescricaoVisitante():string
    {
        return $this->descricaoVisitante;
    }

    public function setDescricaoVisitante(string $descricaoVisitante)
    {
        $this->descricaoVisitante = $descricaoVisitante;
    }

}

?>