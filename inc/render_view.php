
<?php
define('VIEWS_DIST', 'templates/components/');

// defining some base urls and paths
define('VIEWS_PATH', get_template_directory() . '/' . VIEWS_DIST);

function render_view($view, $data = [], $return = false){
    extract($data);
    $path =  VIEWS_PATH . $view . '.php';
    if($return){
        ob_start();
        require($path);
        return ob_get_clean();
    } else {
        require($path);
    }        
}