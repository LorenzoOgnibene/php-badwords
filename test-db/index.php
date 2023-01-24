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