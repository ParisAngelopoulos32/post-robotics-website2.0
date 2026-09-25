<?php
$titel = get_sub_field('titel');
$content = get_sub_field('content');
$diensten = get_sub_field('dienst');
?>

<div class="Diensten">
    <div class="diensten-inner">
        <?php if ($titel) { ?>
            <h2><?= $titel ?></h2>
        <?php } ?>

        <?php if ($content) { ?>
            <div class="diensten-text"><?= $content ?></div>
        <?php } ?>

        <?php if ($diensten) { ?>
            <ul class="diensten-grid">
                <?php foreach ($diensten as $dienst) { ?>
                    <li class="diensten-card">
                        <span class="dienst-icon"><?= $dienst['icon'] ?></span>
                        <div class="dienst-titel"><?= $dienst['titel'] ?></div>
                        <div class="dienst-description"><?= $dienst['description'] ?></div>
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>

        <a href="#contact" class="diensten-cta">
            <div>
                <div class="diensten-cta-title">Staat uw vraag er niet bij?</div>
                <div class="diensten-cta-desc">Neem contact op &mdash; we denken graag met u mee.</div>
            </div>
            <div class="diensten-cta-icon">
                <i class="fa-solid fa-arrow-right"></i>
            </div>
        </a>
    </div>
</div>
