<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aluno</title>
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

    <article class="main">
        <section>
            <h3>Cadastro de aluno</h3>

            <form action="tabela.php"methotd=Get> 
                
            <label for="nome">Nome aluno</label>
            <input type="text" name="nome" id="nome" placeholder="Digite o nome">
        
            <label for="endereco">Endereço aluno</label>
            <input type="text" name="endereco" required placeholder="Digite o endereço">
                </div>

            <div class="class2">
            <label for="idade">Idade aluno</label>
            <input type="number" name="idade" required placeholder="Digite a idade"> 
            
            <label for="Senha">Senha</label>
            <input type="password" name="senha" required placeholder="Digite a senha"> 
            </div>

            
            <input type="submit" value="Enviar">
            </form> 
        </section>

        
    </article>
    <footer>Rodapé</footer>
</body>
</html>