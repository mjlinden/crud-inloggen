<?php
use controller\Controller;
include_once 'controller/Controller.php';
session_start();

$controller = new Controller();

//alleen acties uitvoeren als er ingelogd is!!!
if(isset($_SESSION['role']) && $_SESSION['role']=="admin")
{
    /* formulier met gegevens tonen om een rij bij te werken */
    if(isset($_POST['showForm']))
    {
        $controller->showFormPatientAction( $_POST['showForm']);
    }
    /* UPDATE: formulier afhandeling om een rij bij te werken */
    else if(isset($_POST['update']))
    {
        $controller->updatePatientAction();
    }
    /* CREATE:  formulier afhandeling nieuwe rij */
    else if(isset($_POST['create']))
    {
        $controller->createPatientAction();
    }
    /* DELETE:  verwijderen rijen */
    else if(isset($_POST['delete']))
    {
        $controller->deletePatientAction($_POST['delete']);
    }
    else if(isset($_POST['logout']))
    {
        $controller->logoutAction();
    }
    /*READ:  overzicht alle patienten */
    else
    {
        $controller->readPatientenAction();
    }
} else {
    $controller->loginAction();
}





