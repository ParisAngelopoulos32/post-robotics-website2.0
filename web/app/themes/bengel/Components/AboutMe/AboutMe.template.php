<?php
$titel = get_sub_field('titel');
$content = get_sub_field('content');
$image = get_sub_field('image');
$feitjes = get_sub_field('feitjes');
?>

<div class="AboutMe" id="over-mij">
    <div class="about-me-inner">
        <span class="sec-index">01</span>

        <?php if ($image) { ?>
            <div class="about-me-photo">
                <div class="about-me-image">
                    <img src="<?= $image['sizes']['medium'] ?>" alt="<?= $image['alt'] ?>"
                         width="<?= $image['sizes']['medium-width'] ?>"
                         height="<?= $image['sizes']['medium-height'] ?>">
                    <div class="about-me-image-tint"></div>
                </div>

                <div class="about-me-photo-caption">
                    <span class="about-me-photo-name">Michel Post</span>
                    <span class="about-me-photo-role">Eigenaar</span>
                </div>
            </div>
        <?php } ?>

        <div class="about-me-content">
            <?php if ($titel) { ?>
                <h2><?= $titel ?></h2>
            <?php } ?>

            <?php if ($content) { ?>
                <div class="about-me-text"><?= $content ?></div>
            <?php } ?>
        </div>

        <?php if ($feitjes) { ?>
            <ul class="about-me-feitjes">
                <?php foreach ($feitjes as $feitje) { ?>
                    <li>
                        <span class="feitje-icon"><?= $feitje['icon'] ?></span>
                        <div>
                            <div class="feitje-value"><?= $feitje['value'] ?></div>
                            <div class="feitje-text"><?= $feitje['text'] ?></div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>
    </div>
</div>
