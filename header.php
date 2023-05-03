<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head() ?>
</head>

<div class="header">
    <div class="logoimg">
        <?php the_custom_logo() ?>
    </div>
    <div class="nav">
        <?php
        wp_nav_menu([
            'theme_location' => 'primary'
        ]);
        ?>
    </div>
</div>

<body>