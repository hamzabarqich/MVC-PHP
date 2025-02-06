<?php

function database_connection()
{
    return new PDO(dsn:'mysql:dbname=mvcphp;host=localhost',username:'root',password:'');
    
}

function latest()
{
    $pdo = database_connection();
    return $pdo->query('SELECT * FROM stagiaire ORDER BY id DESC')->fetchAll(mode: PDO::FETCH_OBJ);
}

function create()
{
    $pdo = database_connection();
    $sqlState = $pdo->prepare("INSERT INTO stagiaire VALUES(null, ?, ?, ?, ?, ?)");
    return $sqlState->execute([$_POST['nom'], $_POST['prenom'], $_POST['age'], $_POST['login'], $_POST['password']]);
}

function edit()
{

}

function destroy()
{

}

