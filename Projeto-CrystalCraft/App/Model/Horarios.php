<?php

class Horarios
{

    public Visitantes $idVisitante;
    private string $idRegistro;
    private string $dataRegistro;
    private string $horaEntrada;
    private string $horaSaida;
    private string $placaVeiculo;

/*    public function setIdVisitante(Visitantes $idVisitante): void
    {
        $this->idVisitante = $idVisitante;
    }

    public function getIdVisitante()
    {
        return $this->idVisitante;
    }
    public function setVisitantes(string $idVisitante){
    $this->visitantes[]= new Visitantes($idVisitante);
   }

   public function mostrarVisitantes(){
    foreach($this-> visitantes as $k => $v){
        $visitante= $k : {$v->getIdVisitante()};
    }
   }*/

    public function getIdRegistro(): string
    {
        return $this->idRegistro;
    }

    public function setIdRegistro(string $idRegistro)
    {
        $this->idRegistro = $idRegistro;
    }

    public function getDataRegistro(): string
    {
        return $this->dataRegistro;
    }


    public function setDataRegistro(string $dataRegistro)
    {
        $this->dataRegistro = $dataRegistro;
    }

    public function getHoraEntrada(): string
    {
        return $this->horaEntrada;
    }

    public function setHoraEntrada(string $horaEntrada)
    {
        $this->horaEntrada = $horaEntrada;
    }

    public function getHoraSaida(): string
    {
        return $this->horaSaida;
    }

    public function setHoraSaida(string $horaSaida)
    {
        $this->horaSaida = $horaSaida;
    }

    public function getPlacaVeiculo(): string
    {
        return $this->placaVeiculo;
    }

    public function setPlacaVeiculo(string $placaVeiculo)
    {
        $this->placaVeiculo = $placaVeiculo;
    }
}
