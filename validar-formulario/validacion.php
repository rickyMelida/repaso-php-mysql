<?php
    if(isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $pais = $_POST['pais'];
        $nivel = "";
        $lenguajes=array();

        $campos = array();

        if(isset($_POST['lenguajes'])) {
            $lenguajes = $_POST['lenguajes'];
        }

        if(isset($_POST['nivel'])) {
            $nivel = $_POST['nivel'];
        }else {
            $nivel = "";
        }

        if($nombre == "" ) {
            array_push($campos, "El campo nombre no puede estar vacio");
        }

        if($_POST['password'] == "" || strlen($_POST['password']) < 6) {
            array_push($campos, "El campo password no puede estar vacio, ni tener menos de 6 caracteres");
        }

        if($email == "" || strpos($email, "@") === false) {
            array_push($campos, "Ingrese un correo electronico valido");
        }

        if($_POST['pais'] == "") {
            array_push($campos, "Selecciona un pais de origen");
        }

        if($_POST['nivel'] == "") {
            array_push($campos, "Selecciona un nivel de desarrollo.");
        }

        if($lenguajes == "" || count($lenguajes) < 2) {
            array_push($campos, "Selecciona al menos dos lenguajes");
        }

        if(count($campos) > 0) {
            for($i=0; $i < count($campos); $i++) {
                echo $campos[$i] . "<br>";
            }
        }else {
            echo "El nombre es: " . $nombre . "<br>";
            echo "El correo es: " . $email . "<br>"; 
            echo "La contraseña es: " . $password . "<br>";
            echo "El pais es: " . $pais . "<br>";
            echo "El nivel de desarrollo es: " . $nivel . "<br>";
            echo "Los lenguajes son: " . "<br>";
            for($i=0; $i < count($lenguajes); $i++) {
                echo $lenguajes[$i] . "<br>";
            }
        }
    }

?>