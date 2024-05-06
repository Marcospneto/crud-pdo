<?php

namespace app\classes;

class Validation{

    private $validate = [];

    public function validate($post){
        foreach ($post as $key => $value) {
            //Aqui estou guardando todos os valores nos seus respectivos indices
            $this->validate[$key] = filter_var($value, FILTER_DEFAULT);
        }

        return (object) $this->validate;
    }

}