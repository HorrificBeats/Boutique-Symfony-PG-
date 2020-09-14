<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dossierSource = explode("/", $_SERVER['PHP_SELF']);

// Si on a pas ces infos, rien ne peut fonctionner : die
if (!isset($_SERVER['DOCUMENT_ROOT'])) {
    die();
}

// Define de la racine du site
define('_PATH_', $_SERVER['DOCUMENT_ROOT'] . '/' . $dossierSource[1] . '/');

// Define du dossier Coeur
define('_MODEL_BO_', _PATH_ . 'model/bo/');

// Define du dossier Coeur
define('_MODEL_DAL_', _PATH_ . 'model/dal/');

// Define du dossier des Controleurs
define('_CTRL_', _PATH_ . 'controller/');

// Define du dossier des Configs
define('_CONFIG_', _PATH_ . 'config/');

// Define du dossier des TPL
define('_VIEW_', _PATH_ . 'view/');

// Define du dossier des logs
define('_LOGS_', _PATH_ . 'logs/');

// Define du dossier des img
define('_IMG_', 'view/web/img/');

// Define du chemin vers la base de données
define('BDD', 'mysql:host=localhost:3306;dbname=e-boutique');

// Define de l'utilisateur BDD
define('USER', 'userweb');

// Define de pwd BDD
define('PWD', 'userweb');
