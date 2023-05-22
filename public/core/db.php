<?php

    try {
        $pdo =  new PDO("mysql:host=" . 192.168.20.252 . ";dbname=" . test, example, password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        session_start();
    } catch (PDOException $err) {
        die($err->getMessage());
    }
