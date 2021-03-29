<?php
include_once "../vendor/autoload.php";
use App\Repositories\MessageRepository;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShowAllMessage</title>
    <link rel="stylesheet" href="/Bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" href="/css/message-board-use.css">
    <script src="/Bootstrap4/jquery-3.5.1.min.js"></script>
    <script src="/Bootstrap4/popper.min.js"></script>
    <script src="/Bootstrap4/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-xl bg-dark">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link font-size" href="./AddMessage.php">新增留言</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div>
                    <h1 class="message-board text-primary ">留言列表</h1>
                </div>
                <?php

                $messageRepository = new MessageRepository();
                $messages = $messageRepository->getMessage();

                foreach ($messages as $message) {
                ?>
                    <div class="alert alert-warning alert-format">
                        <div class="alert alert-dark">
                            <h3>Title:<?php echo $message['Title'] ?></h3>
                            <h3>Name: <?php echo $message['name'] ?></h3>
                            <h3>Content: <?php echo $message['content'] ?></h3>
                        </div>
                        <a href="../src/Controllers/Message/delete.php?id=<?php echo $message['ID']?>" class="btn btn-primary button-format">
                            <button> 刪除 </button>
                        </a>
                        <a href="UpDataFrom.php?id=<?php echo $message['ID']?>" class="btn btn-primary button-format">
                            <button> 修改 </button>
                        </a>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>