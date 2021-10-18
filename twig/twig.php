<?php

require __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/');
$twig = new Environment($loader, [
   'autoescape' => false
]);

$submitButtonHTML = '<input type="submit" value="Log In"/>';
$loginHeaderText = 'Log In';
$isAdminLogin = true;
$totalSiteLogins = '0.00';

echo $twig->render('tmpl.html.twig', [
   'submitButtonHTML' => $submitButtonHTML, 
   'loginHeaderText' => $loginHeaderText, 
   'isAdminLogin' => $isAdminLogin, 
   'totalSiteLogins' => intval($totalSiteLogins)
]);