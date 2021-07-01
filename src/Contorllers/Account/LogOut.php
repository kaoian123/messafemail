<?php
include_once "../../../vendor/autoload.php";

use Src\Helper\Redirect;

session_start();

session_destroy();

$redirect = new Redirect();
$redirect->location("../../../../../messageboard/public/ShowAllMessage.php");