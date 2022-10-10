<?php
include_once("./Templates/header.php");

if (isset($_POST['modelo'])) {


    $modeloCadasto = $_POST['modelo'];
    $combustivel = $_POST['combustivel'];
    $autonomia = $_POST['autonomia'];
    $preco = $_POST['preco'];

    $_SESSION['carro'] = [$modeloCadasto, $combustivel, $autonomia, $preco];

    $_SESSION['listaCarros'][] = $_SESSION['carro'];
};

?>

<section class="cadastrarRota">
    <form action="cadastroCarros.php" method="post">
        Modelo do veículo utilizado
        <div>
            <input type="text" name="modelo">
        </div>
        <br>
        Tipo do combustível
        <div>
            <input type="text" name="combustivel">
        </div>
        <br>
        Autonomia do veiculo com <br> combustível (em Km/l)
        <div>
            <input type="text" name="autonomia">
        </div>
        <br>
        Preço do combustível
        <div>
            <input type="number" name="preco">
        </div>
        <div>
            <br>
            <input type="submit" value="Enviar">
        </div>
        <br>
        <a href="<?= $BASE_URL ?>listaCarros.php">Ver lista de carros</a>
        <br>
        <a href="<?= $BASE_URL ?>menu.php">Voltar para o menu</a>
    </form>
</section>


<?php
include_once("templates/footer.php")
?>