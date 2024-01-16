<?php include_once "./api/db.php" ;?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/jquery-1.9.1min.js"></script>
	<script src="./js/js.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>AniMate</title>
</head>
<body>
    <div class="container-fluid">
        <!-- header -->
        <header>
            <div class="header-motto" style="border-bottom: 2px solid black; padding-bottom: 8px;font-size: 16px;">
            <span><?php $motto=$Motto->find(['sh'=>1]); echo $motto['text'];?></span>
            </div>
            <div class="header-main" style="display: flex;justify-content: space-between; border-top: 1px solid black;border-bottom: 1px solid black;  margin-top: 8px;padding: 20px 0;">
                <a href="./index.php" style="text-decoration: none;"><img src="./icon/logo.png" alt="AniMate" width="210" height="100%"><span style="font-size: 60px; color:#1f1f1f">Animate</span></a>
                <div class="header-info" style="display: flex;border-left: 1px solid black;padding-left: 20px;">
                    <a href="#" class="text-decoration-none"><span>快來感受貓咪的吸引力</span></a>
                    <div class="header-info-date">
                        2024/01/14
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: 1px solid black;padding: 1px 0;">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="?do=admin">會員管理</a>
                            </li>
                            <li class=" nav-item">
                                    <a class="nav-link" href="?do=motto">座右銘管理</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?do=news">新聞管理</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?do=photography">日常撮影管理</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?do=vote">主題票選管理</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="login" >
                    <?php
                    if (!isset($_SESSION['user'])) {
                    ?>
                        <a href="?do=login" class="d-flex justify-content-end text-decoration-none" style="width:250px"><img src="./icon/login.png" alt="login" width="20px" height="100%">
                            <span>&nbsp Login</span></a>
                    <?php
                    } else {
                    ?>
                    <div class="d-flex justify-content-end" style="width:250px">
                        歡迎,<?= $_SESSION['user']; ?>&nbsp
                        <button class="login-btn" onclick="location.href='./api/logout.php'" style="margin-left: 10px;border-radius:10%;background-color:#f8f8f8;border:1px solid #1f1f1f">登出</button>
                        <?php
                        if ($_SESSION['user'] == 'admin') {
                        ?>
                            <button class="login-btn" onclick="location.href='back.php'" style="margin-left: 10px;border-radius:10%;background-color:#f8f8f8;border:1px solid #1f1f1f">管理</button>
                    <?php
                        }
                        ?>
                    </div>
                        
                        <?php
                    }
                    ?>
                </div>

        </header>
        <!-- header end -->


        <!-- main -->
        <div>
            <?php
            $do = $_GET['do'] ?? 'main';
            $file = "./back/{$do}.php";
            if (file_exists($file)) {
                include $file;
            } else {
                include "./back/main.php";
            }

            ?>
        </div>
        <!-- main end -->



        <!-- footer -->
        <footer style="height: 100px;background-color: black;margin-top:150px">
            <div class="footer-info text-center" style="font-size: 12px;color: #f8f8f8;padding-top: 60px;">
                <span>103 台北市築夢區彩虹路一段 | 0917893235 | favoriteinfinite@gmail.com.tw | © Animate All rights reserved.</span>
            </div>
        </footer>
        <!-- footer end -->
    </div>


    <script></script>
</body>

</html>