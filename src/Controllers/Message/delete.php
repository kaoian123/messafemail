<?php
include_once "../../../vendor/autoload.php";

use App\Repositories\MessageRepository;
use App\Helper\Redirect;

$id = $_GET['id'];

$messageRepository = new MessageRepository();
$messageRepository->delete($id);

new Redirect("../../../public/ShowAllMessage.php");
