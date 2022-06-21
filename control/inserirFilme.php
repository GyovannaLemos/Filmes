<?php

include_once('../model/conexao.php');
include_once('../model/modelCadastrar.php');

extract($_REQUEST, EXTR_OVERWRITE);

if (inserirFilme()){
    echo 'Ocorreu um erro, tente novamente';
}else{
    echo 'Filme cadastrado com sucesso';
}