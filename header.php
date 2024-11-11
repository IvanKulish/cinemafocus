<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css">
    <title>Cinema Focus</title>

    <?php wp_head(); ?>

</head>
<body>
    <header>
        <div class="logo">
            <img src="wp-content/themes/cinemafocus/assets/images/logo.svg" alt="Логотип Cinema Focus">
        </div>
        <nav class="menu">
            <ul>
                <li><a href="#">Main</a></li>
                <li><a href="#">Novetly</a></li>
                <li><a href="#">Selections</a></li>
                <li><a href="#">Films</a></li>
                <li><a href="#">Serials</a></li>
                <li><a href="#">Recommended</a></li>
            </ul>
        </nav>
        <div class="container">
            <div class="custom-input">
        <input type="text" placeholder="Search">
    </div>
</div>
    </header>