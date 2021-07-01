<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SingIn</title>
    <link rel="stylesheet" href="/Bootstrap4/bootstrap.min.css">
    <script src="/Bootstrap4/jquery-3.5.1.min.js"></script>
    <script src="/Bootstrap4/popper.min.js"></script>
    <script src="/Bootstrap4/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md alert alert-info ">
                <div>
                    <h1 class="mb-4 text-primary">登入畫面</h1>
                </div>
                <form action='../src/Contorllers/Account/LogIn.php' method='post'>
                    <div class="input-group mt-4 ">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-dark text-light">帳號:</span>
                        </div>
                        <input class=" form-control" placeholder="輸入帳號" name="account" required>
                    </div>
                    <div class="input-group mt-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-dark text-light ">密碼:</span>
                        </div>
                        <input type="password" class=" form-control" placeholder="輸入密碼" name="password" required>
                    </div>
                    <button type="submit" class=" float-right btn btn-info">登入</button>
                </form>
                <a href="./Registration.php">
                    <button class=" float-right btn btn-info mr-4">註冊</button>
                </a>
            </div>
        </div>
    </div>
</body>

</html>