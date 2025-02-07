<?php

// This function to connect to the database
function database_connection()
{
    return new PDO(dsn:'mysql:dbname=mvcphp;host=localhost',username:'root',password:'');
    
}

// This function to connect and get all trainees informations from the database 
function latest()
{
    $pdo = database_connection();
    return $pdo->query('SELECT * FROM stagiaire ORDER BY id')->fetchAll(mode: PDO::FETCH_OBJ);
}

//this function to create new trainees 
function create()
{
    $pdo = database_connection();
    $sqlState = $pdo->prepare("INSERT INTO stagiaire VALUES(null, ?, ?, ?, ?, ?)");
    return $sqlState->execute([$_POST['nom'], $_POST['prenom'], $_POST['age'], $_POST['login'], $_POST['password']]);
}

// This function to can modify the trainees
function edit()
{

}

// This function to delete trainees by id
function destroy($id)
{
    $pdo = database_connection();
    $sqlState = $pdo->prepare("DELETE FROM stagiaire WHERE id = ?");
    return $sqlState->execute([$id]);
}

