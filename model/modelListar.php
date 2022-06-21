<?php

include_once('conexao.php');

function listarFilme(){

    $conn = new Conexao();

    $nome = $_POST['cxNome'];

    $query = "SELECT * FROM filmes WHERE nome_filme = '$nome'";

    $listar = $conn->getConn()->prepare($query);
}