
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Conteúdo</title>
    </head>
    <body>
        <p>Bem vindo, <?php $info ['name'] ?></p>
        <h1><?php echo $info ['name'] ?></h1>
        <p><?php echo $info ['email'] ?></p>
        <p><?php echo $info ['cpf'] ?></p>
        <p>Você está convidado(a) a inserir o texto de sua escolha</p>
        <form action="" method="post">
            <textarea name='content' rows='5' cols='50' id='' maxlength='400' style='resize: none;'></textarea><br>
            <input type="submit" value="Postar">
        </form>
    </body>
</html>

