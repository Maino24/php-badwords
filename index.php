<?php




$parolaCensurata = $_GET["parolaCensurata"];
//echo $parolaCensurata;

$censura = '***';

$parola = str_replace($parolaCensurata,$censura,$paragrafo);

//$array_stringa = explode('', $paragrafo);

//var_dump($array_stringa);

$paragrafo = 'Vedi che sdegna li argomenti umani,
sì che remo non vuol, né altro velo
che l ali sue, tra liti sì lontani
Ohi ombre vane, fuor che ne laspetto!
tre volte dietro a lei le mani avvinsi,
e tante mi tornai con esse al petto
Amor che ne la mente mi ragiona
cominciò elli allor sì dolcemente,
che la dolcezza ancor dentro mi suona';

/* LUNGHEZZA PARAGRAFO */
$lunghezzaParagrafo = strlen($paragrafo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<p><?php echo $paragrafo ?></p>
<p><?php echo $lunghezzaParagrafo ?></p>



<form action="" method="GET">

    <input type="text" name="parolaCensurata">
    <button type="">Invio</button>

</form>

<?php $parola = str_replace($parolaCensurata,$censura,$paragrafo);?>
<p><?php echo $parola ?></p>

</body>
</html>