<?php

    //Configurar datos de acceso a la BD
    $dbuser = "sa";
    $userpass = "123456";

    $dsn = "sqlsrv:Server=AGUILAR;Database=notas_php"; $dbuser; $userpass;

    try {
        //crear conexión a sql server
        $conn = new PDO($dsn);

        //Mostrar mensaje si la conexión es correcta
        if ($conn) {
            //echo "Conectado a la DB correctamente";
        }

    } catch (PDOException $e) {
        //Si hay error en la conexión mostrarlo
        echo $e->getMessage();
    }

