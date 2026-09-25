<?php $logo = get_field('logo', 'options'); ?>

<header class="HeaderComponent">
    <div class="header-inner">
        <?php if ($logo) { ?>
        <div class="header-logo">
            <?php echo wp_get_attachment_image($logo['ID'], 'medium'); ?>
        </div>
        <?php } ?>

        <button type="button" class="header-toggle" aria-label="Menu openen" aria-expanded="false" aria-controls="header-menu">
            <i class="fa-solid fa-bars header-toggle-icon-open"></i>
            <i class="fa-solid fa-xmark header-toggle-icon-close"></i>
        </button>

        <section class="headermenu" id="header-menu">
            <?php echo wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => false,
            )); ?>
        </section>
    </div>
</header>