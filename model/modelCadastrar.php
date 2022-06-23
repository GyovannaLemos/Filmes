<?php

include_once('conexao.php');

function inserirFilme(){

    $conn = new Conexao();
    
    $nome = $_POST['cxNome'];
    $genero = $_POST['cxGenero'];
    $classificacao = $_POST['cxClassificacao'];
    $diretor = $_POST['cxDiretor'];
    $estudio = $_POST['cxEstudio'];
    $elenco = $_POST['cxElenco'];
    $lancamento = $_POST['cxData'];


    $query = "INSERT INTO filmes (nome_filme, genero_filme, classificaçao, diretor_filme, estudio_filme, elenco_filme, ano_lancamento) 
    VALUES (:nome, :genero, :classificacao, :diretor, :estudio, :elenco, :lancamento)";

    $cadastrar = $conn->getConn()->prepare($query);

    $cadastrar->bindParam(':nome', $nome, PDO::PARAM_STR);
    $cadastrar->bindParam(':genero', $genero, PDO::PARAM_STR);
    $cadastrar->bindParam(':classificacao', $classificacao, PDO::PARAM_INT);
    $cadastrar->bindParam(':diretor', $diretor, PDO::PARAM_STR);
    $cadastrar->bindParam(':estudio', $estudio, PDO::PARAM_STR);
    $cadastrar->bindParam(':elenco', $elenco, PDO::PARAM_STR);
    $cadastrar->bindParam(':lancamento', $lancamento, PDO::PARAM_STR);
    

    $cadastrar->execute();

}


