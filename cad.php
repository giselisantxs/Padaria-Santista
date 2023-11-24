
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Processamento</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <header>
        <h1>Cadastro de Clientes | Padaria Santista</h1>
    </header>

    <main class = "text">
        <?php
            $nome = $_GET [ "nome"]
            $sobrenome = $GET [ "sobrenome"]
            $email = $GET ["email"]

            echo "<p> É um prazer te conhecer,
            a Padaria Santista agradece $nome $sobrenome!
            Entraremos em contato com você! <\p>" ;
        ?>

        <button class = "text-js" >
            <a href="javascript:history.go (-1)"> Voltar para página anterior</a>
        </button>
    </main>






</body>
</html>