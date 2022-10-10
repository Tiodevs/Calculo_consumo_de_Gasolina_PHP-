<?php
include_once("./Templates/header.php");
?>
<div>
        <h1>Lista de todos os carros</h1>
        <div>
            <?php

            for ($i = 0; $i < count($_SESSION['listaCarros']); $i++) {
                echo "<h3>Carro $i <br></h3>";
                for ($j = 0; $j < count($_SESSION['listaCarros'][$i]); $j++) {
                    print (($_SESSION['listaCarros'][$i][$j]));
                    echo "<br>";
                }
            }

            ?>
        </div>
        <br>
        <br>
        <a href="<?= $BASE_URL ?>cadastroCarros.php">Voltar para o cadastro</a>
    </div>


<?php
include_once("templates/footer.php")
?>