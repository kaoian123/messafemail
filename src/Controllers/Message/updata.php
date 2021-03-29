<?php
include_once "../../../vendor/autoload.php";

use App\Repositories\MessageRepository;
use App\Helper\Redirect;

$id = $_POST["id"];
$title = $_POST["title"];
$name = $_POST["name"];
$content = $_POST["content"];

$messageRepository = new MessageRepository();
$messageRepository->updata($id, $title, $name, $content);

new Redirect("../../../public/ShowAllMessage.php");
