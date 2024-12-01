<?php

class ResidenciasBanco
{
    private $pdo;

    public function __construct()
    {
        require __DIR__ . "/../Data/conectarbanco.php";
        $this->pdo = $pdo;
    }
    
    public function cadastrarResidencia($idResidencia, $numResidencia, $bloco, $descricaoResidencia)
    {
        
            $sql = "INSERT INTO residencias(idresidencia, numresidencia, bloco, descricaoresidencia) values (:i,:n,:b,:d)";

            $comando = $this->pdo->prepare($sql);
            $comando->bindValue("i", $idResidencia);
            $comando->bindValue("n", $numResidencia);
            $comando->bindValue("b", $bloco);
            $comando->bindValue("d", $descricaoResidencia);
            
            return $comando->execute();
        }
    


    public function hidratarSomenteUm($array)
    {

        $residencia = new Residencias();
        $residencia->setIdresidencia($array['IDRESIDENCIA']);
        $residencia->setNumResidencia($array['NUMRESIDENCIA']);
        $residencia->setBloco($array['BLOCO']);
        $residencia->setDescricaoResidencia($array['DESCRICAORESIDENCIA']);

        return $residencia;
    }

    public function listarResidencia()
    {
        $sql = "SELECT * FROM residencias";        
        $comando = $this->pdo->prepare($sql);
        $comando->execute();

        return $comando->fetchAll();
    }

    public function buscarPorIdResidencia($idResidencia)
    {
        $sql = "SELECT * FROM residencias WHERE idResidencia=:i";

        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("i", $idResidencia);
        $comando->execute();


        return  $comando->fetch(PDO::FETCH_ASSOC);
    }

    public function EditarResidencia($idResidencia, $numResidencia, $bloco, $descricaoResidencia)
    {
        $sql = "UPDATE residencias SET  numresidencia = :n, bloco=:b, descricaoresidencia=:d WHERE idresidencia = :i";
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("i", $idResidencia);
        $comando->bindValue("n", $numResidencia);
        $comando->bindValue("b", $bloco);
        $comando->bindValue("d", $descricaoResidencia);
        
        return $comando->execute();
    }

    public function AtualizarResidencia($idResidencia, $numResidencia, $bloco, $descricaoResidencia)
    {


        $sql = "UPDATE residencias SET  numresidencia = :n, bloco=:b, descricaoresidencia=:d WHERE idresidencia = :i";
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("i", $idResidencia);
        $comando->bindValue("n", $numResidencia);
        $comando->bindValue("b", $bloco);
        $comando->bindValue("d", $descricaoResidencia);

        return $comando->execute();
    }


    public function ExcluirResidencia($idResidencia)
    {
        $sql = "DELETE FROM residencias WHERE idresidencia = :i";

        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("i", $idResidencia);

        return $comando->execute();
    }
}

