<?php

    include_once('../model/conexao.php');
    include_once('../model/modelListar.php');

    extract($_REQUEST, EXTR_OVERWRITE);

    if(listarFilme()){
        echo 'vai a merda';
    }else{
        'Não vai a merda';
    }