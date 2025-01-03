<?php
require '../../vendor/autoload.php';

use app\controller\Exib;

$exib = new Exib();
$result1 = $exib->filme1();
$result2 = $exib->filme2();
$result3 = $exib->filme3();
$result4 = $exib->filme4();
$result5 = $exib->filme5();
$result6 = $exib->filme6();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="ICON" type="ICON" sizes="16x16" href="https://cdn.icon-icons.com/icons2/1328/PNG/96/boba-fett_87094.png">
    <link rel="stylesheet" href="../css/stylesheet.css">
    <title>Star Wars</title>
</head>

<body>
    <h2>Star Wars Filmes</h2>

    <div id="cabeca">

        <div class="A1">
            <div id="img1">
               <a href="../View/catalogo1.php"><img src="../img/A New Hope.jpg" width="201" height="302" alt=""></a>
            </div>
            <b><?php echo "\n" . $result1[0]['Titulo']; ?></b>
        </div>

        <div class="A2">
            <div id="img2">
                <a href="../View/catalogo2.php"><img src="../img/The Empire Strikes Back.jpg" width="201" height="302" alt=""></a>
            </div>
            <b><?php echo "\n" . $result2[0]['Titulo']; ?></b>
        </div>

        <div class="A3">
            <div id="img3">
                <a href="../View/catalogo3.php"><img src="../img/Return of the jedi.jpg" width="201" height="302" alt=""></a>
            </div>
            <b><?php echo "\n" . $result3[0]['Titulo']; ?></b>
        </div>

    </div>

    <div id="cabeca1">

        <div class="A1">
            <div id="img1">
                <a href="../View/catalogo4.php"><img src="../img/The Phantom Menace.jpg" width="201" height="302" alt=""></a>
            </div>
            <b><?php echo "\n" . $result4[0]['Titulo']; ?></b>
        </div>

        <div class="A2">
            <div id="img2">
                <a href="../View/catalogo5.php"><img src="../img/Attack of the Clones.jpg" width="201" height="302"></a>
            </div>
            <b><?php echo "\n" . $result5[0]['Titulo']; ?></b>
        </div>

        <div class="A3">
            <div id="img3">
                <a href="../View/catalogo6.php"><img src="../img/Revenge of the Sith.jpg" width="201" height="302" alt=""></a>
            </div>
            <b><?php echo "\n" . $result6[0]['Titulo']; ?></b>
        </div>

    </div>
    <br>
    <br>
    <br>
<fieldset>
    <div class="RodaPe">

        <div id="rodape">
            <li><a href="">Detalhes</a></li>
        </div>

        <div id="rodape1">
            <li><a href="mailto:Claiton_santos1@hotmail.com?subject=Fale conosco">Fale conosco</a></li>
            <a class="ico1" href="mailto:Claiton_santos1@hotmail.com?subject=Fale conosco"><img src="../img/email_send_message_envelopme_electronic_icon-icons.com_59988.png" width="50" height="50"></a>
        </div>

        <div id="rodape2">
            <li><a href="">Trabalhe conosco</a></li>
        </div>

        <div id="rodape3">
            <li><a href="https://github.com/Claitonok">Autor Web site</a></li>
            <a class="ico" href="https://github.com/Claitonok"><img src="../img/github_original_wordmark_logo_icon_146506.ico" width="50" height="50"></a>
        </div>

    </div>
</fieldset>

</body>

</html>