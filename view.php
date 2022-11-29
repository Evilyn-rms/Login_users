<?php
require_once 'session.php';
require_once 'post.php';
require_once 'login.php';

$session = new Session();
$post = new Post();
if($session->get('user') !== '') {
    $user = $session->get('user');

    ?>
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Conteúdo</title>
        </head>
        <body>
            <p>Bem vindo, <?php echo 'name' ?></p>
            <h1><?php echo $user->getName(); ?></h1>
            <p><?php echo $user->getCpf(); ?></p>
            <p>Você está convidado(a) a inserir o texto de sua escolha</p>
            <form action="" method="post">
            <textarea name='content' rows='5' cols='50' id='' maxlength='400' style='resize: none;'></textarea>
            </form>
        </body>
        </html>
    <?php
} else {
    echo "Acesso negado.";
}