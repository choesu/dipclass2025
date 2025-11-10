<?php
require('vendor/autoload.php');

use Sc\Webproject\App;
// initialise App to access session
$app = new App();
// destroy the session to sugn user out
session_destroy();

header("location:/");
?>