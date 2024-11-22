<?php


class ExibirHorario{
  public function retornar(){
    
    $horarios = (new HorariosBanco())->ListarHorario();
    require __DIR__."/../Public/horariosAdm.php";
  }
}