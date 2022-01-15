<?php
if(file_exists("install/index.php")){
    //perform redirect if installer files exist
    //this if{} block may be deleted once installed
    header("Location: install/index.php");
}

require_once '../users/init.php';
require_once $abs_us_root.$us_url_root.'users/includes/template/prep.php';
if(isset($user) && $user->isLoggedIn()){
}
    if(!securePage($_SERVER['PHP_SELF'])){
        die("no permission to be here");
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>QR Code Scanner</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
    <link rel="stylesheet" href="src/styles.css" />
    <script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>
  </head>

  <body>
    <div id="container">
      <h1>QR Code Scanner</h1>

      <a id="btn-scan-qr">
        <img src="https://dab1nmslvvntp.cloudfront.net/wp-content/uploads/2017/07/1499401426qr_icon.svg">
      </a>

      <canvas hidden="" id="qr-canvas"></canvas>

      <div id="qr-result" hidden="">
        <b>Data:</b> <span id="outputData"></span>
      </div>
      <div id="test1">
        <h4 align="center"><a href="../processqr.php?data=C2FDACC7B252104582A20C6F3F8161B9E6CC3BE631E9495D1474F9041EF04395">Store1</a></h4>
      </div>
      <div id="test2">
        <h4 align="center"><a href="../processqr.php?data=asdasda sdas das das d">Store2</a></h4>
      </div>
      <div id="test3">
        <h4 align="center"><a href="../processqr.php?data=masmasmasm">Store3</a></h4>
      </div>      
      <div id="test4">
        <h4 align="center"><a href="../processqr.php?data=kasdkadkadk a kdadkadk">Store4</a></h4>
      </div>
    </div>

    <script src="src/qrCodeScanner2.js"></script>
  </body>
</html>
