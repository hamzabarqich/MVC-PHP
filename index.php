<?php

require_once 'controller/stagiaire_controller.php';

// Création d'un routeur
if(isset($_GET['action']))
{
    $action = $_GET['action'];
    switch ($action)
    {
        case 'create':
            createAction();
            break;
        
        case 'list':
            indexAction();
            break;
    }
}

