<?php

class HorariosBanco
{
    private $pdo;
    
    public function __construct()
    {
        require __DIR__ . "/../Data/conectarbanco.php";
        $this->pdo = $pdo; 
        
    }

    public function cadastrarHorario($idVisitante,$idRegistro, $dataRegistro, $horaEntrada, $horaSaida,$placaVeiculo)
    {
   
        $sql = "INSERT INTO horarios(idvisitante, idregistro, dataregistro, horaentrada, horasaida, placaveiculo) values (:v,:i,:d,:e,:s,:p)";
        
        $originalDate = $dataRegistro;
        $dataRegistro = date("Y-m-d", strtotime($originalDate));

        $originalHoraE = $horaEntrada;
        $horaEntrada= date("H:i:s", strtotime($originalHoraE));

        $originalHoraS = $horaSaida;
        $horaSaida= date("H:i:s", strtotime($originalHoraS));
        
        $comando = $this->pdo->prepare($sql);
      
        $comando->bindValue("v",$idVisitante);
        $comando->bindValue("i",$idRegistro);
        $comando->bindValue("d",$dataRegistro);
        $comando->bindValue("e",$horaEntrada);
        $comando->bindValue("s",$horaSaida );
        $comando->bindValue("p",$placaVeiculo);
  


        return $comando->execute();
    }
          public function ListarHorario()
          {
              $sql = "SELECT  * FROM horarios";
      
              $comando = $this->pdo->prepare($sql);
              $comando->execute();
           
              return $comando->fetchAll();
        
          }

        public function buscarPorIdRegistro($idRegistro)
        {
            $sql = "SELECT * FROM horarios WHERE idRegistro=:i";
    
            $comando = $this->pdo->prepare($sql);
            $comando->bindValue("i", $idRegistro);
            $comando->execute();
            return $comando->fetch(PDO::FETCH_ASSOC);
          
        }
        public function EditarHorario($idVisitante,$idRegistro, $dataRegistro, $horaEntrada, $horaSaida,$placaVeiculo)
        {

          $originalDate = $dataRegistro;
          $dataRegistro = date("Y-m-d", strtotime($originalDate));
  
          $originalHoraE = $horaEntrada;
          $horaEntrada= date("H:i:s", strtotime($originalHoraE));
  
          $originalHoraS = $horaSaida;
          $horaSaida= date("H:i:s", strtotime($originalHoraS));
  
           
            $sql = "UPDATE horarios SET idvisitante= :idvisitante, dataregistro = :dataregistro, horaentrada = :horaentrada, horasaida=:horasaida, placaveiculo= :placaveiculo WHERE idregistro = :id";
            $comando = $this->pdo->prepare($sql);
            $comando->bindValue('dataregistro', $dataRegistro);
            $comando->bindValue('horaentrada', $horaEntrada);
            $comando->bindValue('horasaida', $horaSaida);
            $comando->bindValue('placaveiculo', $placaVeiculo);
            $comando->bindValue('id', $idRegistro);
            $comando->bindValue('idvisitante', $idVisitante);
        
        
            return $comando->execute();
        }

      
     
        public function AtualizarHorario($idVisitante,$idRegistro, $dataRegistro, $horaEntrada, $horaSaida,$placaVeiculo)
      {

        $originalDate = $dataRegistro;
        $dataRegistro = date("Y-m-d", strtotime($originalDate));

        $originalHoraE = $horaEntrada;
        $horaEntrada= date("H:i:s", strtotime($originalHoraE));

        $originalHoraS = $horaSaida;
        $horaSaida= date("H:i:s", strtotime($originalHoraS));

         
          $sql = "UPDATE horarios SET idvisitante= :idvisitante, dataregistro = :dataregistro, horaentrada = :horaentrada, horasaida=:horasaida, placaveiculo= :placaveiculo WHERE idregistro = :id";
          $comando = $this->pdo->prepare($sql);
          $comando->bindValue('idvisitante', $idVisitante);
          $comando->bindValue('dataregistro', $dataRegistro);
          $comando->bindValue('horaentrada', $horaEntrada);
          $comando->bindValue('horasaida', $horaSaida);
          $comando->bindValue('placaveiculo', $placaVeiculo);
          $comando->bindValue('id', $idRegistro);
          
      
      
          return $comando->execute();
      }
      
      public function ExcluirHorario($idRegistro){
          $sql = "DELETE FROM horarios WHERE idregistro = :i";
      
          $comando = $this->pdo->prepare($sql);
          $comando->bindValue("i",$idRegistro);
      
          return $comando->execute();
      }
    }