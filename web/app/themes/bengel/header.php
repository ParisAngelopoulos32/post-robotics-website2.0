<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d70438f273.js" crossorigin="anonymous"></script>

    <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
<?php wp_body_open(); ?>

<?php HeaderComponent::display(); ?>
