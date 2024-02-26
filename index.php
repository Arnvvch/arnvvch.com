<?php
include('global/base64url.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="static/css/style.css">
    <link rel="stylesheet" href="static/css/orbs.css">
    <script src="cdn/internal/proxy.php?filecache=<?php echo(base64url_encode('cdnjs.cloudflare.com/ajax/libs/htmx/1.9.10/htmx.min.js')); ?>&type=text/javascript" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="cdn/internal/proxy.php?filecache=<?php echo(base64url_encode('fonts.googleapis.com/css2?family=Oswald:wght@500&family=Ubuntu&family=Roboto+Slab&display=swap')); ?>&type=text/css" rel="stylesheet">
    <script src="static/js/script.js"></script>
</head>
<body hx-get="home.php" hx-trigger="load" hx-swap="innerHTML swap:0.4s" hx-target=".content">
    <canvas class="orb-canvas"></canvas>
    <div class="header" id="header">
        <div class="brand" id="brand">
            <button class="brand-itm" hx-get="home.php" hx-trigger="click" hx-swap="innerHTML swap:0.2s" hx-target=".content"></button>
        </div>
        <div class="nav">
            <button class="nav-itm" hx-get="home.php" hx-trigger="click" hx-swap="innerHTML swap:0.2s" hx-target=".content">
                <p>HOME</p>
            </button>
            <button class="nav-itm" hx-get="about.php" hx-trigger="click" hx-swap="innerHTML swap:0.2s" hx-target=".content">
                <p>ABOUT</p>
            </button>
            <button class="nav-itm" hx-get="contact.php" hx-trigger="click" hx-swap="innerHTML swap:0.2s" hx-target=".content">
                <p>CONTACT</p>
            </button>
        </div>
    </div>
    <div class="content">
        <div class="middle">
            <div class="carousel">
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <div class="footer"></div>
</body>
<script type="module" src="static/js/orbs.js"></script>
</html>