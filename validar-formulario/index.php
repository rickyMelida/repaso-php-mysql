<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="validacion.php" method="post">
            <div>
                <label for="">Nombre</label><br>
                <input type="text" name="nombre" id="">
            </div><br>

            <div>
                <label for="">Correo</label><br>
                <input type="email" name="email" id="">
            </div><br>

            <div>
                <label for="">Password</label><br>
                <input type="password" name="password" id="">
            </div><br>

            <div>
                <select name="pais" id="">
                    <option value="">Selecciona un pais</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Brasil">Brasil</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="USA">USA</option>
                    <option value="Paraguay">Paraguay</option>
                </select>
            </div> <br>

            <div>
                <div>
                    <label for="">Nivel de desarrollo</label><br>
                </div>
                <input type="radio" name="nivel" value="princpiante">Principiante
                <input type="radio" name="nivel" value="intermedio">Intermedio
                <input type="radio" name="nivel" value="avanzado">Avanzado
            </div> <br>

            <div>
                <div>
                    <label for="">Lenguajes de Programacion</label>
                </div>
                <input type="checkbox" name="lenguajes[]" value="php">PHP <br>
                <input type="checkbox" name="lenguajes[]" value="javascript">JavaScript <br>
                <input type="checkbox" name="lenguajes[]" value="java">Java <br>
                <input type="checkbox" name="lenguajes[]" value="swift">Swift <br>
                <input type="checkbox" name="lenguajes[]" value="python">Python <br>

            </div>

            <div>
                <input type="submit" value="Enviar">
            </div>

        </form>
    </div>
</body>
</html>