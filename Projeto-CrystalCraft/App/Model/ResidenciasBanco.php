<?php

class ResidenciasBanco
{
    private $pdo;
    
    public function __construct()
    {
        require __DIR__ . "/../Data/conectarbanco.php";
        $this->pdo = $pdo; 
        
    }


      public function cadastrarResidencia($idResidencia,$numResidencia, $bloco, $idMorador){
        $sql = "INSERT INTO residencias(idresidencia, numresidencia, bloco, idMorador) values (:i,:n,:b,:m)";
        
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("i",$idResidencia);
        $comando->bindValue("n",$numResidencia);
        $comando->bindValue("b",$bloco);
        $comando->bindValue("m",$idMorador);
 
  
  
       return $comando->execute();
        }

       public function hidratar($array)
        {
            $todos = [];
    
            foreach ($array as $valor) {
                $residencia = new Residencias();
                $residencia->setIdresidencia($valor['IDRESIDENCIA']);
                $residencia->setNumResidencia($valor['NUMRESIDENCIA']);
                $residencia->setBloco($valor['BLOCO']);
                //$residencia->setIdMorador($valor['IDMORADOR']);
               
    
                $todos[] = $residencia;
            }
            return $todos;
        }

        public function hidratarSomenteUm($array)
        {
        
            $residencia = new Residencias();
                $residencia->setIdresidencia($array['IDRESIDENCIA']);
                $residencia->setNumResidencia($array['NUMRESIDENCIA']);
                $residencia->setBloco($array['BLOCO']);
                //$residencia->setIdMorador($array['IDMORADOR']);
               
          

           return $residencia;
        }

        public function ListarResidencia(){

          $sql = "SELECT * FROM residencias";
          $comando = $this->pdo->prepare($sql);
          $comando->execute();
          $todasResidencias = $comando->fetchAll(PDO::FETCH_ASSOC);
          return $this->hidratar($todasResidencias) ;
         
          }

          public function buscarPorIdResidencia($idResidencia){
            $sql = "SELECT * FROM residencias WHERE idResidencia=:i";
    
            $comando = $this->pdo->prepare($sql);
            $comando->bindValue("i",$idResidencia);
            $comando->execute();
            $resultado = $comando->fetch(PDO::FETCH_ASSOC);
    
            return $this->hidratarSomenteUm($resultado);
        }

        public function EditarMorador($idMorador,$nomeMorador, $cpfMorador, $idResidencia){
            $sql = "INSERT INTO moradores(idmorador, nomemorador, cpfmorador, idresidencia) values (:i,:n,:c,:r)";
  
            $comando = $this->pdo->prepare($sql);
            $comando->bindValue("i",$idMorador);
            $comando->bindValue("n",$nomeMorador);
            $comando->bindValue("c",$cpfMorador);
            $comando->bindValue("r",$idResidencia);
        
            return $comando->execute();
        }
        
        public function AtualizarMorador($idMorador,$nomeMorador, $cpfMorador, $idResidencia){
            $sql = "UPDATE moradores set  nomemorador=:n, cpfmorador = :c, idresidencia = :r where idmorador=:i";
        
            $comando = $this->pdo->prepare($sql);
            $comando->bindValue("i",$idMorador);
            $comando->bindValue("n",$nomeMorador);
            $comando->bindValue("c",$cpfMorador);
            $comando->bindValue("r",$idResidencia);
        
            return $comando->execute();
        }
        
        public function ExcluirMorador($idMorador){
            $sql = "DELETE FROM moradores WHERE idmoradores = :i";
        
            $comando = $this->pdo->prepare($sql);
            $comando->bindValue("i",$idMorador);
        
            return $comando->execute();
        }
    }