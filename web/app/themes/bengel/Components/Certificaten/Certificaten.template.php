<?php
$titel = get_sub_field('titel');
$opleidingen = get_sub_field('opleiding');
$certificaten_titel = get_sub_field('certificaten_titel');
$certificaten = get_sub_field('certificaten');
?>

<div class="certificaten">
    <div class="certificaten-inner">
        <?php if ($titel) { ?>
            <h2><?= $titel ?></h2>
        <?php } ?>

        <div class="certificaten-grid">
            <?php if ($opleidingen) { ?>
                <?php foreach ($opleidingen as $opleiding) { ?>
                    <div class="opleiding-card">
                        <div class="opleiding-icon"><?= $opleiding['icoon'] ?></div>
                        <div class="opleiding-label"><?= $opleiding['opleiding'] ?></div>
                        <div class="opleiding-naam"><?= $opleiding['opleiding-naam'] ?></div>
                        <div class="opleiding-locatie"><?= $opleiding['locatie-opleiding'] ?></div>
                        <span class="opleiding-jaar"><?= $opleiding['jaar'] ?></span>
                    </div>
                <?php } ?>
            <?php } ?>

            <div class="certificaten-col">
                <?php if ($certificaten_titel) { ?>
                    <div class="certificaten-label"><?= $certificaten_titel ?></div>
                <?php } ?>

                <?php if (is_array($certificaten)) { ?>
                    <ul class="certificaten-list">
                        <?php foreach ($certificaten as $certificaat) { ?>
                            <li class="certificaat-badge">
                                <span class="certificaat-icon"><?= $certificaat['icoon'] ?></span>
                                <div>
                                    <div class="certificaat-naam"><?= $certificaat['naam'] ?></div>
                                    <div class="certificaat-jaar"><?= $certificaat['jaar'] ?></div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
