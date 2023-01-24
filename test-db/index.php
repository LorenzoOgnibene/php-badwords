<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DB RESPONSE</title>
    </head>
    <body>
        <h1>
            <?php
                echo $_GET['paragraph'];
            ?>
        </h1>
        <h1>
            Il tuo paragrafo e' lungo:
            <?php
                echo strlen($_GET['paragraph']);
            ?>
            caratteri (spazi inclusi)
        </h1>


        <h2>
            <?php
                $toReplace = $_GET['bedWord'];
                $newPar = str_replace($toReplace, '***', $_GET['paragraph']);
                echo $newPar
            ?>
        </h2>
        <h2>
            Il tuo paragrafo e' lungo:
            <?php
                echo strlen($newPar);
            ?>
            caratteri (spazi inclusi)
        </h2>
    </body>
</html>