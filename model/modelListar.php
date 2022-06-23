<?php

include_once('conexao.php');

function listarFilme(){

    $conn = new Conexao();

    $filme = $_POST['pesquisar'];

    $query = "SELECT nome_filme, genero_filme, classificaçao, diretor_filme, estudio_filme, elenco_filme, ano_lancamento  FROM filmes WHERE nome_filme LIKE '%$filme%'";

    $listarFilme = $conn->getConn()->prepare($query);

    $listarFilme->execute();

    while($listar = $listarFilme->fetch(PDO::FETCH_ASSOC)){
        echo ("Nome: " . $listar['nome_filme'] . "</br>");
        echo ("Genero: " . $listar['genero_filme'] . "</br>");
        echo ("Classificação: " . $listar['classificaçao'] . "</br>");
        echo ("Diretor: " . $listar['diretor_filme'] . "</br>");
        echo ("Estúdio: " . $listar['estudio_filme'] . "</br>");
        echo ("Elenco: " . $listar['elenco_filme'] . "</br>");
        echo ("Ano de Lançamento" . $listar['ano_lancamento'] . "</br>");
    }

}