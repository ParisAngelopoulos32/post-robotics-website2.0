<?php // Template name: Home
get_header(); ?>
    <main>
        <?php Hero::display(); ?>
        <?php ContentComponent::display(); ?>
    </main>
<?php get_footer(); ?>