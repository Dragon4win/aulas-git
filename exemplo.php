<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="meuestilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="cabeca">
        <div class="logo">
            <img src="#" alt="logotipo">
        </div>
        <ul>
            <li><a href="exemplo.php">Inicio</a></li>
            <li><a href="exemplo.php#apresentacao">Apresentação</a></li>
            <li><a href="exemplo.php#servicos">Serviços</a></li>
            <li><a href="exemplo.php#precos">Preços</a></li>
            <li><a href="exemplo.php#contato">Contato</a></li>
        </ul>
    </div>
    <div class="embrulho">
        <div class="apresentacao" id="apresentacao">
            <div id="slidesdp"></div>
        </div>
        <div class="nome">
    <form method="post">
        <input type="text" name="nome" id="nome">
        <input type="submit" name="mostra" value="Enviar">
    </form>
    <?php if(isset($_POST['mostra'])){
        echo "<h1>Olá mundo!!!</h1>";
        echo "<h2>" . $_POST['nome'] . "</h2>";
    }
    ?>
    </div>
    <div id="servicos" class="servicos">

    </div>
    <div id="precos" class="precos">

    </div>
    <div id="contatos" class="contatos">
        
    </div>
    </div>
    <div class="pe">
        <ul>
            <li>links</li>
        </ul>
    </div>
    <script src="meujs.js"></script>
</body>
</html>