<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MY-GIRO</title>
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.4.1.min.js" type="application/javascript"></script>
    <script src="js/bootstrap.min.js" type="application/javascript"></script>
    <script src="js/bootstrap.bundle.min.js" type="application/javascript"></script>
    <script src="js/custom.js" type="application/javascript"></script>
</head>

<body>
    <div class="" id="main">
        <div class="bg-dark d-flex justify-content-between text-white flex-column " id="okno">
            <form action="login/index.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputLogin1">Login</label>
                    <input type="text" name="login" class="form-control w-100" id="exampleInputLogin1" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control w-100" id="exampleInputPassword1" required>
                </div>
                <button type="submit" class="btn btn-light bg-dark text-white">Войти</button>
            </form>
            <a class="btn btn-danger my-2" href="#">Закрыть</a>
        </div>
    </div>

    <div id="nav" class="nav">
        <div class="head w-100 d-lg-flex bg-dark justify-content-center flex-row">
            <div class="container d-flex py-3" style="max-width: 1024px">
                <img src="img/logo.png" class="d-inline-block align-top" alt="" style="border-radius: 20px;">
                <form class=" ml-4 mt-1">
                    <h1 class="text-white" style="text-shadow: 1px 1px 2px black">Продажа гироскутеров</h1>
                    <h5 class="text-white" style="text-shadow: 1px 1px 2px black">Наш телефон: +7 (123) 456-78-90</h5>
                    <button class="btn btn-outline-light my-2 my-sm-0 bg-dark text-white" style="border-radius: 5px;" type="button">Заказать звонок</button>
                </form>
            </div>
            <?php

            ?>
            <a class="m-auto btn btn-outline-light bg-dark text-white" href="#main">
                Вход
            </a>
        </div>
    </div>

    <div class="content w-100 d-flex justify-content-center flex-column bg-dark">
        <div id="slider" class="w-100 d-none d-lg-block" style="height: 765px; z-index: 100;">
            <div class="container w-100 h-100 p-0" style="max-width: 100%">
                <div class="bd-example w-100 h-100">
                    <div id="carouselExampleCaptions" class="carousel slide w-100 h-100" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner w-100 h-100">
                            <div class="carousel-item active w-100 h-100">
                                <img src="img/slide1.jpg" class="d-block w-100 h-100" alt="...">
                                <div class="carousel-caption d-none d-md-block bg-dark position-absolute" style="border-radius: 5px">
                                    <h5>Наш магазин</h5>
                                    <p>Все консультанты нашего магазина хорошо обучены и отлично знают как подобрать Вам
                                        гироскутер мечты!</p>
                                </div>
                            </div>
                            <div class="carousel-item w-100 h-100">
                                <img src="img/slide2.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block bg-dark position-absolute" style="border-radius: 5px">
                                    <h5>Наш ассортимент</h5>
                                    <p>В нашем магазине Вы сможе найти гироскутер на любой вкус и цвет, и даже для самых
                                        требовательных клиентов мы отыщем лучшее предложение!</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-danger w-100 d-none d-lg-flex justify-content-center" style="height: 50px">
            <div id="scr1" class="scrollings mt-1 text-white text-center bg-dark" style="border-radius: 100%; height: 40px; width: 40px; font-size: 30px; cursor: pointer">^</div>
            <div id="scr4" class="scrollings mt-1 ml-2 text-white text-center bg-dark" style="border-radius: 100%; height: 40px; width: 40px; font-size: 30px; cursor: pointer; transform: rotate(180deg)">
                ^</div>
        </div>

        <div id="click-here" class="w-100 bg-dark" style=" background-size: cover; background-repeat: no-repeat">

            <?php
            include "../private/connect.php"; //connection
            $query = mysqli_query($link, "select * from catalog");
            while ($row = mysqli_fetch_assoc($query)) {
            ?>

                <div class="container w-100 h-100 d-flex justify-content-center flex-row bg-danger" style="max-width: 994px;">
                    <img class="my-1" style="border-radius: 10px;" src="img/<?php echo $row["image"] ?>" alt="..." style="width: 100%;">
                    <div class="bg-danger h-75 w-50 d-flex justify-content-center flex-column m-auto" style="border-radius: 5px">
                        <div class="card-body">
                            <h5 class="card-title text-white"><?php echo $row["name"] ?></h5>
                            <p class="card-text text-white"><?php echo $row["info"] ?></p>
                        </div>
                        <div class="card-footer">
                            <h5 class="text-white"><?php echo $row["price"] ?></h5>
                            <button class="btn btn-outline-light my-2 my-sm-0" style="border-radius: 5px" type="submit">Заказать</button>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>

        </div>
    </div>

    <div class="bg-danger w-100 d-none d-lg-flex justify-content-center" style="height: 50px">
        <div id="scr2" class="scrollings mt-1 text-white text-center bg-dark" style="border-radius: 100%; height: 40px; width: 40px; font-size: 30px; cursor: pointer">^</div>
        <div id="scr5" class="scrollings mt-1 ml-2 text-white text-center bg-dark" style="border-radius: 100%; height: 40px; width: 40px; font-size: 30px; cursor: pointer; transform: rotate(180deg)">
            ^</div>
    </div>

    <div id="foot" class="w-100 d-flex">

        <div id="about-us" class="content w-100 h-100">
            <footer id="footer" class="footer-1">
                <div class="main-footer widgets-dark typo-light py-4" style="background-color: #1d2124">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="widget subscribe no-box">
                                    <hr style="height: 1px; background-color: #557174">
                                    <h5 class="widget-title mb-3 text-white">MY-GIRO<span></span></h5>
                                    <p style="font-size: 19px" class="text-white">Самый богатый <br>выбор гироскутеров.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="widget no-box">
                                    <hr style="height: 1px; background-color: #557174">
                                    <h5 class="widget-title mb-3 text-white">Наши контакты<span></span></h5>
                                    <p><a style="font-size: 19px" href="mailto:mygiro@mygiro.ru">mygiro@mygiro.ru</a>
                                    </p>
                                    <p><a style="font-size: 19px" href="tel:+71234567890">+7 (123) 456-78-90</a></p>
                                    <ul class="social-footer2 m-0 p-0 w-100">
                                        <li class="d-inline-block py-3 px-0"><a href="https://www.youtube.com/" target="_blank"><img width="30" height="30" src="img/Youtube.png"></a>
                                        </li>
                                        <li class="d-inline-block py-3 px-0"><a href="https://www.facebook.com/" target="_blank"><img width="30" height="30" src="img/Facebook.png"></a>
                                        </li>
                                        <li class="d-inline-block py-3 px-0"><a href="https://twitter.com" target="_blank"><img width="30" height="30" src="img/Twitter.png"></a>
                                        </li>
                                        <li class="d-inline-block py-3 px-0"><a href="https://www.instagram.com/" target="_blank"><img width="30" height="30" src="img/Instagram.png"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="widget no-box">
                                    <hr style="height: 1px; background-color: #557174">
                                    <h5 class="widget-title mb-3 text-white">Продано гироскутеров<span></span></h5>
                                    <p class=" text-white" style="font-size: 19px">234</p>
                                </div>
                                <div class="widget no-box">
                                    <hr style="height: 1px; background-color: #557174">
                                    <h5 class="widget-title mb-3 text-white">Посещений страницы<span></span></h5>
                                    <p id="visit-count" class=" text-white" style="font-size: 19px"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright m-0 p-0 d-flex justify-content-center bg-danger">
                    <div class="container m-0 p-0 d-flex justify-content-center">
                        <div class="row m-0 p-0 d-flex justify-content-center">
                            <div class="col-md-12 text-center m-0 p-0 d-flex justify-content-center">
                                <p class="text-white m-0 p-0">Copyright MY-GIRO © 2019. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>

    <div id="mailform" class="bg-dark d-flex justify-content-center w-100 pt-4" style="height: 570px">

        <div class="container">
            <div class="form">
                <div class="form-group">
                    <h4 class="text-white text-center" for="exampleFormControlTextarea1">Хотите получать
                        специальные
                        предложения?<br> Подпишитесь на рассылку.</h4>
                    <input class="form-control my-3" id="exampleFormControlTextarea1" placeholder="Имя"></textarea>
                    <input class="form-control my-3" id="exampleFormControlTextarea2" placeholder="Email"></input>
                    <button type="button" class="btn btn-light mt-2">Подписаться</button>
                </div>
            </div>

        </div>

    </div>

    <div id="scr7" class="scrollings mt-1 text-white text-center bg-danger position-fixed" style="border-radius: 100%; height: 40px; width: 40px; font-size: 30px; cursor: pointer; bottom:50px; right: 50px;">
        ^</div>
</body>

</html>