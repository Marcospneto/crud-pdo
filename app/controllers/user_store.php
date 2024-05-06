<?php

$name = filter_input(INPUT_POST, 'name', FILTER_DEFAULT);
$email = filter_input(INPUT_POST, 'email', FILTER_DEFAULT);
$password = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);


$user = new \app\models\User();
$cadastrado = $user->insert([
   'name' => $name,
    'email' => $email,
    'password' => $password
]);

if ($cadastrado) {
    return header('location:/');
}
