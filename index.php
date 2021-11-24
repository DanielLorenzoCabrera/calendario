<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method='POST'>
    <input type="text" name="month" id="month">
    <input type="text" name="year" id="year">
    <input type="submit" value="enviar">


    </form>
    <?php
    include_once 'Calendario.php';
        if(isset($_POST) && !empty($_POST['month']) && !empty($_POST['year'])){
            chooseMonth($_POST['month'],$_POST['year'], $MONTHS);
        }else{
            echo 'Por favor rellene ambos campos';
        }


    ?>
</body>
</html>