function university_files() {

    wp_enqueue_script(
        'main-university-js',
        get_theme_file_uri('/build/index.js'),
        array(),
        '1.0',
        true
    );

    wp_enqueue_style(
        'custom-google-fonts',
        'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&family=Roboto+Condensed:wght@300;400;700&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'font-awesome',
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
        array(),
        '4.7.0'
    );

    wp_enqueue_style(
        'university_main_styles',
        get_theme_file_uri('/build/style-index.css'),
        array(),
        '1.0'
    );

    wp_enqueue_style(
        'university_extra_styles',
        get_theme_file_uri('/build/index.css'),
        array(),
        '1.0'
    );
}

add_action('wp_enqueue_scripts', 'university_files');