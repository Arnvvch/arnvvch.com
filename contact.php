<div class="contact" id="f1">
    <div class="window contact-win">
        <div class="context">
            <div class="title">Contact Me</div>
            <div class="actions"><img src="static/images/icons/011-cancel.png" alt="Close"></div>
        </div>
        <form class="cform" hx-post="contact-submit.php" hx-include="[name='email'], [name='message']">
            <input name="email" type="email" class="email" placeholder="E-Mail">
            <textarea name="message" type="text" class="message" placeholder="Message"></textarea>

            <div class="iconcaptcha-widget" data-theme="light"></div>
            <?php require_once __DIR__ . '/cdn/vendor/autoload.php'; use IconCaptcha\IconCaptcha; ?>
            <?php echo \IconCaptcha\Token\IconCaptchaToken::render(); ?>

            <input type="submit">
        </form>
    </div>
</div>