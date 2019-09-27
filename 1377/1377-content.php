<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
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
        <script>
        $(document).ready(function(){
        $("button").click(function(){
        $(".adv").toggle();
        });
        });
        </script>
    </head>
    <body>
        <div class="type-1377">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <input type="text" id="keyword" class="form-control" value="" name="keyword" placeholder="Enter an address, town, street, zip or property ID">
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="All Cities">
                                    <span class="filter-option ">All Cities</span>&nbsp;
                                    <span class="fa fa-sort"></span></button>
                                    <div class="dropdown-menu open">
                                        <ul class="dropdown-menu inner " role="menu">
                                            <li data-original-index="0">
                                                <a tabindex="0" class="" style="" data-tokens="null"><span class="text">All Cities</span> </a></li>
                                                <li data-original-index="1">
                                                    <a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Chicago</span></a></li>
                                                    <li data-original-index="2">
                                                        <a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Los Angeles</span>
                                                    </a></li>
                                                    <li data-original-index="3">
                                                        <a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Miami</span></a></li>
                                                        <li data-original-index="4">
                                                            <a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Nassau</span></a></li>
                                                            <li data-original-index="5">
                                                                <a tabindex="0" class="" style="" data-tokens="null"><span class="text"> New York</span></a></li>
                                                            </ul>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="All Areas">
                                                    <span class="filter-option ">All Areas</span>&nbsp;
                                                    <span class="fa fa-sort"></span></button>
                                                </div>
                                                <div class="col-md-3">
                                                    <button class=" blue btn advanced" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-gear">&nbsp;</i>Advanced</button>
                                                </div>
                                                <div class="col-md-3">
                                                    <button class=" blue btn search" type="button" >Search</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </body>
                    </html>