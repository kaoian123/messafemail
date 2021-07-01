<?php
include_once "../../../vendor/autoload.php";

use Src\Repository\AccountRepositories;
use Src\Helper\Redirect;

$accountRepository = new AccountRepositories();
$chech = $accountRepository->createCheck($_POST['account']);

if ($chech) {
    echo "<script>alert('帳號以註冊')</script>";
    
    $redirect = new Redirect();
    $redirect->refresh("../../../public/Registration.php");
}

if (!$chech) {
    echo "<script>alert('註冊成功')</script>";
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $accountRepository->create($_POST['account'], $password);

    $redirect = new Redirect();
    $redirect->refresh("../../../public/SingnIn.php");
    
}
