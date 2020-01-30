<?php

require_once './db-mysql.php';


// **** Ctrl + K + C - adiciona as barras de comentários no texto selecionado ****


// $select = "SELECT * FROM usuario";

// if ($resultado = mysqli_query($conexao, $select)) {
//     while ($linha = mysqli_fetch_assoc($resultado)) {
//         foreach ($linha as $coluna => $valor) {
//             echo "$coluna : $valor <br>";
//         }
//         echo '<hr>';
//     }
// }

// ***** INSERIR DADOS NO MYSQL ****
// $nome = "Marcelo";
// $email = "marcelo@gmail.com";
// $senha = '4linux';

// $insere = "INSERT INTO usuario (nome, email, senha) " .
//     "VALUES ('$nome', '$email', '$senha')";

// if (mysqli_query($conexao,$insere)) {
//     print("Linha alterada: " . mysqli_affected_rows($conexao));
// } else {
//     print("ERRO: " . mysqli_error($conexao));
// }

// **** USANDO STATEMENT PARA EVITAR SQL INJECTION NO MSQL ***
// $email = '%gmail%';
// $select = 'SELECT * FROM usuario WHERE email LIKE ?';

// $stmt = mysqli_stmt_init($conexao);

// if (mysqli_stmt_prepare($stmt, $select)) {
//     mysqli_stmt_bind_param($stmt, "s", $email);

//     mysqli_stmt_execute($stmt);

//     if ($resultado = mysqli_stmt_get_result($stmt)) {
//         while ($linha = mysqli_fetch_assoc($resultado)){
//             foreach ($linha as $campo => $valor) {
//                 echo "campo : $valor <br>";
//             }

//             echo '<hr>';
//         }
//     }

// }

$email = 'maria.silva@gmail.com';
$id = 2;
$update = 'UPDATE usuario SET email = ? WHERE id = ?';

$stmt = mysqli_stmt_init($conexao);

if (mysqli_stmt_prepare($stmt, $update)){
    mysqli_stmt_bind_param($stmt, "si", $email, $id);

    mysqli_stmt_execute($stmt);

    $linhas = mysqli_stmt_affected_rows($stmt);

    if ($linhas > 0) {
        print( "Atualização realizada com sucesso ! $linhas foram atualizadas");
    }
// faltou completar o código pegar no Git do professor Caique ***

}







