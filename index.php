<?php 
    include_once("./Templates/header.php");

    $method = $_SERVER['REQUEST_METHOD'];

    if(isset($_POST['user'])) {
        $user = $_POST['user'];
        $senha = $_POST['senha'];
        // adicionando rotas padrão
      };
    
?>

<?php 
    if($method == 'GET'):
?>

<form action="./index.php" method="post">
    <div>
        Nome: 
        <input type="text" name="user">
    </div>
    <div>
        Senha:
        <input type="text" name="senha">
    </div>
    <input type="submit" value="ENTRAR" class="botaoEntrar">
</form>

<div>
    <div>
        <br>
        Nome:  admin
    </div>
    <div>
        Senha: admin
        <br>
    </div>
</div>

<?php 
    else:
?>

    <?php 
        if ($user == 'admin' && $senha == 'admin'):
    ?>
        <div>
            <h1>Acesso autorizado</h1>
            <a href="<?= $BASE_URL ?>menu.php">Ir para o menu</a>
        </div>

        <?php
                    $_SESSION['listaRotas'][]= ["Curitiba", "São Paulo", 339];
                    $_SESSION['listaRotas'][]= ["Curitiba", "São Bernardo do Campo", 335];
                    $_SESSION['listaRotas'][]= ["Curitiba", "João Pessoa", 2550];
                    $_SESSION['listaRotas'][]= ["Curitiba", "Rio de Janeiro", 677];
                    $_SESSION['listaRotas'][]= ["Curitiba", "Nova Iguaçu", 662];
                    $_SESSION['listaRotas'][]= ["Curitiba", "São José dos Campos", 425];
                    $_SESSION['listaRotas'][]= ["Curitiba", "Ribeirão Preto", 496];
                    $_SESSION['listaRotas'][]= ["Curitiba", "Teresina", 2367];
                    $_SESSION['listaRotas'][]= ["Curitiba", "Maceió", 2264];
                    $_SESSION['listaRotas'][]= ["Curitiba", "Guarulhos", 364];
            
                    // adicionando carrso padrão
                    $_SESSION['listaCarros'][] = ["Ford Ranger XLT 2020", "diesel", 9, 5];
                    $_SESSION['listaCarros'][] = ["Land Rover Discovery Sport", "diesel", 4.6, 5];
                    $_SESSION['listaCarros'][] = ["Toyota SW4", "diesel", 4.9, 5];
                    $_SESSION['listaCarros'][] = ["TBMW X3 M40i", "diesel", 9.7, 5];
        ?>
            
    <?php 
        else:
    ?>

        <div id="loginIncorreto">
            <div>
                <h1>login incorreto</h1>
            </div>
            <div>
                <a href="<?= $BASE_URL ?>">Voltar ao login</a>
            </div>
        </div>
    <?php 
        endif;
    ?>
<?php 
    endif;
?>

<?php 
    include_once("templates/footer.php")
?>