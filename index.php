<?php
require_once 'config.php';
require_once 'vendor/autoload.php';

use App\Controllers\StudentController;

$controller = new StudentController($pdo);
$action = $_GET['action'] ?? 'index';

if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    echo "Action not found.";
}
