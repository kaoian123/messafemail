<?php
include_once "../../../vendor/autoload.php";

use App\Repositories\MessageRepository;
use App\Helper\Redirect;

$messageRepository = new MessageRepository();
$messageRepository->create($_POST['title'], $_POST['name'], $_POST['content']);

new Redirect("../../../public/ShowAllMessage.php");
