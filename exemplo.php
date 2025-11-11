<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="nome" id="nome">
        <input type="submit" name="mostra" value="Enviar">
    </form>
    <?php if(isset($_POST['mostra'])){
        echo "<h1>Olá mundo!!!</h1>";
        echo "<h2>" . $_POST['nome'] . "</h2>";
    }
    ?>
</body>
</html>