<?php
include_once("./Templates/header.php");
?>

<?php

    for ($i = 0; $i < count($_SESSION['listaCarros']); $i++) {
        $autonomia = $_SESSION['listaCarros'][$i][2];
        $modelo = $_SESSION['listaCarros'][$i][0];
        $preco = $_SESSION['listaCarros'][$i][3];
        echo "<h1>Cálculo de gastos para viagem com o $modelo </h1>";
        for ($j = 0; $j < count($_SESSION['listaRotas']); $j++) {
            $distancia = $_SESSION['listaRotas'][$j][2];
            $origem = $_SESSION['listaRotas'][$j][0];
            $destino = $_SESSION['listaRotas'][$j][1];
            $litros = $distancia / $autonomia;
            $valorFinal = intval($preco) * intval($litros);
            echo "<p>Para ir de $origem para $destino teríamos um gasto de $valorFinal R$ para realizar esta viagem, sem nenhum imprevisto</p>";
        }
    }

?>


<?php
include_once("templates/footer.php")
?>