<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1371">

    <div class="container" style="margin-top: 10px;">
        <div class="row">
            <h3 class="noo-theme-title">
                <span class="first-word">Latest<span></span></span> Properties </h3>
            <p class="noo-theme-sub-title">
                We have hundreds of properties for you to choose from. </p>
            

        </div>
    </div>
</div>    

