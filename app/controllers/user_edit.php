<?php
use app\models\User;

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$user = new User;
//Id que estou passando em cima
$userEncontrado = $user->find('id', $id);

if (isset($layout)){
$layout->add('user_edit');
}