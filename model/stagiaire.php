<?php

function database_connection()
{
    return new PDO(dsn:'mysql:dbname=mvcphp;host=localhost',username:'root',password:'');
    
}

function liste_stagiaires()
{
    $pdo = database_connection();
    return $pdo->query('SELECT * FROM stagiaire')->fetchAll(mode: PDO::FETCH_OBJ);
}