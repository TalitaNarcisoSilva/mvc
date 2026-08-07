<?php

// A resposta será enviada no format o JSON
header("Content-Type: application/json; charset=utf-8");

// Carrega a classe validator
require __DIR__ . "/../libs/Validator.php";

// Cria o objeto validador
$validator = new Validator($_POST);

// Executa a função que contém as regras de validação
validarCadastro($validator);

//Verifica se a requisição é do tipo POST
if($_SERVER["REQUEST_METHOD"] !== "POST"){
    http_response_code(405); //405 - método não permitido

    echo json_encode([
        "sucesso" => false,
        "mensagem" => "Método não permitido, esperava GET"

    ]);

    exit;
}

// ----------------------- TODO: Aqui seria o banco de dados
//verifica se tem erros

if($validator->fails()){
http_response_code(422);

echo json_encode([
    "sucesso" => false,
    "mensagem" => "Corrija os campos indicados.",
    "erros" => $validator->errors()
], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

exit;

}

//Retornar sucesso

http_response_code(200);

echo json_encode([
    "sucesso" => true,
    "mensagem" => "Dados validados com sucesso.",
    "dados" => $validator->data()

], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

exit;

//----------FUNÇÕES AUXILIARES----------

function validarCadastro($validator){
    $validator->require("nome", "Informe o nome.");
    $validator->string("nome","O nome deve ser um texto.");
    $validator->minLength("nome",3,"O nome deve ter pelo menos 3 caracteres.");
    $validator->maxLength("nome",100, "O nome deve ter no máximo 30 caracteres.");
}

//Valida os campos obrigatorios

if($nome === "" || $categoria === "" || $preco === "" || $quantidade === ""){
    http_response_code(400);

    echo json_encode([
        "sucesso" => false,
        "mensagem" => "Preencha todos os campos"
    ]);
    exit;
}

//--------->>> TODO: aqui seria o banco de dados

//retornar sucesso

http_response_code(200);

echo json_encode ([
    "sucesso" => true,
    "mensagem" => "Produto cadastrado com sucesso!",
    "produto" => [
        "nome" => $nome,
        "categoria" => $categoria,
        "preco" => $preco,
        "quantidade" => $quantidade,
    ]

])
 
?>