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

}

function deleteAction()
{
    require_once 'views/delete.php';
}

function destroyAction()
{

}