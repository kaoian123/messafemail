<!DOCTYPE html>
<html lang="en">

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
        <nav class="navbar navbar-expand-xl bg-dark">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link font-size" href="./ShowAllMessage.php">留言列表</a>
                </li>
            </ul>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div>
                        <h1 class="message-board text-primary">新增留言</h1>
                    </div>
                    <form action='../src/Controllers/Message/create.php' method='post'>
                        <div class="input-group mt-4 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text font-size bg-dark text-light">title:</span>
                            </div>
                            <input class="font-size form-control" placeholder="type your title" id="title" name="title" required>
                        </div>
                        <div class="input-group mt-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text font-size bg-dark text-light ">name:</span>
                            </div>
                            <input class="font-size form-control" placeholder="type your name" id="user-name" name="name">
                        </div>
                        <div class="input-group mt-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text font-size bg-dark text-light">content:</span>
                            </div>
                            <textarea class="font-size form-control" id="textarea" placeholder="type your content" name="content"></textarea>
                        </div>
                        <button type="submit" class="font-size float-right btn btn-info">送出</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>