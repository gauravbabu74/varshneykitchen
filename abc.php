<?php
use Drupal\Core\DrupalKernel;
use Symfony\Component\HttpFoundation\Request;

// Define the Drupal bootstrap path
$autoloader = require_once 'core/vendor/autoload.php';
$kernel = DrupalKernel::createFromRequest(Request::createFromGlobals(), $autoloader);

// Boot Drupal
$kernel->boot();

// Load user and set new password
$user = \Drupal\user\Entity\User::load(1); // Load user with ID 1 (admin user by default)
if ($user) {
    $user->setPassword('admin'); // Replace with your new password
    $user->save();
    echo "Password reset successfully.";
}
else {
    echo "User not found.";
}
?>
