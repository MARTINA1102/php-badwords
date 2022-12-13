<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Baswords</title>
</head>
<body>
    <?php
        $testo= "Nello studio della grammatica di un testo rientra l'analisi dei fattori psicologici inerenti alla percezione del ricevente; questo è evidente nei testi letterari ma anche nell'analisi delle lingue parlate (come i dialetti o i gerghi di comunità ristrette). Spesso le strutture sintattiche e le associazioni semantiche già scelte ripetono modelli già in uso nel patrimonio linguistico di una comunità.

        A livello letterario questi schemi standardizzati sono analizzati e classificati dalla retorica classica, la quale riconosce procedimenti logici e moduli espressivi fissi e ripetuti, entro i quali si libera la creatività linguistica del soggetto parlante.
        
        La stilistica si occupa dell'analisi di libera creatività all'interno dei moduli standard di un testo. L'innovazione linguistica e l'espressività letteraria, infatti, nascono dalla rottura rispetto alla sintassi consolidata (vedi anche le figure di stile).";
    ?>
    <div><?php echo "${testo}"; strlen($testo) ?></div>
    <form action="" method="get">
        <label for="word">parola da censurare</label>
        <input type="text" name="word" id="word">
    </form>
</body>
</html>