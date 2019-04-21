<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>POO em PHP - BANCO</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'contaBanco.php';

            $p1 = new contaBanco; //JUBILEU
            $p2 = new ContaBanco; //CREUZA

            $p1->abrirConta("CC");
            $p1->setDono("Jubileu");
            $p2->abrirConta("CP");
            $p2->setDono("Creuza");

            print_r($p1);
            print_r($p2);
        ?>
        </pre>
    </body>
</html>