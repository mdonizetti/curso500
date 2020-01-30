<?php

//consulta no banco do Postgre

 require_once './db-post.php';

// $consulta = "SELECT * FROM usuario";

// if ($result = pg_query($conexao, $consulta)) {
//     while ($linha = pg_fetch_assoc($result)) {
//         foreach ($linha as $campo => $dado) {
//             echo "$campo : $dado <br>";
//         }

//         echo '<br>';
//     }
// }

// pg_free_result($result);

// pg_close($conexao);

// **** INSERIR DADOS NO POSTGRE ****

// $nome = "Marcelo";
// $email = "marcelo@gmail.com";
// $senha = '4linux';

// $inserir = "INSERT INTO usuario (nome, senha, email) " . 
//             "VALUES ('$nome','$senha', '$email')";

// if ($resultado = pg_query($conexao, $inserir)) {
//     print ("Linhas afetadas: " . pg_affected_rows($resultado));
// } else {
//     print("ERRO: " . pg_result_error($resultado));
// }

// **** USANDO STATEMENT PARA EVITAR SQL INJECTION NO POSTGRE ***
$paramentro = '%gmail%';
$consulta = "SELECT * FROM usuario WHERE email like $1";

// if (pg_prepare($conexao, 'stmt', $consulta)) {
//     if ($resultado = pg_execute($conexao, 'stmt', [$paramentro])) {
//         while ($linha = pg_fetch_assoc($resultado)) {
//             foreach ($linha as $campo => $dado) {
//             echo "$campo => $dado <br>";
//             }

//         echo '<hr>';
//         }   
//     }

//     pg_free_result($resultado);
// }

// ** FAZER UM UPDATE **

$email = "jose.oliveira@gmail.com";
$id = 2;
$atualiza = "UPDATE usuario SET email = $1 WHERE id = $2";

if (pg_prepare($conexao, 'att_user', $atualiza)) {
    if ($resultado = pg_execute($conexao, 'att_user', [$email, $id])) {
        $linhas = pg_affected_rows($resultado);

        if ($linhas > 0){
            print("Atualização bem sucedida! $linhas foram atualizadas!");
          
        }
    }

    pg_free_result($resultado);
} else {
    print("Erro ao preparar: " . pg_last_error($conexao));
}

pg_close($conexao);
