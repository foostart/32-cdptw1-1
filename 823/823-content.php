<?php
$url_host = $_SERVER['HTTP_HOST'];

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
    <title>Document</title>
</head>
<body>
    <div class="type-823">
        <div class="container">
            <br>
            <h4>Bootstrap 4 and CCS3 Product Cards with Transition - Techhowdy(demonguru18) - Lyoid Lopes</h4>
            <br>
            <div class="row" id="ads">
                <!-- Category Card -->
                <div class="col-md-4">
                    <div class="card rounded">
                        <div class="card-image">
                            <span class="card-notify-badge">Low KMS</span>
                            <span class="card-notify-year">2018</span>
                            <img class="img-fluid" src="../823/images/xe1.jpg" alt="Alternate Text" />
                        </div>
                        <div class="card-image-overlay">
                            <span class="card-detail-badge">Used</span>
                            <span class="card-detail-badge">$28,000.00</span>
                            <span class="card-detail-badge">13000 Kms</span>
                        </div>
                        <div class="card-body text-center">
                            <div class="ad-title">
                                <h5>Honda Accord LX</h5>
                            </div>
                            <a class="ad-btn" href="#">View</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card rounded">
                        <div class="card-image">
                            <span class="card-notify-badge">Fully-Loaded</span>
                            <span class="card-notify-year">2017</span>
                            <img class="img-fluid" src="../823/images/xe2.jpg" alt="Alternate Text" />
                        </div>
                        <div class="card-image-overlay ">
                            <span class="card-detail-badge">Used</span>
                            <span class="card-detail-badge">$28,000.00</span>
                            <span class="card-detail-badge">13000 Kms</span>
                        </div>
                        <div class="card-body text-center">
                            <div class="ad-title ">
                                <h5>Honda CIVIC HATCHBACK LS</h5>
                            </div>
                            <a class="ad-btn" href="#">View</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card rounded">
                        <div class="card-image">
                            <span class="card-notify-badge">Price Reduced</span>
                            <span class="card-notify-year">2018</span>
                            <img class="img-fluid" src="../823/images/xe3.jpg" alt="Alternate Text" />
                        </div>
                        <div class="card-image-overlay ">
                            <span class="card-detail-badge">Used</span>
                            <span class="card-detail-badge">$22,000.00</span>
                            <span class="card-detail-badge">8000 Kms</span>
                        </div>
                        <div class="card-body text-center">
                            <div class="ad-title ">
                                <h5>Honda Accord Hybrid LT</h5>
                            </div>
                            <a class="ad-btn" href="#">View</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
