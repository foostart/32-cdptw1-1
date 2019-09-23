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
                <div class="row">
                    <img class="img-fix" src="../1373/images/logo.png" style="margin-left:10px" alt="logo">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="row">
                                    <div class="item-wrap">
                                        <div class="body-top">
                                            <h2>Loft Above The City</h2>
                                            <div class="item-address">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                <span>Hope Street (Stop P),London SW11, UK</span>
                                            </div>
                                        </div>
                                        <div class="body-center">
                                            <div class="label-status"><a href="#">FOR RENT</a></div>
                                            <img class="img-responsive" src="../1371/images/property6-370x210.jpg" alt="photo6">
                                        </div>
                                        <div class="body-bottom">
                                            <ul>
                                                <li><i class="fa fa-line-chart updatefa" aria-hidden="true"></i>1660 m2</li>
                                                <li><i class="fa fa-bed updatefa" aria-hidden="true"></i>3 Bedrooms</li>
                                                <li><i class="fa fa-university updatefa" aria-hidden="true"></i>2 Bathrooms</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="item-footer">
                                        <div class="row item">
                                            <div class="col-md-8 item-8">
                                                <a href="#" class="price">$ 84,000 / <span>month</span></a>
                                            </div>
                                            <div class="col-md-4 item-8">
                                                <div class="col-md-4 sub-item-8"><a href="#" ><i class="fa fa-heart-o priceupdate" aria-hidden="true"></i></a></div>
                                                <div class="col-md-4 sub-item-8"><a href="#"><i class="fa fa-exchange priceupdate" aria-hidden="true"></i></a></div>
                                                <div class="col-md-4 sub-item-8"><a href="#"><i class="fa fa-share-alt priceupdate" aria-hidden="true"></i></a></div>
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
                
                <div class="slide-show">
                    <div class="row">
                        
                        



                        <div class="col-md-3" >
                            <div class="img1">
                                <a href="#">
                                    <img src="../1373/images/3.png" alt="1" stt="1" class="img-responsive">
                                </a>
                            </div>
                            <div class="img-text">
                                <h4 class="name">
                                <a href="#">SARAH BARABOVA </a>
                                </h4>
                                <span class="position">Buying Agent</span>
                                <div class="social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter-square"></i></a>
                                    <a href="#"><i class="fa fa-google"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 test" >
                            <div class="img1">
                                <a href="#">
                                    <img src="../1373/images/6.png" alt="2" class="img-responsive">
                                </a>
                            </div>
                            <div class="img-text">
                                <h4 class="name">
                                <a href="#">BARACK OCEAN </a>
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
                        <div class="col-md-3 test" >
                            <div class="img1">
                                <a href="#">
                                    <img src="../1373/images/1.png" alt="3" class="img-responsive">
                                </a>
                            </div>
                            <div class="img-text">
                                <h4 class="name">
                                <a href="#">JOHNNY SANDERS </a>
                                </h4>
                                <span class="position">Real Estate Broker</span>
                                <div class="social">
                                    <a href="#"><i class="fa fa-facebook" id="fb"></i></a>
                                    <a href="#"><i class="fa fa-twitter-square" id="tw"></i></a>
                                    <a href="#"><i class="fa fa-google" id="gg"></i></a>
                                    <a href="#"><i class="fa fa-pinterest" id="pi"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 test" >
                            <div class="img1">
                                <a href="#">
                                    <img src="../1373/images/4.png" alt="4" class="img-responsive">
                                </a>
                            </div>
                            <div class="img-text">
                                <h4 class="name">
                                <a href="#">RICHARD MOORE </a>
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
        </div>
    </div>
    <script type="text/javascript">
        var swiper = new Swiper('.swiper-container', {
        slidesPerView: 4,
        spaceBetween: 30,
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