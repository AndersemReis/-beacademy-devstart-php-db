<?php

$prod1 = [
    'nome' => 'Calça Feminina',
    'preco' => 98.0,
    'descricao' => 'Calça Jeans Feminina, nr 48 ',
    'foto' => './imagens/calcaJeans.jpeg'
];
$prod2 = [
    'nome' => 'Camisa Masculina',
    'preco' => 45.00,
    'descricao' => 'Camisa Masculina em polyetileno verde',
    'foto' => './imagens/camisa.jpeg'
];
$prod3 = [
    'nome' => 'Bermuda Masculina',
    'preco' => 120.00,
    'descricao' => 'Bermuda jeans masculina',
    'foto' => './imagens/bermuda.jpeg',
];
$prod4 = [
    'nome' => 'Bermuda Masculina Verde',
    'preco' => 100.00,
    'descricao' => 'Bermuda em polipropileno masculina verde',
    'foto' => './imagens/bermuda-verde.jpeg',
];
$prod5 = [
    'nome' => 'Bermuda Masculina vermelha',
    'preco' => 90.00,
    'descricao' => 'Bermuda em polipropileno masculina vermelha',
    'foto' => './imagens/bermuda-vermelha.jpeg',
];
$produtos = [
    $prod1,
    $prod2,
    $prod3,
    $prod4,
    $prod5,
];
?>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container">
    <h1 class="mt-5">Produtos</h1>
    <hr>
    <table class="table table-hover table-striped mt-5">
        <thead class="table-dark">
            <tr>
                <th>Tipo</th>
                <th>Descriçao</th>
                <th>Preço</th>
                <th>Imagem</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($produtos as $produto) {
                echo "<tr>
                <td>{$produto['nome']}</td>
                <td>{$produto['preco']}</td>
                <td>{$produto['descricao']}</td>
                <td><img src='{$produto['foto']}'></td>
                </tr>";
            } 
            ?>
        </tbody>
    </table>
</div>
