<?php

class MoradoresBanco
{
    private $pdo;

    public function __construct()
    {
        require __DIR__ . "/../Data/conectarbanco.php";
        $this->pdo = $pdo;
    }

    public function MoradoresResidencias(string $moradorId, string $residenciaId)
    {
        $sql = "INSERT INTO MORADORESRESIDENCIAS (MORADORID, RESIDENCIAID) VALUES (:MORADORID, :RESIDENCIAID)";
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue(':MORADORID', $moradorId);
        $comando->bindValue(':RESIDENCIAID', $residenciaId);
        $comando->execute();
    }


    public function cadastrarMorador($idMorador, $nomeMorador, $cpfMorador, $residenciaId)
    {
       
        $sql = "INSERT INTO moradores(idmorador, nomemorador, cpfmorador) values (:i,:n,:c)";

        
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("i", $idMorador);
        $comando->bindValue("n", $nomeMorador);
        $comando->bindValue("c", $cpfMorador);
      
        $comando->execute();

        $sql = "INSERT INTO MORADORESRESIDENCIAS (MORADORID, RESIDENCIAID) VALUES (:MORADORID, :RESIDENCIAID)";
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue(':MORADORID', $idMorador);
        $comando->bindValue(':RESIDENCIAID', $residenciaId);

         $comando->execute();

        $sql = "UPDATE residencias SET descricaoresidencia = 'Ocupada' WHERE idresidencia = :residenciaid";
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue(":residenciaid", $residenciaId);
        return $comando->execute();

    }


    public function hidratarSomenteUm($array)
    {

        $morador = new Moradores();
        $morador->setIdMorador($array['IDMORADOR']);
        $morador->setNomeMorador($array['NOMEMORADOR']);
        $morador->setCpfMorador($array['CPFMORADOR']);


        return $morador;
    }

    public function ListarMorador()
    {
        $sql = "SELECT  r.IDRESIDENCIA, m.CPFMORADOR, m.NOMEMORADOR, m.IDMORADOR AS morador,  r.IDRESIDENCIA AS residencia FROM moradores m JOIN moradoresresidencias mr ON m.IDMORADOR = mr.MORADORID JOIN residencias r ON mr.RESIDENCIAID = r.IDRESIDENCIA ORDER BY m.NOMEMORADOR;";
        $comando = $this->pdo->prepare($sql);
        $comando->execute();

      return $comando->fetchAll();
  
    }

    public function buscarPorIdMorador($idMorador)
    {
        $sql = "SELECT  r.IDRESIDENCIA, m.CPFMORADOR, m.NOMEMORADOR, m.IDMORADOR  FROM moradores m JOIN moradoresresidencias mr ON m.IDMORADOR= :i JOIN residencias r ON mr.RESIDENCIAID = r.IDRESIDENCIA ";

        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("i", $idMorador);
        $comando->execute();

        return  $comando->fetch(PDO::FETCH_ASSOC);
    }

    public function EditarMorador($idMorador, $nomeMorador, $cpfMorador, $residenciaId)
    {
        
        $sql = "UPDATE moradores SET nomemorador = :nome, cpfmorador = :cpf WHERE idmorador = :id";
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue('nome', $nomeMorador);
        $comando->bindValue('cpf', $cpfMorador);
        $comando->bindValue('id', $idMorador);
        $comando->execute();
    
        $sql = "UPDATE moradoresresidencias SET residenciaid = :residenciaId WHERE moradorid = :moradorId";
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue(':residenciaId', $residenciaId);
        $comando->bindValue(':moradorId', $idMorador);
    
        return $comando->execute();
    }

    public function AtualizarMorador($idMorador, $nomeMorador, $cpfMorador, $residenciaId)
    {
        
        $sql = "UPDATE moradores SET nomemorador = :nome, cpfmorador = :cpf WHERE idmorador = :id";
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue('nome', $nomeMorador);
        $comando->bindValue('cpf', $cpfMorador);
        $comando->bindValue('id', $idMorador);
        $comando->execute();
 
        
        $sql = "UPDATE moradoresresidencias SET residenciaid = :residenciaId WHERE moradorid = :moradorId";
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue(':residenciaId', $residenciaId);
        $comando->bindValue(':moradorId', $idMorador);
        $comando->execute();

        $sql = "UPDATE residencias SET descricaoresidencia = 'Ocupada' WHERE idresidencia = :residenciaid";
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue(":residenciaid", $residenciaId);
        return $comando->execute();
    }

    public function ExcluirMorador($idMorador){ 

            // Atualizar a descricaoresidencia na tabela residencias
            $sql = "UPDATE residencias SET descricaoresidencia = 'Vazia' WHERE idresidencia = (SELECT residenciaid FROM moradoresresidencias WHERE moradorid = :id)";
            $comando = $this->pdo->prepare($sql);
            $comando->bindValue(':id', $idMorador);
            $comando->execute();
    
            $sql = "DELETE FROM moradores WHERE idmorador = :id";
            $comando = $this->pdo->prepare($sql);
            $comando->bindValue(':id', $idMorador);
            
            return $comando->execute();
    
    }
    

    }



