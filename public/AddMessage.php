<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message-Board</title>
    <link rel="stylesheet" href="/Bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" href="/css/message-board-use.css">
    <script src="/Bootstrap4/jquery-3.5.1.min.js"></script>
    <script src="/Bootstrap4/popper.min.js"></script>
    <script src="/Bootstrap4/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div>
                        <h1 class="message-board text-primary">寄信</h1>
                    </div>
                    <form action='../src/Controllers/Message/create.php' method='post'>
                        <div class="input-group mt-4 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text font-size bg-dark text-light">收件者:</span>
                            </div>
                            <input class="font-size form-control" id="receiver" name="receiver" required>
                        </div>
                        <div class="input-group mt-4 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text font-size bg-dark text-light">主旨:</span>
                            </div>
                            <input class="font-size form-control" id="title" name="title" required>
                        </div>
                        <div class="input-group mt-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text font-size bg-dark text-light">內容:</span>
                            </div>
                            <textarea class="font-size form-control" id="textarea" name="content"></textarea>
                        </div>
                        <input type="hidden" name="name" value=" <?php echo $_SESSION['UserAccount'] ?>">
                        <button type="submit" class="font-size float-right btn btn-info">送出</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>