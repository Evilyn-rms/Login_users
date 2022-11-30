<?php

require_once 'post.php';
require_once 'session.php';
require_once 'userinfo.php';

$session = new Session();
$post = new Post();
$isLogged = false;


if($post->get('email') != '' && $post->get('password')) {
    $email = $post->get('email');
    $password = $post->get('password');

    foreach($usersinfo as $info) {
        if($email == $info['email'] && $password == $info['password']){
            $isLogged = true;
            $session->set('email', $email);
            $session->set('password', $password);
            require_once 'view.php';
            break;
        }
    }

} else if ($session->get('email') != '') {
    foreach($usersinfo as $info){
        if ($session->get('email') == $info['email'] && $session->get('password') == $info['password']){
            $isLogged = true;
            require_once 'view.php';
            break;
        }
    }
}
if ($isLogged == false) echo '<p>Login inválido. <a href="index.html">Fazer Login</a>';