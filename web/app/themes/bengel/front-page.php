<?php // Template name: Home
get_header(); ?>
    <main>
        <?php $title = get_the_title() ?: 'Test' ?>
        <h1 class="text-yellow-500">
            <?php echo $title ?>
        </h1>

        <?php ContentComponent::display(); ?>
    </main>
<?php get_footer(); ?>