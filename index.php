<?php
// Start Session
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
require('controllers/admin.php');
require('controllers/doctors.php');
require('controllers/contactForms.php');
require('controllers/appointments.php');

require('models/home.php');
require('models/share.php');
require('models/user.php');
require('models/admin.php');
require('models/doctors.php');
require('models/contactForms.php');
require('models/appointments.php');


$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();

if ($controller) {
    $controller->executeAction();
}
