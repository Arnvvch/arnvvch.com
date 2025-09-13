<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arnvvch's Space</title>
    <link rel="stylesheet" href="static/css/style.css">
    <link rel="stylesheet" href="static/css/orbs.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/htmx/1.9.10/htmx.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Ubuntu&family=Roboto+Slab&display=swap" rel="stylesheet">
    <script src="static/js/script.js"></script>
    <link rel="shortcut icon" href="static/images/icon.png" type="image/x-icon">
    <script src="https://unpkg.com/htmx.org@1.9.12/dist/ext/client-side-templates.js"></script>
    <script src="https://unpkg.com/mustache@latest"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZR8H95R97T"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-ZR8H95R97T');
    </script>
</head>
<body hx-get="<?php if(isset($_GET['p']) && file_exists($_GET['p'] . '.php')) {echo $_GET['p'] . '.php';} else {echo 'home.php';} ?>" hx-trigger="load" hx-swap="innerHTML swap:0.4s" hx-target=".content" hx-replace-url="">
    <canvas class="orb-canvas"></canvas>
    <div class="header" id="header">
        <div class="brand" id="brand">
            <button class="brand-itm" hx-get="home.php" hx-trigger="click" hx-swap="innerHTML swap:0.2s" hx-target=".content" hx-replace-url="?p=home"></button>
            <button class="v-brand-itm" hx-get="home.php" hx-trigger="click" hx-swap="innerHTML swap:0.2s" hx-target=".content" hx-replace-url="?p=home"></button>
        </div>
        <div class="nav">
            <button class="nav-itm" hx-get="home.php" hx-trigger="click" hx-swap="innerHTML swap:0.2s" hx-target=".content" hx-replace-url="?p=home">
                <p>HOME</p>
            </button>
            <button class="nav-itm" hx-get="about.php" hx-trigger="click" hx-swap="innerHTML swap:0.2s" hx-target=".content" hx-replace-url="?p=about">
                <p>ABOUT</p>
            </button>
            <button class="nav-itm" hx-get="projects.php" hx-trigger="click" hx-swap="innerHTML swap:0.2s" hx-target=".content" hx-replace-url="?p=projects">
                <p>PROJECTS</p>
            </button>
            <button class="nav-itm" hx-get="contact.php" hx-trigger="click" hx-swap="innerHTML swap:0.2s" hx-target=".content" hx-replace-url="?p=contact">
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
    <div class="footer">
        <div class="window">
            <form hx-post="newsletter-submit.php" hx-include="[name='email']">
                <input type="email" name="email" id="email" placeholder="Subscribe to Newsletter!">
            
            </form>     
        </div>
        <p>COPYRIGHT © ARNAV CHOTKAN | 2023 - <?php echo date("Y"); ?></p>
        <a href="https://www.dmca.com/r/zz65q44" title="DMCA.com Protection Status" class="dmca-badge" target="_blank"> <img  class="dmca-badge" src ="https://images.dmca.com/Badges/DMCA_logo-bw200w.png?ID=42f4e14f-04b8-4976-bf11-74d347b461c8"  alt="DMCA.com Protection Status"/></a>
    </div>
</body>
<script type="module" src="static/js/orbs.js"></script>
</html>