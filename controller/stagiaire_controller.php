<?php
require_once 'model/stagiaire.php';

function listStagiairesAction()
{
    $stagiaires = liste_stagiaires();
    require_once 'views/liste_stagiaires.php';
}