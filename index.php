<?php
session_start();
include 'vues/v_gabarit_entete.php';


$pdo=PdoBridge::getPdoBridge();
if (!isset($_REQUEST['uc']))
    $uc = 'accueil';
else
    $uc = $_REQUEST['uc'];


switch ($uc) {
    case 'accueil':
    {
        include("vues/v_accueil.php");
        break;
    }
    default:
    {
        $_SESSION["message_erreur"] = "Site en construction";
        include("vues/v_erreur.php");
        break;
    }


}
include("vues/v_gabarit_pied.php");