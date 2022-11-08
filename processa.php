<?php
require_once 'post.php';
$post = new Post();
$name = $post->get("name");
$email = $post->get("email");
$age = $post->get("age");
echo $name;
echo '<br>';
echo $email;
echo '<br>';
echo $age;
echo '<br>';