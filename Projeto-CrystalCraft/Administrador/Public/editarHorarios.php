<?php require __DIR__ . "/cabecalhoAdm.php";?>

<style>
    h1 {
        font-family: 'Candara';
    }
</style>

<div class="box">
<h1 class="title has-text-centered"><strong>Editar horários de entrada e saída<strong></h1>
    <form action="./index.php?acao=atualizar-horarioAdm" method="post">
       
    <input class="input" type="hidden" name="idRegistro" value="<?= !empty($registro) ? $registro['IDREGISTRO']:''?>">

    <div class="field">
            <label class="label">ID do visitante</label>
            <div class="control">
                <input class="input" type="text" placeholder="Digite o ID do visitante" name="idVisitanteHorario" value="<?= !empty($registro) ? $registro['IDVISITANTE']:''?>">
            </div>
        </div>

       

        <div class="field">
            <label class="label">Placa do veículo</label>
            <div class="control">
                <input class="input" type="text" placeholder="Digite a placa do veículo" name="placaVeiculo" value= "<?= !empty($registro) ? $registro['PLACAVEICULO']:''?>">
            </div>
        </div>

        <div class="field">
            <label class="label">Data do registro</label>
            <div class="control">
                <input class="input" type="date" placeholder="Digite a data do registro" name="dataRegistro" value= "<?= !empty($registro) ? $registro['DATAREGISTRO']:''?>">
            </div>
        </div>

        <div class="field">
            <label class="label">Horário de entrada</label>
            <div class="control">
                <input class="input" type="time" placeholder="Digite o horário da entrada" name="horaEntrada" value= "<?= !empty($registro) ? $registro['HORAENTRADA']:''?>">
            </div>
        </div>

        <div class="field">
            <label class="label">Horário saída</label>
            <div class="control">
                <input class="input" type="time" placeholder="Digite o horário da saída" name="horaSaida" value= "<?= !empty($registro) ? $registro['HORASAIDA']:''?>">
            </div>
        </div>



            <br>
       

        <div class="field">
            <div class="control">
                <input type="submit" class="button is-black is-fullwidth" value="Confirmar">
            </div>
        </div>
</div>

    </form>

<?php require __DIR__."/../../footer.php"; ?>