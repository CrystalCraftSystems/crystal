<?php

class ExcluirHorario{
    public function retornar(){
    $horarios = (new HorariosBanco())->excluirHorario($_GET['idRegistro']);                   
    if (empty($horarios)) {
        die("Não foi possível excluir o registro");
    }

    $mensagem = '
<div class="notification is-success">
    <button class="delete"></button>
        Registro excluído.
</div>
<a href="./index.php">Voltar! </a>';
    echo $mensagem;
    }
}