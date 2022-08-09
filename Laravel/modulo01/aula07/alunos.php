<?php

$a1 = [
    'nome' => 'Chiquim',
    'email' => 'chiquim@gmail.com',
    'telefone' => '92 989999889',
    'notas' =>[
        7,
        9,
        8,
        9,
    ]
];
$a2 = [
    'nome' => 'Maria',
    'email' => 'Maria@gmail.com',
    'telefone' => '92 9888899',
    'notas' => [
        9,
        8,
        9,
        6,
    ]
];
$a3 = [
    'nome' => 'Pedro',
    'email' => 'pedro@gmail.com',
    'telefone' => '92 989999889',
    'notas' =>[
        7,
        9,
        8,
        9,
    ]
];
$a4 = [
    'nome' => 'José',
    'email' => 'jose@gmail.com',
    'telefone' => '92 9888899',
    'notas' => [
        9,
        8,
        9,
        6,
    ]
];

$alunos = [
    $a1,
    $a2,
    $a3,
    $a4,
];
?>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container">
    <h1 class="mt-5">Alunos</h1>
    <hr>
    <table class="table table-hover table-striped mt-5">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($alunos as $aluno) {
                echo "<tr>";
                echo "<td>{$aluno['nome']}</td>";
                echo "<td>{$aluno['email']}</td>";
                echo "<td>{$aluno['telefone']}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>