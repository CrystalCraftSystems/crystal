<?php


class EditarHorario
{
    public function retornar()
    {

    
        $registro = (new HorariosBanco)->buscarPorIdRegistro($_GET['idRegistro']);
        require __DIR__."/../Public/editarHorarios.php";

        }
}