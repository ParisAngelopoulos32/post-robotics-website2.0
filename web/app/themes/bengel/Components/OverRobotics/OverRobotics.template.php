<?php
$titel = get_sub_field('titel');
$content = get_sub_field('content');
$image = get_sub_field('image');
?>

<div class="OverRobotics">
    <div class="over-robotics-inner">
        <div class="over-robotics-content">
            <?php if ($titel) { ?>
                <h2><?= $titel ?></h2>
            <?php } ?>

            <?php if ($content) { ?>
                <div class="over-robotics-text"><?= $content ?></div>
            <?php } ?>
        </div>

        <?php if ($image) { ?>
            <div class="over-robotics-card">
                <div class="over-robotics-card-logo">
                    <img src="<?= $image['sizes']['medium'] ?>" alt="<?= $image['alt'] ?>"
                         width="<?= $image['sizes']['medium-width'] ?>"
                         height="<?= $image['sizes']['medium-height'] ?>">
                </div>

                <div class="over-robotics-card-footer">
                    <div class="over-robotics-card-name">Post Robotics</div>
                    <div class="over-robotics-card-established">Lunteren &middot; sinds 2026</div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
