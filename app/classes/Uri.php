<?php

namespace app\classes;

class Uri{
 public static function load(){

     return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
 }
}

/*Quando o usuario entrar no site e digitar algo na url, vou pegar esse valor e já comparar
com esses indices da routes.

Esse server request uri está pegando oq o usuario está digitando na url, se eu for ver o valor
com o dd($uri) ele vai pegar oq eu digitei na url, preciso comparar com os indices do routes.

Porque o parse_url e PHP url path? Se eu colocar na url localhost:8080/contato?page=1 ele continua
pegando somente o contato*/