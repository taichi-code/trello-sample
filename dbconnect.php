<?php
function dbConnect() {
    $dsn = 'mysql:dbname=sample_todo;host=localhost;port=3306;charset=utf8';
    $user = 'root';
    $password = 'root';

    try {
        return new PDO($dsn, $user, $password,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,]);

    } catch (PDOException $e) {
        header('Content-Type: text/plain; charset=UTF-8', true, 500);
        var_dump($e->getMessage());
        exit();
    }
}
