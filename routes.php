<?php
//definir url do projeto

//http://localhost/projetos-talita/mvc/a_projeto_mvc_funcoes/index.php?page=produtos


// --------- definir páginas validas no projeto --------- 
$paginasValidas = [
    "produtos" => __DIR__ . "/views/produto.php",
    "clientes" => __DIR__ . "/views/clientes.php",
    "funcionarios" => __DIR__ . "/views/funcionarios.php",
];

// --------- capturar a página informada na url --------- 
$page = $_GET["page"] ?? "produtos"; // produtos ou clinetes ou funcionários


// --------- Verificar se a página existe --------- 
if (array_key_exists($page, $paginasValidas)) {
    require $paginasValidas[$page];
} else {
    http_response_code(404);
    require __DIR__ . "/views/404.php";
}
