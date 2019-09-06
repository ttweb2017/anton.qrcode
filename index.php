<?php
/**
 * Created by PhpStorm.
 * User: shagy
 * Date: 9/6/19
 * Time: 5:31 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Anton QRcode">
    <title>Anton QRcode</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

    <!-- Open Graph Tags -->
    <meta property="og:title" content="Anton QRcode" />
    <meta property="og:description" content="Anton QRcode Description" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="en" />
    <meta property="og:url" content="http://localhost/anton.qrcode/" />
    <meta property="og:image" content="http://localhost/anton.qrcode/img/logo.png" />

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css" />

    <!-- Default Design-->
    <link rel="stylesheet" type="text/css" href="css/default.css">

    <!-- jQuery 3 -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>

    <!-- QRcode Generator-->
    <script type="text/javascript" src="node_modules/qrcode-generator/qrcode.js"></script>
</head>
<body>
<header>
    <div id="logo">
        <img src="img/logo.png" alt="QRcode" title="" />
    </div>
</header>
<div class="wrapper">
    <main class="container-fluid">
        <div class="row">
            <div class="col-md-offset-4 col-md-4">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="qr_code">QR Code Content</label>
                        <textarea id="qr_code" class="form-control" rows="3" aria-describedby="helpBlock"></textarea>
                        ...
                        <span id="helpBlock" class="help-block">Here you can write content of your QR Code.</span>
                    </div>
                </form>
            </div>
            <div class="col-md-offset-4 col-md-4">
                <div class="qr-content">
                    <div id="placeHolder"></div>
                </div>
            </div>
        </div>
        <script type="application/javascript">
            let typeNumber = 4;
            let errorCorrectionLevel = 'L';
            let qr = qrcode(typeNumber, errorCorrectionLevel);

            $("#qr_code").change(function(){
                let html;
                let val = $('#qr_code').val();
                console.log(val);
                qr.addData(val);
                qr.make();
                html = qr.createImgTag();
                $('#placeHolder').html(html);
            });
        </script>
    </main>
</div>
<footer>
    <p id="copyright">&copy; TTWeb <?php echo date("Y"); ?> Ähli haklar goragly.</p>
</footer>
</body>
</html>
