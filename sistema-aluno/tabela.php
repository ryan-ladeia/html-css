<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <img src="download.png" alt="">
        <nav>
            <a href="./aluno.php">Aluno</a>
            <a href="./professor.php">Professor</a>
            <a href="./index.php">Home</a>
            <a href="./tabela.php">Tabela</a>
        </nav>
        <img src="download.png" alt="">
    </header>

    <article>
    <table id="customers">

        <h1>Lista de tabelas</h1>
        <tr>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Idade</th>
            <th>Senha</th>
          </tr>

          <tr>
            <td> <?php
            echo $_GET['nome']
          ?> </td>
          
          <td> <?php
            echo $_GET['endereco']
          ?> </td>
          
          <td> <?php
            echo $_GET['idade']
          ?> </td>
          
          <td> <?php
            echo $_GET['senha']
          ?> </td>

          </tr>

          <tr>
            <td>Luna Porto</td>
            <td>Cacule</td>
            <td>17</td>
            <td>Luna</td>
          </tr>
    </table>
        
    </article>
    <footer>Rodapé</footer>

</body>
</html>