<?php

require '../../vendor/autoload.php';
use app\controller\Exib;

$exib = new Exib();
$result = $exib->filme3();

// var_dump($result[0]['Titulo']);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="ICON" type="ICON" sizes="16x16" href="https://cdn.icon-icons.com/icons2/1328/PNG/96/boba-fett_87094.png">
    <link rel="stylesheet" href="../css/clone1.css">
    <title>Star Wars</title>
</head>
<body>
    <h2>Star Wars</h2>
    <a href="../View/Principal.php">HOME</a>

    <img src="../img/Return of the jedi.jpg" width="201" height="302" alt="">

    <div id="Detalhes">
        <p>Nome: <?php echo "\n" . $result[0]['Titulo'];?></p>
        <p>Nº episódio: <?php echo "\n" . $result[0]['episode_id'];?></p>
        <p>Sinopse: <?php echo "\n" . $result[0]['edited'];?></p>
        <p>Data de lançamento: <?php echo "\n" . $result[0]['created'];?></p>
        <p>Diretor(a): <?php echo "\n" . $result[0]['director'];?></p>
        <p>Produtor(es): <?php echo "\n" . $result[0]['producer'];?></p>
        <p>Nome dos personagens: <?php  ?></p>
        <p>A idade do filme em anos, meses e dias: <?php echo "\n" . $result[0]['release_date'];?></p>
        <p></p>
    </div>


</body>
</html>