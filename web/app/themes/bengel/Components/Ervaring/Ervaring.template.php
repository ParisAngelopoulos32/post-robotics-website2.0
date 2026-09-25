<?php
$titel = get_sub_field('titel');
$ervaringen = get_sub_field('ervaringen');
$expertise_titel = get_sub_field('expertise_titel');
$expertise = get_sub_field('expertise');
?>

<div class="Ervaring">
    <div class="ervaring-inner">
        <?php if ($titel) { ?>
            <h2><?= $titel ?></h2>
        <?php } ?>

        <?php if ($ervaringen) { ?>
            <ul class="ervaring-list">
                <?php foreach ($ervaringen as $index => $ervaring) { ?>
                    <li class="ervaring-row <?= $index === 0 ? 'ervaring-row--current' : '' ?>">
                        <div class="ervaring-row-content">
                            <?php if ($ervaring['afbeelding']) { ?>
                                <img src="<?= $ervaring['afbeelding']['sizes']['medium'] ?>"
                                     alt="<?= $ervaring['afbeelding']['alt'] ?>"
                                     class="ervaring-photo">
                            <?php } ?>

                            <div>
                                <h3 class="ervaring-bedrijf"><?= $ervaring['bedrijf'] ?></h3>
                                <div class="ervaring-functie"><?= $ervaring['functie'] ?></div>
                                <div class="ervaring-description"><?= $ervaring['description'] ?></div>
                            </div>
                        </div>

                        <?php if ($ervaring['jaren']) { ?>
                            <span class="ervaring-jaren"><?= $ervaring['jaren'] ?></span>
                        <?php } ?>
                    </li>
                <?php } ?>
            </ul>

            <?php if ($expertise) { ?>
                <div class="ervaring-expertise">
                    <?php if ($expertise_titel) { ?>
                        <div class="ervaring-expertise-label"><?= $expertise_titel ?></div>
                    <?php } ?>

                    <div class="ervaring-expertise-tags">
                        <?php foreach ($expertise as $tag) { ?>
                            <span class="ervaring-tag"><?= $tag['naam'] ?></span>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</div>
