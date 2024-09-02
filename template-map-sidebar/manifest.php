<?php 

error_reporting(E_ALL);
ini_set('display_errors', 'on');
// ini_set('memory_limit', '200M');

header('Content-type: application/json');

require './settings.php';

echo '
{
    "name": "'.$_page_attributes["title"].'",
    "short_name": "'.$_page_attributes["title"].'",
    "start_url": "'.$canonical.'",
    "display": "standalone",
    "background_color": "'.MAIN_COLOR.'",
    "description": "'.$_page_attributes["seo_description"].'",
    "scope": "/geodashboard-v7/snippet/template-map-sidebar/",
    "theme_color": "'.MAIN_COLOR.'",
    "icons": [
        {
            "src": "'.BUCKET.'source/img/geodashboard_2024/android-chrome-192x192.png?ver='.APP_VERSION.'",
            "sizes": "192x192",
            "type": "image/png"
        },
        {
            "src": "'.BUCKET.'source/img/geodashboard_2024/android-chrome-512x512.png?ver='.APP_VERSION.'",
            "sizes": "512x512",
            "type": "image/png"
        }
    ]
}
';
