<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="numero01" id=""> <br>
        <input type="text" name="numero02" id=""> <br>

        <input type="submit" value="Enviar">
    </form>

    <br>

    <?php
        include "operaciones.php";
        validarCampos();
    ?>
</body>
</html>