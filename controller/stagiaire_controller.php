<?php
require_once 'model/stagiaire.php';

function indexAction()
{
    $stagiaires = latest();
    require_once 'views/liste_stagiaires.php';
}

function createAction()
{
    require_once 'views/create.php';
}

function storeAction()
{
    $isCreated = create();
    header('location: index.php');
}

function editAction()
{
    $id = $_GET['id'];
    $stagiaire = view($id);
    require_once 'views/edit.php';
}

function updateAction()
{
    extract(array: $_POST);
    edit($id, $nom, $prenom, $age, $login, $password);
    header('location: index.php');
}

function deleteAction()
{
    $id = $_GET['id'];
    require_once 'views/delete.php';
}

function destroyAction()
{
    $id = $_GET['id'];
    destroy($id);
    header('location: index.php');
}