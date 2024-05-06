<?php

use app\models\User;

$user = new User;

$id = filter_input(INPUT_POST, 'id', FILTER_DEFAULT);

$updated = $user->update($_POST, ['id'=>$id]);

if ($updated) {
    return header('location:/');
}