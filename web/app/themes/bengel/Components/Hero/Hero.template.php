<?php
$subtitle = get_field('subtitle');
$candidate_image_id = attachment_url_to_postid(content_url('uploads/2026/09/candidate1-square-web.jpg'));
$candidate_image_url = $candidate_image_id ? wp_get_attachment_image_url($candidate_image_id, 'large') : '';
$machines = get_field('machines');
?>


<section class="Hero" id="top" <?php if ($candidate_image_url) { ?>style="--hero-bg-image: url('<?= esc_url($candidate_image_url) ?>');"<?php } ?>>
    <div class="hero-inner">
        <div class="hero-text">
            <div class="titel-hero">
                <h1>
                    <span class="titel-white">Michel</span>
                    <span class="titel-green">Post</span>
                </h1>
                <div class="subtitle">
                    <?php if ($subtitle) { ?>
                        <p class="hero-subtitle"><?= $subtitle ?></p>
                    <?php } ?>
                </div>
            </div>

            <div class="hero-content">
                <?php the_content(); ?>
            </div>

            <div class="hero-buttons">
                <a href="#contact" class="btn-primary">Contact opnemen</a>
                <a href="#machines" class="btn-secondary">Bekijk machines</a>
            </div>

            <?php if ($machines) { ?>
                <div class="machines">
                    <p class="machines-label">Werkt met</p>
                    <div class="machines-list">
                        <?php foreach ($machines as $machine) { ?>
                            <span class="machine-badge"><?= $machine['merk'] ?></span>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>

        <?php if ($candidate_image_id) { ?>
            <div class="image">
                <?php echo wp_get_attachment_image($candidate_image_id, 'large'); ?>
            </div>
        <?php } ?>
    </div>
</section>
