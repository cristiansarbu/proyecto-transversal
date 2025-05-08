<?php
// Start Session
    use classes\Bootstrap;

    session_start();

// Include different important files
require('config.php');

require('classes/Messages.php');
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');

require('controllers/home.php');
require('controllers/shares.php');
require('controllers/users.php');

require('models/home.php');
require('models/share.php');
require('models/user.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();

if ($controller) {
    $controller->executeAction();
}

print_r($_GET);
echo "<br><br>";
print_r($bootstrap);
echo "<br><br>";
echo class_exists("controllers\\Home") ? 'Class exists' : 'Class does not exist';
echo "<br><br>";
echo class_exists("home") ? 'Class exists' : 'Class does not exist';