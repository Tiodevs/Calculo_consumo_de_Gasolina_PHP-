<?php
include_once("./Templates/header.php");
?>
<div>
        <h1>Lista de todas as rotas</h1>
        <div>
            <?php

            for ($i = 0; $i < count($_SESSION['listaRotas']); $i++) {
                echo "<h3>Rota $i <br></h3>";
                for ($j = 0; $j < count($_SESSION['listaRotas'][$i]); $j++) {
                    print ( $_SESSION['listaRotas'][$i][$j]);
                    echo "<br>";
                }
            }

            ?>
        </div>
        <br>
        <br>
        <a href="<?= $BASE_URL ?>cadastroRotas.php">Voltar para o cadastro</a>
    </div>


<?php
include_once("templates/footer.php")
?>