<?php
    // Verificando se o botão do formulário foi acionado
    if( isset($_POST['inserir']) ) {
    // Importando as funções e a conexao
    require_once "../src/funcoes-fabricantes.php";

    // Capturando o que foi digitado no campo nome
    // $nome = $_POST['nome'];

    // Versão com filtro de sanitização (Melhor)
    // Capturando e limpando o que foi digitado no campo nome (Formulário)
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

    // Chamando a função e passando os dados de conexao e o nome digitado
    inserirFabricante($conexao,$nome);

    // Redirecionamento (Nada a ver com a tag do HTML)
    header("location:listar.php");

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fabricantes - inserir</title>
</head>
<body>
    <div class="container">
    <h1>Fabricantes | Insert</h1>

    <form action="" method="POST">
        <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
        </p>
        <button type="submit" name="inserir">Inserir fabricante</button>
    
    </form>
</div>
<p><a href="listar.php">Voltar para a lista de fabricantes</a></p>
<p><a href="../index.html">Home</a></p>



</body>
</html>