<div class="contact" id="f1">
    <div class="window contact-win">
        <div class="context">
            <div class="title">Challenge Me on Lichess</div>
            <div class="actions"><img src="static/images/icons/011-cancel.png" alt="Close"></div>
        </div>
        <form class="cform" hx-post="challenge-submit.php" hx-include="[name='username']">
            <input name="username" type="username" class="email" placeholder="Lichess Username">

            <div class="iconcaptcha-widget" data-theme="light"></div>
            <?php require_once __DIR__ . '/cdn/vendor/autoload.php'; use IconCaptcha\IconCaptcha; ?>
            <?php echo \IconCaptcha\Token\IconCaptchaToken::render(); ?>
            
            <input type="submit" hx-trigger="click" hx-post="challenge-submit.php" hx-target="#f1" hx-swap="innerHTML">
        </form>
    </div>
</div>
