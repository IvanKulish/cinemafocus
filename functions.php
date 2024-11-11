<?php 

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );


    
	// wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
});
?>

<?php
function my_theme_enqueue_scripts() {
    // Регистрируем и подключаем основной скрипт JavaScript для работы с пагинацией
    wp_enqueue_script(
        'script', // Имя скрипта
        get_template_directory_uri() . '/assets/js/script.js', // Путь к файлу script.js
        array('jquery'), // Зависимость от jQuery, если необходимо
        null, // Версия скрипта, можно оставить null для автоматической версии
        true // Подключаем внизу страницы (перед закрывающим </body>)
    );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');
?>
