<?php
//Calcular e exibir a média aritimetica das notas de cada aluno
//Informar o nome do aluno antes de informar a nota
//Utilizar funções para tornar o código reutilizavel

$alunos = [
    [
        'nome' => 'João',
        'notas' => [10, 8, 5]
    ],
    [
        'nome' => 'Maria',
        'notas' => [6, 5, 3]
    ],
    [
        'nome' => 'José',
        'notas' => [9, 7, 4]
    ]
];

function calculaNotas(array &$alunos)
{
    foreach ($alunos as &$aluno) {
        $notas = $aluno['notas'];
        $media = ($notas[0] + $notas[1] + $notas[2]) / 3;
    }

function exibeNotas(array $alunos)
{
    foreach ($alunos as $aluno) {
        print ("o Aluno {$aluno['nome']} teve media {$aluno['media'])"}
    }
}

}


