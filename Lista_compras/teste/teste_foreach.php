<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Teste foreach</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body class="container">
        <?php $arrayLetras = array(1 => 'A', 2 => 'B', 3 => 'C', 4 => 'D', 5 => 'E', 6 => 'F', 7 => 'G', 8 => 'H', 9 => 'I', 10 => 'J', 11 => 'K', 12 => 'L', 13 => 'M', 14 => 'N', 15 => 'O', 16 => 'P', 17 => 'Q', 18 => 'R', 19 => 'S', 20 => 'T', 21 => 'U', 22 => 'V', 23 => 'W', 24 => 'X', 25 => 'Y', 26 => 'Z'); ?>
        <div class="col-md-12 row">
            <h1 class="col-md-12">Alfabeto</h1>
            <div class="col-md-12 row">
                <?php foreach ($arrayLetras as $chave => $valor) { ?>
                    <p class="col-md-12"><?= "[" . $chave . "] => [" . $valor . "]" ?></p>
                <?php } ?>
            </div>
        </div>
        <?php // Link da pagina para teste -> http://localhost/teste_pagina_1/Lista_compras/teste/teste_foreach.php ?>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.4.1.js"></script>
    </body>
</html>