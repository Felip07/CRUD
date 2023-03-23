<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Tabela MySQL via PhP</title>
</head>

<body>
    <h1> Criando Tabela MySQL via PhP</h1>

    <?php
        require_once("conexao.php");
        $sql = "CREATE TABLE IF NOT EXISTS cadastros(
                id int(6) auto_increment,
                nome varchar(50),
                nascimento date,
                email varchar(100),
                site varchar(100),
                filhos int(11),
                salario float,
                primary key(id)
            )";

        $conexao = novaConexao();
        $resultado = $conexao->query($sql);

        if ($resultado) {
            echo "Tabela Criada com Sucesso!";
        } else {
            echo ":( Erro: " . $conexao->error;
        }

        $conexao->close();

    ?>

</body>

</html>