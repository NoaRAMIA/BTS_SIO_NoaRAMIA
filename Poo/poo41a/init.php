<?php

/**
 * Initialisations
 */

 // Paramétrage pour certains serveurs qui n'affichent pas les erreurs PHP par défaut

ini_set('display_errors', '1');
ini_set('html_errors', '1');

// Autoloader
function my_autoloader($classe)
{
  include 'classes/' . $classe . '.php';
}
spl_autoload_register('my_autoloader');