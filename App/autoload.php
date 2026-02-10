<?php

spl_autoload_register(function ($nome_da_classe) {

    echo "Include de: " . $nome_da_classe . "<br />";

    // echo dirname(__FILE__);

    include '../' . $nome_da_classe . '.php';

    /*$classe_controller = 'Controller/' . $nome_da_classe . '.php';
    $classe_model = 'Model/' . $nome_da_classe . '.php';
    $classe_dao = 'DAO/' . $nome_da_classe . '.php';

    if(file_exists($classe_controller)) {

        include $classe_controller;

    } else if(file_exists($classe_model)) {

        include $classe_model;

    } else if(file_exists($classe_dao)) {

        include $classe_dao;

    }*/

});