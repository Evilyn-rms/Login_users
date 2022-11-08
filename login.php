<?php

require_once 'post.php';
require_once 'user.php';
require_once 'session.php';
require_once 'userinfo.php';

$session = new Session();
$post = new Post();
$user = new User();


if(isset($_POST['email']) && isset($_POST['password'])) {
    $email = $post->get('email');
    $password = $post->get('password');

    foreach($usersinfo as $info) {
        if($email == $info['email'] && $password == $info['password']){
            $user->setName($info['name']);
            $user->setCpf($info['cpf']);
            $user->setEmail($info['email']);
            $user->setPassword($info['password']);
        }
    }

    if($email == $user->getEmail() && $password == $user->getPassword()) {
        $_SESSION['user'] = $user->getEmail();
        include 'view.php';
    } else {
        echo 'Login e/ou senha inválidos!';
    }
} else {
    echo 'Necessário preencher suas informações!';
} 