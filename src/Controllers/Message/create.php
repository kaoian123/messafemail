<?php
include_once "../../../vendor/autoload.php";

use App\Repositories\MessageRepository;
use App\Helper\Redirect;

$messageRepository = new MessageRepository();
$chech = $accountRepository->createCheck($_POST['receiver']);

if ($chech) {
    echo "<script>alert('寄送成功')</script>";

    $messageRepository->create($_POST['receiver'], $_POST['title'], $_POST['content'], $_POST['name']);

    $redirect = new Redirect();
    $redirect->refresh("../../../public/showmessage.php");
}

if (!$chech) {
    echo "<script>alert('此用戶不存在')</script>";

    $redirect = new Redirect();
    $redirect->refresh("../../../public/SingnIn.php");
}

