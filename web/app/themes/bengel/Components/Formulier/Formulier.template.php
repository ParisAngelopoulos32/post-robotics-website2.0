<?php
$titel = get_sub_field('titel');
$tekst = get_sub_field('tekst');
$form_id = get_sub_field('form-id');
$maps = get_sub_field('maps');

$email = get_field('email', 'options');
$phone = get_field('phone', 'options');
$city = get_field('city', 'options');
$country = get_field('country', 'options');
?>

<div class="formulier" id="contact">
    <div class="formulier-inner">
        <span class="sec-index sec-index--dark">06</span>

        <div class="formulier-header">
            <?php if ($titel) { ?>
                <h2 class="formulier-titel"><?= $titel ?></h2>
            <?php } ?>

            <?php if ($tekst) { ?>
                <div class="formulier-tekst"><?= $tekst ?></div>
            <?php } ?>
        </div>

        <div class="formulier-grid">
            <div class="formulier-info">
                <div class="formulier-info-label">Gegevens</div>

                <?php if ($email) { ?>
                    <div class="formulier-row">
                        <span class="formulier-row-icon"><i class="fa-regular fa-envelope"></i></span>
                        <div>
                            <span class="formulier-row-label">E-mail</span>
                            <a href="mailto:<?= $email ?>" class="formulier-row-value"><?= $email ?></a>
                        </div>
                    </div>
                <?php } ?>

                <?php if ($phone) { ?>
                    <div class="formulier-row">
                        <span class="formulier-row-icon"><i class="fa-solid fa-phone"></i></span>
                        <div>
                            <span class="formulier-row-label">Telefoon</span>
                            <a href="tel:<?= str_replace(' ', '', $phone) ?>" class="formulier-row-value"><?= $phone ?></a>
                        </div>
                    </div>
                <?php } ?>

                <?php if ($city || $country) { ?>
                    <div class="formulier-row">
                        <span class="formulier-row-icon"><i class="fa-solid fa-location-dot"></i></span>
                        <div>
                            <span class="formulier-row-label">Locatie</span>
                            <span class="formulier-row-value"><?= $city . (($city && $country) ? ', ' : '') . $country ?></span>
                        </div>
                    </div>
                <?php } ?>

                <?php if ($maps) { ?>
                    <div class="acf-map formulier-map" data-zoom="16">
                        <div class="marker" data-lat="<?= esc_attr($maps['lat']) ?>" data-lng="<?= esc_attr($maps['lng']) ?>"></div>
                    </div>
                <?php } ?>
            </div>

            <div class="formulier-form">
                <div class="formulier-form-label">Stuur een bericht</div>

                <?php if ($form_id && class_exists('GFForms')) { ?>
                    <?php gravity_form(intval($form_id), false, false, false, '', true); ?>
                <?php } elseif ($form_id) { ?>
                    <p>Gravity Forms is niet actief, formulier #<?= intval($form_id) ?> kan niet getoond worden.</p>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
