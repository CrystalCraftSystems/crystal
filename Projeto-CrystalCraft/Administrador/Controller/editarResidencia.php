<?php


class EditarResidencia
{
    public function retornar()
    {

    
        $residencia = (new ResidenciasBanco)->buscarPorIdResidencia($_GET['idResidencia']);
        require __DIR__."/../Public/editarResidencias.php";

        }
}