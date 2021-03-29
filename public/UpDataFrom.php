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
    <title>UpDateFrom</title>
    <link rel="stylesheet" href="/Bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" href="/css/message-board-use.css">
    <script src="/Bootstrap4/jquery-3.5.1.min.js"></script>
    <script src="/Bootstrap4/popper.min.js"></script>
    <script src="/Bootstrap4/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div>
                    <h1 class="message-board text-primary">修改留言</h1>
                </div>
                <?php

                $id = $_GET['id'];

                $messageRepository = new MessageRepository();
                $updataMessage = $messageRepository->getUpdataMessage($id);

                ?>
                    <form action='../src/Controllers/Message/updata.php' method='post'>
                        <input type="hidden" name="id" value=" <?php echo $updataMessage['ID'] ?>">
                        <div class="input-group mt-4 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text font-size bg-dark text-light">title:</span>
                            </div>
                            <input class="font-size form-control" name="title" value="<?php echo $updataMessage['Title'] ?>">
                        </div>
                        <div class="input-group mt-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text font-size bg-dark text-light ">name:</span>
                            </div>
                            <input class="font-size form-control" name="name" value="<?php echo $updataMessage['name'] ?>">
                        </div>
                        <div class="input-group mt-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text font-size bg-dark text-light">content:</span>
                            </div>
                            <textarea class="font-size form-control" name="content"><?php echo $updataMessage['content'] ?></textarea>
                        </div>
                        <button type="submit" class="font-size float-right btn btn-info">送出</button>
                    </form>
            </div>
        </div>
    </div>

</body>

</html>