<?php



use app\models\User;
use app\classes\Layout;


$layout = new Layout;
$user = new User;

$users = $user->all();

//$usersEncontrados = $user->find('id', ['id' => 1]);


$layout->add ('home');

