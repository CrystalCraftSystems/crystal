<?php

class VisitantesBanco
{
    private $pdo;
    
    public function __construct()
    {
        require __DIR__ . "/../Data/conectarbanco.php";
        $this->pdo = $pdo; 
        
    }


      public function cadastrarVisitante($idVisitante,$nomeVisitante, $descricaoVisitante, $idMorador){
        $sql = "INSERT INTO visitantes(idvisitante, nomevisitante, descricaovisitante, idmorador) values (:i,:n,:d,:m)";
        
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("i",$idVisitante);
        $comando->bindValue("n",$nomeVisitante);
        $comando->bindValue("d",$descricaoVisitante);
        $comando->bindValue("m",$idMorador);
  
  
       return $comando->execute();
        }

       public function hidratar($array)
        {
            $todos = [];
    
            foreach ($array as $valor) {
                $visitante = new Visitantes();
                $visitante->setIdVisitante($valor['IDVISITANTE']);
                $visitante->setNomeVisitante($valor['NOMEVISITANTE']);
                $visitante->setDescricaoVisitante($valor['DESCRICAOVISITANTE']);
               // $visitante->setIdMorador($valor['IDMORADOR']);
            
                $todos[] = $visitante;
            }
            return $todos;
        }

        public function hidratarSomenteUm($array)
        {
        
            $visitante = new Visitantes();
                $visitante->setIdVisitante($array['IDVISITANTE']);
                $visitante->setNomeVisitante($array['NOMEVISITANTE']);
                $visitante->setDescricaoVisitante($array['DESCRICAOVISITANTE']);
               // $visitante->setIdMorador($array['IDMORADOR']);
               
          

           return $visitante;
        }

        public function ListarVisitante(){

          $sql = "SELECT * FROM visitantes";
          $comando = $this->pdo->prepare($sql);
          $comando->execute();
          $todosVisitantes = $comando->fetchAll(PDO::FETCH_ASSOC);
          return $this->hidratar($todosVisitantes) ;
         
          }

          public function buscarPorIdVisitante($idVisitante){
            $sql = "SELECT * FROM visitantes WHERE idVisitantes=:i";
    
            $comando = $this->pdo->prepare($sql);
            $comando->bindValue("i",$idVisitante);
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