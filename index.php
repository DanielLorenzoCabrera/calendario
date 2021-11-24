<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
    <link rel="stylesheet" href="estilos.css">

</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method='POST'>
    <input type="text" name="month" id="month" placeholder='Mes en español'>
    <input type="text" name="year" id="year" placeholder='año'>
    <input type="submit" value="enviar">


    </form>
    <?php
    include_once 'Calendario.php';
        if(isset($_POST) && !empty($_POST['month']) && !empty($_POST['year'])){
            //crearCalendario($_POST['month'], $_POST['year'],$MONTHS,$WEEK);
            $calendario = new Calendario($_POST['month'],$_POST['year']);
            $calendario->mostrarCalendario();
        }else{
            echo '<p class="advice">Por favor rellene ambos campos</p>';
        }


    ?>
</body>
</html>