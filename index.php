<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Web of Arnav</title>
    <link rel="stylesheet" href="static/css/style.css">
    <link rel="stylesheet" href="static/css/orbs.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/htmx/1.9.10/htmx.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Ubuntu&family=Roboto+Slab&display=swap" rel="stylesheet">
    <script src="static/js/script.js"></script>
    <link rel="shortcut icon" href="static/images/icon.ico" type="image/x-icon">
    <script src="https://unpkg.com/htmx.org@1.9.12/dist/ext/client-side-templates.js"></script>
    <script src="https://unpkg.com/mustache@latest"></script>
    <!--link href="static/css/iconcaptcha.min.css" rel="stylesheet" type="text/css">
    <script src="static/js/iconcaptcha.min.js" type="text/javascript"></script!-->
    <link href="https://cdn.jsdelivr.net/gh/fabianwennink/iconcaptcha-widget@4.0.0/dist/css/iconcaptcha.min.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/gh/fabianwennink/iconcaptcha-widget@4.0.0/dist/js/iconcaptcha.min.js" type="text/javascript"></script>

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
        <div class="vertical-nav">
            <img src="static/images/icon.png" alt="" class="vnav-logo">
        </div>
        <div class="brand" id="brand">
            <button class="brand-itm" hx-get="home.php" hx-trigger="click" hx-swap="innerHTML swap:0.2s" hx-target=".content" hx-replace-url="?p=home"></button>
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
                
                <!--div class="iconcaptcha-widget" data-theme="light"></div>
                <?php require_once __DIR__ . '/cdn/vendor/autoload.php'; use IconCaptcha\IconCaptcha; ?>
                <?php echo \IconCaptcha\Token\IconCaptchaToken::render(); ?><!-->
            
            </form>     
        </div>
        <p>COPYRIGHT © ARNAV CHOTKAN | 2023 - <?php echo date("Y"); ?></p>
        <a href="https://www.dmca.com/r/k7jrmrp" title="DMCA.com Protection Status" class="dmca-badge" target="_blank"> <img  class="dmca-badge" src ="https://images.dmca.com/Badges/DMCA_logo-bw200w.png?ID=42f4e14f-04b8-4976-bf11-74d347b461c8"  alt="DMCA.com Protection Status"/></a>
    </div>
</body>
<script type="module" src="static/js/orbs.js"></script>
<script type="text/javascript">
    document.addEventListener('htmx:afterSwap', function() {
        IconCaptcha.init('.iconcaptcha-widget', {
            general: {
                endpoint: 'cdn/captcha/api/captcha-request.php', // required, change the path accordingly.
                fontFamily: 'inherit',
                credits: 'true',
            },
            security: {
                interactionDelay: 1500,
                hoverProtection: true,
                displayInitialMessage: true,
                initializationDelay: 500,
                incorrectSelectionResetDelay: 3000,
                loadingAnimationDuration: 1000,
            },
            locale: {
                initialization: {
                    verify: 'Verify that you are human.',
                    loading: 'Loading challenge...',
                },
                header: 'Select the image displayed the <u>least</u> amount of times',
                correct: 'Verification complete.',
                incorrect: {
                    title: 'Uh oh.',
                    subtitle: "You've selected the wrong image.",
                },
                timeout: {
                    title: 'Please wait.',
                    subtitle: 'You made too many incorrect selections.'
                }
            }
        });
    });
</script>
</html>