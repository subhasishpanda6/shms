<?php
if(!defined("page_accees_permistion")){
    echo '<!DOCTYPE html>
    <html>
    <head>
    <title>Access Denied index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body style="background-color: black;color: white">
    <div class="w3-display-middle">
    <h1 class="w3-jumbo w3-animate-top w3-center" style="color: red;"><code>Access Denied</code></h1>
    <hr class="w3-border-white w3-animate-left" style="margin:auto;width:50%">
    <h3 class="w3-center w3-animate-right">You dont have permission to view this site.</h3>
    <h3 class="w3-center w3-animate-zoom">🚫🚫🚫🚫</h3>
    <h6 class="w3-center w3-animate-zoom" stye="color: red;text-decoration: underline;">error code:403 forbidden</h6>
    </div>
    </body>
    </html>';
}

?>