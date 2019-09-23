<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>type-1373</title>
    </head>
    <body>
        <div class="type-1373">
            <div class="container">
                <img class="img-fix" src="../1373/images/logo.png" alt="logo">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="item-wrap">
                                    <div class="body-top">
                                    <a href="#">
                                        <img src="../1373/images/4.png" alt="hinh1" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="body-center">
                                        <div class="img-text">
                                            <h4 class="name">
                                            <a href="#">BRUCK BANNER </a>
                                            </h4>
                                            <span class="position">Developer</span>
                                            <div class="social">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter-square"></i></a>
                                                <a href="#"><i class="fa fa-google"></i></a>
                                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="item-wrap">
                                    <div class="body-top">
                                    <a href="#" class="demohover">
                                        <img src="../1373/images/5.png" alt="hinh2" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="body-center">
                                        <div class="img-text">
                                            <h4 class="name">
                                            <a href="#">KENT PATHER </a>
                                            </h4>
                                            <span class="position">Sales Executive</span>
                                            <div class="social">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter-square"></i></a>
                                                <a href="#"><i class="fa fa-google"></i></a>
                                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="item-wrap">
                                    <div class="body-top">
                                    <a href="#" class="demohover">
                                        <img src="../1373/images/9.png" alt="hinh3" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="body-center">
                                        <div class="img-text">
                                            <h4 class="name">
                                            <a href="#">HERRY SILVER </a>
                                            </h4>
                                            <span class="position">Selling Agent</span>
                                            <div class="social">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter-square"></i></a>
                                                <a href="#"><i class="fa fa-google"></i></a>
                                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="item-wrap">
                                    <div class="body-top">
                                    <a href="#" class="demohover">
                                        <img src="../1373/images/7.png" alt="hinh4" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="body-center">
                                        <div class="img-text">
                                            <h4 class="name">
                                            <a href="#">SCARLET ATKINSON </a>
                                            </h4>
                                            <span class="position">Real Estate Broker</span>
                                            <div class="social">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter-square"></i></a>
                                                <a href="#"><i class="fa fa-google"></i></a>
                                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="item-wrap">
                                    <div class="body-top">
                                    <a href="#" class="demohover">
                                        <img src="../1373/images/8.png" alt="hinh5" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="body-center">
                                        <div class="img-text">
                                            <h4 class="name">
                                            <a href="#">BEN PAKER </a>
                                            </h4>
                                            <span class="position">Developer</span>
                                            <div class="social">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter-square"></i></a>
                                                <a href="#"><i class="fa fa-google"></i></a>
                                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                
            </div>
        </div>
        <script>
        var swiper = new Swiper('.swiper-container', {
        slidesPerView: 4,
        spaceBetween: 30,
        rotate:50,
        loop: true,
        pagination: {
        el: '.swiper-pagination',
        clickable: true,
        },
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        },
        });
        </script>
    </body>
</html>