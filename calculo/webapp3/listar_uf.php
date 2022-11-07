<?php

// Conexao com BD
include_once "conexao.php";

// QUERY para recuperar registro do banco de dados
$query_uf = "SELECT iduf, uf FROM tbestado ORDER BY ASC";
//$query_sits = "SELECT id, nome FROM situacoes WHERE id = 100 ORDER BY nome ASC";
$result_uf = $conn->prepare($query_uf);
$result_uf->execute();

if(($result_uf) and ($result_uf->rowCount() != 0)){
    while($row_uf = $result_uf->fetch(PDO::FETCH_ASSOC)){
        extract($row_uf);
        $dados[] = [
            'iduf' => $iduf,
            'uf' => $uf
        ];
    }
    $retorna = ['status' => true, 'dados' => $dados];
}else{
    $retorna = ['status' => false, 'msg' => "<p style='color: #f00'>Erro: Nenhuma situação encontrada, entre em contato com o ...!</p>"];
}

echo json_encode($retorna);