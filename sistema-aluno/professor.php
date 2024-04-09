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
            <a href="./tabela.php">Tabela</a>
            <a href="./index.php">Voltar</a>
            <a href="./professor.php">Professor</a>
        </nav>
        <img src="download.png" alt="">
    </header>

    <article class="main">
        <section>
    
            <form action="aluno.html">
                <div class="box">
                <div class="box1">
                <div class="caixa">
                    <h3>Informações aluno</h3>

            <label for="nome">Nome aluno</label>
            <input type="text" name="nome" id="nome" placeholder="Digite o nome">
        
            <label for="endereco">Endereço aluno</label>
            <input type="text" name="endereco" required placeholder="Digite o endereço">
                </div>

            <div class="caixa2">
            <label for="idade">Idade aluno</label>
            <input type="number" name="idade" required placeholder="Digite a idade"> 
            
            <label for="Senha">Senha</label>
            <input type="password" name="senha" required placeholder="Digite a senha"> 
            </div>
            <div class="caixa3">
                <input type="submit" value="Enviar">
            </div>
                </div>

            <div class="box2">
                <div class="caixa">
                    <h3>Cadastro de professor</h3>

                <label for="nome">Nome professor</label>
            <input type="text" name="nome" id="nome" placeholder="Digite o nome">
        
            <label for="endereco">Endereço professor</label>
            <input type="text" name="endereco" required placeholder="Digite o endereço">
                </div>
            
                <div class="caixa2">
            <label for="idade">Idade professor</label>
            <input type="number" name="idade" required placeholder="Digite a idade"> 
            
            <label for="Senha">Senha</label>
            <input type="password" name="senha" required placeholder="Digite a senha"> 
            </div>
            <div class="caixa3">
                <input type="submit" value="Enviar">
            </div>
            </div>
                
            </form> 
        </section>
    </article>
</body>
<footer>Rodapé</footer>
</html>