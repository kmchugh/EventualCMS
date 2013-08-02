<?php
/**
 * Bootstrap is used for launching tests
 **/

// Define the app constants
defined('EVENTUAL_ROOT') || define('EVENTUAL_ROOT', str_replace('\\', DIRECTORY_SEPARATOR, realpath(dirname(dirname(dirname(dirname(__FILE__))))).DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR));

// Allow access to STDIN from fcgi
defined('STDIN') || define('STDIN', fopen('php://stdin', 'r'));

// Allow access to STDOUT from fcgi
// defined('STDOUT') || define('STDOUT', fopen('php://stdout', 'w'));

// Include the base utilities class and register the autoloader
require_once(EVENTUAL_ROOT.'icatalyst'.DIRECTORY_SEPARATOR.'eventual'.DIRECTORY_SEPARATOR.'Utilities.php');
spl_autoload_register('\icatalyst\eventual\Utilities::loadClass');

// Create the console bootstrap
$loBootstrap = new \icatalyst\eventual\console\Bootstrap();
?>