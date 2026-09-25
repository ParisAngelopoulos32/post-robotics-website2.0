<?php

$phone = get_field('phone', 'options');
$email = get_field('email', 'options');
$city = get_field('city', 'options');
$country = get_field('country', 'options');
$logo = get_field('logo', 'options');

$site_description = get_bloginfo('description');

?>
<footer class="FooterComponent">
    <div class="footer__main">
        <div class="footer-grid">
            <div class="footer-brand">
                <?php if ($logo) { ?>
                    <?php echo wp_get_attachment_image($logo['ID'], 'medium', false, ['class' => 'footer__logo']); ?>
                <?php } ?>

                <?php if ($site_description) { ?>
                    <p class="footer__tagline"><?= $site_description ?></p>
                <?php } ?>

                <a href="#contact" class="btn-primary footer__cta">
                    Contact opnemen <i class="fa-regular fa-arrow-right"></i>
                </a>
            </div>

            <div class="footer-nav-col">
                <div class="section-label footer__label">Navigatie</div>

                <nav class="footer__nav">
                    <?php echo wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'container' => false,
                        'menu_class' => 'footer__nav-list',
                        'link_before' => '',
                        'echo' => false,
                    )); ?>
                </nav>
            </div>

            <div class="footer-contact-col">
                <div class="section-label footer__label">Contact</div>

                <div class="footer__nav footer__nav-list">
                    <?php if ($email) { ?>
                        <a href="mailto:<?= $email ?>" class="footer-link"><?= $email ?></a>
                    <?php } ?>

                    <?php if ($phone) { ?>
                        <a href="tel:<?= str_replace(' ', '', $phone) ?>" class="footer-link"><?= $phone ?></a>
                    <?php } ?>

                    <?php if ($city || $country) { ?>
                        <span class="footer-link"><?php echo $city . (($city && $country) ? ', ' : '') . $country; ?></span>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <div class="footer__bottom">
        <div class="footer__bottom-inner">
            <div class="footer__copyright">
                &copy; <?php echo date('Y') . ' ' . get_bloginfo('name'); ?>
            </div>

            <button class="footer__totop" type="button"
                    onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
                Naar boven <i class="fa-solid fa-arrow-up"></i>
            </button>
        </div>
    </div>
</footer>
