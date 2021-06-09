<!doctype html>
<html lang="en">
<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>messageboard</title>
    <link rel="stylesheet" href="/Bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" href="../css/show.css">
    <script src="/Bootstrap4/jquery-3.5.1.min.js"></script>
    <script src="/Bootstrap4/popper.min.js"></script>
    <script src="/Bootstrap4/bootstrap.min.js"></script>

<body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
        <h6 class="navbar-brand col-sm-3 col-md-2 mr-0">留言板</h6>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <?php if (empty($_SESSION['UserAccount'])) { ?>
                    <a class="a" href="../../login/public/SingnIn.php">登入</a>
                <?php } ?>
                <?php if (isset($_SESSION['UserAccount'])) { ?>
                    <a class="a" href="../../login//src/Contorllers/Account/LogOut.php">登出</a>
                <?php } ?>
            </li>
        </ul>
    </nav>
    <div class="container-fluid h">
        <div class="row h">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <?php if (isset($_SESSION['UserAccount'])) { ?>
                    <div>
                        <button class="btn btn-info btn-size">
                            <a href="./AddMessage.php" class="add">撰寫</a>
                        </button>
                    </div>
                <?php } ?>
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                所有郵件
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                重要郵件
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                垃圾桶
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                </div>
            </main>
        </div>
    </div>
</body>

</html>