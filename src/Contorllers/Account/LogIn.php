<?php
include_once "../../../vendor/autoload.php";

use Src\Repository\AccountRepositories;
use Src\Helper\Redirect;

$accountRepository = new AccountRepositories();

$password_hash = $accountRepository->get_password($_POST['account']);
$password = password_verify($_POST["password"], $password_hash['password']);
if ($password) {
    $chech = $accountRepository->loginCheck($_POST['account'], $password_hash['password']);
}
if (!$password) {
    $chech = false;
}
if($chech){
    session_start();
    $_SESSION["UserAccount"] = $_POST["account"];

    $redirect = new Redirect();
    $redirect->location("../../../../../messageboard/public/ShowAllMessage.php");
}

if(!$chech){

    echo "<script>alert('帳號或密碼錯誤')</script>";

    $redirect = new Redirect();
    $redirect->refresh("../../../public/SingnIn.php");
}

