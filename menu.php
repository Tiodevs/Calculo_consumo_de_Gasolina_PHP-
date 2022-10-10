<?php
include_once("./Templates/header.php");
?>

    <div class="opcoesCadastro">
        <div>
            <h1>Escolha uma opção</h1>
        </div>
        <div>
            <a id="cadastroRotasMenu" href="<?= $BASE_URL ?>cadastroRotas.php">Cadastrar rotas</a>
            <a id="cadastroRotasMenu" href="<?= $BASE_URL ?>cadastroCarros.php">Cadastrar Carros</a>
            <a id="cadastroRotasMenu" href="<?= $BASE_URL ?>calculoViagems.php">Cálculo de viagens</a>
        </div>
    </div>

<?php
include_once("templates/footer.php")
?>