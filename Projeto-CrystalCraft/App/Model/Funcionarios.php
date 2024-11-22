<?php
class Funcionarios{

    public string $idFuncionario;
    public string $nomeFuncionario;
    public string $cpfFuncionario;
    public string $dataNascimentoFuncionario;
    public string $funcaoFuncionario;


    public function getIdFuncionario():string
    {
        return $this->idFuncionario;
    }

    public function setIdFuncionario(string $idFuncionario)
    {
        $this->idFuncionario = $idFuncionario;
    }

   
    public function getNomeFuncionario():string
    {
        return $this->nomeFuncionario;
    }


    public function setNomeFuncionario(string $nomeFuncionario)
    {
        $this->nomeFuncionario = $nomeFuncionario;
    }

    public function getCpfFuncionario():string
    {
        return $this->cpfFuncionario;
    }

    public function setCpfFuncionario(string $cpfFuncionario)
    {
        $this->cpfFuncionario = $cpfFuncionario;
    }

    public function getDataNascimentoFuncionario():string
    {
        return $this->dataNascimentoFuncionario;
    }

    public function setDataNascimentoFuncionario(string $dataNascimentoFuncionario)
    {
        $this->dataNascimentoFuncionario = $dataNascimentoFuncionario;
    }

    public function getFuncaoFuncionario()
    {
        return $this->funcaoFuncionario;
    }

    public function setFuncaoFuncionario($funcaoFuncionario)
    {
        $this->funcaoFuncionario = $funcaoFuncionario;
    }
}
?>