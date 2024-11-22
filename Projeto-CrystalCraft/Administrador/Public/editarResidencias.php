<?php require __DIR__ . "/cabecalhoAdm.php"; ?>

<style>
    h1 {
        font-family: 'Candara';
    }
</style>

<div class="box">
<h1 class="title has-text-centered"><strong>Cadastrar residências e blocos<strong></h1>
    <form action="./index.php?acao=atualizar-residencia" method="post">
    <div class="field">

    <input class="input" type="hidden" name="idResidencia" value="<?= !empty($residencia) ? $residencia->getIdResidencia():''?>">

<div class="field">
    <label class="label">Número da residência</label>
    <div class="control">
        <input class="input" type="text" placeholder="Digite o número da residência" name="numResidencia" value= "<?= !empty($residencia) ? $residencia->getNumResidencia():''?>">
    </div>
</div>

<div class="field">
    <label class="label">Bloco</label>
    <div class="control">
        <input class="input" type="text" placeholder="Digite o bloco" name="bloco" value= "<?= !empty($residencia) ? $residencia->getBloco():''?>">
    </div>
</div>

<div class="field">
    <label class="label">ID do morador</label>
    <div class="control">
        <input class="input" type="text" placeholder="Digite o ID do morador" name="idMoradorResidencia" value= "<?= !empty($residencia) ? $residencia->getIdMorador():''?>">
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