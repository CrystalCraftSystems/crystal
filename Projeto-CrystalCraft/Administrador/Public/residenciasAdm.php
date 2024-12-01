<?php require __DIR__ . "/cabecalhoAdm.php"; ?>

<style>
    h1 {
        font-family: 'Candara';
    }
</style>

<section class="section">
    <div class="container">
    <h1 class="title has-text-centered"><strong>Listagem de residências<strong></h1><br>
        <table class="table is-fullwidth is-striped">
            <thead>
                <tr>
                    <th>ID Residência</th>
                    <th>Número</th>
                    <th>Bloco</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
          
                <?php if (isset($residencias)): ?>
                    
                    <?php foreach ($residencias as $residencia): ?>
                        <tr>

                            <td><?php echo htmlspecialchars($residencia['IDRESIDENCIA']); ?></td>
                        <td><?php echo htmlspecialchars($residencia['NUMRESIDENCIA']); ?></td>
                        <td><?php echo htmlspecialchars($residencia['BLOCO']); ?></td>
                        </td> <td><?php echo htmlspecialchars($residencia['DESCRICAORESIDENCIA']); ?>                        
                            <td>
                                <a class="button is-small is-info" href="./index.php?acao=editar-residencia&idResidencia=<?=$residencia['IDRESIDENCIA']?>">Editar</a>
                                <a class="button is-small is-danger" href="./index.php?acao=excluir-residencia&idResidencia=<?=$residencia['IDRESIDENCIA']?>">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="has-text-centered"><strong>Base de dados vazia!</strong></td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

<br>
<br>


<div class="box">
<h1 class="title has-text-centered"><strong>Cadastrar residências e blocos<strong></h1>
    <form action="./index.php?acao=cad-residencia" method="post">
    <div class="field">

    <label class="label">ID da residência</label>
    <div class="control">
        <input class="input" type="text" placeholder="Digite o ID" name="idResidencia" required>
    </div>
</div>

<div class="field">
    <label class="label">Número da residência</label>
    <div class="control">
        <input class="input" type="text" placeholder="Digite o número da residência" name="numResidencia" required>
    </div>
</div>

<div class="field">
    <label class="label">Bloco</label>
    <div class="control">
        <input class="input" type="text" placeholder="Digite o bloco" name="bloco" required>
    </div>
</div>

<div class="field">
    <label class="label">Descrição da situação da residência</label>
    <div class="control">
        <input class="input" type="text" placeholder="Digite a situação da residência" name="descricaoResidencia">
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