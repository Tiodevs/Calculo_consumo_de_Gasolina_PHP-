<?php 
    include_once("./Templates/header.php");

    if (isset($_POST['cidadeOrigem'])) {


        $cidadeOrigem = $_POST['cidadeOrigem'];
        $cidadeDestino = $_POST['cidadeDestino'];
        $distanciaKM = $_POST['distanciaKM'];
    
        $_SESSION['rota'] = [$cidadeOrigem, $cidadeDestino, $distanciaKM];
    
        $_SESSION['listaRotas'][] = $_SESSION['rota'];
        
    };
?>

    <section class="cadastrarRota">
        <form action="cadastroRotas.php" method="post">
            Cidade de origem
            <div>
                <input type="text" name="cidadeOrigem">
            </div>
            Cidade de destino
            <div>
                <input type="text" name="cidadeDestino">
            </div>
            Distancia em KM
            <div>
                <input type="number" name="distanciaKM">
            </div>
            <div>
                <br>
                <input type="submit" value="Enviar">
            </div>
            <br>
            <a href="<?= $BASE_URL ?>listaRotas.php">Ver lista de rotas</a>
            <br>
            <a href="<?= $BASE_URL ?>menu.php">Voltar para o menu</a>
        </form>
    </section>


<?php 
    include_once("templates/footer.php")
?>